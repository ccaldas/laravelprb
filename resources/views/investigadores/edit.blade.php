@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- Current investigadores -->            
                @if (count($investigadores) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        investigadores
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped investigador-table">
                            <thead>
                                <th>investigador</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($investigadores as $investigador)
                                    <tr>
                                        <td class="table-text"><div>{{ $investigador->nombre }}</div></td>
                                        <td class="table-text"><div>{{ $investigador->fechanacimiento }}</div></td>
                                        <td class="table-text"><div>{{ $investigador->codigo }}</div></td>
                                        <td class="table-text"><div>{{ $investigador->direccion }}</div></td>
                                        <td class="table-text"><div>{{ $investigador->telefono }}</div></td>

                                        <!-- investigador Delete Button -->
                                        <td>
                                            <form action="/investigador/edit/{{ $investigador->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-investigador-{{ $investigador->id }}" class="btn btn-success">
                                                    <i class="fa fa-btn fa-pencil"></i>Edit 
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
             @endif
        </div>
    </div>
@endsection
