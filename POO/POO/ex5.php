<?php
class Documento
{
    private $num1;
    public function getNumero()
    {
        return $this->num1;
    }
    public function setNumero($i)
    {
        $this->num1 = $i;
    }
}

class CPF extends Documento
{
    public function validar(): bool
    {
        $cpf = $this->getNumero();
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if (strlen($cpf) != 11) {
            $_SESSION["danger"] = "O CPF precisa de 11 dígitos. Digite novamente.";
            header("Location: ex5.php");
            die();
        }

        $verificaJ = $cpf[9];
        $verificaK = $cpf[10];

        $J_letra = 10;
        $J_array = [];
        $J_soma = 0;
        for ($i = 0; $i <= 8; $i++) {
            $J_array[] = $cpf[$i] * $J_letra;
            $J_letra--;
            $J_soma += $J_array[$i];
        }

        $J_resto = $J_soma % 11;
        $J_subtracao = 11 - $J_resto;

        if ($J_subtracao > 9) {
            $J = 0;
        } else {
            $J = $J_subtracao;
        }

        $K_letra = 11;
        $K_array = [];
        $K_soma = 0;
        for ($ii = 0; $ii <= 9; $ii++) {
            $K_array[] = $cpf[$ii] * $K_letra;
            $K_letra--;
            $K_soma += $K_array[$ii];
        }

        $K_resto = $K_soma % 11;
        $K_subtracao = 11 - $K_resto;
        if ($K_subtracao > 9) {
            $K = 0;
        } else {
            $K = $K_subtracao;
        }

        if ($verificaJ == $J && $verificaK == $K) {
            return true; 
        } else {
            return false;
        }
    }
}

$cpf = new CPF();
$cpf->setNumero("11111111111");

if ($cpf->validar()) {
    echo "O CPF é válido";
} else {
    echo "O CPF é inválido";
}
?>