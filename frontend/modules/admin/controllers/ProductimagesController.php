<?php

namespace frontend\modules\admin\controllers;

use frontend\modules\admin\models\Productimages;
use frontend\modules\admin\models\ProductimagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductimagesController implements the CRUD actions for Productimages model.
 */
class ProductimagesController extends Controller
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
     * Lists all Productimages models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductimagesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Productimages model.
     * @param int $imageid Imageid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($imageid)
    {
        return $this->render('view', [
            'model' => $this->findModel($imageid),
        ]);
    }

    /**
     * Creates a new Productimages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Productimages();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'imageid' => $model->imageid]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Productimages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $imageid Imageid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($imageid)
    {
        $model = $this->findModel($imageid);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'imageid' => $model->imageid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Productimages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $imageid Imageid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($imageid)
    {
        $this->findModel($imageid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Productimages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $imageid Imageid
     * @return Productimages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
   
    protected function findModel($imageid)
    {
        if (($model = Productimages::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
