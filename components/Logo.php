<?php
namespace Codeclutch\Base\Components;

use Lang;
use Codeclutch\Base\Models\Settings;

class Logo extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.base::lang.plugin.components.logo.name'),
            'description' => Lang::get('codeclutch.base::lang.plugin.components.logo.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'logo_height' => [
                'title'             => Lang::get('codeclutch.base::lang.plugin.components.logo.height.name'),
                'description'       => Lang::get('codeclutch.base::lang.plugin.components.logo.height.description'),
                'default'           => '150',
                'type'              => 'string',
            ],
            'logo_width' => [
                'title'             => Lang::get('codeclutch.base::lang.plugin.components.logo.height.name'),
                'description'       => Lang::get('codeclutch.base::lang.plugin.components.logo.height.description'),
                'default'           => 'auto',
                'type'              => 'string',
            ]
        ];
    }


    public function onRun()
    {
        $this->page['logo'] = Settings::instance()->logo;
    }
}
