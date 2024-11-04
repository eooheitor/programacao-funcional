<?php

namespace app;
use app\ControlaConversao;

class Converter extends ControlaConversao
{
  public function verificaFormulario()
  {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $moedaDe = $_POST['moeda_de'] ?? '';
      $moedaPara = $_POST['moeda_para'] ?? '';
      $valor = $_POST['valor'] ?? '';
      $taxaCambio = $_POST['taxa_cambio'] ?? '';

      $entradas = [$valor, $taxaCambio];
      $validacoes = $this->validarEntradas($entradas);

      return [
        'moedaDe' => $moedaDe,
        'moedaPara' => $moedaPara,
        'valor' => $valor,
        'taxaCambio' => $taxaCambio,
        'validacoes' => $validacoes
      ];
    }
    return [];
  }

  public function retornaErros($dadosFormulario)
  {
    $validacoes = $dadosFormulario['validacoes'];
    $erros = [];

    if (!$validacoes[0]) {
      $erros[] = "O valor a ser convertido deve ser numérico e positivo.";
    }
    if (!$validacoes[1]) {
      $erros[] = "A taxa de câmbio deve ser numérica e positiva.";
    }

    if (!empty($erros)) {
      $this->exibirMensagemErro($erros);
    }
  }

  public function retornaHtml($dadosFormulario)
  {
    $resultado = $this->processarConversao(
      $dadosFormulario['moedaDe'],
      $dadosFormulario['moedaPara'],
      $dadosFormulario['valor'],
      $dadosFormulario['taxaCambio']
    );

    echo "<div style='text-align: center; margin-top: 50px;'>";
    echo "<p>Valor em {$resultado['moedaDe']}: {$resultado['valor']}</p>";
    echo "<p>Taxa de câmbio ({$resultado['moedaDe']} para {$resultado['moedaPara']}): {$resultado['taxaCambio']}</p>";
    echo "<h3>Valor em {$resultado['moedaPara']}: " . number_format($resultado['valorConvertido'], 2) . "</h3>";
    echo "</div>";
  }

  public function executarConversao()
  {
    $dadosFormulario = $this->verificaFormulario();
    $this->retornaErros($dadosFormulario);
    $this->retornaHtml($dadosFormulario);
  }
}
