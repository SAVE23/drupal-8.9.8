<?php 

namespace Drupal\nw_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class NwModuleController extends ControllerBase {

    protected $module_name;

    /**
    * {@inheritdoc}
    */
    protected function getModuleName() {
        return 'nw_module';
    }

    public function module_info(){
        $this->module_name = 'My Module';
        $return = array('Name' => $this->module_name, 'Description' => 'Test Module');
        return $return;
    }
}

