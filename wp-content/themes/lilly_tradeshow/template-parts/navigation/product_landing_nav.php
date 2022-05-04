<?php
    // top banner navigation on approved product posts
    $anchors = get_field('anchor_links');
    $anchors = array_reverse($anchors);
?>
<div class="productTop">
    <nav class="productTop__anchors" role="navigation" aria-label="Anchor Links">
        <ul>
        <?php 
            foreach ($anchors as $anchor) {
        ?>
            <li>
                <a href="<?= $anchor['anchor_link']['url'] ?>" target="<?= $anchor['anchor_link']['target'] ?>"><?= $anchor['anchor_link']['title'] ?></a>
            </li>
        <?php
            }
        ?>
        </ul>
    </nav>
    <!-- <div class="productTop__title"><?= the_title() ?><sup>®</sup></div> -->
</div>