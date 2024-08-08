<?php $page = 'blog'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta name="description" content="" />
  <meta name="keywords" content="" />
    <?php include 'include/header-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="img/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="img/logo.png">



</head>

<body>

    <!-- wrapper -->
    <div class="mil-wrapper" id="top">

        <!-- cursor -->
        <div class="mil-ball">
            <span class="mil-icon-1">
                <svg viewBox="0 0 128 128">
                    <path d="M106.1,41.9c-1.2-1.2-3.1-1.2-4.2,0c-1.2,1.2-1.2,3.1,0,4.2L116.8,61H11.2l14.9-14.9c1.2-1.2,1.2-3.1,0-4.2	c-1.2-1.2-3.1-1.2-4.2,0l-20,20c-1.2,1.2-1.2,3.1,0,4.2l20,20c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9c1.2-1.2,1.2-3.1,0-4.2	L11.2,67h105.5l-14.9,14.9c-1.2,1.2-1.2,3.1,0,4.2c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9l20-20c1.2-1.2,1.2-3.1,0-4.2L106.1,41.9	z" />
                </svg>
            </span>
            <div class="mil-more-text">More</div>
            <div class="mil-choose-text">Сhoose</div>
        </div>
        <!-- cursor end -->

        <!-- header start -->
        <?php include 'include/header.php'; ?>
        <!-- header end  -->

        <!-- content -->
        <div class="mil-content">
            <div id="swupMain" class="mil-main-transition">

                <!-- banner -->
                <div class="mil-inner-banner mil-p-0-120">
                    <div class="mil-banner-content mil-up">
                        <div class="mil-animation-frame">
                            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
                        </div>
                        <div class="container">
                            <ul class="mil-breadcrumbs mil-mb-60">
                                <li><a href="index.php">Homepage</a></li>
                                <li><a href="blog.php">Blog</a></li>
                            </ul>
                            <h1 class="mil-mb-60">Exploring <span class="mil-thin">the World</span> <br> Through Our <span class="mil-thin">Blog</span></h1>
                            <a href="#blog" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                                <span>services</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- banner end -->

                <!-- popular -->
                <section class="mil-soft-bg" id="blog">
                    <div class="container mil-p-120-60">
                        <div class="row align-items-center mil-mb-30">
                            <div class="col-lg-6 mil-mb-30">
                                <h3 class="mil-up">Popular services:</h3>
                            </div>
                            <div class="col-lg-6 mil-mb-30">
                                <div class="mil-adaptive-right mil-up">
                                    <a href="blog.php" class="mil-link mil-dark mil-arrow-place">
                                        <span>View all</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

                                <a href="service.php" class="mil-blog-card mil-mb-60">
                                    <div class="mil-cover-frame mil-up">
                                        <img src="img/blog/1.jpg" alt="cover">
                                    </div>
                                    <div class="mil-post-descr">
                                        <div class="mil-labels mil-up mil-mb-30">
                                            <div class="mil-label mil-upper mil-accent">TECHNOLOGY</div>
                                            <div class="mil-label mil-upper">may 24 2023</div>
                                        </div>
                                        <h4 class="mil-up mil-mb-30">How to Become a Graphic Designer in 10 Simple Steps</h4>
                                        <p class="mil-post-text mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius sequi commodi dignissimos optio, beatae, eos necessitatibus nisi. Nam cupiditate consectetur nostrum qui! Repellat natus nulla, nisi aliquid, asperiores impedit tempora sequi est reprehenderit cumque explicabo, dicta. Rem nihil ullam totam ea voluptas quibusdam repudiandae id ut at iure! Totam, a!</p>
                                        <div class="mil-link mil-dark mil-arrow-place mil-up">
                                            <span>Read more</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="col-lg-6">

                                <a href="service.php" class="mil-blog-card mil-mb-60">
                                    <div class="mil-cover-frame mil-up">
                                        <img src="img/blog/2.jpg" alt="cover">
                                    </div>
                                    <div class="mil-post-descr">
                                        <div class="mil-labels mil-up mil-mb-30">
                                            <div class="mil-label mil-upper mil-accent">TECHNOLOGY</div>
                                            <div class="mil-label mil-upper">may 24 2023</div>
                                        </div>
                                        <h4 class="mil-up mil-mb-30">16 Best Graphic Design Online and Offline Courses</h4>
                                        <p class="mil-post-text mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius sequi commodi dignissimos optio, beatae, eos necessitatibus nisi. Nam cupiditate consectetur nostrum qui! Repellat natus nulla, nisi aliquid, asperiores impedit tempora sequi est reprehenderit cumque explicabo, dicta. Rem nihil ullam totam ea voluptas quibusdam repudiandae id ut at iure! Totam, a!</p>
                                        <div class="mil-link mil-dark mil-arrow-place mil-up">
                                            <span>Read more</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- popular end -->

                <!-- blog -->
                <section>
                    <div class="container mil-p-120-120">
                        <div class="row align-items-center mil-mb-30">
                            <div class="col-lg-4 mil-mb-30">
                                <h3 class="mil-up">Categories:</h3>
                            </div>
                            <div class="col-lg-8 mil-mb-30">
                                <div class="mil-adaptive-right mil-up">

                                    <ul class="mil-category-list">
                                        <li><a href="blog.php">Design</a></li>
                                        <li><a href="blog.php">Art</a></li>
                                        <li><a href="blog.php">Code</a></li>
                                        <li><a href="blog.php">Technology</a></li>
                                        <li><a href="blog.php" class="mil-active">All categories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                                <a href="service.php" class="mil-blog-card mil-blog-card-hori mil-more mil-mb-60">
                                    <div class="mil-cover-frame mil-up">
                                        <img src="img/blog/3.jpg" alt="cover">
                                    </div>
                                    <div class="mil-post-descr">
                                        <div class="mil-labels mil-up mil-mb-30">
                                            <div class="mil-label mil-upper mil-accent">TECHNOLOGY</div>
                                            <div class="mil-label mil-upper">may 24 2023</div>
                                        </div>
                                        <h4 class="mil-up mil-mb-30">How to Create a Brand Guide for Your Client</h4>
                                        <p class="mil-post-text mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius sequi commodi dignissimos optio, beatae, eos necessitatibus nisi. Nam cupiditate consectetur nostrum qui! Repellat natus nulla, nisi aliquid, asperiores impedit tempora sequi est reprehenderit cumque explicabo, dicta. Rem nihil ullam totam ea voluptas quibusdam repudiandae id ut at iure! Totam, a!</p>
                                        <div class="mil-link mil-dark mil-arrow-place mil-up">
                                            <span>Read more</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="col-lg-12">

                                <a href="service.php" class="mil-blog-card mil-blog-card-hori mil-more mil-mb-60">
                                    <div class="mil-cover-frame mil-up">
                                        <img src="img/blog/4.jpg" alt="cover">
                                    </div>
                                    <div class="mil-post-descr">
                                        <div class="mil-labels mil-up mil-mb-30">
                                            <div class="mil-label mil-upper mil-accent">TECHNOLOGY</div>
                                            <div class="mil-label mil-upper">may 24 2023</div>
                                        </div>
                                        <h4 class="mil-up mil-mb-30">Color Psychology in Art and Design</h4>
                                        <p class="mil-post-text mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius sequi commodi dignissimos optio, beatae, eos necessitatibus nisi. Nam cupiditate consectetur nostrum qui! Repellat natus nulla, nisi aliquid, asperiores impedit tempora sequi est reprehenderit cumque explicabo, dicta. Rem nihil ullam totam ea voluptas quibusdam repudiandae id ut at iure! Totam, a!</p>
                                        <div class="mil-link mil-dark mil-arrow-place mil-up">
                                            <span>Read more</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="col-lg-12">

                                <a href="service.php" class="mil-blog-card mil-blog-card-hori mil-more mil-mb-60">
                                    <div class="mil-cover-frame mil-up">
                                        <img src="img/blog/5.jpg" alt="cover">
                                    </div>
                                    <div class="mil-post-descr">
                                        <div class="mil-labels mil-up mil-mb-30">
                                            <div class="mil-label mil-upper mil-accent">TECHNOLOGY</div>
                                            <div class="mil-label mil-upper">may 24 2023</div>
                                        </div>
                                        <h4 class="mil-up mil-mb-30">How to Design a Repeating Pattern</h4>
                                        <p class="mil-post-text mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius sequi commodi dignissimos optio, beatae, eos necessitatibus nisi. Nam cupiditate consectetur nostrum qui! Repellat natus nulla, nisi aliquid, asperiores impedit tempora sequi est reprehenderit cumque explicabo, dicta. Rem nihil ullam totam ea voluptas quibusdam repudiandae id ut at iure! Totam, a!</p>
                                        <div class="mil-link mil-dark mil-arrow-place mil-up">
                                            <span>Read more</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="col-lg-12">

                                <a href="service.php" class="mil-blog-card mil-blog-card-hori mil-more mil-mb-60">
                                    <div class="mil-cover-frame mil-up">
                                        <img src="img/blog/6.jpg" alt="cover">
                                    </div>
                                    <div class="mil-post-descr">
                                        <div class="mil-labels mil-up mil-mb-30">
                                            <div class="mil-label mil-upper mil-accent">TECHNOLOGY</div>
                                            <div class="mil-label mil-upper">may 24 2023</div>
                                        </div>
                                        <h4 class="mil-up mil-mb-30">How to Never Reach Creative Burnout</h4>
                                        <p class="mil-post-text mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius sequi commodi dignissimos optio, beatae, eos necessitatibus nisi. Nam cupiditate consectetur nostrum qui! Repellat natus nulla, nisi aliquid, asperiores impedit tempora sequi est reprehenderit cumque explicabo, dicta. Rem nihil ullam totam ea voluptas quibusdam repudiandae id ut at iure! Totam, a!</p>
                                        <div class="mil-link mil-dark mil-arrow-place mil-up">
                                            <span>Read more</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="col-lg-12">
                                <div class="mil-pagination">
                                    <a href="blog.php" class="mil-pagination-btn mil-active">1</a>
                                    <a href="blog.php" class="mil-pagination-btn">2</a>
                                    <a href="blog.php" class="mil-pagination-btn">3</a>
                                    <a href="blog.php" class="mil-pagination-btn">4</a>
                                    <a href="blog.php" class="mil-pagination-btn">5</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- blog end -->

                <!-- call to action -->
                <section class="mil-soft-bg">
                    <div class="container mil-p-120-120">
                        <div class="row">
                            <div class="col-lg-10">

                                <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">Looking to make your mark? We'll help you turn <br> your project into a success story.</span>

                            </div>
                        </div>
                        <div class="mil-center">
                            <h2 class="mil-up mil-mb-60">Stay up-to-date <span class="mil-thin">with the</span><br> latest news by <span class="mil-thin">subscribing</span><br> to our <span class="mil-thin">newsletter!</span></h2>
                            <div class="row justify-content-center mil-up">
                                <div class="col-lg-4">
                                    <form class="mil-subscribe-form mil-subscribe-form-2 mil-up">
                                        <input type="text" placeholder="Enter our email">
                                        <button type="submit" class="mil-button mil-icon-button-sm mil-arrow-place"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- call to action end -->


            </div>
        </div>
        <!-- content -->

        <?php include 'include/footer.php'; ?>


    </div>
    <!-- wrapper end -->


    <?php include 'include/footer-links.php'; ?>


</body>


</html>