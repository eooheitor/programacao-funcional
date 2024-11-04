<?php

namespace public;

class ViewForm
{
  public function returnHead()
  {
    return '
      <!DOCTYPE html>
        <html lang="pt-br">

        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Conversor de Moedas</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>
    ';
  }

  public function inicaBody()
  {
    return '
    <body>
  <div class="container mt-5">
    <div class="row justify-content-center">
    ';
  }

  public function finalizaBody()
  {
    return '
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
    ';
  }

  public function returnForm()
  {
    return '
      <div class="col-8">
        <h2 class="text-center mt-3">Conversor de moedas</h2>
        <form class="mt-5" action="/" method="POST">
          <div class="row g-3">
            <div class="col">
              <label for="moeda_de" class="form-label">De*</label>
              <select class="form-control" name="moeda_de" required>
                <option value="USD">USD (Dólar Americano)</option>
                <option value="EUR">EUR (Euro)</option>
                <option value="BRL">BRL (Real Brasileiro)</option>
                <option value="GBP">GBP (Libra Esterlina)</option>
                <option value="JPY">JPY (Iene Japonês)</option>
                <option value="CAD">CAD (Dólar Canadense)</option>
                <option value="AUD">AUD (Dólar Australiano)</option>
                <option value="CHF">CHF (Franco Suíço)</option>
                <option value="CNY">CNY (Yuan Chinês)</option>
                <option value="INR">INR (Rupia Indiana)</option>
              </select>
            </div>

            <div class="col">
              <label for="moeda_para" class="form-label">Para*</label>
              <select class="form-control" name="moeda_para" required>
                <option value="USD">USD (Dólar Americano)</option>
                <option value="EUR">EUR (Euro)</option>
                <option value="BRL">BRL (Real Brasileiro)</option>
                <option value="GBP">GBP (Libra Esterlina)</option>
                <option value="JPY">JPY (Iene Japonês)</option>
                <option value="CAD">CAD (Dólar Canadense)</option>
                <option value="AUD">AUD (Dólar Australiano)</option>
                <option value="CHF">CHF (Franco Suíço)</option>
                <option value="CNY">CNY (Yuan Chinês)</option>
                <option value="INR">INR (Rupia Indiana)</option>
              </select>
            </div>
          </div>
          <div class="mb-3 mt-3">
            <label for="valor" class="form-label">Valor*</label>
            <input type="number" class="form-control" name="valor" placeholder="Digite o valor a ser convertido" required>
          </div>
          <div class="mb-3">
            <label for="taxa_cambio" class="form-label">Taxa de Câmbio*</label>
            <input type="number" class="form-control" name="taxa_cambio" step="0.01" placeholder="Digite a taxa de câmbio" required>
          </div>
          <button type="submit" class="btn btn-primary">Converter</button>
        </form>
      </div>
    ';
  }

  public function returnFooter()
  {
    return '
      <p class="text-center mt-5"> Desenvolvido por Heitor Berischmeier e Marcio Demarchi </p>
    ';
  }

  public function btnLimpar()
  {
    return '
    <div class="d-block mt-3 text-center">
      <a class="btn btn-primary" href="/"> Limpar </a>
    </div>
    ';
  }
}
