<?php
// $user_id = $_SESSION['loggedin'];

function getConfiguration($conn){
    $query = "SELECT * FROM `configuration` ";
    $result = mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
    return $row;
}

function getPages(){
if (isset($_GET['page']))   {
    $page = $_GET['page'];
    if ($page=='index') {
        require_once("frontend/pages/index.php");
    }elseif ($page=='dashboard') {
        require_once("frontend/pages/dashboard.php");
    } elseif ($page=='trade') {
        require_once("frontend/pages/trade.php");
    } elseif ($page=='reserch') {
        require_once("frontend/pages/reserch.php");
    }elseif($page=='register') {
        require_once("frontend/pages/register.php");}
    elseif ($page=='login') {
        require_once("frontend/pages/login.php");
    }elseif ($page=='logout') {
        session_destroy();
        require_once("frontend/pages/index.php");
    }
    else {
        require_once("frontend/pages/notFound.php");
    }   
    
} else {
     require_once("frontend/pages/index.php");
    
 }
 
}


function getUserBalance($mysqli, $user_id) {
    $query = "SELECT balance FROM user_balance WHERE user_id = $user_id";
    $result = $mysqli->query($query);
    return $result->fetch_assoc()['balance'];
}

function getUserPortfolio($mysqli, $user_id) {
    $query = "
        SELECT stocks.symbol, portfolio.quantity, portfolio.average_price 
        FROM portfolio 
        JOIN stocks ON portfolio.stock_id = stocks.stock_id 
        WHERE portfolio.user_id = $user_id
    ";
    $result = $mysqli->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getUserTransactions($mysqli, $user_id, $limit = 5) {
    $query = "
        SELECT transactions.transaction_type, transactions.quantity, transactions.price, transactions.transaction_date, stocks.symbol 
        FROM transactions 
        JOIN stocks ON transactions.stock_id = stocks.stock_id 
        WHERE transactions.user_id = $user_id 
        ORDER BY transactions.transaction_date DESC 
        LIMIT $limit
    ";
    $result = $mysqli->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
}
?>
