<?php

const PI = 3.14;

define ("Tipos", ["String",
"Integer",
"Float",
"Boolean",
"Array",
"Object",
"NULL"]);

var_dump(Tipos);

$Nulo = null;

function iniciar()
{
   
   static $x = 0;
   echo $x;
   $x++;
    
}

iniciar();
iniciar();

