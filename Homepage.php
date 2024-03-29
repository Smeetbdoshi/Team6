<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d1c2ea8b80.js" crossorigin="anonymous"></script>
    <title>Homepage</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div id="sectionHome" class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                    <a class="navbar-brand" href="#">
                        <!--<img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-website-logo-img.png" class="logo-nbs" />-->
                        GetMobile
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-link active navbar-text-style-nbs" href="#">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-link navbar-text-style-nbs" href="#sectionServices">Services</a>
                            <a class="nav-link navbar-text-style-nbs" href="#sectionProducts">Products</a>
                            <a class="nav-link navbar-text-style-nbs" href="#sectionExplore">Explore Deals & Offers</a>
                            <a class="nav-link navbar-text-style-nbs" href="#sectionTrendingBlogs">Trending Blogs</a>
                            <?php if($_SESSION['login_user'] == ''){ ?>
                            <a class="nav-link navbar-text-style-nbs" href="login.php">Login</a>
                            <a class="nav-link navbar-text-style-nbs" href="register.php">Sign Up</a>
                            <?php }else{ ?>
                                <p>Welcome, <?php echo $_SESSION['login_user']; ?></p>
                                <a class="nav-link navbar-text-style-nbs" href="logout.php">Logout</a>
                            <?php } ?>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/caurosel 1.png" class="d-block d-md-none w-100 slides-nbs" alt="...">
                            <img src="images/caurosel 1.png" class="d-md-block d-none w-100 slides-nbs" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/caurosel 2.png" class="d-block d-md-none w-100 slides-nbs" alt="...">
                            <img src="images/caurosel 2.png" class="d-md-block d-none w-100 slides-nbs" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/caurosel 3.png" class="d-block d-md-none w-100 slides-nbs" alt="...">
                            <img src="images/caurosel 3.png" class="d-none d-md-block w-100 slides-nbs" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div id="sectionServices">
            <div class="row pt-5 pb-5">
                <div class="col-12">
                    <h1 class="heading-ss">Our Services</h1>
                    <p class="description-ss">
                        Most online stores offer lower prices. Online shopping makes price
                        comparison simpler and quicker. It is very convenient to shop from
                        where you are located. It saves you the cost of driving to stores,
                        as well as parking fees.
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="shadow text-center p-3 mb-3">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-services-delivery-img.png" class="w-25 pb-2" />
                        <h1 class="card-header-ss p-1">Fast and Free Delivery</h1>
                        <p class="card-description-ss">Fast, Free, and convenient delivery choices on millions of items.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="shadow text-center p-3 mb-3">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-services-money-back-img.png" class="w-25 pb-2" />
                        <h1 class="card-header-ss p-1">100% Money back guarantee</h1>
                        <p class="card-description-ss">This is probably the most popular guarantee in the world.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="shadow text-center p-3 mb-3">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-services-24-by-7-support-img.png" class="w-25 pb-2" />
                        <h1 class="card-header-ss p-1">Online Support 24/7</h1>
                        <p class="card-description-ss">Our Online Support will provide you with many useful functions, valuable information, tips.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="sectionProducts" class="row mb-5">
            <div class="col-12">
                <h1 class="page-heading-ps mb-3">Our Products</h1>
            </div>
            <div class="col-12 col-md-6">
                <div class="card-1-ps mb-3 d-flex flex-column justify-content-end">
                    <h1 class="card-header-ps w-75">Android Phones</h1>
                    <p class="card-description-ps w-75">Make your usage easier...!</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="card-button-ps" data-toggle="modal" data-target="#smartHeadphonesModal">
                        View details
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="smartHeadphonesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title modal-header-ps" id="examcard-modal-pleModalLabel">Basic Specifications in Android mobiles</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Get Best Smart Android mobile phones as your need.
                                        Select from the best range of Smartphones from most popular brands...
                                    </p>
                                    <ul class="modal-list-ps">
                                        <li class="modal-list-item-ps">
                                            <span class="list-item-category-ps">Voice Assistant</span> Bixby and Google Assistant
                                        </li>
                                        <li class="modal-list-item-ps">
                                            <span class="list-item-category-ps">Performance</span> Exynos, Snapdragon, MediaTek
                                        </li>
                                        <li class="modal-list-item-ps">
                                            <span class="list-item-category-ps">Storage:</span> RAM and ROM
                                        </li>
                                        <li class="modal-list-item-ps">
                                            <span class="list-item-category-ps">Battery:</span> 5500 mAH (maximum)
                                        </li>
                                        <li class="modal-list-item-ps">
                                            <span class="list-item-category-ps">Display:</span> Super Amoled, Amoled, etc.,
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card-2-ps p-3 d-flex flex-column justify-content-end">
                    <h1 class="card-header-ps">Apple Phones</h1>
                    <p class="card-description-ps">Feel Secured...</p>
                    <button type="button" class="card-button-ps" data-toggle="modal" data-target="#laptopModal">
                        View details
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="laptopModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog mt-5">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title modal-header-ps" id="exampleModalLabel">Iphone 14 Series</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Get Best Apple Mobile which suits your requirements as mentioned below:

                                    </p>
                                    <ul class="modal-list-ps">
                                        <li class="modal-list-item-ps">
                                            <span class="list-item-category-ps">Performance:</span> A16 Bionic (latest)
                                        </li>
                                        <li class="modal-list-item-ps">
                                            <span class="list-item-category-ps">Storage:</span> 1TB (MAX)
                                        </li>
                                        <li class="modal-list-item-ps">
                                            <span class="list-item-category-ps">Battery:</span> Li-Ion, 4323 mAH (Highest)
                                        </li>
                                        <li class="modal-list-item-ps">
                                            <span class="list-item-category-ps">Display:</span> 6.69 Inchs
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex flex-row justify-content-end mt-3">
                <a class="link-ps">
                    See All offers
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                </a>
            </div>
        </div>
        <!--<div id="sectionOffers" class="row bg-container-os pt-5 pb-5">
            <div class="col-12 col-md-2 order-1 order-md-2">
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-offers-special-img.png" class="w-100" />
            </div>
            <div class="col-12 col-md-6 order-2 order-md-3 mb-2">
                <img src="offers-section-phones.png" class="w-100" />
            </div>
            <div class="col-12 col-md-4 order-3 order-md-1 d-flex flex-column justify-content-center">
                <h1 class="heading-os mb-2">BEST NEW YEAR SPECIAL OFFERS</h1>
                <p class="text-white" style="font-size: 24px;">Best time to buy. Save upto <span class="percent-os">70% cash</span> back</p>
                <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-offers-credit-card-img.png" class="discount-image-os" />
            </div>
        </div>-->
        <div id="sectionTrendingBlogs" class="row pb-3 pt-5">
            <div class="col-12">
                <h1 class="header-tbs">Trending Blogs</h1>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-3 shadow">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-trending-blogs-1-img.png" class="w-100" />
                    <div class="p-3">
                        <header class="card-header-tbs">Fountain Pens</header>
                        <h1 class="card-heading-tbs">Guide to Fountain Pen Nibs</h1>
                        <p class="card-description-tbs">
                            If you're having trouble with a fountain pen whether it's
                            scratchy, too dry, or too wet...
                        </p>
                        <a class="card-button-tbs">
                            READ MORE
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="mb-3 shadow">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-trending-blogs-2-img.png" class="w-100 p-0 m-0" />
                    <div class="p-3">
                        <header class="card-header-tbs">Productivity</header>
                        <h1 class="card-heading-tbs">How to Craft a Better Todo List</h1>
                        <p class="card-description-tbs">
                            A well-crafted Todo list acts as a guiding light for your day. It helps you overcome...
                        </p>
                        <a class="card-button-tbs">
                            READ MORE
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="sectionExplore" class="row bg-container-es pb-5">
            <div class="col-12">
                <h1 class="heading-es mb-3">Explore Deals</h1>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="p-3 card-es mb-3 shadow">
                    <h1 class="card-title-es">Samsung Galaxy S23 Ultra</h1>
                    <div class="card-image-container-es">
                        <img src="images/S23 ultra deals.jpg" class="card-image-es" />
                    </div>
                    <a class="card-link-es">
                        See All Deals
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="p-3 card-es mb-3 shadow">
                    <h1 class="card-title-es">iPhone 14 Pro Max</h1>
                    <div class="card-image-container-es">
                        <img src="images/iPhone 14 pro max deals.jpg" class="card-image-es" />
                    </div>
                    <a class="card-link-es">
                        See All Deals
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="p-3 card-es mb-3 shadow">
                    <h1 class="card-title-es">Google Pixel 7 Pro</h1>
                    <div class="card-image-container-es">
                        <img src="images/Google Pixel 7 pro deals.jpg" class="card-image-es" />
                    </div>
                    <a class="card-link-es">
                        See All Deals
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div id="sectionContactUs" class="row">
            <div class="cs col-12 pt-5 pb-5 text-center">
                <h1 class="heading-cs">Smart Life with Smart Phone <br/>brought to you by <i>GetMobile</i></h1>
                <p>DISCLAIMER: <span>All the images used in this project are copyright free and is built by a team for Academic purposes</span></p>
            </div>
        </div>
        <div id="sectionFooter" class="bg-container-fs pt-5 pb-5">
            <div class="row pl-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="text-center text-md-left">
                        <h1 class="text-white">GetMobile</h1>
                        <div class="d-flex flex-row justify-content-center justify-content-md-start mt-3 mb-3">
                            <div class="logo-styling">
                                <i class="fab fa-google icon-fs"></i>
                            </div>
                            <div class="logo-styling">
                                <i class="fab fa-twitter icon-fs"></i>
                            </div>
                            <div class="logo-styling">
                                <i class="fab fa-instagram icon-fs"></i>
                            </div>
                            <div class="logo-styling">
                                <i class="fab fa-linkedin icon-fs"></i>
                            </div>
                        </div>
                        <p class="address-fs">
                            Aston University, Birmingham, The United Kingdom
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mt-3">
                    <h1 class="heading-fs mb-3">Contact with Us</h1>
                    <ul class="list-fs">
                        <li class="list-item-fs">Facebook</li>
                        <li class="list-item-fs">Twitter</li>
                        <li class="list-item-fs">Instagram</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 mt-3">
                    <h1 class="heading-fs mb-3">Let Us Help You</h1>
                    <ul class="list-fs">
                        <li class="list-item-fs">100% Purchase Protection</li>
                        <li class="list-item-fs">Your Account</li>
                        <li class="list-item-fs">Return Centre</li>
                        <li class="list-item-fs">Help</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 mt-3">
                    <h1 class="heading-fs mb-3">Know about GetMobile</h1>
                    <ul class="list-fs">
                        <li class="list-item-fs">About us</li>
                        <li class="list-item-fs">Career</li>
                        <li class="list-item-fs">Press Release</li>
                        <li class="list-item-fs">Gift a smile</li>
                    </ul>
                </div>
            </div>
            <!--
            <hr class="line1" />
            <div class="text-center">
                <i class="fa fa-copyright icon-fs" aria-hidden="true"></i>
                <span class="copyright-fs">
                    2023. Created by Akhil Jasti. Created with Bootstrap.
                </span>
            </div>
            -->
        </div>
    </div>
</body>
</html>