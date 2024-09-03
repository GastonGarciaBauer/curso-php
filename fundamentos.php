<?php
    //IMPORTANTE SEPARAR LA LÓGICA DE LO QUE SE RENDERIZA.
    
    //CONSTANTES GLOBALES
    define('nombre', 2);
    
    //CONSTANTES LOCALES
    const NOMBRE = 'Miguel';
    
    //el + solo se usa para sumar numeros
    //el . solo para concatenar
    $name = "Miguel";
    $isDev = true;
    $age = 14;
    
     //IFS

    if($age > 15){
        echo "<h2>Eres viejo, lo siento :( </h2>";
    }
    else{
        echo "<h2>Eres jóven, felicidades!</h2>";
    }
    

    var_dump($name); // devuelve el tipo de dato actual con su valor actual para la variable solicitada.
                    // CUIDADO porque también se muestra en la web.
    gettype($name); // devuelve solo el tipo de dato actual.


    //ternaria
    $age = 13
        ? 'son iguales'
        : 'no son iguales';
    //match es más óptimo que switch case
    $age = match(true){
        $age < 2 => "Eres un bebé",
        $age < 10 => "Eres un niño",
        $age < 18 => "Eres un adolescente",
        $age === 18 => "Eres mayor de edad",
        $age < 40 => "Eres un adulto jóven",
        $age >= 40 => "Eres un adulto viejo",
        default => "Hueles más a madera que a fruta",
    };
    //ARRAYS
    $bestLanguages = ["PHP", 1, "Gasti"];
    $bestLanguages[] = "Java"; // automaticamente agrega Java al final.
    $bestLanguages[3] = "TypeScript"; // sobre-escribe TypeScript en la 3era posición. 
    
    //Iteración de arrays
?>

<ul>
    <?php foreach ($bestLanguages as $language) : ?>
        <li> <?php $language ?>;</li>        
    <?php endforeach;?>
</ul>
    


<h1>
    <?= $name; ?>
</h1>

<style>
    :root{
        color-scheme: dark;
    }

    body{
        display: grid;
        place-content:center;
    }
</style>