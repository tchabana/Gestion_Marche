@extends('layouts.app', ['activePage' => 'places', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <h1>Enregistre Un Secteur</h1>
    <div class="content">
        <div class="card-body">
            <form method="post" action="{{ route('places') }}" autocomplete="on" novalidate>
                @csrf
                <div class="pl-lg-4">
                    <div class="form-group{{ $errors->has('libelle') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Nom du Secteur') }}
                        </label>
                        <input type="text" name="libelle" id="input-name" value="{{ old('libelle') }}"
                            class="form-control{{ $errors->has('libelle') ? ' is-invalid' : '' }}" required autofocus>
                        @error('libelle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group{{ $errors->has('nbrplace') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Nombre de place') }}
                        </label>
                        <input type="text" name="nbrplace" id="input-name" value="{{ old('nbrplace') }}"
                            class="form-control{{ $errors->has('nbrplace') ? ' is-invalid' : '' }}" required autofocus>
                        @error('nbrplace')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group{{ $errors->has('logi') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">
                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Type de logie') }}
                        </label>
                        <select type="text" name="logi" id="input-name"
                            class="form-control{{ $errors->has('logi') ? ' is-invalid' : '' }}" required autofocus>
                            <option value="null">selectionner un logie</option>
                            @foreach ($data['logis'] as $logi)
                                <option value="{{ $logi->id }}">{{ $logi->libelle }}</option>
                            @endforeach
                        </select>
                        @error('logi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-default mt-4">{{ __('crer') }}</button>
                    </div>
                </div>
        </div>
        </form>
        @if ($data['terminer'] == true)
            <script>
                alert("Le secteur a bien été crer");
            </script>
        @endif
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
