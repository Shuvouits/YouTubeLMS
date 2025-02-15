<section class="category-area pb-90px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="category-content-wrap">
                    <div class="section-heading">
                        <h5 class="ribbon ribbon-lg mb-2">Categories</h5>
                        <h2 class="section__title">Popular Categories</h2>
                        <span class="section-divider"></span>
                    </div><!-- end section-heading -->
                </div>
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="category-btn-box text-right">
                    <a href="categories.html" class="btn theme-btn">All Categories <i
                            class="la la-arrow-right icon ml-1"></i></a>
                </div><!-- end category-btn-box-->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="category-wrapper mt-30px">
            <div class="row">

                @foreach($all_categories as $item)

                <div class="col-lg-4 responsive-column-half">
                    <div class="category-item">
                        <img class="cat__img lazy" src="{{asset($item->image)}}" data-src="{{ asset($item->image ?? 'frontend/images/img2.jpg') }}"
                            alt="Category image" width="370" height="246">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title">
                                    <a href="#">{{ $item->name }}</a>
                                </h3>
                                <p class="cat__meta">0 courses</p>
                                <a href="#" class="btn theme-btn theme-btn-sm theme-btn-white">Explore<i
                                        class="la la-arrow-right icon ml-1"></i></a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->

                @endforeach



            </div><!-- end row -->
        </div><!-- end category-wrapper -->
    </div><!-- end container -->
</section><!-- end category-area -->
