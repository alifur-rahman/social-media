<?php
require('admin/connection.inc.php');
require('top.inc.php');
$sql="select * from blog_event_clubs where type='2' order by id asc";
$res=mysqli_query($con,$sql);
?>
<main>

<div class="main-wrapper pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <aside class="widget-area">
                    <!-- widget single item start -->
                    <div class="card card-profile widget-item p-0">
                        <div class="profile-banner">
                            <figure class="profile-banner-small">
                                <a href="profile.php">
                                    <img src="assets/images/banner/banner-small.jpg" alt="">
                                </a>
                                <a href="profile.php" class="profile-thumb-2">
                                    <img src="assets/images/profile/profile-midle-1.jpg" alt="">
                                </a>
                            </figure>
                            <div class="profile-desc text-center">
                                <h6 class="author"><a href="profile.php">Dimbel Lebmid</a></h6>
                                <p>Any one can join with but Social network us if you want Any one can join with us if you want</p>
                            </div>
                        </div>
                    </div>
                    <!-- widget single item start -->

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

                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">latest top news</h4>
                        <div class="widget-body">
                            <ul class="like-page-list-wrapper">
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="assets/images/profile/profile-small-28.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">2 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="assets/images/profile/profile-small-31.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">20 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="assets/images/profile/profile-small-27.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">30 min ago</p>
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
                                        <p class="list-subtitle">40 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="assets/images/profile/profile-small-32.jpg" alt="profile picture">
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
                </aside>
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
               
                <?php 
					$i=1;
					while($row=mysqli_fetch_assoc($res)){?>
                <div class="card">
                    <!-- post title start -->
                    <div class="post-title d-flex align-items-center">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-middle">
                                    <img src="admin/uploads/<?php echo $row['image']; ?>" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                            <h6 class="author"><a href="profile.php"><?php echo $row['title']?></a></h6>
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
                        <?php echo $row['description']; ?>
                        </p>
                        <div class="post-thumb-gallery">
                            <figure class="post-thumb img-popup">
                                <a href="assets/images/post/post-large-1.jpg">
                                    <img src="admin/uploads/<?php echo $row['image']; ?>" alt="post image">
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
                <?php } ?>

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
                                                <img src="assets/images/profile/profile-small-33.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Ammeya Jakson</a></h3>
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
                                                <img src="assets/images/profile/profile-small-30.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Jashon Muri</a></h3>
                                        <p class="list-subtitle"><a href="#">2 mutual</a></p>
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
        </div>
    </div>
</div>

</main>
<?php
require('footer.inc.php');
?>