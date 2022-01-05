@extends('user.layout.index')
@section('content')
<section class="info-container pt-30 ">
    <div class="userProfileTabs">
        <div class="container">
            {{-- NAME TAB --}}
            <ul class="nav  tab-info " role="tablist">
                <li class="nav-item nav-tabs" role="presentation">
                    {{-- {{URL::to('/infoUser/showMyCourse')}} --}}
                    <a href="{{URL::to('/infoUser/showMyCourse')}}" class="nav-link activeTab tabInfo"  >Khóa học của tôi</a>
                </li>
                <li class="nav-item nav-tabs" role="presentation">
                    {{-- {{URL::to('/infoUser/updateProfile')}} --}}
                    <a href="{{URL::to('/infoUser/updateProfile')}}"  class="nav-link tabInfo" >Hồ sơ cá nhân</a>
                </li>
              </ul>
              {{-- COTENT TAB --}}
                <div class="tab-content-info tab-content-1 active">
                    @yield('myCourse')
                </div>
                <div class="tab-content-info tab-content-2 ">
                    @yield('infoFile')
                </div>
        </div>
    </div>
</section>
@endsection
