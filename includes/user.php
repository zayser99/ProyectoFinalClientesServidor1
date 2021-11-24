<?php
include 'db.php';

class User extends DB{
    private $nombre;
    private $apellido;
    private $telefono;


    public function userExists($user, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM clientes WHERE TELEFONO_C = :user AND PASS_C = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM clientes WHERE TELEFONO_C = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['NOMBRE_C'];
            $this->apellido = $currentUser['APELLIDO_C'];
            $this->telefono = $currentUser['TELEFONO_C'];
        }
    }

    public function getNombre(){
        return $this->nombre." ".$this->apellido;
    }
}

?>