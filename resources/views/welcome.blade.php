<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JobsVietNam</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap" rel="stylesheet">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
    <script src="https://kit.fontawesome.com/af4c7f8628.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
    <style>
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg,
    video {
        display: block;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
        --border-opacity: 1;
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .font-semibold {
        font-weight: 600
    }

    .h-5 {
        height: 1.25rem
    }

    .h-8 {
        height: 2rem
    }

    .h-16 {
        height: 4rem
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .ml-1 {
        margin-left: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mr-2 {
        margin-right: .5rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .ml-12 {
        margin-left: 3rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .max-w-6xl {
        max-width: 72rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .overflow-hidden {
        overflow: hidden
    }

    .p-6 {
        padding: 1.5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .pt-8 {
        padding-top: 2rem
    }

    .fixed {
        position: fixed
    }

    .relative {
        position: relative
    }

    .top-0 {
        top: 0
    }

    .right-0 {
        right: 0
    }

    .shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
        text-align: center
    }

    .text-gray-200 {
        --text-opacity: 1;
        color: #edf2f7;
        color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
        --text-opacity: 1;
        color: #e2e8f0;
        color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
        --text-opacity: 1;
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
        --text-opacity: 1;
        color: #718096;
        color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
        --text-opacity: 1;
        color: #4a5568;
        color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
        --text-opacity: 1;
        color: #1a202c;
        color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
        text-decoration: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
        width: 1.25rem
    }

    .w-8 {
        width: 2rem
    }

    .w-auto {
        width: auto
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width:768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width:1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme:dark) {
        .dark\:bg-gray-800 {
            --bg-opacity: 1;
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--bg-opacity))
        }

        .dark\:bg-gray-900 {
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--bg-opacity))
        }

        .dark\:border-gray-700 {
            --border-opacity: 1;
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--border-opacity))
        }

        .dark\:text-white {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity))
        }

        .dark\:text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .dark\:text-gray-500 {
            --tw-text-opacity: 1;
            color: #6b7280;
            color: rgba(107, 114, 128, var(--tw-text-opacity))
        }
    }
    </style>

    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    </style>
</head>

