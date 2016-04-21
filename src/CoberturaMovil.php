<?php
namespace Asimov\Solaria\Modules\CoberturaMovil;

use Solaria\Modules\SolariaModule;

class CoberturaMovil implements SolariaModule {

    protected $name = 'CoberturaMovil';

    protected $menu_name = 'Cobertura Móvil';

    public function getName() {
        return $this->name;
    }

    public function getMenuName() {
        return $this->menu_name;
    }

    public function getBackendMenuUrl() {
        return url('backend/modules/cobertura-movil');
    }

    public function getBackendStyles() {
        return [asset('modules/cobertura-movil/css/cobertura-movil-module.css')];
    }

    public function getFrontendStyles() {
        // TODO: Implement getFrontendStyles() method.
    }

    public function getBackendScripts() {
        return [asset('modules/cobertura-movil/js/cobertura-movil-module.js')];
    }

    public function getFrontendScripts() {
        // TODO: Implement getFrontendScripts() method.
    }

    public function getCustomFields() {
        // TODO: Implement getCustomFields() method.
    }

    public function render(){
        return 'cobertura-movil';
    }
}