<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class UnassignLeniPrivateIpAddressRequest extends Model
{
    /**
     * @description The idempotent identifier.
     *
     * @example 967e77a2-b61d-11ec-a147-0242c0a80504
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Lingjun Elastic Network Interface ID.
     *
     * This parameter is required.
     * @example leni-1234****
     *
     * @var string
     */
    public $elasticNetworkInterfaceId;

    /**
     * @description Lingjun Elastic Network Interface secondary private IP unique identifier.
     *
     * This parameter is required.
     * @example sip-8ylg****
     *
     * @var string
     */
    public $ipName;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'               => 'ClientToken',
        'elasticNetworkInterfaceId' => 'ElasticNetworkInterfaceId',
        'ipName'                    => 'IpName',
        'regionId'                  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->elasticNetworkInterfaceId) {
            $res['ElasticNetworkInterfaceId'] = $this->elasticNetworkInterfaceId;
        }
        if (null !== $this->ipName) {
            $res['IpName'] = $this->ipName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnassignLeniPrivateIpAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ElasticNetworkInterfaceId'])) {
            $model->elasticNetworkInterfaceId = $map['ElasticNetworkInterfaceId'];
        }
        if (isset($map['IpName'])) {
            $model->ipName = $map['IpName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
