<!DOCTYPE html>
<HTML>
	<?php include('../conn.php') ?>
    <HEAD>
	   <TITLE>FORNITORI</TITLE>
    </HEAD>
    <BODY>
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
                    <form action="add_stockist_db.php" method="post">
                    <center><fieldset>
                    <center><legend><font size="4" color="white">&nbsp &nbsp Dati del fornitore:</font></legend></center>
                    <br>
                    <font color="white">* Nome:</font>
                    <br>
                    <input type="text" name="namestockist" maxlength="15" placeholder="Inserire il nome">
                    <br>
                    <font color="white">* Telefono:</font>
                    <br>
                    <input type="tel" name="phonestockist" maxlength="15" placeholder="Inserire il n° telefonico">
                    <br>
                    <font color="white">* Indirizzo:</font><br>
                    <input type="text" name="addressstockist" maxlength="30" placeholder="Inserire l'indirizzo">
                    <br>
                    <font color="white">E-mail:</font>
                    <br>
                    <input type="email" name="mailstockist" maxlength="40" placeholder="Inserire l'e-mail">
                    <br>
                    <font color="white">* Partita Iva:</font>
                    <br>
                    <input type="text" name="pistockist" maxlength="15" placeholder="Inserire la P.IVA">
                    <br>
                    <font color="white">* Stato:</font>
                    <br>
                    <input type="text" name="statostockist" maxlength="15" placeholder="on / off">
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