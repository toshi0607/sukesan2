<?php

class SukesansController extends AppController{

    public $uses = array('Condition', 'Shop');

    // Sessionコンポーネントを使用する
    public $components = array('Session');

    function register(){
    }

    function confirm(){
        //$this->request->data["Condition"]["user_id"]=1;　これって何用…？

    }

    function search(){
        $this->Session->write('session',$this->request->data);
        $condition = $this->Session->read('session');
        $this->Condition->save($condition);//検索条件を検索条件DBに保存
        

        $location = $condition['Condition']['location'];
        $occupation = $condition['Condition']['occupation'];
        $purpose = $condition['Condition']['purpose'];

        
        $params = $this->Shop->find('all', array(//検索条件から店舗情報DBを検索
            'conditions' => array(
                
                //最寄り駅検索   
                'Shop.location LIKE' => '%'.$location.'%',
                //利用シーン検索
                'Shop.purpose' => $purpose,
                //絞り込み検索
                'Shop.occupation' => $occupation


            ),
            'order' => array('Shop.review DESC')//食べログ評価の大きい順に並び替え
            )
        );

        $this->set('result', $params);
    }
}