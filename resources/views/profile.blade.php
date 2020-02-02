@extends ('layouts.governet')

@section('content')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Editar Perfil</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Editar Perfil</a></li>
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
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                    
                                    @foreach ($cadastros as $i)
                                <form method="POST" action="{{ route('profile.update', auth()->user()->id) }} " enctype="multipart/form-data" class="form-horizontal form-material">
                                    {{ csrf_field() }}  {!! method_field('PUT') !!}
                                    @if (session('alert3'))
                                    <div class="alert alert-success">
                                        {{ session('alert3') }} 
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Name</label>
                                            <div class="col-md-12">
                                                <input type="text" name="name" value="{{$i->name}}" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="text" name="email" value="{{$i->email}}"  class="form-control form-control-line">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Senha</label>
                                            <div class="col-md-12">
                                                <input type="password" name="password" placeholder="Senha" class="form-control form-control-line">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group ml-3" role="group" aria-label="Exemplo básico">
                                        <div class="wrap-input100 validate-input" data-validate="Enter imagem">
                                            <span class="btn-show-pass">
                                                <i class="zmdi zmdi-eye"></i>
                                            </span>
                                            <label class="btn btn-default">
                                                    Mudar Imagem <input type="file" name="primaryImage" hidden>
                                            </label>
                                        </div>
                                        @endforeach
                                        <div class="row d-flex justify-content-center">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success ml-3">Atualizar Dados</button>
                                                </div>
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