<?php
/**
* Sets the body tag class and id attributes.
*
* From the Theme Developer's Guide, http://drupal.org/node/32077
*
* @param $is_front
*   boolean Whether or not the current page is the front page.
* @param $layout
*   string Which sidebars are being displayed.
* @return
*   string The rendered id and class attributes.
*/


$conf['feedbacktab_iframe_uri'] = 'http://google.com/';


function phptemplate_body_attributes($is_front = false, $layout = 'none') {

  if ($is_front) {
    $body_id = $body_class = 'homepage';
  }
  else {
    // Remove base path and any query string.
    global $base_path;
    list(,$path) = explode($base_path, $_SERVER['REQUEST_URI'], 2);
    list($path,) = explode('?', $path, 2);
    $path = rtrim($path, '/');
    // Construct the id name from the path, replacing slashes with dashes.
    $body_id = str_replace('/', '-', $path);
    // Construct the class name from the first part of the path only.
    list($body_class,) = explode('/', $path, 2);
  }
  $body_id = 'page-'. $body_id;
  $body_class = 'section-'. $body_class;

  // Use the same sidebar classes as Garland.
  $sidebar_class = ($layout == 'both') ? 'sidebars' : "sidebar-$layout";

  //return " id=\"$body_id\" class=\"$body_class $sidebar_class\"";
  
   return " id=\"$body_id\" ";
}




/**
* Theme override for theme_menu_item()
*/
function phptemplate_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) {
  $class = ($menu ? 'expanded' : ($has_children ? 'collapsed' : 'leaf'));
  if (!empty($extra_class)) {
    $class .= ' '. $extra_class;
  }
  if ($in_active_trail) {
    $class .= ' active-trail';
  }
 
  // Add unique identifier
  static $item_id = 0;
  $item_id += 1;
  $id .= ' ' . 'menu-item-custom-id-' . $item_id;
  // Add semi-unique class
  $class .= ' ' . preg_replace("/[^a-zA-Z0-9]/", "", strip_tags($link));
 
  return '<li class="'. $class .'" id="' . $id . '">'. $link . $menu ."</li>\n";
}







/**
* Override or insert PHPTemplate variables into the templates.
*/
function phptemplate_preprocess_page(&$vars) {
	/*if (arg(0) == 'admin') {
		$vars['template_files'][] = 'page-admin';
	}*/
  if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $template_filename = 'page';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '-' . $path_part;
        $vars['template_files'][] = $template_filename;
      }
    }
  }
}



/* permite incluir regioes dentro de templates de nodes */
function phptemplate_preprocess_node(&$variables, $hook) {
  $variables['lateral'] = theme('blocks', 'lateral');
}

?>