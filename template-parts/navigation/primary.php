<?php
/**
 * Primary menu template part
 */    
?>   

<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary', 'mission-locale' ); ?>">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><p><?php esc_html_e( 'Menu', 'mission-locale' ); ?></p><span></span></button>
    <?php
 wp_nav_menu(
    array(
        'theme_location' => 'primary_menu',
        'menu_id'        => 'primary-menu',
        'container'      => 'nav', // Utilisez une balise <nav> pour l'enveloppe du menu
        'container_class' => 'ng1-nav-menu', // Ajoutez une classe personnalisée à la balise <nav>
        'menu_class'      => 'ng1-nav-menu__items', // Ajoutez une classe personnalisée à la balise <ul>
    )
);
    ?>
</nav><!-- #site-navigation -->