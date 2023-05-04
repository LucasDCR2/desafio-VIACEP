<?php

$address = (object) [
    /*'cep' => '',*/
    'logradouro' => '',
    'bairro' => '',
    'localidade' => '',
    'uf' => '',
    'ibge'=>'',
    'ddd'=>''
];

if (isset ($_POST['cep'])) {
    $cep = $_POST['cep'];
    $url = "https://viacep.com.br/ws/{$cep}/json/";

    $address = json_decode(file_get_contents($url));
}

/*if (isset($_POST['cep']) && !empty($_POST['cep'])) {
    echo '<button class="submit" type="submit" name="btn-buscar"><img class="iconeLupa" src="Lupa.png"></button>';
  } else {
    echo '<button class="submit" type="submit" name="btn-buscar" style="display: none;"><img class="iconeLupa" src="Lupa.png"></button>';
  }
*/  
    
?>


   
