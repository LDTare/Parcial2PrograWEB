<?php

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
            $album = Album::consult();
            $imgData = '';
            $imageProperties = '';
            if($_POST)
            {
                if(count($_FILES) > 0)
                {
                    if(is_uploaded_file($_FILES['archivoF']['tmp_name']))
                    {
                        $imgData = addslashes(file_get_contents($_FILES['archivoF']['tmp_name']));
                        $imageProperties = getimageSize($_FILES['archivoF']['tmp_name']);
                    }
                }
                
                $name = $_POST['nombre'];
                $fecha = $_POST['fecha'];
                $sta = $_POST['estado'];
                $al = $_POST['album'];
                if($al == '0')
                {

                }
                Fotografia::create(
                    $name,
                    $fecha,
                    $imgData,
                    $sta,
                    $al,
                    $imageProperties['mime']
                );
                header("Location: ./index.php?controller=fotografia&action=home");
            }
            include_once("./Views/Fotografia/create.php");
        }

        public function Edit()
        {
            $id = $_GET['id'];
            $foto = Fotografia::search($id);
            $album = Album::consult();
            $imgData = $foto['Fotografia'];
            $imageProperties = $foto['DataType'];
            if($_POST)
            {
                if(is_uploaded_file($_FILES['archivoF']['tmp_name']))
                {
                    $imgData = addslashes(file_get_contents($_FILES['archivoF']['tmp_name']));
                    $imageProperties = getimageSize($_FILES['archivoF']['tmp_name']);
                }
                $name = $_POST['nombre'];
                $fecha = $_POST['fecha'];
                $sta = $_POST['estado'];
                $al = $_POST['album'];
                Fotografia::edit(
                    $id,
                    $name,
                    $fecha,
                    $imgData,
                    $sta,
                    $al,
                    $imageProperties['mime']
                );
                header("Location: ./index.php?controller=fotografia&action=home");
            }
            include_once("./Views/Fotografia/edit.php");
        }

        public function Delete()
        {
            $id = $_GET['id'];
            Fotografia::delete($id);
            include_once("./Views/Fotografia/create.php");
        }

        public function ImageView()
        {
            $id = $_GET['id'];
            $foto = Fotografia::search($id);
            header("Content-type: ". $foto['DataType']);
            return $foto['Fotografia'];
        }
    }
?>