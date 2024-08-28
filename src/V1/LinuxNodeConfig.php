<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters that can be configured on Linux nodes.
 *
 * Generated from protobuf message <code>google.container.v1.LinuxNodeConfig</code>
 */
class LinuxNodeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The Linux kernel parameters to be applied to the nodes and all pods running
     * on the nodes.
     * The following parameters are supported.
     * net.core.busy_poll
     * net.core.busy_read
     * net.core.netdev_max_backlog
     * net.core.rmem_max
     * net.core.wmem_default
     * net.core.wmem_max
     * net.core.optmem_max
     * net.core.somaxconn
     * net.ipv4.tcp_rmem
     * net.ipv4.tcp_wmem
     * net.ipv4.tcp_tw_reuse
     *
     * Generated from protobuf field <code>map<string, string> sysctls = 1;</code>
     */
    private $sysctls;
    /**
     * cgroup_mode specifies the cgroup mode to be used on the node.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig.CgroupMode cgroup_mode = 2;</code>
     */
    protected $cgroup_mode = 0;
    /**
     * Optional. Amounts for 2M and 1G hugepages
     *
     * Generated from protobuf field <code>optional .google.container.v1.LinuxNodeConfig.HugepagesConfig hugepages = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $hugepages = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $sysctls
     *           The Linux kernel parameters to be applied to the nodes and all pods running
     *           on the nodes.
     *           The following parameters are supported.
     *           net.core.busy_poll
     *           net.core.busy_read
     *           net.core.netdev_max_backlog
     *           net.core.rmem_max
     *           net.core.wmem_default
     *           net.core.wmem_max
     *           net.core.optmem_max
     *           net.core.somaxconn
     *           net.ipv4.tcp_rmem
     *           net.ipv4.tcp_wmem
     *           net.ipv4.tcp_tw_reuse
     *     @type int $cgroup_mode
     *           cgroup_mode specifies the cgroup mode to be used on the node.
     *     @type \Google\Cloud\Container\V1\LinuxNodeConfig\HugepagesConfig $hugepages
     *           Optional. Amounts for 2M and 1G hugepages
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Linux kernel parameters to be applied to the nodes and all pods running
     * on the nodes.
     * The following parameters are supported.
     * net.core.busy_poll
     * net.core.busy_read
     * net.core.netdev_max_backlog
     * net.core.rmem_max
     * net.core.wmem_default
     * net.core.wmem_max
     * net.core.optmem_max
     * net.core.somaxconn
     * net.ipv4.tcp_rmem
     * net.ipv4.tcp_wmem
     * net.ipv4.tcp_tw_reuse
     *
     * Generated from protobuf field <code>map<string, string> sysctls = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSysctls()
    {
        return $this->sysctls;
    }

    /**
     * The Linux kernel parameters to be applied to the nodes and all pods running
     * on the nodes.
     * The following parameters are supported.
     * net.core.busy_poll
     * net.core.busy_read
     * net.core.netdev_max_backlog
     * net.core.rmem_max
     * net.core.wmem_default
     * net.core.wmem_max
     * net.core.optmem_max
     * net.core.somaxconn
     * net.ipv4.tcp_rmem
     * net.ipv4.tcp_wmem
     * net.ipv4.tcp_tw_reuse
     *
     * Generated from protobuf field <code>map<string, string> sysctls = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSysctls($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->sysctls = $arr;

        return $this;
    }

    /**
     * cgroup_mode specifies the cgroup mode to be used on the node.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig.CgroupMode cgroup_mode = 2;</code>
     * @return int
     */
    public function getCgroupMode()
    {
        return $this->cgroup_mode;
    }

    /**
     * cgroup_mode specifies the cgroup mode to be used on the node.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig.CgroupMode cgroup_mode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCgroupMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\LinuxNodeConfig\CgroupMode::class);
        $this->cgroup_mode = $var;

        return $this;
    }

    /**
     * Optional. Amounts for 2M and 1G hugepages
     *
     * Generated from protobuf field <code>optional .google.container.v1.LinuxNodeConfig.HugepagesConfig hugepages = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Container\V1\LinuxNodeConfig\HugepagesConfig|null
     */
    public function getHugepages()
    {
        return $this->hugepages;
    }

    public function hasHugepages()
    {
        return isset($this->hugepages);
    }

    public function clearHugepages()
    {
        unset($this->hugepages);
    }

    /**
     * Optional. Amounts for 2M and 1G hugepages
     *
     * Generated from protobuf field <code>optional .google.container.v1.LinuxNodeConfig.HugepagesConfig hugepages = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Container\V1\LinuxNodeConfig\HugepagesConfig $var
     * @return $this
     */
    public function setHugepages($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\LinuxNodeConfig\HugepagesConfig::class);
        $this->hugepages = $var;

        return $this;
    }

}

