@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Asiganar areas a investigadores
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form  id="form-asignar"method="POST" class="form-horizontal" onsubmit='return(false)'>
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Investigador</label>

                            <div class="col-sm-6">
                                <select class="form-control" id="sl-investigador"name="investigador"id="investigador-id">
                                    <option  value="">Seleccione ..</option >
                                    @foreach ($investigadores as $investigador)
                                        <option  value="{{ $investigador->id }}">{{ $investigador->nombre}}</option >
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Areas de investigacion</label>

                            <div class="col-sm-6">
                                <select class="form-control" id="sl-area"name="area[]"id="area-id"multiple>
                                    @foreach ($areas as $area)
                                        <option  value="{{ $area->id }}">{{ $area->area}}</option >
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default" id="btn-busca">
                                    <i class="fa fa-btn fa-plus"></i>Asignar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Result busqueda -->
            <div class="panel panel-default" id="panel-result"></div>
        </div>
    </div>
@endsection
