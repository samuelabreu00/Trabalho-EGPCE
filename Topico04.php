<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04';
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <h2 class="Titulo" id="T4"> Distribuição de Materiais de Estoque no SIGA/SGBM </h2>
                        <hr>

                        <p><strong>Objetivo:</strong> Compreender a funcionalidade de distribuição de bens no Sistema SIGA/SGBM quando materiais permanentes que ingressaram no almoxarifado saem de condição de estoque para compor o acervo patrimonial.</p>

                        <!-- Sub Título -->
                        <p class="SubTitulo" id="T4one">Requisitar Material de Consumo</p>
                        <hr>

                        <p>O SIGA/SGBM trabalha com o conceito de Requisição de Material por Centro de Custo, cada departamento do órgão ou entidade elegerá dois funcionários para efetuarem as requisições de material, para que na ausência de um, outro possa fazê-lo. As requisições são efetuadas de forma descentralizada, ficando a cargo do perfil “Almoxarife” adequar as quantidades solicitadas com o estoque existente.</p>

                        <p>As requisições de material de consumo serão efetuadas no SIGA/SGBM pelo perfil Requisitante (Setorial), acionando, na barra de menu superior e lateral, o comando: <strong>MOVIMENTOS >> ALMOXARIFADO >> REQUISIÇÃO</strong>.</p>
                        <br>
                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura165.png" data-bs-toggle="modal" data-bs-target="#Imagem165">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura165.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 165 - MODAL -->
                        <div class="modal fade text-center" id="Imagem165" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura24.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 165</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 165 - End --> <br>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura166.png" data-bs-toggle="modal" data-bs-target="#Imagem166">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura166.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 166 - MODAL -->
                        <div class="modal fade text-center" id="Imagem166" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura166.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 166</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 166 - End --> <br>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura167.png" data-bs-toggle="modal" data-bs-target="#Imagem167">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura167.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 167 - MODAL -->
                        <div class="modal fade text-center" id="Imagem167" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura167.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 167</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 167 - End --> <br>
                        <p>Ao acionar o comando na barra de menu, o SIGA/SGBM apresentará a tela de Requisição onde deverão ser preenchidas as seguintes informações:</p>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Observação'', preencha com a informação que considerar importante para o atendimento da requisição, esse é um campo opcional.  </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Selecione qual a modalidade que deseja efetuar a pesquisa do material para requisição, se por “Código” ou “Palavra-Chave”.  </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "editável'', logo abaixo da seleção, informe o “Código” ou a “Palavra-Chave” para a pesquisa do material.  </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"> Acione o botão “Pesquisar” para comandar a busca no SIGA/SGBM. </li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura168.png" data-bs-toggle="modal" data-bs-target="#Imagem168">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura168.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 168 - MODAL -->
                            <div class="modal fade text-center" id="Imagem168" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura168.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 168</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 168 - End --> <br>
                            <p>Efetuando a pesquisa por Palavra Chave o SIGA/SGBM apresentará uma relação de itens que possui a palavra chave na sua descrição. Caso a pesquisa for efetuada por Código o SIGA/SGBM apresentará a tela com apenas o item de código informado.</p>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Observe, no campo “Situação”, o ícone indicador de existência ou não de saldo de estoque do material solicitado, se for VERMELHO o item não possui estoque e, portanto, a requisição não poderá ser atendida, se for VERDE o item tem estoque e pode ser requisitado.  </li>

                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Marque o quadrinho correspondente ao item a ser requisitado (somente poderão ser marcados os itens cujo ícone seja verde). Caso contrário, o SIGA/SGBM não permitirá a requisição. </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo “Quantidade”, informe a quantidade a ser solicitada do item marcado no campo anterior (6), observe que para efeito de precisão de cálculo devem ser utilizadas quatro casas decimais.  </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.6s">Acione o botão “Adicionar” para confirmar a quantidade requisitada para esse item especificamente. 

                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura169.png" data-bs-toggle="modal" data-bs-target="#Imagem169">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura169.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 169 - MODAL -->
                                <div class="modal fade text-center" id="Imagem169" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura169.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 169</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 169 - End --> <br>

                                Acionado o botão Adicionar o SIGA/SGBM retorna à tela de requisição trazendo a grade "Itens selecionados para requisição" contendo o material selecionado para requisição. A referida grade é composta pelos seguintes dados: Código do Material, Descrição, Unidade e Quantidade, essa grade pode ser acrescida de mais materiais, bastando executar novamente os procedimentos de 2 a 8 anteriores. Poderão também ser editados os seguintes dados:
                            </li><br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s"> A coluna de ações na grade possui um ícone em forma de “Lápis” e ao clicar nesse ícone o quantitativo da requisição desse material poderá  ser atualizado.  </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No final da grade, é apresentado um ícone no formato de um "X", clicando nesse ícone, o material é excluído da requisição.  </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionando o botão “Salvar”, é encerrado o modo de edição da requisição,  essa é gravada no SIGA/SGBM e passa a compor a Agenda de Requisições a serem atendidas pelo perfil “Almoxarife” ou “Almoxarife/Gestor Patrimonial”.  </li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura170.png" data-bs-toggle="modal" data-bs-target="#Imagem170">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura170.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 170 - MODAL -->
                            <div class="modal fade text-center" id="Imagem170" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura170.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 170</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 170 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Salvar'', o SIGA/SGBM apresenta a mensagem de sucesso da operação, e o usuário é redirecionado para a tela de detalhes da requisição.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura171.png" data-bs-toggle="modal" data-bs-target="#Imagem171">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura171.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 171 - MODAL -->
                            <div class="modal fade text-center" id="Imagem171" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura171.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 171</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 171 - End --><br>

                            <p>Enquanto a Requisição não for atendida pelo perfil “Almoxarife” ou “Almoxarife/Gestor Patrimonial'', o SIGA/SGBM ficará apresentando, ao usuário requisitante, uma agenda de Requisições aguardando atendimento enquanto o material não for efetivamente entregue. Nessa agenda, poderão ser efetuadas as operações abaixo:</p>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">A coluna de ações na grade possui um ícone em forma de “Lápis" e ao clicar nesse ícone a requisição poderá ser editada.  </li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura172.png" data-bs-toggle="modal" data-bs-target="#Imagem172">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura172.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 172 - MODAL -->
                            <div class="modal fade text-center" id="Imagem172" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura172.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 172</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 172 - End --><br>


                            <p>A tela de edição de requisição será aberta, e todos os passos de 1 a 12 podem ser feitos novamente, ou seja, é possível adicionar ou remover itens ou alterar seus quantitativos, bem como alterar o campo "Observação".</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura173.png" data-bs-toggle="modal" data-bs-target="#Imagem173">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura173.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 173 - MODAL -->
                            <div class="modal fade text-center" id="Imagem173" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura173.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 173</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 173 - End --><br>
                            <p>As requisições salvas podem ser consultadas, alteradas e excluídas por meio do menu: <strong>CONSULTAS >> ALMOXARIFADO >> REQUISIÇÕES</strong>
                            . </p>

                             <!-- Sub Título -->
                        <p class="SubTitulo" id="T4two"> Requisitar Bem Móvel</p>
                        <hr>
                        <br>
                        <p>Um bem móvel, quando adquirido, o seu registro inicial ocorre de forma semelhante ao material de consumo, ou seja, a Nota Fiscal de compra é registrada como "Entrada de Estoque". Neste caso, o bem, apesar de ser classificado como material permanente no Sistema de Catálogo de Materiais, tem seu registro financeiro alocado no Almoxarifado.</p>

                        <p>Somente a partir da saída do almoxarifado, por ocasião da distribuição do bem, este passará a ser considerado patrimônio e, consequentemente, sofrerá durante sua vida útil, a redução de valor por intermédio da depreciação.</p>

                        <p>Dessa forma, a requisição de bem móvel será efetuada pelo "Perfil Requisitante" no SIGA/SGBM, da mesma forma com que ocorre a requisição de material de consumo.</p>

                        <p>Para efetuar uma requisição de bem móvel, na barra de menu do SIGA/SGBM, acione o comando: <strong>MOVIMENTOS >> PATRIMÔNIO >> REQUISIÇÃO BEM</strong>, conforme será demonstrado a seguir: </p>

                        <br><br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura174.png" data-bs-toggle="modal" data-bs-target="#Imagem174">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura174.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 176 - MODAL -->
                        <div class="modal fade text-center" id="Imagem174" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura174.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 174</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 176 - End --> <br>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura175.png" data-bs-toggle="modal" data-bs-target="#Imagem175">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura175.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 177- MODAL -->
                        <div class="modal fade text-center" id="Imagem175" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura175.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 175</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 177 - End --> <br>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura176.png" data-bs-toggle="modal" data-bs-target="#Imagem176
                                
                                ">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura176.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 181 - MODAL -->
                        <div class="modal fade text-center" id="Imagem176" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura176.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 176</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 178 - End --> <br>
                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionada a linha de comando o SIGA/SGBM apresentará a tela de "Requisição" identificando os dados do requisitante, assim como a data da requisição.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Nota" preencher a justificativa de uso para retirado de um item de estoque. Vale ressaltar que a descrição da justificativa deve se limitar a 1000 caracteres.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura177.png" data-bs-toggle="modal" data-bs-target="#Imagem177">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura177.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 177 - MODAL -->
                            <div class="modal fade text-center" id="Imagem177" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura177.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 177</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 177 - End --> <br>


                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Para pesquisar o material a ser requisitado, selecionar a referência de pesquisa se por "Código" ou se por "Palavra Cave". A opção por "Código" o sistema buscará especificamente o item constante no estoque, já a opção por "palavra chave" buscará todos os itens em estoque que contém na sua descrição a palavra chave a ser informada.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Na caixa de texto informar, o "Código" ou a "Palavra chave" de referência..</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionar o botão "Pesquisar" para efetivar a pesquisa.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura178.png" data-bs-toggle="modal" data-bs-target="#Imagem178">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura178.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 178 - MODAL -->
                            <div class="modal fade text-center" id="Imagem178" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura178.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 178</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 178 - End --> <br>


                            <p>Uma vez acionado o botão "Pesquisar" o SIGA SGBM apresentará um janela "<em>Pop up</em>" com o resultado da pesquisa demonstrando uma grade com as informações básicas de requisição do material, inclusive a "Situação" de estoque.</p>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Marcar o quadrículo correspondente ao item resultante da pesquisa, segundo os parâmetros informados.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Observar a coluna "Situação" se apresentar cor "Verde" significa que o item possui estoque disponível para atendimento da requisição, se apresentar a cor "Vermelha" significa que não há estoque disponível.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Quantidade" informar a quantidade requisitada, utilizar sempre quatro casas decimais em seguida acionar o "Botão Adicionar". <br>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura179.png" data-bs-toggle="modal" data-bs-target="#Imagem179">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura179.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 179 - MODAL -->
                                <div class="modal fade text-center" id="Imagem179" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura179.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 179</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 179 - End -->
                            </li><br>


                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Uma vez acionado o botão "Adicionar" o sistema apresenta uma mensagem de sucesso da operação e gera uma grade com os dados básicos do material.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura180.png" data-bs-toggle="modal" data-bs-target="#Imagem180">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura180.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 180 - MODAL -->
                            <div class="modal fade text-center" id="Imagem180" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura180.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 180</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 180 - End --> <br>


                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Na grade apresentada poderão ser adicionados outros itens na Requisição por meio dos comandos 03 a 08.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Na coluna "Ações" serão apresentadas duas figuras: a primeira em formato de "lápis" que se acionada possibilitará a edição da quantidade ou do item requisitado, a segunda figura em formato de "X" apagará o item da requisição.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"> Acionado o botão "Salvar" a requisição é finalizada.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura181.png" data-bs-toggle="modal" data-bs-target="#Imagem181">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura181.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 183 - MODAL -->
                            <div class="modal fade text-center" id="Imagem181" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura181.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 181</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 183 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionado o botão "Salvar" o sistema apresentará uma janela "Pop up" solicitando a confirmação da operação.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura182.png" data-bs-toggle="modal" data-bs-target="#Imagem182">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura182.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 182 - MODAL -->
                            <div class="modal fade text-center" id="Imagem182" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura182.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 182</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 182 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez confirmada a operação o sistema apresentará uma mensagem de sucesso no canto direito do vídeo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Em seguida o sistema apresenta a grade demonstrando os materiais requisitados.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Ficarão habilitados os botões "Cancelar", "Editar" e "Nova" permitindo o retrocesso da operação até o momento do atendimento da requisição.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura183.png" data-bs-toggle="modal" data-bs-target="#Imagem183">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura183.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 183 - MODAL -->
                            <div class="modal fade text-center" id="Imagem183" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura183.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 183</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 184 - End -->
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Enquanto não ocorre o atendimento da Requisição, ficará visível tanto na tela do "perfil Requisitante" a agenda das requisições que aguardam atendimento e na "coluna ações" essa requisição poderá ser editada, quando ainda não atendida.</li>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura184.png" data-bs-toggle="modal" data-bs-target="#Imagem184">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura184.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 184 - MODAL -->
                            <div class="modal fade text-center" id="Imagem184" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura184.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 184</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </ol>

                        <!-- Sub Título -->
                        <p class="SubTitulo" id="T4three"> Atender Requisição de Material de Consumo</p>
                            <hr>
                            <br>
                            <p>As requisições de material no SIGA/SGBM tramitam na rede de computadores de forma sistemática e o "perfil Almoxarife" é quem controla os níveis de estoque para atender a demanda em curso.  </p>
                            <p>Para isso dispõe no SIGA/SGBM de uma agenda permanente de requisições que vão sendo apresentadas a medida que os requisitantes fazem seus pedidos. Esta agenda denomina-se "Requisições Aguardando Atendimento" que acumulam requisições tanto para Almoxarifado (material de consumo) como para Patrimônio (material permanente), uma vez que ambos os materiais são originalmente itens de estoque e portanto sob a gestão do perfil "Almoxarife".</p>                                                        
                            <br>
                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Nesse caso trataremos da Requisição de Material de Consumo, essa agenda é composta pelos seguintes dados: Nº da Solicitação, Nome do solicitante, Departamento de origem, Data,  Status da Requisição e Ações.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> Na coluna "Ações" o ícone de cor azul no formato de "Lupa" permite, ao ser clicado, visualizar o conteúdo da Requisição. </li> 
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Também na coluna "Ações" o ícone de cor bege no formato de "Carrinho de Compras" permite, ao ser clicado, proceder ao atendimento da requisição. </li>                                                               
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura185.png" data-bs-toggle="modal" data-bs-target="#Imagem185">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura185.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 185 - MODAL -->
                                <div class="modal fade text-center" id="Imagem185" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura185.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 185</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 185 - End --> <br>
                               
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o ícone no formato de "Lupa" será apresentada o detalhe da requisição, no rodapé terá dois botões: "Atender" ao ser clicado permitirá a edição da quantidade do material a ser atendida, "Nova" permite ao perfil "Almoxarife" editar uma nova requisição para o solicitante. </li>
                                
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura186.png" data-bs-toggle="modal" data-bs-target="#Imagem186">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura186.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 186 - MODAL -->
                                <div class="modal fade text-center" id="Imagem186" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura186.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 186</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 186 - End -->
                                <br>
                                <p>Acionado o ícone no formato de "Carrinho de Compras" ou o botão "Atender", será apresentada a janela "Atendimento de Requisição onde deverão ser preenchidos os seguintes campos:</p>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Data de Atendimento" clicar no ícone no lado direito do campo e acessar o calendário e marcar o dia, mês e ano correspondente à data de atendimento da requisição. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Qtde Atendida" informar a quantidade do material que deverá ser entregue ao requisitante (o referido campo possui 4 casas decimais, o valor "inteiro" sempre estará à frente da vírgula).  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionar o botão "Salvar" para atender à Requisição.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Acionar o botão "Atender todas" para preencher a "Qtde Solicitada" no campo "Qtde Atendida".</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura187.png" data-bs-toggle="modal" data-bs-target="#Imagem187">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura187.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 187 - MODAL -->
                                <div class="modal fade text-center" id="Imagem187" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura187.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 187</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 187 - End --> <br>


                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez acionado o botão "Salvar" será apresentado uma tela de consulta da requisição e poderá ser acionado o botão "Imprimir" gerando um documento em formato "PDF" que servirá como protocolo de entrega do material ou acionado o botão “Novo” para iniciar uma outra Requisição para o mesmo departamento requisitante. </li>
                               

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura188.png" data-bs-toggle="modal" data-bs-target="#Imagem188">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura188.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 183 - MODAL -->
                                <div class="modal fade text-center" id="Imagem188" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura188.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 188</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 183 - End --> 
                                <br><br>                               

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura189.png" data-bs-toggle="modal" data-bs-target="#Imagem189">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura189.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 189 - MODAL -->
                                <div class="modal fade text-center" id="Imagem189" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura189.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 189</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 182 - End -->                                
                            </ol><br> 
                            <p><strong>Observação:</strong> O atendimento das requisições de material permanente serão efetuadas no módulo de “patrimônio” do SIGA/SGBM.</p>
                            <br>  <br>

                            <!-- Sub Título -->
                            <p class="SubTitulo" id="T4four"> Devolver Material</p>
                            <hr>
                            <br>
                            <p>O SIGA/SGBM permite registrar devoluções decorrentes de materiais requisitados e não consumidos para isto o "perfil Almoxarife" deverá acionar na barra de menu o comando <strong>MOVIMENTOS >> ALMOXARIFADO >> DEVOLUÇÃO</strong>:</p>                                                        
                            <br>                                                                                           
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura190.png" data-bs-toggle="modal" data-bs-target="#Imagem190">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura190.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 190 - MODAL -->
                            <div class="modal fade text-center" id="Imagem190" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura190.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 190</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 190 - End --> <br>
                            <ol type="1">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Origem", clicar na seta no lado direito do campo e selecionar o setor de onde se origina a devolução.  </li>                           
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Selecionar a opção de pesquisa para identificação do item a ser devolvido se a pesquisa será feita por "Código" ou "Palavra-Chave".</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Na caixa de texto logo abaixo informar o código ou a palavra chave conforme a opção selecionada no item 2 anterior. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionar o botão "Pesquisar" para identificar o item de material de consumo a ser devolvido. </li>                        

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura191.png" data-bs-toggle="modal" data-bs-target="#Imagem191">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura191.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 191 - MODAL -->
                                <div class="modal fade text-center" id="Imagem191" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura191.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 191</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 191 - End --> <br>

                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Pesquisar" o SIGA/SGBM apresenta a grade para seleção do material a ser devolvido contendo as seguintes informações: "Código do Material, Descrição, Tipo de Material, Qtde em Estoque e Unidade de Consumo. Clicar no quadrículo no lado esquerdo da grade para selecionar o item.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Quantidade" informar a quantidade a ser devolvida utilizando quatro casas decimais.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Acionar o Botão "OK" para finalizar a seleção.  </li>


                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura192.png" data-bs-toggle="modal" data-bs-target="#Imagem192">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura192.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 183 - MODAL -->
                                <div class="modal fade text-center" id="Imagem192" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura192.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 192</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 192 - End --> 
                                <br>
                                <p>A medida que o item é selecionado o SIGA/SGBM vai atualizando a grade "Itens selecionados para devolução" contendo as seguintes informações: "Código do Material, Descrição, Quantidade a ser devolvida, Unidade e Ações. No campo Código do Material se forma um link que ao ser acionado permite editar novamente a janela de seleção do produto.</p>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> No ícone em formato de "Lápis" poderá ser editada a quantidade a ser devolvida.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> Acionando o ícone em formato de "X" o item é excluído da grade "Itens selecionados para devolução".  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "Salvar" a devolução será efetivado. </li>             

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura193.png" data-bs-toggle="modal" data-bs-target="#Imagem193">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura193.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 193 - MODAL -->
                                <div class="modal fade text-center" id="Imagem193" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura193.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 193</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <!-- Imagem 193 - End -->
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "Salvar" o SIGA/SGBM apresentará uma mensagem de confirmação da operação de devolução. Para isso basta clicar no botão "OK".</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura194.png" data-bs-toggle="modal" data-bs-target="#Imagem194">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura194.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 194 - MODAL -->
                                <div class="modal fade text-center" id="Imagem194" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura194.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 194</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Imagem 193 - End -->
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "OK" o SIGA/SGBM demonstra um espelho de devolução e ao clicar no botão "Imprimir" é gerado em formato PDF o comprovante de devolução do material para ser assinado pelo almoxarife recebedor da devolução o comprovante de devolução deve ficar arquivado com setor que efetuou a devolução.</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura195.png" data-bs-toggle="modal" data-bs-target="#Imagem195">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s"  width="700" src="imagens/Figura195.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 195 - MODAL -->
                                <div class="modal fade text-center" id="Imagem195" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura195.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 195</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura196.png" data-bs-toggle="modal" data-bs-target="#Imagem196">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura196.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 196 - MODAL -->
                                <div class="modal fade text-center" id="Imagem196" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura196.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 196</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                



                            </ol>                     







                            <br><br><!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });
                            </script>

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico05.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>