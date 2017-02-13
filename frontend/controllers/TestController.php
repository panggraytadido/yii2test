<?php

namespace frontend\controllers;

use Yii;
use app\models\Test;
use app\models\TestSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\bussinessmodels\TestBussiness;
use app\models\Penjualanbarang;

/**
 * TestController implements the CRUD actions for Test model.
 */
class TestController extends Controller {

    public $layout = 'application'; //pengaturan layout

    /**
     * @inheritdoc
     */

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionTestss($id) {
        $model = new TestBussiness();
        $data = TestBussiness::findAll(['id' => 1]);
        print_r($data);
    }

    /**
     * Lists all Test models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new TestSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Test model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Test model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Test();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Test model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    public function actionFetchData() {
        $connection = Yii::$app->getDb();
        //$penjualan = Penjualanbarang::findAll(['jenispembayaran'=>'kredit','jenispembayaran'=>'tunai']);
        $sql = "select barangid,divisiid,pelangganid,tanggal,id from  penjualanbarang";

        $command = $connection->createCommand($sql);
        $result = $command->queryAll();
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $data = array(
            "draw" => 1,
            "recordsTotal" => 2,
            "recordsFiltered" => 57,
            "data" => $result
        );

        return $data;
    }

    /**
     * Deletes an existing Test model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Test model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Test the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Test::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
