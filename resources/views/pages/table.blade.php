@extends('layouts.app', ['activePage' => 'table', 'navName' => 'Table List', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h4 class="card-title">Les commerçants recensés</h4>
                            <p class="card-category">Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
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
                                    @foreach ($data['commercants'] as $cm)
                                        <tr class="clickable-row" data-href="{{ route('commercant.edit', ['id' => $cm->id]) }}">
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
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset("js/table.js")}} " defer></script>
@endsection
