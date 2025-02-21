//exercício1
     var newdiv = document.getElementById('newdiv'); 
     newdiv.addEventListener('mouseenter', () => {
      newdiv.style.backgroundColor = 'red';
      newdiv.style.width = '350px'; //increase size
      newdiv.style.height = '350px';
     });

     newdiv.addEventListener('mouseleave', () => {
      newdiv.style.backgroundColor = 'blue'; //volta azul
      newdiv.style.width = '300px'; //original size
      newdiv.style.height = '300px';
     });

//exercício2
     var campotext = document.getElementById('campotext');
     var saida = document.getElementById('saida');
     campotext.addEventListener('input', () => {
      saida.textContent = campotext.value; //mostra texto
     });

//exercicio3
     var botao = document.getElementById('botao');
     var contador = document.getElementById('contador');
     var contagem = 0; //começa a contar
     botao.addEventListener('click',() => {
      contagem++;
      contador.textContent = contagem; //atualiza contagem
     });

//exercicio4
    var div = document.createElement('div');
    div.textContent = 'Bem-vindo a página!';
    div.style.backgroundColor = '#4CAF50';
    div.style.color = 'white';           
    div.style.padding = '20px';           
    div.style.textAlign = 'center';        
    div.style.fontSize = '20px';         
    div.style.borderRadius = '8px';    
    div.style.margin = '20px';              
    document.body.appendChild(div);