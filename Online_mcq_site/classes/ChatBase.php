<?php   


class ChatBase{

    // This constructor is used by all the chat classes:

    public function __construct(array $options){

        foreach($options as $k=>$v){
            if(isset($this->$k)){
                $this->$k = $v;
            }
        }
    }
}


?>