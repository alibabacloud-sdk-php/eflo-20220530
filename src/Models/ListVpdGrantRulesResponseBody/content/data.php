<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdGrantRulesResponseBody\content;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the data address was created.
     *
     * @example 1643013506000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The current network sample is authorized to the specified Lingjun HUB sample ID.
     *
     * @example er-kkopgtne
     *
     * @var string
     */
    public $erId;

    /**
     * @description Authorization Entry ID
     *
     * @example grant-rule-8rgvqazb
     *
     * @var string
     */
    public $grantRuleId;

    /**
     * @description The ID of the tenant to which the current instance is authorized.
     *
     * @example 1672372231790
     *
     * @var string
     */
    public $grantTenantId;

    /**
     * @description Lingjun CIDR block instance ID
     *
     * @example vpd-8rgvqazb
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the ECU.
     *
     * @example vpd-1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The type of the authorized product. Valid values:
     *
     *   **VPD**: indicates a VPD instance of the Lingjun network segment.
     *   **VCC**: indicates that Lingjun connects to the VCC instance.
     *
     * The caller does not need to specify.
     * @example VPD
     *
     * @var string
     */
    public $product;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group instance ID
     *
     * @example rg-aek2l4sq6l7unhi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the tenant.
     *
     * @example 1655449505171
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description Whether the current authorized instance has been bound
     *
     * @example true
     *
     * @var bool
     */
    public $used;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'erId'            => 'ErId',
        'grantRuleId'     => 'GrantRuleId',
        'grantTenantId'   => 'GrantTenantId',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'product'         => 'Product',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tenantId'        => 'TenantId',
        'used'            => 'Used',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->grantRuleId) {
            $res['GrantRuleId'] = $this->grantRuleId;
        }
        if (null !== $this->grantTenantId) {
            $res['GrantTenantId'] = $this->grantTenantId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->used) {
            $res['Used'] = $this->used;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['GrantRuleId'])) {
            $model->grantRuleId = $map['GrantRuleId'];
        }
        if (isset($map['GrantTenantId'])) {
            $model->grantTenantId = $map['GrantTenantId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }

        return $model;
    }
}
