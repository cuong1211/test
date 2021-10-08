@extends('layout.frontend.index')


@section('content')
    <div class="content_wrapper">
        <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
            style="background: url(images/slider_group_in_campus.jpg); background-attachment: fixed; background-position: 50% 50%;">
            <div class="breadcrumb_wrap_inner">
                <div class="container">

                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a> /</li>
                        <li><a href="index.html">JAVA</a> /</li>
                        <li>Lesson</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="courses_wrapper" class="courses_wrapper">

            <div class="container">

                <div class="course_wrapp col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="wrapper_course">
                        @foreach ($unit as $item)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="{{ url('/unit') . '/' . $item->id }}">
                                    <div class="course_block">
                                        <div class="img_wrap">
                                            <img alt="Science" src="images/java.png">
                                        </div>
                                        <div class="info_wrap">
                                            <div class="science">
                                                <div class="course_info">
                                                    <p>{{ $item->title }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="science course_count_wrap">

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">
                </div>
            </div>

        </div>
    </div>
@endsection
