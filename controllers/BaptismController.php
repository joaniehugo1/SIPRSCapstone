<?php

namespace app\controllers;

use Yii;
use app\models\Baptism;
use app\models\BaptismSearch;
use app\models\Persons;
use app\models\Priest;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\AccessRule;
use yii\filters\AccessControl;

/**
 * BaptismController implements the CRUD actions for Baptism model.
 */
class BaptismController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            // 'access' => [
            //     'class' => AccessControl::className(),
            //     'ruleConfig' => [
            //         'class' => AccessRule::className(),
            //     ],
            //     'only' => ['index','create','update','delete'],
            //     'rules'=>[
            //         [
            //             'actions'=>['index'],
            //             'allow' => true,
            //             'roles' => ['@']
            //         ],
            //         [
            //             'actions' => ['index','delete'],
            //             'allow' => true,
            //         ]
            //     ],
            // ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Baptism models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BaptismSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Baptism model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Baptism model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Baptism();
        $persons = Persons::findOne($id);
        $priest = Priest::find()->where(['priest_role' => 0])->one();

        $model->persons_id = $id;
        $model->parish_priest = $priest->parish_priest;
        $model->parish_name = "St. Isidore The Farmer Parish";
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }        

        return $this->render('create', [
            'model' => $model, 'persons' => $persons, 'priest' => $priest
        ]);
    }

    /**
     * Updates an existing Baptism model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $personsId)
    {
        $model = $this->findModel($id);
        $persons = Persons::find()->where(['id' => $personsId])->one();
        $priest = Priest::find()->where(['priest_role' => 0])->one();
        
        $model->persons_id = $id;
        $model->parish_priest = $priest->parish_priest;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model, 'persons' => $persons, 'priest' => $priest
        ]);
    }

    /**
     * Deletes an existing Baptism model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Baptism model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Baptism the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Baptism::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
