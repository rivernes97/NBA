<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <?php

////capturo los valores de los parámetros que me han sido pasados
////desde app.php
    
include ('funciones.php');

$mysqli = conectaBBDD();
$resultadoImagen = $mysqli -> query("SELECT * FROM jugadores order by rand() limit 1  ");
$resultadoImagen2 = $mysqli -> query("SELECT * FROM jugadores order by rand() limit 1  ");
$resultadoImagen3 = $mysqli -> query("SELECT * FROM jugadores order by rand() limit 1  ");
$resultadoImagen4 = $mysqli -> query("SELECT * FROM jugadores order by rand() limit 1  ");
$resultadoImagen5 = $mysqli -> query("SELECT * FROM jugadores order by rand() limit 1  ");


$numJugadores = $resultadoImagen -> num_rows;
 
//declaro un array en php para guardar el resultado de la query
$listaJugadores = array();

//cargo todas las filas del resultado de la query en el array
   for ($i = 0; $i < $numJugadores; $i++){
        $r = $resultadoImagen -> fetch_array(); //leo una fila del resultado de la query
        $r2 = $resultadoImagen2 -> fetch_array();
        $r3 = $resultadoImagen3 -> fetch_array();
        $r4 = $resultadoImagen4 -> fetch_array();
        $r5 = $resultadoImagen5 -> fetch_array();
        
        $listaJugadores[$i][3] = $r['imagen'];
        $listaJugadores[$i][3] = $r2['imagen'];
        $listaJugadores[$i][3] = $r3['imagen'];
        $listaJugadores[$i][3] = $r4['imagen'];
        $listaJugadores[$i][3] = $r5['imagen'];
        
        $listaJugadores[$i][7] = $r['media'];
        $listaJugadores[$i][7] = $r2['media'];
        $listaJugadores[$i][7] = $r3['media'];
        $listaJugadores[$i][7] = $r4['media'];
        $listaJugadores[$i][7] = $r5['media'];
        
        
        $listaJugadores[$i][4] = $r['nacionalidad'];
        $listaJugadores[$i][4] = $r2['nacionalidad'];
        $listaJugadores[$i][4] = $r3['nacionalidad'];
        $listaJugadores[$i][4] = $r4['nacionalidad'];
        $listaJugadores[$i][4] = $r5['nacionalidad'];
        
        $listaJugadores[$i][5] = $r['conferencia'];
        $listaJugadores[$i][5] = $r2['conferencia'];
        $listaJugadores[$i][5] = $r3['conferencia'];
        $listaJugadores[$i][5] = $r4['conferencia'];
        $listaJugadores[$i][5] = $r5['conferencia'];
        
        
         $listaJugadores[$i][6] = $r['posicion'];
        $listaJugadores[$i][6] = $r2['posicion'];
        $listaJugadores[$i][6] = $r3['posicion'];
        $listaJugadores[$i][6] = $r4['posicion'];
        $listaJugadores[$i][6] = $r5['posicion'];
        
        
        
        $listaJugadores[$i][0] = $r['nombre'];
        $listaJugadores[$i][1] = $r['id_equipo']; 
        $listaJugadores[$i][2] = $r['id_jugador']; 
        
        
     
   }
 
    $numeros = [$r['media'],$r2['media'],$r3['media'],$r4['media'],$r5['media']];
   
    $suma = 0;
    
    for ($x=0;$x<count($numeros);$x++){
        $suma += $numeros[$x];
    }
    
    $suma = array_sum($numeros);
    
    $total_numeros = count($numeros);
 
    $media = $suma/$total_numeros;
        
    $media = array_sum($numeros)/count($numeros);

               
              
   
   
   
   
   
  
?>
 
           
      
              
           
   
   
    
 


