<?php

return [
    'appid' =>'your app id',
    'secret'=>'your appSecret',
    'code2session_url' => "https://api.weixin.qq.com/sns/jscode2session?appid=%s&secret=%s&js_code=%s&grant_type=authorization_code",
];