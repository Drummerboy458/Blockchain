<?php

namespace common\models;
use linslin\yii2\curl;
use Yii;

/**
 * This is the model class for table "merchandise".
 *
 * @property integer $merchandiseID
 * @property string $merchandiseDescription
 * @property string $beginning
 * @property string $destination
 * @property string $nowNode
 */
class Merchandise extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'merchandise';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['merchandiseDescription', 'beginning', 'destination', 'nowNode'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'merchandiseID' => '订单号',
            'merchandiseDescription' => '订单备注',
            'beginning' => '寄件人',
            'destination' => '收件人',
            'nowNode' => '当前状态',
        ];
    }

    public function  addOrder()
    {

        $data = [
             "\$class" => "org.exchangeMerchandises.Merchandise",
              "merchandiseID"=> $this->merchandiseID,
              "merchandiseDescription"=> $this->merchandiseDescription,
              "isAccomplished"=> false,
              "requiring"=> false,
              "beginning"=> "resource:org.exchangeMerchandises.TheNode#".$this->beginning,
              "destination"=> "resource:org.exchangeMerchandises.TheNode#".$this->destination,
              "nowNode"=> "resource:org.exchangeMerchandises.TheNode#".$this->beginning,
        ];
        $url = 'http://148.100.244.179:3000/api/org.exchangeMerchandises.Merchandise';
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
            //var_dump($response);
            return false;
        }
    }

    function object_array($array) {  
        if(is_object($array)) {  
            $array = (array)$array;  
         } if(is_array($array)) {  
             foreach($array as $key=>$value) {  
                 $array[$key] =  Merchandise::object_array($value);  
                 }  
         }  
         return $array;  
    }

     public function getDone()
    {
        $curl = new curl\Curl();
        $response = $curl->setHeaders([
             'Content-Type' => 'application/json',
        ])->setGetParams([
        'NodeIDofTheBeginning' => 'resource:org.exchangeMerchandises.TheNode#'.(string)Yii::$app->user->identity->id,       //查询已寄送成功的订单
     ])->get('http://148.100.244.179:3000/api/queries/selectMerchandiseByBeginID');

        $data = json_decode($response);
       
        $array =  Merchandise::object_array($data);
        print_r($array);
        //echo $array['merchandiseID'];
        return $array ;
    }

    public function getTrans()
    {
        $curl = new curl\Curl();
        $response = $curl->setHeaders([
             'Content-Type' => 'application/json',
        ])->setGetParams([
        'NodeIDofTheEnd' => 'resource:org.exchangeMerchandises.TheNode#'.(string)Yii::$app->user->identity->id,       //查询已寄送成功的订单
     ])->get('http://148.100.244.179:3000/api/queries/selectTransportingIDByBeginningNode');

        $data = json_decode($response);
       
        $array =  Merchandise::object_array($data);
        print_r($array);
        //echo $array['merchandiseID'];
        return $array ;
    }
}
