<?php declare(strict_types=1);
/**
 * This file is part of laravel.ru package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace App\Services\ContentRenderer;

/**
 * Interface ContentRenderInterface
 * @package App\Services
 */
interface ContentRenderInterface
{
    /**
     * @param string $original
     * @return string
     */
    public function renderBody(string $original): string;
}