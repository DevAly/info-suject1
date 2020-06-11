<?php

mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('bd111111');



$rq = "SELECT * from etudiant where sexeet = 'Féminin'";
$res = mysql_query($rq);

$cntRq = "SELECT count(*) as countEt from etudiant where sexeet = 'Féminin'";
$resRq = mysql_query($cntRq);
$resRq = mysql_fetch_array($resRq);

?>
<p>Nombre de filles = <?php echo $resRq['countEt'];?></p>
<p>Liste des filles:</p>
<table border="2" width="35%">
	<tr>
		<td>
		<p align="center"><b><font style="font-size: 16pt">Nom</font></b></td>
		<td>
		<p align="center"><b><font style="font-size: 16pt">Prénom</font></b></td>
		<td>
		<p align="center"><b><font style="font-size: 16pt">Section</font></b></td>
	</tr>
	<?php while($result = mysql_fetch_array($res)){ ?>
	<tr>
		<td><?php echo $result['nomet'] ?></td>
		<td><?php echo $result['preet'] ?></td>
		<td><?php echo $result['sectionet'] ?></td>
	</tr>
	<?php } ?>

</table>

<?php 
$rq = "SELECT * from etudiant where sexeet = 'Masculin'";
$res = mysql_query($rq);

$cntRq = "SELECT count(*) as countEt from etudiant where sexeet = 'Masculin'";
$resRq = mysql_query($cntRq);
$resRq = mysql_fetch_array($resRq);

?>
<p>Nombre de garcons = <?php echo $resRq['countEt'];?></p>
<p>Liste des garcons :</p>
<table border="2" width="35%">
	<tr>
		<td>
		<p align="center"><b><font style="font-size: 16pt">Nom</font></b></td>
		<td>
		<p align="center"><b><font style="font-size: 16pt">Prénom</font></b></td>
		<td>
		<p align="center"><b><font style="font-size: 16pt">Section</font></b></td>
	</tr>

	<?php while($result = mysql_fetch_array($res)){ ?>
	<tr>
		<td><?php echo $result['nomet'] ?></td>
		<td><?php echo $result['preet'] ?></td>
		<td><?php echo $result['sectionet'] ?></td>
	</tr>
	<?php } ?>

</table>

<?php

mysql_close();

?>