<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>ACQUISTI</TITLE>
	</HEAD>
	<BODY>
		<script type="text/javascript" src="../jquery.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    	<?php
		include('../conn.php');
		if (isset($_GET['id_a']))
    	{
		$id_a=$_GET['id_a'];
		}
    	else
    	{
		$id_a=-1;
		}
    	$result= mysql_query ("SELECT * FROM ordine_acquisto WHERE id_a=\"$id_a\"");
    	$row=mysql_fetch_array($result);
		?>
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
					<form method="POST" action="modify_single_bill_buy_db.php">
        			<center><fieldset>
        			<center><legend><font size="4" color="white">&nbsp &nbsp Dati della fattura dell'ordine:</font></legend></center>
        			<br>
        			<font color="white">ID Ordine:</font>&nbsp&nbsp
        			<input type="text" disabled="disabled" maxlength="15" name="id_ordine" value=<?php echo "'".htmlspecialchars($row['id_a'])."'"; ?>>
        			<input type="hidden" name="id_ordine" value=<?php echo "'".htmlspecialchars($row['id_a'])."'"; ?>>
        			<br><br>
        			<font color="white">* Data Fattura:</font>&nbsp&nbsp
          			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
          			<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
          			<link rel="stylesheet" href="/resources/demos/style.css">
          			<script>
          			$(function() {
            		$( "#datepicker" ).datepicker();
          			});
          			</script>
					<input id="datepicker" name="data_fattura" />
          			<br><br>
        			<font color="white">* Fattura (si / no):</font>&nbsp&nbsp
        			<input type="text" maxlength="15" name="fattura" placeholder="fattura (si/no)" value=<?php echo "'".htmlspecialchars($row['fattura_a'])."'"; ?> name="Fattura">
        			<br>
        			<br>
        			<input type="submit" name="submit" value="Fattura">
        			</fieldset></center>
    				</form>
				</div>
			</div>
			<div class="copy"><small>Design by <a href="#" title="#">Salvatore Gangemi</a></small></p></div>
		</div>
	</BODY>
</HTML>