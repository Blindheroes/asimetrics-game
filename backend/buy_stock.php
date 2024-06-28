<?php
include 'system\config.php';

function buyStock($userId, $stockId, $quantity) {
    global $conn;

    // Get stock price
    $stockQuery = "SELECT current_price FROM stocks WHERE stock_id = ?";
    $stmt = $conn->prepare($stockQuery);
    $stmt->bind_param("i", $stockId);
    $stmt->execute();
    $result = $stmt->get_result();
    $stock = $result->fetch_assoc();
    $price = $stock['current_price'];

    // Calculate total cost
    $totalCost = $price * $quantity;

    // Check user's balance
    $balanceQuery = "SELECT cash FROM user_balance WHERE user_id = ?";
    $stmt = $conn->prepare($balanceQuery);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $balance = $result->fetch_assoc();

    if ($balance['cash'] >= $totalCost) {
        // Deduct from user's cash
        $newCash = $balance['cash'] - $totalCost;
        $updateBalanceQuery = "UPDATE user_balance SET cash = ? WHERE user_id = ?";
        $stmt = $conn->prepare($updateBalanceQuery);
        $stmt->bind_param("di", $newCash, $userId);
        $stmt->execute();

        // Add to user's portfolio
        $portfolioQuery = "INSERT INTO portfolio (user_id, stock_id, quantity, total_value, created_at) VALUES (?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($portfolioQuery);
        $stmt->bind_param("iiid", $userId, $stockId, $quantity, $totalCost);
        $stmt->execute();

        // Record transaction
        $transactionQuery = "INSERT INTO transactions (user_id, stock_id, transaction_type, quantity, price, transaction_date) VALUES (?, ?, 'BUY', ?, ?, NOW())";
        $stmt = $conn->prepare($transactionQuery);
        $stmt->bind_param("iiid", $userId, $stockId, $quantity, $price);
        $stmt->execute();

        echo "Stock purchased successfully.";
    } else {
        echo "Insufficient balance.";
    }
}

$userId = 10; // Example user ID
$stockId = 1; // Example stock ID
$quantity = 5; // Example quantity to buy

buyStock($userId, $stockId, $quantity);
?>
