<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\OfficialAccount\Card;

/**
 * Class MovieTicketClient.
 *
 * @author overtrue <i@overtrue.me>
 */
class MovieTicketClient extends Client
{
    /**
     * @param array $params
     *
     * @return PsrHttpMessageResponseInterface|asyWeChatKernelSupportCollection|array|object|string
     */
    public function updateUser(array $params)
    {
        return $this->httpPostJson('card/movieticket/updateuser', $params);
    }
}
