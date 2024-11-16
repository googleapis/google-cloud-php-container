<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\NodeConfig;

use UnexpectedValueException;

/**
 * Possible effective cgroup modes for the node.
 *
 * Protobuf type <code>google.container.v1.NodeConfig.EffectiveCgroupMode</code>
 */
class EffectiveCgroupMode
{
    /**
     * EFFECTIVE_CGROUP_MODE_UNSPECIFIED means the cgroup configuration for the
     * node pool is unspecified, i.e. the node pool is a Windows node pool.
     *
     * Generated from protobuf enum <code>EFFECTIVE_CGROUP_MODE_UNSPECIFIED = 0;</code>
     */
    const EFFECTIVE_CGROUP_MODE_UNSPECIFIED = 0;
    /**
     * CGROUP_MODE_V1 means the node pool is configured to use cgroupv1 for the
     * cgroup configuration.
     *
     * Generated from protobuf enum <code>EFFECTIVE_CGROUP_MODE_V1 = 1;</code>
     */
    const EFFECTIVE_CGROUP_MODE_V1 = 1;
    /**
     * CGROUP_MODE_V2 means the node pool is configured to use cgroupv2 for the
     * cgroup configuration.
     *
     * Generated from protobuf enum <code>EFFECTIVE_CGROUP_MODE_V2 = 2;</code>
     */
    const EFFECTIVE_CGROUP_MODE_V2 = 2;

    private static $valueToName = [
        self::EFFECTIVE_CGROUP_MODE_UNSPECIFIED => 'EFFECTIVE_CGROUP_MODE_UNSPECIFIED',
        self::EFFECTIVE_CGROUP_MODE_V1 => 'EFFECTIVE_CGROUP_MODE_V1',
        self::EFFECTIVE_CGROUP_MODE_V2 => 'EFFECTIVE_CGROUP_MODE_V2',
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

