<?php
include include __DIR__.'/../model/Produto.php';

$List;
$List[0]=new DVD(1,30,"A volta dos que não foram",2010);
$List[1]=new DVD(2,40,"Poeira em alto mar",2013);
$List[2]=new DVD(3,50,"Titanic",1992);
$List[3]=new DVD(4,35,"Vingadores",2019);
$List[4]=new Leite(5,1.9,"Longa Vida",1,06-11-2019);
$List[5]=new Leite(6,4.25,"Italac",1,15-05-2020);
$List[6]=new Leite(7,2.5,"Piracanjuba",1,13-10-2019);
$List[7]=new Leite(8,2.75,"Itambe",1,14-10-2019);
$List[8]=new Leite(9,1.5,"Paulista",1,10-04-2020);
$List[9]=new Leite(10,5,"Ninho",1,12-06-2020);
for($i=0 ; i<10;$i++){
if($List[$i]->GetAno==2018){
    echo $List[$i];
}
if(Leite ->EstaVencido($List[$i])){
    echo $List[$i];
}
}