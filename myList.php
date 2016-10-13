<?php
class myList
{
    public $list = array();

    public function addToEnd($listItem)
    {
        $arr = array();
        if (count($this->list) == 0){
            $arr[] = $listItem;
            $arr[] = 0;
            $this->list[] = $arr;
        }
        elseif (count($this->list) > 0){
            $arr[] = $listItem;
            $arr[] = 0;
            $this->list[] = $arr;
            $this->list[count($this->list) - 2][1] = &$arr[0];
        }
    }
}

$newList = new myList();
$newList->addToEnd("aaa");
$newList->addToEnd("bbb");
$newList->addToEnd("ccc");
$newList->addToEnd("ddd");

var_dump($newList->list);
