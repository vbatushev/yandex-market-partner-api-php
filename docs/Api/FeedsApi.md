# OpenAPI\Client\FeedsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFeed()**](FeedsApi.md#getFeed) | **GET** /campaigns/{campaignId}/feeds/{feedId} | Информация о прайс-листе |
| [**getFeedIndexLogs()**](FeedsApi.md#getFeedIndexLogs) | **GET** /campaigns/{campaignId}/feeds/{feedId}/index-logs | Отчет по индексации прайс-листа |
| [**getFeeds()**](FeedsApi.md#getFeeds) | **GET** /campaigns/{campaignId}/feeds | Список прайс-листов магазина |
| [**refreshFeed()**](FeedsApi.md#refreshFeed) | **POST** /campaigns/{campaignId}/feeds/{feedId}/refresh | Сообщить, что прайс-лист обновился |
| [**setFeedParams()**](FeedsApi.md#setFeedParams) | **POST** /campaigns/{campaignId}/feeds/{feedId}/params | Изменение параметров прайс-листа |


## `getFeed()`

```php
getFeed($campaign_id, $feed_id): \OpenAPI\Client\Model\CampaignsCampaignIdFeedsFeedId
```

Информация о прайс-листе

Возвращает информацию о прайс-листе, размещенном на Маркете для заданного магазина. Также ресурс возвращает результаты автоматических проверок прайс-листа. |**⚙️ Лимит:** 5 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$feed_id = 56; // int | Идентификатор прайс-листа.

try {
    $result = $apiInstance->getFeed($campaign_id, $feed_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->getFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **feed_id** | **int**| Идентификатор прайс-листа. | |

### Return type

[**\OpenAPI\Client\Model\CampaignsCampaignIdFeedsFeedId**](../Model/CampaignsCampaignIdFeedsFeedId.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedIndexLogs()`

```php
getFeedIndexLogs($campaign_id, $feed_id, $limit, $published_time_from, $published_time_to, $status): \OpenAPI\Client\Model\CampaignsCampaignIdFeedsFeedIdIndexLogs
```

Отчет по индексации прайс-листа

Возвращает отчет по индексации прайс-листа для заданного магазина. Отчет позволяет получить статистику загрузки прайс-листа и результаты его автоматических проверок.  Данные в отчете возвращаются в порядке убывания значений параметра `generationId`.  |**⚙️ Лимит:** 1 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$feed_id = 56; // int | Идентификатор прайс-листа.
$limit = 20; // int | Количество товаров в выходных данных.
$published_time_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Начальная дата. Используется для фильтрации записей — по дате и времени публикации предложений на Яндекс Маркете.  Формат даты: ISO 8601 со смещением относительно UTC. Например, `2017-11-21T00:42:42+03:00`.  Значение по умолчанию: последние восемь дней со времени отправки запроса.
$published_time_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Конечная дата. Используется для фильтрации записей — по дате и времени публикации предложений на Яндекс Маркете.  Формат даты: ISO 8601 со смещением относительно UTC. Например, `2017-11-31T00:42:42+03:00`.  Значение по умолчанию: дата и время отправки запроса.  {% note info %}  Если во время переключения между страницами выходных данных на Яндекс Маркете появятся новые результаты индексации прайс-листа, вы не получите часть данных. Чтобы этого не произошло, зафиксируйте выходные данные с помощью входного параметра `published_time_to`. Значение параметра не должно быть датой из будущего.  {% endnote %}
$status = new \OpenAPI\Client\Model\FeedIndexLogsStatusType(); // FeedIndexLogsStatusType | Статус индексации и проверки прайс-листа на соответствие техническим требованиям.  Возможные значения: * `ERROR` — произошли ошибки. * `OK` — обработан без ошибок. * `WARNING` — наблюдались некритичные проблемы.

try {
    $result = $apiInstance->getFeedIndexLogs($campaign_id, $feed_id, $limit, $published_time_from, $published_time_to, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->getFeedIndexLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **feed_id** | **int**| Идентификатор прайс-листа. | |
| **limit** | **int**| Количество товаров в выходных данных. | [optional] |
| **published_time_from** | **\DateTime**| Начальная дата. Используется для фильтрации записей — по дате и времени публикации предложений на Яндекс Маркете.  Формат даты: ISO 8601 со смещением относительно UTC. Например, &#x60;2017-11-21T00:42:42+03:00&#x60;.  Значение по умолчанию: последние восемь дней со времени отправки запроса. | [optional] |
| **published_time_to** | **\DateTime**| Конечная дата. Используется для фильтрации записей — по дате и времени публикации предложений на Яндекс Маркете.  Формат даты: ISO 8601 со смещением относительно UTC. Например, &#x60;2017-11-31T00:42:42+03:00&#x60;.  Значение по умолчанию: дата и время отправки запроса.  {% note info %}  Если во время переключения между страницами выходных данных на Яндекс Маркете появятся новые результаты индексации прайс-листа, вы не получите часть данных. Чтобы этого не произошло, зафиксируйте выходные данные с помощью входного параметра &#x60;published_time_to&#x60;. Значение параметра не должно быть датой из будущего.  {% endnote %} | [optional] |
| **status** | [**FeedIndexLogsStatusType**](../Model/.md)| Статус индексации и проверки прайс-листа на соответствие техническим требованиям.  Возможные значения: * &#x60;ERROR&#x60; — произошли ошибки. * &#x60;OK&#x60; — обработан без ошибок. * &#x60;WARNING&#x60; — наблюдались некритичные проблемы. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignsCampaignIdFeedsFeedIdIndexLogs**](../Model/CampaignsCampaignIdFeedsFeedIdIndexLogs.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeeds()`

```php
getFeeds($campaign_id): \OpenAPI\Client\Model\CampaignsCampaignIdFeeds
```

Список прайс-листов магазина

Возвращает список прайс-листов, размещенных на Маркете для магазина. Также ресурс возвращает результаты автоматических проверок прайс-листов. |**⚙️ Лимит:** 5 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.

try {
    $result = $apiInstance->getFeeds($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->getFeeds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |

### Return type

[**\OpenAPI\Client\Model\CampaignsCampaignIdFeeds**](../Model/CampaignsCampaignIdFeeds.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshFeed()`

```php
refreshFeed($campaign_id, $feed_id): \OpenAPI\Client\Model\CampaignsCampaignIdFeedsFeedIdRefresh
```

Сообщить, что прайс-лист обновился

Позволяет сообщить, что магазин обновил прайс-лист. После этого Маркет начнет обновление данных на сервисе. 1. Магазин обновляет прайс-лист, ссылку на который он указал в личном кабинете. 2. Магазин отправляет Маркету запрос методом `POST /campaigns/{campaignId}/feeds/{feedId}/refresh`. 3. Маркет начинает обновление данных магазина на сервисе.  {% note alert %}  Запрос работает только для включенных магазинов. Если магазин выключен, данные на Маркете не обновятся, даже если HTTP-код — `200 OK`. Проверить статус магазина можно с помощью базовых запросов или на странице бизнес-аккаунта.  {% endnote %}  {% note info %}  В течение часа магазин может выполнить запрос **не более трех раз** для одного прайс-листа.  {% endnote %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$feed_id = 56; // int | Идентификатор прайс-листа.

try {
    $result = $apiInstance->refreshFeed($campaign_id, $feed_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->refreshFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **feed_id** | **int**| Идентификатор прайс-листа. | |

### Return type

[**\OpenAPI\Client\Model\CampaignsCampaignIdFeedsFeedIdRefresh**](../Model/CampaignsCampaignIdFeedsFeedIdRefresh.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setFeedParams()`

```php
setFeedParams($campaign_id, $feed_id, $body): \OpenAPI\Client\Model\CampaignsCampaignIdFeedsFeedIdParams
```

Изменение параметров прайс-листа

Позволяет магазину изменить параметры прайс-листа.  Чтобы отредактировать параметр прайс-листа, передайте в теле запроса: `name` (название параметра) и `value` (значение параметра).  Чтобы отменить установленное значение, передайте в теле запроса: `name` (название параметра) и `delete=true` (удалить значение).  {% note info %}  В течение часа магазин может выполнить запрос **не более трех** раз для одного прайс-листа.  {% endnote %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$feed_id = 56; // int | Идентификатор прайс-листа.
$body = new \OpenAPI\Client\Model\CampaignsCampaignIdFeedsFeedIdParams(); // \OpenAPI\Client\Model\CampaignsCampaignIdFeedsFeedIdParams

try {
    $result = $apiInstance->setFeedParams($campaign_id, $feed_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->setFeedParams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **feed_id** | **int**| Идентификатор прайс-листа. | |
| **body** | **\OpenAPI\Client\Model\CampaignsCampaignIdFeedsFeedIdParams**|  | |

### Return type

[**\OpenAPI\Client\Model\CampaignsCampaignIdFeedsFeedIdParams**](../Model/CampaignsCampaignIdFeedsFeedIdParams.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
