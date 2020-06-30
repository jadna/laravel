<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comercial Laravel</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">       
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}" 
                   title="Página Inicial" style="margin-top: -3px">
                    <img src="{{URL::asset('img/logo.png')}}"></a>
                <button type="button" class="navbar-toggle" 
                        data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>               
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" id="link-white">
                    <li>
                        <a href="{{route('pessoa.index')}}" style="text-decoration: none">
                            <span class="glyphicon glyphicon-home"></span> 
                            <span id="underline">Panel</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" 
                           href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <span id="underline">Cadastros</span> 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">                           
                            <li><a href="#">Usuários</a></li>                                               
                            <li><a href="{{route('pessoa.create')}}">Clientes</a></li>                                               
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="link-white">
                    <li class="dropdown">
                        <a href="#" style="text-decoration: none">
                            <img src="{{URL::asset('img/favicon.ico')}}" 
                                 class="img-circle" width="26" height="26" 
                                 style="margin-top: -3px"> 
                            <span id="underline">Jadna Almeida</span> 
                        </a>                      
                    </li>
                    <li><a href="{{route('admin.logout')}}" 
                           style="text-decoration: none">
                            <span class="glyphicon glyphicon-log-in"></span> 
                            <span id="underline">Sair</span></a></li>  
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
            </div>       
        </nav>        
        <div id="line-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center">              
                        <h1><b>Cliente</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="{{route('pessoa.index')}}">Panel</a></li>                  
                            <li><a href="{{route('pessoa.index')}}">Clientes</a></li>                  
                            <li class="active">Alteração</li>
                        </ol>              
                    </div>          
                </div>
                <div class="row">  
                    <br>
                    <h4 id="center"><b>ALTERAÇÃO DOS CLIENTES</b></h4>
                    <br> 
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                            <div class="alert alert-{{ $msg }}" role="alert">
                                {!! Session::get('alert-' . $msg) !!}
                            </div>
                        @endif
                    @endforeach
                    <form method="post" 
                          action="{{route('pessoa.update', $pessoa->id)}}" 
                          enctype="multipart/form-data">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome"  class="form-control" value="{{$pessoa->nome}}" required>
                            </div>
                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" class="form-control"  value="{{$pessoa->cpf}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="rg">RG</label>
                                <input type="number" name="rg" class="form-control" value="{{$pessoa->rg}}">
                            </div>    
                        </div>                 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="data_nasc">Data Nascimento</label>
                                <input type="date" name="data_nasc" class="form-control" value="{{$pessoa->data_nasc}}" required>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="local_nasc">Estado Nascimento</label>
                                <!-- input type="text" name="local_nasc" class="form-control" value="{{$pessoa->local_nasc}}" required -->
                                <select name="local_nasc" class="form-control" required>
                                    <option value="BA" @if ($pessoa->local_nasc == 'BA') selected="selected" @endif>BA</option>
                                    <option value="SP" @if ($pessoa->local_nasc == 'SP') selected="selected" @endif>SP</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" class="form-control" value="{{$pessoa->telefone}}">
                            </div>
                        </div>                      
                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Alterar
                            </button>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </body>
</html>