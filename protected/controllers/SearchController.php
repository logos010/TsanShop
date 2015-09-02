<?php

//Yii::import('application.modules.admiin.model.*');

class SearchController extends ControllerBase {

    public function actionSearchInBasic() {
        $kw = isset($_GET['kw']) ? $_GET['kw'] : 0;
        
        $criteria = new CDbCriteria();
        $criteria->compare('name', $kw, true);
        $criteria->compare('price', $kw, true, 'OR');
        $criteria->compare('description', $kw, true, 'OR');
        $criteria->compare('detail', $kw, true, 'OR');

//        echo '<pre>';print_r($criteria); echo '</pre>';
        $products = Product::model()->findAll($criteria);
//            echo count($products);
        $this->render('search', array(
            'kw' => $kw,
            'prodSearch' => $products,
            'totalProducts' => count($products),
        ));
    }

}
