@extends("dashboard.layouts.app")

@section("title","Postagens")

@section("section")
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
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
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Tags</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($posts as $post)
                            <tr>
                                <td>{{ $post->titulo }}</td>
                                <td>{{ $post->conteudo }}</td>
                                <td>{{ $post->tags }}</td>
                                <td>
                                    <a href="/posts/edit/{{ $post->id }}">Editar</a>
                                    <a href="/posts/info/{{ $post->id }}">Visualizar</a>
                                    <a href="/posts/delete/{{ $post->id }}">Deletar</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="4">empty entry</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
