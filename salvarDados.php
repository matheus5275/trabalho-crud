<?php

include_once './Conexao.php';
include_once './Camera.php';
$con = new Conexao();
$cam = new Camera();

$cam->setModelo($_POST['modelo']);
$cam->setFabricante($_POST['fabricante']);
$cam->setPreco($_POST['preco']);
$cam->setGarantia($_POST['garantia']);

$sql = "INSERT INTO cameras (modelo,fabricante,preco,garantia)"
        . "VALUES(:modelo, :fabricante, :preco, :garantia)";
$stmt = $con->PDO->prepare($sql);
$stmt->bindParam(':modelo',$cam->getModelo());
$stmt->bindParam(':fabricante',$cam->getFabricante());
$stmt->bindParam(':preco',$cam->getPreco());
$stmt->bindParam(':garantia',$cam->getGarantia());

$result = $stmt->execute();

if(result){
    echo "<script>alert('Dados gravados com sucesso'); location.href = 'index.php'; </script>";
}else{
    echo "<script>alert('Error ao tentar gravar os dados'); location.href = 'index.php'; </script>";
}
