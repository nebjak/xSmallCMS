<!DOCTYPE html>
<html>
    <head>
        <title><?= WEBSITE_TITLE.' - '.$title ?></title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="<?=WEBSITE_URL.'themes/'.WEBSITE_THEME?>/style.css" />
    </head>
    <body>
        <div id="header">
            <?= WEBSITE_TITLE ?>
        </div>
        <div id="nav_bar">
            <? foreach ($pages as $page): ?>
            <a href="?p=<?=$page->id?>" title="<?=$page->title?>" class="page_button"><?=$page->title?></a>
            <? endforeach; ?>
        </div>
        <div id="page">
            <h1><?= $title ?></h1>
            <p>
                <?= $content ?>
            </p>            
        </div>
        <div id="footer">
            Created by nebjak &copy; 2011.
        </div>
    </body>
</html>
