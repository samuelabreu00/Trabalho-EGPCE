<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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

                        <h2 class="Titulo"> Processo de Migração de Dados</h2>
                        <hr>

                        <br>
                        <p><strong>Objetivo:</strong> Compreender o processo de levantamento, depuração e tratamento de dados a serem alimentados no SIGA/SGBM de forma a implantar o sistema de forma consistente e conciliado com o sistema contábil. </p>

                        <p>A MIGRAÇÃO DE DADOS é a parte mais importante da implantação do SIGA/SGBM, é o momento que será necessário depurar e transferir os dados do sistema atual de controle (registro escritural manual ou informatizado) para o SIGA/SGBM. Em função do nível de integração que o SIGA/SGBM mantém com o Sistema de Catálogo de Bens, Materiais e Serviços esse processo requer procedimentos específicos.</p>

                        <p class="wow fadeIn" data-wow-delay="1.0s">Na aula anterior apresentamos um esquema básico com o objetivo de orientar um curso de ação para que o projeto de implantação seja bem-sucedido, mas isso dependerá diretamente de vários fatores, tais como: idade do acervo de materiais existentes, tamanho e dispersão geográfica do acervo de bens, controle interno sobre a localização e movimentação dos bens, atualizações estruturais sofridas pelo órgão como fusões, desmembramentos, entre outras questões.</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>É fundamental realizar um diagnóstico da complexidade e do nível de controle existente de forma a realizar o projeto no decorrer de um exercício contábil, o que exigirá dimensionamento de recursos, planejamento, controle e coordenação de atividades, além do forte patrocínio do titular da pasta, uma vez, que dependendo da qualidade do controle, atualizações monetárias se farão necessárias na conciliação com o sistema contábil. A medida que o órgão não consiga realizar a implantação durante um exercício contábil, se torna cada vez mais complexo ajustar o acervo real com o registro contábil.</p>
                            </div>
                        </div>



                        <p class="wow fadeInRight" data-wow-delay="1.0s">Na “migração de dados” várias frentes de trabalho deverão ser realizadas, principalmente no tocante ao trabalho de campo, onde será necessário identificar os bens e reavaliar o seu valor dependendo da sua vida útil, assim como, registrar o controle físico dos mesmos definindo sua localização departamental no SIGA/SGBM e estabelecendo o responsável pela guarda.</p>

                        <p><strong> A MIGRAÇÃO DE DADOS será feita pelo menos em quatro frentes de trabalho: </strong></p>

                        <!-- SubTítulo -->
                        <p class="SubTitulo" id="T2one">Cadastramento de Itens de Material de Consumo e Material Permanente</p>
                        <hr>

                        <br>
                        <p>Consiste na associação do item de material (consumo ou permanente) ao código correspondente no Catálogo de Bens Materiais e Serviços. Uma questão importante a ser considerada durante esse trabalho é a diferenciação entre “estoques” e “imobilizado”. Alguns órgãos governamentais, em decorrência da sua atividade, mantêm por algum tempo itens de material permanente estocados até que sejam efetivamente distribuídos. Enquanto esse item de material, permanecer em estoque ele não será depreciado e será caracterizado como estoque, somente a partir da sua distribuição e definição do responsável e da localização departamental este passará a imobilizado. É importante identificar o quantitativo desses itens estocados e à medida que sejam distribuídos efetuar o seu registro como patrimônio mensurado a custo histórico (valor de aquisição). </p>

                        <br>
                        <p>Outra questão importante a ser observada quando se implanta o SIGA/SGBM, é a origem do registro escritural de onde as informações serão migradas, ou seja, se a migração será originada de um outro sistema informatizado de controle patrimonial ou se a migração será efetuada a partir das planilhas de inventário. O SIGA/SGBM permite que a migração seja feita das duas formas. Para fins didáticos denominamos: <strong>“Migração com Sistema”</strong> e <strong>“Migração sem Sistema”</strong>.</p>

                        <br>
                        <h5 style="color: #FFA73E;"><strong>Migração com Sistema</strong>
                            <hr>
                        </h5>
                        <p>Ainda existem sistemas proprietários de controle de bens móveis utilizados por alguns órgãos e entidades do governo do Estado, tais sistemas não utilizam o <em>Federal Supply Classification</em> que é o sistema de classificação de materiais adotado pelo Sistema de Catálogo de Bens Materiais e Serviços, isso é justificável por que tais sistemas são desenvolvidos para atender a necessidade de apenas um órgãos ou entidade, abrindo mão dos ganhos que podem ser obtidos a partir da integração com outros sistemas do Governo do Estado do Ceará.
                            <br><br>Para fazer a implantação do SIGA/SGBM a partir desses sistemas é necessário fazer a correspondência com a codificação e especificação contida no Catálogo, de forma que possa migrar os dados de um sistema para outro por intermédio de uma “planilha DE & PARA”. Quando a catalogação de materiais utilizadas nestes sistemas, não segue o mesmo padrão do <em>Federal Supply Classification</em>, utilizando-se de uma catalogação mais simples, na maioria dos casos, um item de material (código), nesses sistemas corresponde a mais de um item de material (código) do <em>Federal Supply</em>. Deve-se então ajustar a catalogação de tais sistemas para que não ocorra inconsistências no programa de crítica da migração.
                            <br><br>Também é necessário distinguir entre os itens de material de permanente àqueles que são "itens corporativos" daqueles que são "itens específicos".
                            <br><br>Denominam-se "itens corporativos" àqueles que são adquiridos pelo Governo do Estado do Ceará para que sejam utilizados por todos os órgãos e entidades, tais itens são adquiridos por intermédio do Sistema de Registro de Preços em decorrência disso estão previamente codificados no Catálogo de Bens Materiais e Serviços. Já os itens específicos são àqueles materiais que são adquiridos individualmente pelo órgão/entidade, ou seja, não são adquiridos por intermédio de Ata de Registro de Preço. Tais itens podem ou não ter codificação no Catálogo de Bens Materiais e Serviços.
                        </p>

                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <p class="ImportanteTexto">Tal distinção se torna necessária porque nos casos dos itens corporativos a obtenção do código do “item de material” poderá ser facilmente obtida na Ata de Registro de Preço.
                                <br><br>Vale lembrar que esta frente de trabalho tratará apenas da identificação prévia dos “Itens de Material”, os quantitativos de cada item serão lançados à medida que é realizado o inventário.
                            </p>
                        </div><br>

                        <div class="card card-body" style="border-color: #56a7b2;">
                            <p>Para cadastramento dos itens na "Migração com sistema" deverá ser acionado na versão 2 do SIGA/SGBM módulo de Almoxarifado o comando: <strong>PROCESSOS >> Almoxarifado >> Migração >> Migrar Dados:</strong></p><br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="750" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 08 - MODAL -->
                            <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 8</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 08 - End -->

                        </div>


                        <br>
                        <p>No caso dos "itens corporativos", o seu código pode ser identificado por intermédio da Ata de Registro de Preços. Dessa forma o cadastramento do item será feito por intermédio do <strong>"Código"</strong>.</p><br>

                        <!-- Accordion Fase 01 - Begin  -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Pesquisa por Código</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <ol>
                                            <li>Informar no campo "Código" o número de identificação do item retirado da Ata de Registro de Preço.</li>
                                            <li>Acionar o botão "Pesquisar".</li>

                                            <br><!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="750" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 09 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Figura 9</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 09 - End --><br>

                                            <li>Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresentará a grade "Migração de Produtos Almoxarifado", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação.</li>
                                            <li>Acionar o ícone em formato de lápis no campo "Ação" para proceder o cadastramento do item.</li>
                                        </ol>

                                        <br><!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                                <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" width="750" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                            </a>
                                        </div>

                                        <!-- Imagem 10 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Figura 10</strong> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Imagem 10 - End -->


                                        <br>
                                        <p>Já os itens específicos são àqueles adquiridos individualmente pelo órgão/entidade e podem ou não ter codificação no Catálogo de Bens, Materiais e Serviços. Nesses casos a identificação do item no referido Catálogo se dará por intermédio da sua especificação de maneira que as características demonstradas na especificação correspondam às características físicas do item. Dessa forma o cadastramento do item será feito por intermédio da "Descrição".</p>



                                        <!-- Fique Atento -->
                                        <div class="FiqueAtentoCaixa">
                                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                            <div class="FiqueAtentoTexto">
                                                <p>Na ocasião em que não for identificada nenhuma especificação que corresponda às características do item, o mesmo deve ser incluído como um novo item no Catálogo. Nesses casos, a operação será efetuada por intermédio da funcionalidade no SIGA/SGBM "Solicitação Catálogo", a ser apresentada adiante. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Pesquisa por Descrição </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <ol>
                                            <li>Para cadastrar preencher no campo "Descrição" com "palavras chave" que supostamente constem na descrição do item.</li>
                                            <li>Em seguida acionar o botão "Pesquisar".</li>

                                            <br><!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="750" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 11 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Figura 11</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 10 - End -->
                                            <br>
                                            <li>Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresentará a grade "Materiais encontrados", com diversos itens que possuem as "palavras chave" em sua descrição, na referida grade serão demonstrados os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação.</li>
                                            <li>Acionar o ícone em formato de lápis no campo "Ação" daquele item selecionado para cadastramento e caso o item já esteja cadastrado o SIGA/SGBM apresentará uma mensagem informando que o item já foi cadastrado. Senão passará para a tela de edição dos campos para cadastramento.</li>
                                        </ol>

                                        <br><!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="750" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                            </a>
                                        </div>

                                        <!-- Imagem 12 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Figura 12</strong> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Imagem 12 - End -->


                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Edição dos Campos de Cadastramento </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Uma vez acionado o ícone de edição no campo "Ações" o SIGA/SGBM apresentará a tela "Migrar Dados" para que sejam editadas as informações de cadastramento do item, quer seja a pesquisa por código ou por descrição.</p>
                                        <ol class="none">
                                            <li>5 - No campo "Fator Multiplicador", informe a quantidade em que deverá ser fracionada a "Unidade de Fornecimento". No exemplo abaixo, o material é adquirido em unidades, será entregue também em unidades, então não haverá necessidade de fracionamento, e o valor do "Fator Multiplicador" será igual a 1. </li>

                                            <br><!-- Fique Atento -->
                                            <div class="FiqueAtentoCaixa">
                                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                                <div class="FiqueAtentoTexto">
                                                    <p>Uma vez cadastrada essa informação, sempre que for registrada uma entrada de estoque, o sistema multiplicará a quantidade e dividirá o valor unitário pelo número informado como "Fator Multiplicador", razão pela qual se deve ter muita atenção no registro da Nota Fiscal de entrada. No exemplo dado, o fator multiplicador foi igual a 1, dessa forma a quantidade nominal será multiplicada por 1, e o valor da unidade dividido por 1. A Unidade de Fornecimento foi igual a Unidade de Consumo. Uma vez registrado o "Fator Multiplicador" do item, este só poderá ser alterado se o item ainda não tiver sido movimentado ou se o seu saldo estiver Zero.</p>
                                                </div>
                                            </div>

                                            <br>

                                            <li>06 - No campo "Unidade de consumo", informe a unidade na qual o item de material vai ser entregue ao requisitante. No exemplo abaixo, o material será entregue em Unidade, na mesma unidade na qual foi adquirido.</li>
                                            <li>07 - No campo "Código Atual", informe o número de identificação do item no sistema informatizado de origem da Migração.</li>
                                            <li>08 - Informado todos os campos identificados como obrigatórios (*), acione o botão "Salvar".</li>

                                            <br><!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                                    <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" width="750" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 13 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Figura 13</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 13 - End -->

                                            <br>
                                            <li>9 - Ao acionar o botão "Salvar" o SIGA/SGBM apresentará uma janela de confirmação da operação que poderá ser cancelada ou confirmada.</li>

                                            <br><!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="750" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 14 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Figura 14</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 14 - End -->

                                            <br>
                                            <li>10 -Uma vez confirmada a operação, será apresentada a tela "Detalhe da Migração" com as informações sobre o item, a partir dessa tela poderão ser executadas duas operações: "Novo" iniciando um novo cadastramento a partir do item e "Editar" permitindo alterar as informações de “fator multiplicador” e “Código Atual” itens 5 e 6 anteriores.</li>
                                            <li>11 - Apresentará também a tela "Detalhe da Migração" com as informações sobre o item, a partir dessa tela poderão ser executadas duas operações: "Novo" - iniciando um novo cadastramento a partir do item, e "Editar" - permitindo alterar algumas informações do item.</li>

                                            <br><!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="750" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 15 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Figura 15</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 15 - End -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br><br>
                        <h5 style="color: #FFA73E;"><strong> Migração sem Sistema</strong>
                            <hr>
                        </h5>
                        <p>Para fazer a implantação do SIGA/SGBM sem sistema, será utilizado a funcionalidade de “MANUTENÇÃO” do SIGA/SGBM. Esta funcionalidade é útil tanto para o processo de migração, quanto na atualização permanente dos novos itens de material que surgirão, uma vez que a obsolescência tecnológica naturalmente trará materiais substitutos aos atualmente em uso. Seguindo o procedimento de integração com o Federal Supply Classification, é necessário fazer a correspondência com a codificação e especificação contida no Catálogo, para isso você deverá distinguir entre seus itens de material permanente àqueles que são "itens corporativos" daqueles que são "itens específicos".
                            <br><br>O cadastramento dos itens na "Migração sem sistema" deverá ser efetuado pelo perfil "Almoxarife" ou "Almoxarife/Gestor Patrimonial" utilizando o comando <strong>MANUTENÇÃO >> Almoxarifado >> Material >> Cadastro</strong>.
                        </p>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 16 - MODAL -->
                        <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" width="750" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 16</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 16 - End -->

                        <br><br>
                        <p>No caso dos "itens corporativos" que são àqueles adquiridos pelo Governo do Estado do Ceará para que sejam utilizados por todos os órgãos e entidades, tais itens são adquiridos por intermédio do Sistema de Registro de Preços por isso o seu código no Catálogo de Bens Materiais e Serviços pode ser facilmente identificado por intermédio da Ata de Registro de Preços. Dessa forma o cadastramento do item será feito por intermédio do "Código".</p>

                        <br><!-- Accordion Fase 02 - Begin  -->
                        <div class="accordion accordion-flush" id="AccordionFase02">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Pesquisa por Código </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">
                                        <ol>
                                            <li>Para cadastrar preencher no campo "Código" o número de identificação do item no Catálogo.</li>
                                            <li>Em seguida acionar o botão "Pesquisar".</li>

                                            <br><!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura17.jpg" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="750" src="imagens/Figura17.jpg" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 17 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura17.jpg" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Figura 17</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 17 - End -->

                                            <br>
                                            <li>Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação.</li>
                                            <li>Acionar o ícone em formato de lápis no campo "Ação" para proceder o cadastramento do item.</li>
                                        </ol>

                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="750" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                            </a>
                                        </div>

                                        <!-- Imagem 18 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Figura 18</strong> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Imagem 18 - End -->


                                        <br>
                                        <p>Já os itens específicos são àqueles adquiridos individualmente pelo órgão/entidade e podem ou não ter codificação no Catálogo de Bens, Materiais e Serviços. Nesses casos a identificação do item no referido Catálogo se dará por intermédio da sua especificação de maneira que as características demonstradas na especificação correspondam é características físicas do item. Dessa forma o cadastramento do item será feito por intermédio da "Descrição".</p>


                                        <!-- Fique Atento -->
                                        <div class="FiqueAtentoCaixa">
                                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                            <p class="FiqueAtentoTexto">Quando não for identificada nenhuma especificação que corresponda é características do item, o mesmo deve ser incluído no Catálogo por intermédio da funcionalidade "Solicitação Catálogo".</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong> Pesquisa por Descrição </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">
                                        <ol>
                                            <li>Para cadastrar preencher no campo "Descrição" com "palavras chave" que supostamente constem na descrição do item.</li>
                                            <li>Em seguida acionar o botão "Pesquisar".</li>

                                            <br><!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="750" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 19 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Figura 19</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 19 - End -->
                                            <br>
                                            <li>Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresentará a grade "Materiais encontrados", com diversos itens que possuem as "palavras chave" em sua descrição, na referida grade serão demonstrados os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação.</li>
                                            <li>Acionar o ícone em formato de lápis no campo "Ação" daquele item selecionado para cadastramento e caso o item já esteja cadastrado o SIGA/SGBM apresentará uma mensagem informando que o item já foi cadastrado. Senão passará para a tela de edição dos campos para cadastramento.</li>
                                            <br><!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="750" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 20 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Figura 20</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 20 - End -->
                                            <br>
                                            <p><strong>Na tela Cadastro de Material deverão ser informados os seguintes campos:</strong></p>
                                            <li>No campo "Fator Multiplicador", informe a quantidade que deverá ser fracionada na "Unidade de Fornecimento". No exemplo abaixo, o material é adquirido em caixa de 12 unidades, mas será entregue ao requisitante em unidades, então 1 caixa será fracionada em 12 unidades. </li>

                                            <br><!-- Fique Atento -->
                                            <div class="FiqueAtentoCaixa">
                                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                                <p class="FiqueAtentoTexto">Uma vez cadastrada essa informação, toda vez que for registrada uma entrada de estoque, na unidade de fornecimento "Caixa - 12 unidades", o almoxarife deverá atentar que a quantidade, em termos nominais, aumentará, e o valor da unidade diminuirá considerando o fator multiplicador, ou seja, a quantidade nominal será multiplicada por 12 unidades e o valor da caixa dividido por 12. Dessa forma, a Caixa será transformada em Unidades. Uma vez registrado o "Fator Multiplicador" do item, este só poderá ser alterado se o item ainda não tiver sido movimentado ou se o seu saldo estiver Zero.</p>
                                            </div>

                                            <li>No campo "Valor Unitário Inicial", informe quanto custa a unidade do item em moeda. No exemplo abaixo, será o valor da "Caixa" dividido por 12 (doze). Este campo não é obrigatório nesse momento e poderá ser preenchido por intermédio da planilha de Migração DE & PARA, quando da implantação do saldo do item. </li>
                                            <li>No campo "Unidade de Consumo", informe a unidade na qual o item de material vai ser entregue ao requisitante. No exemplo abaixo, o material será entregue em Unidade, mesmo sendo adquirido em Caixa. Quando a unidade de entrega for igual a unidade de fornecimento deverá ser informado como "Unidade de Consumo", também "Caixa".</li>
                                            <li>No campo "Limite Mínimo", informe a quantidade em estoque na qual deverá ser efetuado o pedido de ressuprimento, de forma que ao atingir esse limite o SIGA/SGBM avise ao almoxarife que o estoque deve ser reposto mediante pedido.</li>
                                            <li>No campo "Limite Máximo", informe a quantidade máxima que poderá ser estocada do item para aquela localização de estoque, conforme o sistema de endereçamento do armazém. Vale ressaltar que se trata de sistema de endereçamento fixo.</li>
                                            <li>No campo "Localização", informe a sequência de endereçamento do armazém onde o material está localizado (caso o armazém esteja configurado com "sistema de endereçamento fixo").</li>
                                            <li>Informado todos os campos identificados como obrigatórios (*), acione o botão "Salvar".</li>

                                            <br><!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura21.png" data-bs-toggle="modal" data-bs-target="#Imagem21">
                                                    <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" width="750" src="imagens/Figura21.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 21 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura21.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Figura 21</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 21 - End -->
                                            <br>
                                            <li>Ao acionar o botão "Salvar" o SIGA/SGBM apresentará uma janela de confirmação da operação que poderá ser cancelada ou confirmada.</li>

                                            <br><!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura22.png" data-bs-toggle="modal" data-bs-target="#Imagem22">
                                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="750" src="imagens/Figura22.png" alt="Alt da imagem fica aqui">
                                                </a>
                                            </div>

                                            <!-- Imagem 22 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura22.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Figura 22</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem 22 - End -->
                                            <br>
                                            <li>Uma vez confirmada a operação, será apresentada a tela "Detalhe do Material" com as informações sobre o item, a partir dessa tela poderão ser executadas três operações: "Novo" - iniciando um novo cadastramento a partir do item; "Editar" - permitindo alterar algumas informações do item e "Inativar" - tornando o item inativo.</li>
                                        </ol>

                                        <br><!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura23.png" data-bs-toggle="modal" data-bs-target="#Imagem23">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="750" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">
                                            </a>
                                        </div>

                                        <!-- Imagem 23 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Figura 23</strong> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Imagem 23 - End -->

                                        <br>
                                        <p>Terminada esta atividade o SIGA/SGBM terá o cadastro de todos os códigos dos itens de material permanente do universo do Catálogo que fazem correspondência aos itens físicos em utilização no órgão e entidade. Mais adiante serão registrados os saldos que corresponderão a quantidade física de cada item cadastrado, mas antes disso deverão ser cadastrados também no SIGA/SGBM os responsáveis pelo uso deste acervo patrimonial.
                                            <br><br>Vale ressaltar que o comando de <strong>Migração com Sistema</strong> somente será utilizado no período de implantação, no entanto o comando de <strong>Migração sem sistema (MANUTENÇÃO>> ALMOXARIFADO>>MATERIAL>>CADASTRO)</strong> sempre será utilizado toda vez que, durante o uso do SIGA/SGBM, necessitar incluir um novo código de material permanente trazido do Catálogo (<em>Federal Supply Classification</em>).
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Sub Título -->
                            <p class="SubTitulo" id="T2two"> Realização do Inventário e Conciliação do Saldo Físico e Financeiro com o Registro Escritural</p>
                            <hr>

                            <br>
                            <p>A segunda frente de trabalho consiste na contagem física dos itens de material de consumo e material permanente existente no estoque, seguida da conciliação com o registro escritural (sistema de controle existente), seja este manual ou informatizado. O resultado efetivamente encontrado no inventário deve ser atualizado no registro escritural de forma que este reflita a posição real de materiais estocados em termos de quantidade e valor. Vale ressaltar que os itens de material de consumo serão valorados unitariamente pela média das compras e os itens de material permanente pelos seus valores originais. O saldo conciliado deve também ser atualizado na contabilidade. </p>

                            <!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Realização do inventário e conciliação do saldo físico e financeiro</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>O inventário é uma lista de todos os bens e materiais pertencentes ao órgão/entidade e disponíveis, podem estar armazenados em estoque, distribuídos nas próprias instalações ou fora delas. A qualidade do controle dos estoques depende da qualidade de entrada das informações no momento de implantar o Siga/Sgbm.</p>
                                            <p>Dessa forma é importante levantar todos esses itens e conciliar o registro escritural com o que foi identificado fisicamente permitindo iniciar o controle de forma consistente sem erros ou vícios omitidos no passado. As orientações relativas à realização de inventário de estoque foram estudadas anteriormente no item “5.14 – Inventários” na aula 5 - Gestão da Armazenagem. Vale ressaltar ainda que tal inventário se trata do inventário de implantação, obviamente que a cada exercício financeiro será necessário realizar um inventário para isso o Siga/Sgbm dispõe de uma ferramenta de inventário que estudaremos adiante.</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Conciliação do saldo físico com o registro escritural </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Denomina-se “conciliação” a análise do saldo registrado no sistema de controle, e sua respectiva movimentação, visando adequar seu saldo à efetiva realidade constatada a partir da contagem física realizada com o inventário, promovendo ajustes necessários na escrituração.</p>
                                            <p>Concilia-se primeiramente o saldo registrado na forma escritural com os documentos e os diversos relatórios que dão suporte aos lançamentos de registro no controle escritural, tais como: Notas Fiscais de entrada, Termos de Transferência de Estoque (entradas e saídas) e Requisições de Material. Nesta etapa o objetivo é verificar se o registro no controle escritural possui documentos que comprovem a correção dos saldos lá registrados.</p>
                                            <p>Uma vez identificada alguma incorreção entre o registro e os documentos correspondentes, efetua-se o ajuste no registro escritural de forma que todo e qualquer lançamento possua um documento comprobatório da movimentação, com isso se pode afirmar que o registro escritural está correto. </p>
                                            <p> Depois de efetuada a verificação confronta-se o saldo no registro escritural com o saldo físico identificado no inventário e se houver divergência deve-se ajustar o saldo escritural com o que foi apurado no inventário. Logicamente que as diferenças identificadas principalmente se forem a menor devem ser rigorosamente apuradas, se preciso, por intermédio de “sindicância”.</p>
                                            <p>A conciliação final deverá ser feita entre o registro escritural e o registro contábil de forma que este represente a situação real, de forma sintética, do estoque em termos de valor.</p>
                                            <p>Somente após terminada as conciliações entre o saldo escritural e o saldo contábil, os registros analíticos devem ser transferidos para o Siga/Sgbm.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sub Título -->
                            <p class="SubTitulo" id="T2three">Registro do Saldo Conciliado para o SIGA/SGBM </p>
                            <hr>
                            <p>A terceira frente de trabalho será o registro dos saldos no Siga/Sgbm que poderá ser efetuado por intermédio de uma planilha DE & PARA transferindo-se as informações correspondentes a cada código de item material (consumo e permanente) que foi cadastrado no Siga/Sgbm como item de estoque. </p>
                            <p>O registro dos quantitativos de estoque dos itens de material que foi cadastrado no Siga/Sgbm serão importados por intermédio desta planilha eletrônica, ou seja, o sistema executará um programa de crítica que processará a leitura de cada linha da planilha a partir do código do item, verificando se este código foi cadastrado. Em caso positivo efetuará a leitura das demais informações da planilha e alimentará o sistema com essas informações. Em caso negativo o programa rejeitará a leitura e encerrará a execução sem alimentar as informações.</p>
                            <p>Dessa forma é fundamental que cada linha da planilha contenha os códigos que foram cadastrados no Siga/Sgbm. No caso da "migração com sistema" a referida planilha será gerada pelo sistema que fornecerá as informações para o Siga/Sgbm e no caso da "migração sem sistema" a planilha será preparada pelo almoxarife encarregado do inventário. </p>

                            <p><strong>Os dados da planilha serão os seguintes:</strong></p>
                            <br>
                            <!-- Início Accordion -->

                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <center>
                                    <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </center>
                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Código do Material de Consumo ou Material Permanente em estoque</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Corresponde ao código de identificação do material, no caso de "migração com sistema" é o código do item no sistema de controle de estoque do qual se origina a planilha DE & PARA. No caso de "migração sem sistema" será o código do item constante no Catálogo de Bens, Materiais e Serviços, informado manualmente, pelo responsável pelo inventário, na planilha DE & PARA . Em ambos os casos o referido código foi informado no Siga/Sgbm na ocasião em que o item foi cadastrado.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 01 -->

                                <!-- Accordion 02 -->
                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Quantidade</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>É a quantidade correspondente ao estoque do item de material, após inventariado e conciliado com o registro escritural. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 02 -->

                                <!-- Accordion 03 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong> Valor Unitário</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>É o valor unitário do item de material de consumo ou material permanente em estoque, constante no registro escritural de controle (informatizado ou manual). No caso dos materiais classificados como “consumo”, é recomendável que seja o valor médio entre as entradas e o estoque do período, no caso do material classificado como “permanente” deverá ser o valor original constante na Nota Fiscal de Compra, na impossibilidade é aceitável o valor unitário da última entrada. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion 03 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item04">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefuor" aria-expanded="false" aria-controls="flush-collapsefuor">
                                            <strong> Limite mínimo</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefuor" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>É a quantidade mínima do item que deve ser mantida em estoque durante o intervalo de tempo entre a realização do Pedido de fornecimento e o recebimento do material no almoxarifado. </p>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br>
                            <!-- Accordion 03 -->
                            <!-- FIM Accordion -->
                            <br>

                        </div>
                    </div>
                </div>
            </div>

            <!--INÍCIO CAIXA CINZA -->
            <section id="pt2">
                <div class="bg-cinzaAzul container-fluid main-content">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <p class="caixa">
                            <h4 class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez cumprida as três frentes de trabalho e o saldo dos materiais de estoque transferidos para o SIGA/SGBM poderão ser efetuadas as requisições de materiais assim como o registro das Notas Fiscais de entrada em estoque.</h4>
                            </p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </section>
            <!--INÍCIO CAIXA CINZA -->







            <br><br>
            <!-- SCRIPT LIGHTBOX -->
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
        <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
        <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
    </div>

    </div> <!-- CONTEUDO FIM -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>