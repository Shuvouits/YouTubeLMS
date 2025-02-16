<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="{{ setSidebar(['admin.dashboard']) }}">
            <a href="{{route('admin.dashboard')}}">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>

        <li class="{{ setSidebar(['admin.category*', 'admin.subcategory*']) }}">
            <a href="javascript:;" class="has-arrow">

                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Manage Category</div>
            </a>
            <ul>
                <li  class="{{ setSidebar(['admin.category*']) }}">
                     <a href="{{route('admin.category.index')}}"><i class='bx bx-radio-circle'></i>All Category</a>
                </li>
                <li class="{{ setSidebar(['admin.subcategory*']) }}" >
                    <a href="{{route('admin.subcategory.index')}}"><i class='bx bx-radio-circle'></i>All SubCategory</a>
                </li>

            </ul>
        </li>

        <li  class="{{ setSidebar(['admin.instructor.index', 'admin.instructor.active']) }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Manage Instructor</div>
            </a>
            <ul>
                <li class="{{ setSidebar(['admin.instructor.index']) }}">
                    <a href="{{route('admin.instructor.index')}}"><i class='bx bx-radio-circle'></i>All Instructor</a>
                </li>
                <li class="{{ setSidebar(['admin.instructor.active']) }}">
                    <a href="{{route('admin.instructor.active')}}"><i class='bx bx-radio-circle'></i>Active Instructor</a>
                </li>

            </ul>
        </li>

        <li class="{{ setSidebar(['admin.slider*']) }}">
            <a href="javascript:;" class="has-arrow">

                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Application Settings</div>
            </a>
            <ul>

                <li class="{{ setSidebar(['admin.slider*']) }}">
                    <a href="{{route('admin.slider.index')}}"><i class='bx bx-radio-circle'></i>Manage Slider</a>
                </li>

                <li class="{{ setSidebar(['admin.info*']) }}">
                    <a href="{{route('admin.info.index')}}"><i class='bx bx-radio-circle'></i>Manage Info</a>
                </li>


            </ul>
        </li>





    </ul>
    <!--end navigation-->
</div>
