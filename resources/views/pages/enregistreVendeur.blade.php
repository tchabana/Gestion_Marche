@extends('layouts.app', ['activePage' => 'vendeur', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <h1>Enregistre Vendeur</h1>
    <div class="content">
        <div class="card-body">
            <form method="post" action="{{ route('enregistreVendeur') }}" autocomplete="on" novalidate
                enctype="multipart/form-data">
                @csrf
                <h6 class="heading-small text-muted mb-4">{{ __('Information personnel') }}</h6>
                <div class="pl-lg-4">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Nom') }}
                        </label>
                        <input type="text" name="name" id="input-name" value="{{ old('name') }}"
                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('TOUTABIZI') }}" required autofocus>
                        @include('alerts.feedback', ['field' => 'name'])
                    </div>
                    <div class="form-group{{ $errors->has('prenom') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Prenom') }}
                        </label>
                        <input type="text" name="prenom" id="input-name" value="{{ old('prenom') }}"
                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('Rafiatou') }}" required autofocus>
                        @include('alerts.feedback', ['field' => 'prenom'])

                    </div>
                    <div class="form-group{{ $errors->has('datenaiss') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Date de Naissance') }}
                        </label>
                        <input type="date" name="datenaiss" id="input-name" value="{{ old('datenaiss') }}"
                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus>
                        @include('alerts.feedback', ['field' => 'datenaiss'])
                    </div>

                    <h6 class="heading-small text-muted mb-4">{{ __('Adresse') }}</h6>

                    <div class="form-group{{ $errors->has('ville') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email"><i
                                class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Ville') }}</label>
                        <input type="text" name="ville" id="input" value="{{ old('ville') }}"
                            class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('Sokode') }}" required>

                        @include('alerts.feedback', ['field' => 'ville'])
                    </div>

                    <div class="form-group{{ $errors->has('quartier') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email"><i
                                class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Quartier') }}</label>
                        <input type="text" name="quartier" id="input-email" value="{{ old('quartier') }}"
                            class="form-control{{ $errors->has('quartier') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('Koma2') }}" required>

                        @include('alerts.feedback', ['field' => 'quartier'])
                    </div>
                    <div class="form-group{{ $errors->has('tel') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-tel"><i
                                class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Telephone') }}</label>
                        <input type="text" name="tel" id="input-tel"
                            class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('+228 90560777') }}" required>

                        @include('alerts.feedback', ['field' => 'tel'])
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email"><i
                                class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Email (facultative)') }}</label>
                        <input type="email" name="email" id="input-email" value="{{ old('email') }}"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('toutabizi@gmail.com') }}">

                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-default mt-4">{{ __('Suivant') }}</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

            demo.showNotification();

        });
    </script>
@endpush
