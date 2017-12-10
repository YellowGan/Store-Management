<!DOCTYPE html>
<HTML>
	<?php include('../conn.php') ?>
    <HEAD>
	   <TITLE>MAGAZZINO</TITLE>
    </HEAD>
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
                    <form action="add_product_db.php" method="post">
                    <center><fieldset>
                    <center><legend><font size="4" color="white">&nbsp &nbsp Dati del prodotto:</font></legend></center>
                    <br>
                    <font color="white">* Nome:</font>
                    <br>
                    <input type="text" name="nameproduct" maxlength="15" placeholder="Inserire il nome">
                    <br>
                    <font color="white">* Costo:</font>
                    <br>
                    <input type="text" name="prizeproduct" maxlength="15" placeholder="Inserire il costo">
                    <br>
                    <font color="white">* Misura:</font><br>
                    <input type="text" name="misuraproduct" maxlength="15" placeholder="Inserire la misura">
                    <br>
                    <font color="white">* Colore:</font>
                    <br>
                    <input type="text" name="coloreproduct" maxlength="15" placeholder="Inserire il colore">
                    <br>
                    <font color="white">* Descrizione:</font>
                    <br>
                    <textarea type="text" name="descrizioneproduct" maxlength="500" placeholder="Inserire la descrizione"></textarea>
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Aggiungi">
                    </fieldset></center>
                    </form>
                </div>
            </div>
            <div class="copy"><small>Design by <a href="#" title="#">Salvatore Gangemi</a></small></p></div>
        </div>
    </BODY>
</HTML>