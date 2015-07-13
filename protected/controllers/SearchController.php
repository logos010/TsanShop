<?php
//Yii::import('application.modules.admiin.model.*');

class SearchController extends ControllerBase{
    
    public function actionSearchInBasic($keyword){
        var_dump($keyword);
        $kw = $keyword;
//        if ($kw){
            $criteria = new CDbCriteria();
            $criteria->compare('name', $kw, true);
            $criteria->compare('price', $kw, true, 'OR');
            $criteria->compare('description', $kw, true, 'OR');
            $criteria->compare('detail', $kw, true, 'OR'); 
//            echo '<pre>';print_r($criteria); echo '</pre>';
            $products = Product::model()->findAll($criteria); 
//            echo count($products);
            $this->renderPartial('search', array(
                'prodSearch' => $products,
                'totalProducts' => count($products),
            ));
//        }
    }
}
