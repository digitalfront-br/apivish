@extends('layouts.app')

@section('content')
<div class="uk-grid uk-child-width-1-2@m" uk-grid="masonry: true">
    @foreach ($collection as $item)
    <div>
        <div class="uk-card uk-card-default  uk-visible-toggle" tabindex="0">
            <div class="uk-card-body">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <img class="uk-border-circle" width="40" height="40" src="images/avatar.jpg">
                    </div>
                    <div class="uk-width-expand">
                    <h3 class="uk-card-title uk-margin-remove-bottom">{{ $item->titulo }}</h3>
                    <p class="uk-text-meta uk-margin-remove-top"><time>{{ $item->updated_at->format("l d \\d\\e F") }}</time></p>
                    </div>
                </div>
                <div class="uk-position-absolute uk-hidden-hover df-card-actions">
                    <ul class="uk-iconnav">
                    <li>
                        <a href="{{ route('dash.edit', $item->id ) }}" class="uk-text-primary"  uk-icon="icon: file-edit"></a></li>
                        <li><a href="#" class="uk-text-danger" uk-icon="icon: trash"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
