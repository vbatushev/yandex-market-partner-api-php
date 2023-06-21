# OpenAPIClient-php

API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.

В числе возможностей интеграции:

* управление каталогом товаров и витриной,

* обработка заказов,

* изменение настроек магазина,

* получение отчетов.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор бизнеса.  Чтобы узнать идентификатор, войдите в личный кабинет и выберите **Товары** → **Каталог**, а затем в левом верхнем углу откройте переключатель бизнес-аккаунтов. Чтобы скопировать идентификатор, наведите на него мышь и нажмите появившуюся кнопку.
$body = new \OpenAPI\Client\Model\BusinessesBusinessIdBids(); // \OpenAPI\Client\Model\BusinessesBusinessIdBids | description

try {
    $result = $apiInstance->putBidsForBusiness($business_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BidsApi->putBidsForBusiness: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.partner.market.yandex.ru*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BidsApi* | [**putBidsForBusiness**](docs/Api/BidsApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*BidsApi* | [**putBidsForCampaign**](docs/Api/BidsApi.md#putbidsforcampaign) | **PUT** /campaigns/{campaignId}/bids | description
*CampaignsApi* | [**getCampaign**](docs/Api/CampaignsApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*CampaignsApi* | [**getCampaignLogins**](docs/Api/CampaignsApi.md#getcampaignlogins) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*CampaignsApi* | [**getCampaignRegion**](docs/Api/CampaignsApi.md#getcampaignregion) | **GET** /campaigns/{campaignId}/region | Регион магазина
*CampaignsApi* | [**getCampaignSettings**](docs/Api/CampaignsApi.md#getcampaignsettings) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*CampaignsApi* | [**getCampaigns**](docs/Api/CampaignsApi.md#getcampaigns) | **GET** /campaigns | Магазины пользователя
*CampaignsApi* | [**getCampaignsByLogin**](docs/Api/CampaignsApi.md#getcampaignsbylogin) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*DbsApi* | [**acceptOrderCancellation**](docs/Api/DbsApi.md#acceptordercancellation) | **PUT** /campaigns/{campaignId}/orders/{orderId}/cancellation/accept | Отмена заказа покупателем
*DbsApi* | [**addHiddenOffers**](docs/Api/DbsApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*DbsApi* | [**createOutlet**](docs/Api/DbsApi.md#createoutlet) | **POST** /campaigns/{campaignId}/outlets | Создание точки продаж
*DbsApi* | [**deleteHiddenOffers**](docs/Api/DbsApi.md#deletehiddenoffers) | **DELETE** /campaigns/{campaignId}/hidden-offers | Возобновление показа товаров
*DbsApi* | [**deleteOutlet**](docs/Api/DbsApi.md#deleteoutlet) | **DELETE** /campaigns/{campaignId}/outlets/{outletId} | Удаление точки продаж
*DbsApi* | [**deleteOutletLicenses**](docs/Api/DbsApi.md#deleteoutletlicenses) | **DELETE** /campaigns/{campaignId}/outlets/licenses | Удаление лицензий для точек продаж
*DbsApi* | [**generateOrderLabel**](docs/Api/DbsApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Ярлык‑наклейка на отдельное грузовое место в заказе
*DbsApi* | [**generateOrderLabels**](docs/Api/DbsApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Ярлыки‑наклейки на все грузовые места в заказе
*DbsApi* | [**getAllOffers**](docs/Api/DbsApi.md#getalloffers) | **GET** /campaigns/{campaignId}/offers/all | Все предложения магазина
*DbsApi* | [**getCampaign**](docs/Api/DbsApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*DbsApi* | [**getCampaignFeedCategories**](docs/Api/DbsApi.md#getcampaignfeedcategories) | **GET** /campaigns/{campaignId}/feeds/categories | Категории магазина
*DbsApi* | [**getCampaignLogins**](docs/Api/DbsApi.md#getcampaignlogins) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*DbsApi* | [**getCampaignRegion**](docs/Api/DbsApi.md#getcampaignregion) | **GET** /campaigns/{campaignId}/region | Регион магазина
*DbsApi* | [**getCampaignSettings**](docs/Api/DbsApi.md#getcampaignsettings) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*DbsApi* | [**getCampaigns**](docs/Api/DbsApi.md#getcampaigns) | **GET** /campaigns | Магазины пользователя
*DbsApi* | [**getCampaignsByLogin**](docs/Api/DbsApi.md#getcampaignsbylogin) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*DbsApi* | [**getDeliveryServices**](docs/Api/DbsApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*DbsApi* | [**getFeed**](docs/Api/DbsApi.md#getfeed) | **GET** /campaigns/{campaignId}/feeds/{feedId} | Информация о прайс-листе
*DbsApi* | [**getFeedCategories**](docs/Api/DbsApi.md#getfeedcategories) | **GET** /campaigns/{campaignId}/feeds/{feedId}/categories | Категории прайс-листа
*DbsApi* | [**getFeedIndexLogs**](docs/Api/DbsApi.md#getfeedindexlogs) | **GET** /campaigns/{campaignId}/feeds/{feedId}/index-logs | Отчет по индексации прайс-листа
*DbsApi* | [**getFeedbackAndCommentUpdates**](docs/Api/DbsApi.md#getfeedbackandcommentupdates) | **GET** /campaigns/{campaignId}/feedback/updates | Новые и обновленные отзывы о магазине
*DbsApi* | [**getFeeds**](docs/Api/DbsApi.md#getfeeds) | **GET** /campaigns/{campaignId}/feeds | Список прайс-листов магазина
*DbsApi* | [**getHiddenOffers**](docs/Api/DbsApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*DbsApi* | [**getModel**](docs/Api/DbsApi.md#getmodel) | **GET** /models/{modelId} | Информация о модели
*DbsApi* | [**getModelOffers**](docs/Api/DbsApi.md#getmodeloffers) | **GET** /models/{modelId}/offers | Список предложений для модели
*DbsApi* | [**getModels**](docs/Api/DbsApi.md#getmodels) | **POST** /models | Информация о нескольких моделях
*DbsApi* | [**getModelsOffers**](docs/Api/DbsApi.md#getmodelsoffers) | **POST** /models/offers | Список предложений для нескольких моделей
*DbsApi* | [**getOffers**](docs/Api/DbsApi.md#getoffers) | **GET** /campaigns/{campaignId}/offers | Предложения магазина
*DbsApi* | [**getOrder**](docs/Api/DbsApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация о заказе
*DbsApi* | [**getOrderBuyerInfo**](docs/Api/DbsApi.md#getorderbuyerinfo) | **GET** /campaigns/{campaignId}/orders/{orderId}/buyer | Информация о покупателе
*DbsApi* | [**getOrders**](docs/Api/DbsApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о заказах
*DbsApi* | [**getOrdersStats**](docs/Api/DbsApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Отчет по заказам
*DbsApi* | [**getOutlet**](docs/Api/DbsApi.md#getoutlet) | **GET** /campaigns/{campaignId}/outlets/{outletId} | Информация о точке продаж
*DbsApi* | [**getOutletLicenses**](docs/Api/DbsApi.md#getoutletlicenses) | **GET** /campaigns/{campaignId}/outlets/licenses | Информация о лицензиях для точек продаж
*DbsApi* | [**getOutlets**](docs/Api/DbsApi.md#getoutlets) | **GET** /campaigns/{campaignId}/outlets | Информация о точках продаж
*DbsApi* | [**getPrices**](docs/Api/DbsApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*DbsApi* | [**getReturn**](docs/Api/DbsApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о возврате или невыкупе
*DbsApi* | [**getReturnApplication**](docs/Api/DbsApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*DbsApi* | [**getReturnPhoto**](docs/Api/DbsApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*DbsApi* | [**getReturns**](docs/Api/DbsApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список возвратов и невыкупов
*DbsApi* | [**provideOrderDigitalCodes**](docs/Api/DbsApi.md#provideorderdigitalcodes) | **POST** /campaigns/{campaignId}/orders/{orderId}/deliverDigitalGoods | Передача ключей цифровых товаров
*DbsApi* | [**provideOrderItemIdentifiers**](docs/Api/DbsApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача уникальных кодов маркировки единиц товара
*DbsApi* | [**putBidsForBusiness**](docs/Api/DbsApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*DbsApi* | [**putBidsForCampaign**](docs/Api/DbsApi.md#putbidsforcampaign) | **PUT** /campaigns/{campaignId}/bids | description
*DbsApi* | [**refreshFeed**](docs/Api/DbsApi.md#refreshfeed) | **POST** /campaigns/{campaignId}/feeds/{feedId}/refresh | Сообщить, что прайс-лист обновился
*DbsApi* | [**searchModels**](docs/Api/DbsApi.md#searchmodels) | **GET** /models | Поиск модели товара
*DbsApi* | [**searchRegionChildren**](docs/Api/DbsApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*DbsApi* | [**searchRegionsById**](docs/Api/DbsApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*DbsApi* | [**searchRegionsByName**](docs/Api/DbsApi.md#searchregionsbyname) | **GET** /regions | Метод для поиска регионов по их имени
*DbsApi* | [**setFeedParams**](docs/Api/DbsApi.md#setfeedparams) | **POST** /campaigns/{campaignId}/feeds/{feedId}/params | Изменение параметров прайс-листа
*DbsApi* | [**setOrderDeliveryDate**](docs/Api/DbsApi.md#setorderdeliverydate) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/date | Изменение даты доставки заказа
*DbsApi* | [**setOrderDeliveryTrackCode**](docs/Api/DbsApi.md#setorderdeliverytrackcode) | **POST** /campaigns/{campaignId}/orders/{orderId}/delivery/track | Передача трек‑номера посылки
*DbsApi* | [**setOrderShipmentBoxes**](docs/Api/DbsApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*DbsApi* | [**setReturnDecision**](docs/Api/DbsApi.md#setreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision | Принятие/изменение решения по позиции в возврате
*DbsApi* | [**submitReturnDecision**](docs/Api/DbsApi.md#submitreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Подтверждение решения по возвратным позициям
*DbsApi* | [**updateOrderItems**](docs/Api/DbsApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц
*DbsApi* | [**updateOrderStatus**](docs/Api/DbsApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса заказа
*DbsApi* | [**updateOrderStatuses**](docs/Api/DbsApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов заказа
*DbsApi* | [**updateOrderStorageLimit**](docs/Api/DbsApi.md#updateorderstoragelimit) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit | Продление срока хранения заказа
*DbsApi* | [**updateOutlet**](docs/Api/DbsApi.md#updateoutlet) | **PUT** /campaigns/{campaignId}/outlets/{outletId} | Изменение информации о точке продаж
*DbsApi* | [**updateOutletLicenses**](docs/Api/DbsApi.md#updateoutletlicenses) | **POST** /campaigns/{campaignId}/outlets/licenses | Создание и изменение лицензий для точек продаж
*DbsApi* | [**updatePrices**](docs/Api/DbsApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине.
*DbsApi* | [**updateStocks**](docs/Api/DbsApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*DeliveryServicesApi* | [**getDeliveryServices**](docs/Api/DeliveryServicesApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*ExpressApi* | [**generateOrderLabel**](docs/Api/ExpressApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Ярлык‑наклейка на отдельное грузовое место в заказе
*ExpressApi* | [**generateOrderLabels**](docs/Api/ExpressApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Ярлыки‑наклейки на все грузовые места в заказе
*ExpressApi* | [**getCampaign**](docs/Api/ExpressApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*ExpressApi* | [**getCampaignLogins**](docs/Api/ExpressApi.md#getcampaignlogins) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*ExpressApi* | [**getCampaigns**](docs/Api/ExpressApi.md#getcampaigns) | **GET** /campaigns | Магазины пользователя
*ExpressApi* | [**getCampaignsByLogin**](docs/Api/ExpressApi.md#getcampaignsbylogin) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*ExpressApi* | [**getDeliveryServices**](docs/Api/ExpressApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*ExpressApi* | [**getGoodsStats**](docs/Api/ExpressApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*ExpressApi* | [**getOfferMappingEntries**](docs/Api/ExpressApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*ExpressApi* | [**getOrder**](docs/Api/ExpressApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация о заказе
*ExpressApi* | [**getOrderLabelsData**](docs/Api/ExpressApi.md#getorderlabelsdata) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Информация на ярлыках‑наклейках
*ExpressApi* | [**getOrders**](docs/Api/ExpressApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о заказах
*ExpressApi* | [**getOrdersStats**](docs/Api/ExpressApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Отчет по заказам
*ExpressApi* | [**getPrices**](docs/Api/ExpressApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*ExpressApi* | [**getReturn**](docs/Api/ExpressApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о возврате или невыкупе
*ExpressApi* | [**getReturnApplication**](docs/Api/ExpressApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*ExpressApi* | [**getReturnPhoto**](docs/Api/ExpressApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*ExpressApi* | [**getReturns**](docs/Api/ExpressApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список возвратов и невыкупов
*ExpressApi* | [**getSuggestedOfferMappingEntries**](docs/Api/ExpressApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для ваших товаров
*ExpressApi* | [**getSuggestedPrices**](docs/Api/ExpressApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*ExpressApi* | [**provideOrderItemIdentifiers**](docs/Api/ExpressApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача уникальных кодов маркировки единиц товара
*ExpressApi* | [**putBidsForBusiness**](docs/Api/ExpressApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*ExpressApi* | [**setOrderShipmentBoxes**](docs/Api/ExpressApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*ExpressApi* | [**updateOfferMappingEntries**](docs/Api/ExpressApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*ExpressApi* | [**updateOrderItems**](docs/Api/ExpressApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц
*ExpressApi* | [**updateOrderStatus**](docs/Api/ExpressApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса заказа
*ExpressApi* | [**updateOrderStatuses**](docs/Api/ExpressApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов заказа
*ExpressApi* | [**updatePrices**](docs/Api/ExpressApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине.
*ExpressApi* | [**updateStocks**](docs/Api/ExpressApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*ExpressApi* | [**verifyOrderEac**](docs/Api/ExpressApi.md#verifyordereac) | **PUT** /campaigns/{campaignId}/orders/{orderId}/verifyEac | Передача кода проверки
*FbsApi* | [**addHiddenOffers**](docs/Api/FbsApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*FbsApi* | [**confirmShipment**](docs/Api/FbsApi.md#confirmshipment) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/confirm | Подтверждение отгрузки
*FbsApi* | [**deleteHiddenOffers**](docs/Api/FbsApi.md#deletehiddenoffers) | **DELETE** /campaigns/{campaignId}/hidden-offers | Возобновление показа товаров
*FbsApi* | [**downloadShipmentAct**](docs/Api/FbsApi.md#downloadshipmentact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/act | Получение акта приема-передачи
*FbsApi* | [**downloadShipmentDiscrepancyAct**](docs/Api/FbsApi.md#downloadshipmentdiscrepancyact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/discrepancy-act | Скачать акт расхождений
*FbsApi* | [**downloadShipmentInboundAct**](docs/Api/FbsApi.md#downloadshipmentinboundact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/inbound-act | Скачать фактический акт приема-передачи для отгрузки
*FbsApi* | [**downloadShipmentReceptionTransferAct**](docs/Api/FbsApi.md#downloadshipmentreceptiontransferact) | **GET** /campaigns/{campaignId}/shipments/reception-transfer-act | Подтверждение ближайшей отгрузки и получение акта приема-передачи для нее
*FbsApi* | [**downloadShipmentTransportationWaybill**](docs/Api/FbsApi.md#downloadshipmenttransportationwaybill) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/transportation-waybill | Скачать транспортную накладную
*FbsApi* | [**generateOrderLabel**](docs/Api/FbsApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Ярлык‑наклейка на отдельное грузовое место в заказе
*FbsApi* | [**generateOrderLabels**](docs/Api/FbsApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Ярлыки‑наклейки на все грузовые места в заказе
*FbsApi* | [**getCampaign**](docs/Api/FbsApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*FbsApi* | [**getCampaignLogins**](docs/Api/FbsApi.md#getcampaignlogins) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*FbsApi* | [**getCampaigns**](docs/Api/FbsApi.md#getcampaigns) | **GET** /campaigns | Магазины пользователя
*FbsApi* | [**getCampaignsByLogin**](docs/Api/FbsApi.md#getcampaignsbylogin) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*FbsApi* | [**getDeliveryServices**](docs/Api/FbsApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*FbsApi* | [**getGoodsStats**](docs/Api/FbsApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*FbsApi* | [**getHiddenOffers**](docs/Api/FbsApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*FbsApi* | [**getOfferMappingEntries**](docs/Api/FbsApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*FbsApi* | [**getOrder**](docs/Api/FbsApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация о заказе
*FbsApi* | [**getOrderLabelsData**](docs/Api/FbsApi.md#getorderlabelsdata) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Информация на ярлыках‑наклейках
*FbsApi* | [**getOrders**](docs/Api/FbsApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о заказах
*FbsApi* | [**getOrdersStats**](docs/Api/FbsApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Отчет по заказам
*FbsApi* | [**getPrices**](docs/Api/FbsApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*FbsApi* | [**getReturn**](docs/Api/FbsApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о возврате или невыкупе
*FbsApi* | [**getReturnApplication**](docs/Api/FbsApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*FbsApi* | [**getReturnPhoto**](docs/Api/FbsApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*FbsApi* | [**getReturns**](docs/Api/FbsApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список возвратов и невыкупов
*FbsApi* | [**getShipment**](docs/Api/FbsApi.md#getshipment) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId} | Получение информации об отгрузке
*FbsApi* | [**getShipmentOrdersInfo**](docs/Api/FbsApi.md#getshipmentordersinfo) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/info | Получение информации о ярлыках
*FbsApi* | [**getSuggestedOfferMappingEntries**](docs/Api/FbsApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для ваших товаров
*FbsApi* | [**getSuggestedPrices**](docs/Api/FbsApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*FbsApi* | [**provideOrderItemIdentifiers**](docs/Api/FbsApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача уникальных кодов маркировки единиц товара
*FbsApi* | [**putBidsForBusiness**](docs/Api/FbsApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*FbsApi* | [**searchRegionChildren**](docs/Api/FbsApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*FbsApi* | [**searchRegionsById**](docs/Api/FbsApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*FbsApi* | [**searchRegionsByName**](docs/Api/FbsApi.md#searchregionsbyname) | **GET** /regions | Метод для поиска регионов по их имени
*FbsApi* | [**searchShipments**](docs/Api/FbsApi.md#searchshipments) | **PUT** /campaigns/{campaignId}/first-mile/shipments | Получение информации об отгрузках
*FbsApi* | [**setOrderShipmentBoxes**](docs/Api/FbsApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*FbsApi* | [**updateOfferMappingEntries**](docs/Api/FbsApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*FbsApi* | [**updateOrderItems**](docs/Api/FbsApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц
*FbsApi* | [**updateOrderStatus**](docs/Api/FbsApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса заказа
*FbsApi* | [**updateOrderStatuses**](docs/Api/FbsApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов заказа
*FbsApi* | [**updatePrices**](docs/Api/FbsApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине.
*FbsApi* | [**updateStocks**](docs/Api/FbsApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*FbyApi* | [**addHiddenOffers**](docs/Api/FbyApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*FbyApi* | [**createFaasOrder**](docs/Api/FbyApi.md#createfaasorder) | **POST** /campaigns/{campaignId}/orders | Создание заказа
*FbyApi* | [**deleteHiddenOffers**](docs/Api/FbyApi.md#deletehiddenoffers) | **DELETE** /campaigns/{campaignId}/hidden-offers | Возобновление показа товаров
*FbyApi* | [**getActualStocks**](docs/Api/FbyApi.md#getactualstocks) | **GET** /campaigns/{campaignId}/warehouses/{warehouseId}/stocks/actual | Запрос информации об остатках
*FbyApi* | [**getCampaign**](docs/Api/FbyApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*FbyApi* | [**getCampaignLogins**](docs/Api/FbyApi.md#getcampaignlogins) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*FbyApi* | [**getCampaigns**](docs/Api/FbyApi.md#getcampaigns) | **GET** /campaigns | Магазины пользователя
*FbyApi* | [**getCampaignsByLogin**](docs/Api/FbyApi.md#getcampaignsbylogin) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*FbyApi* | [**getGoodsStats**](docs/Api/FbyApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*FbyApi* | [**getHiddenOffers**](docs/Api/FbyApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*FbyApi* | [**getOfferMappingEntries**](docs/Api/FbyApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*FbyApi* | [**getOrder**](docs/Api/FbyApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация о заказе
*FbyApi* | [**getOrderDeliveryOptions**](docs/Api/FbyApi.md#getorderdeliveryoptions) | **POST** /campaigns/{campaignId}/delivery/get-options | Метод для получения слотов доставки по адресу и товарным позициям для создания FaaS-заказа
*FbyApi* | [**getOrdersStats**](docs/Api/FbyApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Отчет по заказам
*FbyApi* | [**getPrices**](docs/Api/FbyApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*FbyApi* | [**getSuggestedOfferMappingEntries**](docs/Api/FbyApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для ваших товаров
*FbyApi* | [**getSuggestedPrices**](docs/Api/FbyApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*FbyApi* | [**putBidsForBusiness**](docs/Api/FbyApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*FbyApi* | [**searchRegionChildren**](docs/Api/FbyApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*FbyApi* | [**searchRegionsById**](docs/Api/FbyApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*FbyApi* | [**searchRegionsByName**](docs/Api/FbyApi.md#searchregionsbyname) | **GET** /regions | Метод для поиска регионов по их имени
*FbyApi* | [**updateOfferMappingEntries**](docs/Api/FbyApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*FbyApi* | [**updateOrderStatus**](docs/Api/FbyApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса заказа
*FbyApi* | [**updatePrices**](docs/Api/FbyApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине.
*FeedCategoriesApi* | [**getCampaignFeedCategories**](docs/Api/FeedCategoriesApi.md#getcampaignfeedcategories) | **GET** /campaigns/{campaignId}/feeds/categories | Категории магазина
*FeedCategoriesApi* | [**getFeedCategories**](docs/Api/FeedCategoriesApi.md#getfeedcategories) | **GET** /campaigns/{campaignId}/feeds/{feedId}/categories | Категории прайс-листа
*FeedbacksApi* | [**getFeedbackAndCommentUpdates**](docs/Api/FeedbacksApi.md#getfeedbackandcommentupdates) | **GET** /campaigns/{campaignId}/feedback/updates | Новые и обновленные отзывы о магазине
*FeedsApi* | [**getFeed**](docs/Api/FeedsApi.md#getfeed) | **GET** /campaigns/{campaignId}/feeds/{feedId} | Информация о прайс-листе
*FeedsApi* | [**getFeedIndexLogs**](docs/Api/FeedsApi.md#getfeedindexlogs) | **GET** /campaigns/{campaignId}/feeds/{feedId}/index-logs | Отчет по индексации прайс-листа
*FeedsApi* | [**getFeeds**](docs/Api/FeedsApi.md#getfeeds) | **GET** /campaigns/{campaignId}/feeds | Список прайс-листов магазина
*FeedsApi* | [**refreshFeed**](docs/Api/FeedsApi.md#refreshfeed) | **POST** /campaigns/{campaignId}/feeds/{feedId}/refresh | Сообщить, что прайс-лист обновился
*FeedsApi* | [**setFeedParams**](docs/Api/FeedsApi.md#setfeedparams) | **POST** /campaigns/{campaignId}/feeds/{feedId}/params | Изменение параметров прайс-листа
*GoodsStatsApi* | [**getGoodsStats**](docs/Api/GoodsStatsApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*HiddenOffersApi* | [**addHiddenOffers**](docs/Api/HiddenOffersApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*HiddenOffersApi* | [**deleteHiddenOffers**](docs/Api/HiddenOffersApi.md#deletehiddenoffers) | **DELETE** /campaigns/{campaignId}/hidden-offers | Возобновление показа товаров
*HiddenOffersApi* | [**getHiddenOffers**](docs/Api/HiddenOffersApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*ModelsApi* | [**getModel**](docs/Api/ModelsApi.md#getmodel) | **GET** /models/{modelId} | Информация о модели
*ModelsApi* | [**getModelOffers**](docs/Api/ModelsApi.md#getmodeloffers) | **GET** /models/{modelId}/offers | Список предложений для модели
*ModelsApi* | [**getModels**](docs/Api/ModelsApi.md#getmodels) | **POST** /models | Информация о нескольких моделях
*ModelsApi* | [**getModelsOffers**](docs/Api/ModelsApi.md#getmodelsoffers) | **POST** /models/offers | Список предложений для нескольких моделей
*ModelsApi* | [**searchModels**](docs/Api/ModelsApi.md#searchmodels) | **GET** /models | Поиск модели товара
*OfferMappingsApi* | [**getOfferMappingEntries**](docs/Api/OfferMappingsApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*OfferMappingsApi* | [**getSuggestedOfferMappingEntries**](docs/Api/OfferMappingsApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для ваших товаров
*OfferMappingsApi* | [**updateOfferMappingEntries**](docs/Api/OfferMappingsApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*OffersApi* | [**getAllOffers**](docs/Api/OffersApi.md#getalloffers) | **GET** /campaigns/{campaignId}/offers/all | Все предложения магазина
*OffersApi* | [**getOffers**](docs/Api/OffersApi.md#getoffers) | **GET** /campaigns/{campaignId}/offers | Предложения магазина
*OrderDeliveryApi* | [**getOrderBuyerInfo**](docs/Api/OrderDeliveryApi.md#getorderbuyerinfo) | **GET** /campaigns/{campaignId}/orders/{orderId}/buyer | Информация о покупателе
*OrderDeliveryApi* | [**getOrderDeliveryOptions**](docs/Api/OrderDeliveryApi.md#getorderdeliveryoptions) | **POST** /campaigns/{campaignId}/delivery/get-options | Метод для получения слотов доставки по адресу и товарным позициям для создания FaaS-заказа
*OrderDeliveryApi* | [**setOrderDeliveryDate**](docs/Api/OrderDeliveryApi.md#setorderdeliverydate) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/date | Изменение даты доставки заказа
*OrderDeliveryApi* | [**setOrderDeliveryTrackCode**](docs/Api/OrderDeliveryApi.md#setorderdeliverytrackcode) | **POST** /campaigns/{campaignId}/orders/{orderId}/delivery/track | Передача трек‑номера посылки
*OrderDeliveryApi* | [**updateOrderStorageLimit**](docs/Api/OrderDeliveryApi.md#updateorderstoragelimit) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit | Продление срока хранения заказа
*OrderDeliveryApi* | [**verifyOrderEac**](docs/Api/OrderDeliveryApi.md#verifyordereac) | **PUT** /campaigns/{campaignId}/orders/{orderId}/verifyEac | Передача кода проверки
*OrderLabelsApi* | [**generateOrderLabel**](docs/Api/OrderLabelsApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Ярлык‑наклейка на отдельное грузовое место в заказе
*OrderLabelsApi* | [**generateOrderLabels**](docs/Api/OrderLabelsApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Ярлыки‑наклейки на все грузовые места в заказе
*OrderLabelsApi* | [**getOrderLabelsData**](docs/Api/OrderLabelsApi.md#getorderlabelsdata) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Информация на ярлыках‑наклейках
*OrdersApi* | [**acceptOrderCancellation**](docs/Api/OrdersApi.md#acceptordercancellation) | **PUT** /campaigns/{campaignId}/orders/{orderId}/cancellation/accept | Отмена заказа покупателем
*OrdersApi* | [**createFaasOrder**](docs/Api/OrdersApi.md#createfaasorder) | **POST** /campaigns/{campaignId}/orders | Создание заказа
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация о заказе
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о заказах
*OrdersApi* | [**provideOrderDigitalCodes**](docs/Api/OrdersApi.md#provideorderdigitalcodes) | **POST** /campaigns/{campaignId}/orders/{orderId}/deliverDigitalGoods | Передача ключей цифровых товаров
*OrdersApi* | [**provideOrderItemIdentifiers**](docs/Api/OrdersApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача уникальных кодов маркировки единиц товара
*OrdersApi* | [**setOrderShipmentBoxes**](docs/Api/OrdersApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*OrdersApi* | [**updateOrderItems**](docs/Api/OrdersApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц
*OrdersApi* | [**updateOrderStatus**](docs/Api/OrdersApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса заказа
*OrdersApi* | [**updateOrderStatuses**](docs/Api/OrdersApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов заказа
*OrdersStatsApi* | [**getOrdersStats**](docs/Api/OrdersStatsApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Отчет по заказам
*OutletLicensesApi* | [**deleteOutletLicenses**](docs/Api/OutletLicensesApi.md#deleteoutletlicenses) | **DELETE** /campaigns/{campaignId}/outlets/licenses | Удаление лицензий для точек продаж
*OutletLicensesApi* | [**getOutletLicenses**](docs/Api/OutletLicensesApi.md#getoutletlicenses) | **GET** /campaigns/{campaignId}/outlets/licenses | Информация о лицензиях для точек продаж
*OutletLicensesApi* | [**updateOutletLicenses**](docs/Api/OutletLicensesApi.md#updateoutletlicenses) | **POST** /campaigns/{campaignId}/outlets/licenses | Создание и изменение лицензий для точек продаж
*OutletsApi* | [**createOutlet**](docs/Api/OutletsApi.md#createoutlet) | **POST** /campaigns/{campaignId}/outlets | Создание точки продаж
*OutletsApi* | [**deleteOutlet**](docs/Api/OutletsApi.md#deleteoutlet) | **DELETE** /campaigns/{campaignId}/outlets/{outletId} | Удаление точки продаж
*OutletsApi* | [**getOutlet**](docs/Api/OutletsApi.md#getoutlet) | **GET** /campaigns/{campaignId}/outlets/{outletId} | Информация о точке продаж
*OutletsApi* | [**getOutlets**](docs/Api/OutletsApi.md#getoutlets) | **GET** /campaigns/{campaignId}/outlets | Информация о точках продаж
*OutletsApi* | [**updateOutlet**](docs/Api/OutletsApi.md#updateoutlet) | **PUT** /campaigns/{campaignId}/outlets/{outletId} | Изменение информации о точке продаж
*PricesApi* | [**getPrices**](docs/Api/PricesApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*PricesApi* | [**getSuggestedPrices**](docs/Api/PricesApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*PricesApi* | [**updatePrices**](docs/Api/PricesApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине.
*RegionsApi* | [**searchRegionChildren**](docs/Api/RegionsApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*RegionsApi* | [**searchRegionsById**](docs/Api/RegionsApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*RegionsApi* | [**searchRegionsByName**](docs/Api/RegionsApi.md#searchregionsbyname) | **GET** /regions | Метод для поиска регионов по их имени
*ReturnsApi* | [**getReturn**](docs/Api/ReturnsApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о возврате или невыкупе
*ReturnsApi* | [**getReturnApplication**](docs/Api/ReturnsApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*ReturnsApi* | [**getReturnPhoto**](docs/Api/ReturnsApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*ReturnsApi* | [**getReturns**](docs/Api/ReturnsApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список возвратов и невыкупов
*ReturnsApi* | [**setReturnDecision**](docs/Api/ReturnsApi.md#setreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision | Принятие/изменение решения по позиции в возврате
*ReturnsApi* | [**submitReturnDecision**](docs/Api/ReturnsApi.md#submitreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Подтверждение решения по возвратным позициям
*ShipmentsApi* | [**confirmShipment**](docs/Api/ShipmentsApi.md#confirmshipment) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/confirm | Подтверждение отгрузки
*ShipmentsApi* | [**downloadShipmentAct**](docs/Api/ShipmentsApi.md#downloadshipmentact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/act | Получение акта приема-передачи
*ShipmentsApi* | [**downloadShipmentDiscrepancyAct**](docs/Api/ShipmentsApi.md#downloadshipmentdiscrepancyact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/discrepancy-act | Скачать акт расхождений
*ShipmentsApi* | [**downloadShipmentInboundAct**](docs/Api/ShipmentsApi.md#downloadshipmentinboundact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/inbound-act | Скачать фактический акт приема-передачи для отгрузки
*ShipmentsApi* | [**downloadShipmentReceptionTransferAct**](docs/Api/ShipmentsApi.md#downloadshipmentreceptiontransferact) | **GET** /campaigns/{campaignId}/shipments/reception-transfer-act | Подтверждение ближайшей отгрузки и получение акта приема-передачи для нее
*ShipmentsApi* | [**downloadShipmentTransportationWaybill**](docs/Api/ShipmentsApi.md#downloadshipmenttransportationwaybill) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/transportation-waybill | Скачать транспортную накладную
*ShipmentsApi* | [**getShipment**](docs/Api/ShipmentsApi.md#getshipment) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId} | Получение информации об отгрузке
*ShipmentsApi* | [**getShipmentOrdersInfo**](docs/Api/ShipmentsApi.md#getshipmentordersinfo) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/info | Получение информации о ярлыках
*ShipmentsApi* | [**searchShipments**](docs/Api/ShipmentsApi.md#searchshipments) | **PUT** /campaigns/{campaignId}/first-mile/shipments | Получение информации об отгрузках
*StocksApi* | [**getActualStocks**](docs/Api/StocksApi.md#getactualstocks) | **GET** /campaigns/{campaignId}/warehouses/{warehouseId}/stocks/actual | Запрос информации об остатках
*StocksApi* | [**updateStocks**](docs/Api/StocksApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках

## Models

- [ApiClientDataErrorResponse](docs/Model/ApiClientDataErrorResponse.md)
- [ApiErrorDTO](docs/Model/ApiErrorDTO.md)
- [ApiErrorResponse](docs/Model/ApiErrorResponse.md)
- [ApiForbiddenErrorResponse](docs/Model/ApiForbiddenErrorResponse.md)
- [ApiLimitErrorResponse](docs/Model/ApiLimitErrorResponse.md)
- [ApiLockedErrorResponse](docs/Model/ApiLockedErrorResponse.md)
- [ApiNotFoundErrorResponse](docs/Model/ApiNotFoundErrorResponse.md)
- [ApiResponse](docs/Model/ApiResponse.md)
- [ApiResponseStatusType](docs/Model/ApiResponseStatusType.md)
- [ApiServerErrorResponse](docs/Model/ApiServerErrorResponse.md)
- [ApiUnauthorizedErrorResponse](docs/Model/ApiUnauthorizedErrorResponse.md)
- [CampaignDTO](docs/Model/CampaignDTO.md)
- [CurrencyType](docs/Model/CurrencyType.md)
- [DeliveryServiceInfoDTO](docs/Model/DeliveryServiceInfoDTO.md)
- [DeliveryServicesDTO](docs/Model/DeliveryServicesDTO.md)
- [EnrichedModelDTO](docs/Model/EnrichedModelDTO.md)
- [FeedIndexLogsStatusType](docs/Model/FeedIndexLogsStatusType.md)
- [FlippingPagerDTO](docs/Model/FlippingPagerDTO.md)
- [GetCampaignsResponse](docs/Model/GetCampaignsResponse.md)
- [GetDeliveryServicesResponse](docs/Model/GetDeliveryServicesResponse.md)
- [GetModelsOffersResponse](docs/Model/GetModelsOffersResponse.md)
- [GetModelsRequest](docs/Model/GetModelsRequest.md)
- [GetModelsResponse](docs/Model/GetModelsResponse.md)
- [GetRegionsResponse](docs/Model/GetRegionsResponse.md)
- [ModelDTO](docs/Model/ModelDTO.md)
- [ModelOfferDTO](docs/Model/ModelOfferDTO.md)
- [ModelPriceDTO](docs/Model/ModelPriceDTO.md)
- [OfferAvailabilityStatusType](docs/Model/OfferAvailabilityStatusType.md)
- [OfferMappingKindType](docs/Model/OfferMappingKindType.md)
- [OfferProcessingStatusType](docs/Model/OfferProcessingStatusType.md)
- [OrderDeliveryDispatchType](docs/Model/OrderDeliveryDispatchType.md)
- [OrderStatusType](docs/Model/OrderStatusType.md)
- [OrderSubstatusType](docs/Model/OrderSubstatusType.md)
- [PageFormatType](docs/Model/PageFormatType.md)
- [RegionDTO](docs/Model/RegionDTO.md)
- [RegionType](docs/Model/RegionType.md)
- [RegionalModelInfoDTO](docs/Model/RegionalModelInfoDTO.md)
- [SearchModelsResponse](docs/Model/SearchModelsResponse.md)
- [SortOrderType](docs/Model/SortOrderType.md)

## Authorization

Authentication schemes defined for the API:
### OAuth

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://oauth.yandex.ru/authorize`
- **Scopes**: 
    - **market:partner-api**: API Яндекс.Маркета / Поиска по товарам для партнеров

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `LATEST`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
