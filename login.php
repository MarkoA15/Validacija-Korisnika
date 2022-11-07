<?php 
require_once("funkcije.php");
$baza=@mysqli_connect("localhost","root","","bazaprodavnice");
if(!$baza) echo "Neuspesna konekcija!!!";
    $izbor=$_GET['izbor'];
        if($izbor=="provera"){
            $korime=$_POST['korime'];
            $lozinka=$_POST['lozinka'];
            if($korime!="" and $lozinka!=""){
                $upit="SELECT * FROM korisnici WHERE email='{$korime}'";
                mysqli_query($baza,"SET NAMES UTF-8");
                $obrada=mysqli_query($baza,$upit);
                if(mysqli_num_rows($obrada)==1){
                    while($korisnik=mysqli_fetch_object($obrada)){
                        if($korisnik->aktivan==1){
                            if($korisnik->lozinka==$lozinka){
                                echo poruka(2,"Dobro dosli,uneti podaci su validni.");
                            }
                            else echo poruka(1,"Pogresna lozinka,pokusajte ponovo!!!");
                        }
                        else echo poruka(1,"Korisnik postoji,ali nije aktivan.");
                    }
                }
                else echo poruka(1,"Korisnik sa mejlom {$korime} ne postoji.");
            }
           else echo poruka(1,"Svi podaci su obavezni!!!");
    }
    if($izbor=="novalozinka"){
        $mejl=$_POST['email'];
            if($mejl!=""){
                $novaLozinka=generisiLozinku();
                $upit2="UPDATE korisnici SET lozinka='{$novaLozinka}' WHERE email='{$mejl}'";
                $obrada2=mysqli_query($baza,$upit2);
                if(mysqli_error($baza)){
                     echo poruka(1,"Doslo je do greske,pokusajte ponovo!");                    
                }
                else echo poruka(2,"Uspesno promenjena lozinka,proverite vas e-mail.");
            }    
            else echo poruka(1,"Morate uneti e-mail!");
             
    }
    if($izbor=="registracija"){
        $ime=$_POST['imer'];
        $prezime=$_POST['prezimer'];
        $email=$_POST['emailr'];
        $adresa=$_POST['adresa'];
        $grad=$_POST['grad'];
        $upit3="INSERT INTO korisnici (ime,prezime,email,lozinka,adresa,grad) VALUES ('{$ime}','{$prezime}','{$email}','112233','{$adresa}','{$grad}')";
        $obrada3=mysqli_query($baza,$upit3);
        if($ime=="" and $prezime=="" and $email=="" and $adresa=="" and $grad=="" ){
            echo poruka(1,"Svi podaci su obavezni!!!");
        }
        else echo poruka(2,"Dobro dosli na nas sajt,uspesno ste se registrovali!");
    }
