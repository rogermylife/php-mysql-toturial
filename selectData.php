<?php

require_once ('connect.php');

$sql="SELECT * FROM ctfquestions WHERE id=?";
$stm = $pdo->prepare($sql);
$stm->execute(array(rand()%10000));
$result = $stm->fetch(PDO::FETCH_ASSOC);
var_dump($result);