<html>
    <head>
        
        <meta charset="utf-8" />
        
        <title>NBA DRAFT</title>

    </head>

    <body class="hola">
   
    <?php echo $r['posicion']; ?>
          

        <hr class="hr1" />
        <hr class="hr2" />
        <hr class="hr3" />
        <div class="valor"><strong>Valoracion</strong><div id="Media" class="numval"><strong><?php echo $media; ?>*</strong></div></div>
        <div id="EnBase" class="EncabezadoBase" style="position: absolute; color: #000;">Base</div>
        <div id="EnSuplente" class="EncabezadoAlero" style="position: absolute; color: #000;">Suplente</div>
        <div id="EnEscolta" class="EncabezadoEscolta" style="position: absolute; color: #000;">Escolta</div>
        <div id="EnPivot" class="EncabezadoPivot" style="position: absolute; color: #000;">Pivot</div>
        <div id="EnAlero" class="EncabezadoAlaPivot" style="position: absolute; color: #000;">Alero</div>
        <div id="EnAla-Pivot" class="EncabezadoSuplente" style="position: absolute; color: #000;">Ala-Pivot</div>
        <div id="Ala-Pivot"  class="tela" style="position:absolute; color: #000;  " ondragover="evdragover(event)" ondrop="evdrop(event)"></div>
        <div id="Base"  class="tela1" style="position:absolute; color: #000; float:left "ondragover="evdragover(event)" ondrop="evdrop(event)"></div>
        <div id="Pivot" class="tela2" style="position:absolute; color: #000;" ondragover="evdragover(event)" ondrop="evdrop(event)"></div>
        <div id="Alero" class="tela3" style="position:absolute; color: #000;" ondragover="evdragover(event)" ondrop="evdrop(event)"></div>
        <div id="Escolta" class="tela4" style="position:absolute; color: #000;" ondragover="evdragover(event)" ondrop="evdrop(event)"></div>
        <div id="Suplente" class="tela5" style="position:absolute; color: #000;" ondragover="evdragover(event)" ondrop="evdrop(event)"></div>
       <!--<button onclick=""> comprobar</button>-->
       

        <div id="Jugador1" class="arrastrar" draggable="true" ondragstart="evdragstart(event)"></div>
        <div id="Jugador2"  class="arrastrar1"draggable="true" ondragstart="evdragstart(event)"></div>
        <div id="Jugador3" class="arrastrar2" draggable="true" ondragstart="evdragstart(event)"></div>
        <div id="Jugador4" class="arrastrar3" draggable="true" ondragstart="evdragstart(event)"></div>
        <div id="Jugador5" class="arrastrar4" draggable="true" ondragstart="evdragstart(event)"></div>
 

        
        <?php
        echo '';
        ?>
    </body>
</html>

<style>

    .arrastrar {
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;

        background-color: #990099;
        cursor:pointer;
        background-image: url("images/jugadores/<?php echo $r['imagen']; ?>");

    }
    .arrastrar1 {
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;
        background-color: #990099;

        cursor:pointer;
        background-image: url("images/jugadores/<?php echo $r2['imagen']; ?>");

    }
    .arrastrar2{
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;

        background-color: #990099;
        cursor:pointer;
        background-image: url("images/jugadores/<?php echo $r3['imagen']; ?>");

    }
    .arrastrar3 {
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;

        background-color: #990099;
        cursor:pointer;
        background-image: url("images/jugadores/<?php echo $r4['imagen']; ?>");

    }
    .arrastrar4 {
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;
        background-color: #990099;

        cursor:pointer;
        background-image: url("images/jugadores/<?php echo $r5['imagen']; ?>");

    }

    .valor{
        background-color: white;
        text-decoration: #ffffff;
        text-align: center;
        width:150px;
        height:60px;
        border: 5px solid #000;
        left: 230px;
        top: 0px;
        position: absolute;
    }
    .numval{
        font-size: 40px;
    }

    .tela{
        background-color: white;
        text-decoration: #ffffff;
        text-align: center;
        width:150px;
        height:220px;
        
        left: 430px;
        top: 87px;
    }
    .EncabezadoSuplente{
        background-color: white;
        text-decoration: #ffffff;
        text-align: center;
        width:150px;
        height:22px;
        
        left: 430px;
        top: 65px;
    }
    .tela1{
        background-color: white;
        text-align: center;
        width:150px;
        height:220px;
       
        left: 641px;
        top: 458px;
    }
    .EncabezadoBase{
        background-color: white;
        text-align: center;
        width:150px;
        height:22px;
       
        left: 641px;
        top: 436px;
    }
    .tela2{
        background-color: white;
        text-align: center;
        width:150px;
        height:220px;
       
        right: 430px;
        top: 87px;
    }
    .EncabezadoPivot{
        background-color: white;
        text-align: center;
        width:150px;
        height:22px;
       
        right: 430px;
        top: 65px;
    }
    .tela3{
        background-color: white;
        text-align: center;
        width:150px;
        height:220px;
      
        right: 240px;
        top: 351px;
    }
    .EncabezadoAlaPivot{
        background-color: white;
        text-align: center;
        width:150px;
        height:22px;
      
        right: 240px;
        top: 329px;
    }
    .tela4{
        background-color: white;
        text-align: center;
        width:150px;
        height:220px;
        
        left: 240px;
        top: 351px;
    }
    .EncabezadoEscolta{
        background-color: white;
        text-align: center;
        width:150px;
        height:22px;
        
        left: 240px;
        top: 329px;
    }
    .tela5{
        background-color: white;
        text-align: center;
        width:150px;
        height:220px;
       
        right: 0px;
        top: 22px;
    }
    .EncabezadoAlero{
        background-color: white;
        text-align: center;
        width:150px;
        height:22px;
       
        right: 0px;
        top: 0px;
    }
  
    .hola{
        background-color: #990099;
        background-image: url("images/lakersstadium(1).jpg");
        background-repeat: no-repeat;
        background-position: top center;
    }
     .cambio{
        background-color: white;
        text-align: center;
        width:150px;
        height:240px;
        border: 20px solid #3FFF33;
        right: 430px;
        top: 87px;
        
    }
    
    .hr1 {
        height: 4px;
        background-color: red;
        position:absolute;
        left: 399px;
        width: 240px;
        top: 464px;
        height: 5px;
    }
    .hr2 {
        height: 4px;
        background-color: red;
        position:absolute;
        left: 800px;
        width: 222px;
        top: 464px;
        height: 5px;
    }
    .borde-rojo {
    border-color: red;
    border-style: double;
}

