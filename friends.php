<?php
require('admin/connection.inc.php');
require('top.inc.php');
$sql="select * from blog_event_clubs where type='1' order by id asc";
$res=mysqli_query($con,$sql);
?>
        <div class="mobile-header-wrapper sticky d-block d-lg-none">
            <div class="mobile-header position-relative ">
                <div class="mobile-logo">
                    <a href="index.php">
                        <img src="assets/images/logo/logo-white.png" alt="logo">
                    </a>
                </div>
                <div class="mobile-menu w-100">
                    <ul>
                        <li>
                            <button class="notification request-trigger"><i class="flaticon-users"></i>
                                <span>03</span>
                            </button>
                            <ul class="frnd-request-list">
                                <li>
                                    <div class="frnd-request-member">
                                        <figure class="request-thumb">
                                            <a href="profile.php">
                                                <img src="assets/images/profile/profile-midle-1.jpg" alt="proflie author">
                                            </a>
                                        </figure>
                                        <div class="frnd-content">
                                            <h6 class="author"><a href="profile.php">merry watson</a></h6>
                                            <p class="author-subtitle">Works at HasTech</p>
                                            <div class="request-btn-inner">
                                                <button class="frnd-btn">confirm</button>
                                                <button class="frnd-btn delete">delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="frnd-request-member">
                                        <figure class="request-thumb">
                                            <a href="profile.php">
                                                <img src="assets/images/profile/profile-midle-2.jpg" alt="proflie author">
                                            </a>
                                        </figure>
                                        <div class="frnd-content">
                                            <h6 class="author"><a href="profile.php">merry watson</a></h6>
                                            <p class="author-subtitle">Works at HasTech</p>
                                            <div class="request-btn-inner">
                                                <button class="frnd-btn">confirm</button>
                                                <button class="frnd-btn delete">delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="frnd-request-member">
                                        <figure class="request-thumb">
                                            <a href="profile.php">
                                                <img src="assets/images/profile/profile-midle-3.jpg" alt="proflie author">
                                            </a>
                                        </figure>
                                        <div class="frnd-content">
                                            <h6 class="author"><a href="profile.php">merry watson</a></h6>
                                            <p class="author-subtitle">Works at HasTech</p>
                                            <div class="request-btn-inner">
                                                <button class="frnd-btn">confirm</button>
                                                <button class="frnd-btn delete">delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button class="notification"><i class="flaticon-notification"></i>
                                <span>03</span>
                            </button>
                        </li>
                        <li>
                            <button class="chat-trigger notification"><i class="flaticon-chats"></i>
                                <span>04</span>
                            </button>
                            <div class="mobile-chat-box">
                                <div class="live-chat-title">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="profile.php">
                                            <figure class="profile-thumb-small profile-active">
                                                <img src="assets/images/profile/profile-small-15.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->
                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.php">Robart Marloyan</a></h6>
                                        <span class="active-pro">active now</span>
                                    </div>
                                    <div class="live-chat-settings ml-auto">
                                        <button class="chat-settings"><img src="assets/images/icons/settings.png" alt=""></button>
                                        <button class="close-btn"><img src="assets/images/icons/close.png" alt=""></button>
                                    </div>
                                </div>
                                <div class="message-list-inner">
                                    <ul class="message-list custom-scroll">
                                        <li class="text-friends">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                            <div class="message-time">10 minute ago</div>
                                        </li>
                                        <li class="text-author">
                                            <p>Many desktop publishing packages and web page editors</p>
                                            <div class="message-time">5 minute ago</div>
                                        </li>
                                        <li class="text-friends">
                                            <p>packages and web page editors </p>
                                            <div class="message-time">2 minute ago</div>
                                        </li>
                                        <li class="text-friends">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                            <div class="message-time">10 minute ago</div>
                                        </li>
                                        <li class="text-author">
                                            <p>Many desktop publishing packages and web page editors</p>
                                            <div class="message-time">5 minute ago</div>
                                        </li>
                                        <li class="text-friends">
                                            <p>packages and web page editors </p>
                                            <div class="message-time">2 minute ago</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-text-field mob-text-box">
                                    <textarea class="live-chat-field custom-scroll" placeholder="Text Message"></textarea>
                                    <button class="chat-message-send" type="submit" value="submit">
                                        <img src="assets/images/icons/plane.png" alt="">
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button class="search-trigger">
                                <i class="search-icon flaticon-search"></i>
                                <i class="close-icon flaticon-cross-out"></i>
                            </button>
                            <div class="mob-search-box">
                                <form class="mob-search-inner">
                                    <input type="text" placeholder="Search Here" class="mob-search-field">
                                    <button class="mob-search-btn"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mobile-header-profile">
                    <!-- profile picture end -->
                    <div class="profile-thumb profile-setting-box">
                        <a href="javascript:void(0)" class="profile-triger">
                            <figure class="profile-thumb-middle">
                                <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                            </figure>
                        </a>
                        <div class="profile-dropdown text-left">
                            <div class="profile-head">
                                <h5 class="name"><a href="#">Madison Howard</a></h5>
                                <a class="mail" href="#">mailnam@mail.com</a>
                            </div>
                            <div class="profile-body">
                                <ul>
                                    <li><a href="profile.php"><i class="flaticon-user"></i>Profile</a></li>
                                    <li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
                                    <li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#"><i class="flaticon-settings"></i>Setting</a></li>
                                    <li><a href="signup.php"><i class="flaticon-unlock"></i>Sing out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- profile picture end -->
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <main>

        <div class="main-wrapper">
            <!-- profile banner area start -->
            <div class="profile-banner-large bg-img" data-bg="assets/images/banner/profile-banner.jpg">
            </div>
            <!-- profile banner area end -->

            <!-- profile menu area start -->
            <div class="profile-menu-area secondary-navigation-style bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="profile-picture-box">
                                <figure class="profile-picture">
                                    <a href="#">
                                        <img src="assets/images/profile/profile-1.jpg" alt="profile picture">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 offset-lg-1">
                            <div class="profile-menu-wrapper">
                                <div class="main-menu-inner header-top-navigation">
                                    <nav>
                                        <ul class="main-menu">
                                            <li class="active"><a href="#">timeline</a></li>
                                            <li><a href="about.php">about</a></li>
                                            <li><a href="photos.php">photos</a></li>
                                            <li><a href="friends.php">friends</a></li>
                                            <li><a href="about.php">more</a></li>
                                            <!-- <li class="d-inline-block d-md-none"><a href="profile.php">edit profile</a></li> -->
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 d-none d-md-block">
                            <div class="profile-edit-panel">
                                <button class="edit-btn">edit profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- profile menu area end -->

            <!-- sendary menu start -->
            <div class="menu-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="secondary-menu-wrapper secondary-menu-2 bg-white">
                                <div class="page-title-inner">
                                    <h4 class="page-title">friends (1250)</h4>
                                </div>
                                <div class="filter-menu">
                                    <button class="active" data-filter="*">all</button>
                                    <button data-filter=".recently">recently</button>
                                    <button data-filter=".relative">relative</button>
                                    <button data-filter=".collage">collage</button>
                                    <button data-filter=".request">request</button>
                                </div>
                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>edit profile</button></li>
                                            <li><button>activity log</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sendary menu end -->

            <!-- photo section start -->
            <div class="friends-section mt-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-box friends-zone">
                                <div class="row mt--20 friends-list">
                                    <div class="col-lg-3 col-sm-6 recently request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">Kate Midiltoin</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-4.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">Jon Wileyam</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently collage request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-7.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">william henry</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-22.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">Kate Midiltoin</a></h6>
                                                <button class="add-frnd">friend request sent</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently collage">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-10.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">Omio Morganik</a></h6>
                                                <button class="add-frnd">friend request sent</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-13.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">william henry</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 collage request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-18.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">erik jonson</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-25.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">peter looks</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently collage">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-16.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">jhon doe</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-12.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">william henry</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently collage">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-9.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">william henry</a></h6>
                                                <button class="add-frnd">friend request sent</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-17.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">musa kollins</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative collage">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-11.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">petter jhon</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 request collage">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-20.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">henry william</a></h6>
                                                <button class="add-frnd">friend request sent</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently relative">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-32.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">cristian paul</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative collage request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-31.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">willson merry</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 request recently">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-29.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">jhonsina boss</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-26.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">william jowel</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative collage">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-19.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">ashim pual</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-23.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">Barak Obama</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">Kate Midiltoin</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-4.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">Jon Wileyam</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently collage request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-7.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">william henry</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-22.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">Kate Midiltoin</a></h6>
                                                <button class="add-frnd">friend request sent</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently collage">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-10.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">Omio Morganik</a></h6>
                                                <button class="add-frnd">friend request sent</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-13.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">william henry</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 collage request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-18.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">erik jonson</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-25.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">peter looks</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently collage">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-16.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">jhon doe</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-12.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">william henry</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently collage">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-9.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">william henry</a></h6>
                                                <button class="add-frnd">friend request sent</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-17.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">musa kollins</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative collage">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-11.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">petter jhon</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 request collage">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-20.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">henry william</a></h6>
                                                <button class="add-frnd">friend request sent</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently relative">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-32.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">cristian paul</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative collage request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-31.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">willson merry</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 request recently">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-29.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">jhonsina boss</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-26.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">william jowel</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 relative collage">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-19.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">ashim pual</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 recently request">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="assets/images/profile/profile-small-23.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.php">Barak Obama</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- photo section end -->
        </div>

    </main>

<?php
require('footer.inc.php');
?>