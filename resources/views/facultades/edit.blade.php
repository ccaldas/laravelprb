@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
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

                                                <button type="submit" id="delete-facultad-{{ $facultad->id }}" class="btn btn-success">
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
