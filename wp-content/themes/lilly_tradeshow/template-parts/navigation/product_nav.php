<?php
    // top banner navigation on approved product posts
    $anchors = get_field('anchor_links');
    $anchors = array_reverse($anchors);

    $subtitle = get_field('product_subtitle');
    //echo 'pst: '.$subtitle;

?>
<div class="productTop">
    <div class="productTop__zoom">
        <button class="zoom--in">+</button>
        <button class="zoom--out">–</button>
    </div>
    <div class="productTop__dots">
        
    </div>
    <nav class="productTop__anchors" role="navigation" aria-label="Anchor Links">
        <ul>
        <?php 
            foreach ($anchors as $anchor) {
        ?>
            <li>
                <a href="<?= $anchor['anchor_link']['url'] ?>" target="<?= $anchor['anchor_link']['target'] ?>"><?php echo html_entity_decode($anchor['anchor_link']['title']); ?></a>
            </li>
        <?php
            }
        ?>
        </ul>
    </nav>
    <div class="productTop__title"><?= the_title() ?><sup>®</sup><div class="productTop__subtitle"><?= $subtitle ?></div></div>

</div>