<div class="table-responsive">
    <table class="table" id="hasils-table">
        <thead>
            <tr>
                <th>Pertanyaan Id</th>
        <th>Jawaban Id</th>
        <th>Users Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($hasils as $hasil)
            <tr>
            <td>{!! $hasil->pertanyaan_id !!}</td>
            <td>{!! $hasil->jawaban_id !!}</td>
            <td>{!! $hasil->users_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['hasils.destroy', $hasil->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('hasils.show', [$hasil->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('hasils.edit', [$hasil->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
