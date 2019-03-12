<?php 

class ControllerAdmin extends BaseController 
{
    // Aplicar el array de "requiere_autentificacion" para que estas paginas sean privadas
    public function inicio()
    {
        
        $this->data = ModelAdmin::getTotalUsuarios();
        $this->data ["admins"] = ModelAdmin::getTotalTipoUsuarios("AD");
        $this->data ["usuarios"] = ModelAdmin::getTotalTipoUsuarios("CL");
        // Aqui ira la consulta para saber el numero de profesores (pendiente para la version FINAL)
        // $this->data ["admins"] = ModelAdmin::getTotalTipoUsuarios("PR");

        $this->data["datos_usuarios"] = ModelAdmin::getDatosClientes();
        // Habilitamos el navegador del admin para todas las paginas
        $this->data["nav_admin"] = true;
    }//inicio
    public function buscar ()
    {
        $this->data["clientes"] = ModelAdmin::buscador('CL',$_POST);
        $this->data["profesores"] = ModelAdmin::buscador('PR',$_POST);
        $this->data["admins"] = ModelAdmin::buscador('AD',$_POST);
        $this->data["nav_admin"] = true;
    }//buscarCliente
    // public function buscar ()
    // {
        
    //     $this->data["nav_admin"] = true;
    // }//buscarCliente
    public function empleados ()
    {
        $this->data["empleados"] = ModelAdmin::listarEmpleados();
        $this->data["nav_admin"] = true;

    }//empleados
    public function borrar($id)
    {
            ModelAdmin::borrarEmpleado($id);
            App::getRouter()->redirect('/admin/empleados');
    }
    public function anadirClases()
    {
        $this->data["profesores"] = ModelAdmin::getProfesores();
        $this->data["horario"] = ModelAdmin::getHorario();
        $this->data["nav_admin"] = true;

        if (count($_POST) > 0) {
            ModelAdmin::agregarClase($_POST);
            App::getRouter()->redirect('/admin/inicio');
        }        

    }

    public function email()
    {
        $this->data["datos_usuarios"] = ModelAdmin::getDatosClientes();
        $this->data["nav_admin"] = true;
    }//email

    public function pistas()
    {
        $this->data["pistas"] = ModelAdmin::getPistas();
        $this->data["nav_admin"] = true;
    }

    public function editar($id)
    {
        $this->data["pista"] = ModelAdmin::getPistaById($id);
        if (count($_POST) > 0) {
            ModelAdmin::editarPista($id,$_POST);
            App::getRouter()->redirect('/admin/pistas');        
        }
        $this->data["nav_admin"] = true;
        
    }
    

}//ControllerAdmin

?>
