<?php 
$Info = "mysql:host=164.152.60.89;dbname=Punk_Studios;charset=utf8mb4";
$username = "SitePunk";
$password = "uL6pFlABMywsVvve";

try{
$connectPunk_Studios = new PDO($Info, $username, $password);
}catch(PDOException $err){
echo "Erro: ".$err->getCode()."Menssage: ".$err->getMessage();
}
?>