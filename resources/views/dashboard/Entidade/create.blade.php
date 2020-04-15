@extends('layouts.app')

@section('content')

<div class="uk-grid uk-child-width-1-1" uk-grid="masonry: true">
    <hr>
    <form action="{{route('dash.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <article class="uk-article">
            <div class="uk-margin">
                <h1 class="uk-article-title"><input class="uk-input uk-width-1-1 uk-form-blank" name="titulo"  type="text" placeholder="Titulo"/></h1>
            </div>
            <div class="uk-flex uk-grid-divider uk-margin" uk-margin>
                <div>
                    <div uk-form-custom="target: true">
                        <span class="uk-form-icon" uk-icon="icon: image"></span>
                        <input type="file">
                        <input class="uk-input uk-form-blank" type="text" placeholder="Imagem de capa">
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-inline uk-width-expand">
                    <span class="uk-form-icon" uk-icon="icon: link"></span>
                    <input class="uk-input uk-form-blank" type="text" placeholder="Link do video">
                    </div>
                </div>
                <div>
                    <div uk-form-custom="target: true">
                        <span class="uk-form-icon" uk-icon="icon: microphone"></span>
                        <input type="file">
                        <input class="uk-input uk-form-blank" type="text" placeholder="Arquivo de áudio">
                    </div>
                </div>
            </div>


                <div class="uk-margin">
                    <textarea  class="uk-textarea uk-form-blank" id="mytextarea" rows="12" name="descricao" placeholder="Descrição"> </textarea>
            </div>

            <div class="uk-grid uk-grid-divider uk-flex" uk-margin>

                <div>
                    <label class="uk-form-label uk-text-bold" >Temas: </label>
                   <div class="uk-form-controls uk-height-small">
                        <select class="uk-select uk-form-blank uk-height-1-1"  multiple="">
                            @foreach ($temas as $tema)
                                <option value="{{ $tema->id }}">{{ $tema->tema }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div>
                    <label class="uk-form-label uk-text-bold" >Autores: </label>
                    <div class="uk-form-controls uk-height-small">
                    <select class="uk-select uk-form-blank uk-height-1-1"  multiple="">
                        @foreach ($autores as $autor)
                            <option value="{{ $autor->id }}">{{ $autor->autor }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <div>
                    <button type="submit" class="uk-button uk-button-primary" href="#">Salvar</button>
                </div>
            </div>

        </article>
    </form>
    <code>
    </code>
</div>
@endsection
