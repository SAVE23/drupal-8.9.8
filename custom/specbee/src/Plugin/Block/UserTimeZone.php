<?php

namespace Drupal\specbee\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'Timezone' Block.
 *
 * @Block(
 *   id = "time_zone",
 *   admin_label = @Translation("Timezone block"),
 *   category = @Translation("Timezone World"),
 * )
 */
class UserTimeZone extends BlockBase {

   /**
   * {@inheritdoc}
   */
    public function build() {
        $service = \Drupal::service('specbee.timezone');
        $timezone_service = $service->getTimezone(); 
        return [
            //'#markup' => $this->t('Hello, User!'),
            '#theme' => 'time_zone',
            '#data' => $timezone_service,
        ];
    }

    /**
     * @return int
     */
    public function getCacheMaxAge() {
        return 0;
    }
    

}

?>