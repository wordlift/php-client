<?php
/**
 * ActiveAccount
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ActiveAccount Class Doc Comment
 *
 * @category Class
 * @description An array of objects.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ActiveAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActiveAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'collection' => 'string',
        'country' => 'string',
        'diagnostic_plugins' => '\OpenAPI\Client\Model\DiagnosticPlugin[]',
        'domain_uri' => 'string',
        'google_search_console_site_url' => 'string',
        'id' => 'int',
        'is_wordpress' => 'bool',
        'key' => 'string',
        'language' => 'string',
        'ng_dataset_id' => 'string',
        'package_type' => 'string',
        'subscription' => '\OpenAPI\Client\Model\AccountSubscription',
        'subscription_id' => 'int',
        'total_entities' => 'int',
        'total_entities_with_schema_url' => 'int',
        'url' => 'string',
        'user_id' => 'int',
        'wp_admin' => 'string',
        'wp_include_exclude_default' => 'string',
        'wp_json' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'collection' => null,
        'country' => null,
        'diagnostic_plugins' => null,
        'domain_uri' => null,
        'google_search_console_site_url' => null,
        'id' => 'int64',
        'is_wordpress' => null,
        'key' => null,
        'language' => null,
        'ng_dataset_id' => null,
        'package_type' => null,
        'subscription' => null,
        'subscription_id' => 'int64',
        'total_entities' => 'int64',
        'total_entities_with_schema_url' => 'int64',
        'url' => null,
        'user_id' => 'int64',
        'wp_admin' => null,
        'wp_include_exclude_default' => null,
        'wp_json' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'collection' => false,
        'country' => false,
        'diagnostic_plugins' => false,
        'domain_uri' => false,
        'google_search_console_site_url' => false,
        'id' => false,
        'is_wordpress' => false,
        'key' => false,
        'language' => false,
        'ng_dataset_id' => false,
        'package_type' => false,
        'subscription' => false,
        'subscription_id' => false,
        'total_entities' => false,
        'total_entities_with_schema_url' => false,
        'url' => false,
        'user_id' => false,
        'wp_admin' => false,
        'wp_include_exclude_default' => false,
        'wp_json' => false
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
        'collection' => 'collection',
        'country' => 'country',
        'diagnostic_plugins' => 'diagnostic_plugins',
        'domain_uri' => 'domain_uri',
        'google_search_console_site_url' => 'google_search_console_site_url',
        'id' => 'id',
        'is_wordpress' => 'is_wordpress',
        'key' => 'key',
        'language' => 'language',
        'ng_dataset_id' => 'ng_dataset_id',
        'package_type' => 'package_type',
        'subscription' => 'subscription',
        'subscription_id' => 'subscription_id',
        'total_entities' => 'total_entities',
        'total_entities_with_schema_url' => 'total_entities_with_schema_url',
        'url' => 'url',
        'user_id' => 'user_id',
        'wp_admin' => 'wp_admin',
        'wp_include_exclude_default' => 'wp_include_exclude_default',
        'wp_json' => 'wp_json'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collection' => 'setCollection',
        'country' => 'setCountry',
        'diagnostic_plugins' => 'setDiagnosticPlugins',
        'domain_uri' => 'setDomainUri',
        'google_search_console_site_url' => 'setGoogleSearchConsoleSiteUrl',
        'id' => 'setId',
        'is_wordpress' => 'setIsWordpress',
        'key' => 'setKey',
        'language' => 'setLanguage',
        'ng_dataset_id' => 'setNgDatasetId',
        'package_type' => 'setPackageType',
        'subscription' => 'setSubscription',
        'subscription_id' => 'setSubscriptionId',
        'total_entities' => 'setTotalEntities',
        'total_entities_with_schema_url' => 'setTotalEntitiesWithSchemaUrl',
        'url' => 'setUrl',
        'user_id' => 'setUserId',
        'wp_admin' => 'setWpAdmin',
        'wp_include_exclude_default' => 'setWpIncludeExcludeDefault',
        'wp_json' => 'setWpJson'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collection' => 'getCollection',
        'country' => 'getCountry',
        'diagnostic_plugins' => 'getDiagnosticPlugins',
        'domain_uri' => 'getDomainUri',
        'google_search_console_site_url' => 'getGoogleSearchConsoleSiteUrl',
        'id' => 'getId',
        'is_wordpress' => 'getIsWordpress',
        'key' => 'getKey',
        'language' => 'getLanguage',
        'ng_dataset_id' => 'getNgDatasetId',
        'package_type' => 'getPackageType',
        'subscription' => 'getSubscription',
        'subscription_id' => 'getSubscriptionId',
        'total_entities' => 'getTotalEntities',
        'total_entities_with_schema_url' => 'getTotalEntitiesWithSchemaUrl',
        'url' => 'getUrl',
        'user_id' => 'getUserId',
        'wp_admin' => 'getWpAdmin',
        'wp_include_exclude_default' => 'getWpIncludeExcludeDefault',
        'wp_json' => 'getWpJson'
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
        $this->setIfExists('collection', $data ?? [], 'entity');
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('diagnostic_plugins', $data ?? [], null);
        $this->setIfExists('domain_uri', $data ?? [], null);
        $this->setIfExists('google_search_console_site_url', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_wordpress', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('ng_dataset_id', $data ?? [], null);
        $this->setIfExists('package_type', $data ?? [], null);
        $this->setIfExists('subscription', $data ?? [], null);
        $this->setIfExists('subscription_id', $data ?? [], null);
        $this->setIfExists('total_entities', $data ?? [], null);
        $this->setIfExists('total_entities_with_schema_url', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('wp_admin', $data ?? [], null);
        $this->setIfExists('wp_include_exclude_default', $data ?? [], null);
        $this->setIfExists('wp_json', $data ?? [], null);
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
     * Gets collection
     *
     * @return string|null
     */
    public function getCollection()
    {
        return $this->container['collection'];
    }

    /**
     * Sets collection
     *
     * @param string|null $collection The collection hosting the Knowledge Graph.
     *
     * @return self
     */
    public function setCollection($collection)
    {
        if (is_null($collection)) {
            throw new \InvalidArgumentException('non-nullable collection cannot be null');
        }
        $this->container['collection'] = $collection;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets diagnostic_plugins
     *
     * @return \OpenAPI\Client\Model\DiagnosticPlugin[]|null
     */
    public function getDiagnosticPlugins()
    {
        return $this->container['diagnostic_plugins'];
    }

    /**
     * Sets diagnostic_plugins
     *
     * @param \OpenAPI\Client\Model\DiagnosticPlugin[]|null $diagnostic_plugins diagnostic_plugins
     *
     * @return self
     */
    public function setDiagnosticPlugins($diagnostic_plugins)
    {
        if (is_null($diagnostic_plugins)) {
            throw new \InvalidArgumentException('non-nullable diagnostic_plugins cannot be null');
        }
        $this->container['diagnostic_plugins'] = $diagnostic_plugins;

        return $this;
    }

    /**
     * Gets domain_uri
     *
     * @return string|null
     */
    public function getDomainUri()
    {
        return $this->container['domain_uri'];
    }

    /**
     * Sets domain_uri
     *
     * @param string|null $domain_uri domain_uri
     *
     * @return self
     */
    public function setDomainUri($domain_uri)
    {
        if (is_null($domain_uri)) {
            throw new \InvalidArgumentException('non-nullable domain_uri cannot be null');
        }
        $this->container['domain_uri'] = $domain_uri;

        return $this;
    }

    /**
     * Gets google_search_console_site_url
     *
     * @return string|null
     */
    public function getGoogleSearchConsoleSiteUrl()
    {
        return $this->container['google_search_console_site_url'];
    }

    /**
     * Sets google_search_console_site_url
     *
     * @param string|null $google_search_console_site_url google_search_console_site_url
     *
     * @return self
     */
    public function setGoogleSearchConsoleSiteUrl($google_search_console_site_url)
    {
        if (is_null($google_search_console_site_url)) {
            throw new \InvalidArgumentException('non-nullable google_search_console_site_url cannot be null');
        }
        $this->container['google_search_console_site_url'] = $google_search_console_site_url;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_wordpress
     *
     * @return bool|null
     */
    public function getIsWordpress()
    {
        return $this->container['is_wordpress'];
    }

    /**
     * Sets is_wordpress
     *
     * @param bool|null $is_wordpress is_wordpress
     *
     * @return self
     */
    public function setIsWordpress($is_wordpress)
    {
        if (is_null($is_wordpress)) {
            throw new \InvalidArgumentException('non-nullable is_wordpress cannot be null');
        }
        $this->container['is_wordpress'] = $is_wordpress;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key key
     *
     * @return self
     */
    public function setKey($key)
    {
        if (is_null($key)) {
            throw new \InvalidArgumentException('non-nullable key cannot be null');
        }
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets ng_dataset_id
     *
     * @return string|null
     */
    public function getNgDatasetId()
    {
        return $this->container['ng_dataset_id'];
    }

    /**
     * Sets ng_dataset_id
     *
     * @param string|null $ng_dataset_id ng_dataset_id
     *
     * @return self
     */
    public function setNgDatasetId($ng_dataset_id)
    {
        if (is_null($ng_dataset_id)) {
            throw new \InvalidArgumentException('non-nullable ng_dataset_id cannot be null');
        }
        $this->container['ng_dataset_id'] = $ng_dataset_id;

        return $this;
    }

    /**
     * Gets package_type
     *
     * @return string|null
     */
    public function getPackageType()
    {
        return $this->container['package_type'];
    }

    /**
     * Sets package_type
     *
     * @param string|null $package_type package_type
     *
     * @return self
     */
    public function setPackageType($package_type)
    {
        if (is_null($package_type)) {
            throw new \InvalidArgumentException('non-nullable package_type cannot be null');
        }
        $this->container['package_type'] = $package_type;

        return $this;
    }

    /**
     * Gets subscription
     *
     * @return \OpenAPI\Client\Model\AccountSubscription|null
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \OpenAPI\Client\Model\AccountSubscription|null $subscription subscription
     *
     * @return self
     */
    public function setSubscription($subscription)
    {
        if (is_null($subscription)) {
            throw new \InvalidArgumentException('non-nullable subscription cannot be null');
        }
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets subscription_id
     *
     * @return int|null
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param int|null $subscription_id subscription_id
     *
     * @return self
     */
    public function setSubscriptionId($subscription_id)
    {
        if (is_null($subscription_id)) {
            throw new \InvalidArgumentException('non-nullable subscription_id cannot be null');
        }
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets total_entities
     *
     * @return int|null
     */
    public function getTotalEntities()
    {
        return $this->container['total_entities'];
    }

    /**
     * Sets total_entities
     *
     * @param int|null $total_entities total_entities
     *
     * @return self
     */
    public function setTotalEntities($total_entities)
    {
        if (is_null($total_entities)) {
            throw new \InvalidArgumentException('non-nullable total_entities cannot be null');
        }
        $this->container['total_entities'] = $total_entities;

        return $this;
    }

    /**
     * Gets total_entities_with_schema_url
     *
     * @return int|null
     */
    public function getTotalEntitiesWithSchemaUrl()
    {
        return $this->container['total_entities_with_schema_url'];
    }

    /**
     * Sets total_entities_with_schema_url
     *
     * @param int|null $total_entities_with_schema_url total_entities_with_schema_url
     *
     * @return self
     */
    public function setTotalEntitiesWithSchemaUrl($total_entities_with_schema_url)
    {
        if (is_null($total_entities_with_schema_url)) {
            throw new \InvalidArgumentException('non-nullable total_entities_with_schema_url cannot be null');
        }
        $this->container['total_entities_with_schema_url'] = $total_entities_with_schema_url;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
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
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets wp_admin
     *
     * @return string|null
     */
    public function getWpAdmin()
    {
        return $this->container['wp_admin'];
    }

    /**
     * Sets wp_admin
     *
     * @param string|null $wp_admin wp_admin
     *
     * @return self
     */
    public function setWpAdmin($wp_admin)
    {
        if (is_null($wp_admin)) {
            throw new \InvalidArgumentException('non-nullable wp_admin cannot be null');
        }
        $this->container['wp_admin'] = $wp_admin;

        return $this;
    }

    /**
     * Gets wp_include_exclude_default
     *
     * @return string|null
     */
    public function getWpIncludeExcludeDefault()
    {
        return $this->container['wp_include_exclude_default'];
    }

    /**
     * Sets wp_include_exclude_default
     *
     * @param string|null $wp_include_exclude_default wp_include_exclude_default
     *
     * @return self
     */
    public function setWpIncludeExcludeDefault($wp_include_exclude_default)
    {
        if (is_null($wp_include_exclude_default)) {
            throw new \InvalidArgumentException('non-nullable wp_include_exclude_default cannot be null');
        }
        $this->container['wp_include_exclude_default'] = $wp_include_exclude_default;

        return $this;
    }

    /**
     * Gets wp_json
     *
     * @return string|null
     */
    public function getWpJson()
    {
        return $this->container['wp_json'];
    }

    /**
     * Sets wp_json
     *
     * @param string|null $wp_json wp_json
     *
     * @return self
     */
    public function setWpJson($wp_json)
    {
        if (is_null($wp_json)) {
            throw new \InvalidArgumentException('non-nullable wp_json cannot be null');
        }
        $this->container['wp_json'] = $wp_json;

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


