<?php
/**
 * QualityRatingComponentType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * QualityRatingComponentType Class Doc Comment
 *
 * @category Class
 * @description Составляющие индекса качества.  **Для модели DBS:** * &#x60;DBS_CANCELLATION_RATE&#x60; — доля отмененных товаров. * &#x60;DBS_LATE_DELIVERY_RATE&#x60; — доля заказов, доставленных после плановой даты.  **Для моделей FBS и Экспресс:** * &#x60;FBS_CANCELLATION_RATE&#x60; — доля отмененных товаров. * &#x60;FBS_LATE_SHIP_RATE&#x60; — доля не вовремя отгруженных заказов.  **Для модели FBY:** * &#x60;FBY_LATE_DELIVERY_RATE&#x60; — доля товаров, которые приехали на склад с опозданием. * &#x60;FBY_CANCELLATION_RATE&#x60; — доля отмененных или недоставленных товаров. * &#x60;FBY_DELIVERY_DIFF_RATE&#x60; — доля товаров, которые не прибыли вместе с поставкой или которые не приняли. * &#x60;FBY_LATE_EDITING_RATE&#x60; — доля товаров, которые поздно убрали из заявки.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class QualityRatingComponentType
{
    /**
     * Possible values of this enum
     */
    public const DBS_CANCELLATION_RATE = 'DBS_CANCELLATION_RATE';

    public const DBS_LATE_DELIVERY_RATE = 'DBS_LATE_DELIVERY_RATE';

    public const FBS_CANCELLATION_RATE = 'FBS_CANCELLATION_RATE';

    public const FBS_LATE_SHIP_RATE = 'FBS_LATE_SHIP_RATE';

    public const FBY_LATE_DELIVERY_RATE = 'FBY_LATE_DELIVERY_RATE';

    public const FBY_CANCELLATION_RATE = 'FBY_CANCELLATION_RATE';

    public const FBY_DELIVERY_DIFF_RATE = 'FBY_DELIVERY_DIFF_RATE';

    public const FBY_LATE_EDITING_RATE = 'FBY_LATE_EDITING_RATE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DBS_CANCELLATION_RATE,
            self::DBS_LATE_DELIVERY_RATE,
            self::FBS_CANCELLATION_RATE,
            self::FBS_LATE_SHIP_RATE,
            self::FBY_LATE_DELIVERY_RATE,
            self::FBY_CANCELLATION_RATE,
            self::FBY_DELIVERY_DIFF_RATE,
            self::FBY_LATE_EDITING_RATE
        ];
    }
}


