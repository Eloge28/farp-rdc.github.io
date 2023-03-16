<?php 
    require '../components/header.php'; 
    require('../fakeDB.php');
    require('../utilities.php');
?>

<div class="videos__container">
    <h1 class="big__title">Nos Videos</h1>
    <div class="body videos">
        <?php foreach($videosLink as $video) { ?>
            <div class="video">
                <iframe width="100%" height="100%" src="<?php echo handleVideoLink($video['link']) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        <?php } ?>
        </div>
    </div>
</div>
<!--  -->

<?php require('../components/footer.php') ?>