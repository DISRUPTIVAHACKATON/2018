<?php

header("Content-Type: text/html; charset=ISO-8859-1",true);

$texto = $_POST['petinicial'];
$texto = nl2br($texto);

/* Carrega a classe DOMPdf */
require_once("dompdf/dompdf_config.inc.php");

/* Cria a instância      */
$dompdf = new DOMPDF();

/* Carrega seu HTML     */
$dompdf->load_html("<p align='justify'>".$texto."</p>");

$dompdf->render();

$dompdf->stream(
    "saida.pdf",
    array(
        "Attachment" => false
    )
);

?>
