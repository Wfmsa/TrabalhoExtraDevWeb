<?php

use phpDocumentor\Reflection\Types\Null_;

include(Produto);

class DVD extends Produto{

private $titulo;
private $ano;

public function __construct($codigo,$preco,$titulo,$ano ){
    try{
    if ($codigo !==NULL && $preco !==NULL && $titulo !== NULL && $ano !==NULL){
    $this ->codigo = $codigo;
    $this ->preco = $preco;
    $this ->titulo = $titulo;
    $this ->ano = $ano;

}
else{
throw new NullPointerExeception("Você deixou informaçoes em branco"); 
}
}catch (NullPointerException $e) {
    echo $e->getMessage();
}       
}
public function GetAno(){
    return $this ->ano;
}
public function GetTitulo(){
    return $this -> titulo;
}
public function SetAno($ano){
    $this -> ano = $ano;
}
public function SetTitulo($titulo){
    $this -> titulo = $titulo; 
}

public function __toString()
{
    return $this -> __toString."Titulo: ".GetTitulo."Ano".GetAno;
}
    


}