<?php

namespace Dansup\ActivityStreams\Transformer;

use Dansup\ActivityStreams\Model\Object as ObjectType;

class Object {

  public static function basic(ObjectType $data)
  {
    return [
      '@context' => $data->getContext(),
      'type' => $data->getType(),
      'id' => $data->getId(),
      'name' => $data->getName(),
      'content' => $data->getContent()
    ];
  }

}