<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/


// let's create the function for the custom type
function custom_post_product() { 
	// creating (registering) the custom type 
	register_post_type( 'product', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Prodotti', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Prodotto', 'bonestheme'), /* This is the individual type */
			'all_items' => __('Tutti i prodotti', 'bonestheme'), /* the all items menu item */
			'add_new' => __('Aggiungi Nuovo', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Aggiungi Nuovo Prodotto', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Modifica', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Modifica Prodotto', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('Nuovo Prodotto', 'bonestheme'), /* New Display Title */
			'view_item' => __('Vedi Prodotto', 'bonestheme'), /* View Display Title */
			'search_items' => __('Cerca Prodotto', 'bonestheme'), /* Search Custom Type Title */ 
			'not_found' =>  __('Non trovato nel database.', 'bonestheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Non trovato nel cestino.', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Post "Prodotto", immagini e gallerie, solo brevi descrizioni.', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-megaphone', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'product', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'product', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'product');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'product');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_product');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'product_cat', 
    	array('product'), /* if you change the name of register_post_type( 'product', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Categorie', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Categoria', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Cerca Categorie', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'Tutte le categorie', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Categoria Parent', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Categoria Parent:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Modifica Categoria', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Aggiorna Categoria', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Aggiungi Nuova Categoria', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'Nome Nuova Categoria', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'prodotti' ),
    	)
    );   
    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'product_tag', 
    	array('product'), /* if you change the name of register_post_type( 'product', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Tags Prodotti', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Tag Prodotto', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Cerca Tag Prodotto', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'Tutti i Tag Prodotto', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Tag Parent', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Tag Parent:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Modifica Tag', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Aggiorna Tag', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Aggiungi Nuovo Tag', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'Nome Nuovo Tag', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 
    
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */
    
//CUSTOM FIELDS

define('MY_WORDPRESS_FOLDER',$_SERVER['DOCUMENT_ROOT']);
define('MY_THEME_FOLDER',str_replace("\\",'/',dirname(__FILE__)));
define('MY_THEME_PATH','/' . substr(MY_THEME_FOLDER,stripos(MY_THEME_FOLDER,'wp-content')));
 
add_action('admin_init','my_meta_init');
 
function my_meta_init()
{
    // review the function reference for parameter details
    // http://codex.wordpress.org/Function_Reference/wp_enqueue_script
    // http://codex.wordpress.org/Function_Reference/wp_enqueue_style
 
    //wp_enqueue_script('my_meta_js', MY_THEME_PATH . '/custom/meta.js', array('jquery'));
    wp_enqueue_style('my_meta_css', MY_THEME_PATH . '/product-fields/product-meta.css');
 
    // review the function reference for parameter details
    // http://codex.wordpress.org/Function_Reference/add_meta_box
 
    // add a meta box for each of the wordpress page types: posts and pages
    foreach (array('product') as $type) 
    {
        add_meta_box('my_all_meta', 'Link a store esterno', 'my_meta_setup', $type, 'normal', 'high');
    }
     
    // add a callback function to save any data a user enters in
    add_action('save_post','my_meta_save');
}
 
function my_meta_setup()
{
    global $post;
  
    // using an underscore, prevents the meta variable
    // from showing up in the custom fields section
    $meta = get_post_meta($post->ID,'_my_meta',TRUE);
  
    // instead of writing HTML here, lets do an include
    include(MY_THEME_FOLDER . '/product-fields/product-meta.php');
  
    // create a custom nonce for submit verification later
    echo '<input type="hidden" name="my_meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';
}
  
function my_meta_save($post_id) 
{
    // authentication checks
 
    // make sure data came from our meta box
    if (!wp_verify_nonce($_POST['my_meta_noncename'],__FILE__)) return $post_id;
 
    // check user permissions
    if ($_POST['post_type'] == 'product') 
    {
        if (!current_user_can('edit_page', $post_id)) return $post_id;
    }
    else
    {
        if (!current_user_can('edit_post', $post_id)) return $post_id;
    }
 
    // authentication passed, save data
 
    // var types
    // single: _my_meta[var]
    // array: _my_meta[var][]
    // grouped array: _my_meta[var_group][0][var_1], _my_meta[var_group][0][var_2]
 
    $current_data = get_post_meta($post_id, '_my_meta', TRUE);  
  
    $new_data = $_POST['_my_meta'];
 
    my_meta_clean($new_data);
     
    if ($current_data) 
    {
        if (is_null($new_data)) delete_post_meta($post_id,'_my_meta');
        else update_post_meta($post_id,'_my_meta',$new_data);
    }
    elseif (!is_null($new_data))
    {
        add_post_meta($post_id,'_my_meta',$new_data,TRUE);
    }
 
    return $post_id;
}
 
function my_meta_clean(&$arr)
{
    if (is_array($arr))
    {
        foreach ($arr as $i => $v)
        {
            if (is_array($arr[$i])) 
            {
                my_meta_clean($arr[$i]);
 
                if (!count($arr[$i])) 
                {
                    unset($arr[$i]);
                }
            }
            else
            {
                if (trim($arr[$i]) == '') 
                {
                    unset($arr[$i]);
                }
            }
        }
 
        if (!count($arr)) 
        {
            $arr = NULL;
        }
    }
}

	

?>
