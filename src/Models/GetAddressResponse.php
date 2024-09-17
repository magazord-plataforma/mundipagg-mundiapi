<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;
use MundiAPILib\Utils\DateTimeHelper;

/**
 *Response object for getting an Address
 */
class GetAddressResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $street public property
     */
    public $street;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $number public property
     */
    public $number;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $complement public property
     */
    public $complement;

    /**
     * @todo Write general description for this property
     * @required
     * @maps zip_code
     * @var string $zipCode public property
     */
    public $zipCode;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $neighborhood public property
     */
    public $neighborhood;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $city public property
     */
    public $city;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $state public property
     */
    public $state;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @maps created_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * @todo Write general description for this property
     * @required
     * @maps updated_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $updatedAt public property
     */
    public $updatedAt;

    /**
     * @todo Write general description for this property
     * @var \MundiAPILib\Models\GetCustomerResponse|null $customer public property
     */
    public $customer;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Line 1 for address
     * @required
     * @maps line_1
     * @var string $line1 public property
     */
    public $line1;

    /**
     * Line 2 for address
     * @required
     * @maps line_2
     * @var string $line2 public property
     */
    public $line2;

    /**
     * @todo Write general description for this property
     * @maps deleted_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $deletedAt public property
     */
    public $deletedAt;

    /**
     * Constructor to set initial or default values of member properties
     * @param string               $id           Initialization value for $this->id
     * @param string               $street       Initialization value for $this->street
     * @param string               $number       Initialization value for $this->number
     * @param string               $complement   Initialization value for $this->complement
     * @param string               $zipCode      Initialization value for $this->zipCode
     * @param string               $neighborhood Initialization value for $this->neighborhood
     * @param string               $city         Initialization value for $this->city
     * @param string               $state        Initialization value for $this->state
     * @param string               $country      Initialization value for $this->country
     * @param string               $status       Initialization value for $this->status
     * @param \DateTime            $createdAt    Initialization value for $this->createdAt
     * @param \DateTime            $updatedAt    Initialization value for $this->updatedAt
     * @param GetCustomerResponse  $customer     Initialization value for $this->customer
     * @param array                $metadata     Initialization value for $this->metadata
     * @param string               $line1        Initialization value for $this->line1
     * @param string               $line2        Initialization value for $this->line2
     * @param \DateTime            $deletedAt    Initialization value for $this->deletedAt
     */
    public function __construct()
    {
        if (17 == func_num_args()) {
            $this->id           = func_get_arg(0);
            $this->street       = func_get_arg(1);
            $this->number       = func_get_arg(2);
            $this->complement   = func_get_arg(3);
            $this->zipCode      = func_get_arg(4);
            $this->neighborhood = func_get_arg(5);
            $this->city         = func_get_arg(6);
            $this->state        = func_get_arg(7);
            $this->country      = func_get_arg(8);
            $this->status       = func_get_arg(9);
            $this->createdAt    = func_get_arg(10);
            $this->updatedAt    = func_get_arg(11);
            $this->customer     = func_get_arg(12);
            $this->metadata     = func_get_arg(13);
            $this->line1        = func_get_arg(14);
            $this->line2        = func_get_arg(15);
            $this->deletedAt    = func_get_arg(16);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']           = $this->id;
        $json['street']       = $this->street;
        $json['number']       = $this->number;
        $json['complement']   = $this->complement;
        $json['zip_code']     = $this->zipCode;
        $json['neighborhood'] = $this->neighborhood;
        $json['city']         = $this->city;
        $json['state']        = $this->state;
        $json['country']      = $this->country;
        $json['status']       = $this->status;
        $json['created_at']   = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']   = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        $json['customer']     = $this->customer;
        $json['metadata']     = $this->metadata;
        $json['line_1']       = $this->line1;
        $json['line_2']       = $this->line2;
        $json['deleted_at']   = isset($this->deletedAt) ?
            DateTimeHelper::toRfc3339DateTime($this->deletedAt) : null;

        return $json;
    }
}
