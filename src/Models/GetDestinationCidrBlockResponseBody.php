<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\SDK\Eflo\V20220530\Models\GetDestinationCidrBlockResponseBody\content;
use AlibabaCloud\Tea\Model;

class GetDestinationCidrBlockResponseBody extends Model
{
    /**
     * @description The response status code
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description Response content
     *
     * @var content
     */
    public $content;

    /**
     * @description Error message. (Indicates the reason for the anomaly when the instance status is abnormal.)
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description ID of this request
     *
     * @example D349EE86-AF3F-5F6C-87E2-2A08D3618350
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'content'   => 'Content',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDestinationCidrBlockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}