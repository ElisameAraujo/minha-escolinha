<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="#"><img src="assets/static/images/logo/logo.svg" alt="Logo" srcset=""></a>
                </div>
                <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                    <i class="fa-regular fa-sun"></i>
                    <div class="form-check form-switch fs-6">
                        <input class="form-check-input me-0" type="checkbox" id="toggle-dark">
                        <label class="form-check-label"></label>
                    </div>
                    <i class="fa-regular fa-moon"></i>
                </div>
                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="fa-solid fa-xmark"></i></a>
                </div>
            </div>
            <a href="{{config('app.url')}}" target="_blank">
                <button class="btn btn-outline-primary btn-sm w-100 mt-3" type="button">Ver Site <i class="fa-solid fa-arrow-up-right-from-square"></i></i></button>
            </a>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item {{ (request()->is('admin')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-grip-vertical"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title"><i class="fa-solid fa-person-running"></i> Gerenciar Atletas</li>

                <li class="sidebar-item {{ (request()->is('admin/atletas/adicionar-atleta')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-plus"></i>
                        <span>Adicionar Atleta</span>
                    </a>
                </li>
                
                <li class="sidebar-item {{ (request()->is('admin/atletas/todos-atletas')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-list-ul"></i>
                        <span>Todos os Atletas</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/atletas/categorias-jogadores')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-tags"></i>
                        <span>Categorias</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/atletas/carterinhas')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-regular fa-address-card"></i>
                        <span>Carterinhas</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/atletas/responsaveis')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-user-group"></i>
                        <span>Responsáveis</span>
                    </a>
                </li>

                <li class="sidebar-title"><i class="fa-solid fa-dumbbell"></i> Treinamentos</li>

                <li class="sidebar-item {{ (request()->is('admin/treinamentos/adicionar-treino')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-plus"></i>
                        <span>Adicionar Treino</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/treinamentos/todos-treinamentos')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-list-ul"></i>
                        <span>Lista de Treinos</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/treinamentos/tipos-de-treinamentos')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-weight-hanging"></i>
                        <span>Tipos de Treinamento</span>
                    </a>
                </li>

                <li class="sidebar-title"><i class="fa-solid fa-trophy"></i> Campeonatos</li>

                <li class="sidebar-item {{ (request()->is('admin/campeonatos/adicionar-campeonato')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-plus"></i>
                        <span>Adicionar Campeonato</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/campeonatos/adicionar-partida')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-plus"></i>
                        <span>Adicionar Partida</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/campeonatos/todas-partidas')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link" >
                        <i class="fa-solid fa-list-ul"></i>
                        <span>Todas Partidas</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/campeonatos/adicionar-partida')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-code-fork fa-rotate-270"></i>
                        <span>Fases de Campeonato</span>
                    </a>
                </li>

                <li class="sidebar-title"><i class="fa-solid fa-handshake-simple"></i> Amistosos</li>
                
                <li class="sidebar-item {{ (request()->is('admin/amistosos/adicionar-amistoso')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-plus"></i>
                        <span>Adicionar Partida</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/amistosos/todos-amistosos')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link" >
                        <i class="fa-solid fa-list-ul"></i>
                        <span>Todos Amistosos</span>
                    </a>
                </li>

                <li class="sidebar-title"><i class="fa-solid fa-medal"></i> Títulos</li>
                
                <li class="sidebar-item {{ (request()->is('admin/titulos/adicionar-titulo')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-plus"></i>
                        <span>Adicionar Título</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/titulos/todos-titulos')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link" >
                        <i class="fa-solid fa-list-ul"></i>
                        <span>Todos os Títulos</span>
                    </a>
                </li>
                
                <li class="sidebar-title"><i class="fa-solid fa-right-left"></i> Adversários</li>
                
                <li class="sidebar-item {{ (request()->is('admin/adversarios/todos-adversarios')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-list-ul"></i>
                        <span>Gerenciar Adversários</span>
                    </a>
                </li>

                <li class="sidebar-title"><i class="fa-regular fa-chart-bar"></i> Scouts</li>

                <li class="sidebar-item {{ (request()->is('admin/scouts/gols')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-futbol"></i>
                        <span>Gols</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/scouts/gols')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-meteor"></i>
                        <span>Assistências</span>
                    </a>
                </li>

                <li class="sidebar-title"><i class="fa-solid fa-plug"></i> Módulos</li>

                <!--== Módulo Blog ==-->
                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-blog"></i>
                        <span>Blog</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item {{ (request()->is('admin/modulos/blog/novo-post')) ? 'active' : '' }}">
                            <a href="#" class="submenu-link"><i class="fa-solid fa-plus"></i> Novo Post</a>
                        </li>

                        <li class="submenu-item {{ (request()->is('admin/modulos/blog/todos-posts')) ? 'active' : '' }}">
                            <a href="#" class="submenu-link"><i class="fa-solid fa-list-ul"></i> Todos os Posts</a>
                        </li>

                        <li class="submenu-item {{ (request()->is('admin/modulos/blog/categorias')) ? 'active' : '' }}">
                            <a href="#" class="submenu-link"><i class="fa-solid fa-tags"></i> Categorias</a>
                        </li>

                        <li class="submenu-item {{ (request()->is('admin/modulos/blog/comentarios')) ? 'active' : '' }}">
                            <a href="#" class="submenu-link"><i class="fa-solid fa-comment"></i> Comentários</a>
                        </li>
                    </ul>
                </li>

                <!--== Módulo Galeria de Fotos ==-->

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-camera-retro"></i>
                        <span>Galeria de Fotos</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item {{ (request()->is('admin/modulos/galeria-de-fotos/novo-album')) ? 'active' : '' }}">
                            <a href="#" class="submenu-link"><i class="fa-solid fa-plus"></i> Novo Álbum</a>
                        </li>

                        <li class="submenu-item {{ (request()->is('admin/modulos/galeria-de-fotos/todos-albuns')) ? 'active' : '' }}">
                            <a href="#" class="submenu-link"><i class="fa-solid fa-images"></i> Todos os Álbuns</a>
                        </li>

                    </ul>
                </li>

                <!--== Módulo Mensalidades ==-->

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-money-bill"></i>
                        <span>Mensalidades</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item {{ (request()->is('admin/modulos/mensalidades/gerenciar-valores')) ? 'active' : '' }}">
                            <a href="#" class="submenu-link"><i class="fa-solid fa-receipt"></i>Valores</a>
                        </li>

                        <li class="submenu-item {{ (request()->is('admin/modulos/mensalidades/bolsas')) ? 'active' : '' }}">
                            <a href="#" class="submenu-link"><i class="fa-solid fa-sack-dollar"></i>Bolsas</a>
                        </li>
                    </ul>
                </li>

                <!--== Módulo Rede Social ==-->

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-comments"></i>
                        <span>Rede Social</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item {{ (request()->is('admin/modulos/rede-social/')) ? 'active' : '' }}">
                            <a href="#" class="submenu-link"><i class="fa-solid fa-gears"></i> Gerenciar</a>
                        </li>

                    </ul>
                </li>

                <!--== Módulo Vídeos ==-->

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-video"></i>
                        <span>Vídeos</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item {{ (request()->is('admin/modulos/videos/enviar-novo-video')) ? 'active' : '' }}">
                            <a href="#" class="submenu-link"><i class="fa-solid fa-upload"></i> Enviar Vídeo</a>
                        </li>

                        <li class="submenu-item {{ (request()->is('admin/modulos/videos/todos-videos')) ? 'active' : '' }}">
                            <a href="#" class="submenu-link"><i class="fa-solid fa-film"></i> Todos os Vídeos</a>
                        </li>

                        <li class="submenu-item {{ (request()->is('admin/modulos/videos/comentarios')) ? 'active' : '' }}">
                            <a href="#" class="submenu-link"><i class="fa-solid fa-comment"></i> Comentários</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title"><i class="fa-solid fa-file-invoice"></i> Projeto</li>

                <li class="sidebar-item {{ (request()->is('admin/projeto/informacoes-do-projeto')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-gear"></i>
                        <span>Informações Projeto</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/projeto/identidade-visual')) ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-eye-dropper"></i>
                        <span>Identidade Visual</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link {{ (request()->is('admin/projeto/configurar-modulos')) ? 'active' : '' }}">
                        <i class="fa-solid fa-plug"></i>
                        <span>Configurar Módulos</span>
                    </a>
                </li>

                <li class="sidebar-title"><i class="fa-solid fa-life-ring"></i> Ajuda</li>

                <li class="sidebar-item  ">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-folder-tree"></i>
                        <span>Documentação</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
