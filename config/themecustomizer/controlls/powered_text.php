<?php

namespace ZMP\Plugin\Config\ThemeCustomizer\Controlls;

class powered_text extends \ZMP\Plugin\Config\ThemeCustomizer\Controlls\_text {

  protected function default() {

    parent::default();

    $this->label = __( 'Powered Text:', 'zmplugin' );

  }

}
