<?php

class ProductNewFavourite extends CWidget {
    
    public $status;
    
    public function run(){
        $criteria = new CDbCriteria();
        $products = Product::model()->findAll();
        
    }
}