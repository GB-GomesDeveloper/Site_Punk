<?php 
$Info = "";
$username = "";
$password = "";

try{
$connectPunk_Studios = new PDO($Info, $username, $password);
}catch(PDOException $err){
echo "Erro: ".$err->getCode()."Menssage: ".$err->getMessage();
}
?>
