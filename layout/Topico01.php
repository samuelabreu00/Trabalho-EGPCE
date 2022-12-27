<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>
<?php
$page = 'Topico01';
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

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">

                        <h2 class="Titulo" id="T1"> Orientações para a Implantação do Sistema SIGA/SGBM</h2>
                        <hr>
                        <br>

                        <p><strong>Objetivo:</strong> Compreender as características do Sistema SIGA/SGBM e quais os procedimentos de depuração da base de dados e conciliação dos saldos físicos com os saldos patrimoniais constantes na contabilidade de forma a implantar o sistema de forma consistente.</p>

                        <p class="wow fadeInLeft" data-wow-delay="0.3s">O SIGA/SGBM é o sistema oficial de almoxarifado e de bens móveis do Governo Estadual do Ceará, regulamentado pelo Decreto n° 31.549 de 13/08/2014 e desenvolvido de forma corporativa para que os órgãos e entidades da administração direta controlem seus materiais de consumo e permanente de forma física e financeira, apurando as informações de gestão.
                            <span class="wow fadeInLeft" data-wow-delay="0.9s"><br><br>O sistema foi desenvolvido no ambiente INTERNET, permitindo o acesso por intermédio de senhas individualizadas, mantendo a integridade dos dados de cada órgão e entidade e possibilitando também a consolidação de informações de consumo de materiais e movimentações de bens entre os órgãos que utilizam o sistema.</span>
                        </p>

                        <br><!-- Sub Título -->
                        <p class="SubTitulo" id="T1one">As Características e Integração do Sistema</p>
                        <hr>

                        <br>
                        <p><strong>Para obter a padronização o SIGA/SGBM se integra com outros sistemas corporativos do Governo Estadual, tais como:</strong></p>


                        <br><!-- Accordion Fase 01 - Begin  -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Sistema de Catálogo de Bens Materiais e Serviços</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center"><br>
                                                    <a href="imagens/Figuraa1.png" data-bs-toggle="modal" data-bs-target="#Imagema1">
                                                        <img class="img-fluid" width="150" src="imagens/Figuraa1.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É o sistema utilizado pelo Governo Estadual para padronizar características e nomenclaturas de bens, materiais e serviços adquiridos e mantidos pelos órgãos e entidades do Governo Estadual. Todos os itens de materiais de consumo e permanente, tem seu código e especificação retirado do sistema de catálogo permitindo consolidar informações acerca do consumo de materiais e da movimentação de bens patrimoniais. Além de permitir a padronização de taxas de depreciação, vida útil e percentual de valor residual, fornecendo parâmetros para cálculo da depreciação.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Sistemas de Compras Eletrônicas</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center"><br><br>
                                                    <a href="imagens/Figuraa2.png" data-bs-toggle="modal" data-bs-target="#Imagema2">
                                                        <img class="img-fluid" width="150" src="imagens/Figuraa2.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>São os sistemas utilizados pelo Governo Estadual para gerenciar o processos de compras por intermédio de Pedidos de Fornecimento. Os Pedidos de Fornecimento emitidos pelos sistemas de compras do Governo Estadual, são lidos automaticamente pelo SIGA/SGBM, permitindo que no momento do recebimento no almoxarifado dos materiais de consumo e permanente, as informações de identificação, quantidade e valor sejam importadas sem a necessidade de digitação, evitando assim transcrição e ocorrência de erros.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Sistema de Fornecedores (Certificado de Registro Cadastral CRC)</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figuraa3.png" data-bs-toggle="modal" data-bs-target="#Imagema3">
                                                        <img class="img-fluid" width="150" src="imagens/Figuraa3.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É o sistema utilizado pelo Governo Estadual para gerenciar e certificar os fornecedores aptos a transacionar com o Estado do Ceará. Os materiais de consumo e permanente recebidos no almoxarifado, oriundos de compras, somente poderão ser registrados se o Fornecedor envolvido for certificado como Fornecedor do Governo Estadual, garantindo a obediência dos critérios estabelecidos na política de compras governamental.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Sistema de Editoração Eletrônica de Documentos Oficiais do Estado do Ceará – Edoweb</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center"><br>
                                                    <a href="imagens/Figuraa4.png" data-bs-toggle="modal" data-bs-target="#Imagema4">
                                                        <img class="img-fluid" width="150" src="imagens/Figuraa4.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É o sistema utilizado pelo Governo Estadual para padronizar os documentos oficiais a serem publicados no Diário Oficial. Os Termos de Movimentação Patrimonial (doação, transferência e cessão), gerados pelo SIGA/SGBM terão o seu Extrato de Publicação gerados automaticamente no Edoweb, possibilitando maior celeridade na publicação em Diário Oficial de tais atos administrativos.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>Sistema de Estrutura Organizacional - SEO</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center"><br>
                                                    <a href="imagens/Figuraa5.png" data-bs-toggle="modal" data-bs-target="#Imagema5">
                                                        <img class="img-fluid" width="150" src="imagens/Figuraa5.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É o sistema utilizado pelo Governo Estadual para gerenciar as estruturas organizacionais dos órgãos que compõem o Poder Executivo. Os setores que compõem os Centros de Custos onde serão alocadas as despesas de materiais de consumo, e a localização dos bens permanentes, assim como os titulares dos órgãos e entidades seguirá os padrões cadastrados no SEO.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Em função das características de integração com outros sistemas corporativos do Governo do Estado, o SIGA/SGBM terá uma estratégia específica de implantação exigindo o cumprimento de etapas e adoção de procedimentos pré-estabelecidos.</p>
                            </div>
                        </div>

                        <!-- Sub Título -->
                        <p class="SubTitulo" id="T1three"> Cadastrar Organograma</p>
                        <hr>


                        <p>Os materiais de consumo e os materiais permanentes serão alocados a setores da estrutura organizacional do órgão para apuração de consumo e localização física dos bens. Em função disso, faz-se necessário o cadastramento do organograma do órgão no SIGA/SGBM, uma vez que cada usuário requisitante deverá estar lotado em um determinado setor.</p>

                        <div class="bd-callout bd-callout-primary">
                            <p>Para cadastrar o organograma do órgão, deverá ser encaminhado à Coordenadoria de Gestão Patrimonial e Recursos Logísticos - Copat/Seplag um "Processo Administrativo" protocolado no Viproc instruído com: </p>

                            <ol>
                                <li class="wow fadeInDown" data-wow-delay="1.0s">Ofício do titular do órgão;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s">Decreto de criação do órgão; </li>
                                <li class="wow fadeInDown" data-wow-delay="1.6s">Organograma.</li>
                            </ol>
                        </div>

                        <br>
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Toda alteração na estrutura deverá ser previamente informada por intermédio de processo administrativo. Para orientações adicionais sobre a criação de setores no SIGA/SGBM contactar o atendimento operacional pelos telefones (85) 3101-7801, (85)3 101-7816, (85) 3101-3829 ou e-mail <a href="mailto:atendimento@seplag.ce.gov.br" target="_blank">atendimento@seplag.ce.gov.br</a>.</p>
                            </div>
                        </div>
                        <br>

                        <!-- Sub Título -->
                        <p class="SubTitulo" id="T1four"> Solicitar Acesso ao Sistema</p>
                        <hr>

                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success">
                            <div class="row">
                                <div class="col-2">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <img class="img-fluid" src="imagens/Figuraa6.png" alt="Alt da imagem fica aqui">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-10">
                                    <p> O SIGA/SGBM é um sistema corporativo acessado por intermédio da internet, não sendo necessário ser instalado na rede de computadores local do órgão/entidade. Essa característica permite a padronização de procedimentos operacionais e a atualização permanente do sistema na ocorrência de novas práticas estabelecidas por legislação ou por mudanças no processo operacional.</p>
                                </div>
                            </div>

                            <br>
                            <p>O sistema também permite acesso individualizado por intermédio de "login e senha" conforme o "perfil" do usuário. Cada "perfil" reúne uma série de funcionalidades adequadas às características operacionais e nível hierárquico do usuário. Um usuário pode ter apenas um "perfil" por versão no SIGA/SGBM.
                                <br><br>O SIGA/SGBM atualmente está sendo atualizado e encontra-se com duas versões em funcionamento: <strong>Versão 2</strong> suportando o processo de controle de almoxarifado e <strong>Versão 1</strong> suportando o processo de controle de patrimônio.
                            </p>
                        </div>


                        <br>
                        <p> Os "perfis" ou "grupos" definidos para o SIGA/SGBM são os seguintes:</p>

                        <br><!-- Accordion Fase 01 - Begin  -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Almoxarife</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center"><br><br>
                                                    <img class="img-fluid" width="100" src="imagens/Figuraa7.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É aquele que trabalha operacionalizando o controle de estoque, atualizando o cadastro de materiais, atendendo as requisições e procedendo a entrega dos materiais de consumo, assim como registrando as entradas de estoque originadas dos recebimentos de materiais de consumo e permanente.
                                                    <br><br>Também é função desse perfil por intermédio do SIGA/SGBM monitorar a movimentação dos itens e encerrar mensalmente o ciclo do controle de estoque. As permissões correspondentes a este perfil são:
                                                </p>

                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-sm">
                                                <ol>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Atender Requisição de Almoxarifado;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"> Baixa de Material de Consumo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"> Devolução;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.0s"> Doação de Material de Consumo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"> Requisitar Material de Consumo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"> Entrada por Registro de Preço;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"> Entrada por Cotação Eletrônica;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.0s"> Entrada por Nota Fiscal;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.3s"> Consultar Notas Fiscais Salvas;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.6s"> Solicitar Cancelamento de Nota Fiscal;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.9s"> Solicitar Cadastro de Material no Catálogo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.0s"> Cadastrar Material no SIGA/SGBM;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.3s"> Relatório de 10 Itens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.6s"> Relatório de Consumo Geral do Período;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.9s"> Relatório de Consumo por Setor;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.0s"> Relatório de Consumo por Categoria;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.3s"> Relatório de Curva ABC de Estoque;</li>
                                                </ol>
                                            </div>

                                            <div class="col-sm">
                                                <ol start="18">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Relatório de Curva ABC de Giro de Estoque;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"> Relatório de Entrada Período;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"> Relatório de Entradas x Saídas;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.0s"> Relatório de Itens Parados;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"> Relatório de Itens Cadastrados por Tipo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"> Relatório de Movimentação de Estoque;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"> Relatório de Posição de Estoque;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.0s"> Relatório de Razão Movimentação;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.3s"> Consulta de Baixas Material de Consumo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.6s"> Consulta de Doação Material de Consumo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.9s"> Consulta de Entradas;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.0s"> Consulta de Fornecedores;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.3s"> Consulta de Requisições;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.6s"> Migrar Dados de Material de Consumo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.9s"> Consultar Migração Material de Consumo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.0s"> Gerar Fechamento Almoxarifado.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Gestor Patrimonial</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <img class="img-fluid" width="150" src="imagens/Figuraa8.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>
                                            </div>


                                            <div class="col-10">
                                                <p>É aquele que trabalha no controle e movimentação dos bens móveis, no tocante a: localização, uso, garantia, manutenção dos bens, assim como as cessões, transferências e doações, inclusive na preparação dos bens para o Leilão Público Estadual. As permissões correspondentes a este perfil são:</p>

                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-sm">
                                                <ol>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Atender Requisição de Patrimônio;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"> Baixa de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"> Doação de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.0s"> Cessão de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"> Transferência de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"> Movimento Interno Setor P/ Setor;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"> Solicitar Cadastro de Material no Catálogo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.0s"> Cadastrar Material no SIGA/SGBM;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.3s"> Ativar/Inativar Responsável Setor;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.6s"> Cadastrar/Pesquisar Responsável Bem;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.9s"> Ativar/Inativar Responsável Bem;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.0s"> Transferir Responsável Bem;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.3s"> Cadastrar/Pesquisar Coordenador Jurídico;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.6s"> Cadastrar/Pesquisar Responsável Setor;</li>
                                                </ol>
                                            </div>

                                            <div class="col-sm">
                                                <ol start="15">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Imprimir Relatório de Inventário de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"> Imprimir Guia de Movimentação de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"> Gerar Fechamento Patrimônio;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.0s"> Inventário de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"> Entrada de Inventário de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"> Listar Pendências de Inventário;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"> Enviar Arquivo de Implantação de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.0s"> Ler Planilha de Migração de bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.3s"> Listar Pendências de Planilha de Migração de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.6s"> Listar Relatório de Resultado de Migração de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.9s"> Imprimir Termo de Responsabilidade;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.0s"> Consulta de Bens.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Almoxarife/ Gestor Patrimonial</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center"><br>
                                                    <img class="img-fluid" width="150" src="imagens/Figuraa9.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É aquele que trabalha tanto como Almoxarife quanto como Gestor Patrimonial, devido ao tamanho e simplicidade do órgão/entidade, para esses o SIGA/SGBM permitirá o acesso tanto para as funcionalidades de controle de estoque, como para as funcionalidades de controle e movimentação de bens. As permissões correspondentes a este perfil são: </p>
                                            </div>
                                        </div>

                                        <!-- Importante -->
                                        <div class="ImportanteCaixa">
                                            <p class="ImportanteTitulo"> Importante</p>
                                            <p class="ImportanteTexto">Este perfil estará inativo durante a atualização da Versão 1 referente ao controle patrimonial. Enquanto estiver em atualização os usuários que necessitam desse perfil terão acesso às duas versões, sendo, Versão 1 como Gestor Patrimonial e Versão 2 como Almoxarife.</p>
                                        </div><br>


                                        <div class="row">
                                            <div class="col-sm">
                                                <ol>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Atender Requisição de Almoxarifado;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"> Atender Requisição de Patrimônio;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"> Baixa de Material de Consumo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.0s"> Devolução;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"> Doação de Material de Consumo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"> Requisitar Material de Consumo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"> Entrada por OC de Registro de Preço;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.0s"> Entrada por OC de Cotação Eletrônica;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.3s"> Ativar/Inativar Responsável Setor;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.6s"> Entrada por Nota Fiscal;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.9s"> Consultar Notas Fiscais Salvas;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.0s"> Solicitar Cancelamento de Nota Fiscal;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.3s"> Baixa de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.6s"> Doação de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.9s"> Cessão de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.0s"> Transferência de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.3s"> Movimento Interno Setor P/ Setor;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.6s"> Requisição de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.9s"> Solicitar Cadastro de Material no Catálogo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="5.0s"> Cadastrar Material no SIGA/SGBM;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="5.3s"> Cadastrar/Pesquisar Responsável Setor;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="5.6s"> Ativar/Inativar Responsável Setor;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="5.9s"> Cadastrar/Pesquisar Responsável Bem;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="6.0s"> Ativar/Inativar Responsável Bem;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="6.3s"> Transferir Responsável Bem;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="6.6s"> Cadastrar/Pesquisar Coordenador Jurídico;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="6.9s"> Relatório de 10 Itens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="7.0s"> Relatório de Consumo Geral do Período;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="7.3s"> Relatório de Consumo por Setor;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="7.6s"> Relatório de Consumo por Categoria;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="7.9s"> Relatório de Curva ABC de Estoque;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="8.0s"> Relatório de Curva ABC de Giro de Estoque;</li>
                                                </ol>
                                            </div>

                                            <div class="col-sm">
                                                <ol start="33">
                                                    <li class="wow fadeInDown" data-wow-delay="0.2s"> Relatório de Entrada Período, Relatório de Entradas x Saídas;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Relatório de Itens Parados;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6"> Relatório de Itens Cadastrados por Tipo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"> Relatório de Movimentação de Estoque;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.0s"> Relatório de Posição de Estoque;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"> Relatório de Razão Movimentação;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"> Imprimir Relatório de Inventário de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"> Imprimir Guia de Movimentação de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.0s"> Imprimir Termo de Responsabilidade;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.3s"> Imprimir Termo de Transferência de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.6s"> Imprimir Termo de Doação de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.9s"> Consulta de Baixas (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.0s"> Consulta de Doação (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.3s"> Consulta de Entradas;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.6s"> Consulta de Fornecedores;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.9s"> Consulta de Requisições;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.0s"> Consulta de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.3s"> Migrar Dados Material de Consumo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.6s"> Consultar Migração de Material de Consumo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.9s"> Gerar Fechamento Almoxarifado;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="5.0s"> Gerar Fechamento Patrimônio;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="5.3s"> Inventário de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="5.6s"> Entrada de Inventário de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="5.9s"> Listar Pendências de Inventário;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="6.0s"> Enviar Arquivo de Implantação de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="6.3s"> Ler Planilha de Migração de bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="6.6s"> Listar Pendências de Planilha de Migração de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="6.9s"> Listar Relatório de Resultado de Migração de Bens.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Gestor Administrativo</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <img class="img-fluid" width="150" src="imagens/Figuraa10.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É aquele que acompanha a movimentação de materiais e bens nos centros de custos, enxergando as atividades efetuadas pelos requisitantes, almoxarifes e gestores patrimoniais, e coordenando os inventários físicos por intermédio do sistema. As permissões correspondentes a este perfil são:</p>

                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-sm">
                                                <ol>
                                                    <li class="wow fadeInDown" data-wow-delay="0.0s"> Atender Requisição de Almoxarifado;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Baixa (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"> Devolução;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s">Doação (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.0s"> Requisitar Material (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"> Entrada por Registro de Preço;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"> Entrada por Cotação Eletrônica;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"> Entrada por Nota Fiscal;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.0s"> Consultar Notas Fiscais Salvas;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.3s"> Solicitar Cancelamento de Nota Fiscal;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.6s"> Requisição de Bens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.9s"> Solicitar Cadastro de Material no Catálogo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.0s"> Cadastrar Material no SIGA/SGBM;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.3s"> Cadastrar/Pesquisar Coordenador Jurídico;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.6s"> Relatório de 10 Itens;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.9s"> Relatório de Consumo Geral do Período;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.0s"> Relatório de Consumo por Setor;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.3s"> Relatório de Consumo por Categoria;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.6s"> Relatório de Curva ABC de Estoque;</li>
                                                </ol>
                                            </div>

                                            <div class="col-sm">
                                                <ol start="20">
                                                    <li class="wow fadeInDown" data-wow-delay="0.0s"> Relatório de Curva ABC de Giro de Estoque;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Relatório de Entrada Período;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"> Relatório de Entradas x Saídas;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"> Relatório de Itens Parados;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.0s"> Relatório de Itens Cadastrados por Tipo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"> Relatório de Movimentação de Estoque;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"> Relatório de Posição de Estoque;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"> Relatório de Razão Movimentação; </li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.0s"> Consulta de Baixas (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.3s"> Consulta de Doação (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.6s"> Consulta de Entradas;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.9s"> Consulta de Fornecedores;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.0s"> Consulta de Requisições;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.3s"> Consulta de Bens; </li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.6s"> Migrar Dados (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="3.9s"> Consultar Migração (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.0s"> Gerar Fechamento Almoxarifado;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.3s"> Gerar Inventário (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="4.6s"> Gerenciar Pessoas do Inventário (Consumo).</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>Gestor Financeiro</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <img class="img-fluid" width="70" src="imagens/Figuraa11.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É aquele que acompanha a movimentação de materiais e bens nos centros de custos, aprovando e validando operações de cancelamento de notas, fechamentos mensais, assim como retirando relatórios do sistema para conciliações e fechamentos financeiros do almoxarifado e patrimônio. As permissões correspondentes a este perfil são:</p>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm">
                                                <ol>
                                                    <li class="wow fadeInDown" data-wow-delay="0.0s"> Validar Movimentos de Bens (Validação Financeiro);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Baixa (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"> Devolução;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s">Doação (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.0s"> Entrada por Registro de Preço;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"> Entrada por Cotação Eletrônica;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"> Entrada por Nota Fiscal;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"> Consultar Notas Fiscais Salvas;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.0s"> Autorizar Cancelamento de Nota Fiscal;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.3s"> Solicitar Cadastro de Material no Catálogo;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.6s"> Cadastrar Material no SIGA/SGBM;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.9s"> Relatório de 10 Itens;</li>
                                                </ol>
                                            </div>

                                            <div class="col-sm">
                                                <ol start="13">
                                                    <li class="wow fadeInDown" data-wow-delay="0.0s"> Relatório de Consumo por Categoria;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Gerenciar Inventário (Consumo);</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"> Gerar Fechamento Almoxarifado;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"> Implantação de Bens > Entrada de Inventário;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.0s"> Implantação de Bens > Pendências de Inventário;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"> Implantação de Bens > Relatório de Resultado de Migração;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"> Reavaliação > Cadastrar; </li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"> Reavaliação > Pesquisar;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.0s"> Redução ao Vlr Recuperável > Cadastrar;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.3s"> Redução ao Vlr Recuperável > Pesquisar.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item06">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        <strong>Requisitante</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <img class="img-fluid" width="90" src="imagens/Figuraa12.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É aquele que solicita ao almoxarifado material de consumo ou material permanente. O SIGA/SGBM foi construído para que tais usuários façam seus pedidos de material por intermédio da rede de computadores possibilitando maior agilidade e controle e evitando a manipulação desnecessária de papel.</p>
                                            </div>
                                        </div>

                                        <p>Os requisitantes, limitam-se a fazer o pedido de materiais e não enxergam a quantidade de saldo no almoxarifado. O requisitante está vinculado a um único Centro de Custo, ou seja, cada setor do órgão deve ter um ou dois requisitantes para que através do computador façam os seus pedidos. As permissões correspondentes a este perfil são:</p>


                                        <ol>
                                            <li class="wow fadeInDown" data-wow-delay="0.0s"> Requisitar Material de Consumo (vários setores); </li>
                                            <li class="wow fadeInDown" data-wow-delay="0.3s"> Requisitar Bens (vários setores);</li>
                                            <li class="wow fadeInDown" data-wow-delay="0.6s"> Consultar Requisições de Material de Consumo.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item07">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                        <strong>Requisitante Multisetorial</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <img class="img-fluid" width="150" src="imagens/Figuraa13.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É aquele que solicita materiais ou bens para mais de um Centro de Custo, isso deve-se a necessidade de alguns órgãos que abastecem células descentralizadas geograficamente, geralmente localizadas no interior do Estado, e efetuam tal distribuição para não acumularem no Almoxarife/Gestor Patrimonial o atendimento dessas demandas e assim ter maior celeridade. As permissões correspondentes a este perfil são:</p>

                                            </div>
                                        </div>


                                        <ol>
                                            <li class="wow fadeInDown" data-wow-delay="0.0s"> Requisitar Material de Consumo (vários setores); </li>
                                            <li class="wow fadeInDown" data-wow-delay="0.3s"> Requisitar Bens (vários setores);</li>
                                            <li class="wow fadeInDown" data-wow-delay="0.6s"> Consultar Requisições de Material de Consumo.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item08">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                        <strong>Validador</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="Item08" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <img class="img-fluid" width="150" src="imagens/Figuraa14.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>
                                            </div>


                                            <div class="col-10">
                                                <p>É aquele que verifica se os processos de movimentação patrimonial estão de acordo com a legislação vigente e liberam no sistema para que as doações de bens sigam seu trâmite de aprovação. AS permissões correspondentes a este perfil são:</p>
                                            </div>
                                        </div>

                                        <ol>
                                            <li class="wow fadeInDown" data-wow-delay="0.0s"> Validação de doações de Bens; </li>
                                            <li class="wow fadeInDown" data-wow-delay="0.3s"> Reversão de Status do Bem.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br><br>
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Uma vez conhecidos os perfis de acesso ao SIGA/SGBM a solicitação de acesso deverá ser registrada no Sistema de Solicitação de Acesso - SSA, para que seja diferida pela Seplag. Vale ressaltar que o titular do órgão e entidade será quem solicitará o acesso por intermédio do SSA.</p>
                            </div>
                        </div>

                        <br>
                        <p>O acesso ao ser diferido, se dará por intermédio do "GUARDIÃO" que é um sistema corporativo que controla o acesso de todos os sistemas corporativos da SEPLAG.
                            <br><br><strong>O registro da solicitação no SSA deverá conter as seguintes informações:</strong>
                        </p>

                        <ul class="none">
                            <li class="wow fadeInDown" data-wow-delay="0.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Nome Completo</strong>: Informação obrigatória para identificação do usuário; </li>
                            <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>CPF Nº</strong>: Informação obrigatória no GUARDIÃO que funciona como código de individualização do usuário;</li>
                            <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>E-mail</strong>: O e-mail deve ser funcional (.ce.gov.br) outras terminações serão indeferidas;</li>
                            <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Telefone</strong>: Ramal ou telefone para facilitar a localização pelo setor de atendimento, caso seja necessário;</li>
                            <li class="wow fadeInDown" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Setor no organograma</strong>: Centro de Custo onde serão alocadas as despesas de materiais de consumo e a localização dos bens;</li>
                            <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Perfil</strong>: Um dos perfis acima identificados conforme a característica do usuário.</li>
                        </ul>

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
                        <h4 class="wow fadeInLeft" data-wow-delay="0.3s">O usuário solicitante receberá sua senha pelo e-mail informado e poderá acessar o SIGA/SGBM imediatamente.</h4>
                        <h4 class="wow fadeInLeft" data-wow-delay="0.6s">Deve ser utilizado preferencialmente o navegador Mozila Firefox e o acesso ocorrerá inicialmente por intermédio do site da Seplag conforme figura abaixo, mas o usuário poderá colocar o endereço no "Favoritos" do navegador: </h4>
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section>
        <!--INÍCIO CAIXA CINZA -->

        <div class="row">
            <!-- Begin row -->
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <!-- Begin col-md-10 -->
                <div class="page-title Texto">

                    <br><br><!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                            <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                        </a>
                    </div>

                    <!-- Imagem 01 - MODAL -->
                    <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                    <p class="TituloFigura"><strong>Figura 1</strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 01 - End --><br>

                    <br>
                    <center> <i class="fa fa-arrow-down CorVerdeClaroEstado fa-3x"></i></center><br>

                    <div class="text-center">
                        <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                            <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                        </a>
                    </div>

                    <!-- Imagem 02 - MODAL -->
                    <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                    <p class="TituloFigura"><strong>Figura 02</strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 02 - End --><br>

                    <br>
                    <center> <i class="fa fa-arrow-down CorVerdeClaroEstado fa-3x"></i></center><br>

                    <div class="text-center">
                        <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                        </a>
                    </div>

                    <!-- Imagem 03 - MODAL -->
                    <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                    <p class="TituloFigura"><strong>Figura 03</strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 03 - End --><br>

                    <br>
                    <center> <i class="fa fa-arrow-down CorVerdeClaroEstado fa-3x"></i></center><br>

                    <div class="text-center">
                        <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                            <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                        </a>
                    </div>


                    <!-- Imagem 04 - MODAL -->
                    <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                    <p class="TituloFigura"><strong>Figura 04</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 04 - End --><br>

                    <br>
                    <center> <i class="fa fa-arrow-down CorVerdeClaroEstado fa-3x"></i></center><br>

                    <div class="text-center">
                        <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                            <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                        </a>
                    </div>


                    <!-- Imagem 05 - MODAL -->
                    <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                    <p class="TituloFigura"><strong>Figura 05</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 05 - End --><br>

                    <br>
                    <div class="FiqueAtentoCaixa">
                        <p class="FiqueAtentoTitulo"> Fique Atento</p>
                        <div class="FiqueAtentoTexto">
                            <p>O SIGA/SGBM até o momento está sendo submetido a uma mudança de versão para que tenha melhor desempenho, em função disso, haverão dois ícones no grupo GESTÃO de PROCESSOS:</p>
                            <ol>
                                <li> SIGA / SGBM V2 é a versão mais recente e com um duplo clique acessará exclusivamente ao módulo de Almoxarifado.</li>
                                <li> SIGA /SGBM é a versão original e com um duplo clique acessará as funcionalidades de controle patrimonial.</li>
                            </ol>
                        </div>
                    </div><br>

                    <br>
                    <p><strong>Tela de Entrada do SIGA/SGBM V2 - Módulo de Almoxarifado</strong></p>
                    <hr>

                    <br>
                    <div class="text-center">
                        <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                            <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                        </a>
                    </div>

                    <!-- Imagem 06 - MODAL -->
                    <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                    <p class="TituloFigura"><strong>Figura 06</strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 06 - End --><br>

                    <br>
                    <p><strong>Tela de Entrada do SIGA/SGBM Versão Original - Módulo de Controle Patrimonial</strong></p>
                    <hr>

                    <br>
                    <div class="text-center">
                        <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                        </a>
                    </div>

                    <!-- Imagem 07 - MODAL -->
                    <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                    <p class="TituloFigura"><strong>Figura 07</strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 07 - End -->











                    <!-- SCRIPT LIGHTBOX -->
                    <script>
                        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                            event.preventDefault();
                            $(this).ekkoLightbox();
                        });
                    </script>

                </div> <!-- End page-title -->
            </div> <!-- End page-title -->

            <div class="col-md-1"></div>
        </div> <!-- End row -->

        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
            <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
        </div>

    </div> <!-- End main-content -->


    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>