<!DOCTYPE html>
<html lang="en">
<?php include("./components/head.php"); ?>

<body class="boxed" onload="myfunctionind()">
    <div class="loader-ind" id="loadingind">
        <div class="loader-inner">
            <img src="./img/headerlogo.png" alt="E-R">
            <div class="dot-cont">
                <div class="dot-pulse"></div>
            </div>
        </div>
    </div>
    <?php include("./components/header.php"); ?>
    <div class="margintop"></div>
    <div class="slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./img/slide1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/slide2.png" alt=""></div>
                <div class="swiper-slide"><img src="./img/slide3.png" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="margintop"></div>
    <div class="rowcard">
        <div class="innerrowcard">
            <div class="imgcard lreveal">
                <img src="./img/card1.jpg" alt="">
            </div>
            <div class="article rreveal">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nostrum doloremque neque, enim quidem quae quasi illo laudantium voluptas numquam ipsam perspiciatis blanditiis eligendi temporibus ut aspernatur sunt soluta veniam quibusdam deleniti! Reiciendis nostrum mollitia dolorum a dolore modi dicta architecto, sit ipsa illum ipsam ullam deleniti? In architecto itaque labore ullam eius repellendus velit, amet odio fugit eum ipsum!
            </div>
        </div>
        <div class="innerrowcard">
        <div class="article lreveal desk-show">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nostrum doloremque neque, enim quidem quae quasi illo laudantium voluptas numquam ipsam perspiciatis blanditiis eligendi temporibus ut aspernatur sunt soluta veniam quibusdam deleniti! Reiciendis nostrum mollitia dolorum a dolore modi dicta architecto, sit ipsa illum ipsam ullam deleniti? In architecto itaque labore ullam eius repellendus velit, amet odio fugit eum ipsum!
            </div>
            <div class="imgcard rreveal">
                <img src="./img/card2.jpg" alt="">
            </div>
            <div class="article lreveal mob-show">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nostrum doloremque neque, enim quidem quae quasi illo laudantium voluptas numquam ipsam perspiciatis blanditiis eligendi temporibus ut aspernatur sunt soluta veniam quibusdam deleniti! Reiciendis nostrum mollitia dolorum a dolore modi dicta architecto, sit ipsa illum ipsam ullam deleniti? In architecto itaque labore ullam eius repellendus velit, amet odio fugit eum ipsum!
            </div>
        </div>
        <div class="innerrowcard">
            <div class="imgcard lreveal">
                <img src="./img/card3.jpg" alt="">
            </div>
            <div class="article rreveal">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nostrum doloremque neque, enim quidem quae quasi illo laudantium voluptas numquam ipsam perspiciatis blanditiis eligendi temporibus ut aspernatur sunt soluta veniam quibusdam deleniti! Reiciendis nostrum mollitia dolorum a dolore modi dicta architecto, sit ipsa illum ipsam ullam deleniti? In architecto itaque labore ullam eius repellendus velit, amet odio fugit eum ipsum!
            </div>
        </div>
    </div>
    <div class="place-card">
        <div class="inner-place">
            <div class="cardplace">
                <div class="cardplace-img">
                    <img src="./img/cardplace.jpg" alt="">
                </div>
                <div class="cardplace-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nostrum doloremque neque, enim quidem quae quasi illo laudantium voluptas numquam ipsam perspiciatis blanditiis eligendi temporibus ut aspernatur sunt soluta veniam quibusdam deleniti! Reiciendis nostrum mollitia dolorum a dolore modi dicta architecto, sit ipsa illum ipsam ullam deleniti? In architecto itaque labore ullam eius repellendus velit, amet odio fugit eum ipsum!</p>
                </div>
            </div>
        </div>
    </div>
    <?php include("./components/footer.php"); ?>
    <script>
        function closeside() {
            document.getElementById("sidebar").style.width = "0px";
            document.getElementById("sidebar").style.marginLeft = "-130px";
        }

        function openside() {
            document.getElementById("sidebar").style.width = "100%";
            document.getElementById("sidebar").style.marginLeft = "-70px";
        }
        </script> 
        <script>
        window.addEventListener('scroll', reveal);

        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 10;

                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active")
                }
            }
        }
        window.addEventListener('scroll', lreveal);

        function lreveal() {
            var reveals = document.querySelectorAll(".lreveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add("lactive");
                } else {
                    reveals[i].classList.remove("lactive")
                }
            }
        }
        window.addEventListener('scroll', rreveal);

        function rreveal() {
            var reveals = document.querySelectorAll(".rreveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add("ractive");
                } else {
                    reveals[i].classList.remove("ractive")
                }
            }
        }
        </script>
    <script>
        var preloadind = document.getElementById('loadingind');

        function myfunctionind() {
            preloadind.style.display = 'none';
        }
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>