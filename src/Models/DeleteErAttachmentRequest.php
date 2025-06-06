<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class DeleteErAttachmentRequest extends Model
{
    /**
     * @var string
     */
    public $erAttachmentId;

    /**
     * @var string
     */
    public $erId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'erAttachmentId' => 'ErAttachmentId',
        'erId' => 'ErId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->erAttachmentId) {
            $res['ErAttachmentId'] = $this->erAttachmentId;
        }

        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErAttachmentId'])) {
            $model->erAttachmentId = $map['ErAttachmentId'];
        }

        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
