<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'index';
include('layout/header.php');
?>

<?php
// HEADER
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

                        <h2 class="Titulo">Apresentação</h2>
                        <hr>

                        <br>

                        <center><img src="imagens/banner.png" alt="Apresentação do curso"></center>

                        <br><p class="wow fadeIn" data-wow-delay="0.6s" style="font-size: 2em;">Olá! Seja bem-vindo ao Módulo II do curso Gestão de Suprimentos (Material de Consumo)! Bons estudos!</p>
                        
                        <p>A Gestão de Suprimentos engloba uma sequência de operações que começa com a certificação de fornecedores, passa pela aquisição, recebimento, armazenamento, distribuição, consumo, e termina com o descarte final de resíduos. Geralmente, as despesas administrativas com suprimentos nas organizações só é superada pelas despesas com pessoal, desta forma, otimizar a Gestão de Suprimentos é também uma maneira de fortalecer a sobrevivência financeira de uma organização.</p>
                        <p>De modo geral, a logística de suprimentos sempre foi uma área desafiadora, quer seja pela quantidade de itens necessários para produção de produtos ou prestação de serviços, quer seja pela incessante busca de estratégias para reduzir os níveis de estoque, sem comprometer a qualidade e a produtividade. Esse assunto é atualmente uma preocupação fundamental dos gestores públicos comprometidos com a eﬁciência e eﬁcácia, e para estudiosos dentro do governo.</p>
                        <p>A Gestão de Suprimentos é um dos tópicos que está exigindo estudos para permitir aos muitos entes públicos a possibilidade de implantação de sistemas para melhoria do seu desempenho na Gestão Fiscal. Configura-se como um processo importante que deve ser incorporado na Administração Pública para que os governos possam liberar recursos para melhoria de sua capacidade de investimentos; racionalizar gastos correntes e realizar uma gestão mais eﬁciente.</p>
                        <p>Nas últimas décadas, o Governo do Estado do Ceará vem realizando um esforço no desenvolvimento de novos sistemas informatizados, e capacitação de seus agentes públicos para melhorar a Gestão de Suprimentos, tendo em vista que esse é um tema central que cada vez se torna mais importante na Gestão Pública.</p>
                        <p>A Secretaria do Planejamento e Gestão – SEPLAG, em parceria com a Escola de Gestão Pública do Estado do Ceará - EGPCE, apresentam neste curso: a reunião de aspectos teóricos; procedimentos práticos e legislação - até então desenvolvidos com relação à Gestão de Suprimentos e seus sistemas informatizados de controle - de forma a oferecer a atualização permanente aos órgãos e entidades do Poder Executivo Estadual.</p>

                        <br>

                        <h2 class="Titulo">Objetivo</h2>
                        <hr>

                        <br>

                        <p>Compreender as técnicas usuais de gestão de suprimentos, assim como a Legislação vigente e sua aplicabilidade no cotidiano operacional da Administração Pública Estadual.</p>



                        <br><br><!-- SCRIPT LIGHTBOX -->
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
                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>