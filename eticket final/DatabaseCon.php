<?php
class DatabaseCon {
private $dbhost = 'localhost:3306';
private $dbuser = 'root';
private $dbpass = '';
private $conn;
   function __construct()
   		 {
			// echo "inside constructor";
      		$this->conn = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass);
				if(!$this->conn )
					{
  						die('Could not connect: ' . mysql_error());
					}
					//echo 'Connected successfully';
					mysql_select_db( 'eticket1' );
					
        }
   function insertQuery($qry) {
    		echo $qry;
	   $retval = mysql_query( $qry, $this->conn );
			if(!$retval )
			{
 				 die('Could not enter data: ' . mysql_error());
			}
				//echo "Entered data successfully\n";
   }
    function selectQuery($str) {
	//	echo $str;
		$f=0;
		$retval=mysql_query($str,$this->conn);
	$num_rows= mysql_num_rows(mysql_query($str));
//echo $num_rows;
		//if(!$retval)
		if($num_rows>0)
		   {
			 $f=1;  
		   }
		   
		   return $f;
		  
   }
   function selectData($str)
   {
   $retval=mysql_query($str,$this->conn);
   return $retval;
   }
   function updateQuery($str)
   {
   $retval=mysql_query($str,$this->conn);
   if(!$retval)
   {
     die('Could not update data!'.mysql_error());
   }
   
   }
   function closeDatabase()
   {
	  mysql_close($this->conn); 
   }
}


?>