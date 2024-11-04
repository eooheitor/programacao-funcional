<?php
require_once __DIR__ . '/../vendor/autoload.php';

use public\ViewForm;
use app\Converter;

$converter = new Converter;
$viewForm = new ViewForm;

echo $viewForm->returnHead();
echo $viewForm->inicaBody();
echo $viewForm->returnForm();
if ($_POST) {
  echo $converter->executarConversao();
  echo $viewForm->btnLimpar();
}
echo $viewForm->returnFooter();
echo $viewForm->finalizaBody();
