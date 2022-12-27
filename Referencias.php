<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
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
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <h2 class="Titulo">REFERÊNCIAS</h2>
                        <hr>

                        <div class="bd-callout bd-callout-success">
                            <p>

                                ANDRADE, Nilton de Aquino. Contabilidade pública na gestão municipal. 5. ed. São Paulo: Atlas, 2013. <br>
                                <br>BRASIL. Lei nº 4.320, de 17 de março de 1964. Brasília, DF, 1964. Disponível em: <a href="http://www.planalto.gov.br/ccivil_03/leis/L4320.htm" target="_blank" rel="noopener noreferrer">http://www.planalto.gov.br/ccivil_03/leis/L4320.htm</a>. <br>
                                <br>BRASIL. Lei nº 8.429, de 02 de junho de 1992. Brasília, DF, 1992. Disponível em: <a href="https://www.planalto.gov.br/ccivil_03/leis/l8429.htm" target="_blank" rel="noopener noreferrer">https://www.planalto.gov.br/ccivil_03/leis/l8429.htm.</a> <br>
                                <br>BRASIL. Lei nº 8.666, de 21 de junho de 1993. Brasília, DF, 1993. Disponível em: <a href="http://www.planalto.gov.br/ccivil_03/leis/l8666cons.htm" target="_blank" rel="noopener noreferrer">http://www.planalto.gov.br/ccivil_03/leis/l8666cons.htm.</a> <br>
                                <br>BRASIL. Ministério da economia. Portaria nº 448, de 13 de setembro de 2002. Diário Oficial da República Federativa do Brasil, Poder Executivo, Brasília, DF, 17 set. 2002b. Disponível em: <a href="https://sistemas.sefaz.am.gov.br/cca/legislacao/Port_448_2002.pdf" target="_blank" rel="noopener noreferrer">https://sistemas.sefaz.am.gov.br/cca/legislacao/Port_448_2002.pdf</a> . <br>
                                <br>BRASIL. Ministério da economia, Secretaria do tesouro nacional. Manual de contabilidade aplicada ao setor público. 8. ed. Brasília, DF: STN, 2018. <br>
                                <br>CEARÁ. Assembleia Legislativa. Lei nº 9.809 de 18 de dezembro de 1973. Fortaleza, CE, 1973. Disponível em: <a href="http://www.mp.ce.gov.br/portal/pdf/CodConta.pdf" target="_blank" rel="noopener noreferrer">http://www.mp.ce.gov.br/portal/pdf/CodConta.pdf</a> <br>
                                <br>CEARÁ. Casa Civil. Decreto nº 27.786 de 02 de maio de 2005. Fortaleza, Ce, 2005. Disponível em: <a href="http://imagens.seplag.ce.gov.br/PDF/20050506/do20050506p01.pdf#page=1" target="_blank" rel="noopener noreferrer">http://imagens.seplag.ce.gov.br/PDF/20050506/do20050506p01.pdf#page=1</a> . <br>
                                <br>CEARÁ. Casa Civil. Decreto nº 31.549, de 13 de agosto de 2014. Fortaleza, Ce, 2014. Disponível em: <a href="http://imagens.seplag.ce.gov.br/PDF/20140818/do20140818p01.pdf#page=15" target="_blank" rel="noopener noreferrer">http://imagens.seplag.ce.gov.br/PDF/20140818/do20140818p01.pdf#page=15</a> . <br>
                                <br>CEARÁ. Casa Civil. Decreto Nº 32.564, de 26 de março de 2018. Fortaleza, Ce, 2018. Disponível em: <a href="http://imagens.seplag.ce.gov.br/PDF/20180328/do20180328p01.pdf#page=1" target="_blank" rel="noopener noreferrer">http://imagens.seplag.ce.gov.br/PDF/20180328/do20180328p01.pdf#page=1</a> . <br>
                                <br>CEARÁ. Tribunal de Contas. Patrimônio: definição, termos básicos e legislação correlata. Fortaleza: TCE. 2010. 296p (Série Coletânea TCE/CE, 9)
                                <br>DIAS, Marco Aurélio P. Administração de materiais: uma abordagem logística. 5 ed., São Paulo. Atlas, 2010. <br>
                                <br>DI PIETRO, Maria Sylvia Zanella. Direito Administrativo. 25. ed. São Paulo: Atlas, 2012. <br>
                                <br>MEIRELLES, Hely Lopes. Direito administrativo brasileiro. 42. ed. São Paulo: Malheiros, 2016. <br>
                                <br>POZO, Hamilton. Administração de recursos materiais e patrimoniais: uma abordagem logística. 6. ed. São Paulo: Atlas, 2020. <br>
                            </p>
                        </div>

                        <br><p>Parabéns, <?php echo $NomeUsuario ?>! Você concluiu o módulo 02 do curso <strong>Gestão de Suprimentos (Material de Consumo)</strong>. Agora você já pode responder a avaliação do módulo 01. Clique em “Realizar Avaliação”. Boa sorte e até o próximo módulo! </p>
                        






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
            </div> <!-- End row-->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico06.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="#" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realizar Avaliação </a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>