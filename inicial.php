<html>
 <head>
  <title>EPROC - Demandas Repetitivas</title>
 <?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
  <style>
body {
    background-repeat: no-repeat;
    background-position: center top;
}
p {
margin-top: 15px;
margin-left: 50px;
}

</style>

<script type="text/javascript">
function funcao()
{
//recebemos o valor do botão pressionado ok ou cancelar em uma variavel
var r=confirm("A ação a ser ingressada se enquadra nos temas de demandas repetitivas do STJ ou do TJSC?");
if (r==true)
  {
    window.location="repetitivas.php";

  }
else
  {
    window.location="normais.php";
  }
}
</script>

 </head>
<?php echo "<body no-repeat background='4.png' onload='funcao();'>
 <p><font color='white' size=5>Tribunal de Justiça de Santa Catarina - TJSC (ADV: Fulano de Tal - OAB/SC 9.9999)
 </p>"; ?>
 <BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
 
 
 </body>
</html>
