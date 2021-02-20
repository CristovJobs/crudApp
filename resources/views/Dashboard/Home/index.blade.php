@extends("dashboard.layouts.app")

@section("title","Home")

@section("section")
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
        </div>

        <div class="row">
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card text-center">
                    <div class="card-content">
                        <div class="card-body">
                            <img src="{{ asset("dashboard/images/registo-medico.png") }}" alt="element 02" class="mb-1">
                            <h3 class="card-title">News Posts</h3>
                            <p class="card-text">{{$posts->count() ?? '0'}} - items</p>
                        </div>
                    </div>
                </div>
                <div align="center">
                    <a href="#" class="btn icon icon-left btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Add</a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card text-center">
                    <div class="card-content">
                        <div class="card-body">
                            <img src="{{ asset("dashboard/images/real-time.png") }}" alt="element 02" class="mb-1">
                            <h3 class="card-title">Posts Update</h3>
                            <p class="card-text">{{$posts->count() ?? '0'}} - items</p>
                        </div>
                    </div>
                </div>
                <div align="center">
                    <a href="#" class="btn icon icon-left btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Update</a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card text-center">
                    <div class="card-content">
                        <div class="card-body">
                            <img src="{{ asset("dashboard/images/folder.png") }}" alt="element 02" class="mb-1">
                            <h3 class="card-title">Posts Deleted</h3>
                            <p class="card-text">{{$posts->count() ?? '0'}} - items</p>
                        </div>
                    </div>
                </div>
                <div align="center">
                    <a href="#" class="btn icon icon-left btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg> Deleted</a>
                </div>
            </div>
        </div>
    </div>


@endsection
