@extends('layouts.app')

@section('content')

<div class="uk-grid uk-child-width-1-1" uk-grid="masonry: true">
    <form action="{{route('dash.update', $item)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <article class="uk-article">
            <h1 class="uk-article-title"><input class="uk-input uk-width-1-1 uk-form-blank" name="titulo" value="{{ $item->titulo }}" type="text" placeholder="Titulo"/></h1>
            <div class="uk-margin">
                <textarea id="mytextarea" class="uk-textarea" rows="12" name="descricao"  placeholder="Descrição">{{ $item->description }}</textarea>
            </div>
            <div class="uk-margin">
                <input class="uk-input uk-width-1-1" name="mini" value="{{ $item->file }}" type="file" placeholder="Titulo">
            </div>
            <div class="uk-margin" uk-margin>
                <div uk-form-custom="target: true">
                    <input type="file" >
                    <input class="uk-input uk-form-width-medium" name="capa" value="{{ $item->capa }}" type="text" placeholder="Capa">
                </div>
                <button class="uk-button uk-button-default">Submit</button>
            </div>
            <div class="uk-grid-small uk-child-width-auto" uk-grid>
                <div>
                    <button type="submit" class="uk-button uk-button-primary" href="#">Salvar</button>
                </div>
            </div>

        </article>
    </form>
    <code>

        {{ $item }}
    </code>
</div>
@endsection