.borde-azul {
    border-color: blue;
    border-style: double;
}
    .hr3 {
        height: 4px;
        background-color: red;
        position:absolute;
        left: 589px;
        width: 242px;
        top: 161px;
        height: 5px;
    }


</style>
<script>
   
    function evdragstart(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }
    function evdragover(ev) {
        ev.preventDefault();
        
    }
    function evdrop(ev, el) {
     
        ev.stopPropagation();
        ev.preventDefault();
        data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
        
 

   
    
    comprobarQuimicaArrastrable1();
          
         
    
    
    


        

     
     }
     
     
     function comprobarQuimicaArrastrable1(){
       
            var elemento = document.getElementById('Jugador1');    //Empiezo a guardar elementos para despues sacar sus posiciones
            var elemento1 = document.getElementById('Base');
            var elemento2 = document.getElementById('Jugador2');
            var elemento3 = document.getElementById('Ala-Pivot');
            var elemento4 = document.getElementById('Jugador3');
            var elemento5 = document.getElementById('Alero');
            var elemento6 = document.getElementById('Jugador4');
            var elemento7= document.getElementById('Pivot');
            var elemento8 = document.getElementById('Jugador5');
            var elemento9 = document.getElementById('Escolta');
            
                      
                    
           
    
            
            
            
            
            var posJug1 = elemento.getBoundingClientRect();  //Guardo en una variable las coordenadas de la primera carta a arrastrar 
            var posBase = elemento1.getBoundingClientRect(); //Guardo en una variable las coordenadas de la carta de base
            var posJug2 = elemento2.getBoundingClientRect();
            var posAlaPivot = elemento3.getBoundingClientRect();
            var posJug3 = elemento4.getBoundingClientRect();
            var posAlero = elemento5.getBoundingClientRect();
            var posJug4 = elemento6.getBoundingClientRect();
            var posPivot = elemento7.getBoundingClientRect();
            var posJug5 = elemento8.getBoundingClientRect();
            var posEscolta = elemento9.getBoundingClientRect();
            
            
                        
            
            
    
            
               var posArrastrar1 = posJug1.top + posJug1.right+ posJug1.bottom + posJug1.left;     
               var posicionBase = posBase.top + posBase.right+ posBase.bottom + posBase.left;
               var posArrastrar2 = posJug2.top + posJug2.right+ posJug2.bottom + posJug2.left;     
               var posicionAlaPivot = posAlaPivot.top + posAlaPivot.right+ posAlaPivot.bottom + posAlaPivot.left;
               var posArrastrar3 = posJug3.top + posJug3.right+ posJug3.bottom + posJug3.left;     
               var posicionAlero= posAlero.top + posAlero.right+ posAlero.bottom + posAlero.left;
               var posArrastrar4 = posJug4.top + posJug4.right+ posJug4.bottom + posJug4.left;     
               var posicionPivot = posPivot.top + posPivot.right+ posPivot.bottom + posPivot.left;
               var posArrastrar5 = posJug5.top + posJug5.right+ posJug5.bottom + posJug5.left;     
               var posicionEscolta = posEscolta.top + posEscolta.right+ posEscolta.bottom + posEscolta.left;
    
    
    
      
    
              
            
    
    
         if((posicionBase == posArrastrar1) && ("<?php echo $r['posicion'];?>"  == "Base")){ //Comprueba si el primer jugador Arrastrable es Base y si es base  y esta en la posicion 
                                                                                            
                                                                                            //Se pone en verde el encabezado
           
             document.getElementById('EnBase').style.color = '#3FFF33' ;
           
         }
         else{
             document.getElementById('EnBase').style.color = '#000' ;
         }
           if((posicionAlaPivot == posArrastrar1) && ("<?php echo $r['posicion'];?>"  == "Ala-Pivot")){ //Comprueba si el primer jugador Arrastrable es Ala y si es ala y esta en la posicion 
                                                                                            
                                                                                                     //Se pone en verde el encabezado
           
             document.getElementById('EnAla-Pivot').style.color = '#3FFF33' ;
           
         }
         else{
             document.getElementById('EnAla-Pivot').style.color = '#000' ;
         }
         
           if((posicionPivot == posArrastrar1) && ("<?php echo $r['posicion'];?>"  == "Pivot")){ //Comprueba si el primer jugador Arrastrable es Pivot y si es pivot y esta en la posicion 
                                                                                            
                                                                                                     //Se pone en verde el encabezado
           
             document.getElementById('EnPivot').style.color = '#3FFF33' ;
           
         }
         else{
             document.getElementById('EnPivot').style.color = '#000' ;
         }
         if((posicionAlero == posArrastrar1) && ("<?php echo $r['posicion'];?>"  == "Alero")){ //Comprueba si el primer jugador Arrastrable es Alero y si es alero y esta en la posicion 
                                                                                            
                                                                                                     //Se pone en verde el encabezado
           
             document.getElementById('EnAlero').style.color = '#3FFF33' ;
           
         }
         else{
             document.getElementById('EnAlero').style.color = '#000' ;
         }
          if((posicionEscolta == posArrastrar1) && ("<?php echo $r['posicion'];?>"  == "Escolta")){ //Comprueba si el primer jugador Arrastrable es Escolta y si es Escolta y esta en la posicion 
                                                                                            
                                                                                                     //Se pone en verde el encabezado
           
             document.getElementById('EnEscolta').style.color = '#3FFF33' ;
           
         }
         else{
             document.getElementById('EnEscolta').style.color = '#000' ;
         }
            
         

         
         
     
              
           
      
    }
