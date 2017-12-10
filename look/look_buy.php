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
                    <div class="pulsanti">
                    <form id="pulsante" action="#">
                    <input type="button" name="submit" value="Aggiungi acquisto" onclick="location.href='../add/add_buy.php'">
                    </form>
                    </div>
                    <table border="1px" align="center" width="900px">
                        <tr id="headerriga" align="center">
                            <th id="headertableft"><font width="78px" color="white">ID Ordine</font></th>
                            <th id="headertab"><font width="208px" color="white">Data Ordine</font></th>
                            <th id="headertab"><font width="208px" color="white">Fattura</font></th>
                            <th id="headertab"><font width="143px" color="white">Data Fattura</font></th>
                            <th id="headertab"><font width="260px" color="white">ID Fornitore</font></th>
                            <th id="headertabright"><font width="78px" color="white">Costo totale</font></th>
                        </tr>
                    <?php
                    $query="SELECT * FROM ordine_acquisto";
                    $risultati=mysql_query($query);
                    $num=mysql_num_rows($risultati);
                    $i=0;
                    while ($i < $num)
                    {
                        $idordinea[$i]=mysql_result($risultati,$i,"id_a");
                        $quantitaordinea[$i]=mysql_result($risultati,$i,"totale_a");
                        $dataa[$i]=mysql_result($risultati,$i,"data_a");
                        $fatturaa[$i]=mysql_result($risultati,$i,"fattura_a");
                        $datafatturaa[$i]=mysql_result($risultati,$i,"data_fattura_a");
                        $idfornitore[$i]=mysql_result($risultati,$i,"id_f");
                        echo "<tr align='center' bgcolor='#FFFFFF' id='riga-$num'>";
                        echo "<td bgcolor='#ffffff' onclick=\"location.href='look_single_buy.php?id_a=".$idordinea[$i]."'\">".$idordinea[$i]."</td>";
                        echo "<td>".$dataa[$i]."</td>";
                        echo "<td>".$fatturaa[$i]."</td>";
                        echo "<td>".$datafatturaa[$i]."</td>";
                        echo "<td>".$idfornitore[$i]."</td>";
                        echo "<td>".$quantitaordinea[$i]."</td>";
                        echo "</tr>";
                        $i++;
                    }
                    ?>
                    </table>
                </div>
            </div>
            <div class="copy"><small>Design by <a href="#" title="#">Salvatore Gangemi</a></small></p></div>
        </div>
    </BODY>
</HTML>