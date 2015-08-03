<div id="page-wrapper">
    <?php print render($page['page_top']); ?>
    <header>
        <?php print render($page['header']); ?>
        <div id="logo">
            <!--logo-->
            <?php if($logo):?>
            <a href="<?php print $base_path;?>"title="<?php print t('Click to return to the Homepage');?>"/>
            <img src="<?php print $logo;?>"alt="<?php print t('Home');?>"/></a>
            <?php endif; ?>
        </div>
        <nav>
            <div id=”main-menu”>
                <?php print theme('links_system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('links','menu','inline','clearfix'))));?>
            </div>
        </nav>
    </header>

    <div id="slideshow"><?php print render($page['slideshow']); ?></div>

    <div>
        <!-- feedicons-->
        <?php print render($page['social']);?>
    </div>

    <article>
        <!--breadcrumbtrail-->
        <?php if($breadcrumb):?>
            <?php print $breadcrumb;?>
        <?php endif;?>

        <!--title-->
        <?php print render($title_prefix);?>
            <?php if($title):?>
            <h1><?php print $title;?></h1>
            <?php endif;?>
        <?php print render($title_suffix);?>

        <!--tabs-->
        <?php if($tabs):?>
            <?php print render($tabs); ?>
        <?php endif; ?>

        <!--messages-->
        <?php print $messages;?>

        <?php print render($page['content']); ?>
    </article>
    <footer><?php print render($page['footer']); ?></footer>
    <?php print render($page['page_bottom']); ?>
</div>