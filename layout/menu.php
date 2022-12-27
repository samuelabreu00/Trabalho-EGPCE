<style>
    .MenuTopico {
        color: #274F23 !important;
        font-weight: bold !important;
    }

    #menuNumero {
        color: #274F23;
        font-weight: bold !important;
        font-size: 1.2rem;
        padding-right: 0.3rem;
        margin-left: 0;
        margin-right: 0.4rem;
        font-family: "Raleway";
        right: 0.8rem;
        margin-top: -0.23rem;
    }

    .ativo {
        background-color: #e1ebe3;
    }
</style>

<Div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active ps ps--active-y">
            <div class="m-4">
                <!-- <a href="index.php">
                    <img class="img-fluid" src="https://atilasilvalima.a2hosted.com/projects/EGPCE/Cedis/cdn/imagens/egpce.png" alt="Logo EGPCE">
                </a> -->
                <img class="img-fluid" src="https://www.egp.ce.gov.br/wp-content/uploads/sites/8/2021/06/logo-egpce-250x170-1.png" alt="Logo EGPCE">
            </div>
            <div class="sidebar-menu">

                <ul class="menu ms-3">

                    <li class="sidebar-item">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="index.php" class="MenuTopico sidebar-link <?php if ($page == 'index') {echo 'ativo';} ?>">
                                <div id="menuNumero">Apresentação</div>
                            </a>
                        </div>
                    </li>

                    <li class="sidebar-item sidebar-item1 has-sub">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="Topico01.php" class="MenuTopico sidebar-link <?php if ($page == 'Topico01') {echo 'ativo';} ?>">
                                <div id="menuNumero">01 </div>Orientações Para a Implantação do sistema SIGA/SGBM
                            </a>

                            <ul class="sublinks">
                                <li class="sidebar-item"><a href="#T1one" class="sidebar-sub">1.1 A Certificação de Fornecedores como um elo nas Cadeias de Suprimentos</a></li>
                                <li class="sidebar-item"><a href="#T1two" class="sidebar-sub">1.2 As Fases e Etapas de Implantação do SIGA/SGBM</a></li>
                                <li class="sidebar-item"><a href="#T1three" class="sidebar-sub">1.3 Cadastrar Organograma</a></li>
                                <li class="sidebar-item"><a href="#T1four" class="sidebar-sub">1.4 Solicitar Acesso ao Sistema</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-item sidebar-item1  has-sub has-sub2_1">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="Topico02.php" class="MenuTopico sidebar-link <?php if ($page == 'Topico02') {echo 'ativo';} ?>">
                                <div id="menuNumero">02 </div>Processo de Migração <br>de Dados
                            </a>

                            <ul class="sublinks sublinks1">
                                <li class="sidebar-item"> <a href="#T2one" class="sidebar-sub">2.1 Cadastramento de Itens de Material de Consumo e Material Permanente</a></li>
                                <li class="sidebar-item"><a href="#T2two" class="sidebar-sub">2.2 Cadastrar os Responsáveis Por Setor e Responsáveis Por Bem</a></li>
                                <li class="sidebar-item"><a href="#T2three" class="sidebar-sub">2.3 Realização Do Inventário E Conciliação Do Saldo Físico E Financeiro Com O Registro Escritural</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-item sidebar-item1  has-sub ">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="Topico03.php" class="MenuTopico sidebar-link <?php if ($page == 'Topico03') {echo 'ativo';} ?>">
                                <div id="menuNumero">03 </div>Recebimento de <br>Novos Bens no SIGA/SGBM
                            </a>

                            <ul class="sublinks">
                                <li class="sidebar-item"><a href="#T3one" class="sidebar-sub">3.1 Recebimento Por Ordem De Compra</a></li>
                                <li class="sidebar-item"><a href="#T3two" class="sidebar-sub">3.2 Recebimento Por Nota Fiscal</a></li>
                                <li class="sidebar-item"><a href="#T3three" class="sidebar-sub">3.3 Consulta De Notas Fiscais Salvas</a></li>
                                <li class="sidebar-item"><a href="#T3four" class="sidebar-sub">3.4 Conferência Das Entradas</a></li>
                                 <li class="sidebar-item"><a href="#T3five" class="sidebar-sub">3.5 Solicitação de Cancelamento de Nota Fiscal</a></li>
                                 <li class="sidebar-item"><a href="#T3six" class="sidebar-sub">3.6 Autorização de Cancelamento de Nota Fiscal</a></li>
                                 <li class="sidebar-item"><a href="#T3seven" class="sidebar-sub">3.7 Cadastramento De Item De Material Permanente</a></li>
                                 <li class="sidebar-item"><a href="#T3eight" class="sidebar-sub">3.8 Cadastramento de Item de Material de Consumo</a></li>
                                 <li class="sidebar-item"><a href="#T3nine" class="sidebar-sub">3.9 Alterar Classificação De Item De Material Permanente</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-item sidebar-item1  has-sub">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="Topico04.php" class="MenuTopico sidebar-link <?php if ($page == 'Topico04') {echo 'ativo';} ?>">
                                <div id="menuNumero">04 </div>Recebimento de <br>Novos Bens no SIGA/SGBM
                            </a>

                            <ul class="sublinks">
                                 <li class="sidebar-item"><a href="#T4one" class="sidebar-sub">4.1 Recebimento Por Ordem De Compra</a></li>
                                 <li class="sidebar-item"><a href="#T4two" class="sidebar-sub">4.2 Recebimento Por Nota Fiscal</a></li>
                                 <li class="sidebar-item"><a href="#T4three" class="sidebar-sub">4.3 Consulta De Notas Fiscais Salvas</a></li>
                                 <li class="sidebar-item"><a href="#T4four" class="sidebar-sub">4.4 Conferência Das Entradas</a></li>
                                 <li class="sidebar-item"><a href="#T4five" class="sidebar-sub">4.5 Solicitação de Cancelamento de Nota Fiscal</a></li>
                                 <li class="sidebar-item"><a href="#T4six" class="sidebar-sub">4.6 Autorização de Cancelamento de Nota Fiscal</a></li>
                                 <li class="sidebar-item"><a href="#T4seven" class="sidebar-sub">4.7 Cadastramento De Item De Material Permanente</a></li>
                                 <li class="sidebar-item"><a href="#T4eight" class="sidebar-sub">4.8 Cadastramento de Item de Material de Consumo</a></li>
                                 <li class="sidebar-item"><a href="#T4nine" class="sidebar-sub">4.9 Alterar Classificação De Item De Material Permanente</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-item sidebar-item1  has-sub">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="Topico05.php" class="MenuTopico sidebar-link <?php if ($page == 'Topico05') {echo 'ativo';} ?>">
                                <div id="menuNumero">05 </div>Manutenção de Estoque no SIGA/SGBM
                            </a>

                            <ul class="sublinks">
                                 <li class="sidebar-item"><a href="#T5one" class="sidebar-sub">5.1 Doações de Material de Consumo</a></li>
                                 <li class="sidebar-item"><a href="#T5two" class="sidebar-sub">5.2 Receber Doações de Material de Consumo</a></li>
                                 <li class="sidebar-item"><a href="#T5three" class="sidebar-sub">5.3 Baixar Material Do Estoque</a></li>
                                 <li class="sidebar-item"><a href="#T5four" class="sidebar-sub">5.4 Atualizar Cadastro de Material</a></li>
                                 <li class="sidebar-item"><a href="#T5five" class="sidebar-sub">5.5 Solicitar Inscrisão de Material no Catálogo</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-item sidebar-item1  has-sub" >
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="Topico06.php" class="MenuTopico sidebar-link <?php if ($page == 'Topico06') {echo 'ativo';} ?>">
                                <div id="menuNumero">06 </div>movimentação Externa de bens no SIGA/SGBM
                            </a>

                            <ul class="sublinks">
                                 <li class="sidebar-item"><a href="#T6one" class="sidebar-sub">6.1 Consultar Operações e Movimentações de Estoque</a></li>
                                 <li class="sidebar-item"><a href="#T6two" class="sidebar-sub">6.2 Alterar o “Status” do Bem</a></li>
                                 <li class="sidebar-item"><a href="#T6three" class="sidebar-sub">6.3 Cadastrar um Processo de Doação</a></li>
                                 <li class="sidebar-item"><a href="#T6four" class="sidebar-sub">6.4 Consultar ou Emitir um Decreto de Doação</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-item">
                        <a href="Referencias.php" class="MenuTopico sidebar-link <?php if ($page == 'Referencias') {echo 'ativo';} ?>">Referências</a>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>




    <!-- SCRIPT - JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('ul li a').click(function() {
                $('li a').removeClass("ativo");
                $(this).addClass("ativo");
            });
        });
    </script>