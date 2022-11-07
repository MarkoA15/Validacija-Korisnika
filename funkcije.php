<?php
function poruka($opcija,$tekst){
    if($opcija==1) return "<p style='color:red'>$tekst</p>";
    if($opcija==2) return "<p style='color:green'>$tekst</p>";
}
function generisiLozinku(){
    $ms=['a', 'b', 'c','d','e','f','g'];
    $vs=['A', 'B', 'C','D','E','F','G'];
    $brojevi=[0, 1, 2, 3, 4, 5, 6,7, 8, 9];
    $sz=['.', '_', '-', "!"];
    $lozinka=$ms[mt_rand(0, count($ms)-1)].$ms[mt_rand(0, count($ms)-1)].$vs[mt_rand(0, count($vs)-1)].$vs[mt_rand(0, count($vs)-1)].$sz[mt_rand(0, count($sz)-1)].$brojevi[mt_rand(0, count($brojevi)-1)];
    return $lozinka;
}