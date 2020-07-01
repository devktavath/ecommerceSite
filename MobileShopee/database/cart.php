<?php
//pphp cart class
class Cart
{
    public $db = null;   //so we can access database connection using this property
    public function __construct(DBController $db){
        if(!isset($db->con))return null;
        $this->db = $db;
    }

    //insert into cart table 
    public function insertIntoCart($params = null ,$table = "cart"){
        if($this->db->con!=null){
            if($params!=null){
                //connecting array keys and values by ',' useful in query statement

                $columns = implode(',',array_keys($params));

                 $values = implode(',',array_values($params));
                
                 //create sql query 
                    $query_string = sprintf("INSERT INTO %s(%s) VALUES (%s)",$table,$columns,$values);
                    
                    //execute query
                    $result = $this->db->con->query($query_string);

                    return $result;
            }
        }       
    }
    // to get user_id,item_id and insert into cart table 
    public function addToCart($userid,$itemid){
        if(isset($userid) && isset($itemid)){
            $params=array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            //insert data into cart 
            $result = $this->insertIntoCart($params);
            if($result){
                //reload page
                header("location:".$_SERVER['PHP_SELF']);

            }
        }
    }

    //delete cart item using cart item id 
    public function deleteCart($item_id = null,$table='cart'){
        if($item_id!=null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("location:".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    //calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum=0;
            foreach($arr as $item){
                $sum += floatval($item[0]);//0 index holds price of the product 
            }
            return sprintf('%.2f',$sum);
        }
    }

    //get item_id of shopping cart 
    public function getCartid($cartArray = null,$key ="item_id")
    {
        if($cartArray!=null){
            $cart_id = array_map(function($value) use($key){//outer $key variable cannot be accessed by array_map function so use($key) is used
                return $value[$key];
            },$cartArray);
            return $cart_id;
        }
    }
}