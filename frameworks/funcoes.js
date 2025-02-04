var graf=document.getElementById("grafico");
var tab=document.getElementById("tabela");

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






const months = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
const colors = ["red", "blue", "green", "pink", "gray"];

const values = [200, 50, 400, 250, 300, 450, 500, 350, 100, 250, 400, 200];
function tabela(){
        if (!tab) {
            console.error('Elemento com id "tabela" não foi encontrado no DOM.');
            return;
        }

        // Cria a tabela e configura a borda
        let tabela = document.createElement("table");
        tabela.setAttribute("border", 1);
        tabela.style.width = "100%";
        tabela.style.borderCollapse = "collapse";

        // Cria o cabeçalho
        if(months.length < 10){
            let trHeader = document.createElement("tr");
            let thHeader= document.createElement("th");
            thHeader.innerText = "Mês";
            trHeader.appendChild(thHeader);

            months.forEach((month, index) => {
                let th = document.createElement("th");
                th.innerText = month;
                th.style.textAlign = "center";
        
        
                trHeader.appendChild(th);
            
             });

        tabela.appendChild(trHeader);

        let tr = document.createElement("tr");
        let tdHeader= document.createElement("td");
        tdHeader.innerText = "Valor";
        
        tr.appendChild(tdHeader);

        values.forEach((value, index) => {
            let td= document.createElement("td");
            td.innerText = value;
            td.style.textAlign = "center";
    
    
            tr.appendChild(td);
        
        });
        
        tabela.appendChild(tr);

        
          // Adiciona a tabela ao contêiner "tab"
          tab.innerHTML = ""; // Limpa o conteúdo existente
          tab.appendChild(tabela);



        return;


        }
        
        let trHeader = document.createElement("tr");
        let thMonth = document.createElement("th");
        thMonth.innerText = "Mês";
        let thValue = document.createElement("th");
        thValue.innerText = "Valor";
        trHeader.appendChild(thMonth);
        trHeader.appendChild(thValue);
        tabela.appendChild(trHeader);

        // Adiciona os meses e valores como linhas da tabela
        months.forEach((month, index) => {
            let tr = document.createElement("tr");

        let tdMonth = document.createElement("td");
        tdMonth.innerText = month;
        tdMonth.style.textAlign = "center";

        let tdValue = document.createElement("td");
        tdValue.innerText = values[index];
        tdValue.style.textAlign = "center";

        tr.appendChild(tdMonth);
        tr.appendChild(tdValue);

        tabela.appendChild(tr);
    });

        // Adiciona a tabela ao contêiner "tab"
        tab.innerHTML = ""; // Limpa o conteúdo existente
        tab.appendChild(tabela);
    }


function grafico() {
    if (!graf) {
        console.error('Elemento com id "grafico" não foi encontrado no DOM.');
        return;
    }
    const maxValue = Math.max(...values);
    var largura=window.innerWidth;
    months.forEach((month, index) => {
        let container =document.createElement("div");
        let bar=document.createElement("div");
        let rot=document.createElement("div");
        let val=document.createElement("div");
        rot.className="rotulo";
        val.className="rotulo";
        bar.className="bar";
        let barHeight = ((values[index] / maxValue) * 95);
        let barWidth = largura/months.length;

        
        let colorIndex = index % colors.length;  
        bar.style.backgroundColor = colors[colorIndex];

        bar.style.height = `${barHeight}%`;
        bar.style.width = `${barWidth}%`;
        rot.style.width = `${barWidth}%`;
        val.style.width = `${barWidth}%`;
        val.innerText = values[index];
        rot.innerText=month;
        container.appendChild(val);
        container.appendChild(bar);
        container.appendChild(rot);

        graf.appendChild(container);
    });

}