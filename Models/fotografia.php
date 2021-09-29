<?php

    class Fotografia
    {
        public $id;
        public $name;
        public $fecha;
        public $fotografia;
        public $estado;
        public $idalbum;
        public $dataf;
        public function __construct(
            $id,
            $name, 
            $fecha,
            $fotografia,
            $estado,
            $idalbum,
            $dataf
        )
        {
            $this -> IdFoto = $id;
            $this -> Name = $name;
            $this -> Fecha = $fecha;
            $this -> Foto = $fotografia;
            $this -> Estado = $estado;
            $this -> IdAlbum = $idalbum;
            $this -> DataFoto = $dataf;
        }

        public static function consult()
        {
            $listFto = [];
            $conectionDB=DB::createInstant();
            $sql=$conectionDB->query("SELECT * FROM fotografia");
            foreach($sql->fetchAll() as $fto)
            {
                $listFto []= new Fotografia(
                    $fto['IdFotografia'],
                    $fto['Nombre'],
                    $fto['Fecha'],
                    $fto['Fotografia'],
                    $fto['Estado'],
                    $fto['IdAlbum'],
                    $fto['DataType']
                ); 
            }
            return $listFto;
        }

        public static function create($nombre, $fecha, $fotografia, $estado, $idalbum, $datafot)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("INSERT INTO fotografia(Nombre, Fecha, Fotografia, Estado, IdAlbum, DataType) VALUES (?,?,?,?,?,?)");
            $sql->execute(array($nombre, $fecha, $fotografia, $estado, $idalbum, $datafot));
        }

        public static function delete($id)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("UPDATE fotografia SET Estado= 4 WHERE IdFotografia = ?");
            $sql->execute(array($id));
        }
        public static function search($id)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("SELECT * FROM fotografia WHERE IdFotografia = ?");
            $sql->execute(array($id));
            $foto = $sql->fetch();
            return new Fotografia(
                $foto['IdFotografia'],
                $foto['Nombre'],
                $foto['Fecha'],
                $foto['Fotografia'],
                $foto['Estado'],
                $foto['IdAlbum'],
                $foto['DataType']
            );
        }

        public static function edit($id, $nombre, $fecha, $fotografia, $estado, $datafoto ,$idalbum)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("UPDATE `fotografia` SET Nombre=? , Fecha=?, Fotografia=?,Estado=?,IdAlbum=?, DataType = ? WHERE IdFotografia = ?");
            $sql->execute(array($nombre, $fecha, $fotografia, $estado, $idalbum,$datafoto,$id));
        }

        public static function galery($idalbum)
        {
            $listFto = [];
            $conectionDB=DB::createInstant();
            $sql=$conectionDB->query("SELECT * FROM fotografia WHERE IdFotografia = ?");
            $sql->execute(array($idalbum));
            foreach($sql->fetchAll() as $fto)
            {
                $listFto []= new Fotografia(
                    $fto['IdFotografia'],
                    $fto['Nombre'],
                    $fto['Fecha'],
                    $fto['Fotografia'],
                    $fto['Estado'],
                    $fto['IdAlbum'],
                    $fto['DataType']
                ); 
            }
            return $listFto;
        }
    }
?>