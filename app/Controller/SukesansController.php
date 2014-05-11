<?php

class SukesansController extends AppController
{

    public $uses = array('Condition');

    // Sessionコンポーネントを使用する
    public $components = array('Session');

    function register()
    {
    }

    function confirm()
    {
        $this->request->data["Condition"]["user_id"]=1;
        $this->Session->write('hozon',$this->request->data);
    }

    function complete()
    {
        $kategori = $this->Session->read('hozon');
        $this->Condition->save($kategori);
        $this->redirect('/sukesans/register');        
    }


}  