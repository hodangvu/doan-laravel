    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <x-app-layout>
        <x-slot name="header">
        </x-slot>
        <div class="section">
            <div class="page-one-dashboard">
                <div class="tuyen-dung">
                    <a class="nhatuyendung" href="{{URL::to('/tuyendung')}}">NHÀ TUYỂN DỤNG</a>
                </div>
            </div>
            <div class="page-two-das">
                <div class="form-search">
                    <p class="title-form">TÌM KIẾM VIỆC LÀM</p>
                    <hr>
                    <form action="" method="get" class="form">
                        <div class="input-form">
                            <label>Ngành nghề</label>
                            <input type="text">
                        </div>
                        <div class="input-form">
                            <label>Địa Điểm</label>
                            <select>
                                <option>Hà Nội</option>
                                <option>Đà Nẵng</option>
                                <option>TP Hồ Chí Minh</option>
                            </select>
                        </div>
                        <div class="button-form">
                            <div class="icon">
                                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="page-3-dashboard">
            <p class="title-p2">CÔNG VIỆC NỔI BẬT</p>
            <div class="feature-job">
                <div class="feature-job-1">
                    <img class="img-feature" src="{{ asset('img/it.jpg') }}" alt="it">
                    <div class="content-job-feature">
                        <p>KỸ SƯ PHẦN MỀM</p>
                        <div class="location">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <p>Hà Nội</p>
                            <p class="time">FULL TIME</p>
                        </div>
                        <p>Tăng lương hàng năm - Review thưởng 2 lần/ năm, thử việc 100% lương. Có cơ hội làm việc đào
                            tạo tại nước ngoài. Được chăm sóc sức khỏe toàn diện bằng gói bảo hiểm sức khỏe của Bảo hiểm
                            Bảo Việt.</p>
                    </div>

                </div>
                <div class="feature-job-1">
                    <img class="img-feature" src="{{ asset('img/cs.jpg') }}" alt="it">
                    <div class="content-job-feature">
                        <p>CHĂM SÓC KHÁCH HÀNG</p>
                        <div class="location">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <p>Đà Nẵng</p>
                            <p class="time">FULL TIME</p>
                        </div>
                        <p>Mức thu nhập hấp dẫn, cạnh tranh thị trường. Chế độ BHXH , BHYT , BHTN đầy đủ. Tháng lương
                            13. Thưởng theo quý/năm , lễ/Tết.</p>
                    </div>

                </div>
                <div class="feature-job-1">
                    <img class="img-feature" src="{{ asset('img/gd.jpg') }}" alt="it">
                    <div class="content-job-feature">
                        <p>THIẾT KẾ ĐỒ HỌA</p>
                        <div class="location">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <p>TP.Hồ Chí Minh</p>
                            <p class="time-part">PARTIME</p>
                        </div>
                        <p>Thưởng dựa trên hiệu quả hoạt động của công ty. Lương cạnh tranh thương lượng theo từng cấp
                            độ. Máy tính xách tay, màn hình được cung cấp.</p>
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
            <div class="infor-footer">
                <a class="icon-footer" href="https://www.facebook.com/lenhan2206"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAc1JREFUSEvFlu0xBUEQRe+LABEgAkSACBABGSgRIAIlAkSACBABGSADIqCO2t2aHT09PfPn9a/3Mbunb3/OQkuyxZK46gHvSVqRtD04/SbpS9JLi4goGMippENJqwUA8AdJ15JwxrUaGMiVpJPai7L/byWdDZEwH/XAqLyXtNEIHY9/SDoqqS+BgT45YY36Qvj3LbgFJryvQaWfQ14BjEbx7SbfUb6Th90Ck5/jgCSK6MLII7+dZ8/f5XWSgwkxamtG66DMMgvMuU1JqP+zHBxVS9HQOqnhyM+gzOqCmeocTK4YDjUjZ2mv4sRB5SHevWYpxmMqOWK5wyiNGBX+nIeaqUTfRqwXPKUofUGpKCxHesGXQyfMissDe1WcO+bl2wRTiTeFOLeAKbqtwnvMUHvF1QL2Cm3qhmg70fj0+GiELDXSNAL5bNl3Ovt7B0hPcbkDhBX4HuinHrA7MmFGplAruLokALMWqcx1R3kLmNXJ8klXZ/Gyx0FGW2luR8EUFN3y7w5Wu/oQdkt5BIxSxrB58Ytc9mijfPPUwI/DepyFN01dDTyepdrpTxQQfgtMWIkQ56aFX6qTKDh9nvzn4bN+c7uyBxxo8/qRpYF/ATESYx8MOAMfAAAAAElFTkSuQmCC"/></a>
                <a class="icon-footer" href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAATFJREFUSEvtVu0RwUAU3FSACuiADtABHeiADlCBEugAFaADHaADJZjNXMzlhGxO4vLDm8kkmdn3Nvs+7iVCIIsC8eJP/LPM1y7VAwB9Sz7fVbsC4EW7AzgDOLnOruIegC2Ajsoi4kg+tj7opauPjlIxrgRj7GGCtBVT5UUK4Q9qmfSnFLOOB/+YkicVU3mKeAJgLbjvTQ90BawLYZ13LvECwFwItgRA7MzcG4JPAkl8U4qLEjNY05BPRfLSiBM+NuZGmIhKiNkfeQdNacRMNdPMMilWCjGnYGXqrJASk0msjhPHgTXl8VrUMuc42AES7Mhk2qpcElyNz67PWousYbto8XLwNwAjs5tj6Ls/EH6ZPZNsJI6OavEiMMZn+/0jsUrgjavdP5e3EtXxr1jN1Ne4B323OB8cG9DtAAAAAElFTkSuQmCC"/></a>
                <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAeNJREFUSEvNlrsuRUEUhr/zBHgCl4YOlUZBoiKChJ5egopQIJFIVCQeQE/iEhoNolFSigJPgDeQP1mT7DNmZl9sOSY5yd5nr5lv//+svWY1aNFotIjLvwd3AZ0F3XkH3vJiU4rbgU1gHtB1mfEJHAHbgK5/jBh4BDitAPQBgs4At/6DEFjqXmuAOpZsH/SVh8D7wFIZX73YJ7vvz/x/ACxn40Jg2dNWESzogM19BBxcqrtTYNn8kQO9s8Rxmat8mDaIYLJVIwvWfUfWbl+xFrlJgBcMGgrZsq9ALyTXnHIXO5pNsjJgB+0D5oBhW/EeOAaeAQcPvVglsOyVG73AITDmrXwNLAIvVjxCxaYSeAVQtm8AO5GtWAd2E6orgd2kK2A8Ar4ApizRVHz88SvwJTARAZ8bVBleG9hZvWZ2htirwF7dVrsC0GN7PemRpVaVSXH61ZZc4jjVqkCzwJDBH4ATA6bKbaU9dgKlSnXXH+4IbarHXlASXKRkykopU0lUvCqUzmw1C6mRLJmaGNujnHWTj9WVNL3YXxyLoTcodCzKPtlYtMfKc0JqtR1NLVCs9VHgWQ3wLysqhVofp0DKddqoEpVVL6CaPc0v1eyFPhf/fI1Z7IpIcgv+fUOfl0Cln7dM8Tdp5m0fVyF0JgAAAABJRU5ErkJggg=="/></a>            
            </div>
        </div>
    </div>
    </x-app-layout>