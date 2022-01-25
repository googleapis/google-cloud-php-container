<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AcceleratorConfig represents a Hardware Accelerator request.
 *
 * Generated from protobuf message <code>google.container.v1.AcceleratorConfig</code>
 */
class AcceleratorConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of the accelerator cards exposed to an instance.
     *
     * Generated from protobuf field <code>int64 accelerator_count = 1;</code>
     */
    protected $accelerator_count = 0;
    /**
     * The accelerator type resource name. List of supported accelerators
     * [here](https://cloud.google.com/compute/docs/gpus)
     *
     * Generated from protobuf field <code>string accelerator_type = 2;</code>
     */
    protected $accelerator_type = '';
    /**
     * Size of partitions to create on the GPU. Valid values are described in the
     * NVIDIA [mig user
     * guide](https://docs.nvidia.com/datacenter/tesla/mig-user-guide/#partitioning).
     *
     * Generated from protobuf field <code>string gpu_partition_size = 3;</code>
     */
    protected $gpu_partition_size = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $accelerator_count
     *           The number of the accelerator cards exposed to an instance.
     *     @type string $accelerator_type
     *           The accelerator type resource name. List of supported accelerators
     *           [here](https://cloud.google.com/compute/docs/gpus)
     *     @type string $gpu_partition_size
     *           Size of partitions to create on the GPU. Valid values are described in the
     *           NVIDIA [mig user
     *           guide](https://docs.nvidia.com/datacenter/tesla/mig-user-guide/#partitioning).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of the accelerator cards exposed to an instance.
     *
     * Generated from protobuf field <code>int64 accelerator_count = 1;</code>
     * @return int|string
     */
    public function getAcceleratorCount()
    {
        return $this->accelerator_count;
    }

    /**
     * The number of the accelerator cards exposed to an instance.
     *
     * Generated from protobuf field <code>int64 accelerator_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAcceleratorCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->accelerator_count = $var;

        return $this;
    }

    /**
     * The accelerator type resource name. List of supported accelerators
     * [here](https://cloud.google.com/compute/docs/gpus)
     *
     * Generated from protobuf field <code>string accelerator_type = 2;</code>
     * @return string
     */
    public function getAcceleratorType()
    {
        return $this->accelerator_type;
    }

    /**
     * The accelerator type resource name. List of supported accelerators
     * [here](https://cloud.google.com/compute/docs/gpus)
     *
     * Generated from protobuf field <code>string accelerator_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAcceleratorType($var)
    {
        GPBUtil::checkString($var, True);
        $this->accelerator_type = $var;

        return $this;
    }

    /**
     * Size of partitions to create on the GPU. Valid values are described in the
     * NVIDIA [mig user
     * guide](https://docs.nvidia.com/datacenter/tesla/mig-user-guide/#partitioning).
     *
     * Generated from protobuf field <code>string gpu_partition_size = 3;</code>
     * @return string
     */
    public function getGpuPartitionSize()
    {
        return $this->gpu_partition_size;
    }

    /**
     * Size of partitions to create on the GPU. Valid values are described in the
     * NVIDIA [mig user
     * guide](https://docs.nvidia.com/datacenter/tesla/mig-user-guide/#partitioning).
     *
     * Generated from protobuf field <code>string gpu_partition_size = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGpuPartitionSize($var)
    {
        GPBUtil::checkString($var, True);
        $this->gpu_partition_size = $var;

        return $this;
    }

}

