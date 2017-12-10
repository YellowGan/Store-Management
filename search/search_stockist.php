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
                <?php
                $nome=$_POST['search'];
                ?>
                <div class="col2">
                    <div class="pulsanti">
                        <form id="pulsante" action="#">
                        <input type="button" name="submit" value="Aggiungi fornitore" onclick="location.href='../add/add_stockist.php'">
                        <input type="button" name="submit" value="Modifica fornitore" onclick="location.href='../search/modify_search_stockist.php?nomeFor=<?php echo $nome; ?>'">
                        </form>
                        <form id="cerca" method="post" action="search_stockist.php">
                        <input type="text" name="search" placeholder="nome fornitore">
                        <input type="submit" name="submit" value="Cerca fornitore">
                        </form>
                    </div>
                    <?php
                    if (isset($_POST['search']))
                    {
                    ?>
                    <table border="1px" align="center" width="900px">
                        <tr id="headerriga" align="center">
                            <th id="headertableft"><font width="78px" color="white">ID Fornitore</font></th>
                            <th id="headertab"><font width="208px" color="white">Nome</font></th>
                            <th id="headertab"><font width="208px" color="white">Telefono</font></th>
                            <th id="headertab"><font width="143px" color="white">Indirizzo</font></th>
                            <th id="headertab"><font width="260px" color="white">E-mail</font></th>
                            <th id="headertab"><font width="260px" color="white">Partita Iva</font></th>
                            <th id="headertabright"><font width="78px" color="white">Stato</font></th>
                        </tr>
                    <?php
                    $nome=$_POST['search'];
                    $query="SELECT * FROM fornitore WHERE nome_f LIKE '%$nome%'";
                    $risultati=mysql_query($query);
                    $num=mysql_num_rows($risultati);
                    $i=0;
                    while ($i < $num)
                    {
                        $idstockist[$i]=mysql_result($risultati,$i,"id_f");
                        $nomestockist[$i]=mysql_result($risultati,$i,"nome_f");
                        $telefonostockist[$i]=mysql_result($risultati,$i,"telefono_f");
                        $indirizzostockist[$i]=mysql_result($risultati,$i,"indirizzo_f");
                        $mailstockist[$i]=mysql_result($risultati,$i,"mail_f");
                        $pistockist[$i]=mysql_result($risultati,$i,"pi_f");
                        $statostockist[$i]=mysql_result($risultati,$i,"stato_f");
                        echo "<tr align='center' bgcolor='#FFFFFF' id='riga-$num'>";
                        echo "<td>".$idstockist[$i]."</td>";
                        echo "<td>".$nomestockist[$i]."</td>";
                        echo "<td>".$telefonostockist[$i]."</td>";
                        echo "<td>".$indirizzostockist[$i]."</td>";
                        echo "<td>".$mailstockist[$i]."</td>";
                        echo "<td>".$pistockist[$i]."</td>";
                        echo "<td>".$statostockist[$i]."</td>";
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