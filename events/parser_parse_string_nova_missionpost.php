<?php 

$this->event->listen(['parser', 'parse_string', 'output', 'write', 'missionpost'], function($event){

   

$extensionsConfig = $this->config->item('extensions');

             $extConfigFilePath = dirname(__FILE__).'/../config.json';
         
        if ( file_exists( $extConfigFilePath ) ) { 
            $file = file_get_contents( $extConfigFilePath );
            $json = json_decode( $file, true );
    }

    $lan=$this->input->post('language');
    $sex=$this->input->post('sex');
    $vio=$this->input->post('violence');
    $location=$this->input->post('location');
    




  $event['output'] = preg_replace(
                '/'.preg_quote(lang('email_content_post_location')).'.*\<br \/\>/', 
                lang('email_content_post_location').' '.$location.'<br />
                Content Level: '.$lan.$sex.$vio.'<br/>', 
                $event['output'], 
                1
            );


 

});