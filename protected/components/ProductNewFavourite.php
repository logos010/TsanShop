<?php

class ProductNewFavourite extends CWidget {
    
    public $status; //commercial status: 1 - New, 2 - Favourite
    
    public function run(){
        $criteria = new CDbCriteria();
        $criteria->condition = "status = 1 AND commercial_status =:cs";
        $criteria->params = array(
            ':cs' => $this->status
        );
        $criteria->order = "id DESC";
        $criteria->limit = 6;
        
        $products = Product::model()->findAll($criteria);
        $this->render("ProductNewFavourite", array(
            "products" => $products
        ));
    }
}