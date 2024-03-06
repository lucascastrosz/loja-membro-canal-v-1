<?php require_once('header.php')?>

<!--INICIO CARRINHO-->
<div class="corpocategorias carrinho-compras">
         <!--INICIO TABELA-->
         <table>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>

            <!--INICIO ITEM CARRINHO-->
            <tr>
                <td>
                    <div class="info-carrinho">
                        <img src="<?=CAMINHO_TEMAS?>/assets/img/carrinho/carrinho-1.jpg" alt="">
                        <div>
                            <p>Curso Loja Virtual</p>
                            <small>Valor: R$ 777</small>
                            <br>
                            <a href="">Remover</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="number" id="" value="1">
                    </form>
                </td>
                <td>R$777</td>
            </tr>
            <!--FIM ITEM CARRINHO-->

                <!--INICIO ITEM CARRINHO-->
                <tr>
                    <td>
                        <div class="info-carrinho">
                            <img src="<?=CAMINHO_TEMAS?>/assets/img/carrinho/carrinho-2.jpg" alt="">
                            <div>
                                <p>Curso Loja Virtual</p>
                                <small>Valor: R$ 777</small>
                                <br>
                                <a href="">Remover</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="number" id="" value="1">
                        </form>
                    </td>
                    <td>R$777</td>
                </tr>
                <!--FIM ITEM CARRINHO-->

                    <!--INICIO ITEM CARRINHO-->
            <tr>
                <td>
                    <div class="info-carrinho">
                        <img src="<?=CAMINHO_TEMAS?>/assets/img/carrinho/carrinho-3.jpg" alt="">
                        <div>
                            <p>Curso Loja Virtual</p>
                            <small>Valor: R$ 777</small>
                            <br>
                            <a href="">Remover</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="number" id="" value="1">
                    </form>
                </td>
                <td>R$777</td>
            </tr>
            <!--FIM ITEM CARRINHO-->
         </table>
         <!--FIM TABELA-->

        <!--INICIO VALOR TOTAL-->
        <div class="valor-total">
            <table>
                <tr>
                    <td>Sub-Total</td>
                    <td>R$ 700</td>
                </tr>

                <tr>
                    <td>Frete</td>
                    <td>R$ 77</td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>R$ 777</td>
                </tr>
            </table>
        </div>
        <!--FIM VALOR TOTAL-->



    </div>
    <!--FIM CARRINHO-->

<?php require_once('footer.php')?>