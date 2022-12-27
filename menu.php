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
                            <a href="index.php" class="MenuTopico sidebar-link <?php if ($page == 'index') {echo 'ativo';} ?>"><div id="menuNumero">Apresentação</div> </a>
                        </div>                        
                    </li>

                    <li class="sidebar-item has-sub">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="#.php" class="MenuTopico sidebar-link <?php if ($page == 'Topico01') { echo 'ativo'; } ?>">
                            <div id="menuNumero"> 01 </div> Orientações Para a Implantação do sistema SIGA/SGBM
                            </a>
                            <ul class="submenu">
                                <li class="sidebar-item">
                                    <a href="Topico01.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico01') { echo 'ativo'; } ?>">
                                    <span id="menuNumero"> 01 - Início</span>
                                    </a>
                                </li>                                
                                <li class="sidebar-item">
                                    <a href="Topico01.2.php#SubTopico1.2" class="sidebar-sub <?php if ($page == 'Topico01') { echo 'ativo'; } ?>">
                                    <span id="menuNumero"> 01.2 - As Fases e Etapas de Implantação do SIGA/SGBM</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico01.3.php#SubTopico1.3" class="sidebar-sub <?php if ($page == 'Topico01') { echo 'ativo'; } ?>">
                                    <span id="menuNumero"> 01.3 - Cadastrar Organograma</span>
                                    </a>                                    
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico01.4.php#SubTopico1.4" class="sidebar-sub <?php if ($page == 'Topico01') { echo 'ativo'; } ?>">
                                    <span id="menuNumero"> 01.4 - Solicitar Acesso ao Sistema</span>
                                    </a>    
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-item has-sub">
                        <div class="bd-callout-menu bd-callout-success-menu">

                            <a href="#" class="MenuTopico sidebar-link <?php if ($page == 'Topico02') { echo 'ativo'; } ?>"><div id="menuNumero"> 02 </div> Processo de Migração <br>de Dados</a>

                            <ul class="submenu">
                            <li class="sidebar-item">
                                    <a href="Topico02.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico02') { echo 'ativo'; } ?>">
                                    <span id="menuNumero"> 02 - Início</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico02.1.php#SubTopico2.1" class="sidebar-sub <?php if ($page == 'Topico02.1') { echo 'ativo'; } ?>">                                    
                                        <span id="menuNumero"> 02.1 - Cadastramento de Itens de Material de Consumo e Material Permanente</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico02.2.php#SubTopico2.2" class="sidebar-sub <?php if ($page == 'Topico02.2') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">02.2 - Cadastrar os Responsáveis Por Setor e Responsáveis Por Bem</span>                                    
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico02.3.php#SubTopico2.3" class="sidebar-sub <?php if ($page == 'Topico02.3') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">02.3 - Realização Do Inventário E Conciliação Do Saldo Físico E Financeiro Com O Registro Escritural</span>                                    
                                    </a>
                                </li>                            
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-item has-sub">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="#" class="MenuTopico sidebar-link <?php if ($page == 'Topico03') { echo 'ativo'; } ?>"> <div id="menuNumero"> 03  </div>Recebimento de <br>Novos Bens no SIGA/SGBM</a>

                            <ul class="submenu">
                            <li class="sidebar-item">
                                    <a href="Topico03.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico03') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">Início</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.1.php#SubTopico3.1" class="sidebar-sub <?php if ($page == 'Topico03.1') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">03.1 - Recebimento Por Ordem De Compra</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.2.php#SubTopico3.2" class="sidebar-sub <?php if ($page == 'Topico03.2') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">03.2 - Recebimento Por Nota Fiscal</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.3.php#SubTopico3.3" class="sidebar-sub <?php if ($page == 'Topico03.3') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">03.3 - Consulta De Notas Fiscais Salvas</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.4.php#SubTopico3.4" class="sidebar-sub <?php if ($page == 'Topico03.4') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">03.4 - Conferência Das Entradas</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.5.php#SubTopico3.5" class="sidebar-sub <?php if ($page == 'Topico03.5') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">03.5 - Solicitação de Cancelamento de Nota Fiscal</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.6.php#SubTopico3.6" class="sidebar-sub <?php if ($page == 'Topico03.6') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">03.6 - Autorização de Cancelamento de Nota Fiscal</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.7.php#SubTopico3.7" class="sidebar-sub <?php if ($page == 'Topico03.7') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">03.7 - Cadastramento De Item De Material Permanente</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.8.php#SubTopico3.8" class="sidebar-sub <?php if ($page == 'Topico03.8') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">03.8 - Cadastramento de Item de Material de Consumo</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.9.php#SubTopico3.9" class="sidebar-sub <?php if ($page == 'Topico03.9') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">03.9 - Alterar Classificação De Item De Material Permanente</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-item has-sub ">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="#" class="MenuTopico sidebar-link <?php if ($page == 'Topico04') { echo 'ativo'; } ?>">04 - Distribuição de Materiais no SIGA/SGBM</a>

                            <ul class="submenu">
                                <li class="sidebar-item">
                                    <a href="Topico04.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico04') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">Início</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico04.2.php#SubTopico4.2" class="sidebar-sub <?php if ($page == 'Topico04.2') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">04.2 - Atender Requisição de Bem Móvel</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico04.3.php#SubTopico4.3" class="sidebar-sub <?php if ($page == 'Topico04.3') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">04.3 - Atender Requisição de Material de Consumo</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico04.4.php#SubTopico4.4" class="sidebar-sub <?php if ($page == 'Topico04.4') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">04.4 - Devolver Material</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-item has-sub">
                        <div class="bd-callout-menu bd-callout-success-menu">
                        
                            <a href="#" class="MenuTopico sidebar-link <?php if ($page == 'Topico05') { echo 'ativo'; } ?>">05 - Manutenção de Estoque no SIGA/SGBM</a>

                            <ul class="submenu">
                                <li class="sidebar-item">
                                    <a href="Topico05.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico05') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">Início</span>
                                    </a>
                                </li>
                                
                                <li class="sidebar-item">
                                    <a href="Topico05.2.php#SubTopico5.2" class="sidebar-sub <?php if ($page == 'Topico05.2') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">05.2 - Movimento Interno Coletivo Setor para Setor</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico05.3.php#SubTopico5.3" class="sidebar-sub <?php if ($page == 'Topico05.3') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">05.3 - Emitir o Termo de Responsabilidade</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico05.4.php#SubTopico5.4" class="sidebar-sub <?php if ($page == 'Topico05.4') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">05.4 - Cadastrar Responsáveis por Bens</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico05.5.php#SubTopico5.5" class="sidebar-sub <?php if ($page == 'Topico05.5') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">05.5 - Autorização da Saída Temporária</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-item has-sub">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="#" class="MenuTopico sidebar-link" <?php if ($page == 'Topico06') { echo 'ativo'; } ?>>06 - movimentação Externa de bens no SIGA/SGBM</a>

                            <ul class="submenu">
                            <li class="sidebar-item">
                                    <a href="Topico06.php#Inicio" class="sidebar-sub <?php if ($page == 'Topico06') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">Início</span>
                                    </a>
                                </li>
                                
                                <li class="sidebar-item">
                                    <a href="Topico06.2.php#SubTopico6.2" class="sidebar-sub <?php if ($page == 'Topico06.2') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">06.2 - Alterar o “Status” do Bem</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico06.3.php#SubTopico6.3" class="sidebar-sub <?php if ($page == 'Topico06.3') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">06.3 - Cadastrar um Processo de Doação</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico06.4.php#SubTopico6.4" class="sidebar-sub <?php if ($page == 'Topico06.4') { echo 'ativo'; } ?>">
                                        <span id="menuNumero">06.4 - Consultar ou Emitir um Decreto de Doação</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>

                                           

                    
                    <li class="sidebar-item">
                        <a href="Referencias.php" class="MenuTopico sidebar-link <?php if ($page == 'Referencias') { echo 'ativo'; } ?>">Referências</a>
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
