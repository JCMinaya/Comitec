<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class MiembrosController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        /** Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
        **/

			$this->filter = \DataFilter::source(new \App\Miembros);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->text('role_id', 'Role');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Name');
			//$this->grid->add('code', 'Code');
			$this->addStylesToGrid();

        
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        // Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
	
			$this->edit = \DataEdit::source(new \App\Miembros());

			$this->edit->label('Agregar estudiante');

			$this->edit->add('name', 'Nombre', 'text')->rule('required');

			$this->edit->add('last_name', 'Apellido', 'text')->rule('required');

			$this->edit->add('email', 'Correo', 'text')->rule('required');

			$this->edit->add('password', 'password', 'text')->rule('required');

			$this->edit->add('genre', 'Sexo', 'text');

			$this->edit->add('role_id', 'Rol', 'text');

            return $this->returnEditView();
    }   
}
