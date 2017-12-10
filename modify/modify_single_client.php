<!DOCTYPE html>
<HTML>
    <HEAD>
	   <TITLE>CLIENTI</TITLE>
    </HEAD>
    <BODY>
        <?php
        include('../conn.php');
        if (isset($_GET['id_c']))
        {
            $id_c=$_GET['id_c'];
        }
        else
        {
            $id_c=-1;
        }
        $result= mysql_query ("SELECT * FROM cliente WHERE id_c=\"$id_c\"");
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
                    <form method="POST" action="modify_single_client_db.php">
                    <center><fieldset>
                    <center><legend><font size="4" color="white">&nbsp &nbsp Dati del cliente:</font></legend></center>
                    <?php 
                    $result= mysql_query ("SELECT * FROM cliente WHERE id_c=\"$id_c\"");
                    $row= mysql_fetch_array($result);
                    ?>
                    <br>
                    <font color="white">ID Cliente:</font>
                    <br>
                    <input type="text" disabled="disabled" maxlength="15" name="ordine" value=<?php echo "'".htmlspecialchars($row['id_c'])."'"; ?> name="IdCliente">
                    <br>
                    <font color="white">* Nome:</font>
                    <br>
                    <input type="hidden" name="id_c" value="<?php echo $id_c; ?>">
                    <input type="text" maxlength="15" name="nameclient" placeholder="Nome cliente" value=<?php echo "'".htmlspecialchars($row['nome_c'])."'"; ?> name="NomeCliente">
                    <br>
                    <font color="white">* Cognome:</font>
                    <br>
                    <input type="text" maxlength="15" name="surnameclient" placeholder="Cognome cliente" value=<?php echo "'".htmlspecialchars($row['cognome_c'])."'"; ?> name="CognomeCliente">
                    <br>
                    <font color="white">* Telefono:</font>
                    <br>
                    <input type="tel" name="phoneclient" maxlength="12" placeholder="Telefono cliente" value=<?php echo "'".htmlspecialchars($row['telefono_c'])."'"; ?> name="TelefonoCliente">
                    <br>
                    <font color="white">* Indirizzo:</font><br>
                    <input type="text" name="addressclient" maxlength="30" placeholder="Indirizzo cliente" value=<?php echo "'".htmlspecialchars($row['indirizzo_c'])."'"; ?> name="IndirizzoCliente">
                    <br>
                    <font color="white">E-mail:</font>
                    <br>
                    <input type="email" name="mailclient" maxlength="40" placeholder="Mail cliente" value=<?php echo "'".htmlspecialchars($row['mail_c'])."'"; ?> name="MailCliente">
                    <br>
                    <font color="white">* Stato:</font>
                    <br>
                    <input type="text" name="statoclient" maxlength="15" placeholder="Stato cliente" value=<?php echo "'".htmlspecialchars($row['stato_c'])."'"; ?> name="StatoCliente">
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Modifica">
                    </fieldset></center>
                    </form>
                </div>
            </div>
            <div class="copy"><small>Design by <a href="#" title="#">Salvatore Gangemi</a></small></p></div>
        </div>
    </BODY>
</HTML>