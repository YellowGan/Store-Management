<!DOCTYPE html>
<HTML>
	<?php include('../conn.php') ?>
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
                <?php
                $nome=$_POST['search'];
                ?>
                <div class="col2">
                    <div class="pulsanti">
                    <form id="pulsante" action="#">
                    <input type="button" name="submit" value="Aggiungi prodotto" onclick="location.href='../add/add_store.php'">
                    <input type="button" name="submit" value="Modifica prodotto" onclick="location.href='modify_search_store.php?nomePro=<?php echo $nome; ?>'">
                    </form>
                    <form id="cerca" method="POST">
                    <select ONCHANGE="location=this.options[this.selectedIndex].value;">
                    <option value="../store.php">Cerca per...</option>
                    <option value="../store2.php">Nome</option>
                    <option value="../store3.php">Descrizione</option>
                    </select>
                    <input type="text" name="search">
                    <input type="submit" name="submit" value="Cerca prodotto">
                    </form>
                    </div>
                    <?php
                    if (isset($_POST['search']))
                    {
                    ?>
                    <table border="1px" align="center" width="900px">
                        <tr id="headerriga" align="center">
                            <th id="headertableft"><font width="78px" color="white">ID Prodotto</font></th>
                            <th id="headertab"><font width="208px" color="white">Nome</font></th>
                            <th id="headertab"><font width="208px" color="white">Quantità</font></th>
                            <th id="headertab"><font width="143px" color="white">Costo (€)</font></th>
                            <th id="headertab"><font width="260px" color="white">Misura</font></th>
                            <th id="headertab"><font width="260px" color="white">Colore</font></th>
                            <th id="headertabright"><font width="78px" color="white">Descrizione</font></th>
                        </tr>
                    <?php
                    $nome=$_POST['search'];
                    $query="SELECT * FROM magazzino WHERE nome_p LIKE '%$nome%'";
                    $risultati=mysql_query($query);
                    $num=mysql_num_rows($risultati);
                    $i=0;
                    while ($i < $num)
                    {
                        $idproduct[$i]=mysql_result($risultati,$i,"id_p");
                        $nomeproduct[$i]=mysql_result($risultati,$i,"nome_p");
                        $quantitaproduct[$i]=mysql_result($risultati,$i,"quantita_p");
                        $costoproduct[$i]=mysql_result($risultati,$i,"costo_p");
                        $misuraproduct[$i]=mysql_result($risultati,$i,"misura_p");
                        $coloreproduct[$i]=mysql_result($risultati,$i,"colore_p");
                        $descrizioneproduct[$i]=mysql_result($risultati,$i,"descrizione");
                        echo "<tr align='center' bgcolor='#FFFFFF' id='riga-$num'>";
                        echo "<td>".$idproduct[$i]."</td>";
                        echo "<td>".$nomeproduct[$i]."</td>";
                        echo "<td>".$quantitaproduct[$i]."</td>";
                        echo "<td>".$costoproduct[$i]."</td>";
                        echo "<td>".$misuraproduct[$i]."</td>";
                        echo "<td>".$coloreproduct[$i]."</td>";
                        echo "<td>".$descrizioneproduct[$i]."</td>";
                        echo "</tr>";
                        $i++;
                    }
                    ?>
                    </table>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="copy"><small>Design by <a href="#" title="#">Salvatore Gangemi</a></small></p></div>
        </div>
    </BODY>
</HTML>