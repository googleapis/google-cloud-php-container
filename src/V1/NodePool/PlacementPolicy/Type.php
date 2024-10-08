<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\NodePool\PlacementPolicy;

use UnexpectedValueException;

/**
 * Type defines the type of placement policy.
 *
 * Protobuf type <code>google.container.v1.NodePool.PlacementPolicy.Type</code>
 */
class Type
{
    /**
     * TYPE_UNSPECIFIED specifies no requirements on nodes
     * placement.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * COMPACT specifies node placement in the same availability domain to
     * ensure low communication latency.
     *
     * Generated from protobuf enum <code>COMPACT = 1;</code>
     */
    const COMPACT = 1;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::COMPACT => 'COMPACT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


