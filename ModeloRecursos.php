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
                <div class="page-title">
                    
                <hr>
                    <!-- Título -->
                    <h2 class="Titulo">Titulo</h2>
                <hr>
                    <!-- Sub Título -->
                    <p class="SubTitulo">Sub_Titulo</p>
                <hr>
                    <!-- Sub Sub Título -->
                    <p class="SubSubTitulo">Sub_Sub_Titulo</p>
                <hr>
                    <!-- Texto -->
                    <p class="Texto">Texto</p>
                <hr>
                <!-- Importante -->
                <div class="ImportanteCaixa">
                    <p class="ImportanteTitulo"> Importante</p>
                    <p class="ImportanteTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <hr>
                <!-- Titulo Figura -->
                <div class="text-center">
                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                        <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                    </a>
                    <p class="FonteFigura">Fonte: Fonte da imagem fica aqui</p>
                </div>

                <!-- Imagem 01 - MODAL -->
                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer text-center">
                                <p class="TituloFigura"><strong>Figura 1:</strong> Nome da figura</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Imagem 01 - End -->
                <hr>
                <!-- Fique Atento -->
                <div class="FiqueAtentoCaixa">
                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                    <p class="FiqueAtentoTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <hr>
                <!-- Curiosidade -->
                <div class="CuriosidadeCaixa">
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <hr>
                <!-- Nota de Rodapé -->
                <p class="NotaDeRodape"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <hr>
                <!-- Atividade -->
                <div class="AtividadeCaixa">
                    <p class="AtividadeTitulo"> Atividade</p>
                    <p class="AtividadeTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <hr>
                <!-- Saiba Mais -->
                <div class="SaibaMaisCaixa">
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>

                ######################################

                <!-- Marcadores -->
                <p><i class="fa fa-dot-circle CorAzulEstado01"></i> <strong>Conflito sentido</strong> – as partes envolvidas são afetadas emocionalmente pela situação de conflito.</p>

                <p class="Texto"><i class="fa fa-arrow-alt-circle-right CorAzulEstado01"></i> <strong>Reação conflitante</strong> – há uma imposição de um interesse em detrimento dos interesses da outra parte, não é considerado a opinião dos outros envolvidos.</p>

                <p class="Texto"><i class="fa fa-check-circle CorAzulEstado01"></i> <strong>Reação concorrente</strong> – a parte que sofreu imposição aceita, mas busca uma forma de revidar no futuro.</p>

                ######################################

                <!-- CITAÇÃO -->
                <div class="bd-callout bd-callout-success">
                    <p class="Texto">
                    <em>Negociação de conflitos é uma técnica utilizada na gestão de pessoas que visa levar dois ou mais colaboradores da organização a alinhar seus objetivos, expectativas e atitudes para que voltem a trabalhar de forma harmoniosa e colaborativa, depois das discussões, radicalmente sobre algum aspecto do negócio.<p class="text-end">(Paulillo, Júlio)</p></em>
                    </p>
                </div>
                    
                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });                    
                </script>

                </div> <!-- CLASS PAGE TITLE FIM -->
            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
