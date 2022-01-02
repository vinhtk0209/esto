@extends('admin.layout.index')
@section('content')
<video id="my-video" class="video-js vjs-big-play-centered" controls preload="auto" width="640" height="360" poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
  <source src="./video/Zoom Meeting 2021-11-19 10-18-28.mp4" type="video/mp4" />
  <source src="./video/Zoom Meeting 2021-11-19 10-18-28.webm" type="video/webm" />
  <p class="vjs-no-js">
    To view this video please enable JavaScript, and consider upgrading to a
    web browser that
    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
  </p>
</video>
@endsection