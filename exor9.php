<?php
$max = 0;
$i=0;
$b=null;

do {
    $b = (int) readline ("entrez un nombre \n "  );

    if ($b>$max){
        $max=$b;
    }
    else
    {
         $max=$max;
     } 
     
    }
while  ($b!=0);


   
   echo( "la valeur max: ".$max );


?>