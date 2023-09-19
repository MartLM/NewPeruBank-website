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

function Enviar(){

var msj = document.getElementById("resultado");
var dni = document.getElementById('dni').value;
var pass = document.getElementById('pass').value;

ajax = objetoAjax();
ajax.open("POST","../php-omen/validar.php",true);
ajax.onreadystatechange=function(){
    if(ajax.readyState==4 && ajax.status == 200){
        
        if(ajax.responseText == 'ok'){
            msj.style.opacity = 1;
            msj.innerHTML = "¡Datos Correctos!";
            setTimeout(function mensaje(){
                document.getElementById("resultado").style.opacity = 0;
                document.getElementById("dni").value = "";
                document.getElementById("pass").value = "";
                window.location.replace("principal.php");
            },2000);
        }
        if(ajax.responseText == 'no'){
            msj.style.opacity = 1;
            document.getElementById("dni").value = "";
            document.getElementById("pass").value = "";
            document.getElementById("resultado").innerHTML = 'Usuario o contraseña incorrecta';
            setTimeout(function mensaje(){
                document.getElementById("resultado").style.opacity = 0;
            },2000);
        }
        if(ajax.responseText == '1'){
            msj.innerHTML = 'null';
        }
    } 
}
ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");
ajax.send("d="+dni+"&"+"p="+pass);
}

