<?php


class Category_Dog{


  private static $initialized = false;

  private static $taxonomies = array();

  public static function init(){
    if ( ! self::$initialized ) {
			self::init_hooks();
		}
  }

  private static function init_hooks(){
    self::$initialized = true;

    add_action( 'edit_user_profile', array( 'Category_Dog', 'edit_page__add_category_setting_area' ) );
    add_action( 'show_user_profile', array( 'Category_Dog', 'edit_page__add_category_setting_area' ) );
    add_action( 'user_new_form', array( 'Category_Dog', 'new_page__add_category_setting_area' ) );
    add_filter( 'get_object_terms', array( 'Category_Dog', 'category_seigyo_test' ), 10, 2 );
  }

  public static function category_seigyo_test( $arg, $post_id ){
    // $arg = array();
    return [];
  }

  public static function edit_page__add_category_setting_area(){

    $args = array();
    $args = array(
      'hide_empty' => false,
    );
    

    $aTerm = get_terms( $args );
    $aTermHierarchy = array();

    foreach( $aTerm as $term ){
      if( $term->parent == 0 ){
        $aTermHierarchy[] = get_term_children( $term->term_id, 'category' );
      }
    }
    // wp_terms_checklist();
    // print '<pre>';
    // // print_r(get_terms($args));
    // // print_r();
    // print '</pre>';
  }


  public static function new_page__add_category_setting_area(){
    print 'succeess';
  }




}