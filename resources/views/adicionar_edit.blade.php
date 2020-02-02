@extends ('layouts.governet')

@section('content')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Editar Nó</h4>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Editar Nó</h4>
                                    </div>
                                </div>
                                <div class="row">
                                @foreach ($cadastros as $i)
                                <form method="POST" action="{{ route('no.update', $i->id) }} " enctype="multipart/form-data" class="form-horizontal form-material">
                                    {{ csrf_field() }}  {!! method_field('PUT') !!}
                                    @if (session('alert3'))
                                    <div class="alert alert-success">
                                        {{ session('alert3') }} 
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Titulo</label>
                                            <div class="col-md-12">
                                                <input type="text" style="width: 300px" name="titulo" value="{{$i->titulo}}"  class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Link</label>
                                            <div class="col-md-12">
                                                <input type="text" style="width: 300px" name="link" value="{{$i->link}}" class="form-control form-control-line">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Tags</label>
                                            <div class="col-md-12">
                                                <input type="text" style="width: 300px" name="tags"  value="{{$i->tags}}" class="form-control form-control-line">
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
                                            <textarea name="conteudo">{!!$i->conteudo!!}</textarea>
                                        </div>
                                    </div>
                                
                                    <div class="btn-group ml-3" role="group" aria-label="Exemplo básico">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Salvar</button>
                                            </div>
                                                
                                            
                                        </div>
                                    </div>   
                                </form>
                                <div class="row">
                                    <form method="post" action="{{route('no.destroy', $i->id)}}">
                                            {!! method_field('DELETE') !!}
                                                {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-danger ml-3">Deletar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                                @endforeach   
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Column -->
                </div>
@endsection