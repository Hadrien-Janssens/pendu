<?php

function dessinPenduVie0 () {
    echo "  ________  ".PHP_EOL ;
    echo "  |/     |  ".PHP_EOL ;
    echo "  |      O  ".PHP_EOL ;
    echo "  |     /|\ ".PHP_EOL ;
    echo "  |      |  ".PHP_EOL ;
    echo "  |     / \ ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "_/|\______  ".PHP_EOL.PHP_EOL ;
}
function dessinPenduVie1 () {
    echo "  ________  ".PHP_EOL ;
    echo "  |/     |  ".PHP_EOL ;
    echo "  |      O  ".PHP_EOL ;
    echo "  |     /|\ ".PHP_EOL ;
    echo "  |      |  ".PHP_EOL ;
    echo "  |     /   ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "_/|\______  ".PHP_EOL.PHP_EOL ;
}
function dessinPenduVie2 () {
    echo "  ________  ".PHP_EOL ;
    echo "  |/     |  ".PHP_EOL ;
    echo "  |      O  ".PHP_EOL ;
    echo "  |     /|\ ".PHP_EOL ;
    echo "  |      |  ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "_/|\______  ".PHP_EOL.PHP_EOL ;
}
function dessinPenduVie3 () {
    echo "  ________  ".PHP_EOL ;
    echo "  |/     |  ".PHP_EOL ;
    echo "  |      O  ".PHP_EOL ;
    echo "  |     /|\ ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "_/|\______  ".PHP_EOL.PHP_EOL ;
}
function dessinPenduVie4 () {
    echo "  ________  ".PHP_EOL ;
    echo "  |/     |  ".PHP_EOL ;
    echo "  |      O  ".PHP_EOL ;
    echo "  |     /|  ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "_/|\______  ".PHP_EOL.PHP_EOL ;
}
function dessinPenduVie5 () {
    echo "  ________  ".PHP_EOL ;
    echo "  |/     |  ".PHP_EOL ;
    echo "  |      O  ".PHP_EOL ;
    echo "  |     /   ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "_/|\______  ".PHP_EOL.PHP_EOL ;
}
function dessinPenduVie6 () {
    echo "  ________  ".PHP_EOL ;
    echo "  |/     |  ".PHP_EOL ;
    echo "  |      O  ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "_/|\______  ".PHP_EOL.PHP_EOL ;
}
function dessinPenduVie7 () {
    echo "  ________  ".PHP_EOL ;
    echo "  |/     |  ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "  |         ".PHP_EOL ;
    echo "_/|\______  ".PHP_EOL.PHP_EOL ;
}

function dessinPendu($vie){
    switch ($vie) {
        case '0':
            dessinPenduVie0();
            break;
         case '1':
            dessinPenduVie1();
            break;
         case '2':
            dessinPenduVie2();
            break;
         case '3':
            dessinPenduVie3();
            break;
         case '4':
            dessinPenduVie4();
            break; 
         case '5':
            dessinPenduVie5();
            break;   
         case '6':
            dessinPenduVie6();
            break;
         case '7':
            dessinPenduVie7();
            break;
            
            
        
        default:
            
            break;
    }
}
?>