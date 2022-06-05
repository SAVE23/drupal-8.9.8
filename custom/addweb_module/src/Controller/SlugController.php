<?php

namespace Drupal\addweb_module\Controller;

use Drupal;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\HttpFoundation\Request;
use function Drupal\Core\Entity\t;

class SlugController extends ControllerBase {

    /**
   * {@inheritdoc}
   */
  public function slugshow($slug) {
    // $slug will equal the dynamic part of the URL
    // e.g. at /node/yay-routing, then $slug='yay-routing'
    $config = \Drupal::config('addweb_module.setting');
    // print_r($slug);die;
    // print_r($config->get('text_message'));die;
    if($config->get('text_message') == $slug){
        $build = [
        '#markup' => "https://www.drupal.org/node/".$config->get('text_message'),
        ];
        return $build;
    }
    
  }


}
