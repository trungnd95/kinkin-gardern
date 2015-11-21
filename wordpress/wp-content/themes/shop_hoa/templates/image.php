<?php
/*
 * Template name: Image Homepage Template
 */

?>
<section class="img-homepage">
    <div class="row">
        <div class="col-sm-12">
            <?php echo get_the_post_thumbnail(get_the_ID(),'full');?>
        </div>
    </div>
</section>
