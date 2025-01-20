function grafico(){
    graf=document.getElementById("grafico");
    //Vetor dos meses
    const months = ["Jan", "fev" , "Mar", "abr", "Jul", "Jun", "Ago", "Set", "Out", "Nov", "Dez","men", "two", "thre"];
    
    //Matriz de Valores
    const values = [200, 50, 400, 250, 300, 458, 500, 350, 100, 250, 400, 200, 100, 20, 30];
    const maxValue = Math.max(...values);
    months.forEach((month, index) => {
        let bar=document.createElement("div");

        bar.className="bar";
        let barHeight = (values[index] / maxValue) * 100;
        bar.style.height = `${barHeight}%`;
        bar.innerText = values[index];
        graf.appendChild(bar);

        let numElemtos = window.innerWidth / months.length ;
        bar.style.width = numElemtos;
    })
}
