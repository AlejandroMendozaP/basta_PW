<?php
    class tools{
        function numeroRandom(){
            return rand()%9+1;
        }
        function operador(){
            switch(rand()%3){
                case 0 : return "*";
                case 1: return "+";
                case 2: return "-";
            }
        }

        function geneCaptcha(){
            $dato1= $this-> numeroRandom();
            $dato2= $this-> numeroRandom();
            $dato3= $this->numeroRandom();
            $op1 = $this->operador();
            $op2 = $this->operador();
            $expresion= $dato1.$op1.$dato2.$op2.$dato3;
            $_SESSION['captcha']=$dato1;
            switch($op1){
                case '*' : $_SESSION['captcha']*=$dato2; break;
                case '+' : $_SESSION['captcha']+=$dato2; break;
                case '-' : $_SESSION['captcha']-=$dato2; break;
            }
            switch($op2){
                case '*' : $_SESSION['captcha']*=$dato3; break;
                case '+' : $_SESSION['captcha']+=$dato3; break;
                case '-' : $_SESSION['captcha']-=$dato3; break;
            }
            return $expresion;
        }
    }

    $oTools = new tools();
?>