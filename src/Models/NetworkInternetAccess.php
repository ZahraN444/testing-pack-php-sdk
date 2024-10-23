<?php

declare(strict_types=1);

/*
 * MistAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MistAPILib\Models;

use stdClass;

/**
 * whether this network has direct internet access
 */
class NetworkInternetAccess implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $createSimpleServicePolicy = false;

    /**
     * @var array<string,NetworkDestinationNatProperty>|null
     */
    private $destinationNat;

    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var bool|null
     */
    private $restricted = false;

    /**
     * @var array<string,NetworkStaticNatProperty>|null
     */
    private $staticNat;

    /**
     * Returns Create Simple Service Policy.
     */
    public function getCreateSimpleServicePolicy(): ?bool
    {
        return $this->createSimpleServicePolicy;
    }

    /**
     * Sets Create Simple Service Policy.
     *
     * @maps create_simple_service_policy
     */
    public function setCreateSimpleServicePolicy(?bool $createSimpleServicePolicy): void
    {
        $this->createSimpleServicePolicy = $createSimpleServicePolicy;
    }

    /**
     * Returns Destination Nat.
     * Property key may be an IP/Port (i.e. "63.16.0.3:443"), or a port (i.e. ":2222")
     *
     * @return array<string,NetworkDestinationNatProperty>|null
     */
    public function getDestinationNat(): ?array
    {
        return $this->destinationNat;
    }

    /**
     * Sets Destination Nat.
     * Property key may be an IP/Port (i.e. "63.16.0.3:443"), or a port (i.e. ":2222")
     *
     * @maps destination_nat
     *
     * @param array<string,NetworkDestinationNatProperty>|null $destinationNat
     */
    public function setDestinationNat(?array $destinationNat): void
    {
        $this->destinationNat = $destinationNat;
    }

    /**
     * Returns Enabled.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Restricted.
     * by default, all access is allowed, to only allow certain traffic, make `restricted`=`true` and
     * define service_policies
     */
    public function getRestricted(): ?bool
    {
        return $this->restricted;
    }

    /**
     * Sets Restricted.
     * by default, all access is allowed, to only allow certain traffic, make `restricted`=`true` and
     * define service_policies
     *
     * @maps restricted
     */
    public function setRestricted(?bool $restricted): void
    {
        $this->restricted = $restricted;
    }

    /**
     * Returns Static Nat.
     * Property key may be an IP Address (i.e. "172.16.0.1"), and IP Address and Port (i.e. "172.16.0.1:
     * 8443") or a CIDR (i.e. "172.16.0.12/20")
     *
     * @return array<string,NetworkStaticNatProperty>|null
     */
    public function getStaticNat(): ?array
    {
        return $this->staticNat;
    }

    /**
     * Sets Static Nat.
     * Property key may be an IP Address (i.e. "172.16.0.1"), and IP Address and Port (i.e. "172.16.0.1:
     * 8443") or a CIDR (i.e. "172.16.0.12/20")
     *
     * @maps static_nat
     *
     * @param array<string,NetworkStaticNatProperty>|null $staticNat
     */
    public function setStaticNat(?array $staticNat): void
    {
        $this->staticNat = $staticNat;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->createSimpleServicePolicy)) {
            $json['create_simple_service_policy'] = $this->createSimpleServicePolicy;
        }
        if (isset($this->destinationNat)) {
            $json['destination_nat']              = $this->destinationNat;
        }
        if (isset($this->enabled)) {
            $json['enabled']                      = $this->enabled;
        }
        if (isset($this->restricted)) {
            $json['restricted']                   = $this->restricted;
        }
        if (isset($this->staticNat)) {
            $json['static_nat']                   = $this->staticNat;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
