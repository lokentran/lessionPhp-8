<?php

class MyList {
    private $data;


    public function __construct() {
        $this->data = [];
    }

    function getData() {
        return $this->data;
    }

    function addLast($obj) {
        array_push($this->data, $obj);
    }

    function size() {
        return count($this->data);
    } 

    function addFirst($obj) {
        array_unshift($this->data, $obj);
    }

    function add($index, $data) {
        array_splice($this->data, $index, 0, $data);
    }

    function delete($index) {
        array_splice($this->data,$index,1);
    }

    function clear() {
        $this->data = [];
    }

}



$nameList = new MyList();
$nameList->addLast("Hoang");
$nameList->addLast("Tung");
$nameList->addLast("Truong");
$nameList->addFirst("Huynh");

$nameList->add(3, "Trang");
$nameList->delete(4);
$nameList->clear();
echo "<pre>";
print_r($nameList->getData());
echo $nameList->size();  



