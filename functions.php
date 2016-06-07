<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images, 
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
    - head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
    - custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once('library/bones.php'); // if you remove this, bones will break
/*
2. library/custom-post-type.php
    - an example custom post type
    - example custom taxonomy (like categories)
    - example custom taxonomy (like tags)
*/
require_once('library/product-post-type.php'); // you can disable this if you like
/*
3. library/admin.php
    - removing some default WordPress dashboard widgets
    - an example custom dashboard widget
    - adding custom login css
    - changing text in footer of admin
*/
require_once('library/admin.php'); // this comes turned off by default
/*
4. library/translation/translation.php
    - adding support for other languages
*/
// require_once('library/translation/translation.php'); // this comes turned off by default

//SHORTCODES AND CUSTOMIZED CONTENT
require_once('library/shortcodes.php');

//TASC POWER: meausring author algorithm and top authors
require_once('library/tasc_power.php');

/************* METABOX *****************/
require_once('library/options/tasc_options.php');


/* Disable WordPress Admin Bar for all users but admins. */
  show_admin_bar(false);
  
/************* THUMBNAIL SIZE OPTIONS *************/

//Ricordarsi che sono le thumbnail retina! Vanno divise per due
add_image_size( 'thumb-big', 1280, 845, true ); //Appare 515x340, vecchio 1030x680
add_image_size( 'thumb-normal', 750, 505, true ); //Appare 275x185
/* 
to add more sizes, simply copy a line from above 
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image, 
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/***** AMAZON AFFILIATE LINK with skimbu-08 ****/
add_filter('the_content','filter_amazon_associate_filter'); add_filter('comment_text','filter_amazon_associate_filter'); function filter_amazon_associate_filter($content) { $affiliate_code="skimbu08-21"; $content=preg_replace( '/http:\/\/[^>]*?amazon.([^\/]*)\/([^>]*?ASIN|gp\/product|exec\/obidos\/tg\/detail\/-|[^>]*?dp)\/([0-9a-zA-Z]{10})[a-zA-Z0-9#\/\*\-\?\&\%\=\,\._;]*/i', 'http://www.amazon.$1/exec/obidos/ASIN/$3/'.$affiliate_code, $content ); return $content; }

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => __('Sidebar 1', 'bonestheme'),
    	'description' => __('The first (primary) sidebar.', 'bonestheme'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    /* 
    to add more sidebars or widgetized areas, just copy
    and edit the above sidebar code. In order to call 
    your new sidebar just use the following code:
    
    Just change the name to whatever your new
    sidebar's id is, for example:
    
    register_sidebar(array(
    	'id' => 'sidebar2',
    	'name' => __('Sidebar 2', 'bonestheme'),
    	'description' => __('The second (secondary) sidebar.', 'bonestheme'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    To call the sidebar in your template, you can just copy
    the sidebar.php file and rename it to your sidebar's name.
    So using the above example, it would be:
    sidebar-sidebar2.php
    
    */
} 

// don't remove this bracket!

/************* COMMENT LAYOUT *********************/
		
// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
			    <?php 
			    /*
			        this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
			        echo get_avatar($comment,$size='32',$default='<path_to_url>' );
			    */ 
			    ?>
			    <!-- custom gravatar call -->
			    <?php
			    	// create variable
			    	$bgauthemail = get_comment_author_email();
			    ?>
			    <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5($bgauthemail); ?>?s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
			    <!-- end custom gravatar call -->
				<?php printf(__('<cite class="fn">%s</cite>', 'bonestheme'), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__('F jS, Y', 'bonestheme')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'bonestheme'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="alert info">
          			<p><?php _e('Your comment is awaiting moderation.', 'bonestheme') ?></p>
          		</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
    <!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!


/*********************
TINYMCE EDITOR EDITS
To add the chart count, the buttons etc.
*********************/


/************* TinyMCE *****************/
function akv3_editor_char_count() {
?>
<script type="text/javascript">
(function($) {
	wpCharCount = function(txt) {
		$('.char-count').html("" + txt.length);
	};
	$(document).ready(function() {
		$('#wp-word-count').append('<br />Char count: <span class="char-count">0</span>');
	}).bind( 'wpcountwords', function(e, txt) {
		wpCharCount(txt);
	});
	$('#content').bind('keyup', function() {
		wpCharCount($('#content').val());
	});
}(jQuery));
</script>
<?php
}
add_action('dbx_post_sidebar', 'akv3_editor_char_count');



/*********************
OTHER FUNCTIONS IMPROVEMENTS
Various...
*********************/

//Aggiungo featured galleries a custom post type

function add_featured_galleries_to_ctp( $post_types ) {
	return array( 'product' );
}
add_action( 'fg_post_types', 'add_featured_galleries_to_ctp' );

//IMAGE DEFAULT LINK
update_option('image_default_link_type','none');


//IS OLD POST??? Funzione che controlla quanto è vecchio un post. Dopo usi es. if ( is_old_post(10) ) {...
function is_old_post($days = 5) {
	$days = (int) $days;
	$offset = $days*60*60*24;
	if ( get_post_time() < date('U') - $offset )
		return true;
	return false;
}


//LIMIT CONTENT es. echo content(43);
function strip_only($str, $tags) {
    if(!is_array($tags)) {
        $tags = (strpos($str, '>') !== false ? explode('>', str_replace('<', '', $tags)) : array($tags));
        if(end($tags) == '') array_pop($tags);
    }
    foreach($tags as $tag) $str = preg_replace('#</?'.$tag.'[^>]*>#is', '', $str);
    return $str;
}


function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  $content = preg_replace('/<img[^>]+./','', $content);
  $content = strip_only($content, '<strong>');
  return $content;
}



