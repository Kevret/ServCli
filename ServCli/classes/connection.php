<?php


Class Connection{

    static public function connect(){

        $host = "localhost";
        $db = "chat_bot___imp_movicel";
        $user = "root";
        $pass = "";

        $link = new PDO("mysql:host=$host;dbname=$db","$user","$pass");

        $link->exec("set names utf8");

        return $link;

      }
}



//$conn = Connection::connect();
//if($conn){
//echo("Conection Successfull");
// } else {
//  echo("Conection Failed");
// }

//?>
