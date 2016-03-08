@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nueva investigador
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New investigador Form -->
                    <form action="/investigador" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- investigador Name -->
                        <div class="form-group">
                            <label for="investigador-name" class="col-sm-3 control-label">Investigador</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="investigador-name" class="form-control" value="{{ old('investigador') }}">
                            </div>
                        </div>
                        <!-- investigador Fechanacimiento -->
                        <div class="form-group">
                            <label for="investigador-fechanacimiento" class="col-sm-3 control-label">Fecha de nacimiento</label>

                            <div class="col-sm-6">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input data-format="yyyy-MM-dd"type='text' name="fechanacimiento"class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- investigador Facultad -->
                        <div class="form-group">
                            <label for="investigador-facultad" class="col-sm-3 control-label">Facultad</label>
                            <div class="col-sm-6">
                                <select name="facultad" id="investigador-facultades" class="form-control">
                                    <option></option>
                                    @foreach ($facultades as $facultad)
                                        <option id="{{ $facultad->id }}">{{ $facultad->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- investigador Name -->
                        <div class="form-group">
                            <label for="investigador-codigo" class="col-sm-3 control-label">Codigo</label>

                            <div class="col-sm-6">
                                <input type="text" name="codigo" id="investigador-codigo" class="form-control" value="{{ old('investigador') }}">
                            </div>
                        </div>
                        <!-- investigador Direccion -->
                        <div class="form-group">
                            <label for="investigador-direccion" class="col-sm-3 control-label">Direccion</label>

                            <div class="col-sm-6">
                                <input type="text" name="direccion" id="investigador-direccion" class="form-control" value="{{ old('investigador') }}">
                            </div>
                        </div>
                        <!-- investigador Telefono -->
                        <div class="form-group">
                            <label for="investigador-telefono" class="col-sm-3 control-label">Telefono</label>

                            <div class="col-sm-6">
                                <input type="text" name="telefono" id="investigador-telefono" class="form-control" value="{{ old('investigador') }}">
                            </div>
                        </div>
                        <!-- Add investigador Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Agregar investigador
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

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
                                            <form action="/investigador/{{ $investigador->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-investigador-{{ $investigador->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
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
