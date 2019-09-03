<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pertanyaan->id !!}</p>
</div>

<!-- Isi Pertanyaan Field -->
<div class="form-group">
    {!! Form::label('isi_pertanyaan', 'Isi Pertanyaan:') !!}
    <p>{!! $pertanyaan->isi_pertanyaan !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pertanyaan->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pertanyaan->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $pertanyaan->deleted_at !!}</p>
</div>