//POST IN REVISION
add_action( 'transition_post_status', 'pending_post_status', 10, 3 );

function pending_post_status( $new_status, $old_status, $post ) {
	$editors = get_users('role=tasc_manager');
	$editors2 = get_users('role=editor');
	foreach ($editors as $editor) {
		$editors_emails[] = $editor->user_email;
	}
	foreach ($editors2 as $editor) {
		$editors_emails[] = $editor->user_email;
	}
	$headers[] = 'From: Cast <cast@tasc.it>';
	
	$permalink = get_permalink( $post->ID );
	$title = get_the_title( $post->ID );
	$author = get_the_author_meta( 'display_name' , $post->post_author );
	
    if ( $new_status === "pending" and $old_status != "pending") {
    	add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));
	    wp_mail($editors_emails,$title . ' in attesa di revisione',$title . ' di '. $author . ' è in attesa di revisione. <a href="http://www.tasc.it/wp-admin/post.php?post='. $post->ID .'&action=edit">Revisionalo il prima possibile.</a><br /><p>Se ricevi questa email è perché hai il privilegio di essere Tasc Manager o editore, assicurati che l\'articolo o l\'opinione siano revisionati il prima possibile, se non puoi farlo, senti il tuo team di editori. Ricordati che gli snack e le opinioni vanno pubblicati immediatamente una volta revisionati, mentre gli articoli possono essere programmati per evitare giorni di vuoto.</p><br /><br /> <strong>Go Cast Go Fast. Tasc Power.</strong>',$headers);
    }

}

//GET SHARED COUNT
function getsocialcount($url) {

 // Cache time
 $cache = 600; // seconds
 $tempurl = get_template_directory(); 
 $cacheFile = $tempurl .'/library/cache/counts/' . md5($url) . '.txt';

   if (file_exists($cacheFile) && (time() - $cache < filemtime($cacheFile))) {
   $result = file_get_contents("$cacheFile");
   return $result;

   } else {
	$apikey = "343314987ce3c5e0a1c569c0617a27feeb4921f1";
	$json = file_get_contents("http://free.sharedcount.com/?url=" . rawurlencode($url) . "&apikey=" . $apikey);
	$counts = json_decode($json, true);
    $result = $counts['Twitter'] + $counts['Facebook']['total_count'] + $counts['GooglePlusOne'];

    $fp = fopen($cacheFile, 'w');
    fwrite($fp, $result);
    fclose($fp);
    return $result;

   }
}



//INVIO MAIL UNA VOLTA CHE IL POST È PUBBLICATO
function authorNotification($post_id) {
   $post = get_post($post_id);
   $author = get_userdata($post->post_author);

   $message = "
      Hey ".$author->display_name.",
      Il tuo grande articolo/snack/opinione, ".$post->post_title." è stato revisionato e pubblicato: ".get_permalink( $post_id ).". Grazie!!";
   wp_mail($author->user_email, "Il tuo grande lavoro su Tasc è online", $message);
}
add_action('publish_post', 'authorNotification');
add_action('publish_opinion', 'authorNotification');


/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <input class="iconfont" type="submit" id="searchsubmit" value="e" />
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Cerca su Tasc...','bonestheme').'" />
    </form>';
    return $form;
} // don't remove this bracket!


?>
