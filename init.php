<?php 
$this->require_extension('jquery');


require_once dirname(__FILE__) . '/controllers/Installer.php';

$manager = ( new \nova_ext_content_filter\Installer() )->install();
require_once dirname(__FILE__) . '/events/location_admin_write_missionpost.php';
require_once dirname(__FILE__) . '/events/db.php';
require_once dirname(__FILE__) . '/events/location_admin_manage_posts_edit.php';
require_once dirname(__FILE__) . '/events/location_main_sim_viewpost.php';
require_once dirname(__FILE__) . '/events/location_main_index.php';
require_once dirname(__FILE__) . '/events/parser_parse_string_nova_missionpost.php';

