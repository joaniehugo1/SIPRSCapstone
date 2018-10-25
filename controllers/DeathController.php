<?php

namespace app\controllers;

use Yii;
use app\models\Death;
use app\models\Persons;
use app\models\Priest;
use app\models\DeathSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;

/**
 * DeathController implements the CRUD actions for Death model.
 */
class DeathController extends Controller
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
     * Lists all Death models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DeathSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Death model.
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
     * Creates a new Death model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Death();
        $persons = Persons::findOne($id);
        $persons = Persons::find()->where(['id' => $id])->one();
        $priest = Priest::find()->where(['priest_role' => 0])->one();
        $model->persons_id = $persons->id;
        $model->parish_priest = $priest->id;
        $model->parish_name = "St. Isidore The Farmer Parish";
        $model->municipal_cemetery = "Tubigon Catholic Cemetery";
        // $model->municipal_cemetery = $death->municipal_cemetery;
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model, 'persons' => $persons, 'priest' => $priest
        ]);
    }

    /**
     * Updates an existing Death model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $personsId)
    {
        $model = $this->findModel($id);
        $model->parish_name = "St. Isidore The Farmer Parish";
        $persons = Persons::find()->where(['id' => $personsId])->one();
        $priest = Priest::find()->where(['priest_role' => 0])->one();
        $model->parish_priest = $priest->parish_priest;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model, 'persons' => $persons, 'priest' => $priest
        ]);
    }

    /**
     * Deletes an existing Death model.
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
    public function actionPrintModal($id) {
        $model = Death::findOne(['id' => $id]);
        return $this->render('print-modal', ['model' => $model]);
    }

    /**
     * Finds the Death model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Death the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Death::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
