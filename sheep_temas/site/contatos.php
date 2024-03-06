<?php require_once('header.php')?>

<!--INICIO MINHA CONTA -->
<div class="minha-conta">
        <div class="container">
            <div class="linha">
                <div class="col-2">
                    <img src="<?=CAMINHO_TEMAS?>/assets/img/contatrtr.png" alt="" width="100%">
                </div>
                <div class="col-2">
                    <div class="formulario">
                        <div class="btn-form">
                            <span>Contato</span>
                        </div>
                        <form action="" method="post" id="CadastroSite" style="margin:-50px 0 0 0">
                            <input type="text" name="nome" id="" placeholder="Nome Completo">
                            <input type="number" name="tel" id="" placeholder="Telefone">
                            <input type="email" name="email" id="" placeholder="E-mail de acesso">
                            <textarea style="margin-top: 5px" name="msg" id="msg" cols="33" rows="5"  placeholder="Deixe sua mensagem!"></textarea>
                            <button type="submit" name="sendCadastro" class="btn">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIM MINHA CONTA -->

<?php require_once('footer.php')?>