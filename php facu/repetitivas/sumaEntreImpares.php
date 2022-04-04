<?php
echo "ingrese un número: \n";
$a = trim(fgets(STDIN));
echo"ingrese otro número: \n";
$b= trim(fgets(STDIN));
if($a%2 == 0){
    $par= $a+1;
    for($suma= $par;$suma<$b;){
        $suma = $suma +2;
    }
    echo"la suma total de los numeros impares es: ".$par;
}else{
    for($a; $a<$b;){
        $a= $a + 2;
    }
    echo"la suma total de los numeros impares es: ".$a;
}
