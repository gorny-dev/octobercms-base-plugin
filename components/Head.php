<?php
namespace Codeclutch\Base\Components;

use Lang;
use Codeclutch\Base\Models\Settings;

class Head extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.base::lang.plugin.components.head.name'),
            'description' => Lang::get('codeclutch.base::lang.plugin.components.head.description')
        ];
    }

    public function meta()
    {
        return [
            'title' => Settings::instance()->title,
            'description' => Settings::instance()->description,
            'author' => Settings::instance()->author,
            'keywords' => Settings::instance()->keywords,
            'meta_title' => Settings::instance()->meta_title,
            'color' => Settings::instance()->color,
            'icon' => Settings::instance()->icon,
            'logo' => Settings::instance()->logo
        ];
    }

}
