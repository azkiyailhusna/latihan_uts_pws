<?php

namespace App\Foundation;

use Illuminate\Foundation\Application as BaseApplication;

class Application extends BaseApplication
{
    /**
     * Folder resources (views, css, js) ada di ../frontend/resources.
     *
     * @param  string  $path
     * @return string
     */
    public function resourcePath($path = '')
    {
        return $this->joinPaths(
            dirname($this->basePath()).DIRECTORY_SEPARATOR.'frontend'.DIRECTORY_SEPARATOR.'resources',
            $path
        );
    }
}
