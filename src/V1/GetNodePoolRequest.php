<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetNodePoolRequest retrieves a node pool for a cluster.
 *
 * Generated from protobuf message <code>google.container.v1.GetNodePoolRequest</code>
 */
class GetNodePoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     */
    private $zone = '';
    /**
     * The name of the cluster.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     */
    private $cluster_id = '';
    /**
     * The name of the node pool.
     *
     * Generated from protobuf field <code>string node_pool_id = 4;</code>
     */
    private $node_pool_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           The Google Developers Console [project ID or project
     *           number](https://developers.google.com/console/help/new/#projectnumber).
     *     @type string $zone
     *           The name of the Google Compute Engine
     *           [zone](/compute/docs/zones#available) in which the cluster
     *           resides.
     *     @type string $cluster_id
     *           The name of the cluster.
     *     @type string $node_pool_id
     *           The name of the node pool.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * The name of the cluster.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * The name of the cluster.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * The name of the node pool.
     *
     * Generated from protobuf field <code>string node_pool_id = 4;</code>
     * @return string
     */
    public function getNodePoolId()
    {
        return $this->node_pool_id;
    }

    /**
     * The name of the node pool.
     *
     * Generated from protobuf field <code>string node_pool_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNodePoolId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_pool_id = $var;

        return $this;
    }

}

