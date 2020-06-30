<html>

    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            .login-container{
                margin-top: 5%;
                margin-bottom: 5%;
            }
            .login-logo{
                position: relative;
                margin-left: -41.5%;
            }
            .login-logo img{
                position: absolute;
                width: 20%;
                margin-top: 19%;
                background: #282726;
                border-radius: 4.5rem;
                padding: 5%;
            }
            .login-form-1{
                padding: 9%;
                background:#282726;
                box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
            }
            .login-form-1 h3{
                text-align: center;
                margin-bottom:12%;
                color:#fff;
            }
            .login-form-2{
                padding: 9%;
                background: #f05837;
                box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
            }
            .login-form-2 h3{
                text-align: center;
                margin-bottom:12%;
                color: #fff;
            }
            .btnSubmit{
                font-weight: 600;
                width: 50%;
                color: #282726;
                background-color: #fff;
                border: none;
                border-radius: 1.5rem;
                padding:2%;
            }
            .btnForgetPwd{
                color: #fff;
                font-weight: 600;
                text-decoration: none;
            }
            .btnForgetPwd:hover{
                text-decoration:none;
                color:#fff;
            }
        </style>
    </head>

    <body>
    <form method="post" action="{{route('admin.login.do')}}">
        @csrf    
        <div class="container login-container">
                <div class="row">
                    <div class="col-md-6 login-form-1">
                        <h3>Login</h3>
                        
                            @if($errors->all())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>                                  
                                @endforeach
                            @endif

                            <div class="form-group">
                                <input name="email" type="text" class="form-control" placeholder="Email*" value="" required/>
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" placeholder="Senha*" value="" required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Login" />
                            </div>
                            <!-- div class="form-group">
                                <a href="#" class="btnForgetPwd">Esqueceu a senha?</a>
                            </div-->
                        
                    </div>
                </div>
            </div>
        </form>
        
    </body>
</html>



