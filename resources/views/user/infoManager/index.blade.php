@extends('user.layout.index')
@section('content')
<section class="info-container py-30 ">
    <div class="userProfileTabs">
        <div class="container">
            {{-- NAME TAB --}}
            <ul class="nav  tab-info " role="tablist">
                <li class="nav-item nav-tabs " role="presentation">
                    {{-- <a href="{{URL::to('/infoUser/showMyCourse')}}" class="nav-link tabInfo "  >Khóa học của tôi</a>
                    <a href="{{URL::to('/infoUser/updateProfile')}}"  class= "nav-link tabInfo ">Hồ sơ cá nhân</a>
                    <a href="{{URL::to('/infoUser/showMyScore')}}"  class="nav-link tabInfo "  >Bài làm của tôi</a> --}}

                    @php $fullPath =request()->path() @endphp

                    @if($fullPath=='infoUser/showMyCourse')
                        <a href="{{URL::to('/infoUser/showMyCourse')}}" class= "nav-link tabInfo active">Khóa học của tôi</a>
                    @else
                        <a href="{{URL::to('/infoUser/showMyCourse')}}" class="nav-link tabInfo "  >Khóa học của tôi</a>
                            @endif
                    </li>
                    <li class="nav-item nav-tabs" role="presentation">
                    @if($fullPath=='infoUser/updateProfile')
                        <a href="{{URL::to('/infoUser/updateProfile')}}"  class="nav-link tabInfo active" >Hồ sơ cá nhân</a>
                    @else
                        <a href="{{URL::to('/infoUser/updateProfile')}}"  class= "nav-link tabInfo ">Hồ sơ cá nhân</a>
                    @endif
                    </li>
                    <li class="nav-item nav-tabs" role="presentation">
                    @if($fullPath=='infoUser/showMyScore')
                        <a href="{{URL::to('/infoUser/showMyScore')}}"  class="nav-link tabInfo active" >Bài làm của tôi</a>
                    @else
                        <a href="{{URL::to('/infoUser/showMyScore')}}"  class="nav-link tabInfo "  >Bài làm của tôi</a>
                    @endif
                    </li>
              </ul>
              {{-- COTENT TAB --}}
                <div class="tab-content-info tab-content-1 active">
                    @yield('myCourse')
                </div>
                <div class="tab-content-info tab-content-2 ">
                    @yield('infoFile')
                </div>
                <div class="tab-content-info tab-content-2 ">
                    @yield('myScore')
                </div>
        </div>
    </div>
</section>
@endsection
