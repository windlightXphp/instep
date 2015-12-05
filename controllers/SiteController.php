<?php

namespace app\controllers;

use app\models\Groups;
use app\models\Students;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\helpers\ArrayHelper;

class SiteController extends Controller
{
    public $layout = "@app/views/layouts/main_frontend";

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        // +1) �������� ���� ������ � ���� ��� ������ ������
        // +2) ���������� ��������� � ����������
        // 3) �������� �� ����� ��� ����������

        // ����� $this->render ��������� 2 ���������
        // ������ - �������� ����� ������� �� ����� ����������
        // �����1 �������� ������ �� ���������� , �������� ������� �� ����� �������� �� �����


        $groups = Groups::find()->all();

        $students = Students::find()->all();

        return $this->render('index', [
            'students' => $students,
            'groups' => ArrayHelper::map($groups, 'id', 'name')
        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionTest()
    {
        echo '<pre>';


        #1 model
//        $students = Students::find()->all();// get all

//        $student = Students::findOne(3);// get one
//        echo $student->full_name;

//        var_dump($student);


//        $students = Students::find()->where('status = 1')->all();
//
//        for($i = 0; $i <= count($students); $i++){
//            echo $students[$i]->full_name;
//        }

//        var_dump($students);





        $count = Students::find()
            ->where('status = 1')
            ->count();

        var_dump($count);
    }
}
