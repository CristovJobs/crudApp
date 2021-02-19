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
                            <h3 class="card-title">Novos Cadatros</h3>
                            <p class="card-text">456 items</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card text-center">
                    <div class="card-content">
                        <div class="card-body">
                            <img src="{{ asset("dashboard/images/real-time.png") }}" alt="element 02" class="mb-1">
                            <h3 class="card-title">Atualizados</h3>
                            <p class="card-text">456 items</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card text-center">
                    <div class="card-content">
                        <div class="card-body">
                            <img src="{{ asset("dashboard/images/folder.png") }}" alt="element 02" class="mb-1">
                            <h3 class="card-title">Deletdos</h3>
                            <p class="card-text">456 items</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
