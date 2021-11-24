<?php 
$tab[10];
$i ;
for ($i=0;$i<10;$i++)
{
$tab[$i]= readline (" donnez le numero" . ($i+1).":") ;
}
$max = 0;
for ($i=0;$i<10;$i++)
{
    if ($tab[$i]>$max) {
        $max= $tab[$i];
        $position = $i;
        $n = $position+1;
    }
}
echo ("le maximum est ".$max."\n");
echo ( "la position est ".$n);
?>