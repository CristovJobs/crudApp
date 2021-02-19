@extends("dashboard.layouts.app")

@section("title","Postagens")

@section("section")
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detalhes</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Titulo: {{$post->titulo}}</h4>
                            <p class="card-text">
                             Descrição: {{$post->conteudo}}
                            </p>
                            <p class="card-text">
                                <span class="badge bg-primary">{{$post->tags}}</span>
                             
                            </p>
                            <a href="/posts/edit/{{ $post->id }}" class="btn btn-primary block">Edit {{$post->titulo}}</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
