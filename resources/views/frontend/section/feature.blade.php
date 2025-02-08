<section class="feature-area pb-90px">
    <div class="container">
        <div class="row feature-content-wrap">

            @foreach($all_info as $item)
            <div class="col-lg-4 responsive-column-half">
                <div class="info-box">
                    <div class="info-overlay"></div>
                    <div class="icon-element mx-auto shadow-sm">

                        {!! $item->icon !!}

                    </div>
                    <h3 class="info__title">{{$item->title}}</h3>
                    <p class="info__text">{{$item->description}}
                    </p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
            @endforeach

        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end feature-area -->
