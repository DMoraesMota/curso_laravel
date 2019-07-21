@extends('layout.meulayout')

@section('minha_secao_produtos')   

    @foreach ($produtos as $item)
        <p>
            {{$item['id']}}: {{$item['Nome']}}
            @if ($loop->first)
                (primeiro)
            @endif
            
            @if ($loop->last)
                (ultimo)
            @endif
            <span class="badge badge-secondary">
               Está em: {{ $loop->index}}<br/>
               De: {{ $loop->count-1}} <br/>
               Falta: {{ $loop->remaining}}
            </span>

            <span class="badge badge-warning">
                {{ $loop->iteration}}<br/>
            </span>
            
        </p>
    @endforeach

@endsection