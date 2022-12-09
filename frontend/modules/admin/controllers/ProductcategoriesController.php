<?php

namespace frontend\modules\admin\controllers;

use frontend\modules\admin\models\Productcategories;
use frontend\modules\admin\models\ProductcategoriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * ProductcategoriesController implements the CRUD actions for Productcategories model.
 */
class ProductcategoriesController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Productcategories models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductcategoriesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Productcategories model.
     * @param int $CategoryID Category ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($CategoryID)
    {
        return $this->render('view', [
            'model' => $this->findModel($CategoryID),
        ]);
    }

    /**
     * Creates a new Productcategories model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Productcategories();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'CategoryID' => $model->CategoryID]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Productcategories model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $CategoryID Category ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($CategoryID)
    {
        $model = $this->findModel($CategoryID);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CategoryID' => $model->CategoryID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Productcategories model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $CategoryID Category ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($CategoryID)
    {
        $this->findModel($CategoryID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Productcategories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $CategoryID Category ID
     * @return Productcategories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CategoryID)
    {
        
        if (($model = Productcategories::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
