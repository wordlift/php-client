<?php
/**
 * MerchantRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Wordlift\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Manager
 *
 * Subscription management and related services.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hello@wordlift.io
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Wordlift\Client\Model;

use \ArrayAccess;
use \Wordlift\Client\ObjectSerializer;

/**
 * MerchantRequest Class Doc Comment
 *
 * @category Class
 * @description The Merchant request
 * @package  Wordlift\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'access_token' => 'string',
        'account_id' => 'int',
        'dataset_domain' => 'string',
        'dataset_name' => 'string',
        'deleted' => 'bool',
        'google_merchant_id' => 'int',
        'ignore_brand' => 'bool',
        'ignore_image' => 'bool',
        'publisher_name' => 'string',
        'refresh_token' => 'string',
        'url' => 'string',
        'url_strategy' => 'string',
        'writer_service' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'access_token' => null,
        'account_id' => 'int64',
        'dataset_domain' => null,
        'dataset_name' => null,
        'deleted' => null,
        'google_merchant_id' => 'int64',
        'ignore_brand' => null,
        'ignore_image' => null,
        'publisher_name' => null,
        'refresh_token' => null,
        'url' => null,
        'url_strategy' => null,
        'writer_service' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'access_token' => false,
        'account_id' => false,
        'dataset_domain' => false,
        'dataset_name' => false,
        'deleted' => false,
        'google_merchant_id' => false,
        'ignore_brand' => false,
        'ignore_image' => false,
        'publisher_name' => false,
        'refresh_token' => false,
        'url' => false,
        'url_strategy' => false,
        'writer_service' => false
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
        'access_token' => 'access_token',
        'account_id' => 'account_id',
        'dataset_domain' => 'dataset_domain',
        'dataset_name' => 'dataset_name',
        'deleted' => 'deleted',
        'google_merchant_id' => 'google_merchant_id',
        'ignore_brand' => 'ignore_brand',
        'ignore_image' => 'ignore_image',
        'publisher_name' => 'publisher_name',
        'refresh_token' => 'refresh_token',
        'url' => 'url',
        'url_strategy' => 'url_strategy',
        'writer_service' => 'writer_service'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_token' => 'setAccessToken',
        'account_id' => 'setAccountId',
        'dataset_domain' => 'setDatasetDomain',
        'dataset_name' => 'setDatasetName',
        'deleted' => 'setDeleted',
        'google_merchant_id' => 'setGoogleMerchantId',
        'ignore_brand' => 'setIgnoreBrand',
        'ignore_image' => 'setIgnoreImage',
        'publisher_name' => 'setPublisherName',
        'refresh_token' => 'setRefreshToken',
        'url' => 'setUrl',
        'url_strategy' => 'setUrlStrategy',
        'writer_service' => 'setWriterService'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_token' => 'getAccessToken',
        'account_id' => 'getAccountId',
        'dataset_domain' => 'getDatasetDomain',
        'dataset_name' => 'getDatasetName',
        'deleted' => 'getDeleted',
        'google_merchant_id' => 'getGoogleMerchantId',
        'ignore_brand' => 'getIgnoreBrand',
        'ignore_image' => 'getIgnoreImage',
        'publisher_name' => 'getPublisherName',
        'refresh_token' => 'getRefreshToken',
        'url' => 'getUrl',
        'url_strategy' => 'getUrlStrategy',
        'writer_service' => 'getWriterService'
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

    public const URL_STRATEGY_CANONICAL_LINK_AND_LINK = 'canonicalLinkAndLink';
    public const URL_STRATEGY_CANONICAL_LINK_OTHERWISE_LINK = 'canonicalLinkOtherwiseLink';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUrlStrategyAllowableValues()
    {
        return [
            self::URL_STRATEGY_CANONICAL_LINK_AND_LINK,
            self::URL_STRATEGY_CANONICAL_LINK_OTHERWISE_LINK,
        ];
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
        $this->setIfExists('access_token', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('dataset_domain', $data ?? [], null);
        $this->setIfExists('dataset_name', $data ?? [], null);
        $this->setIfExists('deleted', $data ?? [], false);
        $this->setIfExists('google_merchant_id', $data ?? [], null);
        $this->setIfExists('ignore_brand', $data ?? [], null);
        $this->setIfExists('ignore_image', $data ?? [], null);
        $this->setIfExists('publisher_name', $data ?? [], null);
        $this->setIfExists('refresh_token', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('url_strategy', $data ?? [], 'canonicalLinkAndLink');
        $this->setIfExists('writer_service', $data ?? [], null);
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

        if ($this->container['google_merchant_id'] === null) {
            $invalidProperties[] = "'google_merchant_id' can't be null";
        }
        if ($this->container['publisher_name'] === null) {
            $invalidProperties[] = "'publisher_name' can't be null";
        }
        if ($this->container['refresh_token'] === null) {
            $invalidProperties[] = "'refresh_token' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        $allowedValues = $this->getUrlStrategyAllowableValues();
        if (!is_null($this->container['url_strategy']) && !in_array($this->container['url_strategy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'url_strategy', must be one of '%s'",
                $this->container['url_strategy'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['url_strategy']) && (mb_strlen($this->container['url_strategy']) > 50)) {
            $invalidProperties[] = "invalid value for 'url_strategy', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['url_strategy']) && (mb_strlen($this->container['url_strategy']) < 0)) {
            $invalidProperties[] = "invalid value for 'url_strategy', the character length must be bigger than or equal to 0.";
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
     * Gets access_token
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string|null $access_token Google Merchant access token
     *
     * @return self
     */
    public function setAccessToken($access_token)
    {
        if (is_null($access_token)) {
            throw new \InvalidArgumentException('non-nullable access_token cannot be null');
        }
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int|null $account_id The Knowledge Graph to use for the Merchant. Please note that the Knowledge Graph will be reset. When not provided, this method will use the first available Knowledge Graph.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets dataset_domain
     *
     * @return string|null
     */
    public function getDatasetDomain()
    {
        return $this->container['dataset_domain'];
    }

    /**
     * Sets dataset_domain
     *
     * @param string|null $dataset_domain The custom domain (for example data.example.org)
     *
     * @return self
     */
    public function setDatasetDomain($dataset_domain)
    {
        if (is_null($dataset_domain)) {
            throw new \InvalidArgumentException('non-nullable dataset_domain cannot be null');
        }
        $this->container['dataset_domain'] = $dataset_domain;

        return $this;
    }

    /**
     * Gets dataset_name
     *
     * @return string|null
     */
    public function getDatasetName()
    {
        return $this->container['dataset_name'];
    }

    /**
     * Sets dataset_name
     *
     * @param string|null $dataset_name The dataset path (for example \"data\")
     *
     * @return self
     */
    public function setDatasetName($dataset_name)
    {
        if (is_null($dataset_name)) {
            throw new \InvalidArgumentException('non-nullable dataset_name cannot be null');
        }
        $this->container['dataset_name'] = $dataset_name;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted True if the merchant has been deleted
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        if (is_null($deleted)) {
            throw new \InvalidArgumentException('non-nullable deleted cannot be null');
        }
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets google_merchant_id
     *
     * @return int
     */
    public function getGoogleMerchantId()
    {
        return $this->container['google_merchant_id'];
    }

    /**
     * Sets google_merchant_id
     *
     * @param int $google_merchant_id The Google Merchant id
     *
     * @return self
     */
    public function setGoogleMerchantId($google_merchant_id)
    {
        if (is_null($google_merchant_id)) {
            throw new \InvalidArgumentException('non-nullable google_merchant_id cannot be null');
        }
        $this->container['google_merchant_id'] = $google_merchant_id;

        return $this;
    }

    /**
     * Gets ignore_brand
     *
     * @return bool|null
     */
    public function getIgnoreBrand()
    {
        return $this->container['ignore_brand'];
    }

    /**
     * Sets ignore_brand
     *
     * @param bool|null $ignore_brand Whether to ignore the `brand` property during validation
     *
     * @return self
     */
    public function setIgnoreBrand($ignore_brand)
    {
        if (is_null($ignore_brand)) {
            throw new \InvalidArgumentException('non-nullable ignore_brand cannot be null');
        }
        $this->container['ignore_brand'] = $ignore_brand;

        return $this;
    }

    /**
     * Gets ignore_image
     *
     * @return bool|null
     */
    public function getIgnoreImage()
    {
        return $this->container['ignore_image'];
    }

    /**
     * Sets ignore_image
     *
     * @param bool|null $ignore_image Whether to ignore the `image` property during validation
     *
     * @return self
     */
    public function setIgnoreImage($ignore_image)
    {
        if (is_null($ignore_image)) {
            throw new \InvalidArgumentException('non-nullable ignore_image cannot be null');
        }
        $this->container['ignore_image'] = $ignore_image;

        return $this;
    }

    /**
     * Gets publisher_name
     *
     * @return string
     */
    public function getPublisherName()
    {
        return $this->container['publisher_name'];
    }

    /**
     * Sets publisher_name
     *
     * @param string $publisher_name The publisher name (shows in schema publisher)
     *
     * @return self
     */
    public function setPublisherName($publisher_name)
    {
        if (is_null($publisher_name)) {
            throw new \InvalidArgumentException('non-nullable publisher_name cannot be null');
        }
        $this->container['publisher_name'] = $publisher_name;

        return $this;
    }

    /**
     * Gets refresh_token
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token
     *
     * @param string $refresh_token Google Merchant refresh token
     *
     * @return self
     */
    public function setRefreshToken($refresh_token)
    {
        if (is_null($refresh_token)) {
            throw new \InvalidArgumentException('non-nullable refresh_token cannot be null');
        }
        $this->container['refresh_token'] = $refresh_token;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The website URL
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets url_strategy
     *
     * @return string|null
     */
    public function getUrlStrategy()
    {
        return $this->container['url_strategy'];
    }

    /**
     * Sets url_strategy
     *
     * @param string|null $url_strategy Which strategy to use to write the url schema.
     *
     * @return self
     */
    public function setUrlStrategy($url_strategy)
    {
        if (is_null($url_strategy)) {
            throw new \InvalidArgumentException('non-nullable url_strategy cannot be null');
        }
        $allowedValues = $this->getUrlStrategyAllowableValues();
        if (!in_array($url_strategy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'url_strategy', must be one of '%s'",
                    $url_strategy,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($url_strategy) > 50)) {
            throw new \InvalidArgumentException('invalid length for $url_strategy when calling MerchantRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($url_strategy) < 0)) {
            throw new \InvalidArgumentException('invalid length for $url_strategy when calling MerchantRequest., must be bigger than or equal to 0.');
        }

        $this->container['url_strategy'] = $url_strategy;

        return $this;
    }

    /**
     * Gets writer_service
     *
     * @return string|null
     */
    public function getWriterService()
    {
        return $this->container['writer_service'];
    }

    /**
     * Sets writer_service
     *
     * @param string|null $writer_service How to write the merchant data to the graph, if unsure, do not set anything (by default `wordpressMerchantWriter`).
     *
     * @return self
     */
    public function setWriterService($writer_service)
    {
        if (is_null($writer_service)) {
            throw new \InvalidArgumentException('non-nullable writer_service cannot be null');
        }
        $this->container['writer_service'] = $writer_service;

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


