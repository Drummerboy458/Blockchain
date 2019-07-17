<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;
use linslin\yii2\curl;
/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }

     public function postUser($name,$id)
    {
        $data = [
              "\$class" => "org.exchangeMerchandises.TheNode",
              "theNodeID" => $id,
              "theNodeDescription" => $name,
        ];
        $url = 'http://148.100.244.179:3000/api/org.exchangeMerchandises.TheNode';
        $curl = new curl\Curl();
        $response = $curl->setRequestBody(json_encode($data))
            ->setHeaders([
                'Content-Type' => 'application/json',
                'Content-Length' => strlen(json_encode($data))
            ])
            ->post($url);
        if($curl->responseCode == 200)
        {
             return true;
        }
        else
        {
            return false;
        }
        //list response headers
        //var_dump($curl->responseHeaders);
        //return json_decode($response,true);
        
    }
}
