@if($timeline)
    @foreach($timeline as $key => $value)
        <h1>{{$value->mensagem}}</h1>
    @endforeach
@else
    <h1>Sem atividade para exibir!</h1>
@endif
