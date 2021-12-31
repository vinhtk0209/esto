 <!-- SECTION SPECIAL OFFER COURSE STARTS-->
   <section class="english-course  mb-16">
       <div class="english-course -head">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                     <h3 class="title-course">Các khóa học đã mua</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="english-course-body">
        <div class="container">
            <ul class="list-english-course -courses list-course d-flex flex-wrap">
                @foreach ($listMyCourse as $course)
                <li class="list-best-seller list-item">
                    <a href="{{URL::to('/courseDetail/'.$course->MAKH)}}" class="course-box">
                        <div class="img-course">
                            <img class="img-responsive "
                                src="{{asset('user/assets/imgCourse')}}/{{$course->ANH}}"
                                alt="{{$course->TENKH}}">
                        </div>
                        <div class="course-des">
                            <div class="name-course">
                                <h4>{{$course->TENKH}}</h4>
                            </div>

                            <div class="name-teacher d-flex flex-space">
                                <p class="">{{$course->HOTEN}}</p>
                             </div>
                            <div class="price-course d-flex flex-space">
                                <p><span class="price-unit"><button class="btn btn-sm btn-primary mb-2">Học</button></span></p>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
               </ul>
           </div>
       </div>

   </section>
   <!-- SECTION SPECIAL OFFER COURSE ENDS-->