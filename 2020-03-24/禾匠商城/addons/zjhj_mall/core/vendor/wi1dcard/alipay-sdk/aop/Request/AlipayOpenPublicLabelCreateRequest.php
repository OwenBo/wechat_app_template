<?php
/**
 * ALIPAY API: alipay.open.public.label.create request
 *
 * @author auto create
 *
 * @since  1.0, 2016-12-08 11:55:52
 */

namespace Alipay\Request;

class AlipayOpenPublicLabelCreateRequest extends AbstractAlipayRequest
{
    /**
     * 公众号标签管理-添加标签
     **/
    private $bizContent;

    public function setBizContent($bizContent)
    {
        $this->bizContent = $bizContent;
        $this->apiParams['biz_content'] = $bizContent;
    }

    public function getBizContent()
    {
        return $this->bizContent;
    }
}
