<?php
return [
 // 是否开启路由解析缓存
    'route_check_cache'      => true,
 // 是否强制使用路由
    'url_route_must'         => false,
    'captcha'  => [
                // 验证码字符集合
         'codeSet'  => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY',
         // 验证码字体大小(px)
         'fontSize' => 25,
         // 是否画混淆曲线
         'useCurve' => true,
          // 验证码图片高度
         'imageH'   => 50,
         // 验证码图片宽度
         'imageW'   => 200,
         // 验证码位数
         'length'   => 2,
         // 验证成功后是否重置
         'reset'    => true
    ],
 ];