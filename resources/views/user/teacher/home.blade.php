@extends('user.teacher.layout')
@section("main_content")
<div class="list-course row">
    @foreach($course as $item)
    <div class="col-lg-4 col-sm-1 col-md-4 mr-4">
        <!-- small box -->
        <article class="small-box bg-white">
            <div class="inner">
                <h6 class="course-title mg-b-15 fs-18"><b>({{$item->id}}) {{$item->name}}</b></h6>
                @if(Auth::check())
                <p>{{Auth::user()->email}}</p>
                @endif
                <p>Số lớp học: 3</p>
            </div>
            <a href="{{route("course_detail",[$item->id])}}" class="small-box-footer">Vào khóa học <i class="fas fa-arrow-circle-right"></i></a>
        </article>
    </div>
    @endforeach
</div>
@endsection
