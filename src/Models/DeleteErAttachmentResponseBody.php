<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class DeleteErAttachmentResponseBody extends Model
{
    /**
     * @description The response status code.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The response content. If a resource has dependent resources, the existing dependent resources are returned.
     *
     * @example {
     * }
     * @var mixed
     */
    public $content;

    /**
     * @description response message, if the success request is
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Request ID of the current request
     *
     * @example A88DFED5-24B7-5A3E-87DE-380BF06F3C90
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
            $res['Content'] = $this->content;
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
     * @return DeleteErAttachmentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
