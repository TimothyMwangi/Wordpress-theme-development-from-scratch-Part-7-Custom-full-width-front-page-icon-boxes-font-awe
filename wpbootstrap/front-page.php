<?php get_header() ?>
<section>
    <div class="jumbotron text-center">
        <h1>wp_bootstrap theme development</h1>
        <p>Learn to develop responsive wordpress themes from scratch with kaloraat.com</p>
        <a class="btn btn-primary btn-lg" href="http://kaloraat.com">Read more</a>
    </div>
</section>
<article>
    <div class="boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box1')) : ?>
                      <?php dynamic_sidebar('box1'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box3')) : ?>
                      <?php dynamic_sidebar('box3'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box2')) : ?>
                      <?php dynamic_sidebar('box2'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</article>
<?php get_footer(); ?>