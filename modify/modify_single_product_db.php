<!DOCTYPE html>
<HTML>
	<?php include('../conn.php');?>
    <HEAD>
	   <TITLE>MAGAZZINO</TITLE>
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
                    $NamePattern = "^[a-zA-Z]{3,20}$";
                    $NumberPattern = "^(\+)?[0-9]{1,15}$";
                    if (empty($_POST['nameproduct']) OR empty($_POST['prizeproduct']) OR empty($_POST['misuraproduct']) OR empty($_POST['coloreproduct']) OR empty($_POST['descrizioneproduct']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Tutti i campi con '*' devono essere completati!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='modify_product.php'">
                    </form>
                    <?php
                    die;
                    }
                    if (!ereg($NamePattern, $_POST['nameproduct']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Il campo 'Nome' non è scritto nel formato corretto!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='modify_product.php'">
                    </form>
                    <?php
                    die;
                    }
                    if (!ereg($NamePattern, $_POST['coloreproduct']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Il campo 'Colore' non è scritto nel formato corretto!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='modify_product.php'">
                    </form>
                    <?php
                    die;
                    }
                    if (!ereg($NumberPattern, $_POST['prizeproduct']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Il campo 'Costo' non è scritto nel formato corretto!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='modify_product.php'">
                    </form>
                    <?php
                    die;
                    }
                    else
                    {
                    echo "<center>Dati scritti correttamente nel database<center>";
                        $id_prodotto = $_POST['id_p'];
                        $nome_prodotto = $_POST["nameproduct"];
                        $costo_prodotto = $_POST["prizeproduct"];
                        $misura_prodotto = $_POST["misuraproduct"];
                        $colore_prodotto = $_POST["coloreproduct"];
                        $descrizione_prodotto = $_POST["descrizioneproduct"];
                        $query1="UPDATE magazzino SET nome_p=\"$nome_prodotto\" WHERE id_p=\"$id_prodotto\"";
                        $query2="UPDATE magazzino SET costo_p=\"$costo_prodotto\" WHERE id_p=\"$id_prodotto\"";
                        $query3="UPDATE magazzino SET misura_p=\"$misura_prodotto\" WHERE id_p=\"$id_prodotto\"";
                        $query4="UPDATE magazzino SET colore_p=\"$colore_prodotto\" WHERE id_p=\"$id_prodotto\"";
                        $query5="UPDATE magazzino SET descrizione=\"$descrizione_prodotto\" WHERE id_p=\"$id_prodotto\"";
                        mysql_query($query1);
                        mysql_query($query2);
                        mysql_query($query3);
                        mysql_query($query4);
                        mysql_query($query5);
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='../store.php'">
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