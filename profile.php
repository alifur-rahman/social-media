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
            <div class="profile-banner-large bg-img" data-bg="assets/images/banner/profile-banner.jpg">
            </div>
            <div class="profile-menu-area bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="profile-picture-box">
                                <figure class="profile-picture">
                                    <a href="profile.php">
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="widget-area profile-sidebar">
                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">kate palson</h4>
                                <div class="widget-body">
                                    <div class="about-author">
                                        <p>I Don’t know how? But i believe that it is possible one day if i stay with my dream all time</p>
                                        <ul class="author-into-list">
                                            <li><a href="#"><i class="bi bi-office-bag"></i>Graphic Designer</a></li>
                                            <li><a href="#"><i class="bi bi-home"></i>Melbourne, Australia</a></li>
                                            <li><a href="#"><i class="bi bi-location-pointer"></i>Pulshar, Melbourne</a></li>
                                            <li><a href="#"><i class="bi bi-heart-beat"></i>Travel, Swimming</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Sweets Memories</h4>
                                <div class="widget-body">
                                    <div class="sweet-galley img-gallery">
                                        <div class="row row-5">
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="assets/images/gallery/gallery-1.jpg">
                                                            <img src="assets/images/gallery/gallery-1.jpg" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="assets/images/gallery/gallery-2.jpg">
                                                            <img src="assets/images/gallery/gallery-2.jpg" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="assets/images/gallery/gallery-3.jpg">
                                                            <img src="assets/images/gallery/gallery-3.jpg" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="assets/images/gallery/gallery-4.jpg">
                                                            <img src="assets/images/gallery/gallery-4.jpg" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="assets/images/gallery/gallery-5.jpg">
                                                            <img src="assets/images/gallery/gallery-5.jpg" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="assets/images/gallery/gallery-6.jpg">
                                                            <img src="assets/images/gallery/gallery-6.jpg" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="assets/images/gallery/gallery-7.jpg">
                                                            <img src="assets/images/gallery/gallery-7.jpg" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="assets/images/gallery/gallery-8.jpg">
                                                            <img src="assets/images/gallery/gallery-8.jpg" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="assets/images/gallery/gallery-9.jpg">
                                                            <img src="assets/images/gallery/gallery-9.jpg" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">page you may like</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-33.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Travel The World</a></h3>
                                                <p class="list-subtitle"><a href="#">adventure</a></p>
                                            </div>
                                            <button class="like-button active">
                                                <img class="heart" src="assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-30.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Foodcort Nirala</a></h3>
                                                <p class="list-subtitle"><a href="#">food</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-5.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                                <p class="list-subtitle"><a href="#">drama</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-29.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                                <p class="list-subtitle"><a href="#">fitness</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget single item end -->
                        </aside>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2">
                        <!-- share box start -->
                        <div class="card card-small">
                            <div class="share-box-inner">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-37.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <!-- share content box start -->
                                <div class="share-content-box w-100">
                                    <form class="share-text-box">
                                        <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Say Something" data-toggle="modal" data-target="#textbox" id="email"></textarea>
                                        <button class="btn-share" type="submit">share</button>
                                    </form>
                                </div>
                                <!-- share content box end -->
                                <!-- Modal start -->
                                <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Share Your Mood</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body custom-scroll">
                                                <textarea name="share" class="share-field-big custom-scroll" placeholder="Say Something"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                                <button type="button" class="post-share-btn">post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                        </div>
                        <!-- share box end -->

                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-5.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.php">Kate Palson</a></h6>
                                    <span class="post-time">35 min ago</span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>copy link to adda</button></li>
                                            <li><button>edit post</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy.
                                </p>
                                <div class="post-thumb-gallery img-gallery">
                                    <div class="row no-gutters">
                                        <div class="col-8">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/post/post-large-2.jpg">
                                                    <img src="assets/images/post/post-2.jpg" alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="assets/images/post/post-large-3.jpg">
                                                            <img src="assets/images/post/post-3.jpg" alt="post image">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="col-12">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="assets/images/post/post-large-4.jpg">
                                                            <img src="assets/images/post/post-4.jpg" alt="post image">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="col-12">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="assets/images/post/post-large-5.jpg">
                                                            <img src="assets/images/post/post-5.jpg" alt="post image">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <button class="post-meta-like">
                                        <i class="bi bi-heart-beat"></i>
                                        <span>You and 207 people like this</span>
                                        <strong>207</strong>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>41</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="bi bi-share"></i>
                                                <span>07</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post status end -->

                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.php">Jon Wileyam</a></h6>
                                    <span class="post-time">15 min ago</span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>copy link to adda</button></li>
                                            <li><button>edit post</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc pb-0">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for
                                </p>
                                <div class="post-meta">
                                    <button class="post-meta-like">
                                        <i class="bi bi-heart-beat"></i>
                                        <span>You and 201 people like this</span>
                                        <strong>201</strong>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>41</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="bi bi-share"></i>
                                                <span>07</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post status end -->

                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
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
                                    <h6 class="author"><a href="profile.php">william henry</a></h6>
                                    <span class="post-time">35 min ago</span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>copy link to adda</button></li>
                                            <li><button>edit post</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy.
                                </p>
                                <div class="plyr__video-embed plyr-video">
                                    <iframe src="https://www.youtube.com/embed/WeA7edXsU40" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="post-meta">
                                    <button class="post-meta-like">
                                        <i class="bi bi-heart-beat"></i>
                                        <span>You and 201 people like this</span>
                                        <strong>201</strong>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>41</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="bi bi-share"></i>
                                                <span>07</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post status end -->

                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-8.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.php">Mili Raoulin</a></h6>
                                    <span class="post-time">50 min ago</span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>copy link to adda</button></li>
                                            <li><button>edit post</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy.
                                </p>
                                <div class="post-thumb-gallery img-gallery">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/post/post-large-6.jpg">
                                                    <img src="assets/images/post/post-6.jpg" alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-6">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/post/post-large-7.jpg">
                                                    <img src="assets/images/post/post-7.jpg" alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <button class="post-meta-like">
                                        <i class="bi bi-heart-beat"></i>
                                        <span>You and 230 people like this</span>
                                        <strong>230</strong>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>65</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="bi bi-share"></i>
                                                <span>04</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post status end -->

                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-6.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.php">Robart Faul</a></h6>
                                    <span class="post-time">40 min ago</span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>copy link to adda</button></li>
                                            <li><button>edit post</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc pb-0">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for Many desktop publishing packages and web page
                                    editors now use Lorem Ipsum as their default model text, and a search for Many
                                    desktop publishing duskam azer.
                                </p>
                                <div class="post-meta">
                                    <button class="post-meta-like">
                                        <i class="bi bi-heart-beat"></i>
                                        <span>You and 250 people like this</span>
                                        <strong>250</strong>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>80</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="bi bi-share"></i>
                                                <span>10</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post status end -->

                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-2.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.php">merry watson</a></h6>
                                    <span class="post-time">20 min ago</span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>copy link to adda</button></li>
                                            <li><button>edit post</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy.
                                </p>
                                <div class="post-thumb-gallery">
                                    <figure class="post-thumb img-popup">
                                        <a href="assets/images/post/post-large-1.jpg">
                                            <img src="assets/images/post/post-1.jpg" alt="post image">
                                        </a>
                                    </figure>
                                </div>
                                <div class="post-meta">
                                    <button class="post-meta-like">
                                        <i class="bi bi-heart-beat"></i>
                                        <span>You and 201 people like this</span>
                                        <strong>201</strong>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>41</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="bi bi-share"></i>
                                                <span>07</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post status end -->

                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.php">Jon Wileyam</a></h6>
                                    <span class="post-time">15 min ago</span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>copy link to adda</button></li>
                                            <li><button>edit post</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc pb-0">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for
                                </p>
                                <div class="post-meta">
                                    <button class="post-meta-like">
                                        <i class="bi bi-heart-beat"></i>
                                        <span>You and 204 people like this</span>
                                        <strong>204</strong>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>41</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="bi bi-share"></i>
                                                <span>07</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post status end -->
                    </div>

                    <div class="col-lg-3 order-3">
                        <aside class="widget-area">
                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Recent Notifications</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-9.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">5 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-35.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">10 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-15.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">18 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-6.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">25 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-34.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">39 min ago</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Advertizement</h4>
                                <div class="widget-body">
                                    <div class="add-thumb">
                                        <a href="#">
                                            <img src="assets/images/banner/advertise.jpg" alt="advertisement">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Friends Zone</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-10.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">arfim bolt</a></h3>
                                                <p class="list-subtitle"><a href="#">10 mutual</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-2.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">marry wither</a></h3>
                                                <p class="list-subtitle"><a href="#">02 mutual</a></p>
                                            </div>
                                            <button class="like-button active">
                                                <img class="heart" src="assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-5.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                                <p class="list-subtitle"><a href="#">drama</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="assets/images/profile/profile-small-14.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                                <p class="list-subtitle"><a href="#">fitness</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget single item end -->
                        </aside>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php
require('footer.inc.php');
?>