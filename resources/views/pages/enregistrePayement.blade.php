@extends('layouts.app', ['activePage' => 'payement', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <h1>Enregitrement d'un payement</h1>
    <div class="content">
        <div class="card-body">
            <form method="post" action="{{ route('enregistrePayement') }}" autocomplete="on" novalidate
                enctype="multipart/form-data">
                @csrf
                <h6 class="heading-small text-muted mb-4">{{ __('Information personnel') }}</h6>
                <div class="pl-lg-4">
                    <div class="form-group{{ $errors->has('matricule') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Matricule') }}
                        </label>
                        <input type="text" name="matricule" id="input-name" value="{{ old('matricule') }}"
                            class="form-control{{ $errors->has('matricule') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('CM0085') }}" required autofocus>
                        @include('alerts.feedback', ['field' => 'matricule'])
                    </div>
                    <div class="form-group{{ $errors->has('montant') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input"><i
                                class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Montant Versé') }}</label>
                        <input type="text" name="montant" id="input" value="{{ old('ville') }}"
                            class="form-control{{ $errors->has('montant') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('Sokode') }}" required>

                        @include('alerts.feedback', ['field' => 'montant'])
                    </div>
                    <div class="form-group{{ $errors->has('mois') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Mois') }}
                        </label>
                        <select type="text" name="mois" id="input-name" class="form-control{{ $errors->has('mois') ? ' is-invalid' : '' }}" required autofocus>
                            <option value="null">selectionner le mois:</option>
                        </select>
                    </div>
                    <div class="form-group{{ $errors->has('datepay') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Date de Payement') }}
                        </label>
                        <input type="text" name="datepay" id="input-name" value="{{ date('m/d/Y') }}"
                            class="form-control{{ $errors->has('datepay') ? ' is-invalid' : '' }}" required autofocus>
                        @include('alerts.feedback', ['field' => 'datepay'])
                    </div>
                    
                    <div class="text-center d-flex justify-content-xl-between">
                        <button type="submit" class="btn btn-default mt-4">{{ __('Anuler') }}</button>
                        <button type="submit" class="btn btn-default mt-4">{{ __('Valider & imprimer reçu') }}</button>
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
