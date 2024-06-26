<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLORIOUS -- GALLERY</title>
    <link rel="stylesheet" href="./gallery.css">
</head>

<body>
    <?php include "header.html"; ?> <div class="head-info">
        <h1>Gallery -- Our Glorious moments</h1>
    </div>
    <div class="path-way">
        <p><a href="./index.php">Home</a>><a href="./Gallery.php">Gallery</a></p>
    </div>
    <section id="sports">
        <div class="main-content-head">
            <div id="sports" class="image-block">
                <h1> SPORTS </h1>
                <div class="img-area">
                    <div class="single-img"><img src="./Assets/Facilities/S4.jpg" width="360" height="310" id="myImg" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Facilities/S5.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Facilities/S6.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S6.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S7.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S8.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S9.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S10.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S11.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S12.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S13.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S14.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S15.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S16.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S17.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S18.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                    <div class="single-img"><img src="./Assets/Gallery/S19.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                </div>

            </div>

        </div>
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
        </div>
    </section>

    <section id="science-fest">
        <div class="science-fest image-block">
            <h1>SCIENCE-FEST</h1>
            <div class="img-area">
                <div class="single-img"><img src="./Assets/Facilities/S1.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                <div class="single-img"><img src="./Assets/Facilities/S2.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                <div class="single-img"><img src="./Assets/Facilities/S3.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
            </div>
        </div>
    </section>

    <section id="idp_day">
        <div id="independence_day" class="image-block">
            <h1>INDEPENDANCE DAY</h1>
            <div class="img-area">
                <div class="single-img"><img src="./Assets/Facilities/ID1.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                <div class="single-img"><img src="./Assets/Facilities/ID2.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                <div class="single-img"><img src="./Assets/Facilities/ID3.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                <div class="single-img"><img src="./Assets/Facilities/ID4.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                <div class="single-img"><img src="./Assets/Facilities/ID5.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
                <div class="single-img"><img src="./Assets/Facilities/ID6.jpg" width="360" height="310" style="border-radius: 10px;" alt=""></div>
            </div>
        </div>

    </section>
    <?php include 'footer.html' ?>



    <script>
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</body>

</html>