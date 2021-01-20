<?php
// ................... 1 .................
/*
    Metodele determină comportamentul unui obiect. Se definesc în
    interiorul clasei ca funcţii. Pentru clasa Automobil am putea defini
    metoda pentru umplerea rezervorului. 
*/
    // class Auto{
    //     var $combustibil = 0;
    //     var $cantitate = 0;

    //     function __construct($combustibil, $cantitate){
    //         $this->combustibil = $combustibil;
    //         $this->cantitate = $cantitate;
    //     }

    //     function puneCombustibil(){
    //         $this->combustibil = $this->combustibil + $cantitate;
    //         echo "$cantitatea de litri adaugati in rezervor.";
    //     }
    // }

// ................... 2 .................
/*
    Uneori, clasele posedă şi elementele care pot fi "apelate" şi fără
    instanţierea clasei însăşi. Astfel de elemente se numesc elementele
    statice şi pot fi de acelaşi tip ca şi toate celelalte elemente ale unei
    clase (metode şi atribute).
*/

    // class clasaMea{
    //     public static $x = 20;
    //     public static function f(){
    //         echo "Aceasta este metoda statica. ";
    //     }
    // }

    // clasaMea::f();
    // echo clasaMea::$x;
// OR
    // $variab = new clasaMea();
    // echo $variab->f();
    // echo $variab::$x;

// ................... 3 .................
/*
    La gestionarea claselor trebuie luat în seama că ele sunt tipuri
    referenţiale, ceea ce înseamnă că, dacă expediem undeva instanţa
    clasei, de fapt expediem doar un indicator spre ea, şi orice intervenţie
    făcută asupra versiunii expediate va fi executată şi asupra originalului
*/

    // class clasaMea{
    //     public $x = 10;
    // }

    // function schimbaX($clasa){
    //     $clasa->x = 30;
    // }

    // $cm = new clasaMea();
    // schimbaX($cm);
    // echo $cm->x;
    
?>