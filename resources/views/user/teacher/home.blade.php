@extends('user.teacher.layout')
@section("main_content")
{{--    <div class="container wrap-list-courses">--}}
{{--        <div class=" edn-tabs">--}}
{{--            <div class="session-category ui-tabs-panel ui-widget-content" id="course-teacher" aria-labelledby="session-category-tab" role="tabpanel" >--}}
{{--                <section class="course-section">--}}
{{--                    <div class="wrap-slider-content">--}}
{{--                        <div class="wrap-course-section">--}}
{{--                            <div class="list-course row">--}}
{{--                                <article class="course-item col-md-4 col-sm-6 col-lg-3 publish">--}}
{{--                                    <div class="wrap-course-item">--}}
{{--                                        <div class="course-infor">--}}
{{--                                            <h3 class="course-title mg-b-15 fs-18">--}}
{{--                                                <a href="#">Java I</a>--}}
{{--                                            </h3>--}}
{{--                                            <ul class="bottom-course-sum none-list mg-0 fs-14 mg-b-15">--}}
{{--                                                <li>--}}
{{--                                                    <i class="la la-user-circle"></i>--}}
{{--                                                    <span>Nguyen van A</span>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="las la-id-card"></i>--}}
{{--                                                    <span>Số sinh viên</span>--}}
{{--                                                </li>--}}
{{--                                                <a class="view-detail text-decoration-none fs-14 mg-b-5" href="/vi/course/java-programming-i-7023-jp1?classId=185" title="Vào khóa học">--}}
{{--                                                    Vào khóa học--}}
{{--                                                    <i class="las la-arrow-right"></i>--}}
{{--                                                </a>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
{{--            </div>--}}

{{--            <div class="session-group ui-tabs-panel ui-widget-content" id="course-member" role="tabpanel">--}}
{{--                <section class="course-section">--}}
{{--                    <div class="wrap-slider-content">--}}
{{--                        <div class="wrap-course-section">--}}
{{--                            <div class="list-course row">--}}
{{--                                <article class="course-item col-md-4 col-sm-6 col-lg-3 publish">--}}
{{--                                    <div class="wrap-course-item">--}}
{{--                                        <div class="course-infor">--}}
{{--                                            <h3 class="course-title mg-b-15 fs-18">--}}
{{--                                                <a href="#">Java I</a>--}}
{{--                                            </h3>--}}
{{--                                            <ul class="bottom-course-sum none-list mg-0 fs-14 mg-b-15">--}}
{{--                                                <li>--}}
{{--                                                    <i class="la la-user-circle"></i>--}}
{{--                                                    <span>Nguyen van A</span>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="las la-id-card"></i>--}}
{{--                                                    <span>Số sinh viên</span>--}}
{{--                                                </li>--}}
{{--                                                <a class="view-detail text-decoration-none fs-14 mg-b-5" href="/vi/course/java-programming-i-7023-jp1?classId=185" title="Vào khóa học">--}}
{{--                                                    Vào khóa học--}}
{{--                                                    <i class="las la-arrow-right"></i>--}}
{{--                                                </a>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
{{--            </div>--}}

{{--            <div class="session-group ui-tabs-panel ui-widget-content" id="course-admin" role="tabpanel" aria-hidden="true" style="display: none;">--}}
{{--                <section class="course-section">--}}
{{--                    <div class="wrap-slider-content">--}}
{{--                        <div class="wrap-course-section">--}}
{{--                            <div class="list-course row">--}}
{{--                                <article class="course-item col-md-4 col-sm-6 col-lg-3 publish">--}}
{{--                                    <div class="wrap-course-item">--}}
{{--                                        <div class="course-infor">--}}
{{--                                            <h3 class="course-title mg-b-15 fs-18">--}}
{{--                                                <a href="#">Java I</a>--}}
{{--                                            </h3>--}}
{{--                                            <ul class="bottom-course-sum none-list mg-0 fs-14 mg-b-15">--}}
{{--                                                <li>--}}
{{--                                                    <i class="la la-user-circle"></i>--}}
{{--                                                    <span>Nguyen van A</span>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="las la-id-card"></i>--}}
{{--                                                    <span>Số sinh viên</span>--}}
{{--                                                </li>--}}
{{--                                                <a class="view-detail text-decoration-none fs-14 mg-b-5" href="/vi/course/java-programming-i-7023-jp1?classId=185" title="Vào khóa học">--}}
{{--                                                    Vào khóa học--}}
{{--                                                    <i class="las la-arrow-right"></i>--}}
{{--                                                </a>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
<div class="list-course row">
    @foreach($courses as $item)
    <div class="col-lg-3 col-sm-1 col-md-4 mr-4">
        <!-- small box -->
        <div class="small-box bg-gradient-success">
            <div class="inner">
                <h6 class="course-title mg-b-15 fs-18"><b>({{$item->id}}) {{$item->name}}</b></h6>

                <p>Nguyenvana001@gmail.com</p>
                <p>Số lớp học: 3</p>
            </div>
            <a href="#" class="small-box-footer">Vào khóa học <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endforeach
</div>
@endsection
