<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponseBody\data\subscriptionDataList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var subscriptionDataList
     */
    public $subscriptionDataList;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $messageModel;

    /**
     * @var bool
     */
    public $online;
    protected $_name = [
        'subscriptionDataList' => 'SubscriptionDataList',
        'groupId'              => 'GroupId',
        'messageModel'         => 'MessageModel',
        'online'               => 'Online',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscriptionDataList) {
            $res['SubscriptionDataList'] = null !== $this->subscriptionDataList ? $this->subscriptionDataList->toMap() : null;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->messageModel) {
            $res['MessageModel'] = $this->messageModel;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscriptionDataList'])) {
            $model->subscriptionDataList = subscriptionDataList::fromMap($map['SubscriptionDataList']);
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MessageModel'])) {
            $model->messageModel = $map['MessageModel'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        return $model;
    }
}