<body class="antialiased">
    <div class="first-page">
        <header class="header">

            <div class="logo">
                <img src="{{ asset('img/logo-header.png') }}" alt="logo">
            </div>
            <div class="flex items-center justify-center sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                <div class="hidden px-6 py-4 sm:block">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="home-click">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="auth text-white dark:text-white py-2 px-4">Log in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="auth ml-4 text-white dark:text-gray-500">Register</a>
                    @endif
                    @endauth
                </div>
                @endif

            </div>
        </header>
        <div class="content">
            <div>
                <p class="intro"><span class="upcase">100 </span>việc mới hôm nay</p>
                <p class="intro">và <span class="upcase">50000 </span>việc làm đang tuyển dụng</p>
                <button class="btn-content"><a href="{{url('/login')}}">ỨNG TUYỂN NGAY</a></button>
            </div>
            <div>
                <p class="intro"><span class="upcase">Hàng ngàn </span>hồ sơ ứng viên</p>
                <p class="intro">và <span class="upcase">+100 </span> CV mới cập nhật mỗi ngày</p>
                <button class="btn-content primary"><a href="{{url('/login')}}">ĐĂNG TUYỂN NGAY</a></button>
            </div>
        </div>
    </div>
    <div class="page-two">
        <h1 style="color: black;text-align: center;font-size: 30px;padding-top: 30px;font-weight: 700; ">VIỆC THEO NGÀNH
            NGHỀ</h1>
        <div class="type-job">
            <div class="img-cntt">
                <div class="one-tab">
                    <a href=""><img style="width:100%;width:170;height: 150px;object-fit: cover;"
                            src="http://utt.edu.vn/uploads/file-manager/images/cntt.jpg" alt="cntt" /></a>
                    <h3>Công nghệ thông tin</h3>
                </div>
            </div>
            <div class="img-cntt">
                <div class="two-tab">
                    <a href=""><img style="width:100%;width:170;height: 150px;object-fit: cover;"
                            src="{{ asset('img/thanh-lap-cong-ty-tu-van-thiet-ke-xay-dung.jpg') }}" alt="cntt" /></a>
                    <h3>Thiết kế-Xây dựng</h3>
                </div>
            </div>
            <div class="img-cntt">
                <div class="three-tab">
                    <a href=""><img style="width:100%;height: 150px;object-fit: cover;"
                            src="{{ asset('img/gia-su.jpg') }}" alt="cntt" /></a>
                    <h3>Gia Sư</h3>
                </div>
            </div>
            <div class="img-cntt">
                <div class="Four-tab">
                    <a href=""><img style="width:100%;height: 150px;object-fit: cover;"
                            src="{{ asset('img/bao-ve.jpg') }}" alt="cntt" /></a>
                    <h3>Bảo vệ</h3>
                </div>
            </div>
        </div>
        <div class="type-job">
            <div class="img-cntt">
                <div class="Five-tab">
                    <a href=""><img style="width: 100%;width:170;height: 150px;object-fit: cover;"
                            src="{{ asset('img/biendichvien.jpg') }}" alt="cntt" /></a>
                    <h3>Biên dịch viên</h3>
                </div>
            </div>
            <div class="img-cntt">
                <div class="Six-tab">
                    <a href=""><img style="width:100%;width:170;height: 150px;object-fit: cover;"
                            src="{{ asset('img/khachsan.jpg') }}" alt="cntt" /></a>
                    <h3>Khách sạn</h3>
                </div>
            </div>
            <div class="img-cntt">
                <div class="Seven-tab">
                    <a href=""><img style="width:100%;width:170;height: 150px;object-fit: cover;"
                            src="{{ asset('img/kinh-doanh.jpg') }}" alt="cntt" /></a>
                    <h3>Kinh doanh</h3>
                </div>
            </div>
            <div class="img-cntt">
                <div class="Eigth-tab">
                    <a href=""><img style="width:100%;width:170;height: 150px;object-fit: cover;"
                            src="{{ asset('img/shipper.jpg') }}" alt="cntt" /></a>
                    <h3>Shipper</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-item">
            <p class="mb-40 footer-logo">JobVietNam</p>
            <p class="footer-text">LeNhan Design CopyRight© 2022</p>
        </div>
        <div class="footer-item">
            <div class="infor-footer">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAipJREFUSEvFlvExhDEQxd9VgApQASpABagAFaACVIAKUAEqQAWoABXQAfO72TUrl3xJjpnbf24mX5K3u+/ty400oxjNCFfTAC9JWpG0akk/S3qR9NZTRA/wnqRjSQDnggTOJV23JNACDNBNqLB2Lwns1DpQA6ad95LmDe3dqnqQBADBng1Jh5IWbe1T0mbYM5HsEDBgT6G1F3b5UMW0+sA2wPmaJJLoAr6StGsnjqxSv4D2+zc4jcKi8jPbyDe00QzMxa+2+07SdnKS1kIBQUtpfYxbSVu2sJzju9TqE1MwZ3MHa8Ax8bRb43xKwFSwbvPp8xorqgGzF/Ex748mvl8tKQEjiDlJUVAk82WnEV40kCggWk+40Pi2kJJcAnaAU0m0nfC1nFbimt8Z6ZrAKQGjUmYyrdgBqJg2EthlrBgaCJ8KZn/C7WocZ/kxzoZUDbDrpIvjOMPwk5pATVx05MMqz85yqWKEg2sR+9a2HlVjGpd2APdye/25Y8gynWd+meUYcOaORHfSJ9HPZvnloiHgaH1ZEyjIu+lc7XXyzOGYltUeezoBRXCM2nPmM863BhxFBE+YQ/a1MTCU7mA5D2/i2DdFI4BPxJaL+DBE48lurlXsh3wm3RhS8Dh+pdn/lUArMJwB7m4VK4+g8Ao9JTq6Wu2bU3B/g90im0FbxJXyk4L79y7QaYA5AzhPXvzrw+xW2xuraOU4p8zoXAWhl5f/AtwN9l8V/wn4G7p3fh+xoDFyAAAAAElFTkSuQmCC"/>
                <div>
                    <p class="footer-text"> Việt Nam</p>
                    <p>Tp.Hồ Chí Minh</p>
                </div>
            </div>
            <div class="infor-footer">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAmNJREFUSEvFlo2RDVEQhc9GgAgQASJABIjAigARIAJEwEaACBDB7kZACGSgvlf3TJ3X7s+ztmq7auq9mbndp39Od8+RrkiOrghXlwF8LOmmpG+SziX9OiSYFfCDZnBmC8D7cYD7Nyu9EfB1SV8l3ZV0JunhJJIKbB94/mSk1wNOUBtZgeOgL1J/rSmi96w5v5e1CtwDPRTc525J+hjp7zpdgTNtEOWxpM+S7kQENe2O8HuJ7LWkV00Pu+htksAY+NDeAAqxYChZQHEEns7+bHUlSiTfAcz9ThI4PbxRSFHBTyThaDVuu/da9KQdJ6j5XtSjiG9LwntLrT3tgqMWiEVZnFp0sYG8k/S8/d8CSmBSSwshe2lpXjvVGW1g7/5m1hx1lnCzm8B4fdos0QIwE0mHvrTIKmBGbhsvW7Spv2WqshoyUY8K4OezaA1uAuG4nf/rWQXm4NNmId/l80q8UfTT5xUYgnxapPu9pBcXQgul3siEkWybZCYqDJJHHadsDua/bTfUd7qlesDJwmwbDOOM5zBtwnsPGS8VsFezfbiPHTVGaQFPIhhK5AYHhPp7QWQFpuCjtZgtgBP0pFNH5IA57QnGqEVms313YPYhAIFcs573OEdZICQZ8HzH7my2L4GdRrdXXQAZaf1S6S0WsrbJ6tMHA5DI4KTbpFp1FAviRxwabqeZoUw754ieucyE67VNXSqUAQIeHHFNJ6Six1NgORfO/G6/2Vq52y8EbCUIRbTVgV7GuqArVq9qCJu5IFbPCT6FeN+dYCtyrcD9HiLlRfuR/qFcFvChDv5Xjf8ZpKfwB0tQoR83Z3ONAAAAAElFTkSuQmCC"/>
                <p>0788710207</p>
            </div>
            <div class="infor-footer">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAWxJREFUSEvtluExBEEQRt9FQAZk4GQgA0SACI4IEAEiIANE4EIgAzIgAupdTauptTdr76Zu/2z/292Zft1fd8/shIFsMhCXEbwx5ZtSnwKXwG7lCN6Ba+Ah/ObgA+ClMrDpbh949WUOvkrZ+t7oapoqhl85S8F+rAVvJlQEG9QTcAZ8rpj6NnAPHGX7TaYT7Hqb4jjq0iOAKfDY0qSd4GfgMIHM+CLvyI4AnIwbwIy13Fcn2KY7Tw6C4ygofclcc5ItMOBb4Pu/zRXd7ohZ66200VFQekuQm3OvtEqsfaXaztNzb7D7lEwHe5n0wsOpwQkNad8A3+VNuRI4MlOyWZam3akyMaN+ukslapZjLbDObBwDCOkDoLT2xO+R2CCvDdafdRQQ0iutAS2OwiVWBRx1N3PNTLsOmWrgQnKtn0Zw8XbqK2dp/eJiSDfen0tisB+BmFMj2qmZLvCRrsPWX5/KrLK78b96Y3IPJvUPSg9eH6QClw8AAAAASUVORK5CYII="/>
                <p>nhanboyll@gmail.com</p>
            </div>
        </div>
        <div class="footer-item">
            <p class="mb-40">About the company</p>
            <p class="mb-40 footer-text">JobsVietNam is the leading job search website in Vietnam</p>
            <div>
                <a class="icon-footer" href="https://www.facebook.com/lenhan2206"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAc1JREFUSEvFlu0xBUEQRe+LABEgAkSACBABGSgRIAIlAkSACBABGSADIqCO2t2aHT09PfPn9a/3Mbunb3/OQkuyxZK46gHvSVqRtD04/SbpS9JLi4goGMippENJqwUA8AdJ15JwxrUaGMiVpJPai7L/byWdDZEwH/XAqLyXtNEIHY9/SDoqqS+BgT45YY36Qvj3LbgFJryvQaWfQ14BjEbx7SbfUb6Th90Ck5/jgCSK6MLII7+dZ8/f5XWSgwkxamtG66DMMgvMuU1JqP+zHBxVS9HQOqnhyM+gzOqCmeocTK4YDjUjZ2mv4sRB5SHevWYpxmMqOWK5wyiNGBX+nIeaqUTfRqwXPKUofUGpKCxHesGXQyfMissDe1WcO+bl2wRTiTeFOLeAKbqtwnvMUHvF1QL2Cm3qhmg70fj0+GiELDXSNAL5bNl3Ovt7B0hPcbkDhBX4HuinHrA7MmFGplAruLokALMWqcx1R3kLmNXJ8klXZ/Gyx0FGW2luR8EUFN3y7w5Wu/oQdkt5BIxSxrB58Ytc9mijfPPUwI/DepyFN01dDTyepdrpTxQQfgtMWIkQ56aFX6qTKDh9nvzn4bN+c7uyBxxo8/qRpYF/ATESYx8MOAMfAAAAAElFTkSuQmCC"/></a>
                <a class="icon-footer" href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAATFJREFUSEvtVu0RwUAU3FSACuiADtABHeiADlCBEugAFaADHaADJZjNXMzlhGxO4vLDm8kkmdn3Nvs+7iVCIIsC8eJP/LPM1y7VAwB9Sz7fVbsC4EW7AzgDOLnOruIegC2Ajsoi4kg+tj7opauPjlIxrgRj7GGCtBVT5UUK4Q9qmfSnFLOOB/+YkicVU3mKeAJgLbjvTQ90BawLYZ13LvECwFwItgRA7MzcG4JPAkl8U4qLEjNY05BPRfLSiBM+NuZGmIhKiNkfeQdNacRMNdPMMilWCjGnYGXqrJASk0msjhPHgTXl8VrUMuc42AES7Mhk2qpcElyNz67PWousYbto8XLwNwAjs5tj6Ls/EH6ZPZNsJI6OavEiMMZn+/0jsUrgjavdP5e3EtXxr1jN1Ne4B323OB8cG9DtAAAAAElFTkSuQmCC"/></a>
                <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAeNJREFUSEvNlrsuRUEUhr/zBHgCl4YOlUZBoiKChJ5egopQIJFIVCQeQE/iEhoNolFSigJPgDeQP1mT7DNmZl9sOSY5yd5nr5lv//+svWY1aNFotIjLvwd3AZ0F3XkH3vJiU4rbgU1gHtB1mfEJHAHbgK5/jBh4BDitAPQBgs4At/6DEFjqXmuAOpZsH/SVh8D7wFIZX73YJ7vvz/x/ACxn40Jg2dNWESzogM19BBxcqrtTYNn8kQO9s8Rxmat8mDaIYLJVIwvWfUfWbl+xFrlJgBcMGgrZsq9ALyTXnHIXO5pNsjJgB+0D5oBhW/EeOAaeAQcPvVglsOyVG73AITDmrXwNLAIvVjxCxaYSeAVQtm8AO5GtWAd2E6orgd2kK2A8Ar4ApizRVHz88SvwJTARAZ8bVBleG9hZvWZ2htirwF7dVrsC0GN7PemRpVaVSXH61ZZc4jjVqkCzwJDBH4ATA6bKbaU9dgKlSnXXH+4IbarHXlASXKRkykopU0lUvCqUzmw1C6mRLJmaGNujnHWTj9WVNL3YXxyLoTcodCzKPtlYtMfKc0JqtR1NLVCs9VHgWQ3wLysqhVofp0DKddqoEpVVL6CaPc0v1eyFPhf/fI1Z7IpIcgv+fUOfl0Cln7dM8Tdp5m0fVyF0JgAAAABJRU5ErkJggg=="/></a>            
            </div>
        </div>
    </div>
</body>

</html>