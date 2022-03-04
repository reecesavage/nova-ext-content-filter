<?php 

$this->event->listen(['location', 'view', 'data', 'main', 'main_index'], function($event){
    
     
    
       $extensionsConfig = $this->config->item('extensions');

             $extConfigFilePath = dirname(__FILE__).'/../config.json';
         
        if ( file_exists( $extConfigFilePath ) ) { 
            $file = file_get_contents( $extConfigFilePath );
            $json = json_decode( $file, true );
    }


     if(isset($event['data']['lists']['posts']))
     {
        foreach($event['data']['lists']['posts'] as $key =>$value)
        {


 $post = $value['id']? $this->posts->get_post($value['id']) : null;



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
             $event['data']['lists']['posts'][$key]['content']= "This post contains content viewable only to persons 18 years of age or older, and is not available for Public viewing."; 
          }
         
         }



         
        }
     }

});
