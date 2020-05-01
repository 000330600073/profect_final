@extends('layouts.main')
@section('insides')
    <style>
        body {

            background-size: 77% 60% ;
            background-repeat: no-repeat;
            background-position: 50% 0;
            background-image: url('/test/img/fon3.jpg');
            background-color: black;
            background-attachment: fixed;

        }

    </style>
    <div class="incontent">
        <div class="shortstory shid23872" data-id="23872" data-overlay="false">
            <div class="shortstorytitle">
                <div style="width: 160px;float: right;"></div>
                <h2 class="zagolovki"><a aria-label="Яга. Кошмар тёмного леса (2020)" href="">
                        Яга. Кошмар тёмного леса (2020) </a></h2>
            </div>
            <div class="overlaytumb">
                <a aria-label="Яга. Кошмар тёмного леса (2020)"  href="" >
                    <img alt="Яга. Кошмар тёмного леса (2020)" src="{{asset('test')}}/img/6.jpg" width="200" height="300" style="float:left;"></a>
            </div>
            <br><br>
            <div id="news-id-23872" style="display:inline;">В центре сюжета - молодая семья, которая переехала в новую квартиру на окраине города. Нанятая ими для новорожденной дочери няня быстро вошла в доверие. Однако старший мальчик, Егор, рассказывает о пугающем поведении женщины, но родители ему не верят. Камеры наблюдения, установленные отцом для успокоения, лишь подтверждают - всё в порядке. И вот однажды Егор, вернувшись домой, не находит никаких следов ни няни, ни маленькой сестры, а родители пребывают в странном трансе и даже не помнят, что у них была дочь.
            </div><br><br>
            <div class="quote">
                <b>Год выпуска:</b> <a href=" ">2020</a><br>
                <b>Страна:</b> Россия<br>
                <b>Жанр:</b> <a href=" ">Ужасы</a><br>
                <b>Качество:</b> WEB-DLRip<br>
                <b>Перевод:</b> Оригинал<br>
                <b>Продолжительность:</b> 97 мин. / 01:37<br>
                <b>Кинопоиск:</b> 5.173 (987)<br>
                <b>IMDB:</b> 6.60 (138)<br>
                <b>Премьера:</b> 1 марта 2020<br>
                <br><b>Режиссер:</b> <a href="">Святослав Подгаевский</a><br>
                <b>В ролях:</b> <a href="  ">Олег Чугунов</a>, <a href=" ">Глаша Голубева</a>, <a href=" ">Артём Жигулин</a>, <a href="  ">Игорь Хрипунов</a>, <a href=" ">Светлана Устинова</a>
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
    <iframe width="638" height="415"
            src="https://www.youtube.com/embed/up7BG1QDkHg">

    </iframe>
@yield('content')


@endsection
