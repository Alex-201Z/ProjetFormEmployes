@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="blanc">
            <h1>Liste des Equipe</h1>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Code de l'equipe</th>
                <th>Nom de L'equipe</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mesEquipe as $uneEquipe)
                <tr>
                    <td>{{ $uneEquipe->id }}</td>
                    <td>{{ $uneEquipe->CodeEq }}</td>
                    <td>{{ $uneEquipe->DesiEq }}</td>
                    <td style="text-align:center;">
                        <a href="{{ url('/Equipelister') }}/{{ $uneEquipe-> id }}">
                            <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="equipe">

                            </span></a></td>
                </tr>
            @endforeach
            <BR> <BR>
        </table>
    </div>
@stop

