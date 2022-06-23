<?php include ('conexion.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilo.css">
 
</head>
<body>
    <div class="inicioformulario">
    <form action="conexion.php" method="post">
        
      <div class="inicioform">
       <table>
       <tr><td> Tipo de vehiculo : </td><td><input type="text" name="tipvehiculo" required placeholder="tipo de vehiculo"></td></tr> 
       <tr><td> Placas : </td> <td><input type="text" name="placas" required placeholder="placas"></td></tr>
       <tr><td> Modelo : </td><td><input type="text" name="modelo" required placeholder="modelo"></td></tr>
       <tr><td> Kilometraje : </td><td><input type="text" name="km" required placeholder="km"></td></tr>
       </table></div>

       <div class="revisioninterna"><table>

       <tr><td><h5>REVISION EVALUACION</h5></td></tr>
       <tr><td><div class="titulouno">REVISION INTERNA</div>  </td></tr>

       <tr><td> Indicador de presion de aceite : </td><td><select class="seleccion" name="opcionpreaceite" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Indicador de presion de aire : </td><td><select class="seleccion" name="opcionpreaire" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Dispositivo de advertencia poco aire o vacio : </td><td><select class="seleccion" name="dispadveraire" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Velocimetro : </td><td><select class="seleccion" name="velocimetro" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Stop : </td><td><select class="seleccion" name="stop" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Check engin : </td><td><select class="seleccion" name="engincheck" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Interior : </td><td><select class="seleccion" name="interior" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Advertencia : </td><td><select class="seleccion" name="advertencia" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Altura : </td><td><select class="seleccion" name="altura" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Calentador-Desempañador : </td><td><select class="seleccion" name="calendesem" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Bateria : </td><td><select class="seleccion" name="bateria" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Motor : </td><td><select class="seleccion" name="motor" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Claxon o Corneta : </td><td><select class="seleccion" name="claxon" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Cinturon de seguridad : </td><td><select class="seleccion" name="cinseguri" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Parabrisas(Sin fisuras que obstruyan la visibilidad) : </td><td><select class="seleccion" name="parabrisas" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Limpiadores : </td><td><select class="seleccion" name="limpiadores" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Espejos retrovisores (2) : </td><td><select class="seleccion" name="espejos" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Volante (Direccion sin juego excesivo) : </td><td><select class="seleccion" name="volante" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Freno de pie : </td><td><select class="seleccion" name="fdpie" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Freno de emergencia : </td><td><select class="seleccion" name="fdemergencia" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       </table></div>

       
       <div class="parteinferior"><table>

<tr><td>REVISION                       EVALUACION</td></tr>

<tr><td><div class="titulouno">PARTE INFERIOR</div>  </td></tr>

<tr><td> Frenos(Sin fugas de aire) : </td><td><select class="seleccion" name="frenosinfe" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Bolsas de aire sin fugas : </td><td><select class="seleccion" name="bolsasaireinfe" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Chasis sin fisuras : </td><td><select class="seleccion" name="chasisnfisuinfe" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Lineas de aíre : </td><td><select class="seleccion" name="lineadeaireinfe" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Líneas eléctricas : </td><td><select class="seleccion" name="lineaselecinfe" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Diferencial (sin fugas) : </td><td><select class="seleccion" name="difereninfe" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Transmision (sin fugas) : </td><td><select class="seleccion" name="transmisinfe" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
</table></div>



<div class="areacombustion"><table>

        
<tr><td><div class="titulouno"> AREA DE COMBUSTION INTERNA</div>  </td></tr>

<tr><td> Motor : </td><td><select class="seleccion" name="motor2" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Radiador : </td><td><select class="seleccion" name="radiador" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Baterías : </td><td><select class="seleccion" name="baterias" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Tandas : </td><td><select class="seleccion" name="tandas" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
</table></div>

             
<div class="equipemergencia"><table>
       <tr><td><div class="titulouno"> DEL EQUIPO DE EMERGENCIA</div>  </td></tr>

       <tr><td> Libro  y hoja de emergencia : </td><td><select class="seleccion" name="liuhoemergen" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Botiquín primeros auxilios : </td><td><select class="seleccion" name="botpriaux" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Caja de herramientas : </td><td><select class="seleccion" name="cajaherra" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Extinguidor 4KG : </td><td><select class="seleccion" name="exting" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Triangulo de seguridad : </td><td><select class="seleccion" name="triangdeseg" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Taquetes : </td><td><select class="seleccion" name="taquetes" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Llave de rueda : </td><td><select class="seleccion" name="llavederued" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Gato Hidráulico : </td><td><select class="seleccion" name="gatohidra" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       
       </table></div>
      

    
       <div class="remolque"><table>

        
       <tr><td><div class="titulouno">REMOLQUE , SEMIREMOLQUE</div>  </td></tr>

       <tr><td> Freno de remolque : </td><td><select class="seleccion" name="freremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Líneas eléctricas : </td><td><select class="seleccion" name="lineleremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Conexion de frenos : </td><td><select class="seleccion" name="condefreremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Conexion quinta rueda : </td><td><select class="seleccion" name="conquinrueremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Patines : </td><td><select class="seleccion" name="patinesremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Cerradura puertas : </td><td><select class="seleccion" name="cerrapuertremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Carteles de identificación de riesgo(a) : </td><td><select class="seleccion" name="cartderiesgremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Altura : </td><td><select class="seleccion" name="alturaremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Identificación (porta placa) : </td><td><select class="seleccion" name="identifiremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Direccionales : </td><td><select class="seleccion" name="direcciremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Estacionamiento : </td><td><select class="seleccion" name="estacioremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Gálibo : </td><td><select class="seleccion" name="galiboremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Advertencia : </td><td><select class="seleccion" name="advertremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Frenado : </td><td><select class="seleccion" name="frenadremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Reflejantes : </td><td><select class="seleccion" name="reflejanremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Llantas sin desgaste excesivo y aire : </td><td><select class="seleccion" name="llantadesgremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Birlos completos : </td><td><select class="seleccion" name="birlosremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Loderas : </td><td><select class="seleccion" name="loderaremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Defensa : </td><td><select class="seleccion" name="defensaremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Carga (sujecíon y compatibilidad) : </td><td><select class="seleccion" name="cargasycremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Banderines : </td><td><select class="seleccion" name="banderinremolque" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       </table></div>
       
       
       <div class="frenteexterior"><table>


       <tr><td><div class="titulouno">FRENTE ( EXTERIOR )</div>  </td></tr>

      
       <tr><td> Defensa : </td><td><select class="seleccion" name="defensa" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Faros principales : </td><td><select class="seleccion" name="farosprin" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Altura luces : </td><td><select class="seleccion" name="altuluces" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Direccionales : </td><td><select class="seleccion" name="direccionales" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Reversa : </td><td><select class="seleccion" name="reversa" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Reverceros : </td><td><select class="seleccion" name="reverseros" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Birlos completos : </td><td><select class="seleccion" name="birloscomp" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Loderas : </td><td><select class="seleccion" name="loderas" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       </table></div>

       
       <div class="ladoizqyder"><table>

       
       <tr><td><div class="titulouno">LADO IZQUIERDO Y LADO DERECHO</div>  </td></tr>
       
       <tr><td> Tanque de combustible sin fugas : </td><td><select class="seleccion" name="tanqcombus" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Tapón : </td><td><select class="seleccion" name="tapon" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Luces de advertencia laterales : </td><td><select class="seleccion" name="lucadvlaterales" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Reflejantes : </td><td><select class="seleccion" name="reflejantes" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> LLanta de refacción : </td><td><select class="seleccion" name="llantarefa" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Llantas (desgaste y aire) : </td><td><select class="seleccion" name="llantadesg" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Sistema de aseguramiento de la carga : </td><td><select class="seleccion" name="sisaseguracarga" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Quinta rueda : </td><td><select class="seleccion" name="quintarued" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Banderines : </td><td><select class="seleccion" name="banderines" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       </table></div>

      

       
       
       <div class="parteposterior"><table>
        
       <tr><td><div class="titulouno">PARTE POSTERIOR</div>  </td></tr>
       <tr><td> Altura : </td><td><select class="seleccion" name="altuposterior" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Direccionales : </td><td><select class="seleccion" name="direccionposterior" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Frenado : </td><td><select class="seleccion" name="frenadoposterior" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Marcha atrás : </td><td><select class="seleccion" name="marchaatrasposterior" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Gálibo : </td><td><select class="seleccion" name="galiboposterior" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Advertencia : </td><td><select class="seleccion" name="advertenciaposterior" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Reflejantes : </td><td><select class="seleccion" name="reflejantesposterior" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Loderas : </td><td><select class="seleccion" name="loderasposterior" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Dispositivo de aseguramiento : </td><td><select class="seleccion" name="dispaseguraposterior" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Cerradura de puertas : </td><td><select class="seleccion" name="cerradurapuertposterior" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       <tr><td> Escape : </td><td><select class="seleccion" name="escapeposterior" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
       
      
       <tr><td> COMENTARIOS : </td><td><input type="text" name="comentario" placeholder="------"></td></tr> 

       
     
       


<div class="boton"><table>
      <tr> <td><button type="submit" name="enviar">enviar</button></td>
      
<td><button type="submit" name="eliminar">eliminar</button></td></tr> 
      
</table></div>

<div class="complementaria"><table>

        
<tr><td><div class="titulouno">COMPLEMENTARÍA AL PUNTO ANTERIOR</div>  </td></tr>

<tr><td> Mata chispas : </td><td><select class="seleccion" name="matachispa" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Placa metálica de identificacion : </td><td><select class="seleccion" name="placametdeiden" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Engomados de prueba y vigente : </td><td><select class="seleccion" name="engomadepruebayvig" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Reflejantes : </td><td><select class="seleccion" name="reflejan" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Tubería,válvulas y conexiones : </td><td><select class="seleccion" name="tubevalycone" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Pasillo : </td><td><select class="seleccion" name="pasillo" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Cuerpo de tanque (sin golpes o fisuras) : </td><td><select class="seleccion" name="cuerpodetanq" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Instrumentos de medicíon : </td><td><select class="seleccion" name="instrumendemedi" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Válvulas de desfogue Interna y vacío : </td><td><select class="seleccion" name="valvdesfogue" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Entrada pasa hombre (Domo) : </td><td><select class="seleccion" name="entradadomo" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
<tr><td> Conexion a tierra  : </td><td><select class="seleccion" name="conexatierr" required><option selected hidden value="">Selecciona</option><option value="si">SI</option><option value="no">NO</option><option value="n/a">N/A</option></select></td></tr>
</table></div>
       
    </form>
    </div>

   

</body>

</html>