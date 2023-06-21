# OpenAPI\Client\OrderDeliveryApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrderBuyerInfo()**](OrderDeliveryApi.md#getOrderBuyerInfo) | **GET** /campaigns/{campaignId}/orders/{orderId}/buyer | Информация о покупателе |
| [**getOrderDeliveryOptions()**](OrderDeliveryApi.md#getOrderDeliveryOptions) | **POST** /campaigns/{campaignId}/delivery/get-options | Метод для получения слотов доставки по адресу и товарным позициям для создания FaaS-заказа |
| [**setOrderDeliveryDate()**](OrderDeliveryApi.md#setOrderDeliveryDate) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/date | Изменение даты доставки заказа |
| [**setOrderDeliveryTrackCode()**](OrderDeliveryApi.md#setOrderDeliveryTrackCode) | **POST** /campaigns/{campaignId}/orders/{orderId}/delivery/track | Передача трек‑номера посылки |
| [**updateOrderStorageLimit()**](OrderDeliveryApi.md#updateOrderStorageLimit) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit | Продление срока хранения заказа |
| [**verifyOrderEac()**](OrderDeliveryApi.md#verifyOrderEac) | **PUT** /campaigns/{campaignId}/orders/{orderId}/verifyEac | Передача кода проверки |


## `getOrderBuyerInfo()`

```php
getOrderBuyerInfo($campaign_id, $order_id): \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdBuyer
```

Информация о покупателе

Возвращает информацию о покупателе по идентификатору заказа.  |**⚙️ Лимит:** 3 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.

try {
    $result = $apiInstance->getOrderBuyerInfo($campaign_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->getOrderBuyerInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |

### Return type

[**\OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdBuyer**](../Model/CampaignsCampaignIdOrdersOrderIdBuyer.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderDeliveryOptions()`

```php
getOrderDeliveryOptions($campaign_id, $body): \OpenAPI\Client\Model\CampaignsCampaignIdDeliveryGetOptions
```

Метод для получения слотов доставки по адресу и товарным позициям для создания FaaS-заказа

Метод для получения слотов доставки по адресу и товарным позициям для создания FaaS-заказа

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$body = new \OpenAPI\Client\Model\CampaignsCampaignIdDeliveryGetOptions(); // \OpenAPI\Client\Model\CampaignsCampaignIdDeliveryGetOptions

try {
    $result = $apiInstance->getOrderDeliveryOptions($campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->getOrderDeliveryOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **body** | **\OpenAPI\Client\Model\CampaignsCampaignIdDeliveryGetOptions**|  | |

### Return type

[**\OpenAPI\Client\Model\CampaignsCampaignIdDeliveryGetOptions**](../Model/CampaignsCampaignIdDeliveryGetOptions.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOrderDeliveryDate()`

```php
setOrderDeliveryDate($campaign_id, $order_id, $body): \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryDate
```

Изменение даты доставки заказа

Метод изменяет дату доставки заказа в статусе PROCESSING или DELIVERY. Для заказов с другими статусами дату доставки изменить нельзя.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$body = new \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryDate(); // \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryDate

try {
    $result = $apiInstance->setOrderDeliveryDate($campaign_id, $order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->setOrderDeliveryDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **body** | **\OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryDate**|  | |

### Return type

[**\OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryDate**](../Model/CampaignsCampaignIdOrdersOrderIdDeliveryDate.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOrderDeliveryTrackCode()`

```php
setOrderDeliveryTrackCode($campaign_id, $order_id, $body): \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryTrack
```

Передача трек‑номера посылки

Передает Маркету трек‑номер, по которому покупатель может отследить посылку со своим заказом через службу доставки.  Вы можете использовать запрос, чтобы повысить лояльность покупателей. Если они могут узнать, на каком этапе доставки находятся их заказы, доверие покупателей к вашему магазину может возрасти.  Передать трек‑номер можно, только если заказ находится в статусе `PROCESSING`, `DELIVERY` или `PICKUP`.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$body = new \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryTrack(); // \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryTrack

try {
    $result = $apiInstance->setOrderDeliveryTrackCode($campaign_id, $order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->setOrderDeliveryTrackCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **body** | **\OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryTrack**|  | |

### Return type

[**\OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryTrack**](../Model/CampaignsCampaignIdOrdersOrderIdDeliveryTrack.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderStorageLimit()`

```php
updateOrderStorageLimit($campaign_id, $order_id, $body): \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryStorageLimit
```

Продление срока хранения заказа

Продлевает срок хранения заказа в пункте выдачи продавца.  Заказ должен быть в статусе `PICKUP`. Продлить срок можно только один раз, не больше чем на 30 дней.  Новый срок хранения можно получить в параметре `outletStorageLimitDate` запроса [GET campaigns/{campaignId}/orders/{orderId}](../../reference/orders/getOrder.md).  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$body = new \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryStorageLimit(); // \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryStorageLimit

try {
    $result = $apiInstance->updateOrderStorageLimit($campaign_id, $order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->updateOrderStorageLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **body** | **\OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryStorageLimit**|  | |

### Return type

[**\OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdDeliveryStorageLimit**](../Model/CampaignsCampaignIdOrdersOrderIdDeliveryStorageLimit.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyOrderEac()`

```php
verifyOrderEac($campaign_id, $order_id, $body): \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdVerifyEac
```

Передача кода проверки

Отправляет Маркету код подтверждения для его проверки.  Код подтверждает передачу заказа или невыкупа:  * курьеру — курьер должен назвать магазину код; * магазину — магазин называет код курьеру.  Если магазин получает невыкупленный заказ, то ему нужно назвать курьеру код из личного кабинета или приложения.  Если у магазина настроена работа с кодами подтверждения, в запросах [POST /order/status](https://yandex.ru/dev/market/partner-api/doc/ru/pushapi/reference/post-order-status), [PUT campaigns/{campaignId}/orders/{orderId}/status](https://yandex.ru/dev/market/partner-api/doc/ru/reference/orders/updateOrderStatus), [GET campaigns/{campaignId}/orders](https://yandex.ru/dev/market/partner-api/doc/ru/reference/orders/getOrders), [GET campaigns/{campaignId}/orders/{orderId}](https://yandex.ru/dev/market/partner-api/doc/ru/reference/orders/getOrder) в параметре `delivery`, вложенном в `order` будет возвращаться параметр `eacType` с типом `Enum` — тип кода подтверждения для передачи заказа.  Возможные значения: `MERCHANT_TO_COURIER` — магазин называет код курьеру, `COURIER_TO_MERCHANT` — курьер называет код магазину.  Параметр `eacType` возвращается при статусах заказа `COURIER_FOUND`, `COURIER_ARRIVED_TO_SENDER` и `DELIVERY_SERVICE_UNDELIVERED`. Если заказ в других статусах, параметр может отсутствовать.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$body = new \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdVerifyEac(); // \OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdVerifyEac

try {
    $result = $apiInstance->verifyOrderEac($campaign_id, $order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->verifyOrderEac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **body** | **\OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdVerifyEac**|  | |

### Return type

[**\OpenAPI\Client\Model\CampaignsCampaignIdOrdersOrderIdVerifyEac**](../Model/CampaignsCampaignIdOrdersOrderIdVerifyEac.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
