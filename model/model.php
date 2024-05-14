<?php
class Model{
public $data=array(
    '01'=>'Tom',
    '02'=>'Jack',
    '03'=>'Lisa',
);
public function getid($key){
return $this->data[$key];
}
}