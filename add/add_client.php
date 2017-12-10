<!DOCTYPE html>
<HTML>
	<?php include('../conn.php') ?>
    <HEAD>
	   <TITLE>CLIENTI</TITLE>
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
                    <form action="add_client_db.php" method="post">
                    <center><fieldset>
                    <center><legend><font size="4" color="white">&nbsp &nbsp Dati del cliente:</font></legend></center>
                    <br>
                    <font color="white">* Nome:</font>
                    <br>
                    <input type="text" name="nameclient" maxlength="15" placeholder="Inserire il nome">
                    <br>
                    <font color="white">* Cognome:</font>
                    <br>
                    <input type="text" name="surnameclient" maxlength="15" placeholder="Inserire il cognome">
                    <br>
                    <font color="white">* Telefono:</font>
                    <br>
                    <input type="tel" name="phoneclient" maxlength="15" placeholder="Inserire il n° telefonico">
                    <br>
                    <font color="white">* Indirizzo:</font>
                    <br>
                    <input type="text" name="addressclient" maxlength="30" placeholder="Inserire l'indirizzo">
                    <br>
                    <font color="white">E-mail:</font>
                    <br>
                    <input type="email" name="mailclient" maxlength="40" placeholder="Inserire l'e-mail">
                    <br>
                    <font color="white">* Stato:</font>
                    <br>
                    <input type="text" name="statoclient" maxlength="15" placeholder="on / off">
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