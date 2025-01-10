<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListSubnetsResponseBody\content;

use AlibabaCloud\SDK\Eflo\V20220530\Models\ListSubnetsResponseBody\content\data\tags;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListSubnetsResponseBody\content\data\vpdBaseInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The CIDR block of the Subnet.
     *
     *   The network segment of the subnet must be a proper subset of the network segment of Lingjun to which it belongs, and the mask must be between 16 bits and 29 bits, which can provide 8 to 65536 addresses. For example, the CIDR block of the Lingjun CIDR block is 192.168.0.0/16, and the CIDR blocks of the subnets under the Lingjun CIDR block are 192.168.0.0/17 to 192.168.0.0/29.
     *   The first and last three IP addresses of each subnet segment are reserved by the system. For example, the CIDR blocks of the subnet are 192.168.1.0/24,192.168.1.0, 192.168.1.253, 192.168.1.254, and 192.168.1.255.
     *
     * @example 172.18.0.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The time when the data address was created.
     *
     * @example 1678273219000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the agent was last modified.
     *
     * @example 1678273219000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The error message. (If the instance is in the Exception state, the exception cause is prompted.)
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @description Number of NCs
     *
     * @example 16
     *
     * @var int
     */
    public $ncCount;

    /**
     * @description Number of Lingjun network interface controller
     *
     * @example 1
     *
     * @var int
     */
    public $networkInterfaceCount;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of your Alibaba Cloud resource group.
     *
     * For more information about resource groups, see [Resource groups](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu).
     * @example rg-aek2l4sq6l7unhi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the cache reserve instance. Valid values:
     *
     *   **Available**: Normal
     *   **Not Available**: Unavailable
     *   **Executing**: Executing
     *   **Deleting**: The node is being deleted.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description Lingjun subnet instance ID
     *
     * @example subnet-c6wci55i
     *
     * @var string
     */
    public $subnetId;

    /**
     * @description Lingjun subnet instance name
     *
     * @example yzp-rg-test3
     *
     * @var string
     */
    public $subnetName;

    /**
     * @description The tag information.
     *
     * You can specify up to 20 tags.
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the tenant.
     *
     * @example 1655449505171
     *
     * @var string
     */
    public $tenantId;

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
     * @description vpd basic information
     *
     * @var vpdBaseInfo
     */
    public $vpdBaseInfo;

    /**
     * @description The ID of the Lingjun CIDR block.
     *
     * @example vpd-ze3na0wf
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description The zone ID.
     *
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cidr'                  => 'Cidr',
        'createTime'            => 'CreateTime',
        'gmtModified'           => 'GmtModified',
        'message'               => 'Message',
        'ncCount'               => 'NcCount',
        'networkInterfaceCount' => 'NetworkInterfaceCount',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'status'                => 'Status',
        'subnetId'              => 'SubnetId',
        'subnetName'            => 'SubnetName',
        'tags'                  => 'Tags',
        'tenantId'              => 'TenantId',
        'type'                  => 'Type',
        'vpdBaseInfo'           => 'VpdBaseInfo',
        'vpdId'                 => 'VpdId',
        'zoneId'                => 'ZoneId',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->ncCount) {
            $res['NcCount'] = $this->ncCount;
        }
        if (null !== $this->networkInterfaceCount) {
            $res['NetworkInterfaceCount'] = $this->networkInterfaceCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }
        if (null !== $this->subnetName) {
            $res['SubnetName'] = $this->subnetName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpdBaseInfo) {
            $res['VpdBaseInfo'] = null !== $this->vpdBaseInfo ? $this->vpdBaseInfo->toMap() : null;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NcCount'])) {
            $model->ncCount = $map['NcCount'];
        }
        if (isset($map['NetworkInterfaceCount'])) {
            $model->networkInterfaceCount = $map['NetworkInterfaceCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }
        if (isset($map['SubnetName'])) {
            $model->subnetName = $map['SubnetName'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpdBaseInfo'])) {
            $model->vpdBaseInfo = vpdBaseInfo::fromMap($map['VpdBaseInfo']);
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
