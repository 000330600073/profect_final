

<html>
<head>
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href=" {{ asset('test/css/style.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>




</style>

</head>

<body>

@include('layouts.header')
<main>
    <div class="wrapper">
    @include('layouts.navbar ')
    <div class="container">
        <div class="aside">
            <div class="inaside"> <h4> ПАНЕЛЬ НАВИГАЦИИ </h4> </div>
            <hr>
            <div class="inaside" >
                    <div class="mini1" style="border-top:0px; padding-top:0px;">
                        <h4>КАТЕГОРИИ</h4><br>
                        <a href=" ">Биографии</a><span style="float:right">(255)</span><br>
                        <a href=" ">Боевики</a><span style="float:right">(1581)</span><br>
                        <a href=" ">Вестерны</a><span style="float:right">(76)</span><br>
                        <a href=" ">Военные</a><span style="float:right">(237)</span><br>
                        <a href=" ">Детективы</a><span style="float:right">(627)</span><br>
                        <a href=" ">Документ</a><span style="float:right">(64)</span><br>
                        <a href=" ">Драмы</a><span style="float:right">(2814)</span><br>
                    <a href=" ">Исторические</a><span style="float:right">(237)</span><br>
                    <a href=" ">Комедии</a><span style="float:right">(1983)</span><br>
                    <a href=" ">Криминал</a><span style="float:right">(730)</span><br>
                    <a href=" ">Мелодрамы</a><span style="float:right">(694)</span><br>
                    <a href=" ">Мультфильмы</a><span style="float:right">(470)</span><br>
                    <a href=" ">Мюзиклы</a><span style="float:right">(25)</span><br>
                    <a href=" ">Приключения</a><span style="float:right">(1168)</span><br>
                    <a href=" ">Семейные</a><span style="float:right">(495)</span><br>
                    <a href=" ">Cпортивные</a><span style="float:right">(146)</span><br>
                    <a href=" ">Триллеры</a><span style="float:right">(2036)</span><br>
                    <a href=" ">Ужасы</a><span style="float:right">(808)</span><br>
                    <a href=" ">Фантастика</a><span style="float:right">(869)</span><br>
                    <a href=" ">Фэнтези</a><span style="float:right">(594)</span><br><br>
                </div>
                <div class="mini2" style="border-top:0px; padding-top:0px;">
                    <h4>По году</h4><br>
                    <a href=" ">2020 года</a><span style="float:right">(682)</span><br><br>
                    <hr>
                    <div class="mini"><br>
                        <h4>По странам</h4><br>
                        <a href=" ">Американские</a><span style="float:right">(3961)</span><br>
                        <a href=" ">Российские</a><span style="float:right">(698)</span><br>
                        <a href=" ">Индийские</a><span style="float:right">(135)</span><br>
                        <a href=" ">Немецкие</a><span style="float:right">(390)</span><br>
                        <a href=" ">Французские</a><span style="float:right">(528)</span><br>
                        <a href=" ">Советские</a><span style="float:right">(147)</span>
                        <div class="mini"><br><br><hr><br>
                            <h4>Сериалы</h4><br>
                            <a href=" ">Русские</a><span style="float:right">(924)</span><br>
                            <a href=" ">Зарубежные</a><span style="float:right">(1805)</span><br>
                            <a href=" ">NetFlix</a><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inaside2" >
                <h2>Скоро на сайте</h2><br>
                <hr>
                <br>
                <ul>
                    <li class="li_block">
                        <div class="li_block_title"><a href=" ">
                                <img src="{{asset('test')}}/img/99.jpg" align="left" alt="Эвакуация (2020)">
                                Эвакуация (2020)</a></div>
                        <div class="blockstory">Наёмнику Тайлеру Рэйку поручают освободить сына международного преступника. Мальчик - пешка в войне двух наркобаронов, и его держат в заложниках в городе Дакка, столице ...<br><b>Премьера: 24 апреля 2020</b></div>
                    </li>
                    <li class="li_block">
                        <div class="li_block_title"><a href=" ">
                                <img src="{{asset('test')}}/img/100.jpg" align="left" alt="Круиз по джунглям (2020)">
                                Круиз по джунглям (2020)</a></div>
                        <div class="blockstory">Отважная исследовательница дикой природы Лили Хоутон намерена отправиться в верховья Амазонки, чтобы найти легендарное дерево, которое - согласно преданиям южноамериканских ...<br><b>Премьера: 22 июля 2020</b></div>
                    </li>

                </ul>



            </div>


        </div>


        <div class="content">
            <div class="mini" style="border-top:0px; padding-top:0px;">
                <form name="news_set_sort" id="news_set_sort" method="post" action="">Сортировать по:&nbsp;
                    <img src="/templates/Kinogo/dleimages/desc.gif" alt="">
                    <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; dle_change_sort('date','asc'); return false;">дате</a>
                    |
                    <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; dle_change_sort('rating','desc'); return false;">рейтингу</a>
                    |
                    <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; dle_change_sort('news_read','desc'); return false;">посещаемости</a>
                    |
                    <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; dle_change_sort('comm_num','desc'); return false;">комментариям</a>
                    |
                    <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; dle_change_sort('title','desc'); return false;">алфавиту</a>
                    <input type="hidden" name="dlenewssortby" id="dlenewssortby" value="date">
                    <input type="hidden" name="dledirection" id="dledirection" value="DESC">
                    <input type="hidden" name="set_new_sort" id="set_new_sort" value="dle_sort_main">
                    <input type="hidden" name="set_direction_sort" id="set_direction_sort" value="dle_direction_main">
                </form>
            </div>
            <br><br>


            @yield('insides')
            <br>

        </div>
    </div>



@include('layouts.footer ')
    </div>
</main>

</body>
</html>






