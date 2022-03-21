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

           $post->post_location=$event['data']['location'];
           $event['data']['location'] = "$post->post_location <br> <b>Content Level : </b>".$json['default']['language'].$json['default']['sex'].$json['default']['violence'];


         if($json['default']['language']==3||$json['default']['sex']==3||$json['default']['violence']==3)
         {

          if(!Auth::is_logged_in())   
          {
             $event['data']['content']= "This post contains content viewable only to persons 18 years of age or older, and is not available for Public viewing."; 
          }
         
         }
});
