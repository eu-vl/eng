<?php
$this->title = 'Courses';
?>

    <section>
    <div class="row">
        <div class="courses__title"><h2>a1</h2></div>
        <?php foreach ($course as $oneCourse):?>
        <div class="col s12 m4 l4 xl4">
            <div class="card medium course__card"><a class="btn-floating btn-large waves-effect waves-light cyan cours__btnAdd"><i class="material-icons">add</i></a>
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?= $oneCourse->img ?>">
                </div>

                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><?= $oneCourse->title ?><i class="material-icons right">more_vert</i></span>
                    <a class="waves-effect waves-light btn cyan cours__btnDescr">Go to full Description</a>
                </div>

                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4 "><?= $oneCourse->title ?><i class="material-icons right">close</i></span>
                    <p><?= $oneCourse->descr ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
