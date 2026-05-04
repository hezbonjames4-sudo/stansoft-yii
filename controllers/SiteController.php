<?php

declare(strict_types=1);

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    public function actions(): array
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function actionSendMail(): array
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        if (!Yii::$app->request->isPost) {
            Yii::$app->response->statusCode = 405;

            return [
                'success' => false,
                'message' => 'Only POST requests are allowed.',
            ];
        }

        $post = Yii::$app->request->post();
        $name = $this->cleanInput((string) ($post['name'] ?? ''));
        $phone = $this->cleanInput((string) ($post['phone'] ?? ''));
        $email = $this->cleanInput((string) ($post['email'] ?? ''));
        $message = trim((string) ($post['message'] ?? ''));

        if ($name === '' || $phone === '' || $email === '' || $message === '') {
            Yii::$app->response->statusCode = 422;

            return [
                'success' => false,
                'message' => 'Please complete all fields before submitting.',
            ];
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            Yii::$app->response->statusCode = 422;

            return [
                'success' => false,
                'message' => 'Please provide a valid email address.',
            ];
        }

        $to = (string) Yii::$app->params['adminEmail'];
        $subject = 'Website Query - Stansofts Solutions';
        $body = implode("\n", [
            "Name: {$name}",
            "Phone: {$phone}",
            "Email: {$email}",
            '',
            'Message:',
            $message,
        ]);

        $headers = [
            'MIME-Version: 1.0',
            'Content-Type: text/plain; charset=UTF-8',
            'From: ' . Yii::$app->params['senderName'] . ' <' . Yii::$app->params['senderEmail'] . '>',
            "Reply-To: {$email}",
            'X-Mailer: PHP/' . PHP_VERSION,
        ];

        $sent = mail($to, $subject, $body, implode("\r\n", $headers));

        if (!$sent) {
            Yii::$app->response->statusCode = 500;

            return [
                'success' => false,
                'message' => 'Mail server not available yet. Start the site through PHP and configure outgoing mail, or use WhatsApp for testing.',
            ];
        }

        return [
            'success' => true,
            'message' => 'Your query has been sent successfully.',
        ];
    }

    private function cleanInput(string $value): string
    {
        $value = trim($value);

        return str_replace(["\r", "\n"], ' ', $value);
    }
}
