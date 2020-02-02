@extends ('layouts.governet')

@section('content')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Adicionar Nó</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Adicionar Nó</h4>
                                    </div>
                                </div>
                                <div class="row">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @if (session('alert3'))
                                    <div class="alert alert-success">
                                        {{ session('alert3') }} 
                                    </div>
                                    @endif
                                   
                                <form method="POST" action="{{ route('no.store') }} " enctype="multipart/form-data" class="form-horizontal form-material">
                                    {{ csrf_field() }} 
                                   
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Insira um nome para categoria</label>
                                            <div class="col-md-12">
                                                <input type="text" style="width: 300px" name="cat"  class="form-control form-control-line">
                                            </div>
                                        </div>
            
                                
                               
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Adicionar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
            
                    <!-- Column -->
                </div>
@endsection