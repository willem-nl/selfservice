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
                        <li {{ Request::path() === 'gebruikers' ? 'class=active-link' : '' }} >
                            <a href="gebruikers">
                                <i class="icon-man2"></i><span class="menu-title">Gebruikersbeheer</span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'groepen' ? 'class=active-link' : '' }}>
                            <a href="groepen">
                                <i class="icon-group_1"></i><span class="menu-title">Groepbeheer</span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'applicaties' ? 'class=active-link' : '' }}>
                            <a href="applicaties">
                                <i class="icon-credit_card_back"></i><span class="menu-title">Applicatiebeheer</span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'groepsschijf' ? 'class=active-link' : '' }}>
                            <a href="groepsschijf">
                                <i class="icon-hard_disk"></i><span class="menu-title">Opslagbeheer</span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'printers' ? 'class=active-link' : '' }}>
                            <a href="printers">
                                <i class="icon-printer_1"></i><span class="menu-title">Printerbeheer</span>
                            </a>
                        </li>

                        <li class="list-divider"></li>

                        <!--Category name-->
                        <li class="list-header">BEHEER</li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'rollen' ? 'class=active-link' : '' }}>
                            <a href="rollen">
                                <i class="icon-competitor_block"></i><span class="menu-title">Rollen</span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li {{ Request::path() === 'software' ? 'class=active-link' : '' }}>
                            <a href="software">
                                <i class="icon-todo"></i><span class="menu-title">Software</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</nav>