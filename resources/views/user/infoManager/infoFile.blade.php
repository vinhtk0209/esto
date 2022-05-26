@extends('user.infoManager.index')
@section('infoFile')
{{-- INFO STARTS --}}

<section class="infoUser-file mt-10" >
    <div class="container">
        <div class="info-content p-y-5 border-default ">
            <form method="POST" id="signup-form" class="signup-form" action="{{ route('post.update.profile',['id' => $user->ID]) }}" enctype="multipart/form-data">
                @csrf
            <div class="info-heading d-flex justify-content-between align-items-center">
                <span class="font-weight-bold">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    Cập nhật thông tin cá nhân
                </span>
                {{-- <div class="info-heading-change-password">
                    <a href="" class="register-btn text-decoration-none ">
                        <i class="fa fa-refresh mr-5    "></i>
                        Thay đổi mật khẩu
                    </a>
                </div> --}}
            </div>
          <div class="infoBody">
            <div class="row">
                {{-- LEFT --}}
                <div class="col-md-6 col-sm-6">
                    <div class="info-body p-20">
                        <div class="form-group mb-40">
                            <label class="label-input mb-10 d-block">
                                Chọn ảnh đại diện
                            </label>
                            @php
                            function checkForImage($url){
                                $subject = $url;
                                $pattern = "/(http[s]?:)/i";
                                if (preg_match($pattern, $subject, $matches)) {
                                    return true;
                                }
                                return false;
                             }
                                if (checkForImage($user->ANHDAIDIEN)){
                                  echo "<img src='$user->ANHDAIDIEN' class='showAva img-responsive' alt=' $user->HOTEN}}''>";
                                }
                                else{
                                    echo "<img src='./user/assets/imgAva/$user->ANHDAIDIEN' class='showAva img-responsive' alt='$user->HOTEN '>";
                                }
                            @endphp

                            <input type="file" name="avaUser" onchange="imgchange(event)">
                            <span class="error-message float-end">@error('avaUser'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group d-flex ">
                            <label for="fullname" class="label-input  min-width-100">Họ tên</label>
                            <div class="form-group-input position-relative flex-grow-1">
                                <input class="effect-8 form-input w-100 " type="text" placeholder="Placeholder Text" name="fullname" id="fullname"
                                placeholder="Họ tên..." value="{{ $user->HOTEN }}" required>
                                <span class="focus-border">
                                  <i></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <label for="male" class="label-input  min-width-100 ">Giới tính</label>
                             <div class="form-checkbox d-flex align-items-center">
                                <div class="form-checkbox-item mr-20" style="cursor: pointer;">
                                    <input type="radio" class="form-checkbox " name="gender" id="male" value="1" {{ $user->GIOITINH == 1 ? "checked" : "" }}/>
                                    <label for="male" class="">Nam</label>
                                </div>
                                <div class="form-checkbox-item">
                                    <input type="radio" class="form-checkbox" name="gender" id="female" value="0" {{ $user->GIOITINH == 0 ? "checked" : "" }} />
                                    <label for="female" class="">Nữ</label>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>

                {{-- RIGHT --}}
                <div class="col-md-6 col-sm-6">
                    <div class="info-body p-20">
                        <div class="form-group d-flex">
                            <label for="fullname" class="label-input  min-width-100 ">Email</label>
                            <div class="form-group-input position-relative flex-grow-1">
                                <input class="effect-8 form-input w-100 input-not-allowed" type="email" name="email" id="email" readonly
                                value="{{ $user->EMAIL }}" disabled="disabled">
                                <span class="focus-border">
                                  <i></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birthday" class="label-input min-width-100">Ngày sinh</label>
                            <input type="date" class="effect-8 form-input input-not-allowed" name="birthday" id="birthday" value="{{ $user->NGAYSINH }}" style="width:77%" />
                        </div>
                        <div class="form-group d-flex">
                            <label for="phonenumber" class="label-input  min-width-100 ">Số điện thoại</label>
                            <div class="form-group-input position-relative flex-grow-1">
                                <input class="effect-8 form-input w-100 " type="text" name="phonenumber" id="phonenumber"
                                placeholder="Số điện thoại..."  value="{{ $user->SODIENTHOAI }}" required>
                                <span class="focus-border">
                                  <i></i>
                                </span>
                            </div>
                        </div>
                        <div class="message float-end">
                            <span class="error-message ml-10">@error('phonenumber'){{$message}}@enderror</span>
                        </div>
                    </div>
                 </div>
               </div>
          </div>
            <div class="form-group text-center">
                <input type="submit" name="submit" id="submit" class="btnUpdate" value="Lưu thay đổi" />
            </div>
            </form>
        </div>
    </div>
</section>

@endsection
