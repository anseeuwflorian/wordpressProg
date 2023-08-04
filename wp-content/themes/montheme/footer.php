</div>
</main>
<footer>

<?php if ( is_active_sidebar('bottom-left') &&  is_active_sidebar('bottom-center') &&  is_active_sidebar('bottom-right')) : ?>
	<ul id="sidebarBottom">
    <?php dynamic_sidebar('bottom-left') ?>
    
    <?php dynamic_sidebar('bottom-center') ?>
    
    <?php dynamic_sidebar('bottom-right') ?>
	</ul>
<?php endif; ?>

    <!-- <?php dynamic_sidebar('bottom-left') ?>
    
    <?php dynamic_sidebar('bottom-center') ?>
    
    <?php dynamic_sidebar('bottom-right') ?> -->
</footer>
<!-- Appel à la fonction -->
<?php wp_footer() ?>
</body>
</html>