<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 60%;
        }
    </style>
</head>
<body>


<div class="container mt-3">
<div>
    <h2 ALIGN="CENTER">BiblioTec</h2>
</div>

    <div id="myCarousel" class="carousel slide">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li class="item1 active"></li>
            <li class="item2"></li>
            <li class="item3"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Public/img/libros21.jpg" alt="Los Angeles" width="1000" height="500">
            </div>
            <div class="carousel-item">
                <img src="Public/img/libros18.jpg" alt="Chicago" width="1000" height="500">
            </div>
            <div class="carousel-item">
                <img src="Public/img/libros19.jpg" alt="New York" width="1000" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>

<script>
    $(document).ready(function(){
        // Activate Carousel
        $("#myCarousel").carousel();

        // Enable Carousel Indicators
        $(".item1").click(function(){
            $("#myCarousel").carousel(0);
        });
        $(".item2").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".item3").click(function(){
            $("#myCarousel").carousel(2);
        });

        // Enable Carousel Controls
        $(".carousel-control-prev").click(function(){
            $("#myCarousel").carousel("prev");
        });
        $(".carousel-control-next").click(function(){
            $("#myCarousel").carousel("next");
        });
    });
</script>

</body>
</html>

