<?php
/**
 * Этот файл является частью виджета веб-приложения RosGear.
 * 
 * Файл конфигурации установки виджета.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'use'         => FRONTEND,
    'id'          => 'rg.wd.yandexshare',
    'category'    => 'widget',
    'name'        => 'Yandex Share',
    'description' => 'Yandex Share',
    'namespace'   => 'Rg\Widget\YandexShare',
    'path'        => '/rg/rg.wd.yandexshare',
    'locales'     => ['ru_RU', 'en_GB'],
    'events'      => ['article:onRender'],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'RG CMS']
    ]
];
