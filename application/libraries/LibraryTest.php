<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//ライブラリのテスト
class LibraryTest {

	//コンストラクタ
    public function __construct(){
    	
    }

    //コントローラーで呼ぶ
    public function displayControllers(){
    	echo "Controllers";
    }

    //Viewで呼ぶ
    public function displayView(){
    	echo "View";
    }
}