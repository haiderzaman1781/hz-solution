<body>
<?php include 'include/nav.php'; ?>

<!-- jumbotron -->
<div class="jumbotron bg-white opacity-25 d-md-flex align-items-center justify-content-center" id="home">
    <div class="container text-center">
        <h1>Welcome to our Home</h1>
        <p><strong>HZ Solutions</strong> is a website developer dedicated to creating simple and creative web pages,
            always striving to improve and learn new things.</p>
    </div>
    <div class="container">
        <input type="file">Just for showing
    </div>
</div>

<!-- About -->
<section class="about jumbotron bg-transparent py-5" id="about">
    <div class="container text-center" data-aos="fade-up">
        <h2>--About Us--</h2>
        <p><strong>HZ Solutions</strong> is the best software house for creating creative designs of websites and mobile
            apps.</p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <div class="image text-center">
                    <img class="w-100" src="./images/web1.avif" alt="Web Development">
                </div>
                <div class="description text-center py-3">
                    <h3>Web Development</h3>
                    <p>Creative web development blends innovative design with advanced functionality, crafting immersive
                        digital experiences that captivate users.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="image text-center">
                    <img class="w-100" src="./images/app1.avif" alt="App Development">
                </div>
                <div class="description text-center py-3">
                    <h3>App Development</h3>
                    <p>Creative app development merges imaginative design with seamless functionality, creating engaging
                        digital solutions that enhance user experience.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="about.php" class="btn bgc">More About Us</a>
    </div>
</section>

<!-- Services -->
<section class="service" id="service">
    <div class="container text-center" data-aos="fade-up">
        <h2>--Our Services--</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-left">
                <div class="image1 text-center">
                    <img class="w-100" src="./images/webservice.avif" alt="Web Service">
                </div>
                <div class="description text-center mt-4">
                    <h5>Web Development</h5>
                    <p>Creative web development blends innovative design with advanced functionality, crafting immersive
                        digital experiences that captivate users.</p>
                    <button class="btn">Get Service</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-out">
                <div class="image1 text-center">
                    <img class="w-100" src="./images/appservice.avif" alt="App Service">
                </div>
                <div class="description text-center mt-4">
                    <h5>App Development</h5>
                    <p>Creative app development merges imaginative design with seamless functionality, creating engaging
                        digital solutions that enhance user experience.</p>
                    <button class="btn">Get Service</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-right">
                <div class="image1 text-center">
                    <img class="w-100" src="./images/SEO.avif" alt="Digital Marketing">
                </div>
                <div class="description text-center mt-4">
                    <h5>Digital Marketing</h5>
                    <p>Creative digital marketing strategies that drive innovation in mobile technology through intuitive
                        interfaces and inventive features.</p>
                    <button class="btn">Get Service</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>

<script src="js/main.js"></script>
</body>