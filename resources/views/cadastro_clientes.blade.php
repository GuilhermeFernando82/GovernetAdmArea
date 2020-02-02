@extends ('layouts.governet')

@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Cadastrar Cliente</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Cadastro de Clientes</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        <div class="container-fluid">
            <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
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
                                <form method="POST" action="{{ route('index.store') }} " enctype="multipart/form-data" class="form-horizontal form-material">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Full Name</label>
                                            <div class="col-md-12">
                                                <input type="text" id="teste" name="name" placeholder="Nome completo" class="form-control form-control-line" style="width:50vh">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Razão Social</label>
                                            <div class="col-md-12">
                                                <input type="text" id="teste" name="razao" placeholder="Razão Social" class="form-control form-control-line" style="width:50vh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-cor">
                                        <label for="username  ">Status</label>
                                        <select class="form-control col-12 text-cor" name="status" >
                                        <option value="Ativo">Ativo</option>
                                        <option value="Inativo">Inativo</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">CNPJ</label>
                                            <div class="col-md-12">
                                            <input type='text' id="teste" name='cnpj' placeholder="CNPJ" class="form-control form-control-line" onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()'  style="width:50vh">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">CEP</label>
                                            <div class="col-md-12">
                                                <input type="text" id="teste" name="cep" id="cep" placeholder="CEP" class="form-control form-control-line"  style="width:50vh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Estado</label>
                                            <div class="col-md-12">
                                                <input type="text" id="teste" name="uf" id="uf" placeholder="Estado" class="form-control form-control-line"  style="width:50vh">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Cidade</label>
                                            <div class="col-md-12">
                                                <input type="text" id="teste" name="cidade" id="cidade" placeholder="Cidade" class="form-control form-control-line" style="width:50vh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Complemento</label>
                                            <div class="col-md-12">
                                                <input type="text" id="teste" name="complemento" placeholder="Complemento" class="form-control form-control-line"  style="width:50vh">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="email" id="teste" name="email" placeholder="E-mail" class="form-control form-control-line" name="example-email" id="example-email"  style="width:50vh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Password</label>
                                            <div class="col-md-12">
                                                <input type="password" id="teste" name="password" class="form-control form-control-line"  style="width:50vh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group ml-3" role="group" aria-label="Exemplo básico">
                                        <div class="wrap-input100 validate-input" data-validate="Enter imagem">
                                            <span class="btn-show-pass">
                                                <i class="zmdi zmdi-eye"></i>
                                            </span>
                                            <label class="btn btn-default">
                                                    Inserir Imagem de Perfil <input type="file" name="primaryImage" hidden>
                                            </label>
                                        </div>
                                        <div class="row d-flex justify-content-center form-group ml-3">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Cadastrar Cliente</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            

@endsection