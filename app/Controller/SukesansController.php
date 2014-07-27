<?php

class SukesansController extends AppController{

    public $uses = array('Condition', 'Shop');

    // Sessionコンポーネントを使用する
    public $components = array('Session');

    //　Shopモデルと○○モデルの連携




    function register(){
    }

    function confirm(){
        //$this->request->data["Condition"]["user_id"]=1;　これって何用…？

    }

    function search(){
        $this->Session->write('session',$this->request->data);
        $condition = $this->Session->read('session');
        $this->Condition->save($condition);//検索条件を検索条件DBに保存
        

        $min = $condition['Condition']['budget_min'];
        $max = $condition['Condition']['budget_max'];
        $location = $condition['Condition']['location'];
        $occupation = $condition['Condition']['occupation'];
        $purpose = $condition['Condition']['purpose'];

        
        $params = $this->Shop->find('all', array(
            //検索条件から店舗情報DBを検索
            'conditions' => array(
                
                //最寄り駅検索   
                'Shop.location LIKE' => '%'.$location.'%',
                //予算検索
                'Shop.budget_min >=' => $min,
                'Shop.budget_max <=' => $max,
                //利用シーン検索
                'Shop.purpose LIKE' => '%'.$purpose.'%',
                //絞り込み検索
                'Shop.occupation' => $occupation


            ),
            
            'order' => array('rand()')//検査条件に該当する店舗の配列の順序を入れ替える
            )
        );


        $this->set('result', $params);
    }
}