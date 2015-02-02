</div><!--#end #container-->
<footer id="footer" class="row<?php if (IS_FLUID) echo '-fluid' ?>">
	
    <div class="container">
        <div class="footNotes">
            <ul class="social">
                <?php if (of_get_option('facebook_username')): ?>
                    <li><a href="https://www.facebook.com/<?php echo of_get_option('facebook_username'); ?>" target="_blank" class="fb">Facebook</a></li>
                <?php endif; ?>
                <?php if (of_get_option('twitter_username')): ?>
                    <li><a href="https://twitter.com/<?php echo of_get_option('twitter_username'); ?>" target="_blank" class="twit">Twitter</a></li>
                <?php endif; ?>
                <li><a href="/contact-us" class="mail">E-mail</a></li>
            </ul>
            <p><?php echo of_get_option('copyright_notice'); ?></p>

            <div class="clearfix"></div>
        </div>
    </div>
</footer>

<div class="hide">
	<?php wp_footer(); ?>
</div>

</body>
</html>