<?php

  namespace Responsive\SiteNotice\Components;

  use Cms\Classes\ComponentBase;
  use Responsive\SiteNotice\Models\SiteNotice;

  class Notice extends ComponentBase
  {

    public function componentDetails() {
      return [
        'name' => 'Display Notice',
        'description' => 'Pop up notice modal'
      ];
    }

    public function defineProperties() {
        return [
            'notice' => [
                'title' => 'Display notice',
                'description' => 'Select which notice to display',
                'type' => 'dropdown',
                'placeholder' => 'Select one',
                'required' => true,
                'validationMessage' => 'Please select a notice to display'
            ]
        ];
    }

    public function getNoticeOptions() {
      return SiteNotice::all()->lists('title', 'id');
    }

    public function onRun() {
      $this->addCss('/plugins/responsive/sitenotice/assets/css/styles.css');
      $this->notices = $this->loadNotices();
    }

    protected function loadNotices() {
      $notice = SiteNotice::where('status','=','Enabled')->get();

      if ( $this->property('notice') ) {
        $notice = $notice->where('id', '=', $this->property('notice') );
      }

      return $notice;
    }

    public $notices;

  }
