<!DOCTYPE html>
<HTML>
    <?php include('conn.php') ?>
    <HEAD>
        <TITLE>CLIENTI</TITLE>
    </HEAD>
    <BODY>
        <link href="stile.css" rel="stylesheet" type="text/css">
        <div class="main">
            <div class="header">
                <form action="index.html" target="_self">
                <div class="title">Gestione magazzino</div>
                <input name="HomePage" type="image" src="img/homepage.png" alt="HomePage" title="HomePage" width="50px" height="50px">
                </form>
            </div>
            <div class="content">
                <div class="col1">
                    <div class="subtitle">Anagrafica</div>
                    <div class="subtitle2">
                    <button class="button" onclick="location.href='client.php'">Clienti</button>
                    <br><br>
                    <button class="button" onclick="location.href='stockist.php'">Fornitori</button>
                    </div>
                </div>
                <div class="col3">
                    <div class="subtitle">Prodotti</div>
                    <div class="subtitle2">
                    <button class="button" onclick="location.href='store.php'">Magazzino</button>
                    <br><br>
                    <button class="button" onclick="location.href='buy.php'">Acquisti</button>
                    <br><br>
                    <button class="button" onclick="location.href='sell.php'">Vendite</button>
                    <br><br>
                    <button class="button" onclick="location.href='bill.php'">Fatture</button>
                    </div>
                </div>
                <div class="col2">
                    <div class="pulsanti">
                        <form id="pulsante" action="#">
                        <input type="button" name="submit" value="Aggiungi cliente" onclick="location.href='add/add_client.php'">
                        <input type="button" name="submit" value="Modifica cliente" onclick="location.href='modify/modify_client.php'">
                        </form>
                        <form id="cerca" method="post" action="search/search_client.php">
                        <input type="text" name="search" placeholder="nome/cognome cliente">
                        <input type="submit" name="submit" value="Cerca cliente">
                        </form>
                    </div>
                    <table border="1px" align="center" width="900px">
                        <tr id="headerriga" align="center">
                            <th id="headertableft"><font width="78px" color="white">ID Cliente</font></th>
                            <th id="headertab"><font width="208px" color="white">Nome</font></th>
                            <th id="headertab"><font width="208px" color="white">Cognome</font></th>
                            <th id="headertab"><font width="143px" color="white">Telefono</font></th>
                            <th id="headertab"><font width="260px" color="white">Indirizzo</font></th>
                            <th id="headertab"><font width="260px" color="white">E-mail</font></th>
                            <th id="headertabright"><font width="78px" color="white">Stato</font></th>
                        </tr>
                    <?php
                        $query="SELECT * FROM cliente";
                        $risultati=mysql_query($query);
                        $num=mysql_num_rows($risultati);
                        $i=0;
                        while ($i < $num)
                        {
                            $idclient[$i]=mysql_result($risultati,$i,"id_c");
                            $nomeclient[$i]=mysql_result($risultati,$i,"nome_c");
                            $cognomeclient[$i]=mysql_result($risultati,$i,"cognome_c");
                            $telefonoclient[$i]=mysql_result($risultati,$i,"telefono_c");
                            $indirizzoclient[$i]=mysql_result($risultati,$i,"indirizzo_c");
                            $mailclient[$i]=mysql_result($risultati,$i,"mail_c");
                            $statoclient[$i]=mysql_result($risultati,$i,"stato_c");
                            echo "<tr align='center' bgcolor='#FFFFFF' id='riga-$num'>";
                            echo "<td>".$idclient[$i]."</td>";
                            echo "<td>".$nomeclient[$i]."</td>";
                            echo "<td>".$cognomeclient[$i]."</td>";
                            echo "<td>".$telefonoclient[$i]."</td>";
                            echo "<td>".$indirizzoclient[$i]."</td>";
                            echo "<td>".$mailclient[$i]."</td>";
                            echo "<td>".$statoclient[$i]."</td>";
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