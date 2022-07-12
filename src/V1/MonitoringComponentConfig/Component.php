<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\MonitoringComponentConfig;

use UnexpectedValueException;

/**
 * GKE components exposing metrics
 *
 * Protobuf type <code>google.container.v1.MonitoringComponentConfig.Component</code>
 */
class Component
{
    /**
     * Default value. This shouldn't be used.
     *
     * Generated from protobuf enum <code>COMPONENT_UNSPECIFIED = 0;</code>
     */
    const COMPONENT_UNSPECIFIED = 0;
    /**
     * system components
     *
     * Generated from protobuf enum <code>SYSTEM_COMPONENTS = 1;</code>
     */
    const SYSTEM_COMPONENTS = 1;
    /**
     * kube-apiserver
     *
     * Generated from protobuf enum <code>APISERVER = 3;</code>
     */
    const APISERVER = 3;
    /**
     * kube-scheduler
     *
     * Generated from protobuf enum <code>SCHEDULER = 4;</code>
     */
    const SCHEDULER = 4;
    /**
     * kube-controller-manager
     *
     * Generated from protobuf enum <code>CONTROLLER_MANAGER = 5;</code>
     */
    const CONTROLLER_MANAGER = 5;

    private static $valueToName = [
        self::COMPONENT_UNSPECIFIED => 'COMPONENT_UNSPECIFIED',
        self::SYSTEM_COMPONENTS => 'SYSTEM_COMPONENTS',
        self::APISERVER => 'APISERVER',
        self::SCHEDULER => 'SCHEDULER',
        self::CONTROLLER_MANAGER => 'CONTROLLER_MANAGER',
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
class_alias(Component::class, \Google\Cloud\Container\V1\MonitoringComponentConfig_Component::class);

