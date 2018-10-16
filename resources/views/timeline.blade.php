@if($timeline)
    @foreach($timeline as $key => $value)
{{--        <h1>{{$value->mensagem}}</h1>--}}
        <div class="col-md-8  col-xl-8" style="margin: 0px auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Panel with custom buttons</h3>
                    <div class="card-options">
                        <a href="#" class="btn btn-primary btn-sm">Action 1</a>
                        <a href="#" class="btn btn-secondary btn-sm ml-2">Action 2</a>
                    </div>
                </div>
                <div class="card-body">
                    {{$value->mensagem}}
                </div>
            </div>
        </div>
    @endforeach
@else
    <h1>Sem atividade para exibir!</h1>
@endif
