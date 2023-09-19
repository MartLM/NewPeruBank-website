var boton1 = 0;
emailflag = 0;
passflag = 0;
dniflag = 0;
nomflag = 0;
apeflag = 0;
userflag = 0;
conf = 0;

function activar() {
    if (
        passflag == 1 &&
        dniflag == 1 
    ) {
        // document.getElementById("button-ingresar").disabled = false;
        // document.getElementById("button-ingresar").style.background = "#fff3";
    } else {
        // document.getElementById("button-ingresar").disabled = true;
        // document.getElementById("button-ingresar").style.background = "#ffff";
    }
}

document.getElementById("pass").addEventListener("input", function () {
    contraseña = document.getElementById("pass").value;

    validar = document.getElementById("data-pass");
    contra = document.getElementById("pass-conf").value;
    if (contra == contraseña) {
        validar.innerHTML = "";
        passflag = 1;
    } else {
        validar.innerHTML = "Contraseña incorrecta";
        // document.getElementById("button-ingresar").style.display = "none";
        passflag = 0;
    }
    if (contraseña.length == 0) {
        validar.innerHTML = "";
        passflag = 0;
    }

    activar();
});

document.getElementById("pass-conf").addEventListener("input", function () {
    contraseña = document.getElementById("pass").value;

    validar = document.getElementById("data-pass");
    contra = document.getElementById("pass-conf").value;
    if (contra == contraseña) {
        validar.innerHTML = "";
        passflag = 1;
    } else {
        validar.innerHTML = "Contraseña incorrecta";
        // document.getElementById("boton").style.display = "none";
        passflag = 0;
    }
    if (contra.length == 0) {
        validar.innerHTML = "";
        passflag = 0;
    }
    activar();
});

document.getElementById("dni").addEventListener("input", function () {
    valor = document.getElementById("dni").value;
    dni = document.getElementById("data-dni-nombre");
    if (/^\d{8}$/.test(valor)) {
        dni.innerHTML = "";
        dniflag = 1;
    } else {
        dni.innerHTML = "DNI incorrecto";
        // document.getElementById("boton").style.display = "none";
        dniflag = 0;
    }
    if (valor.length == 0) {
        dni.innerHTML = "";
        dniflag == 1;
    }
    activar();
});

function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != "undefined") {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function Enviar() {

    var nom = document.getElementById("name").value;
    var dni = document.getElementById("dni").value;
    var pass = document.getElementById("pass").value;
    var pass_conf = document.getElementById("pass-conf").value;
    

    ajax = objetoAjax();
    ajax.open("POST", "../php-omen/registro.php", true);
    ajax.onreadystatechange=function(){
        if(ajax.readyState == 4 && ajax.status == 200)   {
            if (ajax.responseText == 'correcto') {
                conf = 2;
                document.getElementById("resultado").style.opacity = 1;
                document.getElementById("resultado").innerHTML = "¡Cuenta creada correctamente!";
                setTimeout(function mensaje() {
                    document.getElementById("resultado").style.opacity = 0;
                    window.location.replace("principal.php");
                    
                }, 2000);
            }
            // if (ajax.responseText == "dni") {
            //     document.getElementById("resultado").style.opacity = 1;
            //     document.getElementById("resultado").innerHTML = "El DNI ya está en uso";
            //     setTimeout(function mensaje() {
            //         document.getElementById("resultado").style.opacity = 0;
            //     }, 2000);
            // }
            if (ajax.responseText == "error") {
                document.getElementById("resultado").style.opacity = 1;
                document.getElementById("resultado").innerHTML = "Error en creación de cuenta";
                setTimeout(function mensaje() {
                    document.getElementById("resultado").style.opacity = 0;
                }, 2000);
            }
        }
    };
    ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");
    ajax.send("name="+nom+"&"+"dni="+dni+"&"+"pass="+pass+"&"+"pass-conf="+pass_conf);
}
