<?php require('../components/header.php') ?>
</div>

<?php 
    require('../fakeDB.php');
    require('../utilities.php');
?>

<div class="posts__container">
    <h1 class="big__title">Nos publications</h1>
    <div class="posts body">
        <div class="news">
            <?php foreach($news as $new) { ?>
                <div class="card">
                    <div class="card-img">
                        <img src="<?php echo $new['img'] ?>" />
                    </div>
                    <h3>
                        <a href="#"><?php echo $new['title'] ?></a>
                    </h3>
                    <p><?php echo getShortText($new['content']) ?></p>
                    <a href="../pages/post.php?slug-sera-ici" class="read__more">Lire</a>
                </div>
            <?php } ?>
        </div>
        <div class="pagination">
            <span class="prev">Precedent</span>
            <div class="pages_number">
                <?php 
                    $page = 2;
                    for($i=0;$i<=5;$i++) { ?>
                    <span><?php echo $i+1 ?></span>
                <?php } ?>
            </div>
            <span class="next">Suivant</span>
        </div>
    </div>
</div>

<?php require('../components/footer.php') ?>