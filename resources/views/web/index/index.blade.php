<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>宁夏智慧城市</title>
    <link rel="stylesheet" href="{{ asset('vendor/laravel-layui-admin/lib/layui/css/layui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/style.css') }}">
</head>
<body>
<div class="wd1200 center">
    {{--    顶部top bar   --}}
    <div class="layui-row top-search">
        <div class="layui-col-md1 login-btn">
            <a href="{{url('admin')}}" class="">登录后台</a>
        </div>
        <form action="#search" class="layui-form layui-col-md2 layui-col-md-offset8 ">
            <div class="layui-form-item">
                <input type="text" name="title" required lay-verify="required" placeholder="请输入标题 🔍" autocomplete="off" class="layui-input">
            </div>
        </form>
        <div class="layui-col-md1">

            <a href="search-button" class="layui-btn layui-btn-normal" style="float: left;">搜索</a>
        </div>

    </div>
    {{--    logo 菜单栏  --}}
    <div class="layui-row">
        <div class="layui-col-md4">
            <img src="{{ asset('images/logo.jpg') }}" alt="宁夏智慧城市">
        </div>
        <div class="layui-col-md8">
            <ul class="menus">
                <li class=""><a href="#" class="top-menu-btn">首页</a></li>
                <li class=""><a href="#" class="top-menu-btn active-btn">党群信息</a></li>
                <li class=""><a href="#" class="top-menu-btn">新闻公告</a></li>
                <li class=""><a href="#" class="top-menu-btn">社区导航</a></li>
                <li class=""><a href="#" class="top-menu-btn">社区服务</a></li>
                <li class=""><a href="#" class="top-menu-btn">在线服务</a></li>
            </ul>
        </div>
    </div>
</div>

{{--  轮播图  --}}
<div class="layui-carousel" id="my-banners">
    <div carousel-item>
        <div><a href="#1"><img src="{{asset('images/banner1.jpeg')}}" alt=""></a></div>
        <div><a href="#1"><img src="{{asset('images/banner1.jpeg')}}" alt=""></a></div>
        <div><a href="#1"><img src="{{asset('images/banner1.jpeg')}}" alt=""></a></div>
        <div><a href="#1"><img src="{{asset('images/banner1.jpeg')}}" alt=""></a></div>
        <div><a href="#1"><img src="{{asset('images/banner1.jpeg')}}" alt=""></a></div>
    </div>
</div>

{{--新闻|政府|登录--}}
<div class="layui-row wd1200 center index-news">
    <div class="layui-col-md5">
        <div class="index-news-top">
            <h4>社区新闻</h4>
{{--            <i class="layui-icon layui-icon-more layui-layout-right"></i>--}}
            <span class="index-news-top-right"> </span>
        </div>
        {{--  新闻轮播图  --}}
        <div class="layui-carousel" id="news-banners">
            <div carousel-item>
                <div><a href="#1"><img src="{{asset('images/news01.png')}}" alt=""></a></div>
                <div><a href="#1"><img src="{{asset('images/news01.png')}}" alt=""></a></div>
                <div><a href="#1"><img src="{{asset('images/news01.png')}}" alt=""></a></div>
                <div><a href="#1"><img src="{{asset('images/news01.png')}}" alt=""></a></div>
                <div><a href="#1"><img src="{{asset('images/news01.png')}}" alt=""></a></div>
            </div>
        </div>
    </div>
    <div class="layui-col-md5">
        <div class="index-news-top">
            <h4>社区新闻</h4>
            <span class="index-news-top-right"> </span>
        </div>
        <ul class="news-list">
            <li>
                <b>兴庆区多措并举刺激消费 按下企业复产复工加速键</b>
                <span>[03-20]</span>
            </li>
        </ul>
    </div>
    <div class="layui-col-md2">
        <div class="index-news-top">
            <h4>账号登录</h4>
        </div>
    </div>
</div>

<script src="{{ asset('vendor/laravel-layui-admin/lib/layui/layui.js') }}"></script>
<script>
    layui.use('carousel', function () {
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#my-banners'
            , width: '100%' //设置容器宽度
            , arrow: 'none' //始终显示箭头
            //,anim: 'updown' //切换动画方式
        });
        carousel.render({
            elem: '#news-banners'
            , width: '450px' //设置容器宽度
            , height: '175px' //设置容器宽度
            , arrow: 'always' //始终显示箭头
            //,anim: 'updown' //切换动画方式
        });
    });
</script>
</body>
</html>
