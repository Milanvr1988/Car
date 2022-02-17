<?php 

class Posts
{   
    public $alertPost = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function InsertPost($table)  
    {
        $title = filter_input(INPUT_POST,"insert_title");
        $area_image = "pictures/".basename($_FILES['insert_picture']['name']); 
        $tmp = $_FILES['insert_picture']['tmp_name'];
        $description = filter_input(INPUT_POST,"insert_description");
        $price = filter_input( INPUT_POST,"car_price",FILTER_SANITIZE_NUMBER_FLOAT);
        

        move_uploaded_file($tmp, $area_image);
        
        $sql = " INSERT INTO {$table} VALUES(NULL,?,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->execute([$title,$area_image, $description,$price]);

        if ($query) {
            $this->alertPost = true;
        }
    }
    public function SelectAllPost($table)     
    {
        $sql = "SELECT * FROM {$table}";
        $query = $this->db->prepare($sql);
        $query->execute();
        $getPost = $query->fetchall(PDO::FETCH_OBJ);
        // var_dump($getPost);
        return $getPost;
    }
}


?>