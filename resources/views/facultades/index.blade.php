@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nueva facultad
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New facultad Form -->
                    <form action="/facultad" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- facultad Name -->
                        <div class="form-group">
                            <label for="facultad-name" class="col-sm-3 control-label">Facultad</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="facultad-name" class="form-control" value="{{ old('facultad') }}">
                            </div>
                        </div>

                        <!-- Add facultad Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Agregar facultad
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current facultades -->            
                @if (count($facultades) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Facultades
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped facultad-table">
                            <thead>
                                <th>facultad</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($facultades as $facultad)
                                    <tr>
                                        <td class="table-text"><div>{{ $facultad->nombre }}</div></td>

                                        <!-- facultad Delete Button -->
                                        <td>
                                            <form action="/facultad/{{ $facultad->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-facultad-{{ $facultad->id }}" class="btn btn-danger">
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
