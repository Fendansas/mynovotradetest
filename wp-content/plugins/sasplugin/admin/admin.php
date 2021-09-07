<h1 class="sasplugin_title"><?php esc_html_e('Sasplugin Settings', 'sasplugin'); ?></h1>
<!--    вывод ошибок-->
<?php settings_errors(); ?>

<div class="sasplugin_content">
    <form method="post" action="options.php">
        <?php
        settings_fields('plugin_settings');
        do_settings_sections('sasplugin_settings');
        submit_button();
        ?>
    </form>
</div>
