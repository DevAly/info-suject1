<?php

mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('bd111111');
$numEt = $_POST['T1'];
$nomEt = $_POST['T2'];
$preEt = $_POST['T3'];
$mailEt = $_POST['T4'];
$sexeEt = $_POST['R1'];
$secEt = $_POST['D1'];
$commentEt = $_POST['S1'];

$rq = "SELECT * from etudiant where numet = '$numEt'";
$res = mysql_query($rq);

if(mysql_num_rows($res) != 0){
  echo "Etudiant existe déja!";
}else{
  $insertQuery = "INSERT INTO etudiant values('$numEt', '$nomEt', '$preEt', '$mailEt', '$sexeEt', '$secEt', '$commentEt')";
  $insertRes = mysql_query($insertQuery);
  echo 'Etudiant ajouté avec succés!';
}


mysql_close();
?>