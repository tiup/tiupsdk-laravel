### TiUP SDK for Laravel

### Installation

```shell
composer require tiup/tiupsdk-laravel 
```

#### 配置
修改 config/app.php

在providers中增加 

```php
Tiup\LaravelTiupSdk\LaravelTiupSdkServiceProvider::class,
```

在 aliases 中增加 

```php
'Tiup' => Tiup\LaravelTiupSdk\TiupFacade::class,
```

#### 运行下面复制配置文件到 config目录。
```shell
php artisan vendor:publish  --provider="Tiup\LaravelTiupSdk\LaravelTiupSdkServiceProvider"
```


#### .env 增加以下配置

```
TIUP_CLIENT_ID=client_id
TIUP_CLIENT_SECRET=client_secret
TIUP_AUTH_HOST=https://test.tiup.cn/
TIUP_API_HOST=https://test.tiup.cn/
```


运行 ```php artisan serve``` 启动即可

应用首页 http://127.0.0.1:8000
 
登录回调 http://127.0.0.1:8000/oauth/callback



代码示例

```php

Route::get('/', function () {
	 //获取登录地址
    $url = Tiup::getAuthorizationUrl('http://127.0.0.1:8000/oauth/callback');
    return redirect($url);
});


Route::get('/oauth/callback', function () {
	//登录成功回调，获取用户信息
    $token = \Tiup::getAccessToken();
    $userinfo = \Tiup::me($token);
    dd($userinfo);
});
```



