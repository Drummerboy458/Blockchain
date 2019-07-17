<?php

namespace frontend\controllers;

use Yii;
use common\models\Merchandise;
use common\models\MerchandiseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MerchandiseController implements the CRUD actions for Merchandise model.
 */
class MerchandiseController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Merchandise models.
     * @return mixed
     */
    public function actionIndex()
    {
       $results = Merchandise::getTrans();
        return $this->render('index', [
            'transports' => $results,
        ]);
    }

     public function actionDone()
    {
       $results = Merchandise::getDone();
        return $this->render('done', [
            'histories' => $results,
        ]);
    }

     public function actionMyPocket()
    {
       $results = Merchandise::getPocket();
        return $this->render('mypockets', [
            'pockets' => $results,
        ]);
    }

     public function actionConfirm()
    {
       $model = new Merchandise();
       $results = $model->getConfirms();
       if (Yii::$app->request->post())   //确认收货
       {
            if($model->yes($results[0]['merchandiseID']))
            {
                \Yii::$app->getSession()->setFlash('success', '确认收货成功!');
            }
       }
       else
            echo "拒绝收货！";
        return $this->render('confirm', [
        'confirms' => $results,
        'model' => $model,
    ]);
    }

    /**
     * Displays a single Merchandise model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Merchandise model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Merchandise();

        if ($model->load(Yii::$app->request->post()) ){
            $model->nowNode = '1';
            $model->beginning = (string)Yii::$app->user->identity->id;
    
            if($model->save())
            {
               
                if($model->addOrder())
                {   
                    
                    return $this->redirect(['view', 'id' => $model->merchandiseID]);
                }   
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Merchandise model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->merchandiseID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Merchandise model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Merchandise model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Merchandise the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Merchandise::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
