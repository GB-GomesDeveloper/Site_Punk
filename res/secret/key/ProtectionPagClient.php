<?php 
session_start();
if(!isset($_SESSION["discord_Data"])){
    header("location: ../../public/loja");
    exit();
}
?>

