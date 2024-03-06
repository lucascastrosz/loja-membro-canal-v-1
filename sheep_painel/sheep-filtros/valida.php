<?php 
//se não existir sessão ele derruba
if(!$_SESSION['sheep_user']){
    unset($_SESSION['sheep_user']);
    header("Location: " . URL_CAMINHO_PAINEL . "index.php?sheep_saiu=true");
    exit();
}

//se o nivel não for de admin ele sai
if($_SESSION['sheep_user']['nivel'] != 'M'){
    unset($_SESSION['sheep_user']);
    header("Location: " . URL_CAMINHO_PAINEL . "index.php?sheep_saiu=true");
    exit();

}

//se o status for diferente de ativo ele sai
if($_SESSION['sheep_user']['status'] != 'S'){
    unset($_SESSION['sheep_user']);
    header("Location: " . URL_CAMINHO_PAINEL . "index.php?sheep_saiu=true");
    exit();
}




?>