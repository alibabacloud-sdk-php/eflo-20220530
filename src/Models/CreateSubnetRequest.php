<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateSubnetRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateSubnetRequest extends Model
{
    /**
     * @description The CIDR block of the Subnet.
     *
     *   The network segment of the subnet must be a proper subset of the network segment of Lingjun to which it belongs, and the mask must be between 16 bits and 29 bits, which can provide 8 to 65536 addresses. For example, the CIDR block of the Lingjun CIDR block is 192.168.0.0/16, and the CIDR blocks of the subnets under the Lingjun CIDR block are 192.168.0.0/17 to 192.168.0.0/29.
     *   The first and last three IP addresses of each subnet segment are reserved by the system. For example, the CIDR blocks of the subnet are 192.168.1.0/24,192.168.1.0, 192.168.1.253, 192.168.1.254, and 192.168.1.255.
     *
     * This parameter is required.
     * @example 10.0.0.0/16
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Lingjun subnet instance name
     *
     * This parameter is required.
     * @example subnet-1
     *
     * @var string
     */
    public $subnetName;

    /**
     * @description The tag information.
     *
     * You can specify up to 20 tags.
     * @var tag[]
     */
    public $tag;

    /**
     * @description Lingjun Subnet Usage Type; optional; optional. Valid values:
     *
     *   **If you do not set this field for a common type**
     *   **OOB** :OOB type
     *   **LB**: LB type
     *
     * @example OOB
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the Lingjun CIDR block.
     *
     * This parameter is required.
     * @example vpd-xcuhjyrj
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description The zone ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cidr'       => 'Cidr',
        'regionId'   => 'RegionId',
        'subnetName' => 'SubnetName',
        'tag'        => 'Tag',
        'type'       => 'Type',
        'vpdId'      => 'VpdId',
        'zoneId'     => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subnetName) {
            $res['SubnetName'] = $this->subnetName;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubnetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubnetName'])) {
            $model->subnetName = $map['SubnetName'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
