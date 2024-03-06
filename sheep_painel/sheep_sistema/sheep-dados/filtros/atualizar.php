<!-- Main Content -->
<div class="main-content" >
     <!--INICIO MSGS DE RETORNO MAYKON SILVEIRA--->
          <?php include_once 'token.php'; ?>
      <!--FIM MSGS DE RETORNO MAYKON SILVEIRA--->
      <br>



<?php 

//proteção para usuário logado
require_once('sheep-filtros/valida.php');
$atualizar = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(isset($atualizar['sendSheep'])){
    unset($atualizar['sendSheep']);

    $atualizar['logo'] = $_FILES['logo']['tmp_name'] ? $_FILES['logo'] : null;
    $atualizar['icone'] = $_FILES['icone']['tmp_name'] ? $_FILES['icone'] : null;

    if($atualizar['sheep_firewall'] != $_SESSION['_sheep_firewall']){
        header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-dados/index&erro=true&token{$_SESSION['timeWT']}" );
        exit();
    }

    $salvar = new Dados();
    $salvar->atualizarDados($atualizar['id'], $atualizar);
    if($salvar->getResultado()){
        $_SESSION['_sheep_firewall'] = hash('sha512', random_int(100, 5000));
        header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-dados/index&sucesso=true&token{$_SESSION['timeWT']}" );
    } else {
        header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-dados/index&erro=true&token{$_SESSION['timeWT']}" );
    }
}

?>


</div>