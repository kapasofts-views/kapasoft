<?php
function kapasoft_preprocess_html(&$vars, $hook) {
    global $conf;
    // Return nid of nodes of type "interface_configuraitons".
    $nid_config = db_select('node', 'n')
        ->fields('n', array('nid'))
        ->fields('n', array('type'))
        ->condition('n.type', 'interface_configurations')
        ->execute()
        ->fetchCol();
    //load the configurations
    $configurationNode = node_load($nid_config);
    $interfaceConfig = array();

    if(!empty($configurationNode->field_driver_url['und'][0]['value'])){
        //if set by user
        $interfaceConfig['driver_url'] = $configurationNode->field_driver_url['und'][0]['value'];
    }else{
        //hard coded in default/settings.php
        $interfaceConfig['driver_url'] = $conf['global_driver_url'];
    }
    if(!empty($configurationNode->field_driver_port['und'][0]['value'])){
        //if set by user
        $interfaceConfig['driver_port'] = $configurationNode->field_driver_port['und'][0]['value'];
    }else{
        //hard coded in default/settings.php
        $interfaceConfig['driver_port'] = $conf['global_driver_port'];
    }

        $vars['interfaceConfig'] = $interfaceConfig;
}

function kapasoft_preprocess_page(&$vars, $hook) {

    $testimonialId = db_select('node', 'n')
        ->fields('n', array('nid'))
        ->fields('n', array('type'))
        ->condition('n.type', 'testimonials')
        ->execute()
        ->fetchCol();
    $testimonialUrl = drupal_get_path_alias("node/$testimonialId[0]");
    $vars['testimonialUrl'] = $testimonialUrl;


    if (isset($vars['node'])) {
        $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
//        switch($vars['node']->type){
//            case "property":
////                kapasoft_preprocess_property($vars, $hook, $propertyMap);
//                break;
//            case "faq_page":
//                kapasoft_preprocess_faq_page($vars, $hook);
//                break;
//            case "testimonials":
//                kapasoft_preprocess_testimonials($vars, $hook);
//                break;
//            case "article":
//                kapasoft_preprocess_article($vars, $hook);
//                break;
//            case "user":
//                kapasoft_preprocess_user($vars, $hook);
//                break;
//            case "contact_us":
//                kapasoft_preprocess_contactus($vars, $hook);
//                break;
//            default:
//                kapasoft_preprocess_basic_page($vars, $hook);
//                break;
//        }
    }
}
