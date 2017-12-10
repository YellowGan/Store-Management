<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>VENDITE</TITLE>
	</HEAD>
	<BODY>
		<script type="text/javascript" src="../jquery.js"></script>
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<link href="../stile.css" rel="stylesheet" type="text/css">
		<div class="main">
			<div class="header">
				<form action="../index.html" target="_self">
				<div class="title">Gestione magazzino</div>
				<input name="HomePage" type="image" src="../img/homepage.png" alt="HomePage" title="HomePage" width="50px" height="50px">
				</form>
			</div>
			<div class="content">
				<div class="col1">
					<div class="subtitle">Anagrafica</div>
					<div class="subtitle2">
					<button class="button" onclick="location.href='../client.php'">Clienti</button>
					<br><br>
					<button class="button" onclick="location.href='../stockist.php'">Fornitori</button>
					</div>
				</div>
				<div class="col3">
					<div class="subtitle">Prodotti</div>
					<div class="subtitle2">
					<button class="button" onclick="location.href='../store.php'">Magazzino</button>
					<br><br>
					<button class="button" onclick="location.href='../buy.php'">Acquisti</button>
					<br><br>
					<button class="button" onclick="location.href='../sell.php'">Vendite</button>
					<br><br>
					<button class="button" onclick="location.href='../bill.php'">Fatture</button>
					</div>
				</div>
				<div class="col2">
					<br>
					<?php  
					include('../conn.php');
					if (empty($_POST['fattura']))
					{
    				echo "<center>ERRORE: Nessun dato scritto nel database.<br>Tutti i campi con '*' devono essere completati!</center>";
    				?>
    				<br><br>
    				<form action="#">
        			<input type="button" name="submit" value="Ok" onclick="location.href='modify_bill_sell.php'">
    				</form>
    				<?php
    				die;
					}
					else
					{
    				echo "<center>Dati scritti correttamente nel database<center>";
    				$data_fattura = $_POST["data_fattura"];
    				$temp = explode('/', $data_fattura);
    				$data_fattura = $temp[2]."-".$temp[0]."-".$temp[1];
    				$id_ordine = $_POST['id_ordine'];
    				$fattura = $_POST["fattura"];
    				$query="UPDATE ordine_vendita SET data_fattura_v = '".$data_fattura."' WHERE id_v = '".$id_ordine."'";
    				mysql_query($query); 
    				$query="UPDATE ordine_vendita SET fattura_v = '".$fattura."' WHERE id_v = '".$id_ordine."'";
    				mysql_query($query);
					}
					?>
					<br>
    				<form action="#">
        			<input type="button" name="submit" value="Ok" onclick="location.href='../sell.php'">
    				</form>
				</div>
			</div>	
			<div class="copy"><small>Design by <a href="#" title="#">Salvatore Gangemi</a></small></p></div>
		</div>
	</BODY>
</HTML>