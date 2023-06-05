<div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebar-5.jpg') }}" data-color="black">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                <img style="height: 90px; width: 90px" src="{{asset('light-bootstrap/img/togo.png')}}" alt=""><br>
                {{ __('Commune de Sokode') }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laravelExamples"
                    @if ($activeButton == 'laravel') aria-expanded="true" @endif>
                    {{-- <i class="nc-icon nc-chart-bar-32"></i> --}}
                    <i class="nc-icon nc-stre-down"></i>
                    <p>
                        {{ __('Gestion du marché') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse @if ($activeButton == 'laravel') show @endif" id="laravelExamples">
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
                                <i class="nc-icon nc-bullet-list-67"></i>
                                <p>{{ __('Tous les commerçants') }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if ($activePage == 'payement') active @endif">
                            <a class="nav-link" href="{{ route('enregistrePayement') }}">
                                <i class="nc-icon nc-paper-2"></i>
                                <p>{{ __('Enregistre un Payement') }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if ($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="nc-icon nc-chart-bar-32"></i>
                                <p>{{ __('Statistique du marché') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                    {{--  --}}
                    <i class="nc-icon nc-stre-down"></i>
                    <span class="nav-link-text">{{ __('Faire des certificats') }}</span>
                </a>

                <div class="collapse show" id="navbar-examples">
                    <ul class="nav">
                        <li class="nav-item @if ($activePage == 'user') active @endif">
                            <a class="nav-link" href="{{ route('mensuele') }}">
                                <i class="nc-icon nc-badge"></i>
                                <p>{{ __('Non remariage') }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if ($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{ route('annuel') }}">
                                <i class="nc-icon nc-badge"></i>
                                <p>{{ __('Annuelle') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
