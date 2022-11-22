<?php
if (!is_active_sidebar('footer-sidebar')) {
    return;
}
?>


<aside id="secondary" class="widget-area" role="complementary">


    <?php dynamic_sidebar('footer-sidebar'); ?>


</aside>