function comprobarQuimicaArrastrable2(){
       
            var elemento = document.getElementById('Jugador1');    //Empiezo a guardar elementos para despues sacar sus posiciones
            var elemento1 = document.getElementById('Base');
            var elemento2 = document.getElementById('Jugador2');
            var elemento3 = document.getElementById('Ala-Pivot');
            var elemento4 = document.getElementById('Jugador3');
            var elemento5 = document.getElementById('Alero');
            var elemento6 = document.getElementById('Jugador4');
            var elemento7= document.getElementById('Pivot');
            var elemento8 = document.getElementById('Jugador5');
            var elemento9 = document.getElementById('Escolta');
            
            
            
            
            
           
    
            
            
            
            
            var posJug1 = elemento.getBoundingClientRect();  //Guardo en una variable las coordenadas de la primera carta a arrastrar 
            var posBase = elemento1.getBoundingClientRect(); //Guardo en una variable las coordenadas de la carta de base
            var posJug2 = elemento2.getBoundingClientRect();
            var posAlaPivot = elemento3.getBoundingClientRect();
            var posJug3 = elemento4.getBoundingClientRect();
            var posAlero = elemento5.getBoundingClientRect();
            var posJug4 = elemento6.getBoundingClientRect();
            var posPivot = elemento7.getBoundingClientRect();
            var posJug5 = elemento8.getBoundingClientRect();
            var posEscolta = elemento9.getBoundingClientRect();
            
            
            
            
            
            
    
            
               var posArrastrar1 = posJug1.top + posJug1.right+ posJug1.bottom + posJug1.left;     
               var posicionBase = posBase.top + posBase.right+ posBase.bottom + posBase.left;
               var posArrastrar2 = posJug2.top + posJug2.right+ posJug2.bottom + posJug2.left;     
               var posicionAlaPivot = posAlaPivot.top + posAlaPivot.right+ posAlaPivot.bottom + posAlaPivot.left;
               var posArrastrar3 = posJug3.top + posJug3.right+ posJug3.bottom + posJug3.left;     
               var posicionAlero= posAlero.top + posAlero.right+ posAlero.bottom + posAlero.left;
               var posArrastrar4 = posJug4.top + posJug4.right+ posJug4.bottom + posJug4.left;     
               var posicionPivot = posPivot.top + posPivot.right+ posPivot.bottom + posPivot.left;
               var posArrastrar5 = posJug5.top + posJug5.right+ posJug5.bottom + posJug5.left;     
               var posicionEscolta = posEscolta.top + posEscolta.right+ posEscolta.bottom + posEscolta.left;
    
    
    
      
    
              
            
    
    
         if((posicionBase == posArrastrar2) && ("<?php echo $r2['posicion'];?>"  == "Base")){ //Comprueba si el primer jugador Arrastrable es Base y si es base  y esta en la posicion 
                                                                                            
                                                                                            //Se pone en verde el encabezado
           
             document.getElementById('EnBase').style.color = '#3FFF33' ;
           
         }
         else{
             document.getElementById('EnBase').style.color = '#000' ;
         }
           if((posicionAlaPivot == posArrastrar2) && ("<?php echo $r2['posicion'];?>"  == "Ala-Pivot")){ //Comprueba si el primer jugador Arrastrable es Ala y si es ala y esta en la posicion 
                                                                                            
                                                                                                     //Se pone en verde el encabezado
           
             document.getElementById('EnAla-Pivot').style.color = '#3FFF33' ;
           
         }
         else{
             document.getElementById('EnAla-Pivot').style.color = '#000' ;
         }
         
           if((posicionPivot == posArrastrar2) && ("<?php echo $r2['posicion'];?>"  == "Pivot")){ //Comprueba si el primer jugador Arrastrable es Pivot y si es pivot y esta en la posicion 
                                                                                            
                                                                                                     //Se pone en verde el encabezado
           
             document.getElementById('EnPivot').style.color = '#3FFF33' ;
           
         }
         else{
             document.getElementById('EnPivot').style.color = '#000' ;
         }
         if((posicionAlero == posArrastrar2) && ("<?php echo $r2['posicion'];?>"  == "Alero")){ //Comprueba si el primer jugador Arrastrable es Alero y si es alero y esta en la posicion 
                                                                                            
                                                                                                     //Se pone en verde el encabezado
           
             document.getElementById('EnAlero').style.color = '#3FFF33' ;
           
         }
         else{
             document.getElementById('EnAlero').style.color = '#000' ;
         }
          if((posicionEscolta == posArrastrar2) && ("<?php echo $r2['posicion'];?>"  == "Escolta")){ //Comprueba si el primer jugador Arrastrable es Escolta y si es Escolta y esta en la posicion 
                                                                                            
                                                                                                     //Se pone en verde el encabezado
           
             document.getElementById('EnEscolta').style.color = '#3FFF33' ;
           
         }
         else{
             document.getElementById('EnEscolta').style.color = '#000' ;
         }
            
         

         
         
     
              
           
      
    }


// Inicializamos el movimiento del div con id "arrastrar"
    var recu1 = new movimiento(document.getElementById("arrastrar"));
    var recu2 = new movimiento(document.getElementById("arrastrar1"));
    var recu3 = new movimiento(document.getElementById("arrastrar2"));
    var recu4 = new movimiento(document.getElementById("arrastrar3"));
    var recu5 = new movimiento(document.getElementById("arrastrar4"));

</script>