<?php
if ( get_field('page_banner') == "" ){ ?>
    <div class="pageBanner" style="background-image: url('<?php the_field('default_page_banner', 'options') ?>')">
<?php }else{ ?>
    <div class="pageBanner" style="background-image: url('<?php the_field('page_banner') ?>')">
<?php } ?>
    <div class="wrapper">
        <div class="pageTitle">
            <div class="bnrContent">
                <h1>
                <?php
                if ( get_field('text_banner') == "" ){ ?>
                    <?php the_title(); ?>
                <?php }else{ ?>
                    <?php the_field('text_banner') ?>
                <?php } ?>
                </h1>
            </div>
        </div>
    </div>
</div>