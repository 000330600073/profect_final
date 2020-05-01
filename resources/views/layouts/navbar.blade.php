<html>
<head>

    <link rel="stylesheet" type="text/css" href=" {{ asset('test/css/style.css')}}">

</head>
<body>


    <div class="sections">
        <button onclick="window.location.href = '/';"  >ГЛАВНАЯ</button>

        <button title="ПРЕМЬЕРЫ" onclick="window.location.href = '/premier';">ПРЕМЬЕРЫ</button>
        <button title="Сериалы" onclick="window.location.href = '/serial';">СЕРИАЛЫ</button>
        <button title="Аниме" onclick="window.location.href = '/anime';">АНИМЕ</button>
        <button title="Мульт" onclick="window.location.href = '/mult';">МУЛЬТ</button>
        <button title="Дата" onclick="window.location.href = '/view';">Data</button>
        <button title="Дата" onclick="window.location.href = '/home';">Comments</button>


    </div>
    <div class="posters">
        <div class="poster">
            <img src="{{asset('test')}}/img/1.jpg">
            <img src="{{asset('test')}}/img/2.jpg">
            <img src="{{asset('test')}}/img/3.jpg">
            <img src="{{asset('test')}}/img/4.jpg">
            <img src="{{asset('test')}}/img/5.jpg">
            <img src="{{asset('test')}}/img/6.jpg">
            <img src="{{asset('test')}}/img/7.jpg">
        </div>
    </div>

</body>
</html>
