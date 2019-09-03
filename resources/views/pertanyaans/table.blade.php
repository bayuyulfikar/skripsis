<div class="table-responsive">
    <table class="table" id="pertanyaans-table">
        <thead>
            <tr>
                <th>Isi Pertanyaan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pertanyaans as $pertanyaan)
            <tr>
                <td>{!! $pertanyaan->isi_pertanyaan !!}</td>
                <td>
                    {!! Form::open(['route' => ['pertanyaans.destroy', $pertanyaan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('pertanyaans.show', [$pertanyaan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('pertanyaans.edit', [$pertanyaan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
