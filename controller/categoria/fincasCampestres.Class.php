<?php
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class fincasCampestres extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('portal/categoria', 'fincasCampestres', null, 'html');
  }
}
