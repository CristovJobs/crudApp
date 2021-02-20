@extends("dashboard.layouts.app")

@section("title","Account")

@section("section")

<style>
    .avatar1 img {
    width: 75px;
    height: 75px;
    border-radius: 50%;
}
</style>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>My Account</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="avatar1">
                                    <img src="{{ asset("dashboard/images/avatar/avatar-s-24.png") }}" class="avatar avatar-xl " alt="" srcset="">
                                </div>
                            </div>
                            <p><h1 class="text-center">{{$user->name}}</h1></p>
                           <p  class="text-center"> <small><a href="{{$user->id}}">Edit my account</a></small></p>
                            <ul class="list-group">
                                <li class="list-group-item active">Todos os meus dados</li>
                                <li class="list-group-item">Email : {{$user->email}}</li>
                                <li class="list-group-item">Create at : {{$user->created_at}}</li>
                                <li class="list-group-item">Update at : {{$user->updated_at}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
