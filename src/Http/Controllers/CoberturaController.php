<?php

namespace Asimov\Solaria\Modules\CoberturaMovil\Http\Controllers;

use Illuminate\Http\Request;
use Solaria\Http\Controllers\Backend\BackendController;
use Asimov\Solaria\Modules\CoberturaMovil\Models\Config;

class CoberturaController extends BackendController {

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(){
        $this->authorize('module_cobertura_movil_manage_config');

        view()->share([
            'config' => Config::firstOrNew(['site_id' => $this->site->id])
        ]);

        $data['content'] = view('modulecoberturamovil::backend.index');
        return view($this->layout, $data);
    }

}