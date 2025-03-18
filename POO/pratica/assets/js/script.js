//Função par avalidação dos dados do clientes
 function validarDadosCliente(){

    if(formulario.nome.value.length < 3 || formulario.nome.value == ""){
        formulario.nome.focus();
       // alert("Prencha o campo nome corretamente\nVerifique se o nome possui mais do que 3 caracterer.")
       document.getElementById('erro-nome').innerHTML="verfique se o nome possui mais de 2 caracteres.";
        document.getElementById('erro-email').innerHTML="";
        document.getElementById('erro-observacao').innerHTML="";
        return false
    }

   /*if(formulario.email.value.indexOf('@') ==-1 || formulario.email.value.indexOf('.')==-1){ //se formulario n tiver @ OU . (==-1/esta vazio) dara erro
        alert
    }*/

    //Forma mais organizada do exemplo acima
    if(formulario.email.value=="" || //se o campo estiver vazio
        formulario.email.value.indexOf('@')==-1 || //ou sem @
        formulario.email.value.indexOf('.')==-1){ //ou sem .
        formulario.email.focus();
        document.getElementById('erro-nome').innerHTML="";
        document.getElementById('erro-email').innerHTML="verfique se o nome possui mais do que 7 caracteres";
        document.getElementById('erro-observacao').innerHTML="";

        //alert("Preencha o Campo email Corretamente!");
        return false;
     }
    
     if(formulario.observacao.value.length > 1000){
        formulario.observacao.focus();
        document.getElementById('erro-nome').innerHTML="";
        document.getElementById('erro-email').innerHTML="";
        document.getElementById('erro-observacao').innerHTML="Execeu a capacidade de 1000 caracteres! <br>No momento possui" +formulario.observacao.value.length;
       // alert("Ecedeu a capacidade de caracteres!\nNo momento possui: " +formulario.observacao.value.length);
        return false;
        

        }
    }

   