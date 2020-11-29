# Laravel 8 查詢偵測器檢查是否需增加預載入

引入 beyondcode 的 laravel-query-detector 套件來擴增查詢偵測器檢查是否需增加預載入，當透過屬性存取 Eloquent 關聯時，該關聯資料會被「延遲載入」。意指該關聯資料直到你第一次以屬性存取前，實際上並沒有被載入。不過，Eloquent 可以在你查詢上層模型時「預載入」關聯資料。預載入避免了 N + 1 查詢的問題。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/books/no-eager-loading/` 來進行未使用預載入的 N + 1 查詢，或可以經由 `/books/eager-loading/` 來進行使用預載入的 N + 1 查詢。

----

## 畫面截圖
![](https://i.imgur.com/lil9M9s.png)
> 進行未使用預載入的 N + 1 查詢

![](https://i.imgur.com/7hzKhG9.png)
> 進行使用預載入的 N + 1 查詢
