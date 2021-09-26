<?php
    class Album
    {
        public $id;
        public $iuser;
        public $name;
        public $fecha;
        public $estado;

        public function __construct(
            $id,
            $iuser,
            $name,
            $fecha,
            $estado
        )
        {
            $this -> IdAlbum = $id;
            $this -> IdUser = $iuser;
            $this -> Nombre = $name;
            $this -> Fecha = $fecha;
            $this -> Estado = $estado;
        }
        
        public static function consult()
        {
            $listAlbum = [];
            $conectionDB=DB::createInstant();
            $sql=$conectionDB->query("SELECT * FROM album");
            foreach($sql->fetchAll() as $albu)
            {
                $listAlbum [] = new Album(
                    $albu['IdAlbum'],
                    $albu['IdUser'],
                    $albu['Nombre'],
                    $albu['Fecha'],
                    $albu['Estado']
                );
            }
            return $listAlbum;
        }

        public static function create($idUser, $nombre, $fecha, $estado)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("INSERT INTO album(IdUser, Nombre, Fecha, Estado) VALUES (?, ?, ?, ?)");
            $sql->execute(array($idUser, $nombre, $fecha, $estado));
        }

        public static function delete($id)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("UPDATE album SET Estado=4 WHERE IdAlbum=?");
            $sql->execute(array($id));
        }

        public static function search($id)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("SELECT * FROM album WHERE IdAlbum=?");
            $sql->execute(array($id));
            $album = $sql->fetch();
            return new Album($album['IdAlbum'], $album['IdUser'], $album['Nombre'], $album['Fecha'], $album['Estado']);
        }

        public static function edit($id ,$idUser, $nombre, $fecha, $estado)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("UPDATE album SET IdUser = ?, Nombre = ?, Fecha = ?, Estado = ? WHERE IdAlbum = ?");
            $sql -> execute(array($idUser, $nombre, $fecha, $estado, $id));
        }
    }
?>