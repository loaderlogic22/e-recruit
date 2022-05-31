<!DOCTYPE html>
<html lang="en">
<?php include("./components/head.php"); ?>

<body>
    <?php include("./components/header.php"); ?>

    <script>
           function closeside() {
            document.getElementById("sidebar").style.width = "0px";
            document.getElementById("sidebar").style.marginLeft = "-130px";
        }
        function openside() {
            document.getElementById("sidebar").style.width = "100%";
            document.getElementById("sidebar").style.marginLeft = "-70px";
        }
        var myIndex = 0;
        slide();
        function slide() {
            var x = document.getElementsByClassName("myslide");
            var i = 0;
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1;
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(slide, 3000);
        }
        window.addEventListener('scroll', reveal);
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

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
</body>

</html>