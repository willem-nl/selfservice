<nav id="mainnav-container">
    <div id="mainnav">
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <li class="list-header">MENU</li>

                        <!--Menu list item-->
                        <li {{ Request::path() === '/' ? 'class=active-link' : '' }}>
                            <a href="/">
                                <i class="icon-home2"></i><span class="menu-title">Start</span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li class="{{ Request::is('gebruikers/*') ? 'active-sub active' : '' }}">
                            <a href="#">
                                <i class="icon-man2">
                                </i><span class="menu-title">Gebruikersbeheer</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                                <li {{ Request::path() === 'gebruikers/gebruikers' ? 'class=active-link' : '' }}><a href="/gebruikers/gebruikers">Gebruikers</a></li>
                                <li {{ Request::path() === 'gebruikers/groepen' ? 'class=active-link' : '' }}><a href="/gebruikers/groepen">Groepen</a></li>
                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'favorieten' ? 'class=active-link' : '' }}>
                            <a href="/favorieten">
                                <i class="icon-star_rounded"></i><span class="menu-title">Favorietenbeheer</span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'applicaties' ? 'class=active-link' : '' }}>
                            <a href="/applicaties">
                                <i class="icon-browser"></i><span class="menu-title">Applicatiebeheer</span>
                            </a>
                        </li>

                        <!--!!!!!!!!!!!!!!!!!!!! Menu list item-->
                        <li class="{{ Request::is('opslag/*') ? 'active-sub active' : '' }}">
                            <a href="#">
                                <i class="icon-hard_disk"></i>
                                <span class="menu-title">Opslagbeheer</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                                <li {{ Request::path() === 'opslag/statistiek' ? 'class=active-link' : '' }}><a href="/opslag/statistiek">Statistieken</a></li>
                                <li {{ Request::path() === 'opslag/groepsschijf' ? 'class=active-link' : '' }}><a href="/opslag/groepsschijf">Groepsschijf</a></li>
                                <li {{ Request::path() === 'opslag/samenwerkschijf' ? 'class=active-link' : '' }}><a href="/opslag/groepsschijf">Samenwerkschijf</a></li>
                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'printers' ? 'class=active-link' : '' }}>
                            <a href="/printers">
                                <i class="icon-printer_1"></i><span class="menu-title">Printerbeheer</span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'help' ? 'class=active-link' : '' }}>
                            <a href="/help">
                                <i class="icon-help_1"></i><span class="menu-title">Help</span>
                            </a>
                        </li>

                        <li class="list-divider"></li>

                        <!--Category name-->
                        <li class="list-header">BEHEER</li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'rollen' ? 'class=active-link' : '' }}>
                            <a href="/instellingen">
                                <i class="icon-id"></i><span class="menu-title">Klantinstellingen</span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'rollen' ? 'class=active-link' : '' }}>
                            <a href="/rollen">
                                <i class="icon-competitor_block"></i><span class="menu-title">Rollen</span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'software' ? 'class=active-link' : '' }}>
                            <a href="software">
                                <i class="icon-browser_options"></i><span class="menu-title">Software</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</nav>