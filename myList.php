<?php
class myList
{
    private $list = array();

    public function isEmpty(){
        if(!empty($this->list)){
            return true;
        }
        else{
            return false;
        }
    }
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
    public function addToStart($listItem){
        {
            $arr = array();
            if (!$this->isEmpty()){
                $arr[] = $listItem;
                $arr[] = 0;
                $this->list[] = $arr;
            }
            else {
                $arr[] = $listItem;
                $arr[] = $this->list[0][0];
                array_unshift($this->list, $arr);
            }
        }
    }
    public function deleteItem($listItem){
        if (!in_array($listItem, $this->list)){
            return false;
        }
        else{
         #   array_search();
        }
    }
}

#$newList = new myList();
#$newList->addToEnd("aaa");
#$newList->addToStart("bbb");
#$newList->addToStart("ccc");
#$newList->addToEnd("ddd");
#var_dump($newList->isEmpty());
#var_dump($newList->list);
