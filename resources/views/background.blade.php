<x-auth-layout>
    <style>
        body {
            overflow-x: hidden;
        }

        .section1 {
            background-color: #343a40;
            color: white;
            text-align: center;
        }

        .section2 {
            color: white;
            text-align: center;
            font-weight: bold;
            border-radius: 10px;
            padding: 140px !important;
        }

        li {
            font-size: 20px;
        }

        h3 {
            font-weight: bold;
            margin-bottom: 30px;
        }

        .project-showcase {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            margin-top: 100px;
        }

        .project-card {
            width: 300px;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s;
        }

        .project-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-card.center {
            transform: scale(1.1);
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.7);
        }

        .project-card.side {
            filter: blur(3px) brightness(0.6);
        }

        .project-info {
            text-align: center;
            margin-top: 40px;
        }

        .project-info h2 {
            font-size: 2rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        .project-info p {
            max-width: 600px;
            margin: 15px auto;
            color: #aaa;
        }

        .em {
            font-size: 90px;
        }

        .p {
            font-size: 12px;
        }
    </style>

    <script>
        class TxtType {
            constructor(el, toRotate, period) {
                this.toRotate = toRotate;
                this.el = el;
                this.loopNum = 0;
                this.period = parseInt(period, 10) || 2000;
                this.txt = '';
                this.isDeleting = false;
                this.tick();
            }
            tick() {
                let i = this.loopNum % this.toRotate.length;
                let fullTxt = this.toRotate[i];

                if (this.isDeleting) {
                    this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                    this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                this.el.querySelector('.wrap').innerHTML = this.txt;

                let delta = 200 - Math.random() * 100;
                if (this.isDeleting) {
                    delta /= 2;
                }

                if (!this.isDeleting && this.txt === fullTxt) {
                    delta = this.period;
                    this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                    this.isDeleting = false;
                    this.loopNum++;
                    delta = 500;
                }
                setTimeout(() => this.tick(), delta);
            }
        }
        window.onload = function() {
            let elements = document.getElementsByClassName('typewrite');
            for (let i = 0; i < elements.length; i++) {
                let toRotate = elements[i].getAttribute('data-type');
                let period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
        };
    </script>
    <style>
        .typewrite>.swrap {
            border-right: 0.08em solid #fff;
        }
    </style>
    <x-slot name="title">BSU BSIT REPOSITORY</x-slot>

    <!-- Section 1 -->
    <section class="section1" id="home">
        <div class="container">
            <div class="row align-items-center" style="padding-top: 100px; padding-bottom: 70px; min-height: 80vh;">
                <div class="col-md-4 d-flex flex-column justify-content-center text-center text-md-start mb-4 mb-md-0">
                    <div>
                        <h1 class="display-2 fw-bold">WELCOME, <p class="em">CODERS!</p>
                        </h1>
                        <div class="FirstBlock">
                            <p class="lead">CODING IS
                                <span class="typewrite" data-period="2000"
                                    data-type='[ "ART.", "LOGIC.", "CREATION.", "INNOVATION." ]'>
                                    <span class="wrap"></span>
                                </span>
                            </p>
                        </div>
                        <p class="fs-6">
                            By preserving capstone outputs, datasets, technical papers, and even small coding projects,
                            the repository promotes reusability, inspires future innovators, and builds a strong
                            community
                            of learners committed to advancing technology through collaboration and open-source
                            contributions.
                        </p>
                    </div>
                </div>
                <div class="col-md-8 d-flex justify-content-center align-items-center">
                    <div class="ratio ratio-16x9 w-100">
                        <video autoplay muted loop playsinline>
                            <source src="/images/vid1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="section2 bg-dark py-3" id="about">
        <div class="container">
            <h2 class="mb-5">BSU BOKOD BSIT REPOSITORY</h2>
            <div class="row g-4">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="p-3 bg-light text-dark h-100">
                        <h3>Project Repository</h3>
                        <p>Ensures the outputs of those collaborations (projects, datasets, papers) are preserved,
                            published, and made reusable.ensures the outputs of those collaborations (projects,
                            datasets, papers)
                            are preserved, published, and made reusable.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="p-3 bg-secondary text-white h-100">
                        <h3>Reusability</h3>
                        <p>Other students can learn from, improve, or extend existing projects.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="p-3 bg-secondary text-white h-100">
                        <h3>Knowledge Sharing</h3>
                        <p>Datasets, tutorials, and coding resources can be uploaded. T
                            his can serve as a training ground for collaborative, open-source,
                            and real-world project development.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="p-3 bg-secondary text-white h-100">
                        <h3>Publication</h3>
                        <p>Finished capstone projects, theses, and research outputs can be stored in an open-source
                            repository.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section3 -->
    <section class="section3 bg-black py-5" id="services">
        <div class="container text-center pb-5">
            <div class="project-showcase">
                <div class="project-card side">
                    <img src="/images/des1.jpg" alt="Side Project 1">
                </div>
                <div class="project-card center">
                    <img src="/images/des3.jpg" alt="Main Project">
                </div>
                <div class="project-card side">
                    <img src="/images/des2.jpg" alt="Side Project 2">
                </div>
                <div class="project-info p-2">
                    <h2 style="font-size: 50px">DESIGN . CREATE . INNOVATE.</h2>
                    <p class =" fs-10 text-white">Where creativity meets technology and innovation drives the future.
                    </p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    </x-layout>
