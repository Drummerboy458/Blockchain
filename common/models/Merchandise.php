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
            'merchandiseDescription' => '订单描述',
            'beginning' => '起点站',
            'destination' => '终点站',
            'nowNode' => '当前位置',
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
}
