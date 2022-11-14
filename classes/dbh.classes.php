<?php
//database handler
class Dbh {

    protected function connect(){
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;port=3307;dbname=youcode_clubs', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error! ". $e->getMessage()."<br/>";
            die();

        }
    }

    

}
