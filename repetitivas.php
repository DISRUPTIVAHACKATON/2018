<html>
 <head>
  <title>EPROC - Demandas Repetitivas</title>

<?php header("Content-Type: text/html; charset=ISO-8859-1",true); ?>

  <style>
body {
    background-repeat: no-repeat;
    background-position: center top;
}
p {
margin-top: 15px;
margin-left: 55px;
margin-right: 55px;
}

form {
margin-top: 35px;
margin-left: 60px;
font-size: 12;
text-color: black;
}

tr   {
margin-top: 35px;
margin-left: 60px;
font-size: 12;
text-color: black;
}

a href  {
text-color: RED;
}

</style>

<script type="text/javascript">

function verpriori() {
  var checkBox = document.getElementById("idoso");
  var checkmenor = document.getElementById("menor");

  if (checkBox.checked == true){
    document.getElementById("idoso").checked = true;
    document.getElementById("menor").checked = false;
  } else {
  if (checkmenor.checked == true){
    document.getElementById("idoso").checked = false;
    document.getElementById("menor").checked = true;
  }}
}

function gerapet() {
 var checkBox = document.getElementById("petinicial");
if (checkBox.hidden == true){
    document.getElementById("petinicial").hidden = false;
    document.getElementById("btvisualizar").value = 'FECHAR PET.INICIAL'
  } else {
    document.getElementById("petinicial").hidden = true;
    document.getElementById("btvisualizar").value = 'VISUALIZAR INICIAL'
  }

}

function pegacampos() {

 var comarc = document.getElementById("petinicial");




window.alert("PETIÇÃO INICIAL PROTOCOLADA COM SUCESSO!!!");

}

</script>

 </head>
<?php
echo "<body no-repeat background='4.png'>
 <p><font color='white' size=5>Tribunal de Justiça de Santa Catarina - TJSC (ADV: Fulano de Tal - OAB/SC 9.9999)</font>
  </p><br><br><br>
  <p align='justify'><font color='red' size=3> ATENÇÃO: ao ingressar com a ação por este módulo, a petição inicial será gerada pela próprio sistema, vinculando os
  autos ao fluxo de tramitação automatizado, gerando maior celeridade ao feito. Caso queira optar pelo método tradicional de ajuizamento,
  volte à página inicial do portal e escolha a opção correspondente.</font></p>
  <form action='gerapet.php' method='post'>
  TEMA:<BR>
  <select name='tema'>
    <option value='106STJ' checked>Fornecimento de Medicamentos - Tema 106 STJ</option>
    <option value='4TJSC'>Cumprimento de Sentença de Honorários Contra a Fazenda Pública - Tema 04 TJSC</option>
  </select><br><br>
  COMARCA:<BR>
  <select name='comarca' id='comarca'>
    <option value='Bom Retiro' selected>Bom Retiro</option>
    <option value='Capital'>Capital</option>
    <option value='Santo Amaro da Imperatriz'>Santo Amaro da Imperatriz</option>
    <option value='Timbó'>Timbó</option>
  </select><br><br>
  CLASSE UNIFICADA:<BR>
  <input type='text' placeholder='Ação Ordinária' size='50' disabled><br><br>
  ASSUNTO PRINCIPAL:<BR>
  <input type='text' placeholder='Fornecimento de Medicamentos' size='50' disabled><br><br>
   VALOR DA CAUSA:<BR>
  <input type='text' placeholder='Valor da Causa' size='50'><br><br>
  <table border='0'>
<tr>
  <td>AUTOR:<BR>
  <input type='text' placeholder='Informe o nome da parte autora' size='50'></td>
  <td>DOCUMENTO DO AUTOR(CPF):<BR>
  <input type='text' placeholder='Informe o documento da parte autora' size='50'></td>
</tr>
  </table><br>
  ENDEREÇO DA PARTE AUTORA<BR>
<table border='0'>
<tr>
  <td>LOGRADOURO:<BR>
  <input type='text' placeholder='Informe o logradouro (Rua, Avenida, etc)' size='75'></td>
  <td>COMPLEMENTO:<BR>
  <input type='text' placeholder='Informe algum complemento (ponto de referência, etc)' size='40'></td>
  <td>NÚMERO:<BR>
  <input type='text' placeholder='Informe o número da residência/estabelecimento' size='20'></td>
  <td>CEP:<BR>
  <input type='text' placeholder='Informe o CEP' size='10'></td>
  <td>CIDADE:<BR>
  <input type='text' placeholder='Informe a cidade' size='20'></td>
  <td>ESTADO:<BR>
  <input type='text' placeholder='Sigla' size='5'></td>
