<?php
class Query
{
    private $results;
    private $connection;

    function __construct($servername, $username, $dbpassword, $dbname)
    {
        $this->connection = mysqli_connect(
            $servername, $username, $dbpassword, $dbname
        );
    }

    function Execute($query)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, $query)
            : false);
        return $this->results !== false;
    }

    function Display()
   {
     while(($row = mysqli_fetch_row($this->results)))
       print_r($row);
   }
};

$servername="localhost";
$username="root";
$dbpassword="";
$dbname = "finaldb";
 
$query = new Query($servername, $username, $dbpassword, $dbname);
if($query->Execute(
  'SELECT fname, lname, age, gender, _date, ygroup FROM student'
))
{
   $query->Display();
}
?>