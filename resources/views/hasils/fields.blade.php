<!-- Pertanyaan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pertanyaan_id', 'Pertanyaan Id:') !!}
    {!! Form::select('pertanyaan_id', $pertanyaan ,null, ['class' => 'form-control']) !!}
</div>

<!-- Jawaban Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jawaban_id', 'Jawaban Id:') !!}
    {!! Form::select('jawaban_id',$jawaban ,null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    <!-- {!! Form::label('users_id', 'Users Id:') !!} -->
    {!! Form::hidden('users_id', Auth::user()->id ,null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('hasils.index') !!}" class="btn btn-default">Cancel</a>
</div>
