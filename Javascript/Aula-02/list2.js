//exercício1
     function verificarIdade() {
        var idade = parseInt(document.getElementById("idade").value);

        if (isNaN(idade) || idade < 0) {
            document.getElementById("resultado").innerText = "Por favor, insira uma idade válida.";
            return;
        }
        // Verifica se o usuário é maior ou menor de idade
        if (idade >= 18) {
            document.getElementById("resultado").innerText = "Você é maior de idade!";
        } else {
            document.getElementById("resultado").innerText = "Você é menor de idade!";
        }
    }

//exercício2
    function verificarNumero(){
        var numero = parseFloat(document.getElementById("numero").value);
        if (isNaN(numero)){
            document.getElementById("result").innerText = "Insira um número válido"; 
        return;
    }
        if (numero > 0){
            document.getElementById("result").innerText = "O número é positivo";
        } else if (numero < 0){
            document.getElementById("result").innerText = "O número é negativo";
        } else {
            document.getElementById("result").innerText ="O número é zero";
        }
    }

//exercício3
    function verificarUsuário(){
        var usuario = document.getElementById("usuario").value;
        var senha = document.getElementById("senha").value;

        var mensagem = document.getElementById("mensagem");
        if (usuario === "admin" && senha === "12345"){
            mensagem.textContent = "Bem-vindo!";
            mensagem.style.color = "blue";
        
        }else {
            mensagem.textContent = "Erro! Usuário ou senha Incorreto";
        mensagem.style.color = "red";
        }

    }
    //exercício4
         function verificarCalculo() {
            var num1 = parseFloat(document.getElementById("numero1").value);
            var num2 = parseFloat(document.getElementById("numero2").value);
            var operacao = document.getElementById("operacao").value;
            var resultado = document.getElementById("resultado");
            var resultadoOperacao;
            if (operacao === "soma") {
                resultadoOperacao = num1 + num2;
            } else if (operacao === "subtracao") {
                resultadoOperacao = num1 - num2;
            } else if (operacao === "multiplicacao") {
                resultadoOperacao = num1 * num2;
            } else if (operacao === "divisao") {
                if (num2 !== 0) {
                    resultadoOperacao = num1 / num2;
             } else { 
                    resultado.textContent = "Erro! Não é possível dividir por zero.";
                    resultado.style.color = "red";
                    return;
             } 
        }
        resultado.textContent = "Resultado:" + resultadoOperacao;
        resultado.style.color = "blue";
    }

    //exercicio5
        function verificarParImpar() {
            var numero = parseInt(document.getElementById("numero").value);
            var resultado = document.getElementById("resposta");

            if (numero % 2 ===0){
                resultado.textContent = "O número" + numero + "é par.";
                resultado.style.color = "blue";
            }else {
                resultado.textContent = "O número" + numero + "é Ímpar.";
                resultado.style.color = "green";
            }
        }
    
    //exercício6
        function verificarNumeroMaior() {
            var num1 = parseFloat(document.getElementById("numero1").value);
            var num2 = parseFloat(document.getElementById("numero2").value);
            var num3 = parseFloat(document.getElementById("numero3").value);

            var resultado = document.getElementById("resultado");

            if (num1 >= num2 && num1 >= num3) {
                resultado.textContent = "O maior número é: " + num1;
            } else if (num2 >= num1 && num2 >= num3) {
                resultado.textContent = "O maior número é: " + num2;
            } else {
                resultado.textContent = "O maior número é: " + num3;
            }
        }
    

    //exercício7
        function verificarTriangulo(){
            var lado1 = parseFloat(document.getElementById("lado1").value);
            var lado2 = parseFloat(document.getElementById("lado2").value);
            var lado3 = parseFloat(document.getElementById("lado3").value);
            var resultado = document.getElementById("certo");

         if ((lado1 + lado2 > lado3) && (lado1 + lado3 > lado2) && (lado2 + lado3 > lado1)){
            resultado.textContent = "O triângulo é Válido e Equilátero.";

            } else if ( (lado1 === lado2 || lado2 === lado3 || lado1 === lado3)){
            resultado.textContent = "O triângulo é válido e Isósceles.";
        
        } else {
            resultado.textContent = "O triângulo é Válido e é ESCALENO.";
             }  
     { 
            resultado.textContent = "OS lados não formam um triângulo válido";
            resultado.style.color = "red";
        }
    
    }