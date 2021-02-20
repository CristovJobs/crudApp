@extends("dashboard.layouts.app")

@section('title', 'Postagens')

@section('section')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-md-12">
                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible show fade">
                            {{ session('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                    @endif
                    @if (session('messageDelete'))
                        <div class="alert alert-danger alert-dismissible show fade">
                            {{ session('messageDelete')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                    @endif
                </div>
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>List Post</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Post's
                </div>


                            @forelse($posts as $post)
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="{{ url("storage/{$post->image}") }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $post->titulo }}</h4>
                                        <p class="card-text">
                                            {{ $post->conteudo }}
                                        </p>
                                        <p class="card-text">
                                            {{ $post->tags }}
                                        </p>
                                        <div class="fx-ui-1">
                                            <a class="btn btn-sm btn-success" href="/posts/edit/{{ $post->id }}">Editar</a>
                                            <a class="btn btn-sm btn-warning"
                                                href="{{ route('posts.show', $post->id) }}">Visualizar</a>

                                                <form action="{{ route('posts.deleted', $post->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-sm btn-danger"> Deletar</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            @empty
                            empty entry
                            @endforelse

            </div>

        </section>
    </div>
@endsection
