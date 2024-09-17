<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class GetChargesSummaryResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $total public property
     */
    public $total;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $total Initialization value for $this->total
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->total = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['total'] = $this->total;

        return $json;
    }
}
