<?php

class MenuFrontPage extends CWidget{
    public $menuCate = null;
    
    public function run(){
        $criteria = new CDbCriteria();
        $criteria->condition = "status = 1 AND type_id = 1 AND parent_id = 0"; // id <= 20
        $criteria->order = "weight";        
        $menu = Menu::model()->findAll($criteria);

        $this->render('Menu', array(
           'menu' => $menu,
           'menuCate' => $this->menuCate,
        ));
    }
}