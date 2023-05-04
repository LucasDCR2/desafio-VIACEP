<?php
    include_once ('cep.php');
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class = "cabecalho">
        <img class = "logo-imagem" src="cepimg.png" alt=" Logo Cep">
        <nav class = "cabecalho-conteudo">
            <a href="https://viacep.com.br/modulos_e_pacotes/" target = "blank" class = "cabecalho-item">Documentação</a>
            <a href="https://viacep.com.br/ws/RS/Porto%20Alegre/Domingos/json/" target = "blank" class = "cabecalho-item">Exemplo</a>
        </nav>
    </header>

    <main class="principal">
  <section>
    <div class="divisao">
      <div class="input">
        <form action="." method="post" id="form">
          <label for="cep"></label>
          <input class="digitarCep" type="text" id="cep" name="cep" size="8" maxlength="8" placeholder="DIGITE O CEP" value="<?php echo $address->cep ?? '' ?>" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
          <button class="submit" type="submit" name="btn-buscar"><img class="iconeLupa" src="Lupa.png"></button>
          <?php
          if (isset($_POST['btn-buscar'])) {
            echo '
            <div class="busca">
            <input type="text" name="rua" value="' . (isset($address->logradouro) ? "Rua : " . $address->logradouro : '') . '" readonly>
              <input type="text" name="bairro" value="' . (isset($address->bairro) ? "Bairro : " . $address->bairro : '') . '" readonly>
              <input type="text" name="cidade" value="' . (isset($address->localidade) ? "Localidade : " . $address->localidade : '') . '" readonly>
              <input type="text" name="estado" value="' . (isset($address->uf) ? "UF : " . $address->uf : '') . '" readonly>
              <input type="text" name="IBGE" value="' . (isset($address->ibge) ? "IBGE : " . $address->ibge : '') . '" readonly>
              <input type="text" name="DDD" value="' . (isset($address->ddd) ? "DDD : " . $address->ddd : '') . '" readonly>
            </div>';
          }
          ?>
        </form>
      </div>
    </div>
  </section>
</main>


<footer class = "footer">
        <h3>Desenvolvido por Lucas</h3>
</footer>
    
</body>
</html>



