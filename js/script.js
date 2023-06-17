function clicar(){

    if(document.querySelector("#cadeado").innerHTML == "lock_open"){
        document.getElementById("update-inner").click();
    }
}

function cadeado(){

    var campos = document.querySelectorAll(".dados-campo");

    if(document.querySelector("#cadeado").innerHTML == "lock"){
        document.querySelector("#cadeado").innerHTML = "lock_open";

        for (var i = 1; i < campos.length; i++){
            if(i != 5){
                campos[i].removeAttribute("readonly");
            }else{
                campos[i].removeAttribute("disabled");
            }
        }
    }else{
        document.querySelector("#cadeado").innerHTML = "lock";

        for (var i = 1; i < campos.length; i++){
            if(i != 5){
                campos[i].setAttribute("readonly", "true");
            }else{
                campos[i].setAttribute("disabled", "true");
            }
        }
    }
}

function deletar(){
    window.location.href = "../php/delete_dados.php";
}

$(document).ready(function() {

$("#tabela-consulta").load("../php/consulta.php");

})