<?php
    session_start();
    error_reporting(0);
    include_once("./Models/album.php");
    include_once("./Models/fotografia.php");
    include_once("./db.php");
    DB::createInstant();

    class ControlFotografia
    {
        public function Home()
        {
            $foto = Fotografia::consult();
            include_once("./Views/Fotografia/home.php");
        }

        public function Create()
        {
            $id = '';
            $rol = $_SESSION['Rol'];
            if(isset($_GET['idAlbum']))
            {
                $id = $_GET['idAlbum'];
            }
            $album = Album::consult();
            $imgData = '';
            $imageProperties = '';
            if($_POST)
            {
                $al = '';
                $tipoArchivo = '';
                $nombreArchivo = '';
                $tamanoArchivo = '';
                $imagenSubida = '';
                $binariosImagen = '';
                if(isset($_FILES['archivoF']['name']))
                {
                    $tipoArchivo = $_FILES['archivoF']['type'];
                    $nombreArchivo = $_FILES['archivoF']['name'];
                    $tamanoArchivo = $_FILES['archivoF']['size'];
                    $imagenSubida = fopen($_FILES['archivoF']['tmp_name'], 'r');
                    $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                }
                $name = $_POST['nombre'];
                $fecha = $_POST['fecha'];
                $sta = $_POST['estado'];
                $al = $_POST['album'];
                if($id == '')
                {
                    if($al == '0')
                    {
                        $al = null;
                    }
                }
                else 
                {
                    $al = $id;
                }
                
                Fotografia::create(
                    $name,
                    $fecha,
                    $binariosImagen,
                    $sta,
                    $al,
                    $tipoArchivo
                );
                if($rol == 'Admin')
                {
                    header("Location: ./index.php?controller=fotografia&action=home");
                }
                else if($rol == 'User')
                {
                    header("Location: ./index.php?controller=album&action=galery&id=".$id);
                }
            }
            include_once("./Views/Fotografia/create.php");
        }

        public function Edit()
        {
            $idAl = '';
            if(isset($_GET['idAlbum']))
            {
                $idAl = $_GET['idAlbum'];
            }
            $rol = $_SESSION['Rol'];
            $id = $_GET['id'];
            $foto = Fotografia::search($id);
            $album = Album::consult();
            if($_POST)
            {
                $tipoArchivo = '';
                $nombreArchivo = '';
                $tamanoArchivo = '';
                $imagenSubida = '';
                $binariosImagen = '';
                $al = '';
                if(isset($_FILES['archivoF']['name']))
                {
                    $tipoArchivo = $_FILES['archivoF']['type'];
                    $nombreArchivo = $_FILES['archivoF']['name'];
                    $tamanoArchivo = $_FILES['archivoF']['size'];
                    $imagenSubida = fopen($_FILES['archivoF']['tmp_name'], 'r');
                    $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                }
                $name = $_POST['nombre'];
                $fecha = $_POST['fecha'];
                $sta = $_POST['estado'];
                $al = $_POST['album'];
                if($id == '')
                {
                    if($al == '0')
                    {
                        $al = null;
                    }
                }
                else 
                {
                    $al = $id;
                }
                Fotografia::edit(
                    $id,
                    $name,
                    $fecha,
                    $binariosImagen,
                    $sta,
                    $al,
                    $tipoArchivo
                );
                if($rol == 'Admin')
                {
                    header("Location: ./index.php?controller=fotografia&action=home");
                }
                else if($rol == 'User')
                {
                    header("Location: ./index.php?controller=album&action=galery&id=".$idAl);
                }
            }
            include_once("./Views/Fotografia/edit.php");
        }

        public function Delete()
        {
            $rol = $_SESSION['Rol'];
            $idAl = '';
            if(isset($_GET['idAlbum']))
            {
                $idAl = $_GET['idAlbum'];
            }
            $id = $_GET['id'];
            Fotografia::delete($id);
            if($rol == 'Admin')
            {
                include_once("./Views/Fotografia/home.php");
            }
            else if($rol == 'User')
            {
                header("Location: ./index.php?controller=album&action=galery&id=".$idAl);
            }
            
        }
    }
?>