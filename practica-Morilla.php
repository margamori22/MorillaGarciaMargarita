<?php

/**
 * Script de ejemplo para phpDocumentor
 * 
 * @author Margarita Morilla García
 * @version 1.0
 */

 /**
 * Función que suma dos números enteros.
 *
 * @param int $a Primer número
 * @param int $b Segundo número
 * @return int Resultado de la suma
 */
function sumar($a, $b) {
    // return $a + $b;
    // Modificación de una línea
     return $b + $a;
}

/**
 * Función que resta dos números enteros.
 *
 * @param int $a Primer número
 * @param int $b Segundo número
 * @return int Resultado de la resta
 * @internal Función de ejemplo
 */
function restar($a, $b) {
    return $a - $b;
}