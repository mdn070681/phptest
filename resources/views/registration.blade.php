@extends('index')

@section('head')
    @parent
@endsection

@section('main')
    <main>
        <section class="contact">
            <div class="container">
                <form action="{{ route('registration') }}" method="post" class="contact-form">
                    {{ csrf_field() }}
                    <h1>Регистрация</h1>
                    <input type="text" name="name" value="{{ old('name') }}" required placeholder="Имя" maxlength="100">
                    <input type="text" name="surname" value="{{ old('surname') }}" required placeholder="Фамилия"
                           maxlength="100">
                    Пол :&nbsp &nbsp
                    @if(old('gender') == 'male')
                        <input type="radio" name="gender" value="male" checked/> М&nbsp
                        <input type="radio" name="gender" value="female"/> Ж<br/><br/>
                    @else
                        <input type="radio" name="gender" value="male"/> М&nbsp
                        <input type="radio" name="gender" value="female" checked/> Ж<br/><br/>
                    @endif
                    <input type="text" name="group_number" value="{{ old('group_number') }}" required
                           placeholder="Номер группы " minlength="2" maxlength="5" pattern="[a-zA-ZА-Яа-я0-9]+">
                    <input type="email" name="email" value="{{ old('email') }}" required placeholder="Email">
                    <input type="number" name="score_vno" value="{{ old('score_vno') }}" required
                           placeholder="Число баллов на ВНО " min="100" max="200">
                    <input type="number" name="year" value="{{ old('year') }}" required placeholder="Год рождения "
                           min="1958" max="2017">
                    <select type="text" name="local_or_foreigner" required>
                        @if(old('local_or_foreigner') == 'foreigner' )
                            <option value="local">Местный</option>
                            <option value="foreigner" selected>Иногородний</option>
                        @else
                            <option value="local" selected>Местный</option>
                            <option value="foreigner">Иногородний</option>
                        @endif
                    </select>
                    @if( old('email') )
                        <input type="submit" value="Изменить">
                    @else
                        <input type="submit" value="Отправить">
                    @endif
                </form>
            </div>
        </section>
    </main>
    <pre>
    {{ print_r(Session::all()) }}
    </pre>
@endsection

@section('footer')
    @parent
@endsection