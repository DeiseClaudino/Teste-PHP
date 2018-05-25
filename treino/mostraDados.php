<html>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<?php
require_once("class/ByteBank.php");
$Conta = new Banco();
$Conta->setNome("Joao");
$Conta->setAgencia(123);
$Conta->setConta(555);
$Conta->setNumero(8789);
$Conta->setSaldo($Conta->saca(200,50));
?>

<h1>Sua Conta</h1>
</body>
<table class="table table-striped table-bordered">
  <tr>
    <td>Seu nome</td>
    <td><?=$Conta->getNome()?></td>
  </tr>
  <tr>
    <td>Sua agencia</td>
    <td><?=$Conta->getAgencia()?></td>
  </tr>
  <tr>
    <td>Sua conta</td>
    <td><?=$Conta->getConta()?></td>
  </tr>
  <tr>
    <td>Seu numero</td>
    <td><?=$Conta->getNumero()?></td>
  </tr>
  <tr>
    <td>Seu Saldo</td>
    <td><?=$Conta->getSaldo()?></td>
  </tr>

</table>

</body>
</html>
