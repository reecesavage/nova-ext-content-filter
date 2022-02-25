<?php
 




$this->event->listen(['location', 'view', 'data', 'admin', 'write_missionpost'], function($event){



  $id = (is_numeric($this->uri->segment(3))) ? $this->uri->segment(3) : false;
  $post = $id ? $this->posts->get_post($id) : null;
  
 
  $this->config->load('extensions');
  $extensionsConfig = $this->config->item('extensions');

     $extConfigFilePath = dirname(__FILE__).'/../config.json';
         
        if ( file_exists( $extConfigFilePath ) ) { 
            $file = file_get_contents( $extConfigFilePath );
            $json = json_decode( $file, true );
    }




  switch($this->uri->segment(4)){
  
 
    default:
   
   
   $lanArray=[
    '0'=>'No swearing permitted.',
    '1'=>'Infrequent, mild swearing is permitted.',
    '2'=>'Swearing is permitted, with some limitations.',
    '3'=>'Swearing and mature language is permitted.',
  ];
   $sexArray=[
    '0'=>'No sexual content is permitted.',
    '1'=>'Mild sexual innuendo and references permitted.',
    '2'=>'Sexual content is permitted, with some limitations.',
    '3'=>'Sexual content may be described in detail.',
  ];

   $violArray=[
    '0'=>'No Violence permitted.',
    '1'=>'Mild  Violence is permitted.',
    '2'=>'Violence is permitted, with some limitations.',
    '3'=>'Explicit violence is permitted.',
  ];



   for($i=0;$i<=3;$i++)
   {  


          $event['data']['language']['label'][$i] = $lanArray[$i];
          $event['data']['language']['name'][$i] = 'language';
          $event['data']['language']['value'][$i] = $i;
          $event['data']['language']['checked'][$i] = $json['default']['language']==$i?'checked':'';
           $event['data']['language']['disable'][$i] = '';
          if($i>$json['setting']['language'])
          {
          $event['data']['language']['disable'][$i] = 'disabled';
          }
   }

   for($i=0;$i<=3;$i++)
   {
          $event['data']['sex']['label'][$i] = $sexArray[$i];
         $event['data']['sex']['name'][$i] = 'sex';
         $event['data']['sex']['value'][$i] = $i;
         $event['data']['sex']['checked'][$i] = $json['default']['sex']==$i?'checked':'';
           $event['data']['sex']['disable'][$i] = '';
          if($i>$json['setting']['sex'])
          {
          $event['data']['sex']['disable'][$i] = 'disabled';
          }
   }

    for($i=0;$i<=3;$i++)
   {
          $event['data']['violence']['label'][$i] = $violArray[$i];
         $event['data']['violence']['name'][$i] = 'violence';
         $event['data']['violence']['value'][$i] = $i;
         $event['data']['violence']['checked'][$i] = $json['default']['violence']==$i?'checked':'';
           $event['data']['violence']['disable'][$i] = '';
          if($i>$json['setting']['violence'])
          {
          $event['data']['violence']['disable'][$i] = 'disabled';
          }
   }




  }

    
  

  
});
$this->event->listen(['location', 'view', 'output', 'admin', 'write_missionpost'], function($event){
  switch($this->uri->segment(4)){
    case 'view':
      break;
    default:
     
    $this->config->load('extensions');


    $event['output'] .= $this->extension['jquery']['generator']
                      ->select('[name="tags"]')->closest('p')
                      ->after(
                        $this->extension['nova_ext_content_filter']
                             ->view('form', $this->skin, 'admin', $event['data'])
                      );



      
 }
                  
});
