<?php

namespace NorteSur\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use NorteSur\ComercioBundle\Entity\Producto;
use NorteSur\ComercioBundle\Entity\Categoria;
use NorteSur\ComercioBundle\Entity\Fotos;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('NorteSurAdminBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
    public function uploadProductoImgAction(){
        
        
        return $this->render('NorteSurAdminBundle:Default:uploadProducto.html.twig');
    }

    // Guarda Propiedades 
    public function guardarPropiedadAction(Request $request) {


        $descripcionCorta = $request->request->get('descripcionCorta');  
        $DescripcionLarga = $request->request->get('DescripcionLarga'); 
        $numeroPiezas = $request->request->get('numeroPiezas'); 
        $numeroBanos = $request->request->get('numeroBanos'); 
        $metrosConstruidos = $request->request->get('metrosConstruidos');  
        $MetrosTerreno = $request->request->get('MetrosTerreno');
        $TipoPropiedad = $request->request->get('TipoPropiedad');
        $estadoPropiedad = $request->request->get('estadoPropiedad');
        $direccion = $request->request->get('direccion');
        $Region = $request->request->get('Region');
        $comuna = $request->request->get('comuna');
        $ArriendoVenta = $request->request->get('ArriendoVenta');
        $Precio = $request->request->get('Precio');
        



        $em = $this->getDoctrine()->getManager();
        $categoria = $em->getRepository('NorteSurComercioBundle:Categoria')->findOneBy(array('id' => '1'));

        $producto = new Producto();

        $producto->setDescripcionCorta($descripcionCorta);
        $producto->setDescripcionLarga($DescripcionLarga);
        $producto->setNumeroPiezas($numeroPiezas);
        $producto->setNumeroBanos($numeroBanos);
        $producto->setMetrosConstruidos($metrosConstruidos);
        $producto->setMetrosTerreno($MetrosTerreno);
        $producto->setTipoPropiedad($TipoPropiedad);
        $producto->setEstadoPropiedad($estadoPropiedad);
        $producto->setDireccion($direccion);
        $producto->setRegion($Region);
        $producto->setComuna($comuna);
        $producto->setArriendoVenta($ArriendoVenta);
        $producto->setPrecio($Precio);
        $producto->setCategoria($categoria);
        $producto->setEstado('activo');
        $producto->setFecha(new \DateTime());
        

        $em->persist($categoria);
        $em->persist($producto);
        $em->flush();
        

        $idProducto = $producto->getId();
        
       
        
       
       $redirectUrl = 'uploadProductoImg';
    
       $session =   $session = $this->getRequest()->getSession();
       $session = $session->set('idFoto',  $idProducto);
       
       
       
         return new RedirectResponse($redirectUrl);
         
         
       // return $this->render('NorteSurAdminBundle:Default:uploadProducto.html.twig' , array('id' => $idProducto));


    }

    public function vistaAgregarPropiedadesAction() {


        $session = $this->getRequest()->getSession();

        $usuario = $session->get('usuario');
        $password = $session->get('contrasena');
        $em = $this->getDoctrine()->getManager();
        $admin = $em->getRepository('NorteSurAdminBundle:Admin')->findOneBy(array('usuario' => $usuario, 'password' => $password));

        if ($admin) {

            return $this->render('NorteSurAdminBundle:Default:agregarPropiedades.html.twig', array('usuario' => $usuario, 'password' => $password));
        } else {


            return $this->render('NorteSurAdminBundle:Default:login.html.twig');
        }
    }

    public function adminAction() {


        $session = $this->getRequest()->getSession();

        $usuario = $session->get('usuario');
        $password = $session->get('contrasena');
        $em = $this->getDoctrine()->getManager();
        $admin = $em->getRepository('NorteSurAdminBundle:Admin')->findOneBy(array('usuario' => $usuario, 'password' => $password));





        if ($admin) {


            return $this->render('NorteSurAdminBundle:Default:principal.html.twig', array('usuario' => $usuario, 'password' => $password));
        } else {



            return $this->render('NorteSurAdminBundle:Default:login.html.twig');
        }
    }

    public function loginAction() {
        return $this->render('NorteSurAdminBundle:Default:login.html.twig');
    }

    public function autentificarAdminAction(Request $request) {


        $nombre = $request->request->get('usuario');
        $contrasena = $request->request->get('password');
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();



        $session->set('usuario', $nombre);
        $session->set('contrasena', $contrasena);

        $admin = $em->getRepository('NorteSurAdminBundle:Admin')->findOneBy(array('usuario' => $nombre, 'password' => $contrasena));


        if ($admin) {



            $response = '200';


            $session->set('admin', $nombre);



            return new Response($response);
        } else {

            $response = '100';
            return new Response($response);
        }
    }

    
    
     public function uploadProductosImgAction() {


        $session = $this->getRequest()->getSession();
        $idProducto = $session->get('idFoto');
        $em = $this->getDoctrine()->getManager();
        $producto =  $em->getRepository('NorteSurComercioBundle:Producto')->findOneBy(array('id' => $idProducto));
        
        $targetDirectorio = 'fotos/';


        if (file_exists($targetDirectorio)) {
            
        } else {




            mkdir("fotos/", 0777, true);
        }



        $targetDir = 'fotos/';

//$targetDir = 'uploads';

        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds

        @set_time_limit(5 * 60);



        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
        $fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';
        
        
        $foto = new Fotos();
       
        $foto ->setEstado('activo');
        $foto ->setFecha(new \DateTime());
        $foto ->setProducto($producto);
        $foto->setUrl($fileName);
        $em->persist($producto);
        $em->persist($foto);
        $em->flush();
        
        


        $fileName = preg_replace('/[^\w\._]+/', '_', $fileName);

        if ($chunks < 2 && file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName)) {
            $ext = strrpos($fileName, '.');
            $fileName_a = substr($fileName, 0, $ext);
            $fileName_b = substr($fileName, $ext);

            $count = 1;
            while (file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName_a . '_' . $count . $fileName_b))
                $count++;

            $fileName = $fileName_a . '_' . $count . $fileName_b;
        }

        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;


        if (!file_exists($targetDir))
            @mkdir($targetDir);


        if ($cleanupTargetDir) {
            if (is_dir($targetDir) && ($dir = opendir($targetDir))) {
                while (($file = readdir($dir)) !== false) {
                    $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

                    if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge) && ($tmpfilePath != "{$filePath}.part")) {
                        @unlink($tmpfilePath);
                    }
                }
                closedir($dir);
            } else {
                die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
            }
        }

        $uno = 'uno';

        if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
            $contentType = $_SERVER["HTTP_CONTENT_TYPE"];

        if (isset($_SERVER["CONTENT_TYPE"]))
            $contentType = $_SERVER["CONTENT_TYPE"];


        if (strpos($contentType, "multipart") !== false) {
            if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
        
                $out = @fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
                if ($out) {
               
                    $in = @fopen($_FILES['file']['tmp_name'], "rb");

                    if ($in) {
                        while ($buff = fread($in, 4096))
                            fwrite($out, $buff);
                    }
                    else
                        die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
                    @fclose($in);
                    @fclose($out);
                    @unlink($_FILES['file']['tmp_name']);
                }
                else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
            }
            else
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
        } else {
            // Open temp file
            $out = @fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
            if ($out) {
                // Read binary input stream and append it to temp file
                $in = @fopen("php://input", "rb");

                if ($in) {
                    while ($buff = fread($in, 4096))
                        fwrite($out, $buff);
                }
                else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');

                @fclose($in);
                @fclose($out);
            }
            else
                die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }

// Check if file has been uploaded
        if (!$chunks || $chunk == $chunks - 1) {
            // Strip the temp .part suffix off 
            rename("{$filePath}.part", $filePath);
        }

        die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
    }

}
