<?php

use Bitrix\Main\Page\Asset;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <link
            rel="shortcut icon"
            href="<?= SITE_TEMPLATE_PATH ?>/assets/images/favicon.ico"
            type="image/x-icon"
    >

    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/common.css');
    ?>

    <?php $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>
