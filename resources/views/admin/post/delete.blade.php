@extends('admin.layouts.popup')

@section('title', 'Deletar Postagem')

@section('header')
    <h5 class="modal-title text-bold text-danger" id="modal-label">@yield('title')</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
@stop

@section('content')
    <div id="alerts"></div>

    <p>
        Confirma a exclusão da postagem
        <span class="text-bold">{{ $post->name }}</span>
        ?
    </p>

    {{ Aire::open()->id('post_delete')->route('admin.post.destroy', $post->id) }}
    {{ Aire::close() }}
@stop

@section('footer')
    <div class="btn-toolbar w-100 justify-content-between" role="toolbar" aria-label="Ações Disponíveis">
        <button class="btn btn-light" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-danger" data-trigger-submit="post_delete">Confirmar</button>
    </div>
@stop
