@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
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

                                                <button type="submit" id="delete-area-{{ $area->id }}" class="btn btn-success">
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
