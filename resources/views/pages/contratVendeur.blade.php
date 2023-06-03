@extends('layouts.app', ['activePage' => 'vendeur', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
<div class="content">
    <h1>Signature du contrat</h1>
    <div class="card-body">
        <p>Matricule: <strong style="color: rgb(230, 127, 58)"> CM{{ $data['commercants']->id }}</strong></p>
        <p>Commerçant: <strong style="color:  rgb(230, 127, 58)"> {{ $data['commercants']->nom }}
                {{ $data['commercants']->prenom }}</strong></p>
        <p>Telephone: <strong style="color: rgb(230, 127, 58)"> {{ $data['commercants']->tel }}</strong></p>
        <p>Address: <strong style="color:  rgb(230, 127, 58)">
                {{ $data['commercants']->quartier }}</strong></p>
    </div>
</div>
<div class="content" style="margin-top: -100px">
    <div class="card-body">
        <form method="POST" action="{{ route('contrat') }}" autocomplete="on" novalidate enctype="multipart/form-data">
            @csrf
            <h6 class="heading-small text-muted mb-4">{{ __('Information du contrat') }}</h6>
            <div class="form-group{{ $errors->has('libelle') ? ' has-danger' : '' }}">
                <label class="form-control-label" for="input-name">
                    <i class="w3-xxlarge fa fa-user"></i>{{ __('Nom du Secteur') }}
                </label>
                <select type="text" name="libelle" id="input-name" class="form-control{{ $errors->has('libelle') ? ' is-invalid' : '' }}" required autofocus>
                    <option value="null">selectionner un secteur</option>
                    @foreach ($data['secteur'] as $secteur)
                    <option value="{{ $secteur->id }}">{{ $secteur->nomsecteur }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group{{ $errors->has('place') ? ' has-danger' : '' }}">
                <label class="form-control-label" for="input-name">
                    <i class="w3-xxlarge fa fa-user"></i>{{ __('Places') }}
                </label>
                <select type="text" name="place" id="input-name" class="form-control{{ $errors->has('place') ? ' is-invalid' : '' }}" required autofocus>
                    <option value="null">selectionner une places</option>
                    @foreach ($data['places'] as $place)
                    <option value="{{ $place->id }}">Place N° {{ $place->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group{{ $errors->has('prixad') ? ' has-danger' : '' }}">
                <label for="disabledTextInput" class="form-label">Prix Addèsion</label>
                <input type="text" id="disabledTextInput" class="form-control" name="prixad" placeholder="Le prix est choisi automatiquement">
            </div>
            <input type="hidden" name="matricule" value="{{ $data['commercants']->id }}">
            <div class="text-center">
                <button type="submit" class="btn btn-default mt-4">{{ __('Valider') }}</button>
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
