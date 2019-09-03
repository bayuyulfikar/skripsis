<!-- Isi Jawaban Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('isi_jawaban', 'Isi Jawaban:') !!}
    {!! Form::textarea('isi_jawaban', null, ['class' => 'form-control']) !!}
</div>

<!-- Pertanyaan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pertanyaan_id', 'Pilihan Pertanyaan :') !!}
    {!! Form::select('pertanyaan_id',$Pertanyaan, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jawabans.index') !!}" class="btn btn-default">Cancel</a>
</div>
