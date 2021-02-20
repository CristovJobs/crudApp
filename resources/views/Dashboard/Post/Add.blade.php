@extends("dashboard.layouts.app")

@section("title","Postagens")

@section("section")
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Add Post</h3>
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
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @include("dashboard.Post.form")
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
