<?php 
include(Leite);

interface Perecivel{
public function  EstaVencido(Leite $L){
    return ($L->GetData()> date(dd-mm-yy));
}

}