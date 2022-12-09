<?php

namespace frontend\modules\admin\controllers;
use Yii;

use frontend\modules\admin\models\Product;
use frontend\modules\admin\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $this->layout = 'main2';
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $dataProvider->getModels()
        ]);
    }

    /**
     * Displays a single Product model.
     * @param int $product_id Product ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($product_id)
    {
        $this->layout = 'main2';
        return $this->render('view', [
            'model' => $this->findModel($product_id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())){
                $model->save(False);
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }

        $this->layout = 'main2';
        return $this->render('create', [
            'model' => $model,
            //'id' => $id
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $product_id Product ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
   public function actionUpdate($product_id)
    {
        $model = $this->findModel($product_id);
        if ($model->load(Yii::$app->request->post())) {
                     
                $model->save(FALSE);
            return $this->redirect(['index', 'product_id' => $model->product_id]);
           }

        $this->layout = 'main2';
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $product_id Product ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($product_id)
    {
        $this->findModel($product_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $product_id Product ID
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionImageupload()
    {
        $model = new \frontend\modules\admin\models\Productimages();

        $imageFile = UploadedFile::getInstance($model, 'IMAGE_URL');

        $directory = Yii::getAlias('@frontend/web/img/temp') . DIRECTORY_SEPARATOR . Yii::$app->session->id . DIRECTORY_SEPARATOR;
        if (!is_dir($directory)) {
            FileHelper::createDirectory($directory);
        }

        if ($imageFile) {
            $uid = uniqid(time(), true);
            $fileName = $uid . '.' . $imageFile->extension;
            $filePath = $directory . $fileName;
            if ($imageFile->saveAs($filePath)) {

                $path = '/frontend/web/img/temp/' . Yii::$app->session->id . DIRECTORY_SEPARATOR . $fileName;
                 //save file to db
                $model->IMAGE_URL=$path;
                $model->productid=Yii::$app->request->get('id');
                $model->name=$fileName;
                $model->FILE_SIZE=$imageFile->size;
                $model->ACTUAL_NAME=$imageFile->name;
                $model->uploadedby=1;
                $model->save(FALSE);
                return Json::encode([
                    'files' => [
                        [
                            'name' => $imageFile->name,
                            'size' => $imageFile->size,
                            'username'=>$model->uploadedby,
                            'url' => $path,
                            'thumbnailUrl' => $path,
                            'deleteUrl' => 'image-delete?name=' . $fileName,
                            'deleteType' => 'POST',

                        ],
                    ],
                ]);
            }
        }

        return '';
    }
    public function actionImageDelete($name=null)
    {
         //Mark image as deleted
         if($name==null){
          $name=Yii::$app->request->post('name');
           }
         $filemodel= new \frontend\modules\admin\models\Productimages();
         //$filemodel->DELETED=1;
         $user= 1;
         $files= $filemodel->find()->where(['name'=>$name])->one();

          if($files){

           $files->delete();   
            }
        $directory = Yii::getAlias('@frontend/web/img/temp') . DIRECTORY_SEPARATOR . Yii::$app->session->id;
        if (is_file($directory . DIRECTORY_SEPARATOR . $name)) {

             unlink($directory . DIRECTORY_SEPARATOR . $name);
         }

        return 1;//Json::encode($output);
    }
     public function actionUploadimage($id)
    {

        $model = new \frontend\modules\admin\models\Productimages();
        $file = $model->imageUpload($id);
        $modelproduct = new \frontend\modules\admin\models\Product();
        $product = $modelproduct->find()->where(['product_id'=>$id])->one();
        //$type='productimage';
        // $filesmodel = new \frontend\modules\adimin\models\Product();
        // $files= $filesmodel->find()->where(['employee_id'=>Yii::$app->user->identity->employee_id])->andwhere(['leaveid'=>$id])->all();
        //$files = $model->find()->where(['product_id'=>$product_id]);

        return $this->render('imageuploadform', [
            'model' => $model,
            'id' => $id,
            'file' => $file,
            'product' => $product
        ]);
    }
    protected function findModel($product_id)
    {
        if (($model = Product::findOne(['product_id' => $product_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

   