<?php 

namespace classes;

require "DB.php";

class Mysql implements DB {

    public function connect()
    {
        echo "We're connecting to Database";
    }

    public function disConnect()
    {
        echo "We're disConnecting to Database";
    }
}