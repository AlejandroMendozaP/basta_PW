<?php 
include "classBD.php";
class categoria extends BaseDatos
{

    public function ejecuta($accion)
    {
        switch($accion)
        {
            case "list":
                $cadeQuery="SELECT * FROM categoria order by categoria";
                $result = $this -> despTabla($cadeQuery);
                break;
            case "formEdit": break;
            case "fromNew": break;
            case "insert": break;
            case "delete": break;
            case "update": break;       
            default: $result='<h1>$accion no programada</h1>';
        }
        return $result;
    }

    function despTabla($query){
        $this->consulta($query);
        $html = '<div class=""><div class="row"><div class="col-12">';
        $numRegistro = 0;
        $html.='<table class ="table table-hover table-striped tbale.info">';
        foreach($this->bloque as $renglon){
            $html.='<tr>';
            $html.='<td><i class="bi bi-pen-fill"></i></td>';
            if($numRegistro==0){
                $cabecera="";
                $temp="";
                $numRegistro++;
                foreach($renglon as $campo => $dato)
                {
                    $cabecera.='<th>'.$campo.'</th>';
                    $temp.='<td>'.$dato.'</td>';
                }
                $html.=$cabecera.'</tr><tr>'.$temp;
            }
            else
                foreach($renglon as $campo => $dato)
                    $html.='<td>'.$dato.'</td>';
            $html.='</tr>';
        }
        $html.='</table></div></div></div>';
        return $html;

    }

}
$oCategoria = new categoria();

?>