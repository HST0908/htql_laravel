<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Document')</title>
    {{-- link to css bootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    {{-- reset css --}}
    <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet">
    {{-- fonts --}}
    <link href="{{ asset('assets/fonts/Montserrat/stylesheet.css') }}" rel="stylesheet">
    {{-- custom css --}}
    <link href="{{ asset('assets/css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container-xxl">
            <div class="box_wrap row g-0 al_center jus_between">
                <div class="logo-box col-10 col-md-10 col-sm-10 flex_box al_center">
                    <div class="main-logo text_center">
                        <div class="img_wrap">
                            <a href="/">
                                <img src="{{ asset('uploads/SKV.png') }}" loading="lazy" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="logo-name">
                        <h1 class="title">Sư phạm kỹ thuật vinh</h1>
                    </div>
                </div>
                <div class="menu_user col-2 col-md-2 col-sm-2">
                    <div id="menu-drop-user" class="menu_drop menu_drop-user">
                        <div class="drop_title flex_box al_center">
                            <div class="img-user">
                                <div class="img_wrap">
                                    <img class="img-fluid" src="{{ asset('uploads/chibi_captain.jpg') }}" loading="lazy" alt="">
                                </div>
                            </div>
                            <div class="user-name"><span>Client 1</span></div>
                        </div>
                        <div class="drop_list">
                            <div class="drop_item">
                                <a href="#">Tài khoản</a>
                            </div>
                            <div class="drop_item">
                                <a href="#">Trang quản trị</a>
                            </div>
                            <div class="drop_item">
                                <a class="log_out flex_box al_center" href="#"><ion-icon name="log-out-outline"></ion-icon>logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>