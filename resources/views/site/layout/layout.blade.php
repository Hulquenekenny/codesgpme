<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <title>Ngola Gest : Site</title>
</head>
<body>
    <div>
        <div>
            <a href="{{ route('site') }}">Home</a>
            <a href="{{ route('site.sobre') }}">Sobre</a>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('admin') }}">Admin</a>
        </div>    
        <div>
                <strong>Selecione a lingua</strong><br>
                <select class="lang-change" name="changLang" id="lang-change">
                    <option value="en" {{ session()->get('lang_code')=='en' ? 'selected' : '' }} >English</option>
                    <option value="pt" {{ session()->get('lang_code')=='pt' ? 'selected' : '' }} >Portugues</option>
                    <option value="pt-br" {{ session()->get('lang_code')=='pt-br' ? 'selected' : '' }} >Portugues (BR)</option>
                </select>
        </div>
    </div>

    <!-- <a href="?locale=en">en</a>
    <a href="?locale=pt-br">pt-br</a>
    <a href="?locale=pt">pt</a> -->

    <h1>{{ __('language.Welcome') }}</h1>
    <div>
        @yield('site')
    </div>


    
    <!-- <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->

    <script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>


    <script>
        // console.log("sssssss");
        var url = "{{ route('lang.change') }}";

        $('.lang-change').change(function(){
        
            let lang_code = $(this).val();
            window.location.href = url + "?lang=" + lang_code;
            // alert(url);
        });

    </script>
</body>
</html>