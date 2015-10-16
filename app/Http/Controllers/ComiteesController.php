<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class ComiteesController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        /** Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields

        */
			$this->filter = \DataFilter::source(new \App\Comitees);
		    $this->filter->add('name', 'Nombre', 'text');
			$this->filter->submit('Buscar');
			$this->filter->reset('Borrar');
		    $this->filter->build();

		    $this->grid = \DataGrid::source($this->filter);
		    $this->grid->add('name', 'Name');
		    //$this->grid->add('code', 'Code');
		    $this->addStylesToGrid();

        
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
	  */
			$this->edit = \DataEdit::source(new \App\Comitees());

           
		    $this->edit->label('Agregar Comite');
       
			$this->edit->add('name', 'Nombre del Comite', 'text')->rule('required');

			$this->edit->add('abreviacion', 'Abreviacion', 'text')->rule('required');

			$this->edit->add('email', 'Correo electronico', 'text');

			$this->edit->add('descripcion', 'Descripcion', 'textarea');
     
            return $this->returnEditView();
    }    
}
