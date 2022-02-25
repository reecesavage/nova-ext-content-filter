<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once MODPATH . 'core/libraries/Nova_controller_admin.php';

class __extensions__nova_ext_content_filter__Manage extends Nova_controller_admin
{
    public function __construct()
    {
        parent::__construct();

        $this->ci = & get_instance();
        $this->_regions['nav_sub'] = Menu::build('adminsub', 'manageext');
        //$this->_regions['nav_sub'] = Menu::build('sub', 'sim');
        

        
    }

    
    public function getQuery($switch)
    {
       $prefix= $this->db->dbprefix;

             
        switch ($switch)
        {   



            case 'language':
                $sql = "ALTER TABLE {$prefix}posts ADD COLUMN language INT(11) DEFAULT 100";
            break;

             case 'sex':
                $sql = "ALTER TABLE {$prefix}posts ADD COLUMN sex INT(11) DEFAULT 100";
            break;

             case 'violence':
                $sql = "ALTER TABLE {$prefix}posts ADD COLUMN violence INT(11) DEFAULT 100";
            break;

          

            default:
            break;
        }
        return isset($sql) ? $sql : '';
    }


    public function saveColumn($requiredCharacterFields)
    {
        $prefix= $this->db->dbprefix;


        if (isset($_POST['submit']) && $_POST['submit'] == 'Add')
        {
            $attr = isset($_POST['attribute']) ? $_POST['attribute'] : '';


            if (in_array($attr, $requiredCharacterFields['post']) == true)
            {
                $table = "{$prefix}posts";

            }
            if (!empty($table))
            {

                if (!$this
                    ->db
                    ->field_exists($attr, $table))
                {
                    $sql = $this->getQuery($attr);
                    if (!empty($sql))
                    {
                        $query = $this
                            ->db
                            ->query($sql);

                        if (($key = array_search($attr, $requiredCharacterFields['post'])) !== false)
                        {
                            unset($requiredCharacterFields['post'][$key]);
                        }

                       
                        $list['post'] = $requiredCharacterFields;
                      
                        return $list;
                    }
                }

            }
        }

        return false;

    }


     public function config()
    {    
         
          Auth::check_access('site/settings');
        $data['title'] = 'Content Filter';
        $requiredCharacterFields['post'] = ['language','sex','violence'];

 
       

        if ($list = $this->saveColumn($requiredCharacterFields))
        {
            $requiredCharacterFields = $list['post'];
           
            $message = sprintf(lang('flash_success') ,
            // TODO: i18n...
            'Column Added successfully', '', '');

            $flash['status'] = 'success';
            $flash['message'] = text_output($message);

            $this->_regions['flash_message'] = Location::view('flash', $this->skin, 'admin', $flash);
        }



        $extConfigFilePath = dirname(__FILE__) . '/../config.json';

        if (!file_exists($extConfigFilePath))
        {
            return [];
        }
        $file = file_get_contents($extConfigFilePath);
        $data['jsons'] = json_decode($file, true);
        if (isset($_POST['submit']) && $_POST['submit'] == 'Submit')
        {
              

            

              $data['jsons']['setting']['language'] = $_POST['language'];
              $data['jsons']['setting']['sex'] = $_POST['sex'];
              $data['jsons']['setting']['violence'] = $_POST['violence'];

               $data['jsons']['default']['language'] = $_POST['default_language'];
              $data['jsons']['default']['sex'] = $_POST['default_sex'];
              $data['jsons']['default']['violence'] = $_POST['default_violence'];
              

            $jsonEncode = json_encode($data['jsons'], JSON_PRETTY_PRINT);

            file_put_contents($extConfigFilePath, $jsonEncode);

            $message = sprintf(lang('flash_success') ,
            // TODO: i18n...
            'Configuration', lang('actions_updated') , '');

            $flash['status'] = 'success';
            $flash['message'] = text_output($message);

            $this->_regions['flash_message'] = Location::view('flash', $this->skin, 'admin', $flash);

        }


     $prefix= $this->db->dbprefix;
     $table= "{$prefix}posts";
     $charFields = $this
            ->db
            ->list_fields("$table");
       
        
      
        $leftFields = [];
        foreach ($requiredCharacterFields['post'] as $key)
        {
            if (in_array($key, $charFields) == false)
            {
                $leftFields[] = $key;
            }
        }
       
        $data['fields'] = $leftFields;

      
        $this->_regions['title'] .= 'Content Filter';
        $this->_regions['content'] = $this->extension['nova_ext_content_filter']
            ->view('config', $this->skin, 'admin', $data);

        Template::assign($this->_regions);
        Template::render();
    }


}