<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <form method="POST">
                        <div>
                            <i class="nc-icon nc-zoom-split"></i>
                            <input style="border: none" type="text" placeholder="&nbsp;{{ __('Search') }}">
                        </div>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav   d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href=" {{ route('profile.edit') }} ">
                        <span class="no-icon">{{ __('Compte') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="text-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Deconnexion') }} </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
