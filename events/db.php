<?php

$this->event->listen(['db', 'insert', 'prepare', 'posts'], function($event){

   

    
  if(($language = $this->input->post('language', true)) !== false)
    $event['data']['language'] = $language;

  if(($sex = $this->input->post('sex', true)) !== false)
    $event['data']['sex'] = $sex;

  if(($violence = $this->input->post('violence', true)) !== false)
    $event['data']['violence'] = $violence;

});
$this->event->listen(['db', 'update', 'prepare', 'posts'], function($event){


 if(($language = $this->input->post('language', true)) !== false)
    $event['data']['language'] = $language;

  if(($sex = $this->input->post('sex', true)) !== false)
    $event['data']['sex'] = $sex;

  if(($violence = $this->input->post('violence', true)) !== false)
    $event['data']['violence'] = $violence;

   
});