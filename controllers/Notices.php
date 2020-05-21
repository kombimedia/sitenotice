<?php namespace Responsive\SiteNotice\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Notices extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'responsive.sitenotice.manage_notice' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Responsive.SiteNotice', 'site_notice', 'notice');
    }
}
