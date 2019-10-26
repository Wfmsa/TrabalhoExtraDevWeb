<?php

use Faker\Provider\zh_TW\DateTime;

include (Produto);
include (Perecivel);

class Leite extends Produto implements Perecivel{
private $marca;
private $volume;
private $dataValidade;


public function __construct($codigo,$preco,$marca,$volume,$dataValidade )
{
    try{
        if($codigo!== NULL && $preco !== NULL && $marca !== NULL && $volume !== NULL && $dataValidade!==NULL){
    $this ->codigo = $codigo;
    $this ->preco = $preco;
    $this ->marca =$marca;
    $this ->volume=$volume;
    $this ->dataValidade=new DateTime($dataValidade);
    }
    else{
    throw new NullPointerExeception("Você deixou informaçoes em branco"); 
    }
    }catch (NullPointerException $e) {
        echo $e->getMessage();
    }       
}
public function GetMarca(){

return $this ->marca;
}
public function getVolume(){
    return $this ->volume;
}

public function GetData(){
    return $this -> dataValidade; 
}
}