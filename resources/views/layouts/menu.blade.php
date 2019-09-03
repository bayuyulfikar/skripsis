










<li class="{{ Request::is('pertanyaans*') ? 'active' : '' }}">
    <a href="{!! route('pertanyaans.index') !!}"><i class="fa fa-edit"></i><span>Pertanyaans</span></a>
</li>

<li class="{{ Request::is('jawabans*') ? 'active' : '' }}">
    <a href="{!! route('jawabans.index') !!}"><i class="fa fa-edit"></i><span>Jawabans</span></a>
</li>

<li class="{{ Request::is('hasils*') ? 'active' : '' }}">
    <a href="{!! route('hasils.index') !!}"><i class="fa fa-edit"></i><span>Hasils</span></a>
</li>

