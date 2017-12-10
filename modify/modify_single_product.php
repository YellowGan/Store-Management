<!DOCTYPE html>
<HTML>
    <HEAD>
	   <TITLE>MAGAZZINO</TITLE>
    </HEAD>
    <BODY>
        <?php
        include('../conn.php');
        if (isset($_GET['id_p']))
        {
        $id_p=$_GET['id_p'];
        }
        else
        {
        $id_p=-1;
        }
        $result= mysql_query ("SELECT * FROM magazzino WHERE id_p=\"$id_p\"");
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
                	<form method="POST" action="modify_single_product_db.php">
                    <center><fieldset>
                    <center><legend><font size="4" color="white">&nbsp &nbsp Dati del prodotto:</font></legend></center>
                    <?php 
                    $result= mysql_query ("SELECT * FROM magazzino WHERE id_p=\"$id_p\"");
                    $row= mysql_fetch_array($result);
                    ?>
                    <br>
                    <font color="white">ID Prodotto:</font>
                    <br>
                    <input type="text" disabled="disabled" maxlength="15" name="ordine" value=<?php echo "'".htmlspecialchars($row['id_p'])."'"; ?> name="IdProdotto">
                    <br>
                    <font color="white">* Nome:</font>
                    <br>
                    <input type="hidden" name="id_p" value="<?php echo $id_p; ?>">
                    <input type="text" name="nameproduct" maxlength="15" placeholder="Nome prodotto" value=<?php echo "'".htmlspecialchars($row['nome_p'])."'"; ?> name="NomeProdotto">
                    <br>
                    <font color="white">* Costo:</font>
                    <br>
                    <input type="text" name="prizeproduct" maxlength="15" placeholder="Costo prodotto" value=<?php echo "'".htmlspecialchars($row['costo_p'])."'"; ?> name="CostoProdotto">
                    <br>
                    <font color="white">* Misura:</font><br>
                    <input type="text" name="misuraproduct" maxlength="15" placeholder="Misura prodotto" value=<?php echo "'".htmlspecialchars($row['misura_p'])."'"; ?> name="MisuraProdotto">
                    <br>
                    <font color="white">* Colore:</font>
                    <br>
                    <input type="text" name="coloreproduct" maxlength="15" placeholder="Colore prodotto" value=<?php echo "'".htmlspecialchars($row['colore_p'])."'"; ?> name="ColoreProdotto">
                    <br>
                    <font color="white">* Descrizione:</font>
                    <br>
                    <textarea type="text" name="descrizioneproduct" maxlength="500" placeholder="Descrizione prodotto" name="DescrizioneProdotto"><?php echo htmlspecialchars($row['descrizione']);?></textarea>
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