<?php

mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('bd111111');
$numEt = $_POST['T1'];


$rq = "SELECT * from etudiant where numet = '$numEt'";
$res = mysql_query($rq);

if(mysql_num_rows($res) != 0){
  $insertQuery = "DELETE FROM etudiant WHERE numet = '$numEt' ";
  $insertRes = mysql_query($insertQuery);
  echo "Etudiant supprimer avec avec succés!";
}else{
  
  echo 'Impossible de supprimer un étuydiant inexistant';
}


mysql_close();
?>