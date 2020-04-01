<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Aliyun\CCP\OSSClient\OSSClient;

use AlibabaCloud\Tea\Model;

class MobileCheckExistRequest extends Model
{
    /**
     * @description App ID, 当前访问的App
     *
     * @example csaklidwasdhjwid
     *
     * @var string
     */
    public $appId;
    /**
     * @description 待查询的手机号
     *
     * @example 152*****341
     *
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'appId'       => 'app_id',
        'phoneNumber' => 'phone_number',
    ];

    public function validate()
    {
        Model::validateField($this->appId, 'required', true);
        Model::validateField($this->phoneNumber, 'required', true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['app_id']       = $this->appId;
        $res['phone_number'] = $this->phoneNumber;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MobileCheckExistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['app_id'])) {
            $model->appId = $map['app_id'];
        }
        if (isset($map['phone_number'])) {
            $model->phoneNumber = $map['phone_number'];
        }

        return $model;
    }
}