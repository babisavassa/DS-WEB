
        //exercício1
        function boasVindas() {
            var nome = document.getElementById("nome").value; 
            var mensagem = "Bem-vindo, " + nome + "!"; 
            document.getElementById("mensagem").innerText = mensagem;
        }

        //exercício2
        function validarParOuImpar(){
            var numero = document.getElementById("numero").value;
            numero= Number(numero)
            if (numero % 2 === 0){
                document.getElementById("resultado").innerHTML = "O número " + numero + " é par.";
            }else{
                document.getElementById("resultado").innerHTML = "O número " + numero + " é impar.";
            }
        }

        //exercício3
        function converterCaixaAlta() {
            var texto = document.getElementById("texto").value; 
            var resultado = texto.toUpperCase(); 
            document.getElementById("resposta").innerText = "Texto em Caixa Alta: " + resultado;
        }

        //exercício4
        function calcularPorcentagem() {
            var valor = parseFloat(document.getElementById("valor").value); 
            var porcentagem = parseFloat(document.getElementById("porcentagem").value);
            var valorAcrescido = valor + (valor * porcentagem / 100);
            document.getElementById("result").innerText = "Valor acrescido da porcentagem: R$ " + valorAcrescido.toFixed(2);
        }

        //exercício5
        function mudarCor(){
            var div = document.getElementById("minhaDiv");
            var cores = ["lightblue", "lightgreen", "lightcoral", "lightskyblue","lightpink"];
            var corAleatoria = cores[Math.floor(Math.random()* cores.length)];
            div.style.backgroundColor = corAleatoria;
        }
    
