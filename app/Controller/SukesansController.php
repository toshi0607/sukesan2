<?php

class SukesansController extends AppController{

    public $uses = array('Condition', 'Shop');

    // Sessionコンポーネントを使用する
    public $components = array('Session');

    function register(){
    }

    function confirm(){
        //$this->request->data["Condition"]["user_id"]=1;　これって何用…？
        $this->Session->write('session',$this->request->data);
    }

    function search(){

        $condition = $this->Session->read('session');
        $this->Condition->save($condition);
        $location = $condition['Condition']['location'];
        $this->set('test', $location); 
        $params = $this->Shop->find('all', array(
            'conditions' => array('Shop.location' => $location)
            ));
        $this->set('result', $params);
    }
}