<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class propertyList extends Model
{
    /**
     * @description The name of the attribute. Valid values:
     *
     *   **BODY**: indicates the message body
     *   **TRACE_ON**: indicates whether the trace of the message exists.
     *   **KEYS**: indicates the key of the message.
     *   **TAGS**: indicates the tag that is attached to the message.
     *   **INSTANCE_ID**: indicates the ID of the instance that contains the message.
     *
     * For more information about the terms that are used in Message Queue for Apache RocketMQ, see [Terms](~~29533~~).
     * @example TAGS
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the attribute.
     *
     * @example TagA
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}