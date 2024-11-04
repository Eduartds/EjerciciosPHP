<?php
/************************************************** Ejercicio 1 ***************************************************/
function generarFibonacci($n){
    //inicializamos fibonacci con los dos primeros números de la secuencia
    $fibonacci = array(0, 1);
    print_r($fibonacci);

    //Inicia un bucle for que comienza en 2 y se ejecuta hasta que $i sea menor que el numero ingresado
    for($i = 2; $i < $n; $i++){

        //Asigna a la posición $i del array fibonacci la suma de los valores almacenados en las posiciones $i-1 y $i-2
        $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
    }
    //Retorna el array fibonacci
    return $fibonacci;
}
print_r(generarFibonacci(10));

/************************************************** Ejercicio 2 ***************************************************/
function esPrimo($n){
    if($n < 2){
        return false;
    }
    $i = 2;
    //Inicia un bucle while que se ejecuta mientras $i sea menor o igual que la raíz cuadrada del número ingresado
    while($i <= sqrt($n)){
        //Si el número ingresado es divisible por $i, retorna false
        if($n % $i == 0){
            return false;
        }
        $i++;
    }
    //Si no se cumple ninguna de las condiciones anteriores, retorna true
    return true;
}
print_r(esPrimo(3) ? "Es primo" : "No es primo");

/************************************************** Ejercicio 3 ***************************************************/
function esPalindromo($cadena){
    //Convierte la cadena a minúsculas y elimina los espacios en blanco
    $cadena = strtolower(str_replace(' ', '', $cadena));
    //Compara la cadena original con su inversa y retorna true si son iguales
    return $cadena == strrev($cadena);
}
echo esPalindromo("Roma ni se conoce sin oro ni se conoce sin amor") ? "Es palíndromo" : "No es palíndromo";


