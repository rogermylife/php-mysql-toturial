<?php

require_once ('connect.php');

echo "select one data\n";
echo "--------------------\n";
$sql="SELECT * FROM ctfquestions WHERE id=?";
$stm = $pdo->prepare($sql);
$stm->execute(array(rand()%10000));
$result = $stm->fetch(PDO::FETCH_ASSOC);
var_dump($result);

echo "select all data\n";
echo "--------------------\n";
$sql="SELECT * FROM ctfquestions WHERE id < 5";
$stm = $pdo->prepare($sql);
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);

echo "itrater data\n";
echo "--------------------\n";
$sql="SELECT * FROM ctfquestions WHERE id > 9995";
$stm = $pdo->prepare($sql);
$stm->execute();

foreach($stm->fetchAll() as $row)
    var_dump($row);

$stm->execute();
while($row = $stm->fetch())
    var_dump($row);
