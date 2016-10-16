<?php
class myList
{
    private $list = array();

    public function isEmpty(){
        if(empty($this->list)){
            return true;
        }
        else{
            return false;
        }
    }
    public function addToEnd($listItem){
        if(!$this->isEmpty()){
             $this->list[count($this->list) - 1][1] = $listItem;
        }
        $arr[] = $listItem;
        $arr[] = 0;
        $this->list[] = $arr;
    }
    public function addToStart($listItem){
        $arr[] = $listItem;
        if($this->isEmpty()) {
            $arr[] = 0;
        }
        else {
            $arr[] = $this->list[0][0];
        }
        array_unshift($this->list, $arr);
    }
    public function numberOfSame($listItem){
        $numOfSame = 0;
        foreach ($this->list as $value) {
            if ($value[0] === $listItem) {
                $numOfSame++;
            }
        }
        return $numOfSame;
    }
    public function deleteItem($listItem){
        if ($this->list[0][0] === $listItem){
            array_shift($this->list);
            return true;
        }
        elseif (end($this->list)[0] === $listItem){
            $arrkeys = array_keys($this->list);
            $key = array_search(end($this->list), $this->list);
            $key2 = array_search($key, $arrkeys);
            $this->list[$arrkeys[$key2 - 1]][1] = 0;
            array_pop($this->list);
            return true;
        }
        else {
            $arrkeys = array_keys($this->list);
            print_r($arrkeys);
            foreach ($this->list as $value) {
                if ($value[0] === $listItem) {
                    print_r($value);
                    $key = array_search($value, $this->list);
                    $key2 = array_search($key, $arrkeys);
                    $this->list[$arrkeys[$key2 - 1]][1] = $value[1];
                    unset($this->list[$key]);
                    return true;
                }
            }
        }
        return false;
    }
}

