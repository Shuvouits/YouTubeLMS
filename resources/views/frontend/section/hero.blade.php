<section class="hero-area">
    <div class="hero-slider owl-action-styled">

        @foreach($all_sliders as $item)
        <div class="hero-slider-item" style="background-image: url('{{ asset($item->image) }}');" >

            <div class="container">
                <div class="hero-content">
                    <div class="section-heading">
                        <h2 class="section__title text-white fs-65 lh-80 pb-3">{{$item->title}}
                        </h2>
                        <p class="section__desc text-white pb-4">{{$item->short_description}}
                        </p>
                    </div><!-- end section-heading -->
                    <div class="hero-btn-box d-flex flex-wrap align-items-center pt-1">
                        <a href="{{route('instructor.register')}}" class="btn theme-btn mr-4 mb-4">Join with Us <i
                                class="la la-arrow-right icon ml-1"></i></a>
                        <a href="" class="btn-text video-play-btn mb-4" data-fancybox
                            data-src="{{$item->video_url}}?autoplay=0">
                            Watch Preview<i class="la la-play icon-btn ml-2"></i>
                        </a>
                    </div><!-- end hero-btn-box -->
                </div><!-- end hero-content -->
            </div><!-- end container -->
        </div><!-- end hero-slider-item -->
        @endforeach

    </div><!-- end hero-slide -->
</section><!-- end hero-area -->
