<?php

namespace Dansup\ActivityStreams\Transformer;

use Dansup\ActivityStreams\Model\Object as ObjectType;

class Object {

  protected $data;

  public function __construct(ObjectType $data)
  {
    $this->data = $data;
  }

  public function render($template = 'basic')
  {
    switch ($template) {
      case 'basic':
          $res = 'basic';
        break;
      
      default:
          $res = 'basic';
        break;
    }
    return $this->{$res}();
  }

  public function basic()
  {
    $data = $this->data;
    $template = [
      '@context' => $data->getContext(),
      'type' => $data->getType(),
      'id' => $data->getId(),
      'name' => $data->getName(),
      'attributedTo' => $data->getAttributedTo(),
      'content' => $data->getContent(),
      'published' => $data->published(),
    ];
    if( count($data->addedFields()) > 0 ) {
      foreach ($data->addedFields() as $field) {
        $field = lcfirst($field);
        $res = $data->{$field}();
        $template[$field] = $res;
      }
    }
    return $template;
  }

}