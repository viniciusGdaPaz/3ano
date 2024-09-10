function validarCampos(){

   var titulo = document.getElementById("titulo").value;
   var genero = document.getElementById("genero").value;
   var qtdPaginas = document.getElementById("qtdPaginas").value;
   
    var msg = document.querySelector("#msg");
    //validar se o campo titulo foi preenchido
   if(titulo.trim()== '' || titulo == null) {
    //alert("Informe o titulo");
    msg.innerHTML = "Informe o titulo";
    return false;
    //form NÃO será submetido
    }

    if(qtdPaginas == null || qtdPaginas <= 0 ) {
    //alert("Informe o numero correto de paginas");
    msg.innerHTML = "Informe o numero correto de paginas";
    return false;
    //form NÃO será submetido
    }   
   
    return true;
    
}
