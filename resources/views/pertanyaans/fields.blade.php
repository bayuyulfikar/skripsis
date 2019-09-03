<!-- Isi Pertanyaan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('isi_pertanyaan', 'Isi Pertanyaan:') !!}
    {!! Form::textarea('isi_pertanyaan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pertanyaans.index') !!}" class="btn btn-default">Cancel</a>
</div>
