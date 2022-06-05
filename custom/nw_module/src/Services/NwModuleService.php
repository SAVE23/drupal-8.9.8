<?php

namespace Drupal\nw_module\Services;
use Drupal;

class NwModuleService {
    protected $module_name;

    /**
    * {@inheritdoc}
    */
    protected function getModuleName() {
        return 'nw_module';
    }

    public function info_data(){
        $this->module_name = 'Test';
        return $this->module_name;
    }
}