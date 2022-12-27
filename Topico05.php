<?php
    // EGPCE - Chama o conectamoodle.php
  require_once('conectamoodle.php');
?>

<?php
$page = 'Topico05';
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
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <h2 class="Titulo" id="T5"> Manutenção de Estoque no SIGA/SGBM</h2>
                            <hr>

                            <br>

                            <p><strong>Objetivo:</strong>  Compreender as funcionalidades de movimentações atípicas e as manutenções básicas de estoque no sistema SIGA/SGBM.</p>

                            <h2 class="SubTitulo" id="T5one"> Doações de Material de Consumo</h2>
                            <hr>
                            <p>O SIGA/SGBM permite registrar recebimento de doação assim como realizar doações de materiais de consumo para isso o "perfil Almoxarife" deverá acionar na barra de menu o comando <strong>MOVIMENTOS >> ALMOXARIFADO >> DOAÇÃO</strong>:</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura197.png" data-bs-toggle="modal" data-bs-target="#Imagem197">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura197.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 197 - MODAL -->
                            <div class="modal fade text-center" id="Imagem197" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura197.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 197</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Titulo Figura -->
                            <br>
                            <p>Ao acionar o referido comando o sistema apresenta a janela “Doação” onde serão informados os seguintes campos:</p>
                            <ol type="1">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> No campo "Ação", selecionar o tipo de doação que se deseja registrar se uma Doação para uma outra entidade ou um Recebimento de Doação originada em outra entidade. Caso a opção selecionada seja "Receber de" o SIGA/SGBM solicitará o número do Termo de Doação referente ao material recebido.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> Caso a opção selecionada no item anterior seja "Doar para" o SIGA/SGBM apresentará o campo "Destino" nesse campo deve ser informado o órgão ou entidade para onde se destina a doação. Se a opção selecionada for "Receber de" o SIGA/SGBM apresentará o campo "Origem" nesse campo deve ser informado o órgão ou entidade doador do material em questão.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"> No campo "Data Doação" informar a data de registro da operação no SIGA/SGBM.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"> No campo "Observação" descrever qualquer informação que se fará necessária para justificar a operação de doação do material.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s"> Selecionar a forma que desejar fazer a pesquisa no SIGA/SGBM do material a ser doado se por "Código" ou "Palavra Chave".  </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.9s"> Na "caixa de texto" abaixo do campo de seleção informar o código ou a palavra chave para a pesquisa do material.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="2.3s">  Acionar o botão "Pesquisar" para efetuar a pesquisa o item informado.  </li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura198.png" data-bs-toggle="modal" data-bs-target="#Imagem198">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura198.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 198 - MODAL -->
                                <div class="modal fade text-center" id="Imagem198" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura198.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 198</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> Acionado o botão "Pesquisar" o SIGA/SGBM apresenta a grade para seleção do material a ser doado contendo as seguintes informações: "Código do Material, Descrição, Tipo de Material, Qtde em Estoque e Unidade de Consumo”. Clicar no quadrículo no lado esquerdo da grade para selecionar o item. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> No campo "Quantidade" informar a quantidade a ser doada utilizando quatro casas decimais. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"> Acionar o Botão "Adicionar" para finalizar a seleção.  </li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura199.png" data-bs-toggle="modal" data-bs-target="#Imagem199">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura199.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 199 - MODAL -->
                                <div class="modal fade text-center" id="Imagem199" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura199.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 199</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> À medida que o item é adicionado o SIGA/SGBM vai atualizando a grade "Itens selecionados da doação", contendo as seguintes informações: "Código do Material, Descrição, Unidade, Quantidade e Ação". Na coluna "Ação" da referida grade se forma um ícone em formato de "Lápis" que ao ser acionado permite editar novamente a janela de seleção do produto. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">  Acionando na coluna "Ação" da referida grade, o ícone em vermelho o item é excluído da grade. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"> Acionado o botão "Salvar" doação será efetivado.</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura200.png" data-bs-toggle="modal" data-bs-target="#Imagem200">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura200.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 200 - MODAL -->
                                <div class="modal fade text-center" id="Imagem200" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura200.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 200</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> Acionado o botão "Salvar" o SIGA/SGBM demonstra uma mensagem de confirmação da operação, em seguida acionar o botão "OK".</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura201.png" data-bs-toggle="modal" data-bs-target="#Imagem201">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura201.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 201 - MODAL -->
                                <div class="modal fade text-center" id="Imagem201" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura201.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 201</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Imprimir" o SIGA/SGBM gera um relatório de doação em formato "PDF".</li>
                                <br>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura202.png" data-bs-toggle="modal" data-bs-target="#Imagem202">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura202.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 202 - MODAL -->
                                <div class="modal fade text-center" id="Imagem202" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura202.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 202</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura203.png" data-bs-toggle="modal" data-bs-target="#Imagem203">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura203.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 203 - MODAL -->
                                <div class="modal fade text-center" id="Imagem203" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura203.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 203</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                
                            </ol>

                            <!-- Sub Título -->
                            <p class="SubTitulo" id="T5two"> Receber Doações de Material de Consumo</p>
                            <hr>
                            <p>O SIGA/SGBM permite registrar recebimento de doação assim como proceder a doações de materiais de consumo para isso o "perfil Almoxarife" deverá acionar na barra de menu o comando <strong>MOVIMENTOS >> ALMOXARIFADO >> DOAÇÃO</strong>:</p>
                            <br>
                            <ol>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura206.png" data-bs-toggle="modal" data-bs-target="#Imagem204">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura206.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Imagem 204 - MODAL -->
                                <div class="modal fade text-center" id="Imagem206" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura206.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 206</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <p>Ao acionar o referido comando o sistema apresenta a janela “Doação” onde serão informados os seguintes campos:</p>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Ação", selecione o tipo de doação que deseja registrar, se uma doação para uma outra entidade ou um recebimento de doação originada em outra entidade. Caso a opção selecionada seja "Receber de", o SIGA/SGBM mudará o campo "Destino" para "Origem" e solicitará o número do "Termo de Doação" referente ao material recebido.</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura204.png" data-bs-toggle="modal" data-bs-target="#Imagem204">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura204.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 204 - MODAL -->
                                <div class="modal fade text-center" id="Imagem204" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura204.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 204</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez que a opção selecionada, no campo anterior, for "Receber de", informe no campo "Origem" o nome do órgão ou entidade de onde se originou a doação do material em questão.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Nº Termo Doação", informe o número do Termo de Doação ou documento similar que formaliza a operação.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Data Doação", informe a data de registro da operação no SIGA/SGBM.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Observação", descreva qualquer informação que se faça necessária para justificar a operação de recebimento da doação do material.</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura207.png" data-bs-toggle="modal" data-bs-target="#Imagem207">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura207.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 207 - MODAL -->
                                <div class="modal fade text-center" id="Imagem207" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura207.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 207</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Selecione a forma que deseja fazer a pesquisa, no SIGA/SGBM, do material a ser doado, se por "Código" ou "Palavra-Chave".</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Na "Caixa de Texto", abaixo do campo de seleção, informe o código ou a palavra-chave para a pesquisa do material.</li>

                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Pesquisar" para efetuar a pesquisa do item informado (código ou palavra-chave).</li>
                                <br>
                                <!-- Fique Atento -->
                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <div class="FiqueAtentoTexto">
                                        <p>Se a opção de escolha for por palavra chave, na seleção poderão ser apresentados vários materiais que possuam na sua descrição a palavra chave informada. Para uma melhor individualização do material, sugere-se usar mais de uma palavra-chave separadas por "vírgula" é recomendável utilizar a seleção por código, nesse caso a pesquisa será individualizada pelo código.</p>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura208.png" data-bs-toggle="modal" data-bs-target="#Imagem208">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura208.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 208 - MODAL -->
                                <div class="modal fade text-center" id="Imagem208" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura208.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 208</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar" o SIGA/SGBM  apresenta a grade para seleção do material a ser doado contendo as seguintes informações: "Quadrículo de Seleção, Código do Material, Descrição, Tipo de Material, Qtde em Estoque e Unidade de Consumo". Se a sua pesquisa for estruturada por "código" o "Quadrículo de Seleção" já se apresentará marcado, caso contrário, clicar no quadrículo no lado esquerdo da grade para selecionar o item.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Quantidade" informe a quantidade a ser recebida como doação, utilizando quatro casas decimais.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"> No campo "Valor", informe o "Valor Unitário" do material recebido em doação.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"> Acione o botão "Adicionar", caso se trate da doação de um único item; no caso de ser mais de um item recebido em doação, acione o botão "Adicionar e Continuar", para que sejam selecionados outros itens que compõem o recebimento de doação.</li>
                                <br>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura209.png" data-bs-toggle="modal" data-bs-target="#Imagem209">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura209.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 209 - MODAL -->
                                <div class="modal fade text-center" id="Imagem209" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura209.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 209</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez adicionado na doação o material selecionado o Siga/SGBM apresentará uma mensagem de sucesso da operação.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">A medida que o item é adicionado o SIGA/SGBM vai atualizando a grade "Itens selecionados da doação", contendo as seguintes informações: "Código do Material, Descrição, Unidade, Quantidade e Ação. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">  Na coluna "Ação" da referida grade  se forma um ícone em formato de "Lápis" que ao ser acionado permite editar novamente a janela de seleção do produto, se acionando na coluna "Ação" da referida grade, o ícone em vermelho o item é debilitado da grade. </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"> Acionado o botão "Salvar" doação será efetivado. </li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura210.png" data-bs-toggle="modal" data-bs-target="#Imagem210">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura210.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 210 - MODAL -->
                                <div class="modal fade text-center" id="Imagem210" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura210.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 210</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Salvar" o SIGA/SGBM demonstra uma mensagem de confirmação da operação, em seguida acionar o botão "Está bem".</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura211.jpg" data-bs-toggle="modal" data-bs-target="#Imagem211">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura211.jpg" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 210 - MODAL -->
                                <div class="modal fade text-center" id="Imagem211" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura211.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 211</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Está bem" o SIGA/SGBM demonstra uma mensagem de confirmação da operação.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Imprimir" o SIGA/SGBM efetua a impressão do "Relatório de Doação" e acionando o botão "Novo" reinicia o registro de uma outra operação de doação.</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura212.png" data-bs-toggle="modal" data-bs-target="#Imagem212">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura212.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 212 - MODAL -->
                                <div class="modal fade text-center" id="Imagem212" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura212.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 212</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura213.png" data-bs-toggle="modal" data-bs-target="#Imagem213">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura213.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 213 - MODAL -->
                                <div class="modal fade text-center" id="Imagem213" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura213.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 213</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>

                            
                                
                            </ol>

                            <!-- Sub Título -->
                            <p class="SubTitulo" id="T5three"> Baixar Material Do Estoque</p>
                            <hr>

                            <br>

                            <p>O SIGA/SGBM permite efetuar a baixa de material decorrente de inutilidade para consumo, tais como: deterioração, obsolescência, validade vencida, entre outras situações. Para baixar um item o perfil "Almoxarife" deverá acionar na barra de menu o comando: <strong>MOVIMENTOS >> ALMOXARIFADO >> BAIXA</strong></p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura214.png" data-bs-toggle="modal" data-bs-target="#Imagem214">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura214.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 214 - MODAL -->
                            <div class="modal fade text-center" id="Imagem214" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura214.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 214</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 201 - End --><br>
                        
                           
                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o comando, na barra de menu, o SIGA/SGBM apresentará a janela de baixa. No campo "Justificativa", descreva uma observação das razões que levaram à baixa do material, tais como: deterioração, inutilidade, validade vencida, obsolescência, entre outras.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Na janela "Pesquisa de Produtos", selecione a forma com que o item a ser baixado será identificado, ou seja, por código ou palavra-chave. Nesse caso de baixa, é recomendável utilizar o código, uma vez que o material é item de estoque e o código é acessível. Também pode ser selecionado o tipo de material de consumo ou patrimônio.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Na “Caixa de Texto”, informe o número do código.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Para identificar o item a ser baixado, acione o botão "Pesquisa".</li><br>

                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura215.png" data-bs-toggle="modal" data-bs-target="#Imagem215">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura215.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 215 - MODAL -->
                                <div class="modal fade text-center" id="Imagem215" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura215.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 215</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 215 - End --><br>                               


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o botão "Pesquisar", o SIGA/SGBM apresenta a janela de "Materiais Encontrados", como a pesquisa foi efetuada por "Código", será apresentado somente um item nessa janela e já virá marcado o quadrinho formado na primeira coluna da grade. Quando a "Pesquisa do Produto" for por palavra-chave, aparecerá mais de um produto, então será necessário marcar o quadrinho correspondente.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo “Quantidade”, digite a quantidade que será baixada do item, considerando quatro casas decimais. Essa quantidade deverá ser inferior à quantidade em estoque do item, mostrada na 5ª coluna da grade.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Para finalizar a seleção, acione o botão "Adicionar".</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura216.png" data-bs-toggle="modal" data-bs-target="#Imagem216">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura216.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 216 - MODAL -->
                                <div class="modal fade text-center" id="Imagem216" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura216.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 216</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 216 - End --><br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar", o SIGA/SGBM atualiza a "Janela de Baixa", apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna "Ações", é formado um ícone em formato de "Lápis" que, quando acionado, retorna à janela de seleção para edição da quantidade a ser baixada, caso haja necessidade.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Também na coluna "Ações", no final da grade, é apresentado um ícone na cor vermelha em formato de "X" que, quando acionado, o item anteriormente selecionado é retirado da grade.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "Salvar", o SIGA/SGBM finaliza a operação de “Baixa”.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura217.png" data-bs-toggle="modal" data-bs-target="#Imagem217">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura217.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 217 - MODAL -->
                                <div class="modal fade text-center" id="Imagem217" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura217.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 217</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 217 - End --><br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao finalizar a operação, o SIGA/SGBM apresenta uma mensagem de confirmação, em seguida clique no botão "OK".</li>
                                <br>
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura218.png" data-bs-toggle="modal" data-bs-target="#Imagem218">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura218.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 218 - MODAL -->
                                <div class="modal fade text-center" id="Imagem218" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura218.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 218</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 218 - End --><br>
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Ao finalizar a operação, o SIGA/SGBM apresenta a tela de "Baixa", e acionado o botão "Imprimir", é gerado o "Relatório de Baixa".</li>
                                <br>
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura219.png" data-bs-toggle="modal" data-bs-target="#Imagem219">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura219.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 219 - MODAL -->
                                <div class="modal fade text-center" id="Imagem219" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura219.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 219</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 219 - End --><br>
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura220.png" data-bs-toggle="modal" data-bs-target="#Imagem220">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura220.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 220 - MODAL -->
                                <div class="modal fade text-center" id="Imagem220" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura220.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 220</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 220 - End --><br>
                                
                                

                                
                            </ol>

                            <!-- Sub Título -->
                            <p class="SubTitulo" id="T5four"> Atualizar Cadastro de Material</p>
                            <hr>
                            <p>O SIGA/SGBM permite consultar os Materiais de Consumo e Bens Móveis cadastrados no sistema, assim como cadastrar novos materiais e bens a partir da integração com o Catálogo de Bens Materiais e Serviços. Para isso, o perfil "Almoxarife" deverá acionar, na barra de menu, o comando: <strong>CONSULTAS >> ALMOXARIFADO >> MATERIAIS CADASTRADOS</strong> </p>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura221.png" data-bs-toggle="modal" data-bs-target="#Imagem221">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura221.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 221 - MODAL -->
                            <div class="modal fade text-center" id="Imagem221" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura221.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 221</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 221 - End --><br>
                        
                           
                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o comando, na barra de menu, o SIGA/SGBM inicia a consulta no acervo de itens cadastrados no sistema. Para efetuar a consulta são necessários alguns filtros, o quanto mais forem utilizados, mais restrita será a consulta. No campo "Grupo", selecione o grupo de classificação dos itens que deseja inserir como parâmetro na consulta.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">À medida que for selecionado um "Grupo" específico, o SIGA/SGBM direciona os parâmetros para aquelas classes correspondentes ao “Grupo” selecionado. Então no campo "Classe", selecione a classe de material que deseja inserir como parâmetro na consulta.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Tipo de Material", selecione como mais um parâmetro, o tipo de material que se deseja visualizar na consulta.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Status", selecione como mais um parâmetro da consulta, a condição de uso do material, se "Ativo" ou "Inativo".</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Acione o botão "Pesquisar" para montar a consulta.</li>
                                <br>

                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura222.png" data-bs-toggle="modal" data-bs-target="#Imagem222">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura222.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 222 - MODAL -->
                                <div class="modal fade text-center" id="Imagem222" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura222.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 222</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 222 - End -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Na apresentação da consulta parametrizada, no SIGA/SGBM, é apresentada a grade "Materiais Encontrados" com os seguintes dados dos materiais: Código, Descrição, Localização, Tipo de Material, Unidade de Consumo, Quantidade em Estoque, Limite Mínimo, Fator Multiplicador, Status e Ações. Nessa última coluna denominada "Ações", serão demonstrados três ícones. Ao acionar o ícone em formato de "Lupa", serão demonstradas as informações detalhadas do item.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Na coluna "Ações", se acionado o ícone em formato de "Lápis", será  aberta a tela de edição com algumas das informações do material que estão livres para edição.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Na coluna "Ações", se acionado o ícone azul em formato de "Botão", será inativado ou ativado o item de material.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">No rodapé da grade, no lado esquerdo, será apresentada a quantidade de itens apresentados na grade e a quantidade total de itens encontrados.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">No rodapé da grade, no lado direito, serão apresentados botões de navegação entre as páginas existentes na consulta. Cada página da consulta apresentará no mínimo 10 itens compondo a grade.</li>
                                <br>   
                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura223.png" data-bs-toggle="modal" data-bs-target="#Imagem223">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura223.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 223 - MODAL -->
                                <div class="modal fade text-center" id="Imagem223" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura223.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 223</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 223 - End -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Para uma consulta individualizada, basta informar o código do item no campo "Código".</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Em seguida, acione o botão "Pesquisar" para finalizar a consulta.</li>
                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura224.png" data-bs-toggle="modal" data-bs-target="#Imagem224">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura224.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 224 - MODAL -->
                                <div class="modal fade text-center" id="Imagem224" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura224.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 224</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 224 - End -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionado o botão "Pesquisar", a consulta será apresentada no mesmo formato visto nos itens anteriores (6 a 10), sendo que por se tratar de uma consulta individualizada por código, será apresentado somente um item.</li>
                                <br>   
                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura225.png" data-bs-toggle="modal" data-bs-target="#Imagem225">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura225.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 225 - MODAL -->
                                <div class="modal fade text-center" id="Imagem225" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura225.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 225</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 225 - End -->
                                <br>

                            </ol>

                            <!-- Sub Título -->
                            <p class="SubTitulo" id="T5five"> Solicitar Inscrisão de Material no Catálogo</p>
                            <hr>
                            <p>O SIGA/SGBM permite solicitar a inclusão de novos itens de Material de Consumo e Material Permanente no Catálogo de Bens, Materiais e Serviços, quando se tratar de novos itens que serão adquiridos ou itens de bem permanente anteriores à edição do "Catálogo". Para isso o perfil "Almoxarife" deverá acionar na barra de menu do SIGA/SGBM o seguinte comando: <strong>MANUTENÇÃO >> ALMOXARIFADO >> MATERIAL >> SOLICITAÇÃO CATÁLOGO</strong>:</p>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura226.png" data-bs-toggle="modal" data-bs-target="#Imagem226">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura226.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 226 - MODAL -->
                            <div class="modal fade text-center" id="Imagem226" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura226.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 226</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 226 - End --><br>
                        
                           
                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Detalhamento do produto" descreva detalhadamente o material ou bem a ser incluso no catálogo.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> Acione o botão "Solicitar" para efetivar a solicitação de inclusão.  A partir desse comando, o SIGA/SGBM encaminha a solicitação de inclusão para o grupo de gestores do Catálogo, na Coordenadoria de Gestão de Compras - COGEC da Secretaria do Planejamento e Gestão - SEPLAG. Os gestores do catálogo irão acessar o sistema e avaliar a solicitação de inclusão.</li>
                                <br>

                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura227.png" data-bs-toggle="modal" data-bs-target="#Imagem227">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura227.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 227 - MODAL -->
                                <div class="modal fade text-center" id="Imagem227" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura227.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 227</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 227 - End -->
                                <br>
                                <p>Após ter encaminhado a solicitação o almoxarife poderá monitorar no SIGA/SGBM o atendimento do pedido, por intermédio da opção "Consultas" na barra de menu.  Ao acionar o botão "Solicitar" o SIGA/SGBM apresentará os seguintes dados:</p>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Descrição detalhada do produto a qual foi encaminhada no pedido.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Data em que foi enviada a solicitação para a COGEC/SEPLAG.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Status - Situação de atendimento da solicitação.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Acione o botão “Editar” para edição da solicitação. Caso a COGEC/SEPLAG encaminhe alguma orientação, o almoxarife poderá refazer a solicitação clicando nesse botão.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Acione o botão “Novo” para fazer outra solicitação na sequência.</li>
                                <br>   
                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura228.png" data-bs-toggle="modal" data-bs-target="#Imagem228">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura228.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 228 - MODAL -->
                                <div class="modal fade text-center" id="Imagem228" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura228.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 228</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 228 - End -->
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
                    <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico06.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
