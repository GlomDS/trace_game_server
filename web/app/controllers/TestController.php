<?php

class TestController extends ControllerBase {

	public function indexAction() {
		// user_tから全レコードを取得
		$users = UserT::find ();

		// view側に変数を設定する
		$this->view->setVars ( array (
				'users' => $users
		) );
	}
}

