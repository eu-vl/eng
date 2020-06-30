<?php
$this->title = 'Teachers';
?>

    <?php foreach ($teacher as $teach):?>
        <section class="teachers-card hoverable">
    <div class="row">
        <div class="col s12 m4 l4">
            <div class="teacher-info">
                <img class="responsive-img" src="<?=$teach->img ?>" alt="">
                <h4 class="teacher-name"><?= $teach->name ?></h4>
            </div>
        </div>
        <div class="col s12 m8 l8">
            <p><?= $teach->descr ?></p>
            <div class="teacher-skill-prf">
                <p>Skills:<?= $teach->skills ?> </p>
                <a class="btn-flat btn-large waves-effect waves-light yellow lighten-1 large teacher-btn" href="Profile.html">Profile<i class="material-icons right">account_box</i></a>
            </div>
        </div>
    </div>
</section>
<hr>
    <?php endforeach; ?>




