<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuyển Dụng</title>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<!-- <body>
    <div class="wrap">
        <div class="post-job">
            <h2 class="dangtintuyendung">Đăng tin tuyển dụng</h2>
            <div class="form-tuyen-dung">
                <form  action="{{url('/user/create')}}" method = "POST">
                    <div class="form-input">
                        <label for="input-name">Tên công việc</label>
                        <input type="text" placeholder="Nhập tên công việc">
                    </div>
                    <div class="form-input">
                        <label for="input-level">Cấp bậc tuyển dụng</label>
                        <input type="text" placeholder="Nhập cấp bậc tuyển dụng">
                    </div>
                    <div class="form-input">
                        <label for="input-name">Yêu cầu độ tuổi</label>
                        <input type="text" placeholder="Nhập độ tuổi">
                    </div>
                    <div class="form-input">
                        <label for="input-name">Số lượng tuyển</label>
                        <input type="text" placeholder="Nhập số lượng tuyển">
                    </div>
                    <div class="form-input">
                        <label for="input-name">Ngành nghề tuyển dụng</label>
                        <input type="text" placeholder="Nhập tên ngành nghề tuyển dụng">
                    </div>
                    <div class="form-input">
                        <label for="input-name">Trình độ</label>
                        <input type="text" placeholder="Nhập trình độ ">
                    </div>
                    <div class="form-input">
                        <label for="input-name">Mức lương</label>
                        <input type="text" placeholder="Nhập mức lương">
                    </div>
                    <div class="form-input">
                        <label for="input-name">Số năm kinh nghiệm</label>
                        <input type="text" placeholder="Nhập số năm kinh nghiệm">
                    </div>
                    <div class="form-input">
                        <label for="input-name">Hạn nộp hồ sơ</label>
                        <input type="datetime" placeholder="Nhập hạn nộp hồ sơ">
                    </div>
                    <div class="form-input">
                        <label for="input-name">Địa điểm tuyển dụng</label>
                        <input type="text" placeholder="Nhập số năm kinh nghiệm">
                    </div>
                    <div class="form-input">
                        <label for="input-name">Mô tả công việc</label>
                        <input type="text" style="height: 200px;">
                    </div>
                    <p class="title-contact">Thông tin liên hệ</p>
                    <div class="form-input">
                        <label for="input-name">Người liên hệ</label>
                        <input type="text" placeholder="Nhập người liên hệ">
                    </div>
                    <div class="form-input">
                        <label for="input-name">Số điện thoại</label>
                        <input type="text" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="form-input">
                        <label for="input-name">Email liên hệ</label>
                        <input type="text" placeholder = "Nhập email liên hệ">
                    </div>
                    <div class="form-input">
                        <label for="input-name">Địa chỉ</label>
                        <input type="text" placeholder="Nhập địa chỉ">
                    </div>

                </form>
            </div>
            <button type="submit">Save</button>
        </div>
    </div>
</body> -->

<body>
    <form action="create-user" method="post">
    @csrf
        <div class="form-input">
            <label for="input-name" >Tên công việc</label>
            <input type="text" name="abc" placeholder="Nhập tên công việc">
        </div>  
        <div class="form-input">
            <label for="input-name" >Ho Va Ten</label>
            <input type="text" name ="fullname" placeholder="Nhập số lượng tuyển">
        </div>
        <div class="form-input">
            <label for="input-level" >level</label>
            <input type="text" name = "level" placeholder="Nhập cấp bậc tuyển dụng">
        </div>
        <div class="form-input">
            <label for="input-name" >Yêu cầu độ tuổi</label>
            <input type="text" name = "age" placeholder="Nhập độ tuổi">
        </div>
        <div class="form-input">
            <label for="input-name">Số lượng tuyển</label>
            <input type="text"  name ="quanlity" placeholder="Nhập số lượng tuyển">
        </div>
        
        <button type="submit">Save</button>
    </form>
</body>

</html>