<?php require "header.php"; ?>

<link rel="stylesheet" type="text/css" href="engine1/style.css" />

<div class="banner-container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/banner1.jpg" alt="Chania">
            </div>

            <div class="item">
                <img src="images/banner2.jpg" alt="Chania">
            </div>

            <div class="item">
                <img src="images/banner3.jpg" alt="Flower">
            </div>

            <div class="item">
                <img src="images/banner4.jpg" alt="Flower">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row" style="margin-top:15px;">
        <div class="col-lg-6">
            <div id="my-thumbs-list" class="mThumbnailScroller">
                <ul>
                    <li>
                        <a href="collection-wild.php"><img src="images/tiger-home.jpg" />
                        </a>
                    </li>
                    <li>
                        <a href="collection-wild.php"><img src="images/elang-home.jpg" />
                        </a>
                    </li>
                    <!-- and so on... -->
                </ul>
            </div>
        </div>
        <div class="col-lg-6">
            <div id="my-thumbs-list" class="mThumbnailScroller">
                <ul>
                    <li>
                        <a href="collection-classic.php"><img src="images/karpa-home.jpg" />
                        </a>
                    </li>
                    <li>
                        <a href="collection-classic.php"><img src="images/tuero-home.jpg" />
                        </a>
                    </li>
                    <!-- and so on... -->
                </ul>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
</div>
<br>
<br>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.hoverizr.js"></script>
<script type="text/javascript" src="js/jquery.mThumbnailScroller.js"></script>
<!-- <hr style="color: #291f19; background: #291f19; width: 99%; height: 1.5px;"> -->
</div>
<?php require "footer.php"; ?>
