<?php
include 'system\config.php';

function sellStock($userId, $stockId, $quantity) {
    global $conn;

    // Get stock price
    $stockQuery = "SELECT current_price FROM stocks WHERE stock_id = ?";
    $stmt = $conn->prepare($stockQuery);
    $stmt->bind_param("i", $stockId);
    $stmt->execute();
    $result = $stmt->get_result();
    $stock = $result->fetch_assoc();
    $price = $stock['current_price'];

    // Calculate total value
    $totalValue = $price * $quantity;

    // Check user's portfolio
    $portfolioQuery = "SELECT quantity FROM portfolio WHERE user_id = ? AND stock_id = ?";
    $stmt = $conn->prepare($portfolioQuery);
    $stmt->bind_param("ii", $userId, $stockId);
    $stmt->execute();
    $result = $stmt->get_result();
    $portfolio = $result->fetch_assoc();

    if ($portfolio['quantity'] >= $quantity) {
        // Update user's portfolio
        $newQuantity = $portfolio['quantity'] - $quantity;
        if ($newQuantity > 0) {
            $updatePortfolioQuery = "UPDATE portfolio SET quantity = ?, total_value = ? WHERE user_id = ? AND stock_id = ?";
            $stmt = $conn->prepare($updatePortfolioQuery);
            $stmt->bind_param("idii", $newQuantity, $newQuantity * $price, $userId, $stockId);
        } else {
            $updatePortfolioQuery = "DELETE FROM portfolio WHERE user_id = ? AND stock_id = ?";
            $stmt = $conn->prepare($updatePortfolioQuery);
            $stmt->bind_param("ii", $userId, $stockId);
        }
        $stmt->execute();

        // Add to user's cash
        $balanceQuery = "SELECT cash FROM user_balance WHERE user_id = ?";
        $stmt = $conn->prepare($balanceQuery);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        $balance = $result->fetch_assoc();
        $newCash = $balance['cash'] + $totalValue;

        $updateBalanceQuery = "UPDATE user_balance SET cash = ? WHERE user_id = ?";
        $stmt = $conn->prepare($updateBalanceQuery);
        $stmt->bind_param("di", $newCash, $userId);
        $stmt->execute();

        // Record transaction
        $transactionQuery = "INSERT INTO transactions (user_id, stock_id, transaction_type, quantity, price, transaction_date) VALUES (?, ?, 'SELL', ?, ?, NOW())";
        $stmt = $conn->prepare($transactionQuery);
        $stmt->bind_param("iiid", $userId, $stockId, $quantity, $price);
        $stmt->execute();

        echo "Stock sold successfully.";
    } else {
        echo "Insufficient stocks in portfolio.";
    }
}

$userId = 10; // Example user ID
$stockId = 1; // Example stock ID
$quantity = 2; // Example quantity to sell

sellStock($userId, $stockId, $quantity);
?>
