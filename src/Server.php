<?php

namespace Dansup\ActivityStreams;

use Dansup\ActivityStreams\Model\{Activity,
  Actory,
  Collection,
  IntransitiveActivity,
  Link,
  Object as ObjectType};

class Server {

    /**
     * Version.
     * Only ActivityStreams v 2.0 is currently supported
     * @var string
     */
    protected $version;

    protected $activityType;

    /**
     * Base URL.
     * @var string
     */
    protected $baseUrl;


    /**
     * Create Server instance.
     */
    public function __construct($activityType = 'factory')
    {
        $this->setActivityType($activityType);
    }

    public function setActivityType($activityType)
    {
      $this->activityType = $activityType;
      return $this;
    }

    public function getActivityType()
    {
      return $this->activityType;
    }

    public function setVersion($version)
    {
      $this->version = $version;
    }

    public function getVersion()
    {
      return $this->version;
    }

    public function setBaseUrl($baseUrl)
    {
      $this->baseUrl = $baseUrl;
    }

    public function getBaseUrl()
    {
      return $this->baseUrl;
    }

    public function object()
    {
      return new ObjectType;
    }

}