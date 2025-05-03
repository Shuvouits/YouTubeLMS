


$(document).ready(function () {
    getCart();
});



$(document).on('click', '.add-to-cart-btn', function () {
    var courseId = $(this).data('course-id'); // Get course ID from button
    var quantity = 1; // Default quantity (can be dynamic)


    $.ajax({
        url: '/cart/add', // Laravel route to handle add-to-cart
        method: 'POST',
        data: {
            course_id: courseId,
            quantity: quantity,
            _token: $('meta[name="csrf-token"]').attr('content') // CSRF token for security
        },
        success: function (response) {
            if (response.status === 'success') {

                getCart();
                // Show success message
                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    toast: true,
                    position: 'top-end',
                    timer: 3000,
                    showConfirmButton: false,
                });

                // Optionally update cart count
                if (response.cart_item) {
                    $('.cart-count').text(response.cart_item.quantity);
                }
            } else {
                Swal.fire({
                    icon: 'error',
                    title: response.message,
                    toast: true,
                    position: 'top-end',
                    timer: 3000,
                    showConfirmButton: false,
                });
            }
        },
        error: function (xhr, status, error) {
            Swal.fire({
                icon: 'error',
                title: 'Something went wrong!',
                text: xhr.responseJSON?.message || error,
                toast: true,
                position: 'top-end',
                timer: 3000,
                showConfirmButton: false,
            });
        }
    });
});

//getwishlist

function getCart(){

    var url = '/cart/all';

    $.ajax({
        url: url,
        type: 'GET',
        data: {

            _token: $('meta[name="csrf-token"]').attr('content')


        },
        success: function (response) {

             if (response.status === 'success') {
                // #wishlist-course ডিভে HTML আপডেট করা
                $('#cart').html(response.html);
            }


        },
        error: function (xhr) {

            let message = 'Something went wrong!';
            if (xhr.responseJSON && xhr.responseJSON.message) {
                message = xhr.responseJSON.message;
            }
            console.error(message);


        }
    });

}




//fetch cart

$(document).ready(function () {

    // Call the function to get the cart data
    fetchCart();

    function fetchCart() {

        var url = '/fetch/cart';

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')

            },
            success: function (response) {

                if (response.status === 'success') {
                    // #wishlist-course ডিভে HTML আপডেট করা
                    $('#cart-main-content').html(response.html);
                }

            },
            error: function (xhr) {

                let message = 'Something went wrong!';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    message = xhr.responseJSON.message;
                }
                console.error(message);

            }
        });

    }

    $(document).on('click', '.remove-course-btn', function() {

        var id = $(this).data('id');
        var url = '/remove/cart'; // Define the remove route

        $.ajax({

            url: url,
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                id: id
            },

            success: function(response) {
                if (response.status === 'success') {

                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: 'Course removed successfully!',
                        showConfirmButton: false,
                        timer: 3000
                    });
                    fetchCart(); // Refresh the cart

                    getCart();  //Refresh getCart

                }
            },
            error: function(xhr) {
                let message = 'Something went wrong!';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    message = xhr.responseJSON.message;
                }
                console.error(message);
            }


        })

    })






});








