<?php
import('appmodules.sales.models.contacto');
import('appmodules.sales.views.contacto');

#[AllowDynamicProperties]
class ContactosController extends Controller { 
    
    public function add() {
        $this->view->add();
    }
    public function edit($id=0) {
        $contactos = $this->model->getById($id);
        $this->view->edit($contactos);
    }

    public function list() {
        $sql = "SELECT * FROM contactos";
        $contactos = $this->model->query($sql);
        $this->view->list($contactos);

    }
    public function save() {
        $image = "";    
        $this->model->id = $_POST['id'];
        $this->model->nombre = $_POST['nombre'];
        $this->model->email = $_POST['email'];
        $this->model->telefono = $_POST['telefono'];
        $this->model->servicio = $_POST['servicio'];
        $this->model->mensaje = $_POST['mensaje'];
        if (isset($_FILES['image'])) {
            $image = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], 
                    STATIC_DIR .  "image/$image");
        }
        $this->model->image = $image;
        $this->model->save();
        $this->list();    
    }
    public function delete($id=0) {
        $this->model->delete($id);
        $this->list();
    }
}
?>
