@if($timeline)
    @foreach($timeline as $key => $value)
        @foreach($value as $key2 => $value2)
            <h1>{{$value2->mensagem}}</h1>
        @endforeach
    @endforeach
@else
    <h1>nao tem</h1>
@endif
