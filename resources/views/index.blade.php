@section('head')
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    @if( isset($title))
        <title>{{ $title }}</title>
    @else
        <title>Title</title>
@endif

<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
<header>
    <div class="container clearfix">
        <div class="right head-block">
            <div class="head-block-inner">
                <ul>
                    <li><a href="{{ route('index') }}">Главная</a></li>
                    <li><a href="{{ route('registration') }}">Регистрация</a></li>
                </ul>
            </div>
        </div>
        <div class="toggle-block right">
            <a href="#" class="toggle-mnu hidden-lg"><span></span></a>
        </div>
    </div>
</header>
@show

@section('main')
    <main>
        <section class="main">
            <div class="container">
                <h1>Зарегистрированные абитуриенты</h1>
                <div class="main-content">
                    <table class="table category-product">
                        <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Номер группы</th>
                            <th>Баллы</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($data))
                            @foreach($data as $applicant)
                                <tr>
                                    <td>{{ $applicant->name }}</td>
                                    <td>{{ $applicant->surname }}</td>
                                    <td>{{ $applicant->group_number }}</td>
                                    <td>{{ $applicant->score_vno }}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container">
                <div class="paginate">
                    @if(!empty($data))
                        <h1>{{ $data->render() }}</h1>
                    @endif
                </div>
            </div>
        </section>
    </main>
@show

@section('footer')
    <footer>
        <div class="container">
            <ul>
                <li><a href="{{ route('index') }}">Главная</a></li>
            </ul>
        </div>
    </footer>
</body>


</html>
@show