<?php

class SukesansController extends AppController{

    public $uses = array('Condition', 'Shop');

    // Sessionコンポーネントを使用する
    public $components = array('Session');

    //　Shopモデルと○○モデルの連携


    function register(){
    }

    function news(){
    }

    function search(){


        $this->Session->write('session',$this->request->data);
        $condition = $this->Session->read('session');
        $this->Condition->save($condition);//検索条件を検索条件DBに保存
        

        $min = $condition['Condition']['budget_min'];
        $max = $condition['Condition']['budget_max'];
        $area = $condition['Condition']['area'];
        $search = $condition['Condition']['search'];
        
        $params = $this->Shop->find('all', array(
            //検索条件から店舗情報DBを検索
            'conditions' => array(
                
                //エリア検索   
                'Shop.area LIKE' => '%'.$area.'%',
                //予算検索
                'Shop.budget_min >=' => $min,
                'Shop.budget_max <=' => $max,
                //絞り込み検索
                'Shop.search LIKE' => '%'.$search.'%',



            ),
            
            'order' => array('rand()')//検索条件に該当する店舗の配列の順序を入れ替える
            )
        );


        $this->set('result', $params);
    }

    function research(){



        $condition = $this->Session->read('session');
        

        $min = $condition['Condition']['budget_min'];
        $max = $condition['Condition']['budget_max'];
        $area = $condition['Condition']['area'];
        $search = $condition['Condition']['search'];
        
        $params = $this->Shop->find('all', array(
            //検索条件から店舗情報DBを検索
            'conditions' => array(
                
                //エリア検索   
                'Shop.area LIKE' => '%'.$area.'%',
                //予算検索
                'Shop.budget_min >=' => $min,
                'Shop.budget_max <=' => $max,
                //絞り込み検索
                'Shop.search LIKE' => '%'.$search.'%',



            ),
            
            'order' => array('rand()')//検索条件に該当する店舗の配列の順序を入れ替える
            )
        );


        $this->set('result', $params);

        $this->render('search');
    }





}