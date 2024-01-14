
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-Running Slide Show</title>
    <style>
        .slideshow .slideshow-container .prev {
            position: relative;
            top:300px;

            width: auto;
            padding: 16px;
            margin-top: -22px;
            cursor: pointer;
            left: -700px;
            color: black;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            color: white;
        }
        .slideshow .slideshow-container .next {
            position: relative;
            top:300px;

            width: auto;
            padding: 16px;
            margin-top: -22px;
            cursor: pointer;
            left:500px;
            color: black;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            color: white;
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
            
            }
    </style>
</head>
<body>
<div class="slideshow" style="width: 1400px;height:600px ;background-image: url('hinh_anh/banner/background.jpg');margin-top: -111px;">
<div class="slideshow-container" style=" top:5px ; left: 5px; ">
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
    <div class="mySlides">
        <img src="hinh_anh/banner/banner1.jpg"  style="width: 1300px; height: 500px;;">
    </div>

    <div class="mySlides">
        <img src="hinh_anh/banner/banner5.jpg"  style="width: 1300px;height: 500px; ">
    </div>

    <div class="mySlides">
        <img src="hinh_anh/banner/banner7.webp" style="width: 1300px;height: 500px; ">
    </div>
    
   
</div>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) { slideIndex = 1; }
        if (n < 1) { slideIndex = slides.length; }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }

    // Tự động chuyển slide mỗi 3 giây
    setInterval(function() {
        plusSlides(1);
    }, 5000);
</script>

</body>
</html>
