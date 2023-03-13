<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mono - Responsive Admin & Dashboard Template</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{ asset('assets/mono/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/mono/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('assets/mono/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />

    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="{{ asset('assets/mono/css/style.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>




    <!-- FAVICON -->
    <link href="{{ asset('assets/mono/images/favicon.png') }}" rel="shortcut icon" />

    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="{{ asset('assets/mono/plugins/nprogress/nprogress.js') }}"></script>
  </head>

</head>

<body class="bg-light-gray" id="body">
  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
    <div class="d-flex flex-column justify-content-between">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="card card-default mb-0">
            <div class="card-header pb-0">
              <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                <a class="w-auto pl-0" href="/index.html">
                  <img src="images/logo.png" alt="Mono">
                  <span class="brand-name text-dark">MONO</span>
                </a>
              </div>
            </div>
            <div class="card-body px-5 pb-5 pt-0">

              <h4 class="text-dark mb-6 text-center">Sign in for free</h4>
              @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


              <form id="login-form" method="post" action="{{route('login.login')}}">
                 @csrf 
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="email" class="form-control input-lg" id="email" name="email"  aria-describedby="emailHelp"
                      placeholder="email">
                  </div>
                  <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password">
                  </div>
                  <div class="col-md-12">

                    <div class="d-flex justify-content-between mb-3">

                      <div class="custom-control custom-checkbox mr-3 mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Remember me</label>
                      </div>

                      <a class="text-color" href="{{ route('login.recuperar_senha') }}"> Forgot password? </a>

                    </div>

                    <button type="submit" class="btn btn-primary btn-pill mb-4">Sign In</button>

                    <p>Don't have an account yet ?
                      <a class="text-blue" href="sign-up.html">Sign Up</a>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!--
<script>
   
   $('#login-form').submit(function (event){

        event.preventDefault();
        var form = $(this);
        var email = $('#email').val();
        var password = $('#password').val();
        var csrf_token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({

              type: 'POST',
              url: form.attr('action'),
              data: {
                     email: email,
                     password: password,
                     _token: csrf_token

              },
              datatype: 'json',
              success: function(response) {

                    if(response.success)
                    {
                        window.location.href = '/admin  ';
                    }
                    else
                    {
                      $('#error-message').html('Credenciais invalidas');
                    }
              },
              error: function()
              {
                $('#error-message').html('erro');
              }
        });
   })
</script>

  


  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <script>
    const form = document.getElementById('login-form');

form.addEventListener('submit', function (event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    //console.log(token);

  fetch('/login', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': token // adiciona o token CSRF ao cabeçalho da solicitação
    },
    body: JSON.stringify({ email, password })
  })
  .then(response => {
    if(response.ok) {
      return response.json(); // retorna o objeto JSON se a resposta for bem-sucedida
    } else {
      //throw new Error('Erro ao fazer login');
    }
  })
  .then(data => {
    // armazena o token JWT no navegador aqui
    //localStorage.setItem('token', data.token);

    // redireciona para a página de perfil do usuário
    window.location.href = '/admin';
  })
  .catch(error => console.error(error));
});

  </script>

  -->