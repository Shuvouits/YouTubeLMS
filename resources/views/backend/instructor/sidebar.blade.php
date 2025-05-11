<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Instructor</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('instructor.dashboard')}}">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>

        @if(isApprovedUser())



        <li class="{{ setSidebar(['instructor.course*', 'instructor.course-section*']) }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Manage Courses</div>
            </a>
            <ul>
                <li class="{{ setSidebar(['instructor.course*', 'instructor.course-section']) }}">
                    <a href="{{route('instructor.course.index')}}"><i class='bx bx-radio-circle'></i>All Course</a>
                </li>

            </ul>
        </li>

         <li class="{{ setSidebar(['instructor.coupon*']) }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Managed Coupon</div>
            </a>
            <ul>
                <li class="{{ setSidebar(['instructor.coupon*']) }}">
                    <a href="{{route('instructor.coupon.index')}}"><i class='bx bx-radio-circle'></i>All Coupon</a>
                </li>

            </ul>
        </li>

        @endif


    </ul>
    <!--end navigation-->
</div>
