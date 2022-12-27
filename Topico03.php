<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
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

                        <h2 class="Titulo" id="T3"> Recebimento de Novos Bens no SIGA/SGBM</h2>
                        <hr>

                        <br>

                        <p><strong>Objetivo:</strong> Compreender a funcionalidade de registro de novos bens no Sistema SIGA/SGBM oriundos do processo de aquisição, assim como a manutenção do cadastro de itens de material.</p>

                        <p>No módulo I, na aula 04, deste curso, dedicamos o item 4.6 exclusivamente para discutir os procedimentos de recebimento de material que se aplica tanto aos materiais de consumo como os materiais permanentes. Recapitulando àquela ocasião, podemos concluir que o recebimento é o ato pelo qual a equipe do almoxarifado recebe do fornecedor os materiais de consumo e bens móveis adquiridos pelo órgão/entidade, efetuando as conferências necessárias para dar o aceite dos produtos. Esses materiais e bens devem ser entregues pelo fornecedor em local previamente determinado no contrato e conforme agendamento realizado junto ao almoxarifado. </p>

                        <P>Recebimento pode ser subdividido em duas etapas: provisório e definitivo.</p>

                        <ol class="1">
                            <li class=" wow fadeInRight" data-wow-delay="0.3s"> <strong>Recebimento Provisório:</strong> o material adquirido é entregue ao órgão/entidade no local definido, não implicando necessariamente em aceitação. Nesse momento serão realizados procedimentos de conferência para aceitar ou não a carga. </li>
                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="0.6s"> <strong>Recebimento Definitivo:</strong> ato por meio do qual se declara, na documentação fiscal, que o material recebido está de acordo com as especificações do contrato.
                                <br><br>Deverão ser efetuadas três conferências pela equipe do almoxarifado no ato do recebimento de materiais e bens que são: Conferência visual, Conferência quantitativa, Conferência qualitativa.
                            </li><br>
                            <li class=" wow fadeInRight" data-wow-delay="0.9s"> <strong>Conferência Visual:</strong> exame para constatação de avarias (defeitos), análise da disposição das cargas, observação das embalagens quanto a evidências de quebras, umidade, amassados, dentre outros.</li>
                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="1.0s"> <strong>Conferência Quantitativa:</strong> verificação se a quantidade declarada pelo fornecedor na nota fiscal corresponde efetivamente à quantidade física que está sendo recebida.</li>
                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="1.3s"> <strong>Conferência Qualitativa:</strong> análise de qualidade efetuada por meio da confrontação das condições contratadas na Ordem de Compra/Contrato com as consignadas na Nota Fiscal pelo fornecedor. Essa análise visa garantir o recebimento adequado do material contratado por meio do exame de suas características dimensionais, específicas e restrições de especificação.
                                <br><br>Após a conferência dos materiais e bens recebidos no almoxarifado, o almoxarife/servidor ou comissão poderá realizar a recusa total, o recebimento total ou parcial.
                            </li><br>
                            <li class=" wow fadeInRight" data-wow-delay="1.6s"> <strong>Recusa Total:</strong> consiste na situação em que a carga é recusada pelo almoxarife/servidor compreendendo as seguintes possibilidades:
                                <br><br>
                                <ol type="a">
                                    <li class=" wow fadeInRight" data-wow-delay="1.9s">Nota fiscal não corresponde à especificação ou quantidade física do item de material;</li>
                                    <li class=" wow fadeInRight" data-wow-delay="2.0s">A especificação do item é diferente da constante na Ordem de Compra.</li>
                                    <li class=" wow fadeInRight" data-wow-delay="2.3s">Valor da Nota Fiscal diferente do valor da Ordem de Compra/Contrato, sem justificado o reequilíbrio econômico-financeiro do contrato;</li>
                                </ol><br>
                                <span class=" wow fadeInRight" data-wow-delay="2.4s">Nos casos da recusa total há a possibilidade de novo agendamento para entrega.</span>
                            </li>
                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="2.6s"> <strong> Recebimento Total:</strong> corresponde à situação em que o fornecedor efetua a entrega corretamente, atendendo todos os requisitos de documentação, quantidade e qualidade dos itens; caso em que o recebimento é finalizado.</li>
                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="2.9s"> <strong> Recebimento Parcial:</strong> consiste no aceite da parte “correta” dos itens, nesse caso o fornecedor emitirá uma nova nota fiscal referente à quantidade “correta” cancelando a nota fiscal anterior. A mercadoria ficará separada aguardando a correção para poder dar entrada em estoque.
                                <br><br>É importante que o almoxarife que fará as citadas conferências seja o mesmo que efetuará o registro no sistema SIGA/SGBM, de forma a evitar a ocorrência de erros de transcrição no momento do entendimento do que está sendo digitado no sistema.
                                <br><br>O Almoxarife terá duas opções de registro de entrada do material e bens móveis no sistema SIGA/SGBM:
                            </li><br>
                            <li class=" wow fadeInRight" data-wow-delay="3.0s"> <strong> Entrada por Ordem de Compra:</strong> Deverá ser utilizada quando se tratar de aquisições de materiais e bens móveis por intermédio dos Sistemas de Compras, onde foram emitidas as respectivas Ordens de Compra. Estando o SIGA/SGBM atualmente integrado com o Sistema de Registro de Preços e Sistema de Cotação Eletrônica. A partir da identificação da Ordem de Compra será buscado o saldo desta para importar os dados correspondentes ao registro de entrada. O SIGA/SGBM considerará somente as Ordens de Compra que estiverem com o status “Emitida”, ou seja que não tiveram com seu recebimento efetivado. </li>
                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="3.3s"> <strong> Entrada por Nota Fiscal:</strong> Deverá ser utilizada quando se tratar de aquisições de materiais que não foram formalizadas por intermédio da Ordem de Compra, nesses casos será necesssário digitar no SIGA/SGBM a Nota Fiscal do Fornecedor, nesse caso algumas premissas devem ser atendidas:</li>
                            <br>
                            <ol type="a">
                                <li class=" wow fadeInRight" data-wow-delay="3.6s"> O item de material deve estar previamente cadastrado no SIGA, para que possa ser efetuado o registro.</li>
                                <li class=" wow fadeInRight" data-wow-delay="3.9s"> O Fornecedor deve estar cadastrado no Certificado de Registro Cadastral – CRC.</li>
                            </ol>

                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="4.0s"> <strong> Conferência das Entradas:</strong> O processo de registro de entrada no controle de estoque é um ponto crítico de controle porque é na entrada do material que o SIGA/SGBM efetua o cálculo do valor do item de estoque, usando no caso do material de consumo, o preço médio ponderado das compras conforme determina o art. 106 da lei nº 4.320 de 17 de março de 1964. Esse cálculo utiliza entre outras variáveis o valor unitário e a quantidade do item constante na Nota Fiscal. No caso do material permanente ele será valorado pelo “custo histórico” mantendo-se o método “PEPS” de valoração dos estoques “<strong>P</strong>rimeiro a <strong>E</strong>ntrar, <strong>P</strong>rimeiro a <strong>S</strong>air”.
                                <br><br>Dessa forma, é de fundamental importância que ao registrar a entrada no SIGA/SGBM, seja por intermédio de Nota Fiscal ou Ordem de Compra, seja conferido o registro antes de efetuar qualquer movimentação do item. Para efetuar essa conferência é utilizado o relatório "Entradas do Período".
                            </li><br>
                            <li class=" wow fadeInRight" data-wow-delay="4.3s"> <strong> Cancelamento de Nota Fiscal:</strong> As Notas Fiscais de entrada registradas no SIGA/SGBM, poderão ser canceladas caso seja identificado algum erro de registro em termos de valor ou de quantidade de um item na ocasião da conferência pré registro. Nesses casos o perfil ALMOXARIFE solicitará o cancelamento da Nota e o perfil GESTOR autorizará o cancelamento no sistema, uma vez autorizado o cancelamento a Nota Fiscal poderá ser novamente registrado no SIGA/SGBM. O cancelamento só será possível se não houver nenhuma movimentação do item no período entre o registro da Nota Fiscal e a solicitação de cancelamento.</li>
                        </ol>
                        <p>Como podemos observar todo o processo de recebimento do material permanente se dará no módulo de Almoxarifado do SIGA/SGBM.</p>

                        <div class="card card-body" style="border-color: #ffcc00;">
                            <p>Vejamos então a operacionalização dos processos de recebimento do SIGA/SGBM: </p>
                            
                            <ol>
                                <li class="wow fadeInDown" data-wow-delay="0.3s"> Recebimento por Ordem de Compra, </li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"> Recebimento por Nota Fiscal, </li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"> Consulta de Notas Fiscais Salvas, </li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s"> Conferência das Entradas, </li>
                                <li class="wow fadeInDown" data-wow-delay="1.6s"> Solicitação de Cancelamento de Nota Fiscal, </li>
                                <li class="wow fadeInDown" data-wow-delay="1.9s"> Autorização de Cancelamento de Nota Fiscal, </li>
                                <li class="wow fadeInDown" data-wow-delay="2.3s"> Cadastramento de Item de Material Permanente, </li>
                                <li class="wow fadeInDown" data-wow-delay="2.6s"> Alterar Classificação de Material.</li>
                            </ol>
                        </div>

                        <!-- Sub Título -->
                        <p class="SubTitulo" id="T3one"> Recebimento por Ordem de Compra </p>
                        <hr>

                        <br>

                        <p>O recebimento por Ordem de Compra evita a transcrição de informações da Nota Fiscal de compras para entrada de estoque, reduzindo a ocorrência de erros e possibilitando um melhor monitoramento do nível de atendimento na relação com os fornecedores. Pode ser efetuado em duas modalidades o recebimento de "Ordens de Compra" originadas no "Sistema de Registro de Preço" e o recebimento de "Ordens de Compra" originadas pelo "Sistema Licitaweb" que terá menus diferenciados.</p>

                        <br>
                        <h4 style="color: #FFA73E;">A) Recebimento de Ordens de Compra de Registro de Preços</h4>
                        <hr>

                        <p>Para efetuar o registro por intermédio de Ordem de Compra na modalidade de Registro de Preço, o "Perfil Almoxaife" deve executar na barra de menu o comando: <strong>"Movimentos, Almoxarifado, Entrada, Por Ordem de Compra, Registro de Preço".</strong></p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura115.png" data-bs-toggle="modal" data-bs-target="#Imagem115">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura115.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 115 - MODAL -->
                        <div class="modal fade text-center" id="Imagem115" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura115.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 115</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 115 - End --><br>

                        <p>Ao acionar o comando correspondente na "Barra de Menu" o SIGA/SGBM apresentará a tela "Entrada por Registro de Preço" para o preenchimento das seguintes informações:</p>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No Campo "Número da Ata", preencha com o número da Ata de registro de preço de onde se origina a Ordem de Compra em questão.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Ordem de Compra", preencha com o número da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Pesquisar" para que o SIGA/SGBM apresente as informações correspondentes à Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura116.png" data-bs-toggle="modal" data-bs-target="#Imagem116">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura116.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 116 - MODAL -->
                            <div class="modal fade text-center" id="Imagem116" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura116.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 116</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 116 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o botão "Pesquisar", o SIGA/SGBM apresentará o espelho da Ordem de Compra, identificando o Fornecedor que atende o referido pedido.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionando o botão "Alterar", poderá ser informada uma nova combinação de Número de Ata e Número de Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura117.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura117.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 117 - MODAL -->
                            <div class="modal fade text-center" id="Imagem117" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura117.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 117</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 117 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Valor Total da Nota Fiscal", informe o valor total da Nota Fiscal do Fornecedor que se refere ao atendimento da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Nota Fiscal", informe o número da Nota Fiscal do fornecedor que atende a Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Nota de Empenho", informe o número da Nota de Empenho correspondente ao pagamento da respectiva Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Número de Série", informe a série da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">No campo "Data Emissão", clique no quadrinho ao lado do campo, assim abrirá o calendário do mês corrente para que seja selecionada a data correspondente à emissão da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">No campo "Data Entrada", informe a data em que a respectiva Nota Fiscal está sendo registrada no SIGA/SGBM.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Observação", descreva qualquer informação que se fará necessária para complementar a operação.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura118.png" data-bs-toggle="modal" data-bs-target="#Imagem118">
                                    <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="imagens/Figura118.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 118 - MODAL -->
                            <div class="modal fade text-center" id="Imagem118" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura118.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 118</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 118 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Marque o quadrinho constante no cabeçalho da grade "Itens Selecionados" caso queira marcar todos os itens constantes na Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Marque cada quadrinho individualmente se optar por fazer o registro de entrada parcialmente.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Quantidade Entrada", informe a quantidade do item que está sendo recebida do fornecedor.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">As colunas: "Quantidade final" e "Valor Unitário Final" terão seus valores variáveis segundo o "Fator Multiplicador", caso este seja maior que "1". A quantidade aumentará na proporção do "Fator Multiplicador" e o valor unitário diminuirá também na mesma proporção. Antes de acionar o botão "Salvar", efetivando a entrada da Nota Fiscal, o usuário deverá certificar-se que a "Quantidade Final" que está dando entrada corresponde efetivamente ao que foi conferido fisicamente no ato do recebimento. No caso do material permanente, foi orientado na ocasião do cadastro que o fator multiplicador sempre será igual a "1", uma vez que a distribuição desses itens não é fracionada.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">À medida que forem registrados os recebimentos, o SIGA/SGBM procederá com o somatório dos valores que deverá "bater" com o valor da Nota Fiscal informado no "campo anterior - 06", de forma a consistir a entrada de dados.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Acione o botão "Salvar" para efetivar o registro da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">Caso o material constante na Ordem de Compra não esteja cadastrado no SIGA/SGBM como item de catálogo, na coluna "Ação" da grade "Itens Selecionados" da Ordem de Compra, aparecerá o ícone indicando que o material não está cadastrado, basta clicar nesse ícone para efetuar o cadastramento sem perder o foco do registro da Ordem de Compra.</li>
                            <br>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura119.png" data-bs-toggle="modal" data-bs-target="#Imagem119">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura119.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 119 - MODAL -->
                            <div class="modal fade text-center" id="Imagem119" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura119.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 119</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 119 - End --><br>
                        </ol><br>

                        <p>Apesar dos exemplos demonstrados se tratarem de material de consumo, o mesmo procedimento será seguido para o material permanente. </p><br>

                        <ol class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">20 - Ao acionar o botão "Salvar", o SIGA/SGBM apresentará uma janela "pop-up" com uma mensagem de confirmação da operação. Acionando o botão "Ok", efetiva a operação, mas clicando no botão "Cancelar", não efetivará o registro.</li>
                        </ol><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura120.png" data-bs-toggle="modal" data-bs-target="#Imagem120">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura120.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 120 - MODAL -->
                        <div class="modal fade text-center" id="Imagem120" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura120.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 120</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 120 - End --><br>

                        <br>
                        <h4 style="color: #FFA73E;">B) Recebimento de Ordens de Compra do Licitaweb</h4>
                        <hr>

                        <p>Para efetuar o registro por intermédio de Ordem de Compra na modalidade do Licitaweb, o "Perfil Almoxarife" deve executar na barra de menu o comando: <strong>"Movimentos, Almoxarifado, Entrada, Por Ordem de Compra, Cotação"</strong>.</p><br>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura2121png" data-bs-toggle="modal" data-bs-target="#Imagem121">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura121.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 121 - MODAL -->
                        <div class="modal fade text-center" id="Imagem121" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura121.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 121</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 121- End --><br>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Número da Ordem de Compra", informe o número da Ordem de Compra por "Cotação de Compra Eletrônica" emitida na modalidade de compra .</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acione o botão "Pesquisar".</li>

                            <br><br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura122.png" data-bs-toggle="modal" data-bs-target="#Imagem122">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura122.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 122 - MODAL -->
                            <div class="modal fade text-center" id="Imagem122" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura122.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 122</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 122 - End --><br>


                            <p>Ao acionar o botão "Pesquisar", o SIGA/SGBM efetuará a integração com o Sistema de Cotação Eletrônica, e a partir dessa interação apresentará a tela de registro da Nota Fiscal originada por meio da Ordem de Compra, já identificando o fornecedor na respectiva tela, ocasião em que deverá ser informado o seguinte:</p><br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Vlr. Total da Nota Fiscal", informe o valor total da Nota Fiscal, essa informação servirá de fechamento com os valores dos itens da Nota somados individualmente a partir do seu registro no sistema.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Núm. Nota Fiscal", informe o número da Nota Fiscal emitida pelo fornecedor a partir da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Núm. Nota Empenho", informe o número da Nota de Empenho que autorizou a emissão da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Núm. de Série", informe a série da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">No campo "Data Emissão", informe o dia, mês e ano de emissão da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">No campo "Data Entrada", informe o dia, mês e ano em que a Nota Fiscal está sendo registrada no sistema SIGA/SGBM.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Observação", informe qualquer informação que se faça necessário com relação ao processo de recebimento ou registro da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.6s">Quando, na coluna "Ações", surgir um ícone em formato de "Lápis", significa que o item de material ainda não está cadastrado no SIGA/SGBM. O registro só poderá prosseguir se o item for cadastrado. Para cadastrar o item de material em questão, basta clicar sobre o ícone.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura123.png" data-bs-toggle="modal" data-bs-target="#Imagem123">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura123.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 123 - MODAL -->
                            <div class="modal fade text-center" id="Imagem123" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura123.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 123</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 123 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">O SIGA/SGBM pesquisará do catálogo de bens materiais e serviços a classificação do material já definida.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Fator Multiplicador", informe a quantidade que deverá ser fracionada na "Unidade de Fornecimento". No exemplo abaixo, o material é adquirido em fardo e será entregue também em fardo, então não haverá necessidade de fracionamento, e o valor do "Fator Multiplicador" será igual a 1.</li>

                            <br><!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Uma vez cadastrada essa informação, toda vez que for registrada uma entrada de estoque, na unidade de fornecimento "Fardo", o almoxarife deverá atentar que a quantidade, em termos nominais, se manterá a mesma, assim como o valor do fardo. Ou seja, a quantidade nominal será multiplicada por 1, e o valor do fardo por 1. Dessa forma, a Unidade de Fornecimento será igual a Unidade de Consumo. Uma vez registrado o "Fator Multiplicador" do item, este só poderá ser alterado se ainda não tiver movimentação ou se o seu saldo estiver Zero.</p>
                                </div>
                            </div>

                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Unidade de Consumo", informe a unidade na qual o item de material vai ser entregue ao requisitante.  No exemplo abaixo, o material será entregue em fardo na mesma unidade que foi adquirido. </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Limite Mínimo", informe a quantidade em estoque, no qual deverá ser efetuado o pedido de ressuprimento, de forma que ao atingir esse limite o SIGA/SGBM avise ao almoxarife que o estoque deve ser reposto mediante pedido.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">No campo "Limite Máximo", informe a quantidade máxima que poderá ser estocada do item.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">No campo "Localização", informe a sequência de endereçamento do armazém onde o material está localizado.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">Informados todos os campos identificados como obrigatórios(*), acione o botão "Salvar".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura124.png" data-bs-toggle="modal" data-bs-target="#Imagem124">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura124.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 124 - MODAL -->
                            <div class="modal fade text-center" id="Imagem124" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura124.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 124</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 124 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Salvar", o SIGA/SGBM apresentará uma mensagem de sucesso da operação e retornará a tela de registro, no entanto sem demonstrar mais o ícone de indicação de itens não cadastrados.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura125.png" data-bs-toggle="modal" data-bs-target="#Imagem125">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura125.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 125 - MODAL -->
                            <div class="modal fade text-center" id="Imagem125" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura125.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 125</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 125 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na grade dos itens selecionados, clique no quadrinho correspondente ao item em que será registrada a quantidade a receber da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Qtde. a Receber", informe a quantidade efetivamente recebida da Ordem de Compra, sempre observando o campo "Qtde. total da O.C.".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Nos campos "Qtd. Final" e "Valor Unitário Final" é apresentado na cor vermelha a quantidade e valor unitário do item convertido a partir da aplicação do "Fator Multiplicador". Tais valores serão apresentados com 4 casas decimais e poderão ser diferentes dos valores informados nos casos em que a "Unidade de Fornecimento" for diferente da "Unidade de Consumo". Uma vez confirmada a ação de entrada da Ordem de Compra, os valores convertidos serão os que efetivamente entrarão no estoque.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Acione o botão "Próximo" para prosseguir com o registro da Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura126.png" data-bs-toggle="modal" data-bs-target="#Imagem126">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura126.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 126 - MODAL -->
                            <div class="modal fade text-center" id="Imagem126" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura126.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 126</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 126 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o botão "Próximo", o SIGA/SGBM apresentará uma mensagem solicitando a conferência da Ordem de Compra em questão.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acione o botão "Confirmar" para salvar a Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura127.png" data-bs-toggle="modal" data-bs-target="#Imagem127">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura127.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 127 - MODAL -->
                            <div class="modal fade text-center" id="Imagem127" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura127.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 127</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 127 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionando o botão "Confirmar", o SIGA/SGBM solicitará a confirmação para salvar definitivamente a Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura128.png" data-bs-toggle="modal" data-bs-target="#Imagem128">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura128.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 128 - MODAL -->
                            <div class="modal fade text-center" id="Imagem128" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura128.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 128</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 128 - End --><br>

                        </ol>

                        <!-- Sub Título --> 
                        <p class="SubTitulo" id="T3two"> Recebimento por Nota Fiscal </p>
                            <hr>

                            <br>

                            <p>O recebimento por Nota Fiscal somente deve ser utilizado na impossibilidade do recebimento por Ordem de Compra, vale ressaltar que uma vez registrado por intermédio de Nota Fiscal um recebimento originário de Ordem Compra, a atualização do saldo da Ordem de Compra ficará comprometido impossibilitando o acompanhamento do atendimento da respectiva compra.
                            <br><br>Para efetuar o registro por intermédio de Nota Fiscal, o "Perfil Almoxarife" deve executar, na barra de menu, o comando: ,<strong>MOVIMENTOS >> ALMOXARIFADO >> ENTRADA >> POR NOTA FISCAL</strong></p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura129.png" data-bs-toggle="modal" data-bs-target="#Imagem129">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura129.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 129 - MODAL -->
                            <div class="modal fade text-center" id="Imagem129" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura129.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 129</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 129 - End --><br>

                            <p>Ao executar o comando na barra de menu o SIGA/SGBM apresentará a tela de "Entrada por Nota Fiscal", para preenchimento dos seguintes campos:</p><br>

                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "CNPJ Fornecedor", deve ser digitado o número do CNPJ do Fornecedor constante na Nota Fiscal.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Acione o botão "Pesquisar" e o SIGA/SGBM procurará, no CRC - Certificado de Registro Cadastral, o respectivo fornecedor proprietário do CNPJ informado, de forma que será possível dar entrada de materiais em estoque de fornecedores que estejam previamente cadastrados no CRC.</li>

                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura130.png" data-bs-toggle="modal" data-bs-target="#Imagem130">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura130.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 130 - MODAL -->
                                <div class="modal fade text-center" id="Imagem130" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura130.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 130</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 130 - End -->
                                <br>

                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar", o SIGA/SGBM apresentará a "Razão Social do Fornecedor" originária do CRC, e o botão "Alterar" possibilitará substituir o CNPJ para efetuar a pesquisa de outro CNPJ.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Nota Fiscal", informe o número da Nota Fiscal que está sendo registrada.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Número de Série", informe a série da Nota Fiscal.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Valor Total", informe o valor total da Nota. Essa informação ficará como parâmetro de consistência do registro da Nota Fiscal; a cada item registrado da Nota, o SIGA/SGBM efetuará o somatório e confrontará com o total informado da Nota. O SIGA/SGBM só finaliza o registro se o somatório dos valores dos itens for igual ao total informado da Nota.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">No campo "Data Emissão", informe a data de emissão da Nota Fiscal.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.9s">No campo "Nota de Empenho", informe o número do empenho que gerou a respectiva Nota Fiscal.</li>
                                <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Data Entrada", informe a data de entrada que deverá ser maior que a data de emissão da Nota.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="2.6s">No campo "Observação", registre informações que considere importante, por exemplo quem conferiu e atestou o recebimento da Nota.</li>

                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura131.png" data-bs-toggle="modal" data-bs-target="#Imagem131">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura131.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 131 - MODAL -->
                                <div class="modal fade text-center" id="Imagem131" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura131.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 131</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 131 - End -->
                                <br>


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Selecione a forma de pesquisa do item constante na Nota Fiscal no SIGA/SGBM, se a pesquisa será efetuada por "código" ou por "palavra-chave".</li>

                                <br>
                                <!-- Fique Atento -->
                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <p class="FiqueAtentoTexto"> É recomendável que a pesquisa seja efetuada por "código" e que o código seja previamente pesquisado no "Catálogo de Bens Materiais e Serviços" do Governo do Estado do Ceará. </p>
                                </div>
                                <br>


                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Na caixa de texto, logo após o item de seleção (código ou palavra-chave), preencha com o número do código ou com a palavra-chave que direciona a pesquisa do SIGA/SGBM.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Para efetuar a pesquisa clique no botão "Pesquisar". 
                                <br>Vale ressaltar que a pesquisa está direcionada para os itens já cadastrados no SIGA/SGBM. Poderá haver casos do item constar no Catálogo, mas não ter sido ainda cadastrado no SIGA/SGBM, nesse caso o cadastro poderá ser feito antes da inclusão do item na Nota, por intermédio do comando: MANUTENÇÃO>>ALMOXARIFADO>>MATERIAL>>CONSULTA/CADASTRO, executado na barra de menu.</li>

                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura132.png" data-bs-toggle="modal" data-bs-target="#Imagem132">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura132.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 132 - MODAL -->
                                <div class="modal fade text-center" id="Imagem132" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura132.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 132</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 132 - End -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar", o SIGA/SGBM apresentará a tela de seleção de produto, trazendo o item resultante da pesquisa em uma grade, constando o "Código", "Descrição", "Tipo Material", "Fator Multiplicador", "Qtde. Estoque" e "Unidade de Consumo". Clique no quadrinho na frente do campo "Código", selecionando o item que dará entrada pela Nota Fiscal.</li>

                                <br>
                                <!-- Fique Atento -->
                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <p class="FiqueAtentoTexto"> É importante analisar os referidos dados, identificando a existência de "Fator Multiplicador" maior que "1". Nesses casos, é importante certificar que a quantidade a ser registrada refere-se à mesma quantidade conferida fisicamente, tal medida visa evitar erros de registro. É comum ocorrer situações em que a quantidade especificada na Nota Fiscal refere-se à unidades, e no cadastro do item no sistema consta a "Unidade de Fornecimento", especificada em "Caixa", "Fardo" ou outra unidade de conjunto, cujo "Fator Multiplicador" é maior que "1". </p>
                                </div>
                                <br>

                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Quantidade", informe a quantidade do item constante na Nota Fiscal, utilizando 4 casas decimais.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Valor", informe o valor unitário do item constante na Nota Fiscal.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Adicionar" para incluir o item no registro de entrada da Nota Fiscal.</li>

                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura133.png" data-bs-toggle="modal" data-bs-target="#Imagem133">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura133.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                
                                <!-- Imagem 133 - MODAL -->
                                <div class="modal fade text-center" id="Imagem133" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura133.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 133</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 133 - End -->
                                <br>


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Adicionar", na tela anterior, o SIGA/SGBM apresentará uma grade contendo as seguintes informações: "Código", "Material", "Unidade de Fornecimento", "Unidade de Consumo", "Qtde. Entrada", "Valor Entrada", "Fator Multiplicador", "Quantidade Final", "Valor Unitário Final", "Valor Total" e "Ação".</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Por intermédio dos campos de seleção (especificados nos itens anteriores - 11 a 13), poderão ser acrescidos mais itens na Nota Fiscal em questão.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Nos campos "Quantidade Final", "Valor Unitário Final" e "Valor Total", é  apresentado na cor vermelha a quantidade e valor unitário do item convertido a partir da aplicação do "Fator Multiplicador". Tais valores serão diferentes dos valores informados quando a "Unidade de Fornecimento" for diferente da "Unidade de Consumo", por exemplo: Unidade de Fornecimento = Caixa com 10 unidades, Unidade de Consumo = Unidade, nesse caso a Quantidade será multiplicada por 10 e o Valor Unitário dividido por 10, resultado da conversão da Caixa em Unidades. Uma vez confirmada a ação de entrada da Nota, os valores convertidos serão os que efetivamente entrarão no estoque.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Na coluna "Ação", clique no item em formato de "Lápis", caso seja necessário editar  novamente os dados de "Quantidade" ou "Preço Unitário" .</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Clicando no ícone em formato de "X" fará a exclusão da operação de registro da Nota.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.9s">À medida que são registrados itens na grade, é acrescido o Valor Total que será confrontado internamente pelo sistema com o "Total de Nota" informado no campo anterior ( 06).</li>
                                <li class="wow fadeInLeft" data-wow-delay="2.3s">Acione o botão "Salvar" para gravar a Nota Fiscal, mesmo que o registro não esteja definitivamente concluído, podendo ainda ser novamente editada.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura134.png" data-bs-toggle="modal" data-bs-target="#Imagem134">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura134.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 134 - MODAL -->
                                <div class="modal fade text-center" id="Imagem134" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura134.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 134</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 134 - End --><br>


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Salvar", o SIGA/SGBM apresentará uma mensagem de gravação da Nota Fiscal, que deverá ser "finalizada" por intermédio de procedimento específico a partir da consulta de Nota Fiscal. A Nota Fiscal somente será registrada como entrada no controle de estoque após ser "Finalizada", para salvar a Nota Fiscal, acione o botão "OK".</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura135.png" data-bs-toggle="modal" data-bs-target="#Imagem135">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura135.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 135 - MODAL -->
                                <div class="modal fade text-center" id="Imagem135" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura135.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 135</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 135 - End --><br>


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "OK", o SIGA/SGBM apresentará um resumo do registro, disponibilizando botões para "Editar" ou "Excluir" a Nota em questão, como também registrar uma nova Nota Fiscal.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura136.png" data-bs-toggle="modal" data-bs-target="#Imagem136">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura136.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 136 - MODAL -->
                                <div class="modal fade text-center" id="Imagem136" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura136.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 136</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 136 - End -->  
                            </ol>
                            
                            <!-- Sub Título -->
                            <p class="SubTitulo" id="T3three"> Consulta de Notas Fiscais Salvas </p>
                            <hr>

                            <br>

                            <p>Como vimos no procedimento anterior (3.2), o SIGA/SGBM permite que o registro da Nota Fiscal, mesmo que não terminado, possa ser salvo para edição posterior. Isso será muito útil quando nos depararmos com situações em que as Notas Fiscais são extensas, para garantir que os registros até então realizados não sejam perdidos na eventualidade de uma queda de energia, um problema de conexão, ou outra situação que obrigue a interrupção do registro. Para isso, basta salvar a Nota à medida que se avança no processo de registro. Para consultar uma Nota Fiscal Salva, o "Perfil Almoxarife" deve acionar, na barra de menu, o comando: <strong>CONSULTAS>>ALMOXARIFADO>>ENTRADAS:</strong></p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura137.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura137.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 137 - MODAL -->
                            <div class="modal fade text-center" id="Imagem137" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura137.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 137</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 137 - End --><br>
                            <p>Acionado o comando, na barra de menu, o SIGA/SGBM apresenta a tela de consulta de Notas Fiscais Salvas com alguns filtros para localizar no banco de dados a referida Nota, são estes:</p> <br>                            

                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Período de Movimentação", informe as datas inicial e final, delimitando o período e retroagindo 30 dias da data de formulação da consulta.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Status da Nota", clique na seta ao lado do campo e selecione a condição "Salva Parcialmente".</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Nota Fiscal", informe o número da Nota Fiscal que deseja consultar.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Número de Série", informe a série da Nota Fiscal que deseja consultar.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Acione o botão "Pesquisar" para trazer a Nota Fiscal em questão.

                                    <br><br><!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura138.png" data-bs-toggle="modal" data-bs-target="#Imagem138">
                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura138.png" alt="Alt da imagem fica aqui">
                                        </a>
                                    </div>

                                    <!-- Imagem 138 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem138" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura138.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Figura 138</strong> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 138 - End --><br>

                                </li><br>
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o botão "Pesquisar", o SIGA/SGBM demonstrará uma "grade" contendo as seguintes informações da(s) Nota(s) Fiscal(is): Data de Emissão da Nota Fiscal, Fornecedor, Número Nota Fiscal, Série da Nota e  Ação (onde serão demonstrados ícones que acionados executarão  funcionalidades).</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Ao acionar o ícone em formato de "Lupa", poderão ser acessados os dados da Nota Fiscal.</li>
                                <li>Ao acionar o ícone em formato de "Lápis", poderão ser acessados os dados da Nota Fiscal, inclusive efetuar o registro da nota acionando o botão "Finalizar".</li>
                                <li>Ao acionar o ícone em formato de "X", poderá ser excluído o registro da Nota no Sistema SIGA/SGBM.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura139_.png" data-bs-toggle="modal" data-bs-target="#Imagem139.1">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura139_.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 139 - MODAL -->
                                <div class="modal fade text-center" id="Imagem139.1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura139_.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 139</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 139 - End --><br>
                                
                                <p class="wow fadeInLeft" data-wow-delay="0.9s">7.1. - Na grade "Itens Selecionados para Entrada" (apresentada ao acionar o ícone em formato de "Lupa"), será demonstrado o detalhe da Nota Fiscal, podendo a partir de botões específicos: <strong>Editar, Excluir ou Registrar uma Nova Nota Fiscal.</strong></p>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura139.png" data-bs-toggle="modal" data-bs-target="#Imagem139">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura139.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 139 - MODAL -->
                                <div class="modal fade text-center" id="Imagem139" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura139.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 139</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 139 - End --><br>
                                
                                <p class="wow fadeInLeft" data-wow-delay="0.6s"> 08.1 - Na tela apresentada, ao acionar o ícone em formato de "Lápis" pode-se "Editar a Nota Fiscal''.</p>
                                <p class="wow fadeInLeft" data-wow-delay="0.9s"> 08.2 - Na tela apresentada, ao acionar o ícone em formato de "X" pode-se "Excluir a Nota Fiscal''.</p>
                                <p class="wow fadeInLeft" data-wow-delay="1.3s"> 08.3 - Ao clicar no botão "Salvar" grava-se as alterações efetuadas na Nota Fiscal e clicando no botão "Finalizar" efetiva-se o registro da Nota no Controle de Estoque.</p>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura140.png" data-bs-toggle="modal" data-bs-target="#Imagem140">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura140.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 140 - MODAL -->
                                <div class="modal fade text-center" id="Imagem140" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura140.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 140</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 140 - End --><br>                           

                                
                                <p class="wow fadeInLeft" data-wow-delay="0.6s">9.1 - Ao ser comandada a operação na Nota Fiscal salva e não finalizada (item 8.1 e 8.2 anteriores) o SIGA/SGBM apresentará uma mensagem de confirmação da operação.</p>
                                
                                
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura142.png" data-bs-toggle="modal" data-bs-target="#Imagem142">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura142.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 142 - MODAL -->
                                <div class="modal fade text-center" id="Imagem142" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura142.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 142</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 142- End -->
                                <br>
                                

                            </ol>

                            <!-- Sub Título -->
                            <p class="SubTitulo" id="T3four"> Conferência das Entradas </p>
                            <hr>

                                <p>Sempre que for efetuado um registro de entrada no SIGA/SGBM, deve ser conferido se os detalhes do respectivo registro correspondem ao documento que originou a entrada, geralmente uma Nota Fiscal. Para efetuar essa conferência, é utilizado o relatório Entrada do Período, cuja emissão se dará por intermédio do seguinte comando na barra de menu: <strong>RELATÓRIOS >> ALMOXARIFADO >> ENTRADA PERÍODO:</strong></p>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura143.png" data-bs-toggle="modal" data-bs-target="#Imagem143">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura143.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 143 - MODAL -->
                                <div class="modal fade text-center" id="Imagem143" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura143.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 143</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 143 - End --><br>

                                <p>Ao acionar o comando na barra de menu o SIGA/SGBM apresentará a tela com os parâme tros para filtrar os dados que será  apresentado no relatório Entradas do Período, os parâmetros são os seguintes:</p>

                                <ol>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Período de Movimentação" informar a Data Inicial e a Data Final que delimita o período em que foi registrada a entrada.</li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Tipo de Entrada" selecionar qual a modalidade de entrada que será "Nota Fiscal" as demais poderão ser:</li>

                                    <br><ol class="none">
                                        <li class=" wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Devolução:</strong> Quando se tratar de entrada de material que não foi consumido pelo requisitante e está sendo devolvido ao almoxarifado.</li>
                                        <br><li class=" wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Doação:</strong> Quando se tratar de doações não acompanhadas de Nota Fiscal ou Transferências de outros órgãos da administração párlica, nesses casos o documento de suporte áro Termo de Doação ou Transferência.</li>
                                        <br><li class=" wow fadeInRight" data-wow-delay="01.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Todas:</strong> Nesse caso o relatório classificarão  todas as modalidades de movimentação de entrada.</li>
                                    </ol>

                                    <br><!-- Fique Atento -->
                                    <div class="FiqueAtentoCaixa">
                                        <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                        <p class="FiqueAtentoTexto"> Dependendo da opção selecionada serão habilitados campos complementares solicitando informações acerca opção escolhida.</p>
                                    </div><br>


                                    <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Tipo de Material" selecionar a opção considerando se a entrada refere-se ao material de consumo ou material permanente.</li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Nota Fiscal" informar o número da Nota Fiscal que se deseja gerar o relatório.</li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Número de Série" informar a série da Nota Fiscal.</li>
                                    <li class="wow fadeInLeft" data-wow-delay="1.3s">Acionar o botão "Gerar Relatório" e o SIGA/SGBM apresentará o relatório em formato PDF.</li>
                                </ol>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura144.png" data-bs-toggle="modal" data-bs-target="#Imagem144">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura144.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 144 - MODAL -->
                                <div class="modal fade text-center" id="Imagem144" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura144.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 144</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 144 - End --><br>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura145.png" data-bs-toggle="modal" data-bs-target="#Imagem145">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura145.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 145 - MODAL -->
                                <div class="modal fade text-center" id="Imagem145" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura145.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 145</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 145 - End --><br>

                                <!-- Fique Atento -->
                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <p class="FiqueAtentoTexto"> O relatório gerado deverá ser conferido com o documento de origem.</p>
                                </div>

                                <!-- Sub Título -->
                        <p class="SubTitulo" id="T3five"> Solicitação de Cancelamento de Nota Fiscal </p>
                        <hr>

                        <br>

                        <p>Ao identificar, na ocasião de conferência das entradas (item anterior 3.4), um registro incorreto de uma determinada Nota Fiscal, o almoxarife poderá solicitar o seu cancelamento por intermédio do seguinte comando na barra de menu do SIGA/SGBM: <strong>MOVIMENTOS >> ALMOXARIFADO >> ENTRADA >> AUTORIZAÇÃO DE CANCELAMENTO:</strong></p>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura146.png" data-bs-toggle="modal" data-bs-target="#Imagem146">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura146.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 146 - MODAL -->
                        <div class="modal fade text-center" id="Imagem146" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura146.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 146</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 146 - End -->

                        <br><br><!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Vale ressaltar, que para efetuar um cancelamento de Nota Fiscal, o SIGA/SGBM estabelece algumas condicionantes: </p>

                                <ul class="none">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorAmareloEstadoEscuro"></i> A nota fiscal em questão ter sido registrada no período corrente. </li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorAmareloEstadoEscuro"></i> Não ter havido nenhum atendimento de REQUISIÇÃO dos itens constantes na Nota Fiscal. </li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorAmareloEstadoEscuro"></i> pár solicitado o cancelamento, o SIGA bloqueará as Requisiáres dos itens que constam na Nota e as Requisiáres não atendidas, atáro momento, somente poderão ser atendidas com quantidade Zero. </li>
                                    <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorAmareloEstadoEscuro"></i> Enquanto não for autorizado o Cancelamento, o Fechamento Mensal será bloqueado. A autorização será dada pelo "perfil Gestor Financeiro".</li>
                                </ul>
                            </div>
                        </div><br>

                        <br>
                        <p>Ao acionar o comando na barra de menu o SIGA/SGBM apresentará a tela "Consulta Entradas" para que seja localizada a Nota Fiscal que será objeto de cancelamento nessa tela serão informados os parâmetros a seguir:</p>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Período de Movimentação", informe as datas inicial e final, delimitando o período de entrada da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Status da Nota", clique na seta ao lado do campo e selecione a condição "Finalizada".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Nota Fiscal", informe o número da Nota Fiscal que deseja consultar.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Número de Série", informe a série da Nota Fiscal que deseja consultar.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Acione o botão "Pesquisar" para trazer a Nota Fiscal em questão.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura147.png" data-bs-toggle="modal" data-bs-target="#Imagem147">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura147.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 147- MODAL -->
                            <div class="modal fade text-center" id="Imagem147" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura147.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 147</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 147 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o botão "Pesquisar", o SIGA/SGBM apresentará uma "grade" contendo os seguintes dados das Notas Fiscais, filtradas a partir dos parâmetros informados: Data da Nota Fiscal, Fornecedor, Número da Nota Fiscal, Série da Nota Fiscal, Status da Nota Fiscal e Ação.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">A partir dos dados apresentados da "grade" poderá ser selecionado o ícone em formato de "Seta de Retorno", para que seja solicitado o cancelamento.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura148.png" data-bs-toggle="modal" data-bs-target="#Imagem148">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura148.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 148 - MODAL -->
                            <div class="modal fade text-center" id="Imagem148" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura148.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 148</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 148 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o ícone em formato de "Seta de Retorno", o SIGA/SGBM apresentará uma janela "pop-up", onde será informada a justificativa de pedido de cancelamento da Nota.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionar o botão "OK" para solicitar o cancelamento.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura149.png" data-bs-toggle="modal" data-bs-target="#Imagem149">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura149.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 149 - MODAL -->
                            <div class="modal fade text-center" id="Imagem149 tabindex=" -1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura149.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 149</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 149 - End --><br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao confirmar o cancelamento, acionando o botão "Ok", o SIGA/SGBM apresentará a janela de consulta da Nota com Status "CANCELAMENTO PENDENTE", uma vez que a solicitação será direcionada para a aprovação do perfil "Gestor Financeiro", somente após a aprovação a Nota estará efetivamente cancelada.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura150.png" data-bs-toggle="modal" data-bs-target="#Imagem150">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura150.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 150 - MODAL -->
                            <div class="modal fade text-center" id="Imagem150" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura150.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 150</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 150 - End --><br>

                        </ol>

                        <!-- Sub Título -->
                        <p class="SubTitulo" id="T3six"> Autorização de Cancelamento de Nota Fiscal </p>
                            <hr>

                            <br>

                            <p>As Notas Fiscais de entrada para serem canceladas pelo SIGA/SGBM necessitam ser autorizadas pelo perfil "Gestor Financeiro", que para efetuar a operação deve acionar, na barra de menu do SIGA/SGBM, o comando: <strong>MOVIMENTOS >> ALMOXARIFADO >> ENTRADA >> AUTORIZAÇÃO DE CANCELAMENTO:</strong></p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura151.png" data-bs-toggle="modal" data-bs-target="#Imagem151">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura151.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 151 - MODAL -->
                            <div class="modal fade text-center" id="Imagem151" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura151.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 151</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 151 - End --><br>

                            

                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o comando, na barra de menu, o SIGA/SGBM apresentará uma grade com as "Entradas Encontradas no Período", demonstrando as seguintes informações referentes ao cancelamento da Nota Fiscal de entrada: Fornecedor Emitente da Nota Fiscal, Número da Nota Fiscal, Data da Solicitação de Cancelamento, Almoxarife que registrou a entrada na Nota Fiscal, Almoxarife que solicitou o cancelamento e a Justificativa para o cancelamento da Nota. Após analisar as informações e averiguar com o almoxarife solicitante, o cancelamento poderá aprovar ou não o cancelamento. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Acione o ícone em formato de "Lupa" para consultar o conteúdo da Nota Fiscal. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o ícone em formato de "Check" para aprovar o cancelamento. </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Para reprovar o cancelamento, clique no ícone vermelho em formato de "X".</li>
                                
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura152.png" data-bs-toggle="modal" data-bs-target="#Imagem152">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura152.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 152 - MODAL -->
                                <div class="modal fade text-center" id="Imagem152" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura152.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 152</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 152 - End --><br>
                                


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o ícone de aprovação o SIGA/SGBM apresentará uma janela de confirmação da operação e para confirmar basta acionar o botão <strong>"OK"</strong>.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura153.png" data-bs-toggle="modal" data-bs-target="#Imagem153">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura153.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 153 - MODAL -->
                                <div class="modal fade text-center" id="Imagem153" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura153.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 153</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 153 - End -->      
                            </ol>                  

                                
                            <!-- Sub Título -->
                            <p class="SubTitulo" id="T3seven"> Cadastramento de Item de Material Permanente </p>
                            <hr>

                            <br>

                            <p>Quando for necessário o cadastramento dos itens de material permanente, este deverá ser efetuado pelo perfil "Almoxarife", utilizando o comando: <strong>MANUTENÇÃO >> ALMOXARIFADO >> MATERIAL >> CADASTRO:</strong></p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura154.png" data-bs-toggle="modal" data-bs-target="#Imagem154">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura154.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 154 - MODAL -->
                            <div class="modal fade text-center" id="Imagem154" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura154.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 154</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 154 - End --><br>

                            <p>Ao acionar o referido comando o SIGA/SGBM apresentará os campos de pesquisa no "Catálogo", a pesquisa poderá ser efetuada por "Código" ou por "Descrição", vejamos a pesquisa por descrição:</p>

                            

                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Descrição" preencher com uma palavra chave que individualize o material permanente que se deseja pesquisar. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Grupo" selecionar o agrupamento do "Catálogo de Materiais, Bens e Serviços" em que o bem em questão supostamente esteja inserido. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Classe" selecionar a classe do "Catálogo de Materiais, Bens e Serviços" em que o bem em questão supostamente esteja classificado. </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Tipo de Material" selecionar o tipo de material como "PATRIMÔNIO" uma vez que trata-se de material permanente.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionar o botão "Pesquisar".</li>
                                
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura155.png" data-bs-toggle="modal" data-bs-target="#Imagem155">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura155.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 155 - MODAL -->
                                <div class="modal fade text-center" id="Imagem155" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura155.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 155</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 155 - End --><br>
                                


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresenta uma grade com as informações referentes aos materiais encontrados tais como: Código, Descrição, Tipo de Material, Unidade de Fornecimento e Ações. Na coluna ações clicar no ícone em formato de "Lapís" na linha correspondente ao material que se deseja cadastrar.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura156.png" data-bs-toggle="modal" data-bs-target="#Imagem156">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura156.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 156 - MODAL -->
                                <div class="modal fade text-center" id="Imagem156" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura156.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 156</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 156 - End -->   <br>   
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o ícone em formato de "Lapis" o SIGA/SGBM apresenta a tela de cadastro de material, trazendo do Catálogo de Bens Materiais e Serviços a classificação do material como permanente assim como o "Valor Residual", "Taxa de Depreciação" e a "Vida Útil" em anos.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Fator Multiplicador" informar sempre "1" uma vez que material permanente são é entregue fracionado.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo “Valor Médio Inicial” informar o valor inicial para efeito de valoração do item. Esse campo será útil para os casos de ajuste de valor por ocasião de correções no inventário de estoque. Ao salvar o cadastro este valor se repetirá como valor unitário.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Código Atual" deixar como valor nulo. Este campo somente será preenchido quando se tratar de processo de migração de um sistema para outro quando o código atual será a codificação do item no sistema de onde os dados estão sendo migrados.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionar o botão "Salvar" para cadastrar definitivamente o produto.</li>
                            </ol>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura157.png" data-bs-toggle="modal" data-bs-target="#Imagem157">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura157.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 157 - MODAL -->
                            <div class="modal fade text-center" id="Imagem157" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura157.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 157</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 157 - End --><br>

                            <!-- Sub Título -->
                            <p class="SubTitulo" id="T3eight"> Cadastramento de Item de Material de Consumo</p>
                            <hr>
                            <p>Quando for necessário o cadastramento dos itens de material de consumo, este deverá ser efetuado pelo perfil "Almoxarife", utilizando o comando: <strong>MANUTENÇÃO >> ALMOXARIFADO >> MATERIAL >> CADASTRO:</strong> </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura158.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura158.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>  </strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura158.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>  </strong></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End --> 
                            <br>
                            <ol type="1">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Para cadastrar o item de material de consumo preencher no campo "Código" o número que identifica o item no Catálogo de Bens Materiais e Serviços, para o acesso individualizado do item. Caso não conheça o “código” a pesquisa poderá ser feita de forma alfabética no campo “Descrição” ou utilizando os filtros dos campos “Grupo”, “Classe” e “Tipo de Material”.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Em seguida acionar o botão "Pesquisar".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura159.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                    <img class="img-fluid wow fadeInRight" src="imagens/Figura159.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>  </strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura159.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong> Fonte 159</strong></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s">Acionar o ícone em formato de lápis no campo "Ação" para proceder ao cadastramento do item.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura160.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura160.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>  </strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura160.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong> Fonte 160</strong></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br>
                            <p class="wow fadeInLeft">Na tela Cadastro de Material deverão ser informados os seguintes campos:</p>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Fator Multiplicador" informar a quantidade que deverá ser fracionada a "Unidade de Fornecimento". No exemplo abaixo o material é adquirido em caixa de 100 unidades, mas será entregue ao requisitante em unidades, então 1 caixa será fracionada em 100 unidades.</li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Uma vez cadastrada essa informação, toda vez que for registrada uma entrada de estoque na unidade de fornecimento "Caixa -100 unidades" o almoxarife deverá atentar que a quantidade, em termos nominais, aumentará e o valor da unidade diminuirá considerando o fator multiplicador. Ou seja, a quantidade nominal será multiplicada por 100 unidades e o valor da caixa dividido por 100. Dessa forma a Caixa será transformada em Unidade. Uma vez registrado o "Fator Multiplicador" do item este só poderá ser alterado se o item ainda não tiver sido movimentado ou se o seu saldo estiver Zero.</p>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">No campo "Valor Médio Inicial", informe quanto custa em moeda a unidade do item. No exemplo abaixo, será o valor da "Caixa" dividido por 100 (doze). Este campo somente será editado quando da implantação do item ou quando o item estiver com saldo Zero, por isso o adjetivo "inicial". Enquanto o item tiver saldo em movimentação, o valor unitário do item será calculado pela média, ou seja, o valor do estoque mais o valor das entradas dividido pelo saldo em quantidade existente após registrada a entrada.</li>                            
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Unidade de consumo", informe a unidade na qual o item de material vai ser entregue ao requisitante.  No exemplo abaixo, o material será entregue em Unidade, mesmo sendo adquirido em Caixa. Quando a unidade de entrega for igual a unidade de fornecimento, deverá ser informado como "Unidade de Consumo", também "Caixa".</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Limite Mínimo" informar a quantidade em estoque na qual deverá ser efetuado o pedido de ressuprimento, de forma ao atingir esse limite o Siga/Sgbm avise ao almoxarife que o estoque deve ser reposto mediante pedido. </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Limite Máximo" informar a quantidade máxima que poderá ser estocada do item. </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Localização" informar a sequência de endereçamento do armazém onde o material está localizado. Exemplo: Área 01, Rua 02, Corredor 04, Estante 03, Prateleira(nível) 03, a informação de localização é opcional pois só se aplica quando o armazém está configurado para sistema de endereçamento tipo fixo. </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">Informado todos os campos identificados como obrigatórios (*), acionar o botão "Salvar". <br>
                            <!-- Titulo Figura --> <br>
                            <div class="text-center">
                                <a href="imagens/Figura161.1.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura161.1.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong> </strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura161.1.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte 161.1 </strong></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br>
                            </li>

                            </ol>


                            <!-- Sub Título -->
                            <p class="SubTitulo" id="T3nine"> Alterar Classificação de Item de Material </p>
                            <hr>

                            <br>

                            <p>A classificação original dos itens poderá ser alterada pelo Perfil "Gestor Financeiro", no caso do uso do item na operação do seu órgão/entidade necessite de uma classificação oposta a classificação trazida do Catálogo de Bens Materiais e Serviços. O usuário possuidor desse perfil deve observar a Portaria da Secretaria do Tesouro Nacional nº 448 de 13 de setembro de 2002, na qual está baseada a classificação original, a partir da sua interpretação efetuará os seguintes procedimentos:
                            <br><br>Acionar na barra de menu do SIGA/SGBM o comando <strong>MANUTENÇÃO >> ALMOXARIFADO >> MATERIAL >> CADASTRO:</strong></p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura158.png" data-bs-toggle="modal" data-bs-target="#Imagem158">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura158.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 158 - MODAL -->
                            <div class="modal fade text-center" id="Imagem158" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura158.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 158</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 158 - End --><br>

                            <p>A tela inicial sempre será a tela de consulta dos itens cadastrados no SIGA/SGBM, nesse caso, o perfil "Gestor Financiero" poderá efetuar a alteração de um item já cadastrado ou cadastrar um item novo. Para isso deverá proceder da seguinte forma:</p>

                            

                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Código", uma vez que já deve ser de conhecimento prévio, informar o código de identificação do item que terá a sua classificação alterada. A pesquisa poderá ser efetuada também por descrição no campo "Descrição" ao lado. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Tipo de Material" selecionar a opção de configuração de pesquisa por "Patrimônio" ou "Consumo" dependendo do item que se deseja alterar a classificação. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionar o botão "Pesquisar" para acessar o item em questão. </li>
                                
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura159_.png" data-bs-toggle="modal" data-bs-target="#Imagem159_">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura159_.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 159 - MODAL -->
                                <div class="modal fade text-center" id="Imagem159_" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura159_.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 159</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 159 - End --><br>
                                


                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresentará uma grade denominada "Materiais encontrados" contendo as seguintes informações para identificação do item: Código do Item, Descrição, Tipo de Material, Unidade de Fornecimento e Ações.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">No final da grade acionar o ícone no formato de "Lápis" para editar a alteração de classificação.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura160_.png" data-bs-toggle="modal" data-bs-target="#Imagem160_">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura160_.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 160 - MODAL -->
                                <div class="modal fade text-center" id="Imagem160_" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura160_.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 160</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 160 - End --> <br>     
                                
                                <li class="wow fadeInLeft" data-wow-delay="1.9s">Serão apresentados os dados de classificação do item trazidos do Catálogo de Bens, Materiais e Serviços correspondentes ao tipo de classificação original. No exemplo abaixo trata-se dos dados referentes a um item de Patrimônio, quando virão preenchidos os campos de "Valor Residual", "Taxa de Dedpreciação" e "Vida Útil"..</li>
                                <li class="wow fadeInLeft" data-wow-delay="2.3s">Diferentemente da tela original de cadastramento de material, quando esta operação é efetuada pelo perfil "Gestor Financeiro" o SIGA/SGBM habilita o campo denominado "Tipo de Material" que poderá ser alternado entre "Consumo" e "Patrimônio". No campo "Tipo de Material" deve-se selecionar a nova classificação que o item passará a ter oposta à classificação original.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura161.png" data-bs-toggle="modal" data-bs-target="#Imagem161">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura161.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 161 - MODAL -->
                                <div class="modal fade text-center" id="Imagem161" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura161.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 161</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 161 - End --><br> 


                                <li class="wow fadeInLeft" data-wow-delay="2.6s">Uma vez alterado o campo "Tipo de Material" o SIGA/SGBM apresentará para edição os dados correspondentes ao tipo de classificação escolhida, os dados deverão ser editados conforme a característica de cada campo constante na tela.</li>
                                <li class="wow fadeInLeft" data-wow-delay="2.9s">Após a edição dos dados acionar o botão "Salvar".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura162.png" data-bs-toggle="modal" data-bs-target="#Imagem162">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura162.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 162 - MODAL -->
                            <div class="modal fade text-center" id="Imagem162" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura162.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 162</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 162 - End --> <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Salvar" o SIGA/SGBM apresentará uma mensagem de confirmação da operação, em seguida acionar o botão "OK".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura163.png" data-bs-toggle="modal" data-bs-target="#Imagem163">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura163.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 163 - MODAL -->
                            <div class="modal fade text-center" id="Imagem163" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura163.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 163</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 163 - End --><br> 

                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "OK" o SIGA/SGBM apresentará a tela de detalhamento do material, onde poderá ser observada a sua mudança de classificação:</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Ficarão habilitados botões de operações com o item no tocante a: "Inativar", "Editar" ou "Novo".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura164.png" data-bs-toggle="modal" data-bs-target="#Imagem164">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura164.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 164 - MODAL -->
                            <div class="modal fade text-center" id="Imagem164" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura164.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 164</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 164 - End --> 
















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
                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>