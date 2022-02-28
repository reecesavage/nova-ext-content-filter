<?php 

$this->event->listen(['location', 'view', 'data', 'main', 'sim_viewpost'], function($event){




  $id = (is_numeric($this->uri->segment(3))) ? $this->uri->segment(3) : false;
  $post = $id ? $this->posts->get_post($id) : null;

    $extensionsConfig = $this->config->item('extensions');

             $extConfigFilePath = dirname(__FILE__).'/../config.json';
         
        if ( file_exists( $extConfigFilePath ) ) { 
            $file = file_get_contents( $extConfigFilePath );
            $json = json_decode( $file, true );
    }

     if($post->language!=100)
         {
           $json['default']['language']=$post->language;
         }
          if($post->sex!=100)
         {
           $json['default']['sex']=$post->sex;
         }
          if($post->violence!=100)
         {
           $json['default']['violence']=$post->violence;
         }

         

         if($json['default']['language']==3||$json['default']['sex']==3||$json['default']['violence']==3)
         {

          if(!Auth::is_logged_in())   
          {
             $event['data']['content']= "Due to material that may not be appropriate for all ages, you must be a member and logged in to view this content."; 
          }
         
         }
});
