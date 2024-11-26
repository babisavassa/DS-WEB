<?php
   
   $frutas = array("Abacate", "Melancia", "Laranja", "Uva", "Manga");
   
   sort($frutas);
   
   foreach ($frutas as $fruta) {
       echo $fruta . "<br> ";
   }
 
   


   $produto = array(
    "nome" => "Pulseira",
    "preco" => 300.00,
    "estoque" => 15
);

    $unidades = 5;

    // Calculando o valor total
    $valor_total = $produto["preco"] * $unidades;

    // Exibindo o resultado com <br> para quebra de linha
    echo "<p>Produto: " . $produto["nome"] . "</p>";
    echo "<p>Preço unitário: R$ " . $produto["preco"] . "</p>";
    echo "<p>Unidades vendidas: " . $unidades . "</p>";
    echo "<p>Valor total: R$ " . number_format($valor_total, 2, ',', '.') . "</p>";

        //URl - é o endereço
    // Li - formato de lista
    //Value - valor associado a cada chave

    echo "<ul>";
    foreach ($produto as $key => $value) {
        echo "<li>" . $key . ": " . $value . "</li>";
    }
    echo "</ul>";

    $produtos = ["Pulseira", "Pingente", "Anel"];

    // Array com os preços dos produtos
    $precos = [300.00, 80.00, 1200.00];

    // Combinando os dois arrays em um array associativo
    $produtos_com_preco = array_combine($produtos, $precos);

    // Exibindo o array resultante
    echo "<pre>";
    print_r($produtos_com_preco);
    echo "</pre>";




        // Criação do array de cores
    $cores = ["vermelho", "azul", "verde", "amarelo", "preto"];

    // Verificação se "verde" está no array
    if (in_array("verde", $cores)) {
        echo "A cor 'verde' está presente no array.";
    } else {
        echo "A cor 'verde' não está presente no array.";
    }


    // Criação do array de números inteiros
$numeros = [10, 20, 30, 40, 50];

// Cálculo da soma de todos os números
$soma = array_sum($numeros);

// Cálculo da média
$media = $soma / count($numeros);

// Exibição dos resultados
echo "Soma: " . $soma . "<br>";
echo "Média: " . $media;
    
   
$produtos = [
    ["Produto1", 19.99, 50],  
    ["Produto2", 39.90, 30],  
    ["Produto3", 12.50, 100], 
    ["Produto4", 7.99, 75]    
];

// Exibindo o nome e o preço de todos os produtos
foreach ($produtos as $produto) {
    list($nome, $preco, $estoque) = $produto;  
    echo "Nome: $nome, Preço: R$$preco<br>";
}


$produtos = [
    ["Produto1", 19.99, 50],  // Nome, preço e estoque do Produto 1
    ["Produto2", 39.90, 30],  // Nome, preço e estoque do Produto 2
    ["Produto3", 12.50, 100], // Nome, preço e estoque do Produto 3
    ["Produto4", 7.99, 75]    // Nome, preço e estoque do Produto 4
];

// Variável para armazenar o valor total em estoque
$valor_total = 0;

// Calculando o valor total em estoque
foreach ($produtos as $produto) {
    list($nome, $preco, $estoque) = $produto;  // Desempacotando as informações de cada produto
    $valor_total += $preco * $estoque;   // Somando o valor total do produto no estoque
}

// Exibindo o valor total em estoque
echo "Valor total em estoque de todos os produtos: R$" . number_format($valor_total, 2, ',', '.') . "<br>";

$alunos = array(
    array('nome' => 'Matheus', 'Matemática' => 8, 'Português' => 7),
    array('nome' => 'Emilie', 'Matemática' => 6, 'Português' => 9),
    array('nome' => 'Lorenzo', 'Matemática' => 7, 'Português' => 8)
);

// Exibindo o nome de cada aluno e suas notas
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno['nome'] . "<br>";
    echo "Nota de Matemática: " . $aluno['Matemática'] . "<br>";
    echo "Nota de Português: " . $aluno['Português'] . "<br>";

    // Calculando a média das notas
    $media = ($aluno['Matemática'] + $aluno['Português']) / 2;
    echo "Média: " . number_format($media, 2, ',', '.') . "<br><br>";
}
?>