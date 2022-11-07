<?php
require_once("funkcije.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="slike/avatar.png" type="image/x-icon">
    <title>Validacija</title>
</head>

<body>
    <div class="glavni">
       <a href="index.php"><img src="slike/avatar.png" alt="Slika avatara" height="160px"></a><br><br>
        <label for="">E-mail</label>
        <input type="email" name="korime" id="korime">
        <label for="">Password</label>
        <input type="password" name="lozinka" id="lozinka"><br><br>
        <button id="login">Log in</button><br><br>
        <div id="answer"></div>
        <button id="reg">Nemate nalog? Registrujte se</button> <button id="forgetpass">Zaboravili ste
            lozinku?</button><br><br>
        <div id="inputreg" style="display: none;">
            <input type="text" id="ime" placeholder="Unesite vase ime"><br><br>
            <input type="text" id="prezime" placeholder="Unesite vase prezime"><br><br>
            <input type="email" id="emailr" placeholder="Unesite vas e-mail"><br><br>
            <input type="text" id="adresa" placeholder="Unesite vasu adresu"><br><br>
            <input type="text" id="grad" placeholder="Unesite vas grad"><br><br>
            <button id="newreg">Registruj se</button>
        </div>
        <div id="inpupass" style="display: none;">
            <input type="email" name="passemail" id="passemail" placeholder="Unesite vas e-mail"><br><br>
            <button id="newpass">Posalji novu lozinku</button>
        </div>
        <div id="passdiv"></div>
    </div>
</body>
</html>
<script src="script.js"></script>