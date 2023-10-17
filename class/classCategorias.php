<?php 
include "classBD.php";
class Categoria extends baseDatos{
    public function ejecuta($accion)
    {
        switch($accion)
        {
            case "list":
                $cadeQuery="SELECT * FROM categoria order by categoria";
                $result = $this -> despTabla($cadeQuery);
                break;
            case "formEdit": 
                $registro=$this->getTupla("SELECT * from categoria where id_categoria=".$_POST['id_categoria']);
                
            case "formNew":
                $result='
                <form method="post" class="formulario">
                <h3>'.(isset($registro)?"Editar":"Nueva").' Categoria</h3>
                <div class="container">
                <div class="row">
                    <label class="col-md-4" form="Nombre"> Nombre </label>
                    <div class="col-md-8">
                    <input id="categoria" name="categoria" 
                    type="text" requiered class="form-control" value="'.(isset($registro)?$registro->categoria:"").'">
                </div>
                <button class="boton">'.(isset($registro)?"Actualizar":"Registrar").'</button>
                </div>
                <input type="hidden"value="'.(isset($registro)?"update":"insert").'" name="accion">
                '.(isset($registro)?'<input type="hidden" value="'.$registro->id_categoria.'" name="id_categoria">':"").'
                </form>'; 
                break;
            case "insert": 
                $this->consulta("INSERT INTO categoria set categoria='".$_POST['categoria']."'");
                $result=$this->ejecuta("list");break;
            case "delete": 
                $this->consulta("DELETE from categoria where id_categoria=".$_POST['id_categoria']);
                $this->consulta($cad);
                $result=$this->ejecuta("list");
                break;
            case "update": 
                $cad="UPDATE categoria set categoria='".$_POST['categoria']."' where id_categoria=".$_POST['id_categoria'];
                $this->consulta($cad);
                $result=$this->ejecuta("list");
                break;       
            default: $result='<h1>$accion no programada</h1>';
        }
        return $result;
    }

    function despTabla($query){
        $this->consulta($query);
        $html = '<span class="badge bg-secondary"> Categorias registradas </span>
        <hr>
        <div class="centrado2">';
        $numRegistro = 0;
        $html.='<table class ="table table-hover table-striped tbale.info">';
        foreach($this->bloque as $renglon){
            $html.='<tr>';
            $botonRemove='<form method="post"><button class="btn btn-sm-btn btn-danger bi bi-trash-fill"></button>
                <input type="hidden" value="'.$renglon['id_categoria'].'" name="id_categoria"><input type="hidden" value="delete" name="accion"></form>';
            $botonEditar='<form method="post"><button class="btn btn-sm-btn btn-success bi bi-pencil-fill"></button>
                <input type="hidden" value="' .$renglon['id_categoria'].'"name="id_categoria"/>
                <input type="hidden" value="formEdit" name="accion"/></form>';
            if($numRegistro==0){
                $cabecera="";
                $temp="";
                $numRegistro++;
                $temp='<td>'.$botonRemove.'&nbsp;&nbsp;'.$botonEditar.'</td>';
                $cabecera='<td class="col-md-1">
                <form method="post"><button class="btn btn-sm-btn btn-primary bi bi-square-fill"></button><input type="hidden" value="formNew" name="accion"></form>
                </td>'.$cabecera;
                foreach($renglon as $campo => $dato)
                {
                    $cabecera.='<th>'.$campo.'</th>';
                    $temp.='<td>'.$dato.'</td>';
                }
                $html.=$cabecera.'</tr><tr>'.$temp;
            }
            else{
                $html.='<td>'.$botonRemove.'&nbsp;&nbsp;'.$botonEditar.'</td>';                
                foreach($renglon as $campo => $dato){
                    $html.='<td>'.$dato.'</td>';
                }
            }
            $html.='</tr>';
        }
        $html.='</table></div>';
        return $html;

    }

}
$oCategoria = new Categoria();

?>