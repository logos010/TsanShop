<?php

class UtiService {
    
    public $position;
    
    public static function loadCategoryNameById($tid){
        $term = Term::model()->find(array(
            'condition' => 'id=:tid',
            'params' => array(
                ':tid' => $tid,
            )
        ));
        
        return $term->name;
    }
    
    public static function loadProductById($pid){
        $product = Product::model()->findByPk($pid);
        return $product;
    }
    
    public static function loadBreadcrumbs($tid){
        $term = Term::model()->findByPk($tid);
        return self::getParentName($term->parent_id) . " - " . $term->name;
    }
    
    public static function getParentName($parentID){
        $parent = Term::model()->find(array(
            'condition' => 'id=:pid',
            'params' => array(
                ':pid' => $parentID,
            )
        ));
        return (!is_null($parent)) ? $parent->name: '';
    }
    
    public static function getPromotion($position){        
        $criteria = new CDbCriteria();
        $criteria->condition = "position = :position AND status = 1";
        $criteria->params = array(
            ":position" => $position,
        );
        
        if ($position == 1){
            $promotion = Promotion::model()->findAll($criteria);
        }else{
            $promotion = Promotion::model()->find($criteria);
        }
        
        return $promotion;
    }
            
}
