<?php

namespace Dansup\ActivityStreams;
use Dansup\ActivityStreams\Model\{Activity,
  Actory,
  Collection,
  IntransitiveActivity,
  Link,
  Object as ObjectType};

class ServerFactory {

    /**
     * Optional ActivityStreams Type.
     * @var array
     */
    protected $activityType;

    /**
     * Create ServerFactory instance.
     * @param array $config Configuration parameters.
     */
    public function __construct(string $activityType = 'factory')
    {
        $this->activityType = $activityType;
    }

    /**
     * Get configured server.
     * @return Server Configured AS server.
     */
    public function getServer()
    {
        $type = $this->detectTypeBuilder($this->activityType);
        
        if($type !== $this->activityType) {
          return new $type;
        } else {
          $server = new Server($type);
          return $server;
        }
    }

    public function detectTypeBuilder()
    {
      switch ($this->activityType) {
        case 'object':
            $res = ObjectType::class;
          break;
        
        default:
            $this->activityType = 'factory';
            $res = $this->activityType;
          break;
      }
      return $res;
    }

    /**
     * Create configured server.
     * @param  array  $config Configuration parameters.
     * @return Server Configured server.
     */
    public static function create(string $activityType = 'factory')
    {
        return (new self($activityType))->getServer();
    }
    
}