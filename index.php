<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "hola mundo","<br>";
 
        define("constante","valor1");
        $a=78;
        echo "valor de la constate: ",constante,"<br>";
        echo "valor de ", '$a=',"$a","<br>";
        
        $color="rojo";
        $$color="blanco";
        echo "El color ",$color,$$color,"<br>";
        $color="azul";
        $$color="negro";
        echo "El color ",$color,$$color,"<br>";
        echo "fin";
        ?>
        
        <!--?php
            //Trabajamos con cookies
            $numero=0;
            if(isset ($_COOKIE['visitante']) )
            $numero=$_COOKIE['visitante'];
            $numero+=1;
            setcookie("visitante",$numero,time()+86400);
            if($numero==1){print "Hola nuevo visitante";}
            if($numero>1){print "Es la $numero ª vez que visitas esta página";}
        ?-->
        
        <!--?php
            //Trabajamos con sesiones
            session_start();
            $_SESSION["contador"]=0;
            if(!isset($_SESSION["visitcounter"])){
                echo "Es tu primera sesion";
            }
            else{
                
            }
            
            
        ?-->
    </body>
</html>
