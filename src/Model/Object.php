<?php

namespace Dansup\ActivityStreams\Model;

use Dansup\ActivityStreams\Transformer\Object as Transformer;
use Carbon\Carbon;

class Object {

  public $id = null;
  public $type = null;
  public $attachment = null;
  public $attributedTo = null;
  public $audience = null;
  public $content;
  public $context = 'https://www.w3.org/ns/activitystreams';
  public $contentMap = null;
  public $name = null;
  public $nameMap = null;
  public $endTime = null;
  public $generator = null;
  public $icon = null;
  public $image = null;
  public $inReplyTo = null;
  public $location = null;
  public $preview = null;
  public $published = null;
  public $replies = null;
  public $startTime = null;
  public $summary = null;
  public $summaryMap = null;
  public $tag = null;
  public $updated = null;
  public $url = null;
  public $to = null;
  public $bto = null;
  public $cc = null;
  public $bcc;
  public $mediaType;
  public $duration;
  public $addedFields = [];

  public function __set($name, $value)
  {
      $this->{$name} = $value;
  }

  public function __get($name)
  {
      if (array_key_exists($name, $this->{$name})) {
          return $this->{$name};
      }
      return null;
  }

  public function __toString()
  {
    return json_encode($this);
  }

    public function addField(string $key, string $val)
  {
    if( method_exists($this, $key) == false) {
      throw new \Exception('Error: invalid object attribute key.');
    }

    $name = 'set'.ucwords($key);

    $this->{$name}($val);

    array_push($this->addedFields, $key);

    return $this;
  }

  public function render()
  {
    return (new Transformer($this))->render('basic');
  }

  public function get()
  {
    $data = $this->render();
    return json_encode($data);
  }

}