//Função para validação dos dados do Cliente
function validarDadosClientes(){

    if(formulario.nome.value.legth < 3 || formulario.nome.value == ""){
        alert("Preencha o campo nome corretamente!\nVerifique se o nome possui mais do que 2 caracteres.");
        return false;

    }

    if(formulario.email.value == "" ||
    formulario.email.value.typeof('@') ==-1 || 
    formulario.email.value.typeof('.') ==-1){
    formulario.email.focus();
        alert("Preencha o campo email corretamente!");
        return false;
    }

    if(formulario.observacao.value.legth > 1000){
        formulario.observacao.focus();
        alert("Extendeu a capacidade de caracteres!/nNo momento possui" + formulario.observacao.value.legth);
        return false;
    }
}