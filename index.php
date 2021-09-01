<?php
/*Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’ => all'interno della classe sono dichiarate delle variabili d'istanza => all'interno della classe è definito un costruttore => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà*/

class Movie {
    public $titolo;
    public $regista;
    public $anno;
    public $prezzo;
    public $opt_popcorn = 'Il film potrebbe NON durare molto. Consigliamo l\' acquisto dei popcorn formato STANDARD';

    function __construct($_titolo = "ricerca in corso..", $_prezzo = 0){
        $this->titolo = $_titolo;
        $this->prezzo = $_prezzo;
    }


    public function setOptPopcorn($durata){
        if($durata > 180){
            $this->opt_popcorn = 'Il film potrebbe durare molto. Consigliamo l\' acquisto dei popcorn formato MAXI';
        }
    }
    
    public function getOtpPopcorn(){
        return $this-> opt_popcorn;
    }
}

$lotr = new Movie('Il signore degli Anelli', 10);

$lotr->regista='Peter Jackson';
$lotr->anno= 2001;
$lotr->setOptPopcorn(120);


var_dump($lotr);


$hp = new Movie('Harry Potter',8);

$hp->regista='Chris Columbus';
$hp->anno= 2002;


var_dump($hp);


$nc = new Movie('Le cronache di Narnia',13);

$nc->regista='Andrew Adamson';
$nc->anno= 2006;

var_dump($nc);

?>