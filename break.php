<?php

$instrumentos=["Piano","Flauta Traversa","Violin","Gaita","Cajon Peruano","Guitarra"];
foreach($instrumentos as $instrumento){
    echo $instrumento."<br>";
    if($instrumento=="Violin"){
        break;
        }
}