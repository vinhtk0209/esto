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
    <p>Bạn đã gởi email yêu cầu khôi phục mật khẩu nếu không phải bạn vui lòng bỏ qua email này</p>
    <h4>Để tiếp tục bạn vui lòng nhấn vào nút đặt lại mật khẩu:</h4>
    <p><a href="{{route('taikhoan.getPass',['taikhoan'=>$taikhoan->ID,'token'=>$taikhoan->TOKEN])}}">Đặt lại mật khẩu</a></p>
</body>
</html>
