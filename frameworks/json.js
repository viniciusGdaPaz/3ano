//REQUISIÇÃO AJAX
var url = "/framework/grafico_com_tabela/buscaAluno.php";

var xhttp = new XMLHttpRequest();
xhttp.open("GET", url, true);

//Função0 que será chamada quando chegar a resposta da requisição
xhttp.onload = function(){
    var json = xhttp.responseText;
    var d = JSON.parse(json);

   for(var x=0; x<d.length; x++){
   var di = d[x];
   console.log("id:"+di["Id"]+"  /nome"+di["Nome"]+"  /nota"+di["Nota"]);

  
}
    
}

xhttp.send();

