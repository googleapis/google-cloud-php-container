<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\SecondaryBootDisk;

use UnexpectedValueException;

/**
 * Mode specifies how the secondary boot disk will be used.
 * This triggers mode-specified logic in the control plane.
 *
 * Protobuf type <code>google.container.v1.SecondaryBootDisk.Mode</code>
 */
class Mode
{
    /**
     * MODE_UNSPECIFIED is when mode is not set.
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * CONTAINER_IMAGE_CACHE is for using the secondary boot disk as
     * a container image cache.
     *
     * Generated from protobuf enum <code>CONTAINER_IMAGE_CACHE = 1;</code>
     */
    const CONTAINER_IMAGE_CACHE = 1;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::CONTAINER_IMAGE_CACHE => 'CONTAINER_IMAGE_CACHE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Mode::class, \Google\Cloud\Container\V1\SecondaryBootDisk_Mode::class);
