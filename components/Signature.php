<?php

namespace Codeclutch\Base\Components;

use Jenssegers\Date\Date;
use Lang;
use Codeclutch\Base\Models\Settings;

class Signature extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.base::lang.plugin.components.signature.name'),
            'description' => Lang::get('codeclutch.base::lang.plugin.components.signature.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'signature_text' => [
                'title' => Lang::get('codeclutch.base::lang.plugin.components.signature.text.name'),
                'description' => Lang::get('codeclutch.base::lang.plugin.components.signature.text.description'),
                'default' => 'Project and realisation',
                'type' => 'string',
            ]
        ];
    }


    public function onRun()
    {
        $date = new Date();
        $this->page['logo'] = Settings::instance()->logo;
        $this->page['author'] = Settings::instance()->author;
        $this->page['author_link'] = Settings::instance()->author;
        $this->page['signature_text'] = $this->properties['signature_text'];
        $this->page['year'] = $date->format('Y');
    }
}
