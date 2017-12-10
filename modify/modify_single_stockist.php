<!DOCTYPE html>
<HTML>
    <HEAD>
	   <TITLE>FORNITORI</TITLE>
    </HEAD>
    <BODY>
        <?php
        include('../conn.php');
        if (isset($_GET['id_f']))
        {
        $id_f=$_GET['id_f'];
        }
        else
        {
        $id_f=-1;
        }
        $result= mysql_query ("SELECT * FROM fornitore WHERE id_f=\"$id_f\"");
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
                    <form method="POST" action="modify_single_stockist_db.php">
                    <center><fieldset>
                    <center><legend><font size="4" color="white">&nbsp &nbsp Dati del fornitore:</font></legend></center>
                    <?php 
                    $result= mysql_query ("SELECT * FROM fornitore WHERE id_f=\"$id_f\"");
                    $row= mysql_fetch_array($result);
                    ?>
                    <br>
                    <font color="white">ID Fornitore:</font>
                    <br>
                    <input type="text" disabled="disabled" maxlength="15" name="ordine" value=<?php echo "'".htmlspecialchars($row['id_f'])."'"; ?> name="IdFornitore">
                    <br>
                    <font color="white">* Nome:</font>
                    <br>
                    <input type="hidden" name="id_f" value="<?php echo $id_f; ?>">
                    <input type="text" maxlength="15" name="namestockist" placeholder="Nome fornitore" value=<?php echo "'".htmlspecialchars($row['nome_f'])."'"; ?> name="NomeFornitore">
                    <br>
                    <font color="white">* Telefono:</font>
                    <br>
                    <input type="tel" name="phonestockist" maxlength="15" placeholder="Telefono fornitore" value=<?php echo "'".htmlspecialchars($row['telefono_f'])."'"; ?> name="TelefonoFornitore">
                    <br>
                    <font color="white">* Indirizzo:</font><br>
                    <input type="text" name="addressstockist" maxlength="30" placeholder="Indirizzo fornitore" value=<?php echo "'".htmlspecialchars($row['indirizzo_f'])."'"; ?> name="IndirizzoFornitore">
                    <br>
                    <font color="white">E-mail:</font>
                    <br>
                    <input type="email" name="mailstockist" maxlength="40" placeholder="Mail fornitore" value=<?php echo "'".htmlspecialchars($row['mail_f'])."'"; ?> name="MailFornitore">
                    <br>
                    <font color="white">* Partita Iva:</font>
                    <br>
                    <input type="text" name="pistockist" maxlength="15" placeholder="PartitaIva fornitore" value=<?php echo "'".htmlspecialchars($row['pi_f'])."'"; ?> name="PartitaIvaFornitore">
                    <br>
                    <font color="white">* Stato:</font>
                    <br>
                    <input type="text" name="statostockist" maxlength="15" placeholder="Stato fornitore" value=<?php echo "'".htmlspecialchars($row['stato_f'])."'"; ?> name="StatoFornitore">
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