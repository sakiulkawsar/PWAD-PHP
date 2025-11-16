<?php 
class student{
    public $id;
    public $name;
    public $batch;
    public $file;

    function __construct($file)
    {
       $this->file = $file;
    }
    function result ($fid){
        $data = file($this->file);
        foreach($data as $line){
       list($id, $name, $batch ,$result ) = explode("", $line);
       if($fid == $id){
        return $id . "," . $name . "," . $batch . "," . $result;
       }
        }
    }
}

?>