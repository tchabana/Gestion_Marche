<div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebar-5.jpg') }}" data-color="black">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                {{ __('Marché de Sokode') }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if ($activePage == 'places') active @endif">
                <a class="nav-link" href="{{ route('places') }}">
                    <i class="nc-icon nc-grid-45"></i>
                    <p>{{ __('Crer un Secteur') }}</p>
                </a>
            </li>
            <li class="nav-item @if ($activePage == 'vendeur') active @endif">
                <a class="nav-link" href="{{ route('enregistreVendeur') }}">
                    <i class="nc-icon nc-cloud-upload-94"></i>
                    <p>{{ __('Enregistre un vendeur') }}</p>
                </a>
            </li>
            <li class="nav-item @if ($activePage == 'table') active @endif">
                <a class="nav-link" href="{{ route('listecomm') }}">
                    <i class="nc-icon nc-badge"></i>
                    <p>{{ __('Tous les commerçants') }}</p>
                </a>
            </li>
            <li class="nav-item @if ($activePage == 'payement') active @endif">
                <a class="nav-link" href="{{ route('enregistrePayement') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>{{ __('Enregistre un Payement') }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laravelExamples"
                    @if ($activeButton == 'laravel') aria-expanded="true" @endif>
                    <i class="nc-icon nc-chart-bar-32"></i>
                    <p>
                        {{ __('Inventaire') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse @if ($activeButton == 'laravel') show @endif" id="laravelExamples">
                    <ul class="nav">
                        <li class="nav-item @if ($activePage == 'user') active @endif">
                            <a class="nav-link" href="{{ route('mensuele') }}">
                                <p>{{ __('Mensuele') }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if ($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{ route('annuel') }}">
                                <p>{{ __('Annuelle') }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if ($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <p>{{ __('Statistique') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
