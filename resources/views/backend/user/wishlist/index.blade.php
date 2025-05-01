@extends('backend.user.master')

@section('content')
    <div class="row" id="wishlist-container">

        <!-- Wishlist items will be loaded here via Ajax -->

    </div><!-- end row -->

    <?php
    $user_id = auth()->user()->id;
    $wishlist = App\Models\Wishlist::where('user_id', $user_id)->count();
    ?>

    @if ($wishlist)
        <div class="text-center py-3">
            <nav aria-label="Page navigation example" class="pagination-box">
                <ul class="pagination justify-content-center" id="pagination-box">

                </ul>

            </nav>

        </div>
    @endif
@endsection


