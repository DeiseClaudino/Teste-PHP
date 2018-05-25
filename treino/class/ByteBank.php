<?php
class Banco{
  private $nome;
  private $agencia;
  private $conta;
  private $numero;
  private $saldo;


  public function getNome(){
    return $this -> nome;
  }

  public function setNome($nome){
    return $this -> nome = $nome;
  }

  public function getAgencia(){
    return $this -> agencia;
  }

  public function setAgencia($agencia){
    return $this -> agencia = $agencia;
  }

  public function getConta(){
    return $this -> conta;
  }

  public function setConta($conta){
    return $this -> conta = $conta;
  }

  public function getNumero(){
    return $this -> numero;
  }

  public function setNumero($numero){
    return $this -> numero = $numero;
  }

  public function getSaldo(){
    return $this -> saldo;
  }

  public function setSaldo($saldo){
    return $this -> saldo = $saldo;
  }

  public function deposita($saldo, $valor){
    return $this -> saldo = $saldo + $valor;

  }


    public function saca($saldo, $valor){

      return $this -> saldo = $saldo - $valor;

    }

}
