<?php
/**
 * OfferCardRecommendationType
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
 * OfferCardRecommendationType Class Doc Comment
 *
 * @category Class
 * @description Рекомендация по дополнению или замене контента. Не возвращается для карточек, которые заполнены Маркетом или содержат бывшие в употреблении товары.  Часть рекомендаций относятся к **основным параметрам**, которые есть у товаров любых категорий. Другие — к тем **характеристикам**, которые есть у товара потому, что он относится к определенной категории.  **1. Рекомендации, относящиеся к основным параметрам**  Каждая такая рекомендация относится к **единственному параметру**. Чтобы заполнить этот параметр, пользуйтесь запросом [POST businesses/{businessId}/offer-mappings/update](../../reference/business-assortment/updateOfferMappings.md).  Рекомендации по заполнению параметров в &#x60;updateOfferMappings&#x60;:  * &#x60;RECOGNIZED_VENDOR&#x60; — напишите название производителя так, как его пишет сам производитель (параметр &#x60;vendor&#x60;). * &#x60;PICTURE_COUNT&#x60; — добавьте изображения (параметр &#x60;pictures&#x60;). [Требования](https://yandex.ru/support2/marketplace/ru/assortment/fields/images)    Для рекомендации приходит процент ее выполнения. * &#x60;FIRST_PICTURE_SIZE&#x60;— замените первое изображение более крупным (параметр &#x60;pictures&#x60;). [Требования](https://yandex.ru/support2/marketplace/ru/assortment/fields/images) * &#x60;TITLE_LENGTH&#x60; — измените название (параметр &#x60;name&#x60;). Составьте название по схеме: тип + бренд или производитель + модель + особенности, если есть (размер, вес, цвет). [Требования](https://yandex.ru/support2/marketplace/ru/assortment/fields/title) * &#x60;DESCRIPTION_LENGTH&#x60; — добавьте описание рекомендуемого размера (параметр &#x60;description&#x60;). [Требования](https://yandex.ru/support2/marketplace/ru/assortment/fields/description) * &#x60;AVERAGE_PICTURE_SIZE&#x60; — замените все изображения на изображения высокого качества (параметр &#x60;pictures&#x60;). [Требования](https://yandex.ru/support2/marketplace/ru/assortment/fields/images) * &#x60;FIRST_VIDEO_LENGTH&#x60; — добавьте первое видео рекомендуемой длины (параметр &#x60;videos&#x60;). [Требования](https://yandex.ru/support2/marketplace/ru/assortment/fields/video) * &#x60;AVERAGE_VIDEO_SIZE&#x60; — замените все видео на видео высокого качества (параметр &#x60;videos&#x60;). [Требования](https://yandex.ru/support2/marketplace/ru/assortment/fields/video) * &#x60;VIDEO_COUNT&#x60; — добавьте больше видео (параметр &#x60;videos&#x60;). [Требования](https://yandex.ru/support2/marketplace/ru/assortment/fields/video)    Для рекомендации приходит процент ее выполнения.  **2. Рекомендации, относящиеся к характеристикам по категориям**  Каждая такая рекомендация предполагает заполнение **одной или нескольких характеристик**. Чтобы узнать, какие именно характеристики нужно заполнить, воспользуйтесь запросом [POST category/{categoryId}/parameters](../../reference/content/getCategoryContentParameters.md). Например, если вы получили рекомендацию &#x60;MAIN&#x60;, нужно заполнить характеристики, имеющие &#x60;MAIN&#x60; в массиве &#x60;recommendationTypes&#x60;.  Рекомендации:  * &#x60;MAIN&#x60; — заполните ключевые характеристики товара, которые используются в поиске и фильтрах.    Для рекомендации приходит процент ее выполнения. * &#x60;ADDITIONAL&#x60; — заполните дополнительные характеристики товара.    Для рекомендации приходит процент ее выполнения. * &#x60;DISTINCTIVE&#x60; — заполните характеристики, которыми отличаются друг от друга варианты товара.    Для рекомендации приходит процент ее выполнения.  **3. Устаревшие рекомендации**  * &#x60;HAS_VIDEO&#x60;. * &#x60;FILTERABLE&#x60;. * &#x60;HAS_DESCRIPTION&#x60;. * &#x60;HAS_BARCODE&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferCardRecommendationType
{
    /**
     * Possible values of this enum
     */
    public const HAS_VIDEO = 'HAS_VIDEO';

    public const RECOGNIZED_VENDOR = 'RECOGNIZED_VENDOR';

    public const MAIN = 'MAIN';

    public const ADDITIONAL = 'ADDITIONAL';

    public const DISTINCTIVE = 'DISTINCTIVE';

    public const FILTERABLE = 'FILTERABLE';

    public const PICTURE_COUNT = 'PICTURE_COUNT';

    public const HAS_DESCRIPTION = 'HAS_DESCRIPTION';

    public const HAS_BARCODE = 'HAS_BARCODE';

    public const FIRST_PICTURE_SIZE = 'FIRST_PICTURE_SIZE';

    public const TITLE_LENGTH = 'TITLE_LENGTH';

    public const DESCRIPTION_LENGTH = 'DESCRIPTION_LENGTH';

    public const AVERAGE_PICTURE_SIZE = 'AVERAGE_PICTURE_SIZE';

    public const FIRST_VIDEO_SIZE = 'FIRST_VIDEO_SIZE';

    public const FIRST_VIDEO_LENGTH = 'FIRST_VIDEO_LENGTH';

    public const AVERAGE_VIDEO_SIZE = 'AVERAGE_VIDEO_SIZE';

    public const VIDEO_COUNT = 'VIDEO_COUNT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HAS_VIDEO,
            self::RECOGNIZED_VENDOR,
            self::MAIN,
            self::ADDITIONAL,
            self::DISTINCTIVE,
            self::FILTERABLE,
            self::PICTURE_COUNT,
            self::HAS_DESCRIPTION,
            self::HAS_BARCODE,
            self::FIRST_PICTURE_SIZE,
            self::TITLE_LENGTH,
            self::DESCRIPTION_LENGTH,
            self::AVERAGE_PICTURE_SIZE,
            self::FIRST_VIDEO_SIZE,
            self::FIRST_VIDEO_LENGTH,
            self::AVERAGE_VIDEO_SIZE,
            self::VIDEO_COUNT
        ];
    }
}


