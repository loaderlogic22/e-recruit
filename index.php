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
                Initially the companies are invited to take part in the recruitment drive. Those interested respond and thus register with us for the year for recruitment. The students are intimated and a vast number register for the interview.
                The interview process usually starts with a Power Point Presentation where the company enlightens the students about their company profile. Those interested then go for the interview, which usually comprises of a written test followed by group discussion and personal interview.
                The job scenario today is facing the onslaught of ground breaking competition from all fields; and employment into good companies and organizations has become a daunting task. So, for the benefit of its students preparing to face the job market, the St. Xavier’s College Placement Cell has risen to the occasion and has successfully aided in providing opportunities and employment to its outgoing students.
                With the relentless support of the staff and the students associated with the placement cell and most significantly Rev. Dr. Dominic Savio, S.J. at the helm, we strive to reach a step closer to our ultimate goal of 100% placements for our students.

            </div>
        </div>
        <div class="innerrowcard">
            <div class="article lreveal desk-show">
                The student committee has been able to create an extensive database of all the potential recruiting companies along with their contact details. Over the past one year, the cell has been successful in establishing an initial contact with more than five hundred companies. This has definitely increased awareness among the companies about St. Xavier’s College being a potential institution for recruitment option. In fact, those companies that have not been able to recruit from the College this year will surely consider St. Xavier’s College, Kolkata an effective option in the following year.The Placement Cell begins the academic year with the process of volunteer recruitment from the first and second year students. The process is conducted by the Core Committee of third year students. Students are then divided into five groups under team leaders, who perform their office and campus duties on different days of the week. Students apply as they want to help out conduct and manage placement activities. The members contact various corporate and human resource personnel regarding the organization of campus drives. Companies begin with the pre-placement talks followed by the group discussion and interview rounds. Once the recruitment process is completed, students are intimated about their selection within suitable time. Different companies may have different selection criteria and processes for students. </div>
            <div class="imgcard rreveal">
                <img src="./img/card2.jpg" alt="">
            </div>
            <div class="article lreveal mob-show">
                The student committee has been able to create an extensive database of all the potential recruiting companies along with their contact details. Over the past one year, the cell has been successful in establishing an initial contact with more than five hundred companies. This has definitely increased awareness among the companies about St. Xavier’s College being a potential institution for recruitment option. In fact, those companies that have not been able to recruit from the College this year will surely consider St. Xavier’s College, Kolkata an effective option in the following year.The Placement Cell begins the academic year with the process of volunteer recruitment from the first and second year students. The process is conducted by the Core Committee of third year students. Students are then divided into five groups under team leaders, who perform their office and campus duties on different days of the week. Students apply as they want to help out conduct and manage placement activities. The members contact various corporate and human resource personnel regarding the organization of campus drives. Companies begin with the pre-placement talks followed by the group discussion and interview rounds. Once the recruitment process is completed, students are intimated about their selection within suitable time. Different companies may have different selection criteria and processes for students. </div>
        </div>
        <div class="innerrowcard">
            <div class="imgcard lreveal">
                <img src="./img/card3.jpg" alt="">
            </div>
            <div class="article rreveal">
                A great number of new as well as regular companies visited our college for Placement this year. It started off in August with Futures First being the first, followed by companies such as Tata Consultancy Services, Deloitte, KPMG, Ernst & young, PWC, J P Morgan, Google, Zomato, United bank of Switzerland, Verity Solutions, Axis Bank, Citi Bank, ICICI Bank, HSBC, HDFC Bank, Swiss Re, Oyo Rooms, D E Shaw, Reckitt Benckiser, MuSigma, Pricewaterhouse Coopers, Infosys, Viacom 18, Ogilvy, ICRA, MGH, Mckinsey, Boston Consultancy, Sony India Ltd, Titan, ITC, Z S Associates, Zomato, Addidas, Uber, Grofers and Cognizant. We have placed more than 500 students through on campus drives and off campus interviews from departments like B.Com, BBA, M.Com, Economics ( Hons.) , Mathematics (Hons.), Biotechnology, English(Hons.), Statistics (Hons.), Political Science(Hons .) and Computer Science, with the annual CTC ranging from Rs. 3 lacs to Rs.20.5 lacs. We have students working at companies on various internship offers as well for second and thirds year students.
            </div>
        </div>
    </div>

    <?php include("./components/footer.php"); ?>
    <script>
        function closeside() {
            document.getElementById("sidebar").style.width = "0px";
            document.getElementById("sidebar").style.marginLeft = "-200px";
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