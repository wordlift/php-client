<?php
/**
 * Account
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
 * Account Class Doc Comment
 *
 * @category Class
 * @package  Wordlift\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Account implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'analytics_client_factory' => 'string',
        'analyzer_id' => 'int',
        'botify_project' => 'string',
        'botify_token' => 'string',
        'botify_username' => 'string',
        'collection' => 'string',
        'country' => 'string',
        'dataset_id' => 'string',
        'dataset_uri' => 'string',
        'domain_uri' => 'string',
        'google_search_console_site_url' => 'string',
        'id' => 'int',
        'indexed' => 'bool',
        'is_wordpress' => 'bool',
        'key' => 'string',
        'language' => 'string',
        'ng_dataset_id' => 'string',
        'resolved_url' => 'string',
        'subscription_id' => 'int',
        'url' => 'string',
        'wp_admin' => 'string',
        'wp_json' => 'string',
        'wp_include_exclude_default' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'analytics_client_factory' => null,
        'analyzer_id' => 'int64',
        'botify_project' => null,
        'botify_token' => null,
        'botify_username' => null,
        'collection' => null,
        'country' => null,
        'dataset_id' => null,
        'dataset_uri' => null,
        'domain_uri' => null,
        'google_search_console_site_url' => null,
        'id' => 'int64',
        'indexed' => null,
        'is_wordpress' => null,
        'key' => null,
        'language' => null,
        'ng_dataset_id' => null,
        'resolved_url' => null,
        'subscription_id' => 'int64',
        'url' => null,
        'wp_admin' => null,
        'wp_json' => null,
        'wp_include_exclude_default' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'analytics_client_factory' => false,
        'analyzer_id' => false,
        'botify_project' => false,
        'botify_token' => false,
        'botify_username' => false,
        'collection' => false,
        'country' => false,
        'dataset_id' => false,
        'dataset_uri' => false,
        'domain_uri' => false,
        'google_search_console_site_url' => false,
        'id' => false,
        'indexed' => false,
        'is_wordpress' => false,
        'key' => false,
        'language' => false,
        'ng_dataset_id' => false,
        'resolved_url' => false,
        'subscription_id' => false,
        'url' => false,
        'wp_admin' => false,
        'wp_json' => false,
        'wp_include_exclude_default' => false
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
        'analytics_client_factory' => 'analytics_client_factory',
        'analyzer_id' => 'analyzerId',
        'botify_project' => 'botify_project',
        'botify_token' => 'botify_token',
        'botify_username' => 'botify_username',
        'collection' => 'collection',
        'country' => 'country',
        'dataset_id' => 'datasetId',
        'dataset_uri' => 'datasetUri',
        'domain_uri' => 'domainUri',
        'google_search_console_site_url' => 'google_search_console_site_url',
        'id' => 'id',
        'indexed' => 'indexed',
        'is_wordpress' => 'is_wordpress',
        'key' => 'key',
        'language' => 'language',
        'ng_dataset_id' => 'ngDatasetId',
        'resolved_url' => 'resolvedUrl',
        'subscription_id' => 'subscriptionId',
        'url' => 'url',
        'wp_admin' => 'wpAdmin',
        'wp_json' => 'wpJson',
        'wp_include_exclude_default' => 'wp_include_exclude_default'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'analytics_client_factory' => 'setAnalyticsClientFactory',
        'analyzer_id' => 'setAnalyzerId',
        'botify_project' => 'setBotifyProject',
        'botify_token' => 'setBotifyToken',
        'botify_username' => 'setBotifyUsername',
        'collection' => 'setCollection',
        'country' => 'setCountry',
        'dataset_id' => 'setDatasetId',
        'dataset_uri' => 'setDatasetUri',
        'domain_uri' => 'setDomainUri',
        'google_search_console_site_url' => 'setGoogleSearchConsoleSiteUrl',
        'id' => 'setId',
        'indexed' => 'setIndexed',
        'is_wordpress' => 'setIsWordpress',
        'key' => 'setKey',
        'language' => 'setLanguage',
        'ng_dataset_id' => 'setNgDatasetId',
        'resolved_url' => 'setResolvedUrl',
        'subscription_id' => 'setSubscriptionId',
        'url' => 'setUrl',
        'wp_admin' => 'setWpAdmin',
        'wp_json' => 'setWpJson',
        'wp_include_exclude_default' => 'setWpIncludeExcludeDefault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'analytics_client_factory' => 'getAnalyticsClientFactory',
        'analyzer_id' => 'getAnalyzerId',
        'botify_project' => 'getBotifyProject',
        'botify_token' => 'getBotifyToken',
        'botify_username' => 'getBotifyUsername',
        'collection' => 'getCollection',
        'country' => 'getCountry',
        'dataset_id' => 'getDatasetId',
        'dataset_uri' => 'getDatasetUri',
        'domain_uri' => 'getDomainUri',
        'google_search_console_site_url' => 'getGoogleSearchConsoleSiteUrl',
        'id' => 'getId',
        'indexed' => 'getIndexed',
        'is_wordpress' => 'getIsWordpress',
        'key' => 'getKey',
        'language' => 'getLanguage',
        'ng_dataset_id' => 'getNgDatasetId',
        'resolved_url' => 'getResolvedUrl',
        'subscription_id' => 'getSubscriptionId',
        'url' => 'getUrl',
        'wp_admin' => 'getWpAdmin',
        'wp_json' => 'getWpJson',
        'wp_include_exclude_default' => 'getWpIncludeExcludeDefault'
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
        $this->setIfExists('analytics_client_factory', $data ?? [], null);
        $this->setIfExists('analyzer_id', $data ?? [], null);
        $this->setIfExists('botify_project', $data ?? [], null);
        $this->setIfExists('botify_token', $data ?? [], null);
        $this->setIfExists('botify_username', $data ?? [], null);
        $this->setIfExists('collection', $data ?? [], 'entity');
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('dataset_id', $data ?? [], null);
        $this->setIfExists('dataset_uri', $data ?? [], null);
        $this->setIfExists('domain_uri', $data ?? [], null);
        $this->setIfExists('google_search_console_site_url', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('indexed', $data ?? [], null);
        $this->setIfExists('is_wordpress', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('ng_dataset_id', $data ?? [], null);
        $this->setIfExists('resolved_url', $data ?? [], null);
        $this->setIfExists('subscription_id', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('wp_admin', $data ?? [], null);
        $this->setIfExists('wp_json', $data ?? [], null);
        $this->setIfExists('wp_include_exclude_default', $data ?? [], null);
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
     * Gets analytics_client_factory
     *
     * @return string|null
     */
    public function getAnalyticsClientFactory()
    {
        return $this->container['analytics_client_factory'];
    }

    /**
     * Sets analytics_client_factory
     *
     * @param string|null $analytics_client_factory analytics_client_factory
     *
     * @return self
     */
    public function setAnalyticsClientFactory($analytics_client_factory)
    {
        if (is_null($analytics_client_factory)) {
            throw new \InvalidArgumentException('non-nullable analytics_client_factory cannot be null');
        }
        $this->container['analytics_client_factory'] = $analytics_client_factory;

        return $this;
    }

    /**
     * Gets analyzer_id
     *
     * @return int|null
     */
    public function getAnalyzerId()
    {
        return $this->container['analyzer_id'];
    }

    /**
     * Sets analyzer_id
     *
     * @param int|null $analyzer_id analyzer_id
     *
     * @return self
     */
    public function setAnalyzerId($analyzer_id)
    {
        if (is_null($analyzer_id)) {
            throw new \InvalidArgumentException('non-nullable analyzer_id cannot be null');
        }
        $this->container['analyzer_id'] = $analyzer_id;

        return $this;
    }

    /**
     * Gets botify_project
     *
     * @return string|null
     */
    public function getBotifyProject()
    {
        return $this->container['botify_project'];
    }

    /**
     * Sets botify_project
     *
     * @param string|null $botify_project botify_project
     *
     * @return self
     */
    public function setBotifyProject($botify_project)
    {
        if (is_null($botify_project)) {
            throw new \InvalidArgumentException('non-nullable botify_project cannot be null');
        }
        $this->container['botify_project'] = $botify_project;

        return $this;
    }

    /**
     * Gets botify_token
     *
     * @return string|null
     */
    public function getBotifyToken()
    {
        return $this->container['botify_token'];
    }

    /**
     * Sets botify_token
     *
     * @param string|null $botify_token botify_token
     *
     * @return self
     */
    public function setBotifyToken($botify_token)
    {
        if (is_null($botify_token)) {
            throw new \InvalidArgumentException('non-nullable botify_token cannot be null');
        }
        $this->container['botify_token'] = $botify_token;

        return $this;
    }

    /**
     * Gets botify_username
     *
     * @return string|null
     */
    public function getBotifyUsername()
    {
        return $this->container['botify_username'];
    }

    /**
     * Sets botify_username
     *
     * @param string|null $botify_username botify_username
     *
     * @return self
     */
    public function setBotifyUsername($botify_username)
    {
        if (is_null($botify_username)) {
            throw new \InvalidArgumentException('non-nullable botify_username cannot be null');
        }
        $this->container['botify_username'] = $botify_username;

        return $this;
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
     * @param string|null $collection The collection hosing the Knowledge Graph.
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
     * Gets dataset_id
     *
     * @return string|null
     * @deprecated
     */
    public function getDatasetId()
    {
        return $this->container['dataset_id'];
    }

    /**
     * Sets dataset_id
     *
     * @param string|null $dataset_id dataset_id
     *
     * @return self
     * @deprecated
     */
    public function setDatasetId($dataset_id)
    {
        if (is_null($dataset_id)) {
            throw new \InvalidArgumentException('non-nullable dataset_id cannot be null');
        }
        $this->container['dataset_id'] = $dataset_id;

        return $this;
    }

    /**
     * Gets dataset_uri
     *
     * @return string|null
     */
    public function getDatasetUri()
    {
        return $this->container['dataset_uri'];
    }

    /**
     * Sets dataset_uri
     *
     * @param string|null $dataset_uri dataset_uri
     *
     * @return self
     */
    public function setDatasetUri($dataset_uri)
    {
        if (is_null($dataset_uri)) {
            throw new \InvalidArgumentException('non-nullable dataset_uri cannot be null');
        }
        $this->container['dataset_uri'] = $dataset_uri;

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
     * Gets indexed
     *
     * @return bool|null
     */
    public function getIndexed()
    {
        return $this->container['indexed'];
    }

    /**
     * Sets indexed
     *
     * @param bool|null $indexed indexed
     *
     * @return self
     */
    public function setIndexed($indexed)
    {
        if (is_null($indexed)) {
            throw new \InvalidArgumentException('non-nullable indexed cannot be null');
        }
        $this->container['indexed'] = $indexed;

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
     * Gets resolved_url
     *
     * @return string|null
     */
    public function getResolvedUrl()
    {
        return $this->container['resolved_url'];
    }

    /**
     * Sets resolved_url
     *
     * @param string|null $resolved_url resolved_url
     *
     * @return self
     */
    public function setResolvedUrl($resolved_url)
    {
        if (is_null($resolved_url)) {
            throw new \InvalidArgumentException('non-nullable resolved_url cannot be null');
        }
        $this->container['resolved_url'] = $resolved_url;

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


