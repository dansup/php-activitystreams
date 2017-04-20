<?php

namespace Dansup\ActivityStreams;

class ServerFactory {
  

    /**
     * Configuration parameters.
     * @var array
     */
    protected $config;
    /**
     * Create ServerFactory instance.
     * @param array $config Configuration parameters.
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * Get configured server.
     * @return Server Configured Glide server.
     */
    public function getServer()
    {
        $server = new Server(
            $this->getVersion()
        );
        $server->setVersion($this->getVersion());
        return $server;
    }

    /**
     * Get activity streams version.
     * @return string
     */
    public function getVersion()
    {
        if (!isset($this->config['version'])) {
            throw new \InvalidArgumentException('A "version" must be set.');
        }

        return $this->config['version'];
    }


    /**
     * Create configured server.
     * @param  array  $config Configuration parameters.
     * @return Server Configured server.
     */
    public static function create(array $config = [])
    {
        return (new self($config))->getServer();
    }
}