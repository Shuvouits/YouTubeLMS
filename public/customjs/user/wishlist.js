//User show wishlist and delete process

$(document).ready(function () {

    // Initial load
    loadWishlist();

    const wishlistContainer = $('#wishlist-container');
    const paginationBox = $('#pagination-box');
    const resultsInfo = $('.results-info');

    // Function to load wishlist items
    function loadWishlist(page = 1) {
        $.ajax({
            url: `/user/wishlist-data?page=${page}`,
            type: 'GET',
            success: function (response) {
                wishlistContainer.empty(); // Clear existing items
                paginationBox.empty(); // Clear pagination
                resultsInfo.empty(); // Clear results info

                console.log(response.wishlist);

                if (response.status === 'success') {
                    // #wishlist-course ডিভে HTML আপডেট করা
                    $('#wishlist-course').html(response.html);
                }

                if (response.wishlist.data.length === 0) {
                    wishlistContainer.html(
                        '<div class="col-12 text-center"><p>No items found.</p></div>');
                } else {
                    response.wishlist.data.forEach(item => {
                        let html = `
                        <div class="col-lg-4 responsive-column-half">
                            <div class="card card-item">
                                <div class="card-image">
                                    <a href="course-details.html" class="d-block">
                                        <img class="card-img-top" src="${item.course.course_image}" alt="Card image cap" width="280" height="280">
                                    </a>
                                    <div class="course-badge-labels">
                                        <div class="course-badge">${getBadge(item.course)}</div>
                                        <div class="course-badge blue">
                                            -${calculateDiscount(item.course.selling_price, item.course.discount_price)}%
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6>
                                    <h5 class="card-title"><a href="/course-details/${item.course.course_name_slug}">${item.course.course_name}</a></h5>
                                    <p class="card-text"><a href="/instructor/${item.course.user.name}/${item.course.user.id}">${item.course.user.name}</a></p>
                                    <div class="rating-wrap d-flex align-items-center py-2">
                                        <div class="review-stars">
                                            <span class="rating-number">4.4</span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-o"></span>
                                        </div>
                                        <span class="rating-total pl-1">(20,230)</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        ${getPriceHtml(item.course)}
                                        <div class="icon-element icon-element-sm shadow-sm cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove from Wishlist"><i class="la la-heart"></i></div>
                                    </div>
                                    <button class="btn btn-danger btn-sm delete-wishlist-item mt-2" data-id="${item.id}">
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </div>`;
                        wishlistContainer.append(html);
                    });

                    // Pagination
                    response.links.forEach(link => {
                        const activeClass = link.active ? 'active' : '';
                        paginationBox.append(`


                                 <li class="page-item ${activeClass}">
                            <a class="page-link" href="#" data-page="${link.label}">${link.label}</a>
                        </li>



                    `);
                    });

                    // Results Info
                    resultsInfo.html(
                        `Showing ${response.from} - ${response.to} of ${response.total} results`
                    );
                }
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Failed to load wishlist items. Try again.',
                });
            }
        });
    }

    // Event listener for pagination
    paginationBox.on('click', '.page-link', function (e) {
        e.preventDefault();
        const page = $(this).data('page');
        loadWishlist(page);
    });



    // Function to calculate discount percentage
    function calculateDiscount(sellingPrice, discountPrice) {
        return ((sellingPrice - discountPrice) / sellingPrice * 100).toFixed(0);
    }

    // Function to get badge (Bestseller/Featured/HighestRated)
    function getBadge(course) {
        if (course.bestseller === 'yes') return 'Bestseller';
        if (course.featured === 'yes') return 'Featured';
        return 'HighestRated';
    }

    // Function to get price HTML
    function getPriceHtml(course) {
        if (course.discount_price) {
            return `
            <p class="card-price text-black font-weight-bold">
                $${course.discount_price}
                <span class="before-price font-weight-medium">${course.selling_price}</span>
            </p>`;
        }
        return `<span class="font-weight-medium">${course.selling_price}</span>`;
    }



    // Delete wishlist item
    wishlistContainer.on('click', '.delete-wishlist-item', function () {
        let wishlistId = $(this).data('id');
        let url = `/user/wishlist/${wishlistId}`;

        // SweetAlert confirmation dialog
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Proceed with AJAX request
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        // _token: '{{ csrf_token() }}' // CSRF token
                        _token: $('meta[name="csrf-token"]').attr('content')

                    },
                    success: function (response) {
                        console.log(response)
                        if (response.status === 'success') {



                            // Toast success alert
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'success',
                                title: response.message,
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                            });

                            loadWishlist(); // Reload wishlist after deletion
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: response.message,
                            });
                        }
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Failed to delete the item. Try again.',
                        });
                    }
                });
            }
        });
    });




    // Initial load
    loadWishlist();

    
});


//End
