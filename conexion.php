<?php

    $conexion = mysqli_connect('localhost','root','','personita')or die (mysqli_error($mysqli));

    diferencia($conexion);



    function diferencia($conexion){
      if(isset($_POST['enviar'])){
        insertar($conexion);
      }
      if(isset($_POST['eliminar'])){
        eliminar($conexion);
      }



    }
 

    function insertar ($conexion){
     
        $tipvehiculo=$_POST['tipvehiculo'];
        $placas = $_POST['placas'];
        $modelo = $_POST ['modelo'];
        $km= $_POST ['km'];

        
        $opcionpreaire=$_POST['opcionpreaire'];
        $opcionpreaceite= $_POST ['opcionpreaceite'];
        $velocimetro= $_POST ['velocimetro'];
        $stop= $_POST ['stop'];
        $engincheck= $_POST ['engincheck'];
        $interior= $_POST ['interior'];
        $advertencia= $_POST ['advertencia'];
        $altura= $_POST ['altura'];
        $calendesem= $_POST ['calendesem'];
        $bateria= $_POST ['bateria'];
        $motor= $_POST ['motor'];
        $claxon= $_POST ['claxon'];
        $cinseguri= $_POST ['cinseguri'];
        $parabrisas= $_POST ['parabrisas'];
        $limpiadores=$_POST['limpiadores'];
        $espejos= $_POST ['espejos'];
        $volante= $_POST ['volante'];
        $fdpie= $_POST ['fdpie'];
        $fdemergencia= $_POST ['fdemergencia'];


        $defensa= $_POST ['defensa'];
        $farosprin= $_POST ['farosprin'];
        $altuluces= $_POST ['altuluces'];
        $direccionales= $_POST ['direccionales'];
        $reversa= $_POST ['reversa'];
        $reverseros= $_POST ['reverseros'];
        $birloscomp= $_POST ['birloscomp'];
        $loderas= $_POST ['loderas'];

        $tanqcombus= $_POST ['tanqcombus'];
        $tapon= $_POST ['tapon'];
        $lucadvlaterales= $_POST ['lucadvlaterales'];
        $reflejantes= $_POST ['reflejantes'];
        $llantarefa= $_POST ['llantarefa'];
        $llantadesg= $_POST ['llantadesg'];
        $sisaseguracarga= $_POST ['sisaseguracarga'];
        $quintarued= $_POST ['quintarued'];
        $banderines= $_POST ['banderines'];

        $altuposterior= $_POST ['altuposterior'];
        $direccionposterior= $_POST ['direccionposterior'];
        $frenadoposterior= $_POST ['frenadoposterior'];
        $marchaatrasposterior= $_POST ['marchaatrasposterior'];
        $galiboposterior= $_POST ['galiboposterior'];
        $advertenciaposterior= $_POST ['advertenciaposterior'];
        $reflejantesposterior= $_POST ['reflejantesposterior'];
        $loderasposterior= $_POST ['loderasposterior'];
        $dispaseguraposterior= $_POST ['dispaseguraposterior'];
        $cerradurapuertposterior= $_POST ['cerradurapuertposterior'];
        $escapeposterior= $_POST ['escapeposterior'];

        $frenosinfe= $_POST ['frenosinfe']; 
        $bolsasaireinfe= $_POST ['bolsasaireinfe'];
        $chasisnfisuinfe= $_POST ['chasisnfisuinfe'];
        $lineadeaireinfe= $_POST ['lineadeaireinfe'];
        $lineaselecinfe= $_POST ['lineaselecinfe'];
        $difereninfe= $_POST ['difereninfe'];
        $transmisinfe= $_POST ['transmisinfe'];

        $motor2= $_POST ['motor2'];
        $radiador= $_POST ['radiador'];
        $baterias= $_POST ['baterias'];
        $tandas= $_POST ['tandas'];

        $liuhoemergen= $_POST ['liuhoemergen'];
        $botpriaux= $_POST ['botpriaux'];
        $cajaherra= $_POST ['cajaherra'];
        $exting= $_POST ['exting'];
        $triangdeseg= $_POST ['triangdeseg'];
        $taquetes= $_POST ['taquetes'];
        $llavederued= $_POST ['llavederued'];
        $gatohidra= $_POST ['gatohidra'];

        $freremolque= $_POST ['freremolque'];
        $lineleremolque= $_POST ['lineleremolque'];
        $condefreremolque= $_POST ['condefreremolque'];
        $conquinrueremolque= $_POST ['conquinrueremolque'];
        $patinesremolque= $_POST ['patinesremolque'];
        $cerrapuertremolque= $_POST ['cerrapuertremolque'];
        $cartderiesgremolque= $_POST ['cartderiesgremolque'];
        $alturaremolque= $_POST ['alturaremolque'];  
        $identifiremolque= $_POST ['identifiremolque'];
        $direcciremolque= $_POST ['direcciremolque'];
        $estacioremolque= $_POST ['estacioremolque'];
        $galiboremolque= $_POST ['galiboremolque'];
        $advertremolque= $_POST ['advertremolque'];
        $frenadremolque= $_POST ['frenadremolque'];
        $reflejanremolque= $_POST ['reflejanremolque'];
        $llantadesgremolque= $_POST ['llantadesgremolque'];
        $birlosremolque= $_POST ['birlosremolque'];
        $loderaremolque= $_POST ['loderaremolque'];
        $defensaremolque= $_POST ['defensaremolque'];
        $cargasycremolque= $_POST ['cargasycremolque'];
        $banderinremolque= $_POST ['banderinremolque'];

        $matachispa= $_POST ['matachispa'];
        $placametdeiden= $_POST ['placametdeiden'];
        $engomadepruebayvig= $_POST ['engomadepruebayvig'];
        $reflejan= $_POST ['reflejan'];
        $tubevalycone= $_POST ['tubevalycone'];
        $pasillo= $_POST ['pasillo'];
        $cuerpodetanq= $_POST ['cuerpodetanq'];
        $instrumendemedi= $_POST ['instrumendemedi'];
        $valvdesfogue= $_POST ['valvdesfogue'];
        $entradadomo= $_POST ['entradadomo'];
        $conexatierr= $_POST ['conexatierr'];

        $comentario=$_POST['comentario'];



   

        $consulta = "INSERT INTO persona(tipvehiculo,placas,modelo,km,
        opcionpreaire,opcionpreaceite,velocimetro,stop,engincheck,interior,advertencia,altura,calendesem,bateria,motor,claxon,cinseguri,parabrisas,limpiadores,espejos,volante,fdpie,fdemergencia,
        defensa,farosprin,altuluces,direccionales,reversa,reverseros,birloscomp,loderas,
        tanqcombus,tapon,lucadvlaterales,reflejantes,llantarefa,llantadesg,sisaseguracarga,quintarued,banderines,
        altuposterior,direccionposterior,frenadoposterior,marchaatrasposterior,galiboposterior,advertenciaposterior,reflejantesposterior,loderasposterior,dispaseguraposterior,cerradurapuertposterior,escapeposterior,
        frenosinfe,bolsasaireinfe,chasisnfisuinfe,lineadeaireinfe,lineaselecinfe,difereninfe,transmisinfe,
        motor2,radiador,baterias,tandas,
        liuhoemergen,botpriaux,cajaherra,exting,triangdeseg,taquetes,llavederued,gatohidra,
        freremolque,lineleremolque,condefreremolque,conquinrueremolque,patinesremolque,cerrapuertremolque,cartderiesgremolque,alturaremolque,identifiremolque,direcciremolque,
        estacioremolque,galiboremolque,advertremolque,frenadremolque,reflejanremolque,llantadesgremolque,birlosremolque,loderaremolque,defensaremolque,cargasycremolque,banderinremolque,
        matachispa,placametdeiden,engomadepruebayvig,reflejan,tubevalycone,pasillo,cuerpodetanq,instrumendemedi,valvdesfogue,entradadomo,conexatierr,
        comentario)
        VALUES ('$tipvehiculo','$placas','$modelo','$km',
         '$opcionpreaire','$opcionpreaceite','$velocimetro','$stop','$engincheck','$interior','$advertencia','$altura','$calendesem','$bateria','$motor','$claxon','$cinseguri','$parabrisas','$limpiadores','$espejos','$volante','$fdpie','$fdemergencia',
         '$defensa','$farosprin','$altuluces','$direccionales','$reversa','$reverseros','$birloscomp','$loderas',
         '$tanqcombus','$tapon','$lucadvlaterales','$reflejantes','$llantarefa','$llantadesg','$sisaseguracarga','$quintarued','$banderines',
         '$altuposterior','$direccionposterior','$frenadoposterior','$marchaatrasposterior','$galiboposterior','$advertenciaposterior','$reflejantesposterior','$loderasposterior','$dispaseguraposterior','$cerradurapuertposterior','$escapeposterior',
         '$frenosinfe','$bolsasaireinfe','$chasisnfisuinfe','$lineadeaireinfe','$lineaselecinfe','$difereninfe','$transmisinfe',
         '$motor2','$radiador','$baterias','$tandas',
         '$liuhoemergen','$botpriaux','$cajaherra','$exting','$triangdeseg','$taquetes','$llavederued','$gatohidra',
         '$freremolque','$lineleremolque','$condefreremolque','$conquinrueremolque','$patinesremolque','$cerrapuertremolque','$cartderiesgremolque','$alturaremolque','$identifiremolque','$direcciremolque',
         '$estacioremolque','$galiboremolque','$advertremolque','$frenadremolque','$reflejanremolque','$llantadesgremolque','$birlosremolque','$loderaremolque','$defensaremolque','$cargasycremolque','$banderinremolque',
         '$matachispa','$placametdeiden','$engomadepruebayvig','$reflejan','$tubevalycone','$pasillo','$cuerpodetanq','$instrumendemedi','$valvdesfogue','$entradadomo','$conexatierr',
         '$comentario')";



        mysqli_query($conexion,$consulta);
        mysqli_close($conexion);
        header("Location:index.php"); 
        
      }

      function eliminar ($conexion){
        $placas = $_POST['placas'];
      

        $consulta = "DELETE FROM persona WHERE placas = '$placas'"; 
        mysqli_query($conexion,$consulta);
        mysqli_close($conexion);

        header("Location:index.php");
      }

      function cargarTabla($conexion){ 
        $consulta= "SELECT *FROM persona";
        $resultado = mysqli_query($conexion,$consulta);

        while($fila = mysqli_fetch_array($resultado)){

          echo " <tr> ";
       
          echo " <td> ".$fila['tipvehiculo'];
          echo " <td> ".$fila['placas'];
          echo " <td> ".$fila['modelo'];
          echo " <td> ".$fila['km'];
          echo " <td> ".$fila['opcionpreaire'];


          echo " <tr> ";

        }
        mysqli_close($conexion);


      }



?>