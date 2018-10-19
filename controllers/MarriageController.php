<?php

namespace app\controllers;

use Yii;
use app\models\Marriage;
use app\models\MarriageSearch;
use yii\web\Controller;
use\app\models\Persons;
use\app\models\Priest;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;

/**
 * MarriageController implements the CRUD actions for Marriage model.
 */
class MarriageController extends Controller
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
     * Lists all Marriage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MarriageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Marriage model.
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
     * Creates a new Marriage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Marriage();
        $persons = Persons::findOne($id);
        $priest = Priest::find()->where(['priest_role' => 0])->one();
        $model->groom_persons_id = $id;
        $model->parish_name = "St. Isidore Parish";
        $model->parish_priest = $priest->parish_priest;
        
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,'persons' => $persons, 'priest' => $priest
        ]);
    }

    /**
     * Updates an existing Marriage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $groompersonsId, $bridepersonsId)
    {
        $model = $this->findModel($id);
        $bride = Persons::find()->where(['id' => $bridepersonsId])->one();
        $groom = Persons::find()->where(['id' => $groompersonsId])->one();
        $priest = Priest::find()->where(['priest_role' => 0])->one();
        $model->groom_persons_id = $groom->id;
        $model->bride_persons_id = $bride->id;
        $model->link('bridePersons', $groom);
        $model->link('groomPersons', $bride);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model, 'persons' => $bride, 'priest' => $priest
        ]);
    }

    /**
     * Deletes an existing Marriage model.
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
     * Finds the Marriage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Marriage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Marriage::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
