<!DOCTYPE html>
<HTML>
	<?php include('../conn.php');?>
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
                    <?php
                    $NamePattern = "^[a-zA-Z]{2,20}$";
                    $NumberPattern = "^(\+)?[0-9]{8,15}$";
                    if (empty($_POST['nameclient']) OR empty($_POST['surnameclient']) OR empty($_POST['statoclient']) OR empty($_POST['phoneclient']) OR empty($_POST['addressclient']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Tutti i campi con '*' devono essere completati!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='modify_client.php'">
                    </form>
                    <?php
                    die;
                    }
                    if (!ereg($NamePattern, $_POST['nameclient']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Il campo 'Nome' non è scritto nel formato corretto!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='modify_client.php'">
                    </form>
                    <?php
                    die;
                    }
                    if (!ereg($NamePattern, $_POST['surnameclient']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Il campo 'Cognome' non è scritto nel formato corretto!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='modify_client.php'">
                    </form>
                    <?php
                    die;
                    }
                    if (!ereg($NamePattern, $_POST['statoclient']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Il campo 'Stato' non è scritto nel formato corretto!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='modify_client.php'">
                    </form>
                    <?php
                    die;
                    }
                    if (!ereg($NumberPattern, $_POST['phoneclient']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Il campo 'Numero telefonico' non è scritto nel formato corretto!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='modify_client.php'">
                    </form>
                    <?php
                    die;
                    }
                    else
                    {
                    echo "<center>Dati scritti correttamente nel database<center>";
                        $id_cliente = $_POST['id_c'];
                        $nome_cliente = $_POST["nameclient"];
                        $cognome_cliente = $_POST["surnameclient"];
                        $telefono_cliente = $_POST["phoneclient"];
                        $indirizzo_cliente = $_POST["addressclient"];
                        $mail_cliente = $_POST["mailclient"];
                        $stato_cliente = $_POST["statoclient"];
                        $query1="UPDATE cliente SET nome_c=\"$nome_cliente\" WHERE id_c=\"$id_cliente\"";
                        $query2="UPDATE cliente SET cognome_c=\"$cognome_cliente\" WHERE id_c=\"$id_cliente\"";
                        $query3="UPDATE cliente SET telefono_c=\"$telefono_cliente\" WHERE id_c=\"$id_cliente\"";
                        $query4="UPDATE cliente SET indirizzo_c=\"$indirizzo_cliente\" WHERE id_c=\"$id_cliente\"";
                        $query5="UPDATE cliente SET mail_c=\"$mail_cliente\" WHERE id_c=\"$id_cliente\"";
                        $query6="UPDATE cliente SET stato_c=\"$stato_cliente\" WHERE id_c=\"$id_cliente\"";
                        mysql_query($query1);
                        mysql_query($query2);
                        mysql_query($query3);
                        mysql_query($query4);
                        mysql_query($query5);
                        mysql_query($query6);
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='../client.php'">
                    </form>
                    <?php
                    die;
                    }
                    ?>
                </div>
            </div>
            <div class="copy"><small>Design by <a href="#" title="#">Salvatore Gangemi</a></small></p></div>
        </div>
    </BODY>
</HTML>