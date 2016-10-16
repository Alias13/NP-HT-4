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
        elseif ($this->list[count($this->list) - 1][0] === $listItem){
            $this->list[count($this->list) - 2][1] = 0;
            array_pop($this->list);
            return true;
        }
        else {
            for ($i = 0; $i < count($this->list); $i++) {
                if ($this->list[$i][0] === $listItem) {
                    $this->list[$i - 1][1] = $this->list[$i + 1][0];
                    unset($this->list[$i]);
                    return true;
                    #break;
                }
            }
        }
        return false;
    }
}