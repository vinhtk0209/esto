
<ul class="list-search-result">
<h2 class="suggest-title ">Gợi ý tìm kiếm</h2>
    @foreach ($data as $course)
        <li class="list-item ">
            <a href='{{URL::to('/courseDetail/'.$course->MAKH)}}'>
                <div class="img-search-result-container">
                    <div class="img-search-result">
                        <img src="public/user/assets/imgCourse/{{$course->ANH}}" alt='{{$course->TENKH}}' class="img-responsive">
                    </div>
                </div>
                <div class="body-search-result">
                    <h3>{{$course->TENKH}}</h3>
                    <div class='intro-search'>{!!$course->GIOITHIEUKH!!}</div>
                </div>
            </a>
        </li>
    @endforeach
    <form id="search-form-ajax" action="{{ route('home.search') }}" method="POST">
        @csrf
        <div class="footer-search-result">
            <button  type="submit" >Xem tất cả khóa học</button>
        </div>
    </form>
</ul>
