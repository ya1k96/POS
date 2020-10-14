<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UnidadesModel;

class Unidades extends BaseController {
    public function __construct()
    {   
        $this->unidades = new UnidadesModel();
    }

    public function index($activo = 1) {
        $unidades = $this->unidades->where('activo', $activo)
        ->findAll();

        $data['titulo'] = "Unidades"; $data['datos'] = $unidades; 

        echo view('partials/head');
        echo view('unidades/unidades', $data);
        echo view('partials/footer');
    }

    public function nuevo() {
        
        $data['titulo'] = "Nuevo";  

        echo view('partials/head', $data);
        echo view('unidades/nuevo', $data);
        echo view('partials/footer');
    }

    public function insertar() {
        $this->unidades->save( $this->request->getPost() );
    }

    public function editar($id) {        
        $data['titulo'] = "Editar";  
        $data['unidad'] = $this->unidades->where('id', $id)
        ->first();

        echo view('partials/head', $data);
        echo view('unidades/editar', $data);
        echo view('partials/footer');
    }

    public function actualizar($id) {
        $unidad_editada = [
            'nombre' => $this->request->getPost('nombre'),
            'nombre_corto' => $this->request->getPost('nombre_corto')
        ];

        $this->unidades->update($id, $unidad_editada);
    }

    public function eliminar($id) {
        $this->unidades->update($id, ['activo' => 0]);
    }
}
?>