<?php

namespace app\vendor\yiimodules\categories\controllers;

use Yii;
use app\vendor\yiimodules\categories\models\Categories;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoriesController implements the CRUD actions for Categories model.
 */
class CategoriesController extends Controller
{
    /**
     * Deletes an existing Categories model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
		$counts = Categories::find()->where(['parent_id'=>$id])->count();
		if($counts==0){
			Categories::deleteImages($id);
			Yii::$app->getSession()->setFlash('success', 'Category deleted successfully.');
			$model->delete();
		} else{
			Yii::$app->getSession()->setFlash('warning', 'This category is parent of '.$counts.' subcategories to remove this category delete all sub categories.');
		}
        return $this->redirect(['/categories']);
    }

    /**
     * Finds the Categories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Categories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Categories::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
