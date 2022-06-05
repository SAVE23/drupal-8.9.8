<?php

namespace Drupal\specbee\Services;
use Drupal\Core\Datetime\DrupalDateTime;
use Drupal;

class SpecbeeService {
    protected $module_name;
    protected $config;
    /**
    * {@inheritdoc}
    */

    public function __construct()
    {
        $this->config = \Drupal::config('specbee.adminsettings');
    }

    protected function getModuleName() {
        return 'specbee';
    }

    public function info_data(){
        $this->module_name = 'Test';
        return $this->module_name;
    }

    public function getTimezone(){
        $date = new DrupalDateTime();
        $date->setTimezone(new \DateTimeZone($this->config->get('timezone')));
        $timezone_date = $date->format('jS M Y - g:i a');
        return $timezone_date;
    }
}