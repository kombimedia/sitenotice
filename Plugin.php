<?php namespace Responsive\SiteNotice;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
        'Responsive\SiteNotice\Components\Notice' => 'notice'
      ];
    }

    public function registerSettings()
    {
    }
}
