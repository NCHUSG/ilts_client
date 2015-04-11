# Ilt OAuth Login Client

## 簡介
本專案為ilt_system_laravel的附屬專案，作為透過依爾特系統進行OAuth登入的相關程式開發。您可以參考本專案所附屬的DEMO，來建立屬於你的登入端。

## 檔案說明

### libraries/IltOAuthClient.php
本檔案為OAuth登入的Library，請 **Client** 引入本Library到您的主程式。

### demo
本資料夾下為範例程式，作為如何使用本Library的說明。在使用本參數前，請編輯 `index.php` 中 `# Developer Custom Define` 下方定義常數的值，已讓DEMO可以正常運作。  

請將 `/demo/config.example.php` 複製為 `/demo/config.php` 並且修改參數

## 使用說明
- 請先引入 `libraries/IltOAuthClient.php` 到您的主程式中。
- 請建構該Library物件，關於建構子所需參數的說明請見Library說明。 Ex. `$client       = new IltOAuthClient($key, $secret, $host, $scope);`
- 使用`run()`方法開始程序。Ex. `$client->run();`
- 若取得資料成功，`run()`方法會回傳scope要求的使用者資料給您，反之則回傳`false`。

## Library說明

### 建構子（Constructor）
#### Description
`__construct ( string $key , string $secret, string $host_uri [, string $scope = '' ] )`

#### Parameters
- key：必填，Client向Provider取得的Client Key。
- secret：必填，Client向Provider取得的Client Secret。
- host_uri：必填，Provider的URI。
- scope：選填，向Priveder要求的權限範圍。若空，則視為單純詢問Provider該使用者是否存在。

### run()
#### Description
`array/boolean run ( void )`

#### Return Values
若成功與Provider建立連線並索取資料，則回傳Array，反之則回傳false。Array的格式如下：

- status：Provider回傳的狀態參數。
- msg：Provider回傳的狀態訊息。
- data：Provider回傳的資料。若是成功取的資源，則資源即建立在這裏。
