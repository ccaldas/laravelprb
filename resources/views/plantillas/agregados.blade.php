<div class="panel-heading">
    Resultado de busqueda
    </div>
    <div class="panel-body">
        <!-- Display Validation Errors -->
        
        <!-- New Task Form -->
        <table class="table table-striped investigador-table">
            <thead>
                <th>investigador</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach ($investigadores as $investigador)
                    <tr>
                        <td class="table-text"><div>{{ $investigador->nombre }}</div></td>
                        <td class="table-text"><div>{{ $investigador->area }}</div></td>

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