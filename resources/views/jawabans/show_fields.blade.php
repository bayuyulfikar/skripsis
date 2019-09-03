<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $jawaban->id !!}</p>
</div>

<!-- Isi Jawaban Field -->
<div class="form-group">
    {!! Form::label('isi_jawaban', 'Isi Jawaban:') !!}
    <p>{!! $jawaban->isi_jawaban !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $jawaban->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $jawaban->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $jawaban->deleted_at !!}</p>
</div>

<!-- Pertanyaan Id Field -->
<div class="form-group">
    {!! Form::label('pertanyaan_id', 'Pertanyaan Id:') !!}
    <p>{!! $jawaban->pertanyaan_id !!}</p>
</div>

