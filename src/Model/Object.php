<?php

namespace Dansup\ActivityStreams\Model;

use Dansup\ActivityStreams\Transformer\Object as Transformer;

class Object {

  protected $id = null;
  protected $type = null;
  protected $attachment = null;
  protected $attributedTo = null;
  protected $audience = null;
  protected $content;
  protected $context = 'https://www.w3.org/ns/activitystreams';
  protected $contentMap = null;
  protected $name = null;
  protected $nameMap = null;
  protected $endTime = null;
  protected $generator = null;
  protected $icon = null;
  protected $image = null;
  protected $inReplyTo = null;
  protected $location = null;
  protected $preview = null;
  protected $published = null;
  protected $replies = null;
  protected $startTime = null;
  protected $summary = null;
  protected $summaryMap = null;
  protected $tag = null;
  protected $updated = null;
  protected $url = null;
  protected $to = null;
  protected $bto = null;
  protected $cc = null;
  protected $bcc;
  protected $mediaType;
  protected $duration;

  public function __construct()
  {
  }

  public function setId($id) 
  {
    $this->id = $id;
    return $this;
  }

  public function getId() 
  {
    return $this->id;
  }

  public function setType($type) 
  {
    $this->type = $type;
    return $this;
  }

  public function getType() 
  {
    return $this->type;
  }

  public function setAttachment($attachment) 
  {
    $this->attachment = $attachment; 
    return $this;
  } 

  public function setAttributedTo($attributedTo) 
  {
    $this->attributedTo = $attributedTo; 
    return $this;
  } 

  public function setAudience($audience) 
  {
    $this->audience = $audience; 
    return $this;
  } 

  public function setContent($content) 
  {
    $this->content = $content; 
    return $this;
  } 

  public function setContext($context) 
  {
    $this->context = $context; 
    return $this;
  } 

  public function setContentMap($contentMap) 
  {
    $this->contentMap = $contentMap; 
    return $this;
  } 

  public function setName($name) 
  {
    $this->name = $name; 
    return $this;
  } 

  public function setNameMap($nameMap) 
  {
    $this->nameMap = $nameMap; 
    return $this;
  } 

  public function setEndTime($endTime) 
  {
    $this->endTime = $endTime; 
    return $this;
  } 

  public function setGenerator($generator) 
  {
    $this->generator = $generator; 
    return $this;
  } 

  public function setIcon($icon) 
  {
    $this->icon = $icon; 
    return $this;
  } 

  public function setImage($image) 
  {
    $this->image = $image; 
    return $this;
  } 

  public function setInReplyTo($inReplyTo) 
  {
    $this->inReplyTo = $inReplyTo; 
    return $this;
  } 

  public function setLocation($location) 
  {
    $this->location = $location; 
    return $this;
  } 

  public function setPreview($preview) 
  {
    $this->preview = $preview; 
    return $this;
  } 

  public function setPublished($published) 
  {
    $this->published = $published; 
    return $this;
  } 

  public function setReplies($replies) 
  {
    $this->replies = $replies; 
    return $this;
  } 

  public function setStartTime($startTime) 
  {
    $this->startTime = $startTime; 
    return $this;
  } 

  public function setSummary($summary) 
  {
    $this->summary = $summary; 
    return $this;
  } 

  public function setSummaryMap($summaryMap) 
  {
    $this->summaryMap = $summaryMap; 
    return $this;
  } 

  public function setTag($tag) 
  {
    $this->tag = $tag; 
    return $this;
  } 

  public function setUpdated($updated) 
  {
    $this->updated = $updated; 
    return $this;
  } 

  public function setUrl($url) 
  {
    $this->url = $url; 
    return $this;
  } 

  public function setTo($to) 
  {
    $this->to = $to; 
    return $this;
  } 

  public function setBto($bto) 
  {
    $this->bto = $bto; 
    return $this;
  } 

  public function setCc($cc) 
  {
    $this->cc = $cc; 
    return $this;
  } 

  public function setBcc($bcc) 
  {
    $this->bcc = $bcc; 
    return $this;
  } 

  public function setMediaType($mediaType) 
  {
    $this->mediaType = $mediaType; 
    return $this;
  } 

  public function setDuration($duration) 
  {
    $this->duration = $duration; 
    return $this;
  } 

  public function getAttachment() 
  {
    return $this->attachment; 
  } 

  public function getAttributedTo() 
  {
    return $this->attributedTo; 
  } 

  public function getAudience() 
  {
    return $this->audience; 
  } 

  public function getContent() 
  {
    return $this->content; 
  } 

  public function getContext() 
  {
    return $this->context; 
  } 

  public function getContentMap() 
  {
    return $this->contentMap; 
  } 

  public function getName() 
  {
    return $this->name; 
  } 

  public function getNameMap() 
  {
    return $this->nameMap; 
  } 

  public function getEndTime() 
  {
    return $this->endTime; 
  } 

  public function getGenerator() 
  {
    return $this->generator; 
  } 

  public function getIcon() 
  {
    return $this->icon; 
  } 

  public function getImage() 
  {
    return $this->image; 
  } 

  public function getInReplyTo() 
  {
    return $this->inReplyTo; 
  } 

  public function getLocation() 
  {
    return $this->location; 
  } 

  public function getPreview() 
  {
    return $this->preview; 
  } 

  public function getPublished() 
  {
    return $this->published; 
  } 

  public function getReplies() 
  {
    return $this->replies; 
  } 

  public function getStartTime() 
  {
    return $this->startTime; 
  } 

  public function getSummary() 
  {
    return $this->summary; 
  } 

  public function getSummaryMap() 
  {
    return $this->summaryMap; 
  } 

  public function getTag() 
  {
    return $this->tag; 
  } 

  public function getUpdated() 
  {
    return $this->updated; 
  } 

  public function getUrl() 
  {
    return $this->url; 
  } 

  public function getTo() 
  {
    return $this->to; 
  } 

  public function getBto() 
  {
    return $this->bto; 
  } 

  public function getCc() 
  {
    return $this->cc; 
  } 

  public function getBcc() 
  {
    return $this->bcc; 
  } 

  public function getMediaType() 
  {
    return $this->mediaType; 
  } 

  public function getDuration() 
  {
    return $this->duration; 
  } 

  public function render()
  {
    return Transformer::basic($this);
  }

  public function get()
  {
    $data = $this->render();
    return json_encode($data);
  }


}