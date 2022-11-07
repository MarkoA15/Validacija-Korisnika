function poruka(opcija, tekst) {
    if (opcija == 1) return "<p style='color:red'>" + tekst + "</p>";
    if (opcija == 2) return "<p style='color:green'>" + tekst + "</p>";
}
$(function () {
    $("#login").click(function () {
        let korime = $("#korime").val();
        let lozinka = $("#lozinka").val();
        $.post("login.php?izbor=provera", { korime: korime, lozinka: lozinka }, function (response) {
            $("#answer").html(response);
        })
    })
    $("#reg").click(function () {
        $("#inputreg").toggle();
        $("#inpupass").hide();
    })
    $("#forgetpass").click(function () {
        $("#inpupass").toggle();
        $("#inputreg").hide();
    })
    $("#newpass").click(function () {
        let email = $("#passemail").val();
        if (email == "") {
            $("#passdiv").html(poruka(1, "Niste uneli email adresu!!!!"));
            return false;
        }
        else {
            $.post("login.php?izbor=novalozinka", { email: email }, function (response) {
                $("#passdiv").html(response);
            })
        }
    })
    $("#newreg").click(function () {
        let imer = $("#ime").val();
        let prezimer = $("#prezime").val();
        let emailr = $("#emailr").val();
        let adresa = $("#adresa").val();
        let grad = $("#grad").val();
        if (imer == "" || prezimer == "" || emailr == "" || adresa == "" || grad == "") {
            $("#passdiv").html(poruka(1, "Svi podaci su obavezni!!!"));
            return false;
        }
        else {
            $.post("login.php?izbor=registracija", { imer: imer, prezimer: prezimer, emailr: emailr, adresa: adresa, grad: grad }, function (response) {
                $("#passdiv").html(response);
            })
        }
    })
})


