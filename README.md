## Laravel 連接googlecalendarAPI
1.先安裝套件  
composer require spatie/laravel-google-calendar  
2.發布配置    
php artisan vendor:publish --provider="Spatie\GoogleCalendar\GoogleCalendarServiceProvider"  
3.到config/google-calendar下設定'calendar_id' => '要連動的mail(日曆的帳號)'  
4.到googleApi去設置環境  
可參考->https://github.com/spatie/laravel-google-calendar  
5.在storage/app下設置文件夾google-calendar  
設置三個新的json檔案(oauth-credentials.json/oauth-token.json/service-account-credentials.json)  
service-account-credentials.json:放入服務帳戶產生的json  
oauth-credentials.json:OAuth 2.0 用戶端 ID產生的json 
oauth-token.json:利用官網提供的quickstart產生的token(一小時就會過期)   


