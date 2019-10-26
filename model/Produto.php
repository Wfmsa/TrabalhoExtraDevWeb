<?php

abstract class Produto{
private $codigo;
private $preco;

public function __construct($codigo,$preco){
    try{
        if ($codigo !==NULL && $preco !==NULL){
$this->codigo = $codigo;
$this->preco = $preco;
        }else{
            throw new NullPointerExeception("Você deixou informaçoes em branco");
        }
}catch (NullPointerException $e) {
    echo $e->getMessage();
}
}
public function GetCodigo(){
    return $this ->codigo;
}
public function GetPreco(){
    return $this ->preco;
}
public function SetPreco($preco){
    $this ->preco = $preco;
}
public function SetCodigo($Cod){
    $this->codigo = $Cod;
}   
public function __toString()
{
    return "Codigo: ".GetCodigo."/br"."Preço: ".GetPreco;
}

    
}

