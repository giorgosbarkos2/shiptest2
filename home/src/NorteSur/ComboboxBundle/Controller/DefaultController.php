<?php

namespace NorteSur\ComboboxBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NorteSurComboboxBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
    
    
    
    public function comboRegionAction(Request $request) {
        $request = $this->get('request');

        $elegido = $request->request->get('elegido');

        $repuesta = 'probando';



        if ($elegido == 'Región de Aysén del General Carlos Ibáñez del Campo') {

            $respuesta2 = '
           

       <option value="AYSEN">AYSEN</option>
          <option value="AYSEN">AYSEN</option>
                  <option value="CHILE CHICO">CHILE CHICO</option>
                  <option value="CISNES ">CISNES </option>
                  <option value="COCHRANE">COCHRANE</option>
                  <option value="COYHAIQUE">COYHAIQUE</option>
                  <option value="GUAITECAS">GUAITECAS</option>
                  <option value="LAGO VERDE">LAGO VERDE</option>
                  <option value="O HIGGINS">O HIGGINS</option>
                  <option value="RIO IBAÑEZ">RIO IBAÑEZ</option>';








            return new Response($respuesta2);
        }





        if ($elegido == 'Región de Antofagasta') {


            $respuesta2 = '
           
  <option value="">Opción</option>
       <option value="ANTOFAGASTA">ANTOFAGASTA</option>
          <option value="CALAMA">CALAMA</option>
                  <option value="MARIA ELENA">MARIA ELENA</option>
                  <option value="MEJILLONES">MEJILLONES </option>
                  <option value="OLLAGUE">OLLAGUE</option>
                  <option value="SAN PEDRO DE ATACAMA">SAN PEDRO DE ATACAMA</option>
                  <option value="SIERRA GORDA">SIERRA GORDA</option>
                  <option value="TALTAL">TALTAL</option>
                  <option value="TOCOPILLA">O HIGGINS</option>
                  ';



            return new Response($respuesta2);
        }


        if ($elegido == 'Región de Arica y Parinacota') {

            $respuesta2 = '
           
  <option value="">Opción</option>
       <option value="ARICA">ARICA</option>
          <option value="CAMARONES">CAMARONES</option>
                  <option value="GENERAL LAGOS">GENERAL LAGOS</option>
                  <option value="PUTRE">PUTRE</option>
                 
                  ';

            return new Response($respuesta2);
        }



        if ($elegido == 'Región de Coquimbo') {


            $respuesta2 = '
                  <option value="">Opción</option>
          <option value="ANDACOLLO">ANDACOLLO</option>
          <option value="CANELA">CANELA</option>
          <option value="COMBARBALA">COMBARBALA</option>
          <option value="COQUIMBO">COQUIMBO</option>
          <option value="ILLAPEL">ILLAPEL</option>
          <option value="LA HIGUERA">LA HIGUERA</option>
          <option value="LA SERENA">LA SERENA</option>
          <option value="LOS VILOS">LOS VILOS</option>
          <option value="MONTE PATRIA">MONTE PATRIA</option>
          <option value="OVALLE">OVALLE</option>
          <option value="PAIHUANO">PAIHUANO</option>
          <option value="PUNITAQUI">PUNITAQUI</option>
           <option value="RIO HURTADO">RIO HURTADO</option>
                  <option value="SALAMANCA">SALAMANCA</option>
                  <option value="VICUÑA">VICUÑA</option>

                  ';

            return new Response($respuesta2);
        }


        if ($elegido == 'Región de Atacama') {

            $respuesta2 = '
                  <option value="">Opción</option>
                
          <option value="ALTO DEL CARMEN">ALTO DEL CARMEN</option>
          <option value="CALDERA">CALDERA</option>
          <option value="CHAÑARAL">CHAÑARAL</option>
          <option value="COPIAPO">COPIAPO</option>
          <option value="DIEGO DE ALMAGRO">DIEGO DE ALMAGRO</option>
          <option value="FREIRINA">FREIRINA</option>
          <option value="HUASCO">HUASCO</option>
          <option value="TIERRA AMARILLA">TIERRA AMARILLA</option>
          <option value="VALLENAR">VALLENAR</option>
     

                  ';

            return new Response($respuesta2);
        }



        if ($elegido == 'Región de la Araucanía') {

            $respuesta2 = '
                  <option value="">Opción</option>
                
          <option value="ANGOL">ANGOL</option>
          <option value="CARAHUE">CARAHUE</option>
          <option value="COLLIPULLI">COLLIPULLI</option>
          <option value="CUNCO">CUNCO</option>
          <option value="CURACAUTIN">CURACAUTIN</option>
          <option value="CURARREHUE">CURARREHUE</option>
          <option value="ERCILLA">ERCILLA</option>
          <option value="FREIRE">FREIRE</option>
          <option value="GALVARINO">GALVARINO</option>
          

 <option value="GORBEA">GORBEA</option>
          <option value="LAUTARO">LAUTARO</option>
          <option value="LONCOCHE">LONCOCHE</option>
          <option value="LONQUIMAY">LONQUIMAY</option>
          <option value="LOS SAUCES">LOS SAUCES</option>
          <option value="LUMACO">LUMACO</option>
          <option value="MELIPEUCO">MELIPEUCO</option>
          <option value="PADRE LAS CASAS">PADRE LAS CASAS</option>
          <option value="PERQUENCO">PERQUENCO</option>
          

<option value="PITRUFQUEN">PITRUFQUEN</option>
          <option value="PUCON">PUCON</option>
          <option value="PUERTO SAAVEDRA">PUERTO SAAVEDRA</option>
          <option value="PUREN">PUREN</option>
          <option value="RENAICO">RENAICO</option>
          <option value="TEMUCO">TEMUCO</option>
          <option value="TEODORO SCHMIDT">TEODORO SCHMIDT</option>
          <option value="TOLTEN">TOLTEN</option>
          <option value="TRAIGUEN">TRAIGUEN</option>
          

 <option value="VICTORIA">VICTORIA</option>
          <option value="VILCUN">VILCUN</option>
          
     


 <option value="VILLARRICA">VILLARRICA</option>
         
          

                  ';

            return new Response($respuesta2);
        }


        if ($elegido == 'Región de Los Lagos') {

            $respuesta2 = '
                
                  <option value="">Opción</option>
          <option value="ANCUD">ANCUD</option>
          <option value="CALBUCO">CALBUCO</option>
          <option value="CASTRO">CASTRO</option>
          <option value="CHAITEN">CHAITEN</option>
          <option value="CHONCHI">CHONCHI</option>
          <option value="COCHAMO">COCHAMO</option>
          <option value="CURACO DE VELEZ">CURACO DE VELEZ</option>
          <option value="DALCAHUE">DALCAHUE</option>
          <option value="FRESIA">FRESIA</option>
          <option value="FRUTILLAR">FRUTILLAR</option>
          <option value="FUTALEUFU">FUTALEUFU</option>
          <option value="HUALAIHUE">HUALAIHUE</option>
          <option value="LLANQUIHUE">LLANQUIHUE</option>
          <option value="LOS MUERMOS">LOS MUERMOS</option>
          <option value="MAULLIN">MAULLIN</option>
          <option value="OSORNO">OSORNO</option>
          <option value="PALENA">PALENA</option>
          <option value="PUERTO MONTT">PUERTO MONTT</option>
          <option value="PUERTO OCTAY">PUERTO OCTAY</option>
          <option value="PUERTO VARAS">PUERTO VARAS</option>
          <option value="PUQUELDON">PUQUELDON</option>
          <option value="PURRANQUE">PURRANQUE</option>
          <option value="PUYEHUE">PUYEHUE</option>
          <option value="QUEILEN">QUEILEN</option>
          <option value="QUELLON">QUELLON</option>
          <option value="QUEMCHI">QUEMCHI</option>
          <option value="QUINCHAO">QUINCHAO</option>
          <option value="RIO NEGRO">RIO NEGRO</option>
          <option value="SAN JUAN DE LA COSTA">SAN JUAN DE LA COSTA</option>
          <option value="SAN PABLO">SAN PABLO</option>';

            return new Response($respuesta2);
        }



        if ($repuesta == 'Región de Los Lagos') {


            $respuesta2 = '
                
  <option value="">Opción</option>
          <option value="CORRAL">CORRAL</option>
          <option value="FUTRONO">FUTRONO</option>
          <option value="LA UNION">LA UNION</option>
          <option value="LAGO RANCO">LAGO RANCO</option>
          <option value="LANCO">LANCO</option>
          <option value="COCHAMO">COCHAMO</option>

          <option value="LOS LAGOS">LOS LAGOS</option>
          <option value="MAFIL">MAFIL</option>
          <option value="MARIQUINA">MARIQUINA</option>
          <option value="VALDIVIA">VALDIVIA</option>
          <option value="PANGUIPULLI">PANGUIPULLI</option>
          
          <option value="PAILLACO">PAILLACO</option>
          <option value="RIO BUENO">RIO BUENO</option>
          


';


            return new Response($respuesta2);
        }
        
        
        
        
        
        
        
        if($elegido == 'Región de Magallanes'){
        
            $respuesta2 = '
                  <option value="">Opción</option>
          <option value="LAGUNA BLANCA">LAGUNA BLANCA</option>
          <option value="NAVARINO">NAVARINO</option>
          <option value="PORVENIR">PORVENIR</option>
          <option value="PRIMAVERA">PRIMAVERA</option>
          <option value="PUERTO NATALES">PUERTO NATALES</option>
          <option value="PUNTA ARENAS">PUNTA ARENAS</option>

          <option value="RIO VERDE">RIO VERDE</option>
          <option value="SAN GREGORIO">SAN GREGORIO</option>
      
          <option value="TIMAUKEL">TIMAUKEL</option>
          <option value="TORRES DEL PAINE">TORRES DEL PAINE</option>
          
          ';
            
        
            
                        return new Response($respuesta2);
        
        }
        
        if($elegido == 'Región de Tarapacá'){
        
         $respuesta2 = '
               <option value="">Opción</option>
                
          <option value="ALTO HOSPICIO">ALTO HOSPICIO</option>
          <option value="CAMINA">CAMINA</option>
          <option value="COLCHANE">COLCHANE</option>
          <option value="HUARA">HUARA</option>
          <option value="IQUIQUE">IQUIQUE</option>
          <option value="PICA">PICA</option>
          <option value="POZO ALMONTE">POZO ALMONTE</option>

      
          ';
        
               return new Response($respuesta2);
        }
        
        
        
        if($elegido == 'Región de Valparaiso'){
         
         $respuesta2 = '
                
     <option value="">Opción</option>
          <option value="ALGARROBO">ALGARROBO</option>
          <option value="CABILDO">CABILDO</option>
          <option value="CALLE LARGA">CALLE LARGA</option>
          <option value="CARTAGENA">CARTAGENA</option>
          <option value="CASABLANCA">CASABLANCA</option>
          <option value="CATEMU">CATEMU</option>
          <option value="CONCON">CONCON</option>
          <option value="EL QUISCO">EL QUISCO</option>
          <option value="EL TABO">EL TABO</option>
          <option value="HIJUELAS">HIJUELAS</option>
          <option value="ISLA DE PASCUA">ISLA DE PASCUA</option>
          <option value="LA CALERA">LA CALERA</option>
          <option value="LA CRUZ"> LA CRUZ</option>
          <option value="LA LIGUA">LA LIGUA</option>
          <option value="LIMACHE">LIMACHE</option>
          <option value="LLAY LLAY">LLAY LLAY</option>
          <option value="LOS ANDES">LOS ANDES</option>
          <option value="NOGALES">NOGALES</option>
          <option value="OLMUE">OLMUE</option>
          <option value="PANQUEHUE">PANQUEHUE</option>
          <option value="PAPUDO">PAPUDO</option>
          <option value="PETORCA">PETORCA</option>
          <option value="PUCHUNCAVI">PUCHUNCAVI</option>
          <option value="PUTAENDO">PUTAENDO</option>
          <option value="QUILLOTA">QUILLOTA</option>
          <option value="QUILPUE">QUILPUE</option>
          <option value="QUINTERO">QUINTERO</option>
          <option value="RINCONADA">RINCONADA</option>
          <option value="SAN ANTONIO ">SAN ANTONIO </option>
          <option value="SAN ESTEBAN">SAN ESTEBAN</option>
          <option value="SAN FELIPE">SAN FELIPE</option>
          <option value="SANTA MARIA">SANTA MARIA</option>
          <option value="SANTO DOMINGO">SANTO DOMINGO</option>
          <option value="VALPARAISO">VALPARAISO</option>
          <option value="VILLA ALEMANA">VILLA ALEMANA</option>
          <option value="VIÑA DEL MAR">VIÑA DEL MAR</option>
          <option value="ZAPALLAR">ZAPALLAR</option>

      
          ';
        
           return new Response($respuesta2);
           
        }
        
        if($elegido == 'Región del Bío-Bío'){
           
         $respuesta2 = '
                
     <option value="">Opción</option>
          <option value="ANTUCO">ANTUCO</option>
 
          <option value="ARAUCO">ARAUCO</option>
          <option value="BULNES">BULNES</option>
          <option value="CABRERO">CABRERO</option>
          <option value="CAÑETE">CAÑETE</option>
          <option value="CHIGUAYANTE">CHIGUAYANTE</option>
          <option value="CHILLAN">CHILLAN</option>
          <option value="CHILLAN VIEJO">CHILLAN VIEJO</option>
          <option value="COBQUECURA">COBQUECURA</option>
          <option value="COELEMU">COELEMU</option>
        
          <option value="COIHUECO">COIHUECO</option>
          <option value="CONCEPCION">CONCEPCION</option>

          <option value="CONTULMO">CONTULMO</option>
          <option value="CORONEL">CORONEL</option>
          <option value="CURANILAHUE">CURANILAHUE</option>
          <option value="EL CARMEN">EL CARMEN</option>
          <option value="FLORIDA">FLORIDA</option>
          <option value="HUALQUI">HUALQUI</option>
          <option value="LAJA">LAJA</option>
          <option value="LEBU">LEBU</option>
          <option value="LOS ALAMOS">LOS ALAMOS</option>
          <option value="LOS ANGELES">LOS ANGELES</option>
          <option value="LOTA ">LOTA </option>
          <option value="MULCHEN">MULCHEN</option>
          <option value="NACIMIENTO">NACIMIENTO</option>
          
          <option value="NEGRETE">NEGRETE</option>
          <option value="NINHUE">NINHUE</option>
          <option value="PEMUCO">PEMUCO</option>
          <option value="PENCO">PENCO</option>
          <option value="PINTO">PINTO</option>
          <option value="PORTEZUELO">PORTEZUELO</option>
          <option value="QUILACO">QUILACO</option>
          <option value="QUILLECO">QUILLECO</option>
          <option value="QUILLON">QUILLON</option>
          <option value="QUIRIHUE">QUIRIHUE</option>
          <option value="RANQUIL">RANQUIL</option>
          <option value="SAN CARLOS">SAN CARLOS</option>
          <option value="SAN FABIAN">SAN FABIAN</option>
          <option value="SAN GREGORIO DE ÑIQUEN">SAN GREGORIO DE ÑIQUEN</option>
          <option value="QUIRIHUE">QUIRIHUE</option>
          <option value="SAN IGNACIO">SAN IGNACIO</option>
          <option value="SAN NICOLAS">SAN NICOLAS</option>
          <option value="SAN PEDRO DE LA PAZ">SAN PEDRO DE LA PAZ</option>
          <option value="SAN ROSENDO ">SAN ROSENDO </option>
          <option value="SANTA BARBARA">SANTA BARBARA</option>
          <option value="TALCAHUANO">TALCAHUANO</option>
          <option value="TIRUA">TIRUA</option>
          <option value="TOME">TOME</option>
          <option value="TREHUACO">TREHUACO</option>
          <option value="TUCAPEL">TUCAPEL</option>
          <option value="YUMBEL">YUMBEL</option>
          <option value="YUNGAY">YUNGAY</option>         

      
          ';
          return new Response($respuesta2);
        }
        
        
        if($elegido =='Región del Libertador General Bernardo O Higgins'){
        
        $respuesta2='
            
  <option value="">Opción</option>
         
         <option value="CHEPICA">CHEPICA</option>
 
          <option value="CHIMBARONGO">CHIMBARONGO</option>
          <option value="CODEGUA">CODEGUA</option>
          <option value="COINCO">COINCO</option>
          <option value="COLTAUCO">COLTAUCO</option>
          <option value="DOÑIHUE">DOÑIHUE</option>
          <option value="GRANEROS">GRANEROS</option>
          <option value="LA ESTRELLA">LA ESTRELLA</option>
          <option value="LAS CABRAS">LAS CABRAS</option>
          <option value="LITUECHE">LITUECHE</option>
        
          <option value="LOLOL">LOLOL</option>
          <option value="MACHALI">MACHALI</option>

          <option value="MALLOA">MALLOA</option>
          <option value="MARCHIGUE">MARCHIGUE</option>
          <option value="NANCAGUA">NANCAGUA</option>
          <option value="NAVIDAD">NAVIDAD</option>
          <option value="OLIVAR">OLIVAR</option>
          <option value="PALMILLA">PALMILLA</option>
          <option value="PAREDONES">PAREDONES</option>
          <option value="PERALILLO">PERALILLO</option>
          <option value="PEUMO">PEUMO</option>
          <option value="PICHIDEGUA">PICHIDEGUA</option>
          <option value="PICHILEMU">PICHILEMU</option>
          <option value="PLACILLA">PLACILLA</option>
          <option value="PUMANQUE">PUMANQUE</option>
          
          <option value="QUINTA DE TILCOCO">QUINTA DE TILCOCO</option>
          <option value="RANCAGUA">RANCAGUA</option>
          <option value="RENGO">RENGO</option>
          <option value="REQUINOA">REQUINOA</option>
          <option value="SAN FERNANDO">SAN FERNANDO</option>
          <option value="SAN FRANCISCO DE MOSTAZAL">SAN FRANCISCO DE MOSTAZAL</option>
          <option value="SAN VICENTE">SAN VICENTE</option>
          <option value="SANTA CRUZ">SANTA CRUZ</option>
         
      
          ';
        
          return new Response($respuesta2);
      
        }
        
        
        
        if($repuesta == 'Región del Maule'){
        
        
        $respuesta2='
            
  <option value="">Opción</option>
         
         <option value="CAUQUENES">CAUQUENES</option>
 
          <option value="CHANCO">CHANCO</option>
          <option value="COLBUN">COLBUN</option>
          <option value="CONSTITUCION">CONSTITUCION</option>
          <option value="CUREPTO">CUREPTO</option>
          <option value="CURICO">CURICO</option>
          <option value="EMPEDRADO">EMPEDRADO</option>
          <option value="HUALAÑE">HUALAÑE</option>
          <option value="LICANTEN">LICANTEN</option>
          <option value="LINARES">LINARES</option>
        
          <option value="LONGAVI">LONGAVI</option>
          <option value="MAULE">MAULE</option>

          <option value="MOLINA">MOLINA</option>
          <option value="PARRAL">PARRAL</option>
          <option value="PELARCO">PELARCO</option>
          <option value="PELLUHUE">PELLUHUE</option>
          <option value="PENCAHUE">PENCAHUE</option>
          <option value="RAUCO">RAUCO</option>
          <option value="RETIRO">RETIRO</option>
          <option value="RIO CLARO">RIO CLARO</option>
          <option value="ROMERAL">ROMERAL</option>
          <option value="SAGRADA FAMILIA">SAGRADA FAMILIA</option>
          <option value="SAN CLEMENTE">SAN CLEMENTE</option>
          <option value="SAN JAVIER">SAN JAVIER</option>
          <option value="SAN RAFAEL">SAN RAFAEL</option>
          
      
          <option value="TALCA">TALCA</option>
          <option value="TENO">TENO</option>
          <option value="VICHUQUEN">VICHUQUEN</option>
          <option value="VILLA ALEGRE">VILLA ALEGRE</option>
        
          <option value="YERBAS BUENAS">YERBAS BUENAS</option>
         
      
          ';
        
         return new Response($respuesta2);
        
        }
        
        
        if($elegido == 'Región Metropolitana'){
            
       
         $respuesta2='
             
  <option value="">Opción</option>
         
         <option value="ALHUE">ALHUE</option>
 
          <option value="BUIN">BUIN</option>
          <option value="CALERA DE TANGO">CALERA DE TANGO</option>
          <option value="CERRILLOS">CERRILLOS</option>
          <option value="CERRO NAVIA">CERRO NAVIA</option>
          <option value="COLINA">COLINA</option>
          <option value="CONCHALI">CONCHALI</option>
          <option value="CURACAVI">CURACAVI</option>
          <option value="EL BOSQUE">EL BOSQUE</option>
          <option value="EL MONTE">EL MONTE</option>
        
          <option value="ESTACION CENTRAL">ESTACION CENTRAL</option>
          <option value="HUECHURABA">HUECHURABA</option>

          <option value="INDEPENDENCIA">INDEPENDENCIA</option>
          <option value="ISLA DE MAIPO">ISLA DE MAIPO</option>
          <option value="LA CISTERNA">LA CISTERNA</option>
          <option value="LA FLORIDA">LA FLORIDA</option>
          <option value="LA GRANJA">LA GRANJA</option>
          <option value="LA PINTANA">LA PINTANA</option>
          <option value="LA REINA">LA REINA</option>
          <option value="LAMPA">LAMPA</option>
          <option value="LAS CONDES">LAS CONDES</option>
          <option value="LO BARNECHE">LO BARNECHE</option>
          <option value="LO ESPEJO ">LO ESPEJO </option>
          <option value="LO PRADO">LO PRADO</option>
          <option value="MACUL">MACUL</option>
          
      
          <option value="MAIPU">MAIPU</option>
          <option value="MARIA PINTO">MARIA PINTO</option>
          <option value="ÑUÑOA">ÑUÑOA</option>
          <option value="PADRE HURTADO">PADRE HURTADO</option>
          
          
          <option value="PAINE">PAINE</option>
          <option value="PEDRO AGUIRRE CERDA ">PEDRO AGUIRRE CERDA </option>
          <option value="PEÑAFLOR">PEÑAFLOR</option>
          <option value="PEÑALOLEN">PEÑALOLEN</option>
          <option value="PIRQUE">PIRQUE</option>
          <option value="PROVIDENCIA">PROVIDENCIA</option>
          <option value="PUDAHUEL">PUDAHUEL</option>
          
          <option value="PUENTE ALTO">PUENTE ALTO</option>
          <option value="QUILICURA">QUILICURA</option>
          <option value="QUINTA NORMAL">QUINTA NORMAL</option>
          <option value="RECOLETA">RECOLETA</option>
          <option value="RENCA">RENCA</option>
          <option value="SAN BERNARDO">SAN BERNARDO</option>
          <option value="SAN JOAQUIN">SAN JOAQUIN</option>
          
          <option value="SAN JOSE DE MAIPO">SAN JOSE DE MAIPO</option>
          <option value="SAN MIGUEL">SAN MIGUEL</option>
          <option value="SAN PEDRO">SAN PEDRO</option>
          <option value="SAN RAMON">SAN RAMON</option>
          
          <option value="SANTIAGO CENTRO">SANTIAGO CENTRO</option>
          <option value="SANTIAGO OESTE">SANTIAGO OESTE</option>
          <option value="SANTIAGO SUR">SANTIAGO SUR</option>
          <option value="TALAGANTE">TALAGANTE</option>
         
          
          <option value="TIL-TIL">TIL-TIL</option>
          <option value="VITACURA">VITACURA</option>
  
      
          ';
        
         return new Response($respuesta2);
        
          }
        
        
    }
    
    
}
