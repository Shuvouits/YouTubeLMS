<div class="course-overview-card pt-4">
    <h3 class="fs-24 font-weight-semi-bold pb-4">Reviews</h3>
    <div class="review-wrap">
        <div class="d-flex flex-wrap align-items-center pb-4">
            <form method="post" class="mr-3 flex-grow-1">
                <div class="form-group">
                    <input class="form-control form--control pl-3" type="text"
                        name="search" placeholder="Search reviews">
                    <span class="la la-search search-icon"></span>
                </div>
            </form>
            <div class="select-container mb-3">
                <select class="select-container-select">
                    <option value="all-rating">All ratings</option>
                    <option value="five-star">Five stars</option>
                    <option value="four-star">Four stars</option>
                    <option value="three-star">Three stars</option>
                    <option value="two-star">Two stars</option>
                    <option value="one-star">One star</option>
                </select>
            </div>
        </div>
        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
            <div class="media-img mr-4 rounded-full">
                <img class="rounded-full lazy" src="images/img-loading.png"
                    data-src="images/small-avatar-1.jpg" alt="User image">
            </div>
            <div class="media-body">
                <div class="d-flex flex-wrap align-items-center justify-content-between pb-1">
                    <h5>Kavi arasan</h5>
                    <div class="review-stars">
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                    </div>
                </div>
                <span class="d-block lh-18 pb-2">a month ago</span>
                <p class="pb-2">This is one of the best courses I have taken in Udemy. It is
                    very complete, and it has made continue learning about Java and SQL
                    databases as well.</p>
                <div class="helpful-action">
                    <span class="d-block fs-13">Was this review helpful?</span>
                    <button class="btn">Yes</button>
                    <button class="btn">No</button>
                    <span class="btn-text fs-14 cursor-pointer pl-1" data-toggle="modal"
                        data-target="#reportModal">Report</span>
                </div>
            </div>
        </div><!-- end media -->
        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
            <div class="media-img mr-4 rounded-full">
                <img class="rounded-full lazy" src="images/img-loading.png"
                    data-src="images/small-avatar-2.jpg" alt="User image">
            </div>
            <div class="media-body">
                <div class="d-flex flex-wrap align-items-center justify-content-between pb-1">
                    <h5>Jitesh Shaw</h5>
                    <div class="review-stars">
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                    </div>
                </div>
                <span class="d-block lh-18 pb-2">1 months ago</span>
                <p class="pb-2">This is one of the best courses I have taken in Udemy. It is
                    very complete, and it has made continue learning about Java and SQL
                    databases as well.</p>
                <div class="helpful-action">
                    <span class="d-block fs-13">Was this review helpful?</span>
                    <button class="btn">Yes</button>
                    <button class="btn">No</button>
                    <span class="btn-text fs-14 cursor-pointer pl-1" data-toggle="modal"
                        data-target="#reportModal">Report</span>
                </div>
            </div>
        </div><!-- end media -->
        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
            <div class="media-img mr-4 rounded-full">
                <img class="rounded-full lazy" src="images/img-loading.png"
                    data-src="images/small-avatar-3.jpg" alt="User image">
            </div>
            <div class="media-body">
                <div class="d-flex flex-wrap align-items-center justify-content-between pb-1">
                    <h5>Miguel Sanches</h5>
                    <div class="review-stars">
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                    </div>
                </div>
                <span class="d-block lh-18 pb-2">2 month ago</span>
                <p class="pb-2">This is one of the best courses I have taken in Udemy. It is
                    very complete, and it has made continue learning about Java and SQL
                    databases as well.</p>
                <div class="helpful-action">
                    <span class="d-block fs-13">Was this review helpful?</span>
                    <button class="btn">Yes</button>
                    <button class="btn">No</button>
                    <span class="btn-text fs-14 cursor-pointer pl-1" data-toggle="modal"
                        data-target="#reportModal">Report</span>
                </div>
            </div>
        </div><!-- end media -->
    </div><!-- end review-wrap -->
    <div class="see-more-review-btn text-center">
        <button type="button" class="btn theme-btn theme-btn-transparent">Load more
            reviews</button>
    </div>
</div><!-- end course-overview-card -->
<div class="course-overview-card pt-4">
    <h3 class="fs-24 font-weight-semi-bold pb-4">Add a Review</h3>
    <div class="leave-rating-wrap pb-4">
        <div class="leave-rating leave--rating">
            <input type="radio" name='rate' id="star5" />
            <label for="star5"></label>
            <input type="radio" name='rate' id="star4" />
            <label for="star4"></label>
            <input type="radio" name='rate' id="star3" />
            <label for="star3"></label>
            <input type="radio" name='rate' id="star2" />
            <label for="star2"></label>
            <input type="radio" name='rate' id="star1" />
            <label for="star1"></label>
        </div><!-- end leave-rating -->
    </div>
    <form method="post" class="row">
        <div class="input-box col-lg-6">
            <label class="label-text">Name</label>
            <div class="form-group">
                <input class="form-control form--control" type="text" name="name"
                    placeholder="Your Name">
                <span class="la la-user input-icon"></span>
            </div>
        </div><!-- end input-box -->
        <div class="input-box col-lg-6">
            <label class="label-text">Email</label>
            <div class="form-group">
                <input class="form-control form--control" type="email" name="email"
                    placeholder="Email Address">
                <span class="la la-envelope input-icon"></span>
            </div>
        </div><!-- end input-box -->
        <div class="input-box col-lg-12">
            <label class="label-text">Message</label>
            <div class="form-group">
                <textarea class="form-control form--control pl-3" name="message" placeholder="Write Message" rows="5"></textarea>
            </div>
        </div><!-- end input-box -->
        <div class="btn-box col-lg-12">
            <div class="custom-control custom-checkbox mb-3 fs-15">
                <input type="checkbox" class="custom-control-input" id="saveCheckbox"
                    required>
                <label class="custom-control-label custom--control-label"
                    for="saveCheckbox">
                    Save my name, and email in this browser for the next time I comment.
                </label>
            </div><!-- end custom-control -->
            <button class="btn theme-btn" type="submit">Submit Review</button>
        </div><!-- end btn-box -->
    </form>
</div><!-- end course-overview-card -->
