<?php
/**
 * Created by PhpStorm.
 * User: zheni
 * Date: 6/30/2020
 * Time: 11:09 PM
 */

namespace app\models;


use Yii;
use yii\base\Model;

class Contact extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;

    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            ['email', 'email'],
//            ['verifyCode', 'captcha'],
        ];
    }
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }

}