<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goi mail</title>
</head>
<body>
    {{-- <h1>Mail duoc goi tu {{$name}}</h1> --}}
    <h1>Xin chào {{$taikhoan->HOTEN}}</h1>
    <p>Bạn đã đăng ký tài khoản tại hệ thống chúng tôi</p>
    <h4>Để tiếp tục bạn vui lòng nhấn vào nút kích hoạt bên dưới để kích hoạt tài khoản:</h4>
    <p><a href="{{route('taikhoan.actived',['taikhoan'=>$taikhoan->ID,'token'=>$taikhoan->TOKEN])}}">Kích hoạt tài khoản</a></p>
</body>
</html>
