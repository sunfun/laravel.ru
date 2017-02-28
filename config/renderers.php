<?php
/**
 * This file is part of laravel.su package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Рендер содержания по-умолчанию
    |--------------------------------------------------------------------------
    |
    | Укажите значение для "ключа" рендера по-умолчанию. Список всех доступных
    | рендеров содержатся в массиве "renderers" этого файла конфигурации.
    |
    */
    'default' => 'Markdown',

    'renderers' => [
        /*
        |--------------------------------------------------------------------------
        | Рендер для парсинга Markdown разметки
        |--------------------------------------------------------------------------
        |
        | Это html-редер по-умолчанию. Используется для рендера GitHub
        | разметки в html.
        |
        */
        'Markdown' => \App\Services\ContentRenderer\MarkdownRenderer::class,

        /*
        |--------------------------------------------------------------------------
        | Рендер для парсинга документации Laravel
        |--------------------------------------------------------------------------
        |
        | Этот html-редер основан на рендере GitHub Markdown за исключением
        | дополнительной, специфичной для документации Laravel разметки.
        | Выберите его, если требуется Laravel-совместимый html-редер.
        |
        */
        'Laravel'  => \App\Services\ContentRenderer\LaravelDocsRenderer::class,

        /*
        |--------------------------------------------------------------------------
        | Текстовый рендер
        |--------------------------------------------------------------------------
        |
        | Это markdown рендер, включающий в себя все текстовые теги и исключающий
        | всю визуализацию (все картинки и заголовки).
        | Например при отображении "Tip of the day".
        |
        */
        'Raw'      => \App\Services\ContentRenderer\RawTextRenderer::class,
    ],
];