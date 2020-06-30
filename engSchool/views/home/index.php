

<section class="about-us">
    <div class="about-us-title mainTitle">
        <span>About us</span>
    </div>
    <div class="row about-us-content hoverable z-depth-2">

        <div class="col s12 m6 l6 about-us-img">
            <img class="" src="img/about_us_img.jfif" width="500" alt="">
        </div>
        <div class="col s12 m6 l6 about-us-desc">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit consequatur molestiae facere non nihil. Nihil, possimus laborumbundleRenderer.
                Corporis similique est provident ea eveniet, hic unde quo eaque eum, animi placeat. Lorem ipsum dolor sit amet!</p>
        </div>
    </div>
    <!-- About us end -->
    <!-- Our team start -->
    <div class="our-team">
        <div class="our-team-title mainTitle">
            <span>Our team</span>
        </div>
        <div class="row our-team-content">
            <?php foreach ($ourteam as $ourt): ?>
                <div class="col s12 m4 l4 hoverable our-team-cards">
                <div class="our-team-img">
                    <img class="responsive-img" src="<?= $ourt->img ?>"  alt="">
                    <div class="our-team-btn">
                        <a class="btn-floating btn-med waves-effect waves-light cyan pulse" title="Go to Profile"><i class="material-icons">account_circle</i></a>
                    </div>
                </div>
                <div class="our-team-desc">
                    <p class="flow-text"><?= $ourt->name ?></p>
                    <p class="flow-text">Degree: <?= $ourt->degree ?></p>
                </div>
            </div>
            <?php endforeach; ?>
</section>
<section class="courses">
    <div class="course-title mainTitle">
        <span>Courses</span>
    </div>
    <div class="courses-slider">
        <div class="carousel carousel-slider center">
            <div class="carousel-fixed-item center">

                <!-- <a class="btn-floating btn-med waves-effect waves-light cyan medium material-icons btnPrev" href="">arrow_back</a>
                <a class="btn-floating btn-med waves-effect waves-light cyan medium material-icons" href="">arrow_forward</a> -->

            </div>
            <div class="carousel-item red white-text" href="#one!">
                <h2>Course 1</h2>
                <!-- <img src="" alt=""> -->
                <a class="btn-flat btn-large waves-effect waves-light cyan large material-icons" href="">SOME COURSE</a>
                <p class="white-text">This is your first course.</p>
                <a id="slider-btn-text" class="btn waves-effect cyan white-text darken-text-2">more</a>

            </div>
            <div class="carousel-item amber white-text" href="#two!">
                <h2>Course 2</h2>
                <!-- <img src="" alt=""> -->
                <a class="btn-flat btn-large waves-effect waves-light cyan large material-icons" href="">SOME COURSE</a>
                <p class="white-text">This is your second course</p>
                <a id="slider-btn-text" class="btn waves-effect cyan white-text darken-text-2">more</a>

            </div>
            <div class="carousel-item green white-text" href="#three!">
                <h2>Course 3</h2>
                <!-- <img src="" alt=""> -->
                <a class="btn-flat btn-large waves-effect waves-light cyan large material-icons" href="">SOME COURSE</a>
                <p class="white-text">This is your third course</p>
                <a id="slider-btn-text" class="btn waves-effect cyan white-text darken-text-2">more</a>

            </div>
            <div class="carousel-item blue white-text" href="#four!">
                <h2>Course 4 </h2>
                <!-- <img src="" alt=""> -->
                <a class="btn-flat btn-large waves-effect waves-light cyan large material-icons" href="">SOME COURSE</a>
                <p class="white-text">This is your fourth course</p>
                <a id="slider-btn-text" class="btn waves-effect cyan white-text darken-text-2">more</a>

            </div>
        </div>
    </div>
</section>
