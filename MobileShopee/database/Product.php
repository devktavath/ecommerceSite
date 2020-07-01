<?php

//use of fetch products data
class product
{
    public $db = null; 
    
/*using this constructor we are creating dependancy
injection,using it we are acessing $con variable in 
DBController
*/
    public function __construct(DBController $db)
    {
        if(!isset($db->con))return null;
        $this->db=$db;
    }

    /*method to fetch product data using getData Method
        in this method,we create sql query to fetch data 
        -from product table*/ 

        /*public function getData($table = 'product'){
            $result = $this->db->con->query("SELECT * FROM {$table}");
    
            $resultArray = array();
    
            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }
    
            return $resultArray;
        }*/

        public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        return $resultArray;
        }

        //get product using item id
        public function getProduct($item_id=null,$table='product'){
            if(isset($item_id)){
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");   
        
        $resultArray = array();
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $resultArray[] = $item;
        }
            }
            return $resultArray;
        }

}



