<div class="wrap category category-<?php the_category_slug()?>">
    <div class="container">
        <h1 class="headline"><?php the_category_name();?></h1>
        <div class="content-section">
            <?php the_category_content()?>

        </div>
    </div>
    <?php get_template_part('widget', 'inquiry-smallcontact'); ?>

    <div class="container content-section">
        <h2><?php the_category_name();?></h2>
        <ul class="item-list-vertical">
<?php
while(have_posts()){
    the_post();
?>
            <li itemscope itemtype="https://schema.org/Product">
                <meta itemprop="mpn" content="<?php echo the_category_slug().'-'.get_the_ID();?>">
                <meta itemprop="brand" content="Camelway MiaoYan">
                <meta itemprop="sku" content="Camelway Machinery Honor Manufacturing">
                <a href="<?php the_permalink()?>">
                    <img src="<?php the_thumbnail()?>" alt="<?php the_subtitle()?>" itemprop="image">
                </a>
                <div class="item-content">
                    <h3 itemprop="name"><a href="<?php the_permalink();?>"><?php the_subtitle();?></a></h3>
                    <p itemprop="description"><?php echo dm_trim_words(get_the_excerpt(), 100);?></p>
                    <a itemprop="url" href="<?php the_permalink();?>" class="more">More</a>
                </div>
                <div itemprop="offers" itemscope itemtype="https://schema.org/AggregateOffer">
                    <link itemprop="url" href="<?php the_permalink()?>#inquiry-form">
                    <meta itemprop="availability" content="https://schema.org/PreOrder">
                    <meta itemprop="itemCondition" content="http://schema.org/NewCondition">
                    <meta itemprop="priceCurrency" content="USD">
                    <meta itemprop="lowPrice" content="<?php the_post_data('lowprice')?>">
                    <meta itemprop="highPrice" content="<?php the_post_data('highprice')?>">
                    <meta itemprop="offerCount" content="<?php the_post_data('offercount');?>">
                    <div itemprop="seller" itemscope itemtype="http://schema.org/Organization">
                        <meta itemprop="name" content="Camelway Machinery">
                    </div>
                </div>
            </li>
<?php } ?>
        </ul>
    </div>

    <?php get_template_part('widget', 'inquiry-form'); ?>

</div>
