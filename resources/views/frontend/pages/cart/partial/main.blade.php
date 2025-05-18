<section class="cart-area section-padding">
    <div class="container">
        <div id="cart-section">

            <div class="table-responsive">
                <table class="table generic-table">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Product Details</th>
                            <th scope="col">Price</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse($cart as $item)
                            <tr>
                                <th scope="row">
                                    <div class="media media-card">
                                        <a href="course-details.html" class="media-img mr-0">
                                            <img src="{{ asset($item->course->course_image) }}" alt="Cart image">
                                        </a>
                                    </div>
                                </th>
                                <td>
                                    <a href="course-details.html"
                                        class="text-black font-weight-semi-bold">{{ $item->course->course_name }}</a>
                                    <p class="fs-14 text-gray lh-20">By <a href="teacher-detail.html"
                                            class="text-color hover-underline">{{ $item->course->user->name }}</a>,{{ $item->course->course_title }}
                                        &amp; More!</p>
                                </td>
                                <td>
                                    <ul class="generic-list-item font-weight-semi-bold">
                                        <li class="text-black lh-18">${{ $item->course->discount_price }}</li>
                                        <li class="before-price lh-18">${{ $item->course->selling_price }}</li>
                                    </ul>
                                </td>

                                <td>

                                    <button type="button"
                                        class="remove-course-btn icon-element icon-element-xs shadow-sm border-0"
                                        data-id="{{ $item->id }}" data-toggle="tooltip" data-placement="top"
                                        title="Remove">
                                        <i class="la la-times"></i>
                                    </button>

                                </td>
                            </tr>

                        @empty
                            <td colspan="3">No Data Found</td>
                        @endforelse




                    </tbody>
                </table>


                <div class="d-flex flex-wrap align-items-center justify-content-between pt-4">
                    <form id="couponForm">
                        @csrf
                        @foreach ($cart as $item)
                            <input type="hidden" name="course_id[]" value="{{ $item->course->id }}">
                            <input type="hidden" name="instructor_id[]" value="{{ $item->course->user->id }}">
                        @endforeach

                        @if (!session()->get('coupon'))
                            <div class="input-group mb-2">
                                <input class="form-control form--control pl-3" type="text" name="coupon"
                                    id="couponInput" placeholder="Enter Coupon Code">
                                <div class="input-group-append">
                                    <button type="button" id="applyCouponBtn" class="btn theme-btn">
                                        Apply Code
                                    </button>
                                </div>
                            </div>
                        @endif
                    </form>
                    <a href="#" class="btn theme-btn mb-2 sr-only">Update Cart</a>
                </div>


                <!-- Error/Success Message -->
                <div id="couponMessage" class="mt-2"></div>





            </div>
            <div class="col-lg-4 ml-auto">
                <div class="bg-gray p-4 rounded-rounded mt-40px">
                    <h3 class="fs-18 font-weight-bold pb-3">Cart Totals</h3>
                    <div class="divider"><span></span></div>


                    <ul class="generic-list-item pb-4">
                        <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                            <span class="text-black">Subtotal:</span>
                            <span id="subTotalValue">${{ $subTotal }}</span> <!-- Update ID for easy targeting -->
                        </li>



                        <!-- Total Discount -->


                        <li id="totalDiscountItem"
                        class="d-flex align-items-center justify-content-between font-weight-semi-bold" style="display: none !important">
                        <span class="text-black">Total Discount:</span>
                        <span id="totalDiscount">
                            $0.00
                        </span>
                    </li>

                    @if (session()->get('coupon'))
                        <li
                            class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                            <span class="text-black">Total Discount:</span>
                            <span id="totalDiscount">
                                ${{ session()->get('coupon') ?? '0.00' }}
                            </span>
                        </li>
                    @endif


                        <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                            <span class="text-black">Total:</span>


                            <span id="totalAmount">
                                @if (session()->get('coupon'))
                                    ${{ $subTotal - session()->get('coupon') }}
                                @else
                                    ${{ $subTotal }}
                                @endif
                            </span>
                            <!-- Total amount is also updated with new id -->
                        </li>
                    </ul>





                    <a href="{{ route('checkout.index') }}" class="btn theme-btn w-100">Checkout <i
                            class="la la-arrow-right icon ml-1"></i></a>
                </div>
            </div>

        </div>

    </div><!-- end container -->
</section>




<script>
    $(document).ready(function() {
        $('#applyCouponBtn').click(function() {
            let formData = $('#couponForm').serialize(); // Serialize form data

            $.ajax({
                url: "/apply-coupon", // Replace with your route name
                type: "POST",
                data: formData,
                success: function(response) {
                    // Calculate total discount
                    let totalDiscount = response.discounts.reduce((sum, item) => {
                        return sum + parseFloat(item
                            .discount); // Summing up discounts
                    }, 0);

                    // Update the Discount Amount
                    $('#totalDiscount').text(
                        `$${totalDiscount.toFixed(2)}`); // Show the total discount amount
                    $('#totalDiscountItem').show(); // Show the discount item

                    // Update the Total Price after applying the discount
                    let subTotal = parseFloat("{{ $subTotal }}");
                    let totalAmount = subTotal - totalDiscount;
                    $('#totalAmount').text(
                        `$${totalAmount.toFixed(2)}`); // Show the updated total

                    // Hide the Coupon Form
                    $('#couponForm')
                        .hide(); // Hide the coupon area after successful application

                    // Success Toast Notification
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Coupon applied successfully!',
                        showConfirmButton: false,
                        toast: true,
                        timer: 3000,
                        background: '#28a745',
                        color: '#fff'
                    });
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        // Parse validation errors
                        let errors = xhr.responseJSON.errors;
                        let errorMessage = '';

                        // Construct the error message
                        for (let field in errors) {
                            errorMessage += errors[field].join('<br>') + '<br>';
                        }

                        // Display the error messages in a Swal alert
                        Swal.fire({
                            position: 'top-end',
                            title: 'Validation Errors',
                            html: errorMessage,
                            icon: 'error',
                            toast: true, // Disable toast for detailed errors
                            timer: 3000,
                            showConfirmButton: false,
                            background: '#dc3545',
                            color: '#fff'
                        });
                    } else {
                        // Generic error message for other errors
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Coupon not applied successfully!',
                            showConfirmButton: false,
                            toast: true,
                            timer: 3000,
                            background: '#dc3545',
                            color: '#fff'
                        });
                    }
                }
            });
        });
    });
</script>
