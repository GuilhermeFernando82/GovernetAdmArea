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
                                            <label class="col-md-12">Titulo</label>
                                            <div class="col-md-12">
                                                <input type="text" style="width: 300px" name="titulo"  class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Link</label>
                                            <div class="col-md-12">
                                                <input type="text" style="width: 300px" name="link" class="form-control form-control-line">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Tags</label>
                                            <div class="col-md-12">
                                                <input type="text" style="width: 300px" name="tags"  class="form-control form-control-line">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-cor">
                                        <label for="username  ">Categoria</label>
                                        <select class="form-control col-12 text-cor" name="cat" >
                                        <option value="no1">No1</option>
                                        <option value="no2">No2</option>
                                        <option value="no3">No3</option>
                                        </select>
                                    </div>
                                    <div class="row ml-3">
                                        <div class="form-group">
                                            <textarea name="conteudo" >Next, use our Get Started docs to setup Tiny!</textarea>
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
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Raiz</h4>
                                <div class="feed-widget">
                                    <ul class="list-style-none feed-body m-0 p-b-20">
                                    <li class="p-15 m-t-10"><a href="#" class="btn btn-block create-btn text-white no-block d-flex align-items-center"><i class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Adicionar Nó</span> </a></li>  
                                    <li><a href="">No1</a>
                                    @foreach ($cadastros as $i)
                                    @if ($i->categoria == 'no1')
                                        <li class="ml-3 "><a href="{{route('no.edit', $i->id)}}">{{$i->titulo}}</a><li>
                                    @endif
                                    @endforeach
                                    </li>
                                    <li><a href="">No2</a>
                                        @foreach ($cadastros as $i)
                                        @if ($i->categoria == 'no2')
                                        <li class="ml-3 "><a href="{{route('no.edit', $i->id)}}">{{$i->titulo}}</a><li>
                                        @endif
                                        @endforeach
                                    </li>
                                    <li><a href="">No3</a>
                                    @foreach ($cadastros as $i)
                                        @if ($i->categoria == 'no3')
                                        <li class="ml-3 "><a href="{{route('no.edit', $i->id)}}">{{$i->titulo}}</a><li>
                                        @endif
                                        @endforeach
                                    </li>
                                    </ul>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
            
                    <!-- Column -->
                </div>
@endsection