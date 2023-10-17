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
            case "formEdit": break;
            case "formNew":
                $result='
                <form method="post">
                <h3> Nueva categoria </h3>
                <div class="container">
                <div class="row">
                    <label class="col-md-4" form="Nombre"> Nombre </label>
                    <div class="col-md-8">
                    <input id="Nombre" name="Categoria" type="text" requiered class="form-control">
                </div>
                <button class="btn btn-sucess btn-sm"> Registrar </button>
                </div>
                <input type="hidden"value="insert" name="accion">
                </form>'; 
                break;
            case "insert": break;
            $this->consulta();
            $result=$this->ejecuta("list");
            case "delete": break;
            case "update": break;       
            default: $result='<h1>$accion no programada</h1>';
        }
        return $result;
    }

    function despTabla($query){
        $this->consulta($query);
        $html = '<span class="badge bg-secondary"> Categorias registradas </span>
        <hr>
        <div class=""><div class="row"><div class="col-12">';
        $numRegistro = 0;
        $html.='<table class ="table table-hover table-striped tbale.info">';
        foreach($this->bloque as $renglon){
            $html.='<tr>';
            if($numRegistro==0){
                $cabecera="";
                $temp="";
                $numRegistro++;
                $temp='<td>
                <i class="btn btn-sm-btn btn-danger bi bi-trash-fill"></i>
                &nbsp;&nbsp;
                <i class="btn btn-sm-btn btn-success bi bi-pencil-fill"></i>
                </td>';
                $cabecera='<td class="col-md-1">
                <a href="Categorias.php?accion=formNew"><i class="btn btn-sm-btn btn-primary bi bi-square-fill"></i>
                </td>'.$cabecera;
                foreach($renglon as $campo => $dato)
                {
                    $cabecera.='<th>'.$campo.'</th>';
                    $temp.='<td>'.$dato.'</td>';
                }
                $html.=$cabecera.'</tr><tr>'.$temp;
            }
            else{
                $html.='<td>
                <i class="btn btn-sm-btn btn-danger bi bi-trash-fill"></i>
                &nbsp;&nbsp;
                <i class="btn btn-sm-btn btn-success bi bi-pencil-fill"></i>
                </td>';                
                foreach($renglon as $campo => $dato){
                    $html.='<td>'.$dato.'</td>';
                }
            }
            $html.='</tr>';
        }
        $html.='</table></div></div></div>';
        return $html;

    }

}
$oCategoria = new Categoria();

?>