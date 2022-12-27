<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico06';
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

                        <h2 class="Titulo" id="T6"> Arranjos Finais de Estoque no SIGA/SGBM</h2>
                        <hr>

                        <p><strong>Objetivo:</strong> Compreender as funcionalidades que demonstram a organização final do controle de estoque no que se refere à consulta de movimentos de estoque, emissões de relatórios, fechamento dos períodos mensais e a realização de inventário. </p>
                        <br>
                        <h2 class="SubTitulo" id="T6one"> Consultar Operações e Movimentações de Estoque</h2>
                        <hr>

                        <p>Para consultar algumas operações e movimentações de materiais de consumo, no SIGA/SGBM, o perfil "Almoxarife" deverá acionar na barra de menu o comando: <strong>CONSULTAS >> ALMOXARIFADO</strong>. As movimentações são as seguintes:</p>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura229.png" data-bs-toggle="modal" data-bs-target="#Imagem229">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura229.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 229 - MODAL -->
                        <div class="modal fade text-center" id="Imagem229" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura229.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 229</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 229 - End -->
                        <br>
                        <p><strong>A) Consultar Baixas</strong></p>
                        <p>Para consultar as baixas, devem ser acionados, na barra de menu do SIGA/SGBM, os comandos: <strong>CONSULTAS >> ALMOXARIFADO E BAIXAS</strong> </p><br><br>

                        <ol>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura230.png" data-bs-toggle="modal" data-bs-target="#Imagem230">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura230.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 230 - MODAL -->
                            <div class="modal fade text-center" id="Imagem230" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura230.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 230</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 230 - End -->
                            <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar a barra de menu, o SIGA/SGBM apresentará a janela de consultas de baixas. No campo "Período de Movimentação", informe a data inicial do período a que se refere a consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Também no campo "Período de Movimentação", informe a data final do período a que se refere a consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Acione o botão "Pesquisar" para que a consulta seja apresentada.</li>
                            <br>
                            <br><br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura231.png" data-bs-toggle="modal" data-bs-target="#Imagem231">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura231.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 231 - MODAL -->
                            <div class="modal fade text-center" id="Imagem231" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura231.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 231</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 231 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar", o SIGA/SGBM apresenta uma grade com os seguintes dados: Data da Baixa, Justificativa da Baixa e Ação. Na coluna "Ação", é apresentado dois ícones: o primeiro em formato de "Lupa", permite visualizar detalhes da Baixa.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No segundo ícone da coluna "Ação" em formato de “Folha”, demonstra o relatório com detalhamento do material que foi baixado.</li>
                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura232.png" data-bs-toggle="modal" data-bs-target="#Imagem232">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura232.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 232 - MODAL -->
                            <div class="modal fade text-center" id="Imagem232" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura232.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 232</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 232 - End -->
                            <br>
                            <p>Detalhe do material baixado.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura233.png" data-bs-toggle="modal" data-bs-target="#Imagem233">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura233.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 233 - MODAL -->
                            <div class="modal fade text-center" id="Imagem233" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura233.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 233</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 233 - End -->
                            <br>
                            <p>Relatório de baixa.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura234.png" data-bs-toggle="modal" data-bs-target="#Imagem234">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura234.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 234 - MODAL -->
                            <div class="modal fade text-center" id="Imagem234" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura234.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 234</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 234 - End -->
                        </ol>
                        <ol>
                            <br><br>
                            <p><strong>B) Consultar Devoluções</strong></p>
                            <p>Para consultar as baixas, devem ser acionados, na barra de menu do SIGA/SGBM, os comandos: <strong>CONSULTAS >> ALMOXARIFADO E DEVOLUÇÕES</strong></p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura235.png" data-bs-toggle="modal" data-bs-target="#Imagem235">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura235.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 235 - MODAL -->
                            <div class="modal fade text-center" id="Imagem235" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura235.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 235</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 235 - End -->
                            <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar a barra de menu, o SIGA/SGBM apresentará a janela de consultas de devoluções. No campo "Período de Movimentação", informe a data inicial do período a que se refere a consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Também no campo "Período de Movimentação", informe a data final do período a que se refere a consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> No campo "Setor", selecione qual o setor que se deseja consultar as devoluções.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Acione o botão "Pesquisar" para que a consulta seja apresentada.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura236.png" data-bs-toggle="modal" data-bs-target="#Imagem236">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura236.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 236 - MODAL -->
                            <div class="modal fade text-center" id="Imagem236" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura236.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 236</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 236 - End -->
                            <br>
                            <p>Acionado o botão "Pesquisar", o SIGA/SGBM apresenta uma grade com os seguintes dados: Nº da Devolução, Data da Devolução, Setor de Origem e Ação. </p>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na coluna "Ação", é apresentado dois ícones: o primeiro em formato de "Lupa", permite visualizar detalhes da devolução.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No segundo ícone da coluna "Ação" em formato de “Folha”, demonstra o relatório com detalhamento do material que foi devolvido.</li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura237.png" data-bs-toggle="modal" data-bs-target="#Imagem237">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura237.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 237 - MODAL -->
                            <div class="modal fade text-center" id="Imagem237" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura237.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 237</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 237 - End -->
                            <br>
                            <p>Detalhe do Material Devolvido.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura238.png" data-bs-toggle="modal" data-bs-target="#Imagem238">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura238.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 238 - MODAL -->
                            <div class="modal fade text-center" id="Imagem238" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura238.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 238</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 238 - End -->
                            <br>
                            <p>Relatório de Devoluções.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura239.png" data-bs-toggle="modal" data-bs-target="#Imagem239">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura239.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 239 - MODAL -->
                            <div class="modal fade text-center" id="Imagem239" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura239.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 239</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 239 - End -->


                        </ol>
                        <br>
                        <ol>
                            <br><br>
                            <p><strong>C) Consultar Doações</strong></p>
                            <p>Para consultar as doações, acione, na barra de menu, os comandos: <strong>CONSULTAS >> ALMOXARIFADO E DOAÇÕES</strong> </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura240.png" data-bs-toggle="modal" data-bs-target="#Imagem240">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura240.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 240 - MODAL -->
                            <div class="modal fade text-center" id="Imagem240" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura240.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 240</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 240 - End -->
                            <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar a barra de menu, o SIGA/SGBM apresentará a janela de consultas de doações. No campo "Período de Movimentação", informe a data inicial do período a que se refere à consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Também no campo "Período de Movimentação", informe a data final do período a que se refere à consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Acione o botão "Pesquisar" para que a consulta seja apresentada.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura241.png" data-bs-toggle="modal" data-bs-target="#Imagem241">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura241.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 241 - MODAL -->
                            <div class="modal fade text-center" id="Imagem241" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura241.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 241</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 241 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar", o SIGA/SGBM apresenta uma grade com os seguintes dados: Origem ou Destino da Doação, Data da Doação e Movimento, que caracteriza a doação e ação. Na coluna "Ação" da grade, é apresentado um ícone no formato de "Lupa" que, ao ser acionado, permite visualizar o detalhe da doação. </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Também na última coluna da grade, é apresentado outro ícone no formato de "Página" que, quando for acionado, gera um relatório de detalhamento da doação.</li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura242.png" data-bs-toggle="modal" data-bs-target="#Imagem242">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura242.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 242 - MODAL -->
                            <div class="modal fade text-center" id="Imagem242" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura242.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 242</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 242 - End -->
                            <br>
                            <p>Detalhe do Material Doado.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura243.png" data-bs-toggle="modal" data-bs-target="#Imagem243">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura243.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 243 - MODAL -->
                            <div class="modal fade text-center" id="Imagem243" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura243.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 243</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 243 - End -->
                            <br>
                            <p>Relatório de Doações.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura244.png" data-bs-toggle="modal" data-bs-target="#Imagem244">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura244.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 244 - MODAL -->
                            <div class="modal fade text-center" id="Imagem244" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura244.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 244</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 244 - End -->


                        </ol>
                        <br>
                        <ol>
                            <br><br>
                            <p><strong>D) Consultar Entradas</strong></p>
                            <p>Para consultar as entradas acionar na barra de menu o comando: <strong>CONSULTAS >> ALMOXARIFADO E ENTRADAS</strong>: </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura245.png" data-bs-toggle="modal" data-bs-target="#Imagem245">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura245.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 245 - MODAL -->
                            <div class="modal fade text-center" id="Imagem245" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura245.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 245</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 245 - End -->
                            <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Período Movimentação", informe a data inicial que delimita o período de tempo que será objeto da consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Também no campo "Período Movimentação", informe a data final que delimita o período de tempo que será objeto da consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Status da Nota", informe qual o status que se deseja consultar, se a nota está finalizada ou apenas salva.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Nota Fiscal", informe o número da Nota Fiscal, caso queira efetuar consulta de uma Nota Fiscal específica.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">No campo "Número de Série", informe qual a série da Nota Fiscal que se deseja efetuar a consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Acione o botão "Pesquisar" para finalizar a consulta.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura246.png" data-bs-toggle="modal" data-bs-target="#Imagem246">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura246.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 246 - MODAL -->
                            <div class="modal fade text-center" id="Imagem246" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura246.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 246</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 246 - End -->
                            <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar", o SIGA/SGBM apresentará uma grade de consulta considerando o período e parâmetros informados, tal grade será composta pelos seguintes dados: Data da entrada, Razão Social do Fornecedor, Número da Nota Fiscal, Série da Nota fiscal, Status do Cancelamento e Ação.
                                <br>Na coluna correspondente "Ação", se formará um ícone no formato de “Lupa” que, ao ser acionado, apresentará o detalhe da entrada.
                            </li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura247.png" data-bs-toggle="modal" data-bs-target="#Imagem247">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura247.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 247 - MODAL -->
                            <div class="modal fade text-center" id="Imagem247" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura247.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 247</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 247 - End -->
                            <br>
                            <p>Detalhe da Entrada</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura248.png" data-bs-toggle="modal" data-bs-target="#Imagem248">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura248.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 248 - MODAL -->
                            <div class="modal fade text-center" id="Imagem248" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura248.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 248</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 248 - End -->
                            <br>


                        </ol>
                        <br>
                        <ol>
                            <br><br>
                            <p><strong>E) Consultar Fornecedor</strong></p>
                            <p>Para consultar os fornecedores acionar na barra de menu o comando: <strong>CONSULTAS >> ALMOXARIFADO >> FORNECEDORES</strong>: </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura249.png" data-bs-toggle="modal" data-bs-target="#Imagem249">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura249.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 249 - MODAL -->
                            <div class="modal fade text-center" id="Imagem249" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura249.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 249</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 249 - End -->
                            <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Razão Social", descreva a razão social do fornecedor caso não tenha o nº do CNPJ, ou opte pela consulta por intermédio do nome do fornecedor.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "CNPJ", informe o número do CNPJ do fornecedor, nesse caso não é necessário preencher o campo "Razão Social".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Pesquisar" para finalizar a consulta.</li>

                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura250.png" data-bs-toggle="modal" data-bs-target="#Imagem250">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura250.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 250 - MODAL -->
                            <div class="modal fade text-center" id="Imagem250" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura250.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 250</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 250 - End -->
                            <br>
                            <p>Ao ser acionado o botão "Pesquisar", o SIGA/SGBM apresentará uma grade contendo os seguintes dados: CNPJ, Razão Social, Nome Fantasia e Ações.</p>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na coluna "Ações", será apresentado um ícone em formato de "Lupa" que, ao ser acionado, apresentará o detalhamento dos dados do fornecedor.</li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura251.png" data-bs-toggle="modal" data-bs-target="#Imagem251">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura251.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 251 - MODAL -->
                            <div class="modal fade text-center" id="Imagem251" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura251.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 251</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 251 - End -->
                            <br>
                            <p>Detalhamento dos Dados do Fornecedor</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura252.png" data-bs-toggle="modal" data-bs-target="#Imagem252">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura252.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 252 - MODAL -->
                            <div class="modal fade text-center" id="Imagem252" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura252.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 252</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 252 - End -->
                            <br>

                        </ol>
                        <br>
                        <ol>
                            <br><br>
                            <p><strong>F) Consultar Materiais Cadastrados</strong></p>
                            <p>Para consultar os materiais cadastrados acionar na barra de menu o comando: <strong>CONSULTAS >> ALMOXARIFADO >> MATERIAIS CADASTRADOS</strong>: </strong> </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura253.png" data-bs-toggle="modal" data-bs-target="#Imagem253">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura253.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 253 - MODAL -->
                            <div class="modal fade text-center" id="Imagem253" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura253.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 253</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 253 - End -->
                            <br>
                            <p>Acionado o referido comando o SIGA/SGBM oferece diversos filtros para a consulta de materiais cadastrados, tais parâmetros estão descritos abaixo:</p>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Código", informe o código do material caso a consulta seja individualizada, nesse caso a consulta apresentará um único material.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Descrição", descreva a palavra ou palavras que fazem parte da especificação do material, nesse caso a consulta apresentará todos os materiais que possuem na sua especificação a descrição preenchida no campo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Grupo", selecione o grupo do Catálogo de Bens Materiais e Serviços que se deseja consultar, nesse caso poderá consultar todos os itens do grupo ou filtrar mais ainda a consulta combinando com as classes pertencentes a esse grupo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Classe", selecione a classe correspondente ao Grupo do Catálogo de Bens Materiais e Serviços selecionado no campo anterior. Esse campo só será preenchido em combinação com o campo "03 - Grupo".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Tipo de Material", selecione qual o tipo de material, se é de "Consumo" ou "Patrimônio".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Status", selecione a condição do material, se está "Ativo" ou "Inativo".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Após o preenchimento de um ou mais parâmetros para filtrar a consulta, acione o botão "Pesquisar".</li>

                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura254.png" data-bs-toggle="modal" data-bs-target="#Imagem254">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura254.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 254 - MODAL -->
                            <div class="modal fade text-center" id="Imagem254" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura254.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 254</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 254 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao ser acionado o botão "Pesquisar", o SIGA/SGBM apresentará uma grade "Materiais encontrados" com os seguintes dados do material: Código, Descrição, Localização, Tipo de Material, Unidade de Consumo, Quantidade, Limite Mínimo, Fator Multiplicador, Status e Ações.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No rodapé esquerdo da grade, o SIGA/SGBM apresenta a quantidade de itens demonstrados e a quantidade de itens encontrados.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No rodapé direito da grade, o SIGA/SGBM apresenta botões de navegação que permitem paginar a demonstração dos itens encontrados.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Lupa” que, quando acionado, permite demonstrar o detalhamento dos dados do material.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Lápis" que, quando acionado, permite editar alguns dados do material.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Botão" que, quando acionado, permite desativar o item.</li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura255.png" data-bs-toggle="modal" data-bs-target="#Imagem255">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura255.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 255 - MODAL -->
                            <div class="modal fade text-center" id="Imagem255" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura255.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 255</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 255 - End -->
                            <br>
                            <p>Detalhamento dos Dados do Material</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura256.png" data-bs-toggle="modal" data-bs-target="#Imagem256">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura256.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 256 - MODAL -->
                            <div class="modal fade text-center" id="Imagem256" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura256.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 256</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 256 - End -->
                            <br>
                            <p>Tela de Ediçâo de Dados do Material</p>
                            <br>
                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura257.png" data-bs-toggle="modal" data-bs-target="#Imagem257">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura257.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 257 - MODAL -->
                            <div class="modal fade text-center" id="Imagem257" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura257.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 257</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 257 - End -->
                            <br>
                            <p>Tela de Inativação do Material</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura258.png" data-bs-toggle="modal" data-bs-target="#Imagem258">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura258.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 258 - MODAL -->
                            <div class="modal fade text-center" id="Imagem258" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura258.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 258</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 258 - End -->
                            <br>


                        </ol>
                        <ol>
                            <br><br>
                            <p><strong>G) Consultar Requisições de Materiais</strong></p>
                            <p>Para consultar as "Requisições" acionar na barra de menu o comando: <strong>CONSULTAS >> ALMOXARIFADO >> REQUISIÇÕES</strong>: </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura259.png" data-bs-toggle="modal" data-bs-target="#Imagem259">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura259.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 259 - MODAL -->
                            <div class="modal fade text-center" id="Imagem259" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura259.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 259</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 259 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Período de Movimentação", informe a data inicial que delimita o período que se deseja consultar referente a emissão da Requisição.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Período de Movimentação", informe a data final que delimita o período que se deseja consultar referente a emissão da Requisição.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Status", informe a condição (atendida, cancelada, solicitada, etc.) da Requisição que se deseja consultar.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Setor", informe o setor (centro de custo) de onde se originou a Requisição.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Pesquisar" para concluir a pesquisa.</li>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura260.png" data-bs-toggle="modal" data-bs-target="#Imagem260">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura260.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 260 - MODAL -->
                            <div class="modal fade text-center" id="Imagem260" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura260.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 260</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 260 - End -->

                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar", o SIGA/SGBM apresenta uma grade com as requisições que atendem aos parâmetros informados nos campos anteriores (de 01 a 04). A grade apresenta os seguintes dados: Nº da Requisição, Nome do Requisitante, Departamento do Requisitante, Data da Requisição, Status da Requisição e Ações.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Lupa" que, ao ser acionado, permite visualizar a Requisição.</li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura261.png" data-bs-toggle="modal" data-bs-target="#Imagem261">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura261.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 261 - MODAL -->
                            <div class="modal fade text-center" id="Imagem261" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura261.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 261</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 261 - End -->
                            <br>
                            <p>Detalhamento dos Dados da Requisição</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura262.png" data-bs-toggle="modal" data-bs-target="#Imagem262">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura262.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 262 - MODAL -->
                            <div class="modal fade text-center" id="Imagem262" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura262.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 262</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 262 - End -->
                            <br>
                            <p>Relatório de Nota de Recebimento</p>
                            <br>
                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura263.png" data-bs-toggle="modal" data-bs-target="#Imagem263">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura263.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 263 - MODAL -->
                            <div class="modal fade text-center" id="Imagem263" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura263.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 263</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 263 - End -->
                            <br>


                        </ol>
                        <ol>
                            <br><br>
                            <p><strong>H) Consultar Solicitações de catálogo</strong></p>
                            <p>Para consultar as "Solicitações ao Catálogo" acionar na barra de menu o comando: .<strong>CONSULTAS >> ALMOXARIFADO >> SOLICITAÇÕES AO CATÁLOGO</strong>: </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura264.png" data-bs-toggle="modal" data-bs-target="#Imagem264">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura264.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 264 - MODAL -->
                            <div class="modal fade text-center" id="Imagem264" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura264.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 264</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 264 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Período de Movimentação", informe a data inicial que delimita o período que se deseja consultar referente à solicitação ao Catálogo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Período de Movimentação", informe a data final que delimita o período que se deseja consultar referente à solicitação ao Catálogo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Status", informe a condição (atendida, não atendida e pendente) da solicitação ao Catálogo que se deseja consultar.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Pesquisar" para concluir a pesquisa.</li>

                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura265.png" data-bs-toggle="modal" data-bs-target="#Imagem265">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura265.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 265 - MODAL -->
                            <div class="modal fade text-center" id="Imagem265" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura265.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 265</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 265 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar", o SIGA/SGBM apresenta a grade "Produtos Solicitados no Período" que atendem aos parâmetros informados nos campos anteriores (de 01 a 03). A grade apresenta os seguintes dados: Descrição do Produto, Data da Solicitação, Data do Atendimento, Status da Solicitação, Observação, Código do Produto e Ações.</li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Os campos "Data Atendimento" e "Código do Produto" serão preenchidos pelo Gestor do Catálogo (COGEC/SEPLAG) à medida que efetua a inclusão do item no Catálogo, assim como o campo "Observação" que será preenchido na ocasião de alguma orientação ao solicitante, para que o produto seja incluído no Catálogo.</p>
                                </div>
                            </div>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Lupa" que, ao ser acionado, permite visualizar a solicitação ao Catálogo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Lápis" que, ao ser acionado, permite editar a solicitação ao Catálogo.</li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura266.png" data-bs-toggle="modal" data-bs-target="#Imagem266">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura266.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 266 - MODAL -->
                            <div class="modal fade text-center" id="Imagem266" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura266.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 266</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 266 - End -->
                            <br>
                            <p>Detalhamento dos Dados da Solicitação ao Catálogo</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura267.png" data-bs-toggle="modal" data-bs-target="#Imagem267">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura267.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 267 - MODAL -->
                            <div class="modal fade text-center" id="Imagem267" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura267.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 267</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 267 - End -->
                            <br>
                            <p>Tela de Edição dos Dados da Solicitação ao Catálogo</p>
                            <br>
                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura268.png" data-bs-toggle="modal" data-bs-target="#Imagem268">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura268.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 268 - MODAL -->
                            <div class="modal fade text-center" id="Imagem268" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura268.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 268</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 268 - End -->
                            <br>

                        </ol>
                        <br>
                        <ol>
                            <br><br>
                            <p><strong>I) Consultar Migração</strong></p>
                            <p>Para consultar o andamento da "Migração" acionar na barra de menu o comando: <strong>CONSULTAS >> ALMOXARIFADO >> MIGRAÇÃO</strong>: </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura269.png" data-bs-toggle="modal" data-bs-target="#Imagem269">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura269.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 269 - MODAL -->
                            <div class="modal fade text-center" id="Imagem269" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura269.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 269</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 269 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Código", informe o código do Catálogo correspondente ao item que se deseja consultar a migração. Nesse caso, a consulta apresentará o item de material individualizado.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Descrição", informe uma palavra ou mais que constem na especificação dos itens que se deseja consultar a migração. Nesse caso, a consulta apresentará um ou mais item.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Tipo de Material", selecione se a migração a ser consultada será de "Material de Consumo" ou "Material Permanente". Nesse caso, a consulta apresentará um ou mais itens que pertençam à referida classificação.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Pesquisar" para concluir a pesquisa.</li>

                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura270.png" data-bs-toggle="modal" data-bs-target="#Imagem270">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura270.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 270 - MODAL -->
                            <div class="modal fade text-center" id="Imagem270" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura270.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 270</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 270 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar", o SIGA/SGBM apresenta a grade "Produtos Solicitados no Período" que atendem aos parâmetros informados nos campos anteriores (de 01 a 03). A grade apresenta os seguintes dados: Código do Produto, Descrição do Produto, Código Atual, Tipo de Material, Unidade de Consumo, Fator Multiplicador e Ações.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Lupa" que, ao ser acionado, permite visualizar os detalhes do material em migração.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "X" que, ao ser acionado, permite excluir o item em migração.</li>
                            <br>
                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura271.png" data-bs-toggle="modal" data-bs-target="#Imagem271">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura271.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 271 - MODAL -->
                            <div class="modal fade text-center" id="Imagem271" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura271.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 271</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 271 - End -->
                            <br>
                            <p>Detalhamento dos dados do item em migração podendo, a partir do botão "Editar", alterar dados obrigatórios da migração marcados com (*):</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura272.png" data-bs-toggle="modal" data-bs-target="#Imagem272">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura272.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 272 - MODAL -->
                            <div class="modal fade text-center" id="Imagem272" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura272.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 272</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 272 - End -->
                            <br>
                            <p>Tela de Exclusão do Iten em Migração</p>
                            <br>
                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura273.png" data-bs-toggle="modal" data-bs-target="#Imagem273">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura273.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 273 - MODAL -->
                            <div class="modal fade text-center" id="Imagem273" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura273.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 273</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 273 - End -->
                            <br>

                        </ol>

                        <!-- Sub Título -->
                        <p class="SubTitulo" id="T6two"> Fechar Período Mensal</p>
                        <hr>
                        <br>

                        <p>Para entender o conceito do “Fechamento Mensal”, é necessário também entender o ciclo operacional do estoque que compreende o tempo em que cada material é recebido, armazenado e consumido. Cada material possui características e ciclos operacionais distintos, e à medida que cresce a variedade de materiais em estoque, faz-se necessário delimitar o período de análise, para que seja verificado o tempo de permanência do material em estoque com relação ao seu consumo corrente.</p>

                        <p>O controle por intermédio do “Fechamento Mensal”, ao delimitar um determinado período de tempo, permite estabelecer parâmetros para dimensionar as quantidades adequadas que cada material deve permanecer em estoque, para atender às necessidades sem quebra de continuidade no suprimento. Com o “Fechamento Mensal”, o SIGA/SGBM equaciona os estoques existentes com relação às aquisições e ao consumo dentro de um período de tempo, possibilitando identificar o excesso ou a insuficiência de suprimento dos materiais. Alguns relatórios gerenciais do SIGA/SGBM somente poderão ser emitidos após a realização do “Fechamento Mensal”.</p>

                        <p>Para efetuar o Fechamento Mensal, o perfil "Almoxarife" deverá selecionar, na barra de menu do SIGA/SGBM, o comando: <strong>PROCESSOS >> ALMOXARIFADO >> FECHAMENTO ALMOXARIFADO</strong></p>

                        <br>
                        <ol>
                            <br><br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura274.png" data-bs-toggle="modal" data-bs-target="#Imagem274">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura274.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 274 - MODAL -->
                            <div class="modal fade text-center" id="Imagem274" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura274.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 274</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 274 - End --><br>
                            <p>É aconselhável que o fechamento mensal seja efetuado no 1º dia útil do mês seguinte, devido a necessidade de conferir e consolidar as movimentações antes de fechar o mês. Enquanto o mês anterior não for fechado, as movimentações do mês corrente ficam travadas, e após o fechamento não poderão ser efetuados cancelamentos de movimentações efetuadas com erro de registro. Ao acionar o referido comando, o SIGA/SGBM apresentará a grade "Meses Pendentes", contendo na sequência crescente os meses que encontram-se em aberto no sistema.</p>
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na coluna "Ações", clique no ícone azul em formato de "Agenda'' para agendar o Fechamento do Mês. O sistema programa um horário para que sejam executados os programas de cálculo dos valores das movimentações do período e apuração do saldo final.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura275.png" data-bs-toggle="modal" data-bs-target="#Imagem275">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura275.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 275 - MODAL -->
                            <div class="modal fade text-center" id="Imagem275" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura275.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 275</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 275 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o referido ícone, o sistema demonstra, na coluna "Data de Execução", o horário que será executado o programa de cálculo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Na coluna "Ações", o ícone agora é no formato de "Relógio" que, se for acionado, verificará a execução do programa.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura276.png" data-bs-toggle="modal" data-bs-target="#Imagem276">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura276.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 276 - MODAL -->
                            <div class="modal fade text-center" id="Imagem276" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura276.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 276</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 274 - End -->



                        </ol>

                        <!-- Sub Título -->
                        <p class="SubTitulo" id="T6three"> Inventariar Estoque</p>
                        <hr>

                        <br>

                        <p>A ferramenta de apoio ao inventário de estoque, disponível no SIGA/SGBM, baseia-se no inventário com contagens cegas, ou seja, conta-se primeiro o físico e depois se confronta a contagem com o registro escritural para verificar se houve divergência. Para que não haja erro na contagem, o sistema só considera a contagem válida quando houver mais de uma contagem coincidente. Isso implica que haverá no mínimo duas contagens para cada item inventariado.</p>

                        <p>Caso haja divergência entre duas contagens, serão feitas “n” contagens até que haja duas contagens coincidentes. O SIGA indicará os itens a serem contados e receberá o resultado das contagens, controlando as contagens por intermédio de equipes de contagem, de forma que um inventariante não poderá contar o mesmo item em duas contagens sequenciais.</p>

                        <p>A ferramenta de apoio ao inventário, disponível no SIGA, dará apoio às três modalidades de inventário, a saber:</p>

                        <p class="wow fadeInDown"><strong>1) Inventário Geral:</strong> Trata-se do inventário de todos os itens de materiais existentes em estoque, essa modalidade de inventário será utilizada nos inventários de final de exercício contábil, ou seja, anualmente, ou então quando se fizer necessário por questões de controle interno do órgão/entidade.</p>

                        <p class="wow fadeInDown" data-wow-delay="0.6s"><strong>2) Inventário por Grupo:</strong> Trata-se do inventário dos itens de materiais pertencentes a uma determinada classe de materiais, essa modalidade de inventário será utilizada para os órgãos que desejem efetuar o inventário permanente, efetuando contagens periodicamente por grupos de materiais. </p>

                        <p class="wow fadeInDown" data-wow-delay="0.9s"><strong>3) Inventário Específico:</strong> Trata-se do inventário de itens escolhidos pelo gestor do almoxarifado, será utilizado nos inventários de acerto ou para itens de alta rotatividade que necessitam ser inventariados sistematicamente.</p>

                        <p>Para garantir maior controle na realização do inventário, a ferramenta de apoio ao inventário de estoque, disponível no SIGA/SGBM, fará o cadastro das equipes inventariantes. À medida que o inventário é criado, segundo o seu tipo, paralelamente poderão ser cadastradas as pessoas que participarão do inventário, atribuindo a cada contagem um grupo de pessoas que a executará. É prudente que seja cadastrado um número de pessoas suficiente para formar equipes, para realizar a contagem dentro do prazo planejado a realizar o inventário.</p>

                        <p>Em termos metodológicos o inventário de estoque somente será operacionalizado pelo perfil "Gestor" e terá três etapas distintas essas são:</p>
                        <br>
                        <p><strong>A) PAINEL DE CONTROLE DE INVENTÁRIO:</strong></p>
                        <br>
                        <p>Para iniciar a criação de um inventário selecione na barra de menu do SIGA/SGBM, o comando <strong>PROCESSOS >> ALMOXARIFADO >> INVENTÁRIO >> GERENCIAR INVENTÁRIOS</strong>:</p>
                        <br>
                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura277.png" data-bs-toggle="modal" data-bs-target="#Imagem277">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura277.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 277 - MODAL -->
                        <div class="modal fade text-center" id="Imagem277" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura277.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 277</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 3 - End -->
                        <br>

                        <p>Acionado o comando, na barra de menu, o SIGA/SGBM demonstra um painel de gerenciamento de inventário composto por: um mecanismo de identificação e localização de inventários, uma agenda de execução de inventários e um mecanismo de criação e localização de participantes. </p>

                        <p>A descrição desses controles é apresentada a seguir:</p>

                        <ol>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo “Descrição”, descreva o nome ou parte do nome de um inventário. Esse campo será preenchido para localizar um inventário dentre aqueles já realizados ou em andamento, ou então para criar um novo inventário.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Acione o botão “Pesquisar” para localizar um inventário cujo nome ou parte do nome de um inventário foi descrito no campo anterior (01 - Descrição). </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Acione o botão “Limpar” para tornar vazia a grade "Inventários Cadastrados".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acione o botão “Criar Inventário” para criar um inventário novo a partir do preenchimento do campo anterior (01 - Descrição).</li>
                            <li class="wow fadeInRight" data-wow-delay="1.6s">A grade "Inventários Cadastrados" demonstra dados sobre inventários realizados, assim como permite a execução de uma agenda de controle de um inventário a partir dos ícones localizados na coluna "Ações".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.9s">Etiqueta de exibição do quantitativo de inventários da grade "Inventários Cadastrados", assim como do total ainda a ser exibido.</li>
                            <li class="wow fadeInRight" data-wow-delay="2.0s">Botões de navegação da grade "Inventários Cadastrados".</li>
                            <li class="wow fadeInRight" data-wow-delay="2.3s">No campo "Pessoas: Digite um Nome", descreva o nome completo da pessoa que será cadastrada para participar de inventários.</li>
                            <li class="wow fadeInRight" data-wow-delay="2.6s">No campo "Pessoas: Digite um CPF", descreva o número do CPF da pessoa que será cadastrada para participar de inventários. </li>
                            <li class="wow fadeInRight" data-wow-delay="2.9s">Acione o botão "Cadastrar" para gravar o nome e CPF preenchidos nos campos 08 e 09, respectivamente.</li>
                            <li class="wow fadeInRight" data-wow-delay="3.3s">A grade "Pessoas Cadastradas Neste Almoxarifado" permite o gerenciamento de pessoas que participam de inventários.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura278.png" data-bs-toggle="modal" data-bs-target="#Imagem278">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura278.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 278 - MODAL -->
                            <div class="modal fade text-center" id="Imagem278" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura278.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 278</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 278 - End --><br>
                            <p><strong>B) CRIAR INVENTÁRIO:</strong></p>
                            <p>Para iniciar a criação de um inventário selecione na barra de menu do SIGA/SGBM, o comando <strong>PROCESSOS >> ALMOXARIFADO >> INVENTÁRIO >> GERENCIAR INVENTÁRIOS</strong> </p>
                        </ol>
                        <ol>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Clicando no botão “Criar Inventário”, o SIGA criará um novo inventário para compor a agenda de inventários.</li>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura279.png" data-bs-toggle="modal" data-bs-target="#Imagem279">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura279.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 279- MODAL -->
                            <div class="modal fade text-center" id="Imagem279" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura279.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 279</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 279 - End -->
                            <br><br>

                            <li class="wow fadeInRight" data-wow-delay="0.6s"> Ao clicar no botão "Criar Inventário", o SIGA/SGBM demonstrará o “Almoxarifado Corrente” em que será criado o inventário, a “Data de Abertura” pedirá que seja definido qual o "Tipo de Inventário" a ser realizado, se do tipo GERAL, ESPECÍFICO ou GRUPO. Dependendo da escolha, o SIGA/SGBM habilitará campos correspondentes ao tipo de inventário escolhido.</li>
                        </ol>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura280.png" data-bs-toggle="modal" data-bs-target="#Imagem280">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura280.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 280 - MODAL -->
                        <div class="modal fade text-center" id="Imagem280" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura280.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 280</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 280 - End --><br>
                        <p><strong>B.1) No Caso de Inventário Geral</strong></p>
                        <br>


                        <ol start="6">
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Descrição", descreva o nome do inventário identificando o tipo de inventário e o mês e ano de realização.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Tipo de Inventário", selecione a opção ESPECÍFICO, nessa opção, o SIGA/SGBM habilita o botão “Pesquisar Produtos” para que sejam selecionados os itens específicos que farão parte do inventário. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Acione o botão "Pesquisar Produtos" para selecionar os itens que farão parte do inventário.</li>


                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura281.png" data-bs-toggle="modal" data-bs-target="#Imagem281">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura281.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 281 - MODAL -->
                            <div class="modal fade text-center" id="Imagem281" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura281.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 281</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 281 - End --><br>
                            <p>Ao acionar o botão "Pesquisar Produtos", o SIGA/SGBM demonstrará uma janela <em>pop-up</em> com os campos de seleção dos itens.</p>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Palavra-Chave", descreva uma palavra que fará parte da especificação do item e que possibilite a individualização do mesmo. Você também pode seguir o seguinte processo:</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Código", descreva o código de individualização do item.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Em seguida, acione o botão "Pesquisar Produtos".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura282.png" data-bs-toggle="modal" data-bs-target="#Imagem282">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura282.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 282 - MODAL -->
                            <div class="modal fade text-center" id="Imagem282" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura282.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 282</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 282 - End --><br>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao ser acionado o botão "Pesquisar Produtos", o SIGA/SGBM demonstrará a grade "Produtos Encontrados".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Nessa "grade", marque o quadrinho correspondente ao item que fará parte do inventário. Quando a seleção for realizada somente por "palavra-chave", aparecerá vários itens que possuam a palavra-chave em sua especificação, para que seja selecionado pelo respectivo quadrinho.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Ao ser acionado o botão "Finalizar", o SIGA/SGBM retornará à janela "Abrir Inventário", incluindo o item selecionado.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura283.png" data-bs-toggle="modal" data-bs-target="#Imagem283">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura283.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 283 - MODAL -->
                            <div class="modal fade text-center" id="Imagem283" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura283.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 283</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 283 - End --><br>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao ser acionado o botão "Finalizar", o SIGA/SGBM demonstrará a grade "Produtos Selecionados", demonstrando código do produto, descrição e ações.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Na coluna "Ações", é demonstrado um ícone em formato de "Lixeira" que, se acionado, apaga o item da referida grade.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Clicando no botão "Pesquisar Produtos", o SIGA/SGBM recomeça os procedimentos dos itens 09 ao 13, adicionando mais itens à grade "Produtos Selecionados".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Clicando no botão "Criar inventário", é criado um inventário específico com os itens constantes na grade "Produtos Selecionados".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura284.png" data-bs-toggle="modal" data-bs-target="#Imagem284">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura284.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 284 - MODAL -->
                            <div class="modal fade text-center" id="Imagem284" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura284.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 284</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 284 - End --><br>
                            <p><strong>B.2) No Caso de Inventário Por Grupo</strong></p>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Descrição", descreva o nome do inventário, identificando o tipo de inventário e o mês e ano de realização.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Tipo de Inventário", selecione a opção GRUPO, nessa opção o SIGA/SGBM habilita o botão “Pesquisar Produtos”, para que sejam selecionados os itens específicos que farão parte do inventário. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">No campo "Grupo", selecione o grupo de materiais do Catálogo de Bens, Materiais e Serviços do qual será efetuado o inventário.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acione o botão "Criar inventário" para que o inventário seja inserido na "Agenda de Inventários".</li>


                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura285.png" data-bs-toggle="modal" data-bs-target="#Imagem285">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura285.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 285 - MODAL -->
                            <div class="modal fade text-center" id="Imagem285" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura285.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 285</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 285 - End --><br>

                            <li class="wow fadeInRight" data-wow-delay="0.9s">Qualquer que seja o "Tipo de Inventário" criado, o SIGA/SGBM gera uma agenda de inventário na grade "Inventários Cadastrados", de onde será gerenciada a execução do inventário em todas as suas etapas.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Na coluna "Ações" da referida grade, são apresentados vários ícones que estarão sendo habilitados à medida que o inventário evolui na sua execução, o primeiro deles, em formato de "Botão", ativa o inventário, ou seja, inicia a sua execução.</li>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura286.png" data-bs-toggle="modal" data-bs-target="#Imagem286">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura286.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 286 - MODAL -->
                            <div class="modal fade text-center" id="Imagem286" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura286.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 286</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 286 - End --><br>
                        </ol>
                        <br>
                        <ol>
                            <p><strong>C) Cadastrar as Equipes de Contagem</strong></p>
                            <br>
                            <p>Para cadastrar as pessoas que participarão do inventário deverá ser acionado na barra de menu do SIGA/SGBM o comando: <strong>PROCESSOS >> ALMOXARIFADO >> INVENTÁRIO >> GERENCIAR INVENTÁRIOS</strong>: </p>
                            <br>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura287.png" data-bs-toggle="modal" data-bs-target="#Imagem287">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura287.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 287 - MODAL -->
                            <div class="modal fade text-center" id="Imagem287" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura287.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 287</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 287 - End --><br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o comando, na barra de menu, o SIGA/SGBM demonstra o painel de controle "Gerenciar Inventários". No canto direito do painel, é apresentada a seção "Pessoas".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura288.png" data-bs-toggle="modal" data-bs-target="#Imagem288">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura288.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 288 - MODAL -->
                            <div class="modal fade text-center" id="Imagem288" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura288.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 288</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Imagem 288 - End --><br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Digite um Nome", insira o nome da pessoa a ser cadastrada.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Digite um CPF", insira o número do CPF da pessoa a ser cadastrada. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Acione o botão "Cadastrar" para gravar o nome e CPF preenchidos nos campos 02 e 03, respectivamente.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">A grade "Pessoas Cadastradas Neste Almoxarifado", permite o gerenciamento de pessoas que participarão de inventários.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No ícone, em formato de "Botão", logo abaixo do nome da pessoa cadastrada, permite desativar a pessoa para participar de inventários.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No ícone em formato de "Lixeira", permite excluir a pessoa do cadastro de participantes do inventário. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura289.png" data-bs-toggle="modal" data-bs-target="#Imagem289">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura289.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 289 - MODAL -->
                            <div class="modal fade text-center" id="Imagem289" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura289.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 289</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </ol>
                        <br>
                        <ol>
                            <p><strong>D) Realizar Inventário</strong></p>
                            <br>
                            <p>Após clicar no botão “Criar Inventário” (conforme passos anteriores - 18 e 22), seja qual for a modalidade de inventário, o SIGA/SGBM apresentará uma legenda associada ao Status e às Ações relativas ao inventário iniciado. </p>
                            <br>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura290.png" data-bs-toggle="modal" data-bs-target="#Imagem290">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura290.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 290 - MODAL -->
                            <div class="modal fade text-center" id="Imagem290" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura290.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 290</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 290 - End --><br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s"> O ícone em formato de "Botão" indica que o inventário foi criado, mas ainda não foi ativado e não foram atribuídas a este as duas contagens iniciais do inventário. Para ativar o inventário, basta clicar neste ícone.</li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Caso seja necessário, por qualquer inconveniência, desativar um determinado inventário que já foi ativado, basta clicar novamente nesse ícone para reverter a situação do inventário.</p>
                                </div>
                            </div>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura291.png" data-bs-toggle="modal" data-bs-target="#Imagem291">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura291.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 291 - MODAL -->
                            <div class="modal fade text-center" id="Imagem291" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura291.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 291</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Imagem 291 - End --><br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao clicar no botão que ativa as “Ações”, todos os ícones ficarão habilitados e passarão a ficar coloridos. Isso indica que o inventário está em curso.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura292.png" data-bs-toggle="modal" data-bs-target="#Imagem292">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura292.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 292 - MODAL -->
                            <div class="modal fade text-center" id="Imagem292" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura292.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 292</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">O ícone em formato de "Pilha de Caixas" indica que o inventário acabou de ser ativado e necessita que sejam atribuídas às equipes de inventário, e registrado no sistema o resultado das contagens executadas. Enquanto as duas contagens estiverem sendo executadas, o inventário permanecerá nesse Status. Clicando nesse ícone, serão formadas as equipes de contagem.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura293.png" data-bs-toggle="modal" data-bs-target="#Imagem293">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura293.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 293 - MODAL -->
                            <div class="modal fade text-center" id="Imagem293" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura293.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 293</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Uma vez acionado o ícone “Contagem”, será demonstrada a tela abaixo com as duas contagens iniciais do inventário, para que as equipes de contagem sejam definidas:</p>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Clicando no ícone “Criar Equipe”, poderão ser formadas as equipes de contagem com as pessoas que foram previamente cadastradas no painel “Pessoas”, visto anteriormente.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura294.png" data-bs-toggle="modal" data-bs-target="#Imagem294">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura294.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 294 - MODAL -->
                            <div class="modal fade text-center" id="Imagem294" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura294.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 294</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Coordenador", escolha o nome do coordenador do inventário. Clicando na seta ao lado do campo, será demonstrada uma relação de nomes com o perfil de “Gestor”, que é o perfil que tem acesso a essa funcionalidade.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura295.png" data-bs-toggle="modal" data-bs-target="#Imagem295">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura295.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 295 - MODAL -->
                            <div class="modal fade text-center" id="Imagem295" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura295.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 295</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionando o botão "Alterar'', poderá ser alterado o nome do coordenador da equipe.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Pessoas Disponíveis", escolha, na relação de pessoas disponíveis, à esquerda da tela, clicando no quadrinho, aquelas que comporão a equipe de contagem que está sendo editada. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Em seguida, clique no botão “Seta”, passando a pessoa selecionada, no campo "Pessoas Disponíveis", para o campo "Pessoas Selecionadas".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Pessoas Selecionadas", clique no quadrinho ao lado do nome da pessoa, em seguida, clique no botão “Salvar Equipe”.</li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Será formada somente uma equipe para realização de uma contagem. A cada contagem esse processo se repetirá, podendo o coordenador do inventário compor equipes diferentes a cada contagem. Será necessário no mínimo duas pessoas por equipe.</p>
                                </div>
                            </div>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura296.png" data-bs-toggle="modal" data-bs-target="#Imagem296">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura296.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 296 - MODAL -->
                            <div class="modal fade text-center" id="Imagem296" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura296.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 296</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão “Salvar Equipe”, será demonstrada a mensagem de sucesso da operação, e será apresentado, na coluna "Acompanhamentos" da tela "Contagens", o ícone em azul “Abrir Contagem” para iniciar a contagem em evidência.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura297.png" data-bs-toggle="modal" data-bs-target="#Imagem297">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura297.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 297 - MODAL -->
                            <div class="modal fade text-center" id="Imagem297" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura297.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 297</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Para a contagem em evidência (Contagem 1), após ser acionado o ícone "Abrir Contagem", na coluna "Acompanhamentos", ficarão disponíveis os demais ícones referentes ao acompanhamento do inventário</p>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s"> Na coluna "Imprimir", clique sobre o ícone de cor laranja para imprimir o “Relatório Gabarito para Contagem de Inventário", assim o status da contagem passará de "Pendente" para "Aberta".</li>
                            <br>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura298.png" data-bs-toggle="modal" data-bs-target="#Imagem298">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura298.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 298 - MODAL -->
                            <div class="modal fade text-center" id="Imagem298" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura298.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 298</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o ícone "Gabarito para Contagem de Inventário", o relatório será impresso em quantas vias se façam necessárias para distribuição entre os participantes da equipe de contagem. De posse do Relatório, no campo “Qtde.", o participante escreverá o resultado da contagem que será posteriormente digitado no SIGA/SGBM.</li>
                            <br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura299.png" data-bs-toggle="modal" data-bs-target="#Imagem299">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura299.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 299 - MODAL -->
                            <div class="modal fade text-center" id="Imagem299" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura299.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 299</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Uma vez efetuada a contagem em campo, o “Relatório Gabarito de Contagem de Inventário'' deve ser digitado no SIGA/SGBM, basta clicar no ícone “Editar Dados” e o sistema abrirá uma tela para a digitação do relatório.</li>
                            <br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura300.png" data-bs-toggle="modal" data-bs-target="#Imagem300">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura300.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 300 - MODAL -->
                            <div class="modal fade text-center" id="Imagem300" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura300.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 300</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Após clicar no ícone “Editar Dados”, o “Relatório de Conferência da Contagem 1” deve ser digitado no SIGA.</p>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Digite no campo “Qtde. Física” a quantidade do item constante no “Relatório de Gabarito de Contagem de Inventário”, que foi resultante da contagem em campo. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Em seguida, clique no botão “Finalizar Editar Dados”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura301.png" data-bs-toggle="modal" data-bs-target="#Imagem301">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura301.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 301 - MODAL -->
                            <div class="modal fade text-center" id="Imagem301" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura301.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 301</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão “Finalizar Editar Dados”, na tela anterior, será demonstrada a mensagem de confirmação da operação, restando finalizar a contagem para que o SIGA/SGBM inicie a “Contagem 2”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura302.png" data-bs-toggle="modal" data-bs-target="#Imagem302">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura302.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 302 - MODAL -->
                            <div class="modal fade text-center" id="Imagem302" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura302.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 302</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Acionado o botão “OK”, na janela "pop-up", o SIGA/SGBM atualizará o "Status" da contagem de "Aberta" para "Fechada" e disponibilizará o "Resultado de Contagem de Inventário''. A partir desse "Status" poderá ser iniciada a Contagem 2.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura303.png" data-bs-toggle="modal" data-bs-target="#Imagem303">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura303.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 303 - MODAL -->
                            <div class="modal fade text-center" id="Imagem303" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura303.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 303</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura304.png" data-bs-toggle="modal" data-bs-target="#Imagem304">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura304.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 304 - MODAL -->
                            <div class="modal fade text-center" id="Imagem304" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura304.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 304</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Uma vez finalizada a “Contagem 1” poderá ser iniciada a "Contagem 2".</p>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Clicando no ícone “Criar Equipe” poderão ser formadas novamente as equipes de contagem com as pessoas que foram previamente cadastradas no painel “Pessoas”, visto anteriormente. No entanto, vale salientar que a equipe da Contagem 2 não poderão ser as mesmas pessoas que efetuaram a Contagem 1.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura305.png" data-bs-toggle="modal" data-bs-target="#Imagem305">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura305.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 305 - MODAL -->
                            <div class="modal fade text-center" id="Imagem305" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura305.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 305</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Coordenador", escolha o nome do coordenador do inventário. Clicando na seta ao lado do campo será demonstrada uma relação de nomes com o perfil de "Gestor'', que corresponde ao perfil que tem acesso a funcionalidade de inventário.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura306.png" data-bs-toggle="modal" data-bs-target="#Imagem306">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura306.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 306 - MODAL -->
                            <div class="modal fade text-center" id="Imagem306" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura306.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 306</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionando o botão “Alterar” poderá ser alterado o nome do coordenador da equipe.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Pessoas Disponíveis", escolha na relação de pessoas disponíveis, à esquerda da tela, clicando no quadrinho, aquelas que comporão a equipe de contagem que está sendo editada. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Em seguida, clique no botão “Seta”, passando a pessoa selecionada ,no campo "Pessoas Disponíveis", para o campo "Pessoas Selecionadas".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">No campo "Pessoas Selecionadas", clique no quadrinho ao lado do nome da pessoa, em seguida, clique no botão “Salvar Equipe”.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.6s">Ao acionar o botão "Salvar Equipe", é finalizada a edição da equipe de contagem.</li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Será formada somente uma equipe para realização de uma contagem. A cada contagem esse processo se repetirá, podendo o coordenador do inventário compor equipes diferentes a cada contagem. Será necessário no mínimo duas pessoas por equipe.</p>
                                </div>
                            </div>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura307.png" data-bs-toggle="modal" data-bs-target="#Imagem307">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura307.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 307 - MODAL -->
                            <div class="modal fade text-center" id="Imagem307" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura307.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 307</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão “Salvar Equipe”, será demonstrada a mensagem de sucesso da operação, e será apresentado, na coluna "Acompanhamentos" da tela "Contagens", o ícone em azul “Abrir Contagem” para iniciar a contagem em evidência.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura308.png" data-bs-toggle="modal" data-bs-target="#Imagem308">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura308.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 308 - MODAL -->
                            <div class="modal fade text-center" id="Imagem308" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura308.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 308</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Para a contagem em evidência “Contagem 2”, após ser acionado o ícone "Abrir Contagem", na coluna "Acompanhamentos", ficarão disponíveis os demais ícones referentes ao acompanhamento do inventário</p>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Na coluna "Imprimir", clique sobre o ícone de cor laranja para imprimir o relatório "Gabarito para Contagem de Inventário", assim o status da contagem passará de "Pendente" para "Aberta".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura309.png" data-bs-toggle="modal" data-bs-target="#Imagem309">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura309.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 309 - MODAL -->
                            <div class="modal fade text-center" id="Imagem309" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura309.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 309</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o ícone "Gabarito para Contagem de Inventário", o relatório será impresso em quantas vias se façam necessárias para distribuição entre os participantes da equipe de contagem. De posse do Relatório, no campo “Qtde.”, o participante escreverá o resultado da contagem que será posteriormente digitada no SIGA/SGBM.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura310.png" data-bs-toggle="modal" data-bs-target="#Imagem310">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura310.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 310 - MODAL -->
                            <div class="modal fade text-center" id="Imagem310" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura310.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 310</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Após clicar no ícone “Editar Dados”, o Relatório "Gabarito para Contagem de Inventário" da “Contagem 2” deve ser digitado no SIGA.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura311.png" data-bs-toggle="modal" data-bs-target="#Imagem311">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura311.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 311 - MODAL -->
                            <div class="modal fade text-center" id="Imagem311" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura311.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 311</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Digite no campo “Qtde. Física” a quantidade do item constante no “Relatório de Gabarito de Contagem de Inventário”, que foi resultante da contagem em campo. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Em seguida, clique no botão “Finalizar Editar Dados”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura312.png" data-bs-toggle="modal" data-bs-target="#Imagem312">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura312.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 312 - MODAL -->
                            <div class="modal fade text-center" id="Imagem312" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura312.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 312</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Acionado o botão “Finalizar Editar Dados”, na tela anterior, será demonstrada a mensagem de confirmação da operação, restando finalizar a contagem para que o SIGA/SGBM inicie o confronto entre "Contagem 1" e “Contagem 2”. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura313.png" data-bs-toggle="modal" data-bs-target="#Imagem313">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura313.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 313 - MODAL -->
                            <div class="modal fade text-center" id="Imagem313" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura313.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 312</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acionado o botão “OK”, na janela "pop-up", o SIGA/SGBM atualizará o "Status" da contagem de "Aberta" para "Fechada" e disponibilizará o "Resultado de Contagem de Inventário''. A partir desse "Status", poderá ser iniciada a verificação entre a “Contagem 1” e a “Contagem 2''. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura314.png" data-bs-toggle="modal" data-bs-target="#Imagem314">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura314.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 314 - MODAL -->
                            <div class="modal fade text-center" id="Imagem314" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura314.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 314</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura315.png" data-bs-toggle="modal" data-bs-target="#Imagem315">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura315.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 315 - MODAL -->
                            <div class="modal fade text-center" id="Imagem315" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura315.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 315</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Estando a “Contagem 1” e a “Contagem 2'' com o status "Fechada", já é possível fazer a verificação por intermédio do SIGA/SGBM para apurar diferenças entre contagens.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Acione o botão “Ir para Verificação” para processar o confronto entre a “Contagem 1” e a “Contagem 2''. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura316.png" data-bs-toggle="modal" data-bs-target="#Imagem316">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura316.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 316 - MODAL -->
                            <div class="modal fade text-center" id="Imagem316" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura316.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 316</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Ao acionar o botão "Ir para Verificação" o Siga/Sgbm apresentará a janela "Verificações" com a grade especificando a "Verificação1" em evidência cujo Status e o Resultado apresentam o valor "não Processado".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acionar o ícone azul em formato de “Engrenagens” para processar a verificação entre a Contagem 1 e a Contagem 2. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura317.png" data-bs-toggle="modal" data-bs-target="#Imagem317">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura317.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 317 - MODAL -->
                            <div class="modal fade text-center" id="Imagem317" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura317.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 317</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao acionar o ícone azul em formato de “Engrenagens”, o SIGA/SGBM altera o status da "Verificação 1" para "Finalizada".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Da mesma forma, na coluna "Resultado", o SIGA/SGBM alerta se houve conflito ou não entre a “Contagem 1” e a “Contagem 2”. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Havendo conflito, automaticamente o SIGA/SGBM cria uma nova verificação (Verificação 2), da qual se originará uma “Contagem 3''. O status da referida verificação apresentará o status "Aguardando Contagem".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Na coluna "Detalhamento", será apresentado um ícone verde em formato de "três pontos sequenciais", ao ser acionado exibirá os detalhes do conflito. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura318.png" data-bs-toggle="modal" data-bs-target="#Imagem318">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura318.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 318 - MODAL -->
                            <div class="modal fade text-center" id="Imagem318" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura318.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 318</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o ícone verde em formato de "três pontos sequenciais", o SIGA/SGBM apresenta o detalhamento das “Contagens 1 e 2”, para que seja analisada a razão dos conflitos.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Acione o botão "Fechar Visualização" para retornar somente à tela "Verificações".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura319.png" data-bs-toggle="modal" data-bs-target="#Imagem319">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura319.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 319 - MODAL -->
                            <div class="modal fade text-center" id="Imagem319" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura319.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 319</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Acione o botão "Voltar para Inventários" para iniciar o processo da “Contagem 3”, para dirimir as divergências entre “Contagens 1 e 2”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura320.png" data-bs-toggle="modal" data-bs-target="#Imagem320">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura320.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 320 - MODAL -->
                            <div class="modal fade text-center" id="Imagem320" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura320.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 320</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Uma vez identificado a ocorrência de conflito entre "Contagem 1" e "Contagem 2", o SIGA/SGBM acrescenta, na grade "Contagens", mais uma linha correspondente à "Contagem 3".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Clicando no ícone “Criar Equipe”, poderá ser formada novamente as equipes de contagem com as pessoas que foram previamente cadastradas no painel “Pessoas”, visto anteriormente. Vale salientar que estarão disponíveis todos os componentes disponíveis para formação da equipe da “Contagem 3”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura321.png" data-bs-toggle="modal" data-bs-target="#Imagem321">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura321.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 321 - MODAL -->
                            <div class="modal fade text-center" id="Imagem321" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura321.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 321</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">No campo "Coordenador", escolha o nome do coordenador do inventário. Clicando na seta ao lado do campo, será demonstrada uma relação de nomes com o perfil de “Gestor”, que é o perfil que tem acesso a funcionalidade de inventário.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura322.png" data-bs-toggle="modal" data-bs-target="#Imagem322">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura322.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 322 - MODAL -->
                            <div class="modal fade text-center" id="Imagem322" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura322.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 322</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Pessoas Disponíveis", escolha na relação de pessoas disponíveis, à esquerda da tela, clicando no quadrinho, aquelas que comporão a equipe de contagem que está sendo editada. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Em seguida, clique no botão “Seta”, passando a pessoa selecionada, no campo "Pessoas Disponíveis", para o campo "Pessoas Selecionadas". </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">No campo "Pessoas Selecionadas", clique no quadrinho ao lado do nome da pessoa, em seguida, clique no botão “Salvar Equipe”. </li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Ao acionar o botão "Salvar Equipe", é finalizada a edição da equipe de contagem. </li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Será formada somente uma equipe para realização de uma contagem. A cada contagem esse processo se repetirá, podendo o coordenador do inventário compor equipes diferentes a cada contagem. Será necessário no mínimo duas pessoas por equipe.</p>
                                </div>
                            </div>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura323.png" data-bs-toggle="modal" data-bs-target="#Imagem323">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura323.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 323 - MODAL -->
                            <div class="modal fade text-center" id="Imagem323" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura323.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 323</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão “Salvar Equipe”, será demonstrado a mensagem de sucesso da operação e será apresentado, na coluna "Acompanhamentos" da tela "Contagens", o ícone em azul “Abrir Contagem” para iniciar a contagem em evidência. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura324.png" data-bs-toggle="modal" data-bs-target="#Imagem324">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura324.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 324 - MODAL -->
                            <div class="modal fade text-center" id="Imagem324" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura324.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 324</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Para a contagem em evidência “Contagem 3”, após ser acionado o ícone "Abrir Contagem", na coluna "Acompanhamentos", ficarão disponíveis os demais ícones referentes ao acompanhamento do inventário</p>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Na coluna "Imprimir", clique sobre o ícone de cor laranja para imprimir o relatório "Gabarito para Contagem de Inventário", assim o status da contagem passará de "Pendente" para "Aberta". </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura325.png" data-bs-toggle="modal" data-bs-target="#Imagem325">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura325.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 325 - MODAL -->
                            <div class="modal fade text-center" id="Imagem325" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura325.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 325</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Acionado o ícone "Gabarito para Contagem de Inventário", o relatório será impresso em quantas vias se façam necessárias para distribuição entre os participantes da equipe de contagem. De posse do Relatório, no campo “Qtde.”, o participante escreverá o resultado da contagem que será posteriormente digitada no SIGA/SGBM.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura326.png" data-bs-toggle="modal" data-bs-target="#Imagem326">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura326.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 326 - MODAL -->
                            <div class="modal fade text-center" id="Imagem326" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura326.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 326</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Uma vez efetuada a contagem em campo, o “Relatório Gabarito de Contagem de Inventário” deve ser digitado no SIGA/SGBM, para isso basta clicar no ícone “Editar Dados” e o sistema abrirá uma tela para a digitação do relatório.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura327.png" data-bs-toggle="modal" data-bs-target="#Imagem327">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura327.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 327 - MODAL -->
                            <div class="modal fade text-center" id="Imagem327" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura327.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 327</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Após clicar no ícone “Editar Dados” SIGA abre uma janela para digitação do “Relatório Gabarito de Contagem de Inventário".</p>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Digitar, no campo “Qtde. Física”, a quantidade do item constante no "Relatório de Gabarito de Contagem de Inventário”, que foi resultante da contagem em campo. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Em seguida, clique no botão “Finalizar Editar Dados”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura328.png" data-bs-toggle="modal" data-bs-target="#Imagem328">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura328.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 328 - MODAL -->
                            <div class="modal fade text-center" id="Imagem328" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura328.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 328</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão “Finalizar Editar Dados”, na tela anterior, será demonstrada a mensagem de confirmação da operação, restando finalizar a contagem para que o SIGA/SGBM inicie o confronto entre "Contagem 3" e as demais contagens anteriores (Contagem 1 e Contagem 2).</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura329.png" data-bs-toggle="modal" data-bs-target="#Imagem329">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura329.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 329 - MODAL -->
                            <div class="modal fade text-center" id="Imagem329" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura329.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 329</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Estando a “Contagem 1”, “Contagem 2” e “Contagem 3” com o status "Fechada", já é possível fazer a verificação por intermédio do SIGA/SGBM, para apurar diferenças entre contagens.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Acione o botão “Ir para Verificação” para processar o confronto entre a “Contagem 1” e a “Contagem 2”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura330.png" data-bs-toggle="modal" data-bs-target="#Imagem330">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura330.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 330 - MODAL -->
                            <div class="modal fade text-center" id="Imagem330" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura330.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 330</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Ao acionar o botão "Ir para Verificação", o SIGA/SGBM apresentará a janela "Verificações" com a grade especificando a "Verificação 2" em evidência cujo Status e o Resultado apresentam o valor "Não Processado".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acione o ícone azul em formato de “Engrenagens” para processar a verificação entre a “Contagem 1”, “Contagem 2 “ e “Contagem 3”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura331.png" data-bs-toggle="modal" data-bs-target="#Imagem331">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura331.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 331 - MODAL -->
                            <div class="modal fade text-center" id="Imagem331" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura331.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 331</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao acionar o ícone azul em formato de “Engrenagens”, o SIGA/SGBM altera o status da "Verificação 1" para "Finalizada".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Da mesma forma, na coluna "Resultado", o SIGA/SGBM alerta que a “Contagem 3” coincidiu com uma das contagens anteriores (Contagem 1 e Contagem 2), considerando "correto" o resultado das contagens.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Não havendo conflito, automaticamente o SIGA/SGBM não adiciona mais uma verificação, e acionando o ícone, na coluna "Detalhamento", é possível verificar onde houve coincidências entre as contagens.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Não havendo conflito, o SIGA/SGBM habilita o botão "Resumo Final".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura332.png" data-bs-toggle="modal" data-bs-target="#Imagem332">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura332.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 332 - MODAL -->
                            <div class="modal fade text-center" id="Imagem332" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura332.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 332</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="1.8s">Acionado o ícone, na coluna "Detalhamento", verifica-se que a coincidência entre contagens ocorreu entre a "Contagem 1" e a "Contagem 3".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura333.png" data-bs-toggle="modal" data-bs-target="#Imagem333">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura333.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 333 - MODAL -->
                            <div class="modal fade text-center" id="Imagem333" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura333.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 333</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao acionar o botão "Resultado Final", o SIGA/SGBM apresentará a janela "Finalizar", demonstrando o resultado físico das contagens dos materiais envolvidos no inventário, e a quantidade constante no registro escritural do sistema.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Apresenta também a situação entre o que foi contado e o que existe no registro, no caso do exemplo abaixo, um conflito entre físico e saldo.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">No campo “Justificativa para Ajuste", quando houver, descreva a justificativa do acerto que será realizado no registro escritural.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Ao acionar o botão "Finalizar Inventário", o sistema ajustará o saldo (Qtde. no sistema), considerando a quantidade resultante das contagens físicas.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura334.png" data-bs-toggle="modal" data-bs-target="#Imagem334">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura334.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 334 - MODAL -->
                            <div class="modal fade text-center" id="Imagem334" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura334.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 334</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao acionar o botão "Finalizar Inventário", o sistema demonstrará a janela "Relatório Final" com a situação do inventário como "Fechado"</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Ao acionar o botão "Relatório", será emitido o relatório para a documentação do resultado final do inventário.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura335.png" data-bs-toggle="modal" data-bs-target="#Imagem335">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura335.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 335 - MODAL -->
                            <div class="modal fade text-center" id="Imagem335" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura335.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 335</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura336.png" data-bs-toggle="modal" data-bs-target="#Imagem336">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura336.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 336 - MODAL -->
                            <div class="modal fade text-center" id="Imagem336" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura336.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 336</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </ol>

                        <!-- Sub Título -->
                        <p class="SubTitulo" id="T6four">Emitir Relatórios</p>
                        <hr>

                        <br>

                        <p>Para emissão dos relatórios do Siga/Sgbm no módulo de estoque o perfil "Almoxarife" deverá acionar na barra de menu o comando: <strong>RELATÓRIOS >> ALMOXARIFADO</strong>: </p>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura337.png" data-bs-toggle="modal" data-bs-target="#Imagem337">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura337.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 337 - MODAL -->
                        <div class="modal fade text-center" id="Imagem337" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura337.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 337</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 337 - End --><br>
                        <p>Os relatórios disponíveis são os seguintes:</p>
                        <p><strong>A) 10 (Dez) Itens de Maior Consumo</strong></p>
                        <hr>
                        <p><strong>Objetivo:</strong> Demonstrar os dez itens de materiais mais consumidos em determinado período, classificados por quantidade ou valor. </p>
                        <p><strong>Periodicidade:</strong> Eventual. <br><strong>Parâmetros de Emissão</strong></p>
                        <ol>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">Selecionar o ano ao qual se refere o relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Selecionar o mês ao qual se refere o relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Escolher qual o critério de classificação se consumo referente a Valor ou se consumo referente a Quantidade.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acionar o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura338.png" data-bs-toggle="modal" data-bs-target="#Imagem338">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura338.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 338 - MODAL -->
                            <div class="modal fade text-center" id="Imagem338" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura338.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 338</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 338 - End --><br>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura339.png" data-bs-toggle="modal" data-bs-target="#Imagem339">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura339.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 339 - MODAL -->
                            <div class="modal fade text-center" id="Imagem339" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura339.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 339</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 339 - End --><br>
                        </ol>
                        <p><strong>B) Consumo Geral do Período</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong>Demonstrar o histórico de consumo por períodos pré-determinados.</p>
                        <p><strong>Periodicidade:</strong> Eventual <br> <strong>Parâmetros de emissão:</strong></p>
                        <ol>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Data Inicial", informe a data de início do período a ser incluída no relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Data Limite", informe a data que delimita o período a ser incluído no relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Abaixo das duas datas que compreendem o período, é habilitado o botão "Adicionar", que acionado irá formar abaixo uma grade com a série de períodos para apuração do comportamento do consumo.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">No campo “Tipo de Material”, selecione a opção "Consumo".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.6s">A cada período adicionado, a grade irá aumentar o número de linhas.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.9s">Ao final de cada linha, terá um ícone em formato de "X", que se acionado excluirá o período em questão da série.</li>
                            <li class="wow fadeInRight" data-wow-delay="2.3s">Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura340.png" data-bs-toggle="modal" data-bs-target="#Imagem340">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura340.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 340 - MODAL -->
                            <div class="modal fade text-center" id="Imagem340" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura340.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 340</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 340 - End -->
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura341.png" data-bs-toggle="modal" data-bs-target="#Imagem341">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura341.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 341 - MODAL -->
                            <div class="modal fade text-center" id="Imagem341" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura341.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 341</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem341 - End --><br>
                        </ol>
                        <br>
                        <p><strong>C) Consumo Por Setor</strong></p>
                        <hr>
                        <p><strong>Objetivo:</strong> Demonstrar o consumo de materiais organizado por Setor (Centro de Custo) e por classe de materiais.</p>
                        <p><strong>Periodicidade:</strong> Eventual </p>
                        <p><strong>Parâmetros de emissão:</strong> </p>
                        <ol>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Tipo de Material", selecione a opção "Consumo".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Setor", selecione qual a abrangência a ser dada no relatório, se deve considerar todos os setores ou um setor específico. Caso seja apenas um setor, o SIGA/SGBM apresentará uma caixa de seleção para que seja escolhido o setor de referência para emissão do relatório, caso contrário, não informe esse campo, e o relatório será gerado para todos os setores.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">No campo "Ano", informe o ano de movimentação que se deseja apurar.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">No campo "Mês", informe o mês de movimentação que se deseja apurar.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.6s">Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Caso a emissão do relatório seja para um item específico, na "grade de filtro", informe o item pelo código ou palavra-chave.</p>
                                </div>
                            </div>
                            <br>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura342.png" data-bs-toggle="modal" data-bs-target="#Imagem342">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura342.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 342 - MODAL -->
                            <div class="modal fade text-center" id="Imagem342" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura342.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 342</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 342- End --><br>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura343.png" data-bs-toggle="modal" data-bs-target="#Imagem343">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura343.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 343 - MODAL -->
                            <div class="modal fade text-center" id="Imagem343" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura343.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 343</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 343- End --><br>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura344.png" data-bs-toggle="modal" data-bs-target="#Imagem344">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura344.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 344 - MODAL -->
                            <div class="modal fade text-center" id="Imagem344" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura344.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 344</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 344- End -->

                        </ol>
                        <br>
                        <p><strong>D) Consumo Por Grupo</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong> Demonstrar o consumo mensal dos itens de Material de Consumo organizados por Grupo de Material, conforme o Catálogo de Bens, Materiais e Serviços.</p>
                        <p><strong>Periodicidade:</strong> Eventual <br><strong>Parâmetros de emissão:</strong></p>

                        <ol>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Tipo de Material" informe a opção "CONSUMO".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Ano" informe o o Ano de referência para a emissão do relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">No campo "MÊS" informe o mês de referência para a emissão do relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>

                            <br><br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura345.png" data-bs-toggle="modal" data-bs-target="#Imagem345">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura345.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 345 - MODAL -->
                            <div class="modal fade text-center" id="Imagem345" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura345.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 345</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 345 - End --><br>

                            <br><br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura346.png" data-bs-toggle="modal" data-bs-target="#Imagem346">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura346.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 346 - MODAL -->
                            <div class="modal fade text-center" id="Imagem346" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura346.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 346</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 346 - End -->
                        </ol>
                        <br>
                        <p><strong>E) Entradas no Período</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong> Demonstrar as entradas de materiais em um determinado período classificada por Nota Fiscal, Devolução, Doação ou Todas as Entradas.</p>
                        <p><strong> Periodicidade:</strong> Eventual <br> <strong>Parâmetros de emissão:</strong></p>
                        <ol>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Período de Movimentação" informe a Data Inicial e a Data Final que delimita o período de referência do relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s"> No campo "Tipo de Entrada" selecione qual a modalidade de entrada que poderão ser:</li>
                            <ul>
                                <li class="wow fadeInRight" data-wow-delay="0.9s"> <strong>Nota Fiscal:</strong> Quando se tratar de entrada por intermédio de aquisição.</li>
                                <li class="wow fadeInRight" data-wow-delay="1.3s"> <strong>Devolução:</strong> Quando se tratar de entrada de material que não foi consumido pelo requisitante e está sendo devolvido ao almoxarifado.</li>

                                <li class="wow fadeInRight" data-wow-delay="1.6s"> <strong>Doação:</strong> Quando se tratar de doações não acompanhadas de Nota Fiscal ou Transferências de outros órgãos da administração pública, nesses casos o documento de suporte é o Termo de Doação ou Transferência.</li>

                                <li class="wow fadeInRight" data-wow-delay="1.9s"> <strong>Todas:</strong> Nesse caso o relatório classificará todas as modalidades de movimentação de entrada.</li>
                            </ul>
                            <li class="wow fadeInRight" data-wow-delay="2.3s">No campo "Tipo de Material", selecione a opção referente ao tipo de Material a que se refere a entrada, de CONSUMO ou PERMANENTE.</li>
                            <li class="wow fadeInRight" data-wow-delay="2.6s">No campo "Filtrar por um Fornecedor Apenas", informe a "Razão Social" ou "CNPJ" do fornecedor. É recomendável que seja informado o CNPJ porque a busca será específica por se tratar de uma pesquisa numérica, no caso de Razão Social será uma busca alfabética e poderá ser usada qualquer palavra que conste na composição da Razão Social do Fornecedor e poderá ser demonstrado um fornecedor que não seja o desejado.</li>
                            <li class="wow fadeInRight" data-wow-delay="2.9s">Acione o botão "Adicionar" para incluir o fornecedor nos parâmetros do relatório</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura347.png" data-bs-toggle="modal" data-bs-target="#Imagem347">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura347.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 347 - MODAL -->
                            <div class="modal fade text-center" id="Imagem347" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura347.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 347</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 347 - End -->
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Uma vez acionado o botão "Adicionar", o SIGA/SGBM demonstra a "Razão Social" e o "Nome Fantasia" do fornecedor para que seja confirmado. Vale ressaltar que se não for o fornecedor desejado basta acionar o botão "Alterar".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acione o botão "Gerar Relatório" para impressão do relatório em formato PDF.</li>
                            <br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura348.png" data-bs-toggle="modal" data-bs-target="#Imagem348">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura348.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 348 - MODAL -->
                            <div class="modal fade text-center" id="Imagem348" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura348.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 348</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Imagem 348 - End -->
                            <br>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura349.png" data-bs-toggle="modal" data-bs-target="#Imagem349">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura349.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 349 - MODAL -->
                            <div class="modal fade text-center" id="Imagem349" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura349.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 349</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 349 - End --><br>
                        </ol>
                        <p><strong>F) Entrada VS Saída no Período</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong>Demonstrar analítica e sinteticamente (totalizando no final por tipo de operação) a movimentação física e financeira dos itens de estoque possibilitando a conciliação mensal e acerto contábil.</p>
                        <p><strong>Periodicidade: </strong> Eventual</p>
                        <p><strong>Parâmetros de emissão:</strong></p>
                        <ol>

                            <li class="wow fadeInRight" data-wow-delay="0.3s"> Selecione o ano de referência para a emissão do relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s"> Selecione o mês de referência para a emissão do relatório</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Selecione a modalidade de apresentação do relatório se deverão ser listados todos os itens em sequência alfabética de descrição ou se deverão ser listados agrupados por categoria segundo a classificação do Catálogo de Bens Materiais e Serviços.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s"> Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>


                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura350.png" data-bs-toggle="modal" data-bs-target="#Imagem350">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura350.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 350 - MODAL -->
                            <div class="modal fade text-center" id="Imagem350" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 350</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 350 - End -->

                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura351.png" data-bs-toggle="modal" data-bs-target="#Imagem351">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura351.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 351 - MODAL -->
                            <div class="modal fade text-center" id="Imagem351" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura351.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 351</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 351 - End --><br>
                        </ol>
                        <p><strong>G) Itens Parados no Período</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong>Demonstrar os itens de estoque que não sofreram em determinado período nenhum tipo de movimentação.</p>
                        <p><strong>Periodicidade: </strong> Eventual</p>
                        <p><strong>Parâmetros de emissão:</strong></p>
                        <ol>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s"> No campo "Período Movimentação" inforne a "Data Inicial" e a "Data Final" que compôs o referido período.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Selecione o tipo de movimento que não ocorreu durante o período de análise do relatório se somente o movimento de "Entrada" ou somente o movimento de "Saída" ou se não houve nenhuma movimentação.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura352.png" data-bs-toggle="modal" data-bs-target="#Imagem352">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura352.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 352 - MODAL -->
                            <div class="modal fade text-center" id="Imagem352" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura352.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 352</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 352 - End -->
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura353.png" data-bs-toggle="modal" data-bs-target="#Imagem353">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura353.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 353 - MODAL -->
                            <div class="modal fade text-center" id="Imagem353" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura353.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 353</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 353 - End --> <br>
                        </ol>
                        <p><strong>H) Itens Cadastrados Por Tipo</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong> Demonstrar os itens do Catálogo de Bens Materiais e Serviços cadastrados no SIGA/SGBM visando facilitar o processo de migração de dados.</p>
                        <p><strong>Periodicidade: </strong> Eventual</p>
                        <p><strong>Parâmetros de emissão:</strong></p>
                        <ol>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s"> No campo "Tipo de Material" selecione qual a opção de item a ser relacionado se itens de patrimônio ou itens de material de consumo.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Ordenado por" selecione se a ordem de seqüencial do relatório será por ordem de código ou por ordem alfabética.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura354.png" data-bs-toggle="modal" data-bs-target="#Imagem354">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura354.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 354 - MODAL -->
                            <div class="modal fade text-center" id="Imagem354" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura354.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 354</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 354 - End -->
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura355.png" data-bs-toggle="modal" data-bs-target="#Imagem355">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura355.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 355 - MODAL -->
                            <div class="modal fade text-center" id="Imagem355" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura355.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 355</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 355 - End --><br>
                        </ol>
                        <p><strong>I) Posição de Estoque</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong> Demonstrar os itens de estoque que estão com saldo maior que zero, igual a zero ou o saldo do estoque em determinado período após o fechamento mensal.</p>
                        <p><strong>Periodicidade: </strong> Eventual</p>
                        <p><strong>Parâmetros de emissão:</strong></p>
                        <ol>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s"> No campo "Tipo de Material" selecione a opção correspondente ao tipo de material em estoque se "CONSUMO" ou "PATRIMÔNIO".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Posição Estoque" selecione a opção correspondente à posição de estoque que se deseja demonstrar no relatório se "Material em Estoque", "Material sem Estoque" ou "Baseado em Data". Nesta última opção o Siga/Sgbm acrescentará dois novos campos a serem informados "Ano" e "MÊS" </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura356.png" data-bs-toggle="modal" data-bs-target="#Imagem356">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura356.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 356 - MODAL -->
                            <div class="modal fade text-center" id="Imagem356" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura356.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 356</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 356 - End -->
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura357.png" data-bs-toggle="modal" data-bs-target="#Imagem357">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura357.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 357 - MODAL -->
                            <div class="modal fade text-center" id="Imagem357" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura357.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 357</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 357 - End --><br>
                        </ol>
                        <br>
                        <p><strong>J) Razâo da Movimentação de Estoque</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong> Demonstrar analiticamente, por movimento de estoque, em quantidade ou em custo, o comportamento dos saldos de estoque.</p>
                        <p><strong>Periodicidade: </strong> Eventual</p>
                        <p><strong>Parâmetros de emissão:</strong></p>
                        <ol>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Período de Movimentação" informe a data inicial e a data final que delimita o período de referência do relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s"> No campo "Tipo de Material" selecione a opção de material entre CONSUMO e PATRIMÔNIO.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> No campo "Emissão" selecione a forma de apresentação da movimentação se "POR QUANTIDADE" ou "POR CUSTO".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Na grade "Filtrar por um material apenas" selecione a opção de identificação do material objeto do relatório. Nos casos de não preenchimento desses campos será emitido o relatório para todos os itens de estoque.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s"> Na mesma grade "Filtrar por um material apenas" informe na caixa de texto o código ou a palavra chave usada para pesquisa do material em seguida acionar o botão "Pesquisar".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura358.png" data-bs-toggle="modal" data-bs-target="#Imagem358">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura358.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 358 - MODAL -->
                            <div class="modal fade text-center" id="Imagem358" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura358.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 358</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 358 - End -->
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão "Pesquisar", na grade "Filtrar por Um Material Apenas", o SIGA/SGBM demonstrará uma janela "pop-up" com as informações de detalhe do item e para colocá-lo como parâmetro do relatório, basta clicar no botão "Adicionar"..</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura359.png" data-bs-toggle="modal" data-bs-target="#Imagem359">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura359.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 359 - MODAL -->
                            <div class="modal fade text-center" id="Imagem359" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura359.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 359</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 359 - End -->
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão "Adicionar", o SIGA/SGBM apresentará uma grade descrevendo o material objeto do relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acione o botão "Gerar Relatório" para a emissão do relatório segundo os parâmetros informados.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura360.png" data-bs-toggle="modal" data-bs-target="#Imagem360">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura360.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 360 - MODAL -->
                            <div class="modal fade text-center" id="Imagem360" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura360.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 360</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 360 - End -->
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura361.png" data-bs-toggle="modal" data-bs-target="#Imagem361">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura361.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 361 - MODAL -->
                            <div class="modal fade text-center" id="Imagem361" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura361.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 361</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 361 - End -->
                            <br>
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
                <a href="Topico05.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>