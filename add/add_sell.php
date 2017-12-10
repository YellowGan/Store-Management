<!DOCTYPE html>
<HTML>
  <?php include('../conn.php') ?>
  <HEAD>
    <TITLE>VENDITE</TITLE>
  </HEAD>
  <BODY>
    <link href="../stile.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
          if(isset($_POST['numProd']))
          {
          ?>
            <form action="add_sell_db.php" method="post">
          <?php
          }
          else
          {
          ?>
            <form action="add_sell.php" method="post">
          <?php
          }
          ?>
          <center><fieldset id="buy">
          <center><legend><font size="4" color="white">Dati dell'ordine di vendita:</font></legend></center>
          <br>
          <font color="white">* Data Ordine:</font>&nbsp&nbsp
          <script src="//code.jquery.com/jquery-1.10.2.js"></script>
          <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
          <link rel="stylesheet" href="/resources/demos/style.css">
          <script>
          $(function() {
          $( "#datepicker" ).datepicker();
          });
          </script>
          <?php
          if(isset($_POST['dataOrd']))
          {
          ?>
            <input type="text" name="dataOrd" value="<?php echo $_POST['dataOrd']; ?>" placeholder="Inserire data ordine" id="datepicker"/>
          <?php
          }
          else
          {
          ?>
            <input type="text" name="dataOrd" placeholder="Inserire data ordine" id="datepicker"/>
          <?php
          }
          ?>
          <br><br>
          <font color="white">* ID Cliente:</font>&nbsp&nbsp
          <select name="selectCliente" id="selectCliente">
          <?php  
          if(isset($_POST['selectCliente']))
          {
            $idForn = $_POST['selectCliente'];
          }
          $idcliente = mysql_query("SELECT id_c FROM cliente WHERE stato_c='on'");  
          while ($row = mysql_fetch_assoc($idcliente))
          {      
          if($row['id_c'] != $idClient)
            echo "<option value=\"$row[id_c]\">$row[id_c]</option>\n";  
          else
            echo "<option selected value=\"$row[id_c]\">$row[id_c]</option>\n";  
          }
          ?>   
          </select>
          <br><br>
          <?php
          if(!isset($_POST['numProd']))
          {
          ?>
          <font color="white">Numero prodotti:</font>&nbsp&nbsp
          <input type="number" min="1" max="20" id="numProd" value=1 name="numProd">&nbsp&nbsp
          <button id="chooseNumProd">Conferma</button>
          </form>
          <?php
          }
          else
          {
          $numprod = $_POST['numProd']; 
          echo "<input type=\"hidden\" name=\"numProd\" value=\"".$numprod."\">";
          for ( $i=0; $i <  $numprod; $i++)
          {
          ?>
          <div class="input_fields_wrap">
          <font color="white">ID Prodotto:</font>&nbsp&nbsp
          <select name="<?php echo "selectProdotto".$i; ?>">
          <option></option >
          <?php  
          $idprodotto = mysql_query("SELECT id_p FROM magazzino WHERE quantita_p > 0");  
          while ($row = mysql_fetch_assoc($idprodotto))
          {      
          echo "<option name=\"prodotto\" value=\"$row[id_p]\">$row[id_p]</option>\n";  
          }
          ?>   
          </select>&nbsp&nbsp
          <font color="white">Quantità:</font>&nbsp&nbsp
          <input type="number" min="1" name="<?php echo "quantitaProdotto".$i; ?>">
          </div>
          <?php
          }
          ?>
          <br>
          <br>
          <input type="submit" name="submit" value="Continua">
          </form>
          <?php
          }
          ?>
          </fieldset></center>
        </div>
      </div>
      <div class="copy"><small>Design by <a href="#" title="#">Salvatore Gangemi</a></small></p></div>
    </div>
  </BODY>
</HTML>