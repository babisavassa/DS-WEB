var capital = Number.parseInt(prompt("Digite a Capital Inicial:"))
var temp = Number.parseInt(prompt("Digite o Tempo:"))
var taxa = Number.parseInt(prompt("Digite a Taxa de Juros:"))

var result = alert(capital * (1+(taxa/100) ** temp))

alert (result.toFixed(2))

