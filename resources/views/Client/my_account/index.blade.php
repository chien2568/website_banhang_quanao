@extends('layouts.master')
@section('content')
    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>User Dashboard</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">User Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- user dashboard section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs custome-nav-tabs flex-column category-option" id="myTab">
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light active" id="tab" data-bs-toggle="tab" data-bs-target="#dash" type="button"><i class="fas fa-angle-right"></i>Dashboard</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="1-tab" data-bs-toggle="tab" data-bs-target="#order" type="button"><i class="fas fa-angle-right"></i>Đơn hàng chờ xác nhận</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab" data-bs-target="#wishlist" type="button"><i class="fas fa-angle-right"></i>Đơn hàng đã được xác nhận </button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="3-tab" data-bs-toggle="tab" data-bs-target="#save" type="button"><i class="fas fa-angle-right"></i>Đơn hàng giao thành công</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="4-tab" data-bs-toggle="tab" data-bs-target="#pay" type="button"><i class="fas fa-angle-right"></i>Đơn đã hủy</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="5-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"><i class="fas fa-angle-right"></i>Profile</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link font-light" id="6-tab" data-bs-toggle="tab" data-bs-target="#security" type="button"><i class="fas fa-angle-right"></i>Security</button>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="filter-button dash-filter dashboard">
                        <button class="btn btn-solid-default btn-sm fw-bold filter-btn">Show Menu</button>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="dash">
                            <div class="dashboard-right">
                                <div class="dashboard">
                                    <div class="page-title title title1 title-effect">
                                        <h2>My Dashboard</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        <h6 class="font-light">Hello, <span>MARK JECNO !</span></h6>
                                        <p class="font-light">From your My Account Dashboard you have the ability to
                                            view a snapshot of your recent account activity and update your account
                                            information. Select a link below to view or edit information.</p>
                                    </div>

                                    <div class="order-box-contain my-4">
                                        <div class="row g-4">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="/assets/images/svg/box.png" class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="/assets/images/svg/box1.png" class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Tất cả các đơn đã đặt</h5>
                                                            <h3>{{$ordersCount}}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="/assets/images/svg/sent.png" class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="/assets/images/svg/sent1.png" class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Những đơn hàng chưa được xác nhận </h5>
                                                            <h3>{{$pendingOrdersCount}}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="/assets/images/svg/sent.png" class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="/assets/images/svg/sent1.png" class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Những đơn hàng đã được xác nhận </h5>
                                                            <h3>{{$confiemedOrderCount}}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="/assets/images/svg/sent.png" class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="/assets/images/svg/sent1.png" class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Những đơn thành công</h5>
                                                            <h3>{{$finishOrderCount}}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="/assets/images/svg/wishlist.png" class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="/assets/images/svg/wishlist1.png" class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">wishlist</h5>
                                                            <h3>63874</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-account box-info">
                                        <div class="box-head">
                                            <h3>Account Information</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h4>Contact Information</h4><a href="javascript:void(0)">Edit</a>
                                                    </div>
                                                    <div class="box-content">
                                                        <h6 class="font-light">MARK JECNO</h6>
                                                        <h6 class="font-light">MARk-JECNO@gmail.com</h6>
                                                        <a href="javascript:void(0)">Change Password</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h4>Newsletters</h4><a href="javascript:void(0)">Edit</a>
                                                    </div>
                                                    <div class="box-content">
                                                        <h6 class="font-light">You are currently not subscribed to any
                                                            newsletter.</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="box address-box">
                                                <div class="box-title">
                                                    <h4>Address Book</h4><a href="javascript:void(0)">Manage
                                                        Addresses</a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="row g-4">
                                                        <div class="col-sm-6">
                                                            <h6 class="font-light">Default Billing Address</h6>
                                                            <h6 class="font-light">You have not set a default
                                                                billing address.</h6>
                                                            <a href="javascript:void(0)">Edit Address</a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h6 class="font-light">Default Shipping Address</h6>
                                                            <h6 class="font-light">You have not set a default
                                                                shipping address.</h6>
                                                            <a href="javascript:void(0)">Edit Address</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('Client.my_account.pendingOrder')
                       @include('Client.my_account.confiemedOrder')
                       @include('Client.my_account.finishOrder')
                       @include('Client.my_account.cancelOrder')


                        <div class="tab-pane fade dashboard-profile dashboard" id="profile">
                            <div class="box-head">
                                <h3>Profile</h3>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#resetEmail">Edit</a>
                            </div>
                            <ul class="dash-profile">
                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Company Name</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Surfside Media Fashion</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Country / Region</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Downers Grove, IL</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Year Established</h6>
                                    </div>
                                    <div class="right">
                                        <h6>2018</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Total Employees</h6>
                                    </div>
                                    <div class="right">
                                        <h6>101 - 200 People</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Category</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Clothing</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Street Address</h6>
                                    </div>
                                    <div class="right">
                                        <h6>549 Sulphur Springs Road</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">City/State</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Downers Grove, IL</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Zip</h6>
                                    </div>
                                    <div class="right">
                                        <h6>60515</h6>
                                    </div>
                                </li>
                            </ul>

                            <div class="box-head mt-lg-5 mt-3">
                                <h3>Login Details</h3>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#resetEmail">Edit</a>
                            </div>

                            <ul class="dash-profile">
                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Email Address</h6>
                                    </div>
                                    <div class="right">
                                        <h6>mark.jugal@gmail.com</h6>
                                    </div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#resetEmail">Edit</a>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Phone No.</h6>
                                    </div>
                                    <div class="right">
                                        <h6>+1-202-555-0198</h6>
                                    </div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#resetEmail">Edit</a>
                                </li>

                                <li class="mb-0">
                                    <div class="left">
                                        <h6 class="font-light">Password</h6>
                                    </div>
                                    <div class="right">
                                        <h6>●●●●●●</h6>
                                    </div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#resetEmail">Edit</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade dashboard-security dashboard" id="security">
                            <div class="box-head">
                                <h3>Delete Your Account</h3>
                            </div>
                            <div class="security-details">
                                <h5 class="font-light mt-3">Hi <span> Mark Enderess,</span>
                                </h5>
                                <p class="font-light mt-1">We Are Sorry To Here You Would Like To Delete Your Account.
                                </p>
                            </div>

                            <div class="security-details-1 mb-0">
                                <div class="page-title">
                                    <h4 class="fw-bold">Note</h4>
                                </div>
                                <p class="font-light">Deleting your account will permanently remove your profile,
                                    personal settings, and all other associated information. Once your account is
                                    deleted, You will be logged out and will be unable to log back in.</p>

                                <p class="font-light mb-4">If you understand and agree to the above statement, and would
                                    still like to delete your account, than click below</p>

                                <button class="btn btn-solid-default btn-sm fw-bold rounded" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete Your
                                    Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->
@endsection