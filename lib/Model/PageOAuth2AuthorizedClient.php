<?php
/**
 * PageOAuth2AuthorizedClient
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
 * PageOAuth2AuthorizedClient Class Doc Comment
 *
 * @category Class
 * @description A page object with links to move to other pages and the list of objects.
 * @package  Wordlift\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PageOAuth2AuthorizedClient implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PageOAuth2AuthorizedClient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first' => 'string',
        'items' => '\Wordlift\Client\Model\OAuth2AuthorizedClient[]',
        'last' => 'string',
        'next' => 'string',
        'prev' => 'string',
        'self' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'first' => null,
        'items' => null,
        'last' => null,
        'next' => null,
        'prev' => null,
        'self' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'first' => true,
        'items' => false,
        'last' => true,
        'next' => true,
        'prev' => true,
        'self' => true
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
        'first' => 'first',
        'items' => 'items',
        'last' => 'last',
        'next' => 'next',
        'prev' => 'prev',
        'self' => 'self'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first' => 'setFirst',
        'items' => 'setItems',
        'last' => 'setLast',
        'next' => 'setNext',
        'prev' => 'setPrev',
        'self' => 'setSelf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first' => 'getFirst',
        'items' => 'getItems',
        'last' => 'getLast',
        'next' => 'getNext',
        'prev' => 'getPrev',
        'self' => 'getSelf'
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
        $this->setIfExists('first', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('last', $data ?? [], null);
        $this->setIfExists('next', $data ?? [], null);
        $this->setIfExists('prev', $data ?? [], null);
        $this->setIfExists('self', $data ?? [], null);
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

        if ($this->container['first'] === null) {
            $invalidProperties[] = "'first' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['last'] === null) {
            $invalidProperties[] = "'last' can't be null";
        }
        if ($this->container['next'] === null) {
            $invalidProperties[] = "'next' can't be null";
        }
        if ($this->container['prev'] === null) {
            $invalidProperties[] = "'prev' can't be null";
        }
        if ($this->container['self'] === null) {
            $invalidProperties[] = "'self' can't be null";
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
     * Gets first
     *
     * @return string
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     *
     * @param string $first The link to the first page.
     *
     * @return self
     */
    public function setFirst($first)
    {
        if (is_null($first)) {
            array_push($this->openAPINullablesSetToNull, 'first');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Wordlift\Client\Model\OAuth2AuthorizedClient[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Wordlift\Client\Model\OAuth2AuthorizedClient[] $items An array of objects.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets last
     *
     * @return string
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     *
     * @param string $last The link to the last page.
     *
     * @return self
     */
    public function setLast($last)
    {
        if (is_null($last)) {
            array_push($this->openAPINullablesSetToNull, 'last');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets next
     *
     * @return string
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param string $next The link to the next page or `null` if there's no page.
     *
     * @return self
     */
    public function setNext($next)
    {
        if (is_null($next)) {
            array_push($this->openAPINullablesSetToNull, 'next');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('next', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['next'] = $next;

        return $this;
    }

    /**
     * Gets prev
     *
     * @return string
     */
    public function getPrev()
    {
        return $this->container['prev'];
    }

    /**
     * Sets prev
     *
     * @param string $prev The link to the previous page or `null` if there's no page.
     *
     * @return self
     */
    public function setPrev($prev)
    {
        if (is_null($prev)) {
            array_push($this->openAPINullablesSetToNull, 'prev');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prev', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['prev'] = $prev;

        return $this;
    }

    /**
     * Gets self
     *
     * @return string
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param string $self The link to the current page.
     *
     * @return self
     */
    public function setSelf($self)
    {
        if (is_null($self)) {
            array_push($this->openAPINullablesSetToNull, 'self');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('self', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['self'] = $self;

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


