function validarFormulario(){
    //obtém o formulario
    const formulario = document.getElementById("meuFormulario");
    const campos = formulario.querySelectorAll('input[type="text"]');

    //loop para ṕercorrer todos os campos do formulario

    for(let campo of campos){
        const valor = campo.value.trim();//tira tds os espaões em branco do campo
        //verifica se op campo esta vazio
        if(valor===''){
            alert("O campo"+campo.name+" não pode ser vazio");
            campo.focus();
            return false;
        }

        //verifica se os campos tem números
        const contemNumero = /\d/.test(valor);
        if(contemNumero){
            alert("O "+campo.name+" não pode conter numero");
            campo.focus();
            return false;
        }

    }

}
