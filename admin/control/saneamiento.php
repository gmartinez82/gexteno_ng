<?php
return;
include_once "_autoload.php";

if(Gral::controlUrl($_SERVER["QUERY_STRING"], 'get') === true){
    header("Location: index.php");
}
?>