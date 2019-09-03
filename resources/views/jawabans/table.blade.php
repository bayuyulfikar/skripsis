<div class="table-responsive">
    <table class="table" id="jawabans-table">
        <thead>
            <tr>
                <th>Isi Jawaban</th>
        <th>Pertanyaan Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jawabans as $jawaban)
            <tr>
                <td>{!! $jawaban->isi_jawaban !!}</td>
            <td>{!! $jawaban->pertanyaan_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['jawabans.destroy', $jawaban->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('jawabans.show', [$jawaban->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('jawabans.edit', [$jawaban->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
