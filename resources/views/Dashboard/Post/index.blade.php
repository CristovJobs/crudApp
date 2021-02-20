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
                            {{ session('messageDelete') }}
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
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Tags</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    <td>
                                        <div class="avatar mr-1"><img
                                                src="{{ url("storage/{$post->image}")}}" alt="">
                                        </div>
                                    </td>
                                    <td>{{ $post->titulo }}</td>
                                    <td>{{ $post->conteudo }}</td>
                                    <td>{{ $post->tags }}</td>
                                    <td class="fx-ui-1">
                                        <a href="/posts/edit/{{ $post->id }}" class="btn icon btn-success ml-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn icon btn-warning ml-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></a>


                                        <form action="{{ route('posts.deleted', $post->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn icon btn-danger ml-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg></button>
                                        </form>
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
