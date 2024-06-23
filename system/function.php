<?php

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
    } elseif ($page=='persona') {
        require_once("frontend/pages/persona.php");
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