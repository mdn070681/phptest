@extends('index')

@section('head')
    @parent
@endsection

@section('main')
    <main>
        <section class="contact">
            <div class="container">
                @if(count($errors) >0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="container">
                <form action="{{ route('formHandler') }}" method="post" class="contact-form">
                    {{ csrf_field() }}
                    <h1>Регистрация</h1>
                    <input type="text" name="name" value="{{ $applicant->name or old('name') }}"
                           placeholder="Имя" required maxlength="100">
                    <input type="text" name="surname" value="{{ $applicant->surname or old('surname') }}"
                           placeholder="Фамилия"
                           required maxlength="100">
                    Пол :&nbsp &nbsp

                    @if(isset($applicant->gender) ? $applicant->gender : old('gender') == 'male')
                        <input type="radio" name="gender" value="male" checked/> М&nbsp
                        <input type="radio" name="gender" value="female"/> Ж<br/><br/>
                    @else
                        <input type="radio" name="gender" value="male"/> М&nbsp
                        <input type="radio" name="gender" value="female" checked/> Ж<br/><br/>
                    @endif
                    <input type="text" name="group_number" value="{{ $applicant->group_number or old('group_number') }}"
                           placeholder="Номер группы " required minlength="2" maxlength="5"
                           pattern="[a-zA-ZА-Яа-я0-9]+">
                    <input type="email" name="email" value="{{ $applicant->email or old('email') }}" required
                           placeholder="Email">
                    <input type="number" name="score_vno" value="{{ $applicant->score_vno or old('score_vno') }}"
                           placeholder="Число баллов на ВНО " required min="100" max="200">
                    <input type="number" name="year" value="{{ $applicant->year or old('year') }}"
                           placeholder="Год рождения "
                           min="1958" max="2017" required>
                    <select type="text" name="local_or_foreigner" required>
                        @if(isset($applicant->local_or_foreigner) ? $applicant->local_or_foreigner : old('local_or_foreigner') == 'foreigner' )
                            <option value="local">Местный</option>
                            <option value="foreigner" selected>Иногородний</option>
                        @else
                            <option value="local" selected>Местный</option>
                            <option value="foreigner">Иногородний</option>
                        @endif
                    </select>
                    @if( isset($applicant->email) ? $applicant->email : old('gender') )
                        <input type="submit" value="Изменить">
                    @else
                        <input type="submit" value="Отправить">
                    @endif
                </form>
            </div>
        </section>
    </main>
@endsection

@section('footer')
    @parent
@endsection