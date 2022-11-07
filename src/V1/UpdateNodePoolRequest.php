<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpdateNodePoolRequests update a node pool's image and/or version.
 *
 * Generated from protobuf message <code>google.container.v1.UpdateNodePoolRequest</code>
 */
class UpdateNodePoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $project_id = '';
    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $zone = '';
    /**
     * Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $cluster_id = '';
    /**
     * Deprecated. The name of the node pool to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string node_pool_id = 4 [deprecated = true];</code>
     * @deprecated
     */
    protected $node_pool_id = '';
    /**
     * Required. The Kubernetes version to change the nodes to (typically an
     * upgrade).
     * Users may specify either explicit versions offered by Kubernetes Engine or
     * version aliases, which have the following behavior:
     * - "latest": picks the highest valid Kubernetes version
     * - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     * - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     * - "1.X.Y-gke.N": picks an explicit Kubernetes version
     * - "-": picks the Kubernetes master version
     *
     * Generated from protobuf field <code>string node_version = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $node_version = '';
    /**
     * Required. The desired image type for the node pool.
     *
     * Generated from protobuf field <code>string image_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $image_type = '';
    /**
     * The name (project, location, cluster, node pool) of the node pool to
     * update. Specified in the format
     * `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;`.
     *
     * Generated from protobuf field <code>string name = 8;</code>
     */
    private $name = '';
    /**
     * The desired list of Google Compute Engine
     * [zones](https://cloud.google.com/compute/docs/zones#available) in which the
     * node pool's nodes should be located. Changing the locations for a node pool
     * will result in nodes being either created or removed from the node pool,
     * depending on whether locations are being added or removed.
     *
     * Generated from protobuf field <code>repeated string locations = 13;</code>
     */
    private $locations;
    /**
     * The desired workload metadata config for the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.WorkloadMetadataConfig workload_metadata_config = 14;</code>
     */
    private $workload_metadata_config = null;
    /**
     * Upgrade settings control disruption and speed of the upgrade.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpgradeSettings upgrade_settings = 15;</code>
     */
    private $upgrade_settings = null;
    /**
     * The desired network tags to be applied to all nodes in the node pool.
     * If this field is not present, the tags will not be changed. Otherwise,
     * the existing network tags will be *replaced* with the provided tags.
     *
     * Generated from protobuf field <code>.google.container.v1.NetworkTags tags = 16;</code>
     */
    private $tags = null;
    /**
     * The desired node taints to be applied to all nodes in the node pool.
     * If this field is not present, the taints will not be changed. Otherwise,
     * the existing node taints will be *replaced* with the provided taints.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeTaints taints = 17;</code>
     */
    private $taints = null;
    /**
     * The desired node labels to be applied to all nodes in the node pool.
     * If this field is not present, the labels will not be changed. Otherwise,
     * the existing node labels will be *replaced* with the provided labels.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeLabels labels = 18;</code>
     */
    private $labels = null;
    /**
     * Parameters that can be configured on Linux nodes.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig linux_node_config = 19;</code>
     */
    private $linux_node_config = null;
    /**
     * Node kubelet configs.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeKubeletConfig kubelet_config = 20;</code>
     */
    private $kubelet_config = null;
    /**
     * Node network config.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeNetworkConfig node_network_config = 21;</code>
     */
    private $node_network_config = null;
    /**
     * GCFS config.
     *
     * Generated from protobuf field <code>.google.container.v1.GcfsConfig gcfs_config = 22;</code>
     */
    private $gcfs_config = null;
    /**
     * Confidential nodes config.
     * All the nodes in the node pool will be Confidential VM once enabled.
     *
     * Generated from protobuf field <code>.google.container.v1.ConfidentialNodes confidential_nodes = 23;</code>
     */
    private $confidential_nodes = null;
    /**
     * Enable or disable gvnic on the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.VirtualNIC gvnic = 29;</code>
     */
    private $gvnic = null;
    /**
     * Logging configuration.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePoolLoggingConfig logging_config = 32;</code>
     */
    private $logging_config = null;
    /**
     * The resource labels for the node pool to use to annotate any related
     * Google Compute Engine resources.
     *
     * Generated from protobuf field <code>.google.container.v1.ResourceLabels resource_labels = 33;</code>
     */
    private $resource_labels = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Deprecated. The Google Developers Console [project ID or project
     *           number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     *           This field has been deprecated and replaced by the name field.
     *     @type string $zone
     *           Deprecated. The name of the Google Compute Engine
     *           [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     *           cluster resides. This field has been deprecated and replaced by the name
     *           field.
     *     @type string $cluster_id
     *           Deprecated. The name of the cluster to upgrade.
     *           This field has been deprecated and replaced by the name field.
     *     @type string $node_pool_id
     *           Deprecated. The name of the node pool to upgrade.
     *           This field has been deprecated and replaced by the name field.
     *     @type string $node_version
     *           Required. The Kubernetes version to change the nodes to (typically an
     *           upgrade).
     *           Users may specify either explicit versions offered by Kubernetes Engine or
     *           version aliases, which have the following behavior:
     *           - "latest": picks the highest valid Kubernetes version
     *           - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     *           - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     *           - "1.X.Y-gke.N": picks an explicit Kubernetes version
     *           - "-": picks the Kubernetes master version
     *     @type string $image_type
     *           Required. The desired image type for the node pool.
     *     @type string $name
     *           The name (project, location, cluster, node pool) of the node pool to
     *           update. Specified in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $locations
     *           The desired list of Google Compute Engine
     *           [zones](https://cloud.google.com/compute/docs/zones#available) in which the
     *           node pool's nodes should be located. Changing the locations for a node pool
     *           will result in nodes being either created or removed from the node pool,
     *           depending on whether locations are being added or removed.
     *     @type \Google\Cloud\Container\V1\WorkloadMetadataConfig $workload_metadata_config
     *           The desired workload metadata config for the node pool.
     *     @type \Google\Cloud\Container\V1\NodePool\UpgradeSettings $upgrade_settings
     *           Upgrade settings control disruption and speed of the upgrade.
     *     @type \Google\Cloud\Container\V1\NetworkTags $tags
     *           The desired network tags to be applied to all nodes in the node pool.
     *           If this field is not present, the tags will not be changed. Otherwise,
     *           the existing network tags will be *replaced* with the provided tags.
     *     @type \Google\Cloud\Container\V1\NodeTaints $taints
     *           The desired node taints to be applied to all nodes in the node pool.
     *           If this field is not present, the taints will not be changed. Otherwise,
     *           the existing node taints will be *replaced* with the provided taints.
     *     @type \Google\Cloud\Container\V1\NodeLabels $labels
     *           The desired node labels to be applied to all nodes in the node pool.
     *           If this field is not present, the labels will not be changed. Otherwise,
     *           the existing node labels will be *replaced* with the provided labels.
     *     @type \Google\Cloud\Container\V1\LinuxNodeConfig $linux_node_config
     *           Parameters that can be configured on Linux nodes.
     *     @type \Google\Cloud\Container\V1\NodeKubeletConfig $kubelet_config
     *           Node kubelet configs.
     *     @type \Google\Cloud\Container\V1\NodeNetworkConfig $node_network_config
     *           Node network config.
     *     @type \Google\Cloud\Container\V1\GcfsConfig $gcfs_config
     *           GCFS config.
     *     @type \Google\Cloud\Container\V1\ConfidentialNodes $confidential_nodes
     *           Confidential nodes config.
     *           All the nodes in the node pool will be Confidential VM once enabled.
     *     @type \Google\Cloud\Container\V1\VirtualNIC $gvnic
     *           Enable or disable gvnic on the node pool.
     *     @type \Google\Cloud\Container\V1\NodePoolLoggingConfig $logging_config
     *           Logging configuration.
     *     @type \Google\Cloud\Container\V1\ResourceLabels $resource_labels
     *           The resource labels for the node pool to use to annotate any related
     *           Google Compute Engine resources.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getProjectId()
    {
        @trigger_error('project_id is deprecated.', E_USER_DEPRECATED);
        return $this->project_id;
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setProjectId($var)
    {
        @trigger_error('project_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getZone()
    {
        @trigger_error('zone is deprecated.', E_USER_DEPRECATED);
        return $this->zone;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setZone($var)
    {
        @trigger_error('zone is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getClusterId()
    {
        @trigger_error('cluster_id is deprecated.', E_USER_DEPRECATED);
        return $this->cluster_id;
    }

    /**
     * Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setClusterId($var)
    {
        @trigger_error('cluster_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the node pool to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string node_pool_id = 4 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getNodePoolId()
    {
        @trigger_error('node_pool_id is deprecated.', E_USER_DEPRECATED);
        return $this->node_pool_id;
    }

    /**
     * Deprecated. The name of the node pool to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string node_pool_id = 4 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setNodePoolId($var)
    {
        @trigger_error('node_pool_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->node_pool_id = $var;

        return $this;
    }

    /**
     * Required. The Kubernetes version to change the nodes to (typically an
     * upgrade).
     * Users may specify either explicit versions offered by Kubernetes Engine or
     * version aliases, which have the following behavior:
     * - "latest": picks the highest valid Kubernetes version
     * - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     * - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     * - "1.X.Y-gke.N": picks an explicit Kubernetes version
     * - "-": picks the Kubernetes master version
     *
     * Generated from protobuf field <code>string node_version = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNodeVersion()
    {
        return $this->node_version;
    }

    /**
     * Required. The Kubernetes version to change the nodes to (typically an
     * upgrade).
     * Users may specify either explicit versions offered by Kubernetes Engine or
     * version aliases, which have the following behavior:
     * - "latest": picks the highest valid Kubernetes version
     * - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     * - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     * - "1.X.Y-gke.N": picks an explicit Kubernetes version
     * - "-": picks the Kubernetes master version
     *
     * Generated from protobuf field <code>string node_version = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNodeVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_version = $var;

        return $this;
    }

    /**
     * Required. The desired image type for the node pool.
     *
     * Generated from protobuf field <code>string image_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getImageType()
    {
        return $this->image_type;
    }

    /**
     * Required. The desired image type for the node pool.
     *
     * Generated from protobuf field <code>string image_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setImageType($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_type = $var;

        return $this;
    }

    /**
     * The name (project, location, cluster, node pool) of the node pool to
     * update. Specified in the format
     * `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;`.
     *
     * Generated from protobuf field <code>string name = 8;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name (project, location, cluster, node pool) of the node pool to
     * update. Specified in the format
     * `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;`.
     *
     * Generated from protobuf field <code>string name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The desired list of Google Compute Engine
     * [zones](https://cloud.google.com/compute/docs/zones#available) in which the
     * node pool's nodes should be located. Changing the locations for a node pool
     * will result in nodes being either created or removed from the node pool,
     * depending on whether locations are being added or removed.
     *
     * Generated from protobuf field <code>repeated string locations = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * The desired list of Google Compute Engine
     * [zones](https://cloud.google.com/compute/docs/zones#available) in which the
     * node pool's nodes should be located. Changing the locations for a node pool
     * will result in nodes being either created or removed from the node pool,
     * depending on whether locations are being added or removed.
     *
     * Generated from protobuf field <code>repeated string locations = 13;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->locations = $arr;

        return $this;
    }

    /**
     * The desired workload metadata config for the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.WorkloadMetadataConfig workload_metadata_config = 14;</code>
     * @return \Google\Cloud\Container\V1\WorkloadMetadataConfig|null
     */
    public function getWorkloadMetadataConfig()
    {
        return $this->workload_metadata_config;
    }

    public function hasWorkloadMetadataConfig()
    {
        return isset($this->workload_metadata_config);
    }

    public function clearWorkloadMetadataConfig()
    {
        unset($this->workload_metadata_config);
    }

    /**
     * The desired workload metadata config for the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.WorkloadMetadataConfig workload_metadata_config = 14;</code>
     * @param \Google\Cloud\Container\V1\WorkloadMetadataConfig $var
     * @return $this
     */
    public function setWorkloadMetadataConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\WorkloadMetadataConfig::class);
        $this->workload_metadata_config = $var;

        return $this;
    }

    /**
     * Upgrade settings control disruption and speed of the upgrade.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpgradeSettings upgrade_settings = 15;</code>
     * @return \Google\Cloud\Container\V1\NodePool\UpgradeSettings|null
     */
    public function getUpgradeSettings()
    {
        return $this->upgrade_settings;
    }

    public function hasUpgradeSettings()
    {
        return isset($this->upgrade_settings);
    }

    public function clearUpgradeSettings()
    {
        unset($this->upgrade_settings);
    }

    /**
     * Upgrade settings control disruption and speed of the upgrade.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpgradeSettings upgrade_settings = 15;</code>
     * @param \Google\Cloud\Container\V1\NodePool\UpgradeSettings $var
     * @return $this
     */
    public function setUpgradeSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodePool\UpgradeSettings::class);
        $this->upgrade_settings = $var;

        return $this;
    }

    /**
     * The desired network tags to be applied to all nodes in the node pool.
     * If this field is not present, the tags will not be changed. Otherwise,
     * the existing network tags will be *replaced* with the provided tags.
     *
     * Generated from protobuf field <code>.google.container.v1.NetworkTags tags = 16;</code>
     * @return \Google\Cloud\Container\V1\NetworkTags|null
     */
    public function getTags()
    {
        return $this->tags;
    }

    public function hasTags()
    {
        return isset($this->tags);
    }

    public function clearTags()
    {
        unset($this->tags);
    }

    /**
     * The desired network tags to be applied to all nodes in the node pool.
     * If this field is not present, the tags will not be changed. Otherwise,
     * the existing network tags will be *replaced* with the provided tags.
     *
     * Generated from protobuf field <code>.google.container.v1.NetworkTags tags = 16;</code>
     * @param \Google\Cloud\Container\V1\NetworkTags $var
     * @return $this
     */
    public function setTags($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NetworkTags::class);
        $this->tags = $var;

        return $this;
    }

    /**
     * The desired node taints to be applied to all nodes in the node pool.
     * If this field is not present, the taints will not be changed. Otherwise,
     * the existing node taints will be *replaced* with the provided taints.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeTaints taints = 17;</code>
     * @return \Google\Cloud\Container\V1\NodeTaints|null
     */
    public function getTaints()
    {
        return $this->taints;
    }

    public function hasTaints()
    {
        return isset($this->taints);
    }

    public function clearTaints()
    {
        unset($this->taints);
    }

    /**
     * The desired node taints to be applied to all nodes in the node pool.
     * If this field is not present, the taints will not be changed. Otherwise,
     * the existing node taints will be *replaced* with the provided taints.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeTaints taints = 17;</code>
     * @param \Google\Cloud\Container\V1\NodeTaints $var
     * @return $this
     */
    public function setTaints($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodeTaints::class);
        $this->taints = $var;

        return $this;
    }

    /**
     * The desired node labels to be applied to all nodes in the node pool.
     * If this field is not present, the labels will not be changed. Otherwise,
     * the existing node labels will be *replaced* with the provided labels.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeLabels labels = 18;</code>
     * @return \Google\Cloud\Container\V1\NodeLabels|null
     */
    public function getLabels()
    {
        return $this->labels;
    }

    public function hasLabels()
    {
        return isset($this->labels);
    }

    public function clearLabels()
    {
        unset($this->labels);
    }

    /**
     * The desired node labels to be applied to all nodes in the node pool.
     * If this field is not present, the labels will not be changed. Otherwise,
     * the existing node labels will be *replaced* with the provided labels.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeLabels labels = 18;</code>
     * @param \Google\Cloud\Container\V1\NodeLabels $var
     * @return $this
     */
    public function setLabels($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodeLabels::class);
        $this->labels = $var;

        return $this;
    }

    /**
     * Parameters that can be configured on Linux nodes.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig linux_node_config = 19;</code>
     * @return \Google\Cloud\Container\V1\LinuxNodeConfig|null
     */
    public function getLinuxNodeConfig()
    {
        return $this->linux_node_config;
    }

    public function hasLinuxNodeConfig()
    {
        return isset($this->linux_node_config);
    }

    public function clearLinuxNodeConfig()
    {
        unset($this->linux_node_config);
    }

    /**
     * Parameters that can be configured on Linux nodes.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig linux_node_config = 19;</code>
     * @param \Google\Cloud\Container\V1\LinuxNodeConfig $var
     * @return $this
     */
    public function setLinuxNodeConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\LinuxNodeConfig::class);
        $this->linux_node_config = $var;

        return $this;
    }

    /**
     * Node kubelet configs.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeKubeletConfig kubelet_config = 20;</code>
     * @return \Google\Cloud\Container\V1\NodeKubeletConfig|null
     */
    public function getKubeletConfig()
    {
        return $this->kubelet_config;
    }

    public function hasKubeletConfig()
    {
        return isset($this->kubelet_config);
    }

    public function clearKubeletConfig()
    {
        unset($this->kubelet_config);
    }

    /**
     * Node kubelet configs.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeKubeletConfig kubelet_config = 20;</code>
     * @param \Google\Cloud\Container\V1\NodeKubeletConfig $var
     * @return $this
     */
    public function setKubeletConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodeKubeletConfig::class);
        $this->kubelet_config = $var;

        return $this;
    }

    /**
     * Node network config.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeNetworkConfig node_network_config = 21;</code>
     * @return \Google\Cloud\Container\V1\NodeNetworkConfig|null
     */
    public function getNodeNetworkConfig()
    {
        return $this->node_network_config;
    }

    public function hasNodeNetworkConfig()
    {
        return isset($this->node_network_config);
    }

    public function clearNodeNetworkConfig()
    {
        unset($this->node_network_config);
    }

    /**
     * Node network config.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeNetworkConfig node_network_config = 21;</code>
     * @param \Google\Cloud\Container\V1\NodeNetworkConfig $var
     * @return $this
     */
    public function setNodeNetworkConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodeNetworkConfig::class);
        $this->node_network_config = $var;

        return $this;
    }

    /**
     * GCFS config.
     *
     * Generated from protobuf field <code>.google.container.v1.GcfsConfig gcfs_config = 22;</code>
     * @return \Google\Cloud\Container\V1\GcfsConfig|null
     */
    public function getGcfsConfig()
    {
        return $this->gcfs_config;
    }

    public function hasGcfsConfig()
    {
        return isset($this->gcfs_config);
    }

    public function clearGcfsConfig()
    {
        unset($this->gcfs_config);
    }

    /**
     * GCFS config.
     *
     * Generated from protobuf field <code>.google.container.v1.GcfsConfig gcfs_config = 22;</code>
     * @param \Google\Cloud\Container\V1\GcfsConfig $var
     * @return $this
     */
    public function setGcfsConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\GcfsConfig::class);
        $this->gcfs_config = $var;

        return $this;
    }

    /**
     * Confidential nodes config.
     * All the nodes in the node pool will be Confidential VM once enabled.
     *
     * Generated from protobuf field <code>.google.container.v1.ConfidentialNodes confidential_nodes = 23;</code>
     * @return \Google\Cloud\Container\V1\ConfidentialNodes|null
     */
    public function getConfidentialNodes()
    {
        return $this->confidential_nodes;
    }

    public function hasConfidentialNodes()
    {
        return isset($this->confidential_nodes);
    }

    public function clearConfidentialNodes()
    {
        unset($this->confidential_nodes);
    }

    /**
     * Confidential nodes config.
     * All the nodes in the node pool will be Confidential VM once enabled.
     *
     * Generated from protobuf field <code>.google.container.v1.ConfidentialNodes confidential_nodes = 23;</code>
     * @param \Google\Cloud\Container\V1\ConfidentialNodes $var
     * @return $this
     */
    public function setConfidentialNodes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\ConfidentialNodes::class);
        $this->confidential_nodes = $var;

        return $this;
    }

    /**
     * Enable or disable gvnic on the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.VirtualNIC gvnic = 29;</code>
     * @return \Google\Cloud\Container\V1\VirtualNIC|null
     */
    public function getGvnic()
    {
        return $this->gvnic;
    }

    public function hasGvnic()
    {
        return isset($this->gvnic);
    }

    public function clearGvnic()
    {
        unset($this->gvnic);
    }

    /**
     * Enable or disable gvnic on the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.VirtualNIC gvnic = 29;</code>
     * @param \Google\Cloud\Container\V1\VirtualNIC $var
     * @return $this
     */
    public function setGvnic($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\VirtualNIC::class);
        $this->gvnic = $var;

        return $this;
    }

    /**
     * Logging configuration.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePoolLoggingConfig logging_config = 32;</code>
     * @return \Google\Cloud\Container\V1\NodePoolLoggingConfig|null
     */
    public function getLoggingConfig()
    {
        return $this->logging_config;
    }

    public function hasLoggingConfig()
    {
        return isset($this->logging_config);
    }

    public function clearLoggingConfig()
    {
        unset($this->logging_config);
    }

    /**
     * Logging configuration.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePoolLoggingConfig logging_config = 32;</code>
     * @param \Google\Cloud\Container\V1\NodePoolLoggingConfig $var
     * @return $this
     */
    public function setLoggingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodePoolLoggingConfig::class);
        $this->logging_config = $var;

        return $this;
    }

    /**
     * The resource labels for the node pool to use to annotate any related
     * Google Compute Engine resources.
     *
     * Generated from protobuf field <code>.google.container.v1.ResourceLabels resource_labels = 33;</code>
     * @return \Google\Cloud\Container\V1\ResourceLabels|null
     */
    public function getResourceLabels()
    {
        return $this->resource_labels;
    }

    public function hasResourceLabels()
    {
        return isset($this->resource_labels);
    }

    public function clearResourceLabels()
    {
        unset($this->resource_labels);
    }

    /**
     * The resource labels for the node pool to use to annotate any related
     * Google Compute Engine resources.
     *
     * Generated from protobuf field <code>.google.container.v1.ResourceLabels resource_labels = 33;</code>
     * @param \Google\Cloud\Container\V1\ResourceLabels $var
     * @return $this
     */
    public function setResourceLabels($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\ResourceLabels::class);
        $this->resource_labels = $var;

        return $this;
    }

}

