<!DOCTYPE html>
<HTML>
    <?php include('../conn.php') ?>
    <HEAD>
	   <TITLE>ACQUISTI</TITLE>
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
                    $NumberPattern = "^(\+)?[0-9]{8,15}$";
                    if (empty($_POST['dataOrd']) OR empty($_POST['totaleAcq']))
                    {
                    echo "<center>ERRORE: Nessun dato scritto nel database.<br>Tutti i campi con '*' devono essere completati!</center>";
                    ?>
                    <br><br>
                    <form action="#">
                    <input type="button" name="submit" value="Ok" onclick="location.href='add_buy.php'">
                    </form>
                    <?php
                    die;
                    }
                    else
                    {
                    echo "<center>Dati scritti correttamente nel database<center>";
                        $data_ordine = $_POST["dataOrd"];
                        $temp = explode('/', $data_ordine);
                        $data_ordine = $temp[2]."-".$temp[0]."-".$temp[1];
                        $id_fornitore = $_POST["selectFornitore"];
                        $totale_speso = $_POST["totaleAcq"];
                        $numProd = $_POST["numProd"];
                        $id_prodotto = array();
                        for($i = 0; $i < $numProd; $i++)
                        {
                            $productId = "selectProdotto".$i;
                            $id_prodotto[$i] = $_POST[$productId];
                        }
                        $quantita_prodotto = array();
                        for($i = 0; $i < $numProd; $i++)
                        {
                            $quantita_prodottoString = "quantitaProdotto".$i;
                            $quantita_prodotto[$i] = $_POST[$quantita_prodottoString];
                        }
                        $query="INSERT INTO ordine_acquisto (data_a, id_f, totale_a) VALUES ('".$data_ordine."','".$id_fornitore."','".$totale_speso."')";
                        mysql_query($query);
                        $id_acquisto = mysql_insert_id();
                        for($i = 0; $i < $numProd; $i++)
                        {
                            $query2="INSERT INTO acquistare (id_p, id_a, quantita_p) VALUES ('".$id_prodotto[$i]."','".$id_acquisto."','".$quantita_prodotto[$i]."')";
                            mysql_query($query2);
                            $query3="UPDATE magazzino SET quantita_p = quantita_p + ".$quantita_prodotto[$i]." WHERE id_p = '".$id_prodotto[$i]."'";
                            mysql_query($query3);
                        }
                        ?>
                        <br><br>
                        <form action="#">
                        <input type="button" name="submit" value="Ok" onclick="location.href='../buy.php'">
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