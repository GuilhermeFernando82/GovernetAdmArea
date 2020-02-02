@extends ('layouts.governetcli')

@section('content')
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
                                    <li class="breadcrumb-item"><a href="#">Edit Cliente</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card-body">
                                    @if (session('alert3'))
                                    <div class="alert alert-success">
                                        {{ session('alert3') }} 
                                    </div>
                                    @endif
                                    @foreach ($cli as $i)
                                <form method="POST" action="{{ route('clientearea.update', $i->id) }} " enctype="multipart/form-data" class="form-horizontal form-material">
                                    {{ csrf_field() }}  {!! method_field('PUT') !!}
                                   
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Full Name</label>
                                            <div class="col-md-12">
                                                <input type="text" name="name" value="{{$i->name}}" class="form-control form-control-line" style="width:29vh">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Razão Social</label>
                                            <div class="col-md-12">
                                                <input type="text" name="razao" value="{{$i->razao}}"  class="form-control form-control-line" style="width:29vh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">CNPJ</label>
                                            <div class="col-md-12">
                                                <input type="text" name="cnpj" value="{{$i->cnpj}}" class="form-control form-control-line" style="width:29vh">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">CEP</label>
                                            <div class="col-md-12">
                                                <input type="text" name="cep" id="cep" value="{{$i->cep}}" class="form-control form-control-line" style="width:29vh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Estado</label>
                                            <div class="col-md-12">
                                                <input type="text" name="uf" id="uf" value="{{$i->uf}}" class="form-control form-control-line" style="width:29vh">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Cidade</label>
                                            <div class="col-md-12">
                                                <input type="text" name="cidade" id="cidade" value="{{$i->cidade}}" class="form-control form-control-line" style="width:29vh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Complemento</label>
                                            <div class="col-md-12">
                                                <input type="text" value="{{$i->complemento}}" name="complemento" class="form-control form-control-line" style="width:29vh">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="email" value='{{$i->email}}' name="email" class="form-control form-control-line" name="example-email" id="example-email" style="width:29vh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Mudar Senha</label>
                                            <div class="col-md-12">
                                                <input type="password"  name="password" class="form-control form-control-line" style="width:29vh">
                                            </div>
                                        </div>
                                    </div>
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
                                                <button class="btn btn-success">Atualizar Dados</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

@endsection