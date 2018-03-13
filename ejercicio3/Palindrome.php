<?php

class Palindrome {

    public static function isPalindrome($word) {
        $aux = trim($word); //Eliminar espacios en blanco
        $palabra = null;
        for ($i = strlen($aux) - 1; $i >= 0; $i--) {
            $palabra .= substr($aux, $i, 1); //Tomar cada caracter 
        }

        if (strtolower($aux) == strtolower($palabra)) { //convertir en minuscula ambas palabras
            echo $aux . "  es palíndromo ";
            return true;
        } else {
            echo $aux . "  no es palíndromo ";
            return false;
        }
        return null;
    }

}

echo Palindrome::isPalindrome('Deleveled');