</tr>
</table>
<table border='0'>
<tr><BR>
<td>RÉU:<BR>
  <input type='text' placeholder='Informe o nome da parte ré' size='50'></td>
  <td>DOCUMENTO DO RÉU(CPF/CNPJ):<BR>
  <input type='text' placeholder='Informe o documento da parte ré' size='50'></td>
</tr>
</table><BR>
  ENDEREÇO DA PARTE RÉ<BR>
<table border='0'>
<tr>
  <td>LOGRADOURO:<BR>
  <input type='text' placeholder='Informe o logradouro (Rua, Avenida, etc)' size='75'></td>
  <td>COMPLEMENTO:<BR>
  <input type='text' placeholder='Informe algum complemento (ponto de referência, etc)' size='40'></td>
  <td>NÚMERO:<BR>
  <input type='text' placeholder='Informe o número da residência/estabelecimento' size='20'></td>
  <td>CEP:<BR>
  <input type='text' placeholder='Informe o CEP' size='10'></td>
  <td>CIDADE:<BR>
  <input type='text' placeholder='Informe a cidade' size='20'></td>
  <td>ESTADO:<BR>
  <input type='text' placeholder='Sigla' size='5'></td>
</tr>
</table><br>
  <table border='0'>
<tr>
  <td>DOENÇA/ENFERMIDADE:<BR>
  <input type='text' placeholder='Informe a doença/enfermidade sob tratamento' size='50'></td>
  <td>CID:<BR>
  <input type='text' placeholder='Informe o código CID da doença/enfermidade' size='50'></td>
</tr>
</table><BR>

  MEDICAMENTO:<br>
  <input type='text' placeholder='Informe o(s) medicamento(s) solicitado(s)' size='200'><br>(Pode-se enumerar mais de um medicamento, separando-os por vírgulas.)<br><br>

  JUSTIÇA GRATUITA:<BR>
  <input type='radio' name='JG' value='N' disabled>NÃO
  <input type='radio' name='JG' value='S' checked disabled>SIM <BR><BR>
  
  TRAMITAÇÃO PRIORIÁRIA:<BR>
  <input type='radio' name='PRIORI' value='N'>NÃO
  <input type='radio' name='PRIORI' value='S' checked>SIM

  <input type='checkbox' id='idoso' onclick='verpriori();'>IDOSO </input>
  <input type='checkbox' id='menor' onclick='verpriori();'>MENOR </input>
  <input type='checkbox' id='deficiente'>DEFICIENTE </input> (Não é possível escolher IDOSO e MENOR ao mesmo tempo!)<BR><BR>
  
  TUTELA ANTECIPADA/TUTELA DE URGÊNCIA:<BR>
  <input type='radio' name='TUT' value='N'>NÃO
  <input type='radio' name='TUT' value='S' checked>SIM <BR><BR>
  
  <STRONG>DOCUMENTOS ANEXOS DA INICIAL</STRONG><BR><BR>

 > PROCURAÇÃO:<BR>
 Busque em seu computador a procuração, clicando no botão a seguir: <input type='file'><BR><BR>
 
 > DOCUMENTOS PESSOAIS DA PARTE AUTORA (RG, CPF E COMPROVANTE/DECLARAÇÃO DE RESIDÊNCIA):<BR>
 Busque em seu computador o arquivo relativo aos documentos da parte, clicando no botão a seguir: <input type='file'><BR><BR>
 
 > LAUDO MÉDICO (COM A IDENTIFICAÇÃO DA CID):<BR>
 Busque em seu computador o arquivo relativo ao laudo médico, clicando no botão a seguir: <input type='file'> <a href='FormTema106STJ.pdf' download='FormTema106STJ.pdf'>(CONSULTE AQUI MODELO DE FORMULÁRIO DE LAUDO)</a><BR><BR>
 
 > DECLARAÇÃO DE HIPOSSUFIÊNCIA FINANCEIRA:<BR>
 Busque em seu computador o arquivo relativo a declaração de hipossufiência da parte autora, clicando no botão a seguir: <input type='file'><BR><BR>
 
 > REGISTRO DO MEDICAMENTO NA ANVISA:<BR>
 Busque em seu computador o arquivo relativo a comprovação de registro do medicamento na ANVISA: <input type='file'><BR><BR>

  <input type='button' id='btvisualizar' value='VISUALIZAR INICIAL' onclick='gerapet();'>
  <br>
  <textarea id='petinicial' name='petinicial' rows='30' cols='150' readonly='true' hidden>
MM(A). JUIZ(IZA) DE DIREITO DA COMARCA DE ...


FATOS

A PARTE AUTORA ESTA ACOMETIDA PELA DOENCA ..., RAZAO PELA QUAL NECESSITA DO USO DO MEDICAMENTO ..., O QUAL NAO SE ENCONTRA INCORPORADO EM ATOS NORMATIVOS DO SUS.
O LAUDO MEDICO ANEXO, DEVIDAMENTE FUNDAMENTADO E CIRCUNSTANCIADO, EXPEDIDO PELO MEDICO QUE ASSISTE A PARTE REQUERENTE, COMPROVA A NECESSIDADE E A IMPRESCINDIBILIDADE DO USO DO REFERIDO FARMACO, BEM COMO A INEFICACIA DAQUELES FORNECIDOS PELO SUS PARA TRATAMENTO DA MOLESTIA.
VALE RESSALTAR QUE O MEDICAMENTO POSSUI REGISTRO NA ANVISA (DOC. ANEXO).
ALEM DISSO, A PARTE REQUERENTE NÃO POSSUI CAPACIDADE FINANCEIRA PARA ARCAR COM O CUSTO DO MEDICAMENTO ORA SOLICITADO.


FUNDAMENTACAO

A PRESENTE DEMANDA ENCONTRA FUNDAMENTO LEGAL NO TEMA REPETITIVO N. 106 DO SUPERIOR DE JUSTIÇA, ARTIGOS 196, E 198, INCISO II, AMBOS DA CONSTITUICAO FEDERAL, ARTIGO 19, “M”, INCISO I E “T”, INCISO II, AMBOS DA LEI N. 8.080/90 E ENUNCIADO N. 15 DA I JORNADA DE DIREITO DA SAUDE.


DA TUTELA DE URGENCIA

DE ACORDO COM O ARTIGO 300 DO CODIGO DE PROCESSO CIVIL, “A TUTELA DE URGENCIA SERA CONCEDIDA QUANDO HOUVER ELEMENTOS QUE EVIDENCIEM A PROBABILIDADE DO DIREITO E O PERIGO DE DANO OU O RISCO AO RESULTADO UTIL DO PROCESSO.”
NO CASO EM ANALISE, A PROBABILIDADE DO DIREITO E RETIRADA DAS PROVAS QUE ACOMPANHAM A INICIAL, QUE COMPROVAM O ACOMETIMENTO DA PARTE AUTORA DA  MOLESTIA E A NECESSIDADE DE TRATAMENTO MEDICAMENTOSO.
NO QUE SE REFERE A EXISTENCIA DE PERIGO DE DANO OU AO RESULTADO UTIL DO PROCESSO, VERIFICA-SE QUE A PARTE AUTORA E PORTADORA DA DOENÇA REFERIDA ACIMA E, PARA TANTO, NECESSITA, COM URGENCIA, PARA SEU TRATAMENTO, DO USO DO MEDICAMENTO ..., CONFORME EXPOSTO NO LAUDO MEDICO, O QUE CARACTERIZA, DE FORMA CLARA E VEROSSIMIL, A INDISPENSABILIDADE DA CONCESSAO DA TUTELA DE URGENCIA.


PEDIDOS

DIANTE DO EXPOSTO, REQUER:

A) OS BENEFICIOS DA JUSTIÇA GRATUITA;
B) A CONCESSAO DA TUTELA ANTECIPADA, A FIM DE QUE O MEDICAMENTO EM QUESTAO PASSE A SER FORNECIDO PELA PARTE RE NO PRAZO A SER FIXADO PELO MAGISTRADO;
C) PRODUCAO DE PROVAS;
D) AO FINAL, A TOTAL PROCEDENCIA DO PEDIDO, COM CONDENACAO DA PARTE RE AO FORNECIMENTO DO MEDICAMENTO;
E) A CONDENACAO DA PARTE RE EM CUSTAS E HONORARIOS SUCUMBENCIAIS.

DA-SE A CAUSA O VALOR DE ...

DATA .../.../...

</textarea>
              "
?>
  <br><input type='submit' value='PROTOCOLAR AÇÃO' onclick='pegacampos();'>
</form>
 </body>
</html>
