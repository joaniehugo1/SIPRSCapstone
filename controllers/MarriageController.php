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

    public function actionPersonSelector() {
        $model = new Marriage();

        if ($model->load(Yii::$app->request->post())) {
            return $this->redirect(['create', 'groom_persons_id' => $model->groom_persons_id, 'bride_persons_id' => $model->bride_persons_id]);
        }

        return $this->render('person-selector', [
            'model' => $model,
        ]);
    }
    
    /**
     * Creates a new Marriage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($groom_persons_id, $bride_persons_id)
    {
        $model = new Marriage();
        $priest = Priest::find()->where(['priest_role' => 0])->one();
        $model->parish_priest = $priest->parish_priest;
        $model->parish_name = "St. Isidore The Farmer Parish";

        $model->groom_persons_id = $groom_persons_id;
        $model->bride_persons_id = $bride_persons_id;
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model, 'priest' => $priest
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
        $model->parish_priest = $priest->parish_priest;
        $model->parish_name = "St. Isidore The Farmer Parish";
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
    public function actionPrintModal($id) {
        $model = Marriage::findOne(['id' => $id]);
        $groom = Persons::find()->where(['id' => $model['attributes']['groom_persons_id']])->one();
        $bride = Persons::find()->where(['id' => $model['attributes']['bride_persons_id']])->one();
        return $this->render('print-modal', ['model' => $model,'groom' => $groom, 'bride' => $bride]);
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
