@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nueva Area
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New area Form -->
                    <form action="/area" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- area Name -->
                        <div class="form-group">
                            <label for="area-name" class="col-sm-3 control-label">Area de investigacion</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="area-name" class="form-control" value="{{ old('area') }}">
                            </div>
                        </div>

                        <!-- Add area Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Agregar area
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current areas -->
                @if (count($areas) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Areas existentes
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped area-table">
                            <thead>
                                <th>Area</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($areas as $area)
                                    <tr>
                                        <td class="table-text"><div>{{ $area->area }}</div></td>

                                        <!-- area Delete Button -->
                                        <td>
                                            <form action="/area/{{ $area->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-area-{{ $area->id }}" class="btn btn-danger">
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
