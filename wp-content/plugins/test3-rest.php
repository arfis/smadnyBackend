
<?php
/*
Plugin Name: RestApi 3
Plugin URI:
Description: Rest api endpoint for creating ICOs
Version: 1.0
Author: Michal Sevcik
Author URI: https://www.bitcoach.net
*/ 
class My_Rest_Server extends WP_REST_Controller {
 
  //The namespace and version for the REST SERVER
  var $my_namespace = 'api/v';
  var $my_version   = '1';
 
  public function register_routes() {
    $namespace = $this->my_namespace . $this->my_version;
    $base      = 'ico';
    register_rest_route( $namespace, '/' . $base, array(
      array(
          'methods'         => WP_REST_Server::READABLE,
          'callback'        => array( $this, 'get_latest_post' ),
          'permission_callback'   => array( $this, 'get_latest_post_permission' )
        ),
      array(
          'methods'         => WP_REST_Server::CREATABLE,
          'callback'        => array( $this, 'add_post_to_category' ),
          'permission_callback'   => array( $this, 'add_post_to_category_permission' )
        )
    )  );
  }
 
  // Register our REST Server
  public function hook_rest_server(){
    add_action( 'rest_api_init', array( $this, 'register_routes' ) );
  }
 
  public function get_latest_post_permission(){
 
      // This approach blocks the endpoint operation. You could alternatively do this by an un-blocking approach, by returning false here and changing the permissions check.
      return true;
  }
 
  public function get_latest_post( WP_REST_Request $request ){
    //Let Us use the helper methods to get the parameters
    $category = $request->get_param( 'category' );
    $post = get_posts( array(
          'category'      => $category,
            'posts_per_page'  => 1,
            'offset'      => 0
    ) );
 
      if( empty( $post ) ){
        return null;
      }
 
      return $post[0]->post_title;
  }
 
  public function add_post_to_category_permission(){
      return true;
  }
 
  public function add_post_to_category( $request ){
    //Let Us use the helper methods to get the parameters
    $args = array(
        'post_title' => $request->get_param( 'title' ),
        'logo' => $request->get_param('logo'),
	'post_type' => 'ico'
    );

    // return new WP_Error( 'request', $request, array( 'req' => $request, 'status' => 401 ) );
    if ( false !== ( $id = wp_insert_post( $args ) ) ){
      	update_field('logo', $request->get_param('logo'), $id);
	update_field('web', $request->get_param('web'), $id);
	update_field('hardcap', $request->get_param('hardcap'), $id);
	update_field('token_price', $request->get_param('token_price'), $id);
	update_field('currency', $request->get_param('currency'), $id);
	update_field('whitelist_date', $request->get_param('whitelist_date'), $id);
	update_field('presale_date', $request->get_param('presale_date'), $id);
	update_field('crowdsale_date', $request->get_param('crowdsale_date'), $id);
	update_field('telegram', $request->get_param('telegram'), $id);
	update_field('twitter', $request->get_param('twitter'), $id);
	update_field('recommended', $request->get_param('recommended'), $id);
	update_field('title', $request->get_param('title'), $id);
	return get_post( $id );
    }
 
    return false;
     
  }
}
 
$my_rest_server = new My_Rest_Server();
$my_rest_server->hook_rest_server();
