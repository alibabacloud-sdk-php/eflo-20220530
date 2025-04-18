<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListLeniPrivateIpAddressesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListLeniPrivateIpAddressesResponseBody\content\data;

class content extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'data' => 'Data',
        'resourceGroupId' => 'ResourceGroupId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1++] = data::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
