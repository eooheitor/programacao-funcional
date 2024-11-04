<?php

namespace app;

class ControlaConversao
{
    public function validarEntrada($valor)
    {
        return is_numeric($valor) && $valor > 0;
    }

    public function converterMoeda($valor, $taxa)
    {
        return $valor * $taxa;
    }

    public function validarEntradas($valores)
    {
        return array_map([$this, 'validarEntrada'], $valores);
    }

    public function exibirMensagemErro($mensagens)
    {
        foreach ($mensagens as $mensagem) {
            echo "<p style='color: red;'>Erro: $mensagem</p>";
        }
        echo "<a href='javascript:history.back()'>Voltar</a>";
        exit;
    }

    public function processarConversao($moedaDe, $moedaPara, $valor, $taxaCambio)
    {
        $valorConvertido = $this->converterMoeda($valor, $taxaCambio);
        return [
            "moedaDe" => $moedaDe,
            "moedaPara" => $moedaPara,
            "valor" => $valor,
            "taxaCambio" => $taxaCambio,
            "valorConvertido" => $valorConvertido
        ];
    }
}
