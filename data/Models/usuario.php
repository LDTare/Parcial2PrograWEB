<?php

    class Usuario
    {
        public $id;
        public $name;
        public $lastn;
        public $email;
        public $user;
        public $pass;
        public $rol;
        public $estado;

        public function __construct(
            $id,
            $name,
            $lastn,
            $email,
            $user,
            $pass,
            $rol,
            $estado
        )
        {
            $this -> IdUser = $id;
            $this -> Name = $name;
            $this -> LastName = $lastn;
            $this -> Email = $email;
            $this -> Usuario = $user;
            $this -> Password = $pass;
            $this -> Rol = $rol;
            $this -> Estado = $estado;
        }

        public static function consult()
        {
            $listU = [];
            $conectionDB=DB::createInstant();
            $sql=$conectionDB->query("SELECT * FROM usuario");
            foreach($sql->fetchAll() as $User)
            {
                $listU []= new Usuario(
                    $User['IdUser'],
                    $User['Nombre'],
                    $User['Apellido'],
                    $User['Email'],
                    $User['NameUser'],
                    $User['Pasword'],
                    $User['Rol'],
                    $User['Estado']
                ); 
            }
            return $listU;
        }

        public static function create($name, $lastname, $email, $user, $pas,$rol ,$estado)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("INSERT INTO usuario(Nombre, Apellido, Email, NameUser, Pasword,Rol ,Estado) VALUES (?,?,?,?,?,?,?)");
            $sql->execute(array($name, $lastname, $email, $user ,$pas,$rol ,$estado));
        }

        public static function delete($id)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("UPDATE usuario SET Estado= 4 WHERE IdUser = ?");
            $sql->execute(array($id));
        }

        public static function search($id)
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("SELECT * FROM usuario WHERE IdUser = ?");
            $sql->execute(array($id));
            $user = $sql->fetch();
            return new Usuario(
                $user['IdUser'],
                $user['Nombre'],
                $user['Apellido'],
                $user['Email'],
                $user['NameUser'],
                $user['Pasword'],
                $user['Rol'],
                $user['Estado']
            );
        }

        public static function edit($id,$name, $lastname, $email, $user, $pas, $rol ,$estado )
        {
            $conectionDB=DB::createInstant();
            $sql = $conectionDB->prepare("UPDATE usuario SET Nombre = ?, Apellido = ?, Email = ?, NameUser = ?, Pasword = ?, Rol = ? ,Estado = ? WHERE IdUser = ?");
            $sql->execute(array($name, $lastname, $email, $user ,$pas, $rol ,$estado, $id));
        }
    }

?>