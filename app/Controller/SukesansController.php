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
        $this->Condition->save($condition);//検索条件を検索条件DBに保存
        $location = $condition['Condition']['location'];
        $params = $this->Shop->find('all', array(//検索条件から店舗情報DBを検索
            'conditions' => array('Shop.location' => $location),
            'order' => array('Shop.review DESC')//食べログ評価の大きい順に並び替え
            )
        );

        $this->set('result', $params);
    }
}