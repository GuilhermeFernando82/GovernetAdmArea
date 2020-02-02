@extends ('layouts.governet')

@section('content')
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
            <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Clientes</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container-fluid mt-3 ml-3 mr-3" style="background-color:white;position:relative;top:-15px">
                    <h3 class="ml-4">Clientes</h3>
                        
            @foreach ($cli as $i)
            <div class="row col-md-12 mt-3" >
                    <img src="{{ url('storage/'.substr($i->picture, 7)) }}" width="50" height="38" class="rounded-circle" alt="Responsive image"/>
                    <h4 class="text-success col-3 mt-2">{{$i->name}}</h4>
                    <h3 class="col-3">Status {{ $i->status }}</h3>
                    <a class="btn btn-secondary col-2 " href="{{ route('index.edit', $i->id) }}" role="button">
                        Editar Cliente
                    </a>
                    <a class="btn btn-secondary ml-3 col-2" href="/cadastro" role="button">
                            Novo Cliente
                        </a>     
                                                                                                        
             
            </div>
            @endforeach
        </div>
    </div>
 <!-- Column -->
 </div>
@endsection