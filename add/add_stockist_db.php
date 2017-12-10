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
                    <?php
                    $NamePattern = "^[a-zA-Z]{2,20}$";
                    $NumberPattern = "^(\+)?[0-9]{8,15}$";
                    if (empty($_POST['namestockist']) OR empty($_POST['pistockist']) OR empty($_POST['statostockist']) OR empty($_POST['phonestockist']) OR empty($_POST['addressstockist']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Tutti i campi con '*' devono essere completati!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='add_stockist.php'">
                    </form>
                    <?php
                    die;
                    }
                    if (!ereg($NamePattern, $_POST['namestockist']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Il campo 'Nome' non è scritto nel formato corretto!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='add_stockist.php'">
                    </form>
                    <?php
                    die;
                    }
                    if (!ereg($NamePattern, $_POST['statostockist']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Il campo 'Stato' non è scritto nel formato corretto!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='add_stockist.php'">
                    </form>
                    <?php
                    die;
                    }
                    if (!ereg($NumberPattern, $_POST['phonestockist']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Il campo 'Numero telefonico' non è scritto nel formato corretto!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='add_stockist.php'">
                    </form>
                    <?php
                    die;
                    }
                    else
                    {
                    echo "<center>Dati scritti correttamente nel database<center>";
                        $nome_fornitore = $_POST["namestockist"];
                        $partitaiva_fornitore = $_POST["pistockist"];
                        $telefono_fornitore = $_POST["phonestockist"];
                        $indirizzo_fornitore = $_POST["addressstockist"];
                        $mail_fornitore = $_POST["mailstockist"];
                        $stato_fornitore = $_POST["statostockist"];
                        $query="INSERT INTO fornitore (nome_f, telefono_f, indirizzo_f, mail_f, pi_f, stato_f) VALUES ('".$nome_fornitore."','".$telefono_fornitore."','".$indirizzo_fornitore."','".$mail_fornitore."','".$partitaiva_fornitore."','".$stato_fornitore."')";
                        mysql_query($query);
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='../stockist.php'">
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