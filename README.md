# amazon-ads-api

1.所有的传参都得用数组,即使只允许接收一个参数也是用数组.

2.参数类型为Query或者Path,用$param数组传参即可.

3.参数类型为Body,用$body数组传参即可,不需要含有body的键名

# 用法

```
<?php

use AmazonAdsApi\Auth;
use AmazonAdsApi\AdsRequest;
use AmazonAdsApi\SponsoredProducts\AdGroups;

class Test{
    public function index(){
        $profileId = '用你的吧';
        $client_id = '用你的吧';
        $client_secret = '用你的吧';
        
        $country_code = 'US';//可以是其他国家

        //通过refresh_token获取access_token和新的refresh_token
        //$refresh_token = '用你的吧';
        //$refresh_token_result = (new Auth)->getAccessTokenByRefreshToken($client_id, $country_code, $client_secret, $refresh_token);
        //print_r(json_decode($refresh_token_result, true));

        $access_token = '上面的代码能拿到access_token';
        $instance = AdsRequest::getInstance($client_id, $country_code, $profileId, $access_token);

        //获取SP广告组
        $list = new AdGroups($instance);
        $result = $list->index();
        print_r(json_decode($result, true));
    }
}
```


