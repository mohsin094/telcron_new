<?php
$link = $_SERVER['REQUEST_URI'];
?>
<header class="business_messaging">
    <nav class="navbar navbar-expand-lg navbar-light nav_header">
        <a class="navbar-brand" href="{{route('home')}}"> <img src="{{asset('images/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar_telcron" id="navbarTogglerDemo02">
            <div class="menu-menu-1-container">
                <ul class="navbar-nav">
                    <!-- ******************************************************************************************************* -->
                    <li id="menu-item-lab_res" class="nav-item">
                        <a class="nav-link {{strpos($link, 'lab-reservation') ? 'active_nav_menu' : ''}}" href="#">Lab Reservation</a>
                        <ul class="sub-menu-0">
                            <ul class="vertical-menu">
                                <li class="head_name ">Lab Reservation</li>

                                <li><a href="{{route('lav_reservation.schedule_testing')}}" class="p-t_0">Schedule Testing</a>

                                </li>
                                <li><a href="#">FAQs</a>

                                </li>
                                <li><a href="#">Submit Lab Review</a>

                                </li>
                                <li><a href="#" class="p-b_0">Rewards</a>

                                </li>
                            </ul>
                        </ul>
                    </li>
                    <li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6 ">
                        <a href="#" class="{{strpos($link, 'product') ? 'active_nav_menu' : ''}}">Products &amp; Industries</a>
                        <ul class="sub-menu-0">

                            <ul class="nav nav-pills second_navbar_area" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                       role="tab" aria-controls="pills-home" aria-selected="true">PRODUCTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                       role="tab" aria-controls="pills-profile" aria-selected="false">INDUSTRIES</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane products_tab fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <ul class="vertical-menu">
                                        <li><a href="{{route('product_include.mobility_service')}}"> Mobility Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('product_include.mobility_service.business_messaging')}}"> Business Messaging</a></li>
                                                <li><a href="#"> Device Management Programs</a></li>
                                                <li><a href="#"> Field Management</a></li>
                                                <li><a href="#"> In-Building Wireless</a></li>
                                                <li><a href="#"> Mobile Devices</a></li>
                                                <li><a href="#"> Mobility Rate Plans</a></li>
                                                <li><a href="#"> Mobile Remote Access</a></li>
                                            </ul>
                                            <ul class="sub-menu second_sub_menu">
                                                <li><a href="#"> Mobility Features</a></li>
                                                <li><a href="#"> Mobile business solutions</a></li>
                                                <li><a href="#"> Mobility Professional Services</a></li>
                                                <li><a href="#"> Device Financing and Trade-in</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"> Internet & Networking Services</a>

                                        </li>
                                        <li><a href="#"> Internet of Things</a>
                                            <ul>
                                                <li><a href="#"> North</a></li>
                                                <li><a href="#"> South</a></li>
                                                <li><a href="#"> East</a></li>
                                                <li><a href="#"> West</a></li>
                                                <li><a href="#"> Center</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"> Voice and Collaboration</a></li>
                                        <li><a href="#"> Cybersecurity services</a></li>
                                        <li><a href="#"> Cloud solutions</a></li>
                                        <li><a href="#"> directv for business</a></li>
                                    </ul>

                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                     aria-labelledby="pills-profile-tab">...
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6">
                        <a href="#" class="{{strpos($link, 'services') ? 'active_nav_menu' : ''}}">Services</a>
                        <ul class="sub-menu-0">
                            <ul class="vertical-menu">
                                <li><a href="{{route('services.compliance_management')}}"> compliance management</a>

                                </li>
                                <li><a href="{{route('services.consulting')}}">consulting</a>

                                </li>
                                <li><a href="{{route('services.eSource')}}">esource</a>

                                </li>
                                <li><a href="#">resources</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('services.resources.emc')}}"> EMC</a></li>
                                        <li><a href="{{route('services.resources.product_safety')}}"> Poduct Safety</a></li>
                                        <li><a href="{{route('services.resources.rf_exposure')}}"> RF eXPOSURE</a></li>
                                        <li><a href="{{route('services.resources.reference_link')}}"> Reference Links</a></li>
                                        <li><a href="{{route('services.resources.products')}}">Products</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{strpos($link, 'store') ? 'active_nav_menu' : ''}}" href="{{route('store')}}">Store</a>
                    </li>
                    <li id="menu-item-about" class="nav-item">
                        <a class="nav-link {{strpos($link, 'about') ? 'active_nav_menu' : ''}}" href="#">About</a>
                        <ul class="sub-menu-0">
                            <ul class="vertical-menu">
                                <li class="head_name">ABOUT</li>

                                <li><a href="#" class="p-t_0">Our Company</a>

                                </li>
                                <li><a href="{{route('about.our_team')}}">Our Team</a>

                                </li>
                                <li><a href="{{route('about.our_partners')}}">Our Partners</a>

                                </li>
                                <li><a href="{{route('about.our_capabilities')}}">Our Capabilities</a>

                                </li>
                                <li><a href="{{route('about.blog')}}">Blog</a>

                                </li>
                                <li><a href="#" class="p-b_0">Contacts</a>

                                </li>
                            </ul>
                        </ul>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link {{strpos($link, 'lab-reservation/booking') ? 'active_nav_menu' : ''}} " href="{{route('labReservationOne')}}">Lab Ratings / Directory</a>--}}
{{--                    </li>--}}

                    @if(\Illuminate\Support\Facades\Auth::check())

                        @if(\Illuminate\Support\Facades\Auth::user()->type == \App\User::TYPES['business'])
                            <li class="nav-item">
                                <a class="nav-link {{strpos($link, 'lab-reservation/booking') ? 'active_nav_menu' : ''}} " href="{{route('labReservationOne')}}">Lab Ratings / Directory</a>
                            </li>
                        @else

                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('businessLogin')}}">Lab Ratings / Directory</a>
                        </li>
                    @endif


                @if(strpos($link, 'store'))
                        <li class="nav-item">
                            <div class="images">
                                <img src="images/hearts.svg" class="hearts">
                                <div class="hearts_red">
                                    <img src="images/heart.svg">
                                </div>
                                <div class="sac">
                                    <img src="images/sac.svg">
                                    <span>1</span>
                                </div>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
            <ul class="business_personal">
                @if(\Illuminate\Support\Facades\Auth::user())
                    @if(\Illuminate\Support\Facades\Auth::user()->type == \App\User::TYPES['user'])
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Business</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">Personal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Business</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">Personal</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>


{{--    <!--  Modal Banner class="modal" -->--}}
{{--    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"--}}
{{--         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document" >--}}
{{--            <div class="modal-content">--}}

{{--                <div class="row justify-content-center">--}}
{{--                    <a href="{{route('businessLogin')}}">--}}

{{--                        <div class="login_modal ">--}}
{{--                            <div>--}}
{{--                                <img src="{{asset('images/login.png')}}" alt="Login" title="Login">--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <h4>Login or Sign Up business account</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </a>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</header>