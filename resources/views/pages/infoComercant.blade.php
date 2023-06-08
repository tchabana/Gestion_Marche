@extends('layouts.app', ['activePage' => 'commEdit','activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container text-center mb-5">
            <h2 id="sellerName">Contrat de  {{$data['commercants']->nom}} {{$data['commercants']->prenom}} </h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h6 class="heading-small text-muted mb-4">{{ __('Information du contrat') }}</h6>
                    <div class="card-body">
                        <p>Matricule: <strong style="color: rgb(230, 127, 58)"> CM{{ $data['commercants']->id }}</strong></p>
                        <p>Commerçant: <strong style="color:  rgb(230, 127, 58)"> {{ $data['commercants']->nom }}
                                {{ $data['commercants']->prenom }}</strong></p>
                        <p>Telephone: <strong style="color: rgb(230, 127, 58)"> {{ $data['commercants']->tel }}</strong></p>
                        <p>Address: <strong style="color:  rgb(230, 127, 58)">
                                {{ $data['commercants']->quartier }}</strong></p>
                    </div>
                    <button onclick="enableEditMode()" id="editButton">Editer commerçant</button>
                </div>
                <div class="col-md-5">
                    <h6 class="heading-small text-muted mb-4">{{ __('Etat des payement') }}</h6>
                    <table class="table table-hover">
                        <thead>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date Naiss</th>
                            <th>Ville</th>
                            <th>Quartier</th>
                            <th>N°Tel</th>
                            <th>email</th>
                        </thead>
                        <tbody>
                            @forelse ($data['payement'] as $cm)
                                <tr>
                                    <td> {{ $cm->nom }} </td>
                                    <td> {{ $cm->prenom }}</td>
                                    <td> {{ $cm->datenaiss }} </td>
                                    <td> {{ $cm->quartier }}</td>
                                    <td> {{ $cm->tel }} </td>
                                    <td> {{ $cm->email }} </td>
                                    <td> {{ $cm->ville }} </td>
                                    <td> {{ $cm->created_at }} 1</td>
                                    <td> {{ $cm->idplace }}</td>
                                    <input type="hidden" name="id" value="{{$cm->id}}">
                                </tr>
                                @empty

                                @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="editSection" style="display: none;">
                <input type="text" id="inputName">
                <input type="text" id="inputAddress">
                <input type="text" id="inputPhone">
                <input type="text" id="inputEmail">
                <button onclick="saveChanges()">Enregistrer</button>
            </div>
        </div>

        <script>
            function enableEditMode() {
                document.getElementById("editButton").style.display = "none";
                document.getElementById("editSection").style.display = "block";
                
                document.getElementById("inputName").value = document.getElementById("sellerName").textContent;
                document.getElementById("inputAddress").value = document.getElementById("sellerAddress").textContent;
                document.getElementById("inputPhone").value = document.getElementById("sellerPhone").textContent;
                document.getElementById("inputEmail").value = document.getElementById("sellerEmail").textContent;
            }

            function saveChanges() {
                var newName = document.getElementById("inputName").value;
                var newAddress = document.getElementById("inputAddress").value;
                var newPhone = document.getElementById("inputPhone").value;
                var newEmail = document.getElementById("inputEmail").value;
                
                document.getElementById("sellerName").textContent = newName;
                document.getElementById("sellerAddress").textContent = newAddress;
                document.getElementById("sellerPhone").textContent = newPhone;
                document.getElementById("sellerEmail").textContent = newEmail;
                
                document.getElementById("editButton").style.display = "block";
                document.getElementById("editSection").style.display = "none";
            }
        </script>
    </div>
@endsection
