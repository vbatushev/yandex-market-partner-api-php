<?php
/**
 * GoodsFeedbackDTO
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * GoodsFeedbackDTO Class Doc Comment
 *
 * @category Class
 * @description Отзыв о товаре.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GoodsFeedbackDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GoodsFeedbackDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feedback_id' => 'int',
        'created_at' => '\DateTime',
        'need_reaction' => 'bool',
        'identifiers' => '\OpenAPI\Client\Model\GoodsFeedbackIdentifiersDTO',
        'author' => 'string',
        'description' => '\OpenAPI\Client\Model\GoodsFeedbackDescriptionDTO',
        'media' => '\OpenAPI\Client\Model\GoodsFeedbackMediaDTO',
        'statistics' => '\OpenAPI\Client\Model\GoodsFeedbackStatisticsDTO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'feedback_id' => 'int64',
        'created_at' => 'date-time',
        'need_reaction' => null,
        'identifiers' => null,
        'author' => null,
        'description' => null,
        'media' => null,
        'statistics' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'feedback_id' => false,
        'created_at' => false,
        'need_reaction' => false,
        'identifiers' => false,
        'author' => false,
        'description' => false,
        'media' => false,
        'statistics' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'feedback_id' => 'feedbackId',
        'created_at' => 'createdAt',
        'need_reaction' => 'needReaction',
        'identifiers' => 'identifiers',
        'author' => 'author',
        'description' => 'description',
        'media' => 'media',
        'statistics' => 'statistics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feedback_id' => 'setFeedbackId',
        'created_at' => 'setCreatedAt',
        'need_reaction' => 'setNeedReaction',
        'identifiers' => 'setIdentifiers',
        'author' => 'setAuthor',
        'description' => 'setDescription',
        'media' => 'setMedia',
        'statistics' => 'setStatistics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feedback_id' => 'getFeedbackId',
        'created_at' => 'getCreatedAt',
        'need_reaction' => 'getNeedReaction',
        'identifiers' => 'getIdentifiers',
        'author' => 'getAuthor',
        'description' => 'getDescription',
        'media' => 'getMedia',
        'statistics' => 'getStatistics'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('feedback_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('need_reaction', $data ?? [], null);
        $this->setIfExists('identifiers', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('media', $data ?? [], null);
        $this->setIfExists('statistics', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['feedback_id'] === null) {
            $invalidProperties[] = "'feedback_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['need_reaction'] === null) {
            $invalidProperties[] = "'need_reaction' can't be null";
        }
        if ($this->container['identifiers'] === null) {
            $invalidProperties[] = "'identifiers' can't be null";
        }
        if ($this->container['statistics'] === null) {
            $invalidProperties[] = "'statistics' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets feedback_id
     *
     * @return int
     */
    public function getFeedbackId()
    {
        return $this->container['feedback_id'];
    }

    /**
     * Sets feedback_id
     *
     * @param int $feedback_id Идентификатор отзыва.
     *
     * @return self
     */
    public function setFeedbackId($feedback_id)
    {
        if (is_null($feedback_id)) {
            throw new \InvalidArgumentException('non-nullable feedback_id cannot be null');
        }
        $this->container['feedback_id'] = $feedback_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Дата и время создания отзыва.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets need_reaction
     *
     * @return bool
     */
    public function getNeedReaction()
    {
        return $this->container['need_reaction'];
    }

    /**
     * Sets need_reaction
     *
     * @param bool $need_reaction Нужен ли ответ на отзыв.
     *
     * @return self
     */
    public function setNeedReaction($need_reaction)
    {
        if (is_null($need_reaction)) {
            throw new \InvalidArgumentException('non-nullable need_reaction cannot be null');
        }
        $this->container['need_reaction'] = $need_reaction;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return \OpenAPI\Client\Model\GoodsFeedbackIdentifiersDTO
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \OpenAPI\Client\Model\GoodsFeedbackIdentifiersDTO $identifiers identifiers
     *
     * @return self
     */
    public function setIdentifiers($identifiers)
    {
        if (is_null($identifiers)) {
            throw new \InvalidArgumentException('non-nullable identifiers cannot be null');
        }
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string|null $author Имя автора отзыва.
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \OpenAPI\Client\Model\GoodsFeedbackDescriptionDTO|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \OpenAPI\Client\Model\GoodsFeedbackDescriptionDTO|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \OpenAPI\Client\Model\GoodsFeedbackMediaDTO|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \OpenAPI\Client\Model\GoodsFeedbackMediaDTO|null $media media
     *
     * @return self
     */
    public function setMedia($media)
    {
        if (is_null($media)) {
            throw new \InvalidArgumentException('non-nullable media cannot be null');
        }
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets statistics
     *
     * @return \OpenAPI\Client\Model\GoodsFeedbackStatisticsDTO
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     *
     * @param \OpenAPI\Client\Model\GoodsFeedbackStatisticsDTO $statistics statistics
     *
     * @return self
     */
    public function setStatistics($statistics)
    {
        if (is_null($statistics)) {
            throw new \InvalidArgumentException('non-nullable statistics cannot be null');
        }
        $this->container['statistics'] = $statistics;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


