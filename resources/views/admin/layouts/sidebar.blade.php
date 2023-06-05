
<div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index.html">Admin Panel</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.html"></a>
                </div>

                <ul class="sidebar-menu">

                    <li class="active"><a class="nav-link" href="index.html"><i class="fa fa-hand-o-right"></i> <span>Dashboard</span></a></li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fa fa-hand-o-right"></i>Pages</a>
                        <ul class="dropdown-menu">
                            <li ><a class="nav-link" href="{{ route('admin_about_page') }}"> About Us</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fa fa-hand-o-right"></i>Hotel Section </a>
                        <ul class="dropdown-menu">
                            <li ><a class="nav-link" href="{{ route('admin_amenity_view') }}"> Amenities</a></li>
                            <li ><a class="nav-link" href="{{ route('admin_rooms_view') }}"> Rooms</a></li>
                        </ul>
                    </li>

                    <li class=""><a class="nav-link" href="{{ route('admin_slide_view') }}"><i class="fa fa-hand-o-right"></i> <span>Slides</span></a></li>

                    <li class=""><a class="nav-link" href="{{ route('admin_feature_view') }}"><i class="fa fa-hand-o-right"></i> <span>Features</span></a></li>

                    <li class=""><a class="nav-link" href="{{ route('admin_testimonial_view') }}"><i class="fa fa-hand-o-right"></i> <span>Testimonials</span></a></li>
                   
                    <li class=""><a class="nav-link" href="{{ route('admin_post_view') }}"><i class="fa fa-hand-o-right"></i> <span>Posts</span></a></li>
                    
                    <li class=""><a class="nav-link" href="{{ route('admin_photo_view') }}"><i class="fa fa-hand-o-right"></i> <span>Photo Gallery</span></a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin_video_view') }}"><i class="fa fa-hand-o-right"></i> <span>Video Gallery</span></a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin_faq_view') }}"><i class="fa fa-hand-o-right"></i> <span>FAQ</span></a></li>

                </ul>
            </aside>
        </div>
