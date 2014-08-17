<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email' );
 
class InquiriesController extends AppController {
 
    public $helpers = array ( 'form', 'Xform.Xformjp', 'Cakeplus.Formhidden' );
    public $components = array('Session');


    public  function index(){
        
    }
 
  public function form() {
    if ($this->request->is('post')) {
      if (!empty($this->request->data)) {
 
        //valideteチェック
        $this->Inquiry->set($this->request->data);
        if($this->Inquiry->validates()){
          //submitのタイプの判定
          if (isset($_POST['confirm'])) {
            $type = 'confirm';
          } elseif (isset($_POST['submit'])) {
            $type = 'submit';
          } elseif (isset($_POST['back'])) {
            $type = 'back';
          }
          //sbumit tyep ごとに処理を分ける
          switch ($type) {
            case 'back': //修正などがあった時のback処理
              break;
 
            case 'confirm': //確認画面の処理
              //これを宣言するとフォームがフリーズしてくれる
              $this->params['xformHelperConfirmFlag'] = true;
 
              break;
            case 'submit': //送信する
 
              $vars = $this -> request -> data['Inquiry'];
              $vars['update_date_set'] = date ( 'Y-m-d H:i:s', time() );
 
              $email = new CakeEmail ();
 
              $email  -> config ( 'inquiry' )
                  // 送信元
                  //->from(array($this->request->data['Contact']['email'] => '○○お問い合わせ'))
                  // 送信先
                  ->to('sukesan2014@gmail.com')
                  // BCC, お問い合わせした人にもコピーを送りたい時とか
                  ->bcc('s.toshi0607@gmail.com')
                  // テンプレート変数設定
                  -> viewVars( $vars )
                  // 使用するテンプレートの設定, 本文の方 contact, レイアウト contact
                  -> template('inquiry', 'inquiry')
                  // メール件名
                  -> subject('お問い合わせ')
                  ;
 
              if ($this->Inquiry->save($this->request->data)) {
 
                if ( $email -> send () ) {
                  $this -> Session -> setFlash ( 'お問合せが完了しました！' );
                  $this -> redirect ( '/sukesans/register' );
                } else {
                  $this -> Session -> setFlash ( 'お問い合わせに失敗しました' );
                }
 
              } else {
                $this->Session->setFlash( 'データの保存に失敗しました' );
              }
              break;
          }
        }
      }
    }
  }
}