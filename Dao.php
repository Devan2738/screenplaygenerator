<?php
class Dao {

#mysql://b007dde3ed6cbd:def99b02@us-cdbr-iron-east-05.cleardb.net/heroku_f36640796dba974?reconnect=true

 private $host = "us-cdbr-iron-east-05.cleardb.net";
 #private $db = "heroku_f36640796dba974"; #
 private $db = "heroku_d66a31f2e552f3e";
 #private $user = "b007dde3ed6cbd"; #
 private $user = "b2cf23ed5d39cc";
 #private $pass = "def99b02"; #
 private $pass = "f49471ca";
 #mysql://b2cf23ed5d39cc:f49471ca@us-cdbr-iron-east-05.cleardb.net/heroku_d66a31f2e552f3e?reconnect=true

#$url = parse_url(getenv("//b2cf23ed5d39cc:f49471ca@us-cdbr-iron-east-05.cleardb.net/heroku_d66a31f2e552f3e?reconnect=true"));

#$server = $url["host"];
#$username = $url["user"];
#$password = $url["pass"];
#$db = substr($url["path"], 1);

 public function getConnection () {
   try {
        $conn = new mysqli($host, $user, $pass, $db);
        return $conn;
      } catch (Exception $e) {
        echo "connection failed: " . $e->getMessage();
      }
 }

 public function getWords() {
     $conn = $this->getConnection();
     return $conn->query("SELECT * FROM words LIMIT 100");
   }

}
