<!DOCTYPE html>
<HTML>
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
                    <form method="POST" action="../buy.php">
                    <center><fieldset id="buy">
                    <center><legend><font size="4" color="white">&nbsp &nbsp Dati dell'ordine:</font></legend></center>
                    <?php 
                    $result= mysql_query ("SELECT ordine_acquisto.id_a, ordine_acquisto.data_a, ordine_acquisto.fattura_a, ordine_acquisto.data_fattura_a, ordine_acquisto.totale_a, fornitore.nome_f, acquistare.id_p, acquistare.quantita_p FROM (ordine_acquisto LEFT JOIN acquistare ON acquistare.id_a=ordine_acquisto.id_a) INNER JOIN fornitore ON fornitore.id_f=ordine_acquisto.id_f WHERE ordine_acquisto.id_a=\"$id_a\"");
                    $row= mysql_fetch_array($result);
                    ?>
                    <br>
                    <font color="white">ID Ordine:</font>
                    <br>
                    <input type="text" disabled="disabled" maxlength="15" name="idordine" value=<?php echo "'".htmlspecialchars($row['id_a'])."'"; ?> name="idordine">
                    <br>
                    <font color="white">Data Ordine:</font>
                    <br>
                    <input type="hidden" name="id_a" value="<?php echo $id_a; ?>">
                    <input type="text" disabled="disabled" maxlength="15" name="dataordine" placeholder="data ordine" value=<?php echo "'".htmlspecialchars($row['data_a'])."'"; ?> name="dataordine">
                    <br>
                    <font color="white">Fattura:</font>
                    <br>
                    <input type="text" disabled="disabled" maxlength="15" name="fattura" placeholder="fattura" value=<?php echo "'".htmlspecialchars($row['fattura_a'])."'"; ?> name="fattura">
                    <br>
                    <font color="white">Data Fattura:</font>
                    <br>
                    <input type="tel" name="datafattura" disabled="disabled" maxlength="12" placeholder="data fattura" value=<?php echo "'".htmlspecialchars($row['data_fattura_a'])."'"; ?> name="datafattura">
                    <br>
                    <font color="white">Fornitore:</font><br>
                    <input type="text" name="fornitore" disabled="disabled" maxlength="30" placeholder="fornitore" value=<?php echo "'".htmlspecialchars($row['nome_f'])."'"; ?> name="fornitore">
                    <br><br>
                    <?php
                    $num=mysql_num_rows($result);
                    while ($num>0)
                    {
                    ?>
                    <font color="white">Prodotto:</font>&nbsp&nbsp
                    <input type="email" name="prodotto" disabled="disabled" maxlength="40" placeholder="prodotto" value=<?php echo "'".htmlspecialchars($row['id_p'])."'"; ?> name="prodotto">
                    &nbsp&nbsp
                    <font color="white">Quantità:</font>
                    <input type="text" name="quantita" disabled="disabled" maxlength="15" placeholder="quantità" value=<?php echo "'".htmlspecialchars($row['quantita_p'])."'"; ?> name="quantita">
                    <br>
                    <?php
                    $row= mysql_fetch_array($result);
                    $num--;
                    }
                    ?>
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Torna Indietro">
                    </fieldset></center>
                    </form>
                </div>
            </div>
            <div class="copy"><small>Design by <a href="#" title="#">Salvatore Gangemi</a></small></p></div>
        </div>
    </BODY>
</HTML>