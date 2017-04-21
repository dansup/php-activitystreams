<?php

namespace Dansup\ActivityStreams\Model;

use Dansup\ActivityStreams\Transformer\Object as Transformer;
use Carbon\Carbon;

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
  protected $addedFields = [];

  public function __construct() {}

  public function getOrSet($key, $val)
  {
    if( is_null($val) ) {
      $name = "get".ucwords($key);
      return $this->{$name}();
    } else {
      $name = "set".ucwords($key);
      $this->{$name}($val);
      return $this;
    }
  }

  public function id($id = null) 
  { 
    return $this->getOrSet('id', $id); 
  } 

  public function type($type = null) 
  { 
    return $this->getOrSet('type', $type); 
  } 

  public function attachment($attachment = null) 
  { 
    return $this->getOrSet('attachment', $attachment); 
  } 

  public function attributedTo($attributedTo = null) 
  { 
    return $this->getOrSet('attributedTo', $attributedTo); 
  } 

  public function audience($audience = null) 
  { 
    return $this->getOrSet('audience', $audience); 
  } 

  public function content($content = null) 
  { 
    return $this->getOrSet('content', $content); 
  } 

  public function context($context = null) 
  { 
    return $this->getOrSet('context', $context); 
  } 

  public function contentMap($contentMap = null) 
  { 
    return $this->getOrSet('contentMap', $contentMap); 
  } 

  public function name($name = null) 
  { 
    return $this->getOrSet('name', $name); 
  } 

  public function nameMap($nameMap = null) 
  { 
    return $this->getOrSet('nameMap', $nameMap); 
  } 

  public function endTime($endTime = null) 
  { 
    return $this->getOrSet('endTime', $endTime); 
  } 

  public function generator($generator = null) 
  { 
    return $this->getOrSet('generator', $generator); 
  } 

  public function icon($icon = null) 
  { 
    return $this->getOrSet('icon', $icon); 
  } 

  public function image($image = null) 
  { 
    return $this->getOrSet('image', $image); 
  } 

  public function inReplyTo($inReplyTo = null) 
  { 
    return $this->getOrSet('inReplyTo', $inReplyTo); 
  } 

  public function location($location = null) 
  { 
    return $this->getOrSet('location', $location); 
  } 

  public function preview($preview = null) 
  { 
    return $this->getOrSet('preview', $preview); 
  } 

  public function published($published = null) 
  { 
    return $this->getOrSet('published', $published); 
  } 

  public function replies($replies = null) 
  { 
    return $this->getOrSet('replies', $replies); 
  } 

  public function startTime($startTime = null) 
  { 
    return $this->getOrSet('startTime', $startTime); 
  } 

  public function summary($summary = null) 
  { 
    return $this->getOrSet('summary', $summary); 
  } 

  public function summaryMap($summaryMap = null) 
  { 
    return $this->getOrSet('summaryMap', $summaryMap); 
  } 

  public function tag($tag = null) 
  { 
    return $this->getOrSet('tag', $tag); 
  } 

  public function updated($updated = null) 
  { 
    return $this->getOrSet('updated', $updated); 
  } 

  public function url($url = null) 
  { 
    return $this->getOrSet('url', $url); 
  } 

  public function to($to = null) 
  { 
    return $this->getOrSet('to', $to); 
  } 

  public function bto($bto = null) 
  { 
    return $this->getOrSet('bto', $bto); 
  } 

  public function cc($cc = null) 
  { 
    return $this->getOrSet('cc', $cc); 
  } 

  public function bcc($bcc = null) 
  { 
    return $this->getOrSet('bcc', $bcc); 
  } 

  public function mediaType($mediaType = null) 
  { 
    return $this->getOrSet('mediaType', $mediaType); 
  } 

  public function duration($duration = null) 
  { 
    return $this->getOrSet('duration', $duration); 
  } 

  public function setId($id) {
    $this->id = $id;
    return $this;
  }

  public function getId() {
    return $this->id;
  }

  public function setType($type) {
    $this->type = $type;
    return $this;
  }

  public function getType() {
    return $this->type;
  }

  public function setAttachment($attachment) {
    $this->attachment = $attachment; 
    return $this;
  } 

  public function setAttributedTo($attributedTo) {
    $this->attributedTo = $attributedTo; 
    return $this;
  } 

  public function setAudience($audience) {
    $this->audience = $audience; 
    return $this;
  } 

  public function setContent($content) {
    $this->content = $content; 
    return $this;
  } 

  public function setContext($context) {
    $this->context = $context; 
    return $this;
  } 

  public function setContentMap($contentMap) {
    $this->contentMap = $contentMap; 
    return $this;
  } 

  public function setName($name) {
    $this->name = $name; 
    return $this;
  } 

  public function setNameMap($nameMap) {
    $this->nameMap = $nameMap; 
    return $this;
  } 

  public function setEndTime($endTime) {
    $this->endTime = $endTime; 
    return $this;
  } 

  public function setGenerator($generator) {
    $this->generator = $generator; 
    return $this;
  } 

  public function setIcon($icon) {
    $this->icon = $icon; 
    return $this;
  } 

  public function setImage($image) {
    $this->image = $image; 
    return $this;
  } 

  public function setInReplyTo($inReplyTo) {
    $this->inReplyTo = $inReplyTo; 
    return $this;
  } 

  public function setLocation($location) {
    $this->location = $location; 
    return $this;
  } 

  public function setPreview($preview) {
    $this->preview = $preview; 
    return $this;
  } 

  public function setPublished($published) {
    $this->published = $published; 
    return $this;
  } 

  public function setReplies($replies) {
    $this->replies = $replies; 
    return $this;
  } 

  public function setStartTime($startTime) {
    $this->startTime = $startTime; 
    return $this;
  } 

  public function setSummary($summary) {
    $this->summary = $summary; 
    return $this;
  } 

  public function setSummaryMap($summaryMap) {
    $this->summaryMap = $summaryMap; 
    return $this;
  } 

  public function setTag($tag) {
    $this->tag = $tag; 
    return $this;
  } 

  public function setUpdated($updated) {
    $this->updated = $updated; 
    return $this;
  } 

  public function setUrl($url) {
    $this->url = $url; 
    return $this;
  } 

  public function setTo($to) {
    $this->to = $to; 
    return $this;
  } 

  public function setBto($bto) {
    $this->bto = $bto; 
    return $this;
  } 

  public function setCc($cc) {
    $this->cc = $cc; 
    return $this;
  } 

  public function setBcc($bcc) {
    $this->bcc = $bcc; 
    return $this;
  } 

  public function setMediaType($mediaType) {
    $this->mediaType = $mediaType; 
    return $this;
  } 

  public function setDuration($duration) {
    $this->duration = $duration; 
    return $this;
  } 

  public function getAttachment() {
    return $this->attachment; 
  } 

  public function getAttributedTo() {
    return $this->attributedTo; 
  } 

  public function getAudience() {
    return $this->audience; 
  } 

  public function getContent() {
    return $this->content; 
  } 

  public function getContext() {
    return $this->context; 
  } 

  public function getContentMap() {
    return $this->contentMap; 
  } 

  public function getName() {
    return $this->name; 
  } 

  public function getNameMap() {
    return $this->nameMap; 
  } 

  public function getEndTime() {
    return $this->endTime; 
  } 

  public function getGenerator() {
    return $this->generator; 
  } 

  public function getIcon() {
    return $this->icon; 
  } 

  public function getImage() {
    return $this->image; 
  } 

  public function getInReplyTo() {
    return $this->inReplyTo; 
  } 

  public function getLocation() {
    return $this->location; 
  } 

  public function getPreview() {
    return $this->preview; 
  } 

  public function getPublished() {
    if( is_null($this->published) ) {
      $this->published = Carbon::now()->toIso8601String();

    }
    return $this->published; 
  } 

  public function getReplies() {
    return $this->replies; 
  } 

  public function getStartTime() {
    return $this->startTime; 
  } 

  public function getSummary() {
    return $this->summary; 
  } 

  public function getSummaryMap() {
    return $this->summaryMap; 
  } 

  public function getTag() {
    return $this->tag; 
  } 

  public function getUpdated() {
    return $this->updated; 
  } 

  public function getUrl() {
    return $this->url; 
  } 

  public function getTo() {
    return $this->to; 
  } 

  public function getBto() {
    return $this->bto; 
  } 

  public function getCc() {
    return $this->cc; 
  } 

  public function getBcc() {
    return $this->bcc; 
  } 

  public function getMediaType() {
    return $this->mediaType; 
  } 

  public function getDuration() {
    return $this->duration; 
  } 

  public function addedFields()
  {
    return $this->addedFields;
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