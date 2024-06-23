<?php

require_once("system/function.php");
require_once("system/config.php");

if ($maintenance==1) {
    echo "this site is curently under maintenance, please check back later.";
} else {
    
   getPages();
}
?>

