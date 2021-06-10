<?php


class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $con;


        // class constructor
    public function __construct(
        $dbname = "Productdb",
        $tablename = "products",
        $tablename2 = "userinfo",
        $tablename3 = "sellerinfo",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
      $this->dbname = $dbname;
      $this->tablename = $tablename;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);




                    // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $tablename3
            ( s_id INT(11) NOT NULL AUTO_INCREMENT UNIQUE KEY,
             s_name  VARCHAR(50) NOT NULL ,
             s_email VARCHAR(50) NOT NULL PRIMARY KEY ,
               s_pwd VARCHAR(50) NOT NULL 
                



            );";





             if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }




               // sql to create new table
            $sql = "  CREATE TABLE IF NOT EXISTS  $tablename
             (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `name` varchar(128) NOT NULL,
                `description` text NOT NULL,
                 `price` double NOT NULL,
                  `image` varchar(250),
                `created` datetime NOT NULL,
                `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`),
                s_email VARCHAR(50) NOT NULL ,
                FOREIGN KEY (s_email) REFERENCES sellerinfo(s_email)
              );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }


            /* CREATE TABLE IF NOT EXISTS `products` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(128) NOT NULL,
    `description` text NOT NULL,
     `price` double NOT NULL,
      `image` varchar(250),
    `created` datetime NOT NULL,
    `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;*/

                  // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $tablename2
            ( cust_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
             custf_name  VARCHAR(50) NOT NULL ,
             custl_name  VARCHAR(50) NOT NULL ,
             cust_email VARCHAR(50) NOT NULL ,
               cust_pwd VARCHAR(50) NOT NULL 
                



            );";
           



            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }





        }else{
            return false;
        }
    }




    // get product from the database
    public function getData()
    {
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }




}






