<?php
/**
 * OAuth2AuthorizedClient
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
 * OAuth2AuthorizedClient Class Doc Comment
 *
 * @category Class
 * @description A OAuth2 Authorized Client
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OAuth2AuthorizedClient implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OAuth2AuthorizedClient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'access_token_expires_at' => '\DateTime',
        'access_token_issued_at' => '\DateTime',
        'access_token_scopes' => 'string',
        'access_token_type' => 'string',
        'access_token_value' => 'string',
        'client_registration_id' => 'string',
        'id' => 'int',
        'principal_name' => 'string',
        'refresh_token_issued_at' => '\DateTime',
        'refresh_token_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'access_token_expires_at' => 'date-time',
        'access_token_issued_at' => 'date-time',
        'access_token_scopes' => null,
        'access_token_type' => null,
        'access_token_value' => null,
        'client_registration_id' => null,
        'id' => 'int64',
        'principal_name' => null,
        'refresh_token_issued_at' => 'date-time',
        'refresh_token_value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'access_token_expires_at' => false,
        'access_token_issued_at' => false,
        'access_token_scopes' => false,
        'access_token_type' => false,
        'access_token_value' => false,
        'client_registration_id' => false,
        'id' => false,
        'principal_name' => false,
        'refresh_token_issued_at' => false,
        'refresh_token_value' => false
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
        'access_token_expires_at' => 'access_token_expires_at',
        'access_token_issued_at' => 'access_token_issued_at',
        'access_token_scopes' => 'access_token_scopes',
        'access_token_type' => 'access_token_type',
        'access_token_value' => 'access_token_value',
        'client_registration_id' => 'client_registration_id',
        'id' => 'id',
        'principal_name' => 'principal_name',
        'refresh_token_issued_at' => 'refresh_token_issued_at',
        'refresh_token_value' => 'refresh_token_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_token_expires_at' => 'setAccessTokenExpiresAt',
        'access_token_issued_at' => 'setAccessTokenIssuedAt',
        'access_token_scopes' => 'setAccessTokenScopes',
        'access_token_type' => 'setAccessTokenType',
        'access_token_value' => 'setAccessTokenValue',
        'client_registration_id' => 'setClientRegistrationId',
        'id' => 'setId',
        'principal_name' => 'setPrincipalName',
        'refresh_token_issued_at' => 'setRefreshTokenIssuedAt',
        'refresh_token_value' => 'setRefreshTokenValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_token_expires_at' => 'getAccessTokenExpiresAt',
        'access_token_issued_at' => 'getAccessTokenIssuedAt',
        'access_token_scopes' => 'getAccessTokenScopes',
        'access_token_type' => 'getAccessTokenType',
        'access_token_value' => 'getAccessTokenValue',
        'client_registration_id' => 'getClientRegistrationId',
        'id' => 'getId',
        'principal_name' => 'getPrincipalName',
        'refresh_token_issued_at' => 'getRefreshTokenIssuedAt',
        'refresh_token_value' => 'getRefreshTokenValue'
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
        $this->setIfExists('access_token_expires_at', $data ?? [], null);
        $this->setIfExists('access_token_issued_at', $data ?? [], null);
        $this->setIfExists('access_token_scopes', $data ?? [], null);
        $this->setIfExists('access_token_type', $data ?? [], null);
        $this->setIfExists('access_token_value', $data ?? [], null);
        $this->setIfExists('client_registration_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('principal_name', $data ?? [], null);
        $this->setIfExists('refresh_token_issued_at', $data ?? [], null);
        $this->setIfExists('refresh_token_value', $data ?? [], null);
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
     * Gets access_token_expires_at
     *
     * @return \DateTime|null
     */
    public function getAccessTokenExpiresAt()
    {
        return $this->container['access_token_expires_at'];
    }

    /**
     * Sets access_token_expires_at
     *
     * @param \DateTime|null $access_token_expires_at access_token_expires_at
     *
     * @return self
     */
    public function setAccessTokenExpiresAt($access_token_expires_at)
    {
        if (is_null($access_token_expires_at)) {
            throw new \InvalidArgumentException('non-nullable access_token_expires_at cannot be null');
        }
        $this->container['access_token_expires_at'] = $access_token_expires_at;

        return $this;
    }

    /**
     * Gets access_token_issued_at
     *
     * @return \DateTime|null
     */
    public function getAccessTokenIssuedAt()
    {
        return $this->container['access_token_issued_at'];
    }

    /**
     * Sets access_token_issued_at
     *
     * @param \DateTime|null $access_token_issued_at access_token_issued_at
     *
     * @return self
     */
    public function setAccessTokenIssuedAt($access_token_issued_at)
    {
        if (is_null($access_token_issued_at)) {
            throw new \InvalidArgumentException('non-nullable access_token_issued_at cannot be null');
        }
        $this->container['access_token_issued_at'] = $access_token_issued_at;

        return $this;
    }

    /**
     * Gets access_token_scopes
     *
     * @return string|null
     */
    public function getAccessTokenScopes()
    {
        return $this->container['access_token_scopes'];
    }

    /**
     * Sets access_token_scopes
     *
     * @param string|null $access_token_scopes access_token_scopes
     *
     * @return self
     */
    public function setAccessTokenScopes($access_token_scopes)
    {
        if (is_null($access_token_scopes)) {
            throw new \InvalidArgumentException('non-nullable access_token_scopes cannot be null');
        }
        $this->container['access_token_scopes'] = $access_token_scopes;

        return $this;
    }

    /**
     * Gets access_token_type
     *
     * @return string|null
     */
    public function getAccessTokenType()
    {
        return $this->container['access_token_type'];
    }

    /**
     * Sets access_token_type
     *
     * @param string|null $access_token_type access_token_type
     *
     * @return self
     */
    public function setAccessTokenType($access_token_type)
    {
        if (is_null($access_token_type)) {
            throw new \InvalidArgumentException('non-nullable access_token_type cannot be null');
        }
        $this->container['access_token_type'] = $access_token_type;

        return $this;
    }

    /**
     * Gets access_token_value
     *
     * @return string|null
     */
    public function getAccessTokenValue()
    {
        return $this->container['access_token_value'];
    }

    /**
     * Sets access_token_value
     *
     * @param string|null $access_token_value access_token_value
     *
     * @return self
     */
    public function setAccessTokenValue($access_token_value)
    {
        if (is_null($access_token_value)) {
            throw new \InvalidArgumentException('non-nullable access_token_value cannot be null');
        }
        $this->container['access_token_value'] = $access_token_value;

        return $this;
    }

    /**
     * Gets client_registration_id
     *
     * @return string|null
     */
    public function getClientRegistrationId()
    {
        return $this->container['client_registration_id'];
    }

    /**
     * Sets client_registration_id
     *
     * @param string|null $client_registration_id client_registration_id
     *
     * @return self
     */
    public function setClientRegistrationId($client_registration_id)
    {
        if (is_null($client_registration_id)) {
            throw new \InvalidArgumentException('non-nullable client_registration_id cannot be null');
        }
        $this->container['client_registration_id'] = $client_registration_id;

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
     * Gets principal_name
     *
     * @return string|null
     */
    public function getPrincipalName()
    {
        return $this->container['principal_name'];
    }

    /**
     * Sets principal_name
     *
     * @param string|null $principal_name principal_name
     *
     * @return self
     */
    public function setPrincipalName($principal_name)
    {
        if (is_null($principal_name)) {
            throw new \InvalidArgumentException('non-nullable principal_name cannot be null');
        }
        $this->container['principal_name'] = $principal_name;

        return $this;
    }

    /**
     * Gets refresh_token_issued_at
     *
     * @return \DateTime|null
     */
    public function getRefreshTokenIssuedAt()
    {
        return $this->container['refresh_token_issued_at'];
    }

    /**
     * Sets refresh_token_issued_at
     *
     * @param \DateTime|null $refresh_token_issued_at refresh_token_issued_at
     *
     * @return self
     */
    public function setRefreshTokenIssuedAt($refresh_token_issued_at)
    {
        if (is_null($refresh_token_issued_at)) {
            throw new \InvalidArgumentException('non-nullable refresh_token_issued_at cannot be null');
        }
        $this->container['refresh_token_issued_at'] = $refresh_token_issued_at;

        return $this;
    }

    /**
     * Gets refresh_token_value
     *
     * @return string|null
     */
    public function getRefreshTokenValue()
    {
        return $this->container['refresh_token_value'];
    }

    /**
     * Sets refresh_token_value
     *
     * @param string|null $refresh_token_value refresh_token_value
     *
     * @return self
     */
    public function setRefreshTokenValue($refresh_token_value)
    {
        if (is_null($refresh_token_value)) {
            throw new \InvalidArgumentException('non-nullable refresh_token_value cannot be null');
        }
        $this->container['refresh_token_value'] = $refresh_token_value;

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


