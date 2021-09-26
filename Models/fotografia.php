<?php

    class Fotografia
    {
        public $id;
        public $name;
        public $fecha;
        public $fotografia;
        public $estado;
        public $idalbum;
        public function __construct(
            $id,
            $name, 
            $fecha,
            $fotografia,
            $estado,
            $idalbum
        )
        {
            $this -> IdFoto = $id;
            $this -> Name = $name;
            $this -> Fecha = $fecha;
            $this -> Foto = $fotografia;
            $this -> Estado = $estado;
            $this -> IdAlbum = $idalbum;
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
                    $fto['IdAlbum']
                ); 
            }
            return $listFto;
        }

        public static function create($nombre, $fecha, $fotografia, $estado, $idalbum)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("INSERT INTO fotografia(Nombre, Fecha, Fotografia, Estado, IdAlbum) VALUES (?,?,?,?,?)");
            $sql->execute(array($nombre, $fecha, $fotografia, $estado, $idalbum));
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
                $foto['IdAlbum']
            );
        }

        public static function edit($id, $nombre, $fecha, $fotografia, $estado, $idalbum)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("UPDATE `fotografia` SET Nombre=? , Fecha=?, Fotografia=?,Estado=?,IdAlbum=? WHERE IdFotografia = ?");
            $sql->execute(array($nombre, $fecha, $fotografia, $estado, $idalbum, $id));
        }
    }
?>