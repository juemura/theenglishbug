<?php
/**
 * Front Page Text
 *
 * File : awakening-front-page-text.php
 * 
 * @package Awakening
 * @since Awakening 1.0.0
 */
?>
<?php

class awakening_frontpage_featured_text_widget extends WP_Widget {

	private $icons_font_awesome = array(
				 "fa-glass" => "&#xf000",
				 "fa-music" => "&#xf001",
				 "fa-search" => "&#xf002",
				 "fa-envelope-o" => "&#xf003",
				 "fa-heart" => "&#xf004",
				 "fa-star" => "&#xf005",
				 "fa-star-o" => "&#xf006",
				 "fa-user" => "&#xf007",
				 "fa-film" => "&#xf008",
				 "fa-th-large" => "&#xf009",
				 "fa-th" => "&#xf00a",
				 "fa-th-list" => "&#xf00b",
				 "fa-check" => "&#xf00c",
				 "fa-times" => "&#xf00d",
				 "fa-search-plus" => "&#xf00e",
				 "fa-search-minus" => "&#xf010",
				 "fa-power-off" => "&#xf011",
				 "fa-signal" => "&#xf012",
				 "fa-cog" => "&#xf013",
				 "fa-trash-o" => "&#xf014",
				 "fa-home" => "&#xf015",
				 "fa-file-o" => "&#xf016",
				 "fa-clock-o" => "&#xf017",
				 "fa-road" => "&#xf018",
				 "fa-download" => "&#xf019",
				 "fa-arrow-circle-o-down" => "&#xf01a",
				 "fa-arrow-circle-o-up" => "&#xf01b",
				 "fa-inbox" => "&#xf01c",
				 "fa-play-circle-o" => "&#xf01d",
				 "fa-repeat" => "&#xf01e",
				 "fa-refresh" => "&#xf021",
				 "fa-list-alt" => "&#xf022",
				 "fa-lock" => "&#xf023",
				 "fa-flag" => "&#xf024",
				 "fa-headphones" => "&#xf025",
				 "fa-volume-off" => "&#xf026",
				 "fa-volume-down" => "&#xf027",
				 "fa-volume-up" => "&#xf028",
				 "fa-qrcode" => "&#xf029",
				 "fa-barcode" => "&#xf02a",
				 "fa-tag" => "&#xf02b",
				 "fa-tags" => "&#xf02c",
				 "fa-book" => "&#xf02d",
				 "fa-bookmark" => "&#xf02e",
				 "fa-print" => "&#xf02f",
				 "fa-camera" => "&#xf030",
				 "fa-font" => "&#xf031",
				 "fa-bold" => "&#xf032",
				 "fa-italic" => "&#xf033",
				 "fa-text-height" => "&#xf034",
				 "fa-text-width" => "&#xf035",
				 "fa-align-left" => "&#xf036",
				 "fa-align-center" => "&#xf037",
				 "fa-align-right" => "&#xf038",
				 "fa-align-justify" => "&#xf039",
				 "fa-list" => "&#xf03a",
				 "fa-outdent" => "&#xf03b",
				 "fa-indent" => "&#xf03c",
				 "fa-video-camera" => "&#xf03d",
				 "fa-picture-o" => "&#xf03e",
				 "fa-pencil" => "&#xf040",
				 "fa-map-marker" => "&#xf041",
				 "fa-adjust" => "&#xf042",
				 "fa-tint" => "&#xf043",
				 "fa-pencil-square-o" => "&#xf044",
				 "fa-share-square-o" => "&#xf045",
				 "fa-check-square-o" => "&#xf046",
				 "fa-arrows" => "&#xf047",
				 "fa-step-backward" => "&#xf048",
				 "fa-fast-backward" => "&#xf049",
				 "fa-backward" => "&#xf04a",
				 "fa-play" => "&#xf04b",
				 "fa-pause" => "&#xf04c",
				 "fa-stop" => "&#xf04d",
				 "fa-forward" => "&#xf04e",
				 "fa-fast-forward" => "&#xf050",
				 "fa-step-forward" => "&#xf051",
				 "fa-eject" => "&#xf052",
				 "fa-chevron-left" => "&#xf053",
				 "fa-chevron-right" => "&#xf054",
				 "fa-plus-circle" => "&#xf055",
				 "fa-minus-circle" => "&#xf056",
				 "fa-times-circle" => "&#xf057",
				 "fa-check-circle" => "&#xf058",
				 "fa-question-circle" => "&#xf059",
				 "fa-info-circle" => "&#xf05a",
				 "fa-crosshairs" => "&#xf05b",
				 "fa-times-circle-o" => "&#xf05c",
				 "fa-check-circle-o" => "&#xf05d",
				 "fa-ban" => "&#xf05e",
				 "fa-arrow-left" => "&#xf060",
				 "fa-arrow-right" => "&#xf061",
				 "fa-arrow-up" => "&#xf062",
				 "fa-arrow-down" => "&#xf063",
				 "fa-share" => "&#xf064",
				 "fa-expand" => "&#xf065",
				 "fa-compress" => "&#xf066",
				 "fa-plus" => "&#xf067",
				 "fa-minus" => "&#xf068",
				 "fa-asterisk" => "&#xf069",
				 "fa-exclamation-circle" => "&#xf06a",
				 "fa-gift" => "&#xf06b",
				 "fa-leaf" => "&#xf06c",
				 "fa-fire" => "&#xf06d",
				 "fa-eye" => "&#xf06e",
				 "fa-eye-slash" => "&#xf070",
				 "fa-exclamation-triangle" => "&#xf071",
				 "fa-plane" => "&#xf072",
				 "fa-calendar" => "&#xf073",
				 "fa-random" => "&#xf074",
				 "fa-comment" => "&#xf075",
				 "fa-magnet" => "&#xf076",
				 "fa-chevron-up" => "&#xf077",
				 "fa-chevron-down" => "&#xf078",
				 "fa-retweet" => "&#xf079",
				 "fa-shopping-cart" => "&#xf07a",
				 "fa-folder" => "&#xf07b",
				 "fa-folder-open" => "&#xf07c",
				 "fa-arrows-v" => "&#xf07d",
				 "fa-arrows-h" => "&#xf07e",
				 "fa-bar-chart-o" => "&#xf080",
				 "fa-twitter-square" => "&#xf081",
				 "fa-facebook-square" => "&#xf082",
				 "fa-camera-retro" => "&#xf083",
				 "fa-key" => "&#xf084",
				 "fa-cogs" => "&#xf085",
				 "fa-comments" => "&#xf086",
				 "fa-thumbs-o-up" => "&#xf087",
				 "fa-thumbs-o-down" => "&#xf088",
				 "fa-star-half" => "&#xf089",
				 "fa-heart-o" => "&#xf08a",
				 "fa-sign-out" => "&#xf08b",
				 "fa-linkedin-square" => "&#xf08c",
				 "fa-thumb-tack" => "&#xf08d",
				 "fa-external-link" => "&#xf08e",
				 "fa-sign-in" => "&#xf090",
				 "fa-trophy" => "&#xf091",
				 "fa-github-square" => "&#xf092",
				 "fa-upload" => "&#xf093",
				 "fa-lemon-o" => "&#xf094",
				 "fa-phone" => "&#xf095",
				 "fa-square-o" => "&#xf096",
				 "fa-bookmark-o" => "&#xf097",
				 "fa-phone-square" => "&#xf098",
				 "fa-twitter" => "&#xf099",
				 "fa-facebook" => "&#xf09a",
				 "fa-github" => "&#xf09b",
				 "fa-unlock" => "&#xf09c",
				 "fa-credit-card" => "&#xf09d",
				 "fa-rss" => "&#xf09e",
				 "fa-hdd-o" => "&#xf0a0",
				 "fa-bullhorn" => "&#xf0a1",
				 "fa-bell" => "&#xf0f3",
				 "fa-certificate" => "&#xf0a3",
				 "fa-hand-o-right" => "&#xf0a4",
				 "fa-hand-o-left" => "&#xf0a5",
				 "fa-hand-o-up" => "&#xf0a6",
				 "fa-hand-o-down" => "&#xf0a7",
				 "fa-arrow-circle-left" => "&#xf0a8",
				 "fa-arrow-circle-right" => "&#xf0a9",
				 "fa-arrow-circle-up" => "&#xf0aa",
				 "fa-arrow-circle-down" => "&#xf0ab",
				 "fa-globe" => "&#xf0ac",
				 "fa-wrench" => "&#xf0ad",
				 "fa-tasks" => "&#xf0ae",
				 "fa-filter" => "&#xf0b0",
				 "fa-briefcase" => "&#xf0b1",
				 "fa-arrows-alt" => "&#xf0b2",
				 "fa-users" => "&#xf0c0",
				 "fa-link" => "&#xf0c1",
				 "fa-cloud" => "&#xf0c2",
				 "fa-flask" => "&#xf0c3",
				 "fa-scissors" => "&#xf0c4",
				 "fa-files-o" => "&#xf0c5",
				 "fa-paperclip" => "&#xf0c6",
				 "fa-floppy-o" => "&#xf0c7",
				 "fa-square" => "&#xf0c8",
				 "fa-bars" => "&#xf0c9",
				 "fa-list-ul" => "&#xf0ca",
				 "fa-list-ol" => "&#xf0cb",
				 "fa-strikethrough" => "&#xf0cc",
				 "fa-underline" => "&#xf0cd",
				 "fa-table" => "&#xf0ce",
				 "fa-magic" => "&#xf0d0",
				 "fa-truck" => "&#xf0d1",
				 "fa-pinterest" => "&#xf0d2",
				 "fa-pinterest-square" => "&#xf0d3",
				 "fa-google-plus-square" => "&#xf0d4",
				 "fa-google-plus" => "&#xf0d5",
				 "fa-money" => "&#xf0d6",
				 "fa-caret-down" => "&#xf0d7",
				 "fa-caret-up" => "&#xf0d8",
				 "fa-caret-left" => "&#xf0d9",
				 "fa-caret-right" => "&#xf0da",
				 "fa-columns" => "&#xf0db",
				 "fa-sort" => "&#xf0dc",
				 "fa-sort-asc" => "&#xf0dd",
				 "fa-sort-desc" => "&#xf0de",
				 "fa-envelope" => "&#xf0e0",
				 "fa-linkedin" => "&#xf0e1",
				 "fa-undo" => "&#xf0e2",
				 "fa-gavel" => "&#xf0e3",
				 "fa-tachometer" => "&#xf0e4",
				 "fa-comment-o" => "&#xf0e5",
				 "fa-comments-o" => "&#xf0e6",
				 "fa-bolt" => "&#xf0e7",
				 "fa-sitemap" => "&#xf0e8",
				 "fa-umbrella" => "&#xf0e9",
				 "fa-clipboard" => "&#xf0ea",
				 "fa-lightbulb-o" => "&#xf0eb",
				 "fa-exchange" => "&#xf0ec",
				 "fa-cloud-download" => "&#xf0ed",
				 "fa-cloud-upload" => "&#xf0ee",
				 "fa-user-md" => "&#xf0f0",
				 "fa-stethoscope" => "&#xf0f1",
				 "fa-suitcase" => "&#xf0f2",
				 "fa-bell-o" => "&#xf0a2",
				 "fa-coffee" => "&#xf0f4",
				 "fa-cutlery" => "&#xf0f5",
				 "fa-file-text-o" => "&#xf0f6",
				 "fa-building-o" => "&#xf0f7",
				 "fa-hospital-o" => "&#xf0f8",
				 "fa-ambulance" => "&#xf0f9",
				 "fa-medkit" => "&#xf0fa",
				 "fa-fighter-jet" => "&#xf0fb",
				 "fa-beer" => "&#xf0fc",
				 "fa-h-square" => "&#xf0fd",
				 "fa-plus-square" => "&#xf0fe",
				 "fa-angle-double-left" => "&#xf100",
				 "fa-angle-double-right" => "&#xf101",
				 "fa-angle-double-up" => "&#xf102",
				 "fa-angle-double-down" => "&#xf103",
				 "fa-angle-left" => "&#xf104",
				 "fa-angle-right" => "&#xf105",
				 "fa-angle-up" => "&#xf106",
				 "fa-angle-down" => "&#xf107",
				 "fa-desktop" => "&#xf108",
				 "fa-laptop" => "&#xf109",
				 "fa-tablet" => "&#xf10a",
				 "fa-mobile" => "&#xf10b",
				 "fa-circle-o" => "&#xf10c",
				 "fa-quote-left" => "&#xf10d",
				 "fa-quote-right" => "&#xf10e",
				 "fa-spinner" => "&#xf110",
				 "fa-circle" => "&#xf111",
				 "fa-reply" => "&#xf112",
				 "fa-github-alt" => "&#xf113",
				 "fa-folder-o" => "&#xf114",
				 "fa-folder-open-o" => "&#xf115",
				 "fa-smile-o" => "&#xf118",
				 "fa-frown-o" => "&#xf119",
				 "fa-meh-o" => "&#xf11a",
				 "fa-gamepad" => "&#xf11b",
				 "fa-keyboard-o" => "&#xf11c",
				 "fa-flag-o" => "&#xf11d",
				 "fa-flag-checkered" => "&#xf11e",
				 "fa-terminal" => "&#xf120",
				 "fa-code" => "&#xf121",
				 "fa-reply-all" => "&#xf122",
				 "fa-mail-reply-all" => "&#xf122",
				 "fa-star-half-o" => "&#xf123",
				 "fa-location-arrow" => "&#xf124",
				 "fa-crop" => "&#xf125",
				 "fa-code-fork" => "&#xf126",
				 "fa-chain-broken" => "&#xf127",
				 "fa-question" => "&#xf128",
				 "fa-info" => "&#xf129",
				 "fa-exclamation" => "&#xf12a",
				 "fa-superscript" => "&#xf12b",
				 "fa-subscript" => "&#xf12c",
				 "fa-eraser" => "&#xf12d",
				 "fa-puzzle-piece" => "&#xf12e",
				 "fa-microphone" => "&#xf130",
				 "fa-microphone-slash" => "&#xf131",
				 "fa-shield" => "&#xf132",
				 "fa-calendar-o" => "&#xf133",
				 "fa-fire-extinguisher" => "&#xf134",
				 "fa-rocket" => "&#xf135",
				 "fa-maxcdn" => "&#xf136",
				 "fa-chevron-circle-left" => "&#xf137",
				 "fa-chevron-circle-right" => "&#xf138",
				 "fa-chevron-circle-up" => "&#xf139",
				 "fa-chevron-circle-down" => "&#xf13a",
				 "fa-html5" => "&#xf13b",
				 "fa-css3" => "&#xf13c",
				 "fa-anchor" => "&#xf13d",
				 "fa-unlock-alt" => "&#xf13e",
				 "fa-bullseye" => "&#xf140",
				 "fa-ellipsis-h" => "&#xf141",
				 "fa-ellipsis-v" => "&#xf142",
				 "fa-rss-square" => "&#xf143",
				 "fa-play-circle" => "&#xf144",
				 "fa-ticket" => "&#xf145",
				 "fa-minus-square" => "&#xf146",
				 "fa-minus-square-o" => "&#xf147",
				 "fa-level-up" => "&#xf148",
				 "fa-level-down" => "&#xf149",
				 "fa-check-square" => "&#xf14a",
				 "fa-pencil-square" => "&#xf14b",
				 "fa-external-link-square" => "&#xf14c",
				 "fa-share-square" => "&#xf14d",
				 "fa-compass" => "&#xf14e",
				 "fa-caret-square-o-down" => "&#xf150",
				 "fa-caret-square-o-up" => "&#xf151",
				 "fa-caret-square-o-right" => "&#xf152",
				 "fa-eur" => "&#xf153",
				 "fa-gbp" => "&#xf154",
				 "fa-usd" => "&#xf155",
				 "fa-inr" => "&#xf156",
				 "fa-jpy" => "&#xf157",
				 "fa-rub" => "&#xf158",
				 "fa-krw" => "&#xf159",
				 "fa-btc" => "&#xf15a",
				 "fa-file" => "&#xf15b",
				 "fa-file-text" => "&#xf15c",
				 "fa-sort-alpha-asc" => "&#xf15d",
				 "fa-sort-alpha-desc" => "&#xf15e",
				 "fa-sort-amount-asc" => "&#xf160",
				 "fa-sort-amount-desc" => "&#xf161",
				 "fa-sort-numeric-asc" => "&#xf162",
				 "fa-sort-numeric-desc" => "&#xf163",
				 "fa-thumbs-up" => "&#xf164",
				 "fa-thumbs-down" => "&#xf165",
				 "fa-youtube-square" => "&#xf166",
				 "fa-youtube" => "&#xf167",
				 "fa-xing" => "&#xf168",
				 "fa-xing-square" => "&#xf169",
				 "fa-youtube-play" => "&#xf16a",
				 "fa-dropbox" => "&#xf16b",
				 "fa-stack-overflow" => "&#xf16c",
				 "fa-instagram" => "&#xf16d",
				 "fa-flickr" => "&#xf16e",
				 "fa-adn" => "&#xf170",
				 "fa-bitbucket" => "&#xf171",
				 "fa-bitbucket-square" => "&#xf172",
				 "fa-tumblr" => "&#xf173",
				 "fa-tumblr-square" => "&#xf174",
				 "fa-long-arrow-down" => "&#xf175",
				 "fa-long-arrow-up" => "&#xf176",
				 "fa-long-arrow-left" => "&#xf177",
				 "fa-long-arrow-right" => "&#xf178",
				 "fa-apple" => "&#xf179",
				 "fa-windows" => "&#xf17a",
				 "fa-android" => "&#xf17b",
				 "fa-linux" => "&#xf17c",
				 "fa-dribbble" => "&#xf17d",
				 "fa-skype" => "&#xf17e",
				 "fa-foursquare" => "&#xf180",
				 "fa-trello" => "&#xf181",
				 "fa-female" => "&#xf182",
				 "fa-male" => "&#xf183",
				 "fa-gittip" => "&#xf184",
				 "fa-sun-o" => "&#xf185",
				 "fa-moon-o" => "&#xf186",
				 "fa-archive" => "&#xf187",
				 "fa-bug" => "&#xf188",
				 "fa-vk" => "&#xf189",
				 "fa-weibo" => "&#xf18a",
				 "fa-renren" => "&#xf18b",
				 "fa-pagelines" => "&#xf18c",
				 "fa-stack-exchange" => "&#xf18d",
				 "fa-arrow-circle-o-right" => "&#xf18e",
				 "fa-arrow-circle-o-left" => "&#xf190",
				 "fa-caret-square-o-left" => "&#xf191",
				 "fa-dot-circle-o" => "&#xf192",
				 "fa-wheelchair" => "&#xf193",
				 "fa-vimeo-square" => "&#xf194",
				 "fa-try" => "&#xf195",
				 "fa-plus-square-o" => "&#xf196"
	);
	

         public function __construct() {

			/* Widget settings. */
			$widget_ops = array( 'classname' => 'front-page-feature-text', 'description' => __('Front Page Feature Text for Marketing.', 'awakening') );

			/* Widget control settings. */
			$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'widget-front-page-feature-text' );

			/* Create the widget. */
			$this->WP_Widget( 'widget-front-page-feature-text', __('(Awakening) Front Page Feature Text', 'awakening'), $widget_ops, $control_ops );		
		
        }
		
		/* Get Default values of fields. */
		function widget_defaults() {
			return array(
				'title' => '',
				'title_align' => '',
				'feature_description' => '',
				'feature_description_align' => '',
				'action_url' => '',
				'action_label' => 'Learn More',
				'action_color' => 'primary',
				'action_button_align' => '',
				'feature_icon' => '',
				'thumbnail' => 'large',
				'image' => '',
				'image_align' => 'left',
			);
		}		

        public function form( $instance ) {
	
			$instance = wp_parse_args( (array) $instance, $this->widget_defaults());		

			$alignments = array (
				array(	'key' => 'left',
						'name' => __( 'Left', 'awakening' ) ),
				array(	'key' => 'right',
						'name' => __( 'Right', 'awakening' ) ),
				array(	'key' => 'center',
						'name' => __( 'Center', 'awakening' ) ),
				array(	'key' => 'justify',
						'name' => __( 'Justify', 'awakening' ) )
			);			
				
			awakening_widget_field( $this, array ( 'field' => 'title', 'label' => __( 'Title:', 'awakening' ) ), $instance['title'] );			

			awakening_widget_field( $this, array ( 'field' => 'feature_icon', 'type' => 'icon-select', 
															   'label' => __( 'Feature Icon:', 'awakening' ),
															   'options' => $this->icons_font_awesome, 'class' => '' ), $instance['feature_icon'] );
															   
			awakening_widget_field( $this, array ( 'field' => 'title_align', 'type' => 'select', 
												   'label' => __( 'Title Align:', 'awakening' ), 
												   'options' => $alignments, 
												   'class' => '' ), $instance['title_align'] );																   
															   
			awakening_widget_field( $this, array ( 'field' => 'feature_description', 'label' => __( 'Description:', 'awakening' ), 'type' => 'textarea'), $instance['feature_description'] );
			
			awakening_widget_field( $this, array ( 'field' => 'feature_description_align', 'type' => 'select', 
												   'label' => __( 'Description Align:', 'awakening' ), 
												   'options' => $alignments, 
												   'class' => '' ), $instance['feature_description_align'] );				
			
			awakening_widget_field( $this, array ( 'field' => 'image', 'label' => __( 'Image:', 'awakening' ), 'type' => 'media' ), $instance['image'] );
			
			awakening_widget_field( $this, array ( 'field' => 'thumbnail', 'type' => 'select', 
												   'label' => __( 'Image Size:', 'awakening' ), 
												   'options' => awakening_thumbnail_array(), 
												   'class' => '' ), $instance['thumbnail'] );		
												   

			if ( $instance['image'] )
				echo wp_get_attachment_image( $instance['image'], awakening_thumbnail_size( $instance['thumbnail'] ), false, array( 'class' => 'widget-image' ) );		

				
			awakening_widget_field( $this, array ( 'field' => 'image_align', 'type' => 'select', 
												   'label' => __( 'Image Align:', 'awakening' ), 
												   'options' => $alignments, 
												   'class' => '' ), $instance['image_align'] );					
			
			awakening_widget_field( $this, array ( 'field' => 'action_url', 'label' => __( 'Action URL:', 'awakening' ), 'type' => 'url' )
									, $instance['action_url'] );
									
			awakening_widget_field( $this, array ( 'field' => 'action_label', 'label' => __( 'Action Label:', 'awakening' ) ), $instance['action_label'] );
																 
			awakening_widget_field( $this, array ( 'field' => 'action_color', 'type' => 'select', 
															   'label' => __( 'Action Button: ', 'awakening' ),
															   'options' => array (
																	array(	'key' => 'default',
																			'name' => __( 'Default', 'awakening' ) ),
																	array(	'key' => 'success',
																			'name' => __( 'Green', 'awakening' ) ),
																	array(	'key' => 'alert',
																			'name' => __( 'Red', 'awakening' ) ),
																	array(	'key' => 'secondary',
																			'name' => __( 'Grey', 'awakening' ) )
																			 ), 'class' => '' ), $instance['action_color'] );
																			 
			awakening_widget_field( $this, array ( 'field' => 'action_button_align', 'type' => 'select', 
												   'label' => __( 'Action Button Align:', 'awakening' ), 
												   'options' => $alignments, 
												   'class' => '' ), $instance['action_button_align'] );
			   
        }

        public function update( $new, $old ) {				
			$instance = $old;
			$instance['title'] = strip_tags( $new['title'] );
			$instance['feature_description'] = wp_kses_stripslashes($new['feature_description']);
			$instance['action_url'] = esc_url_raw($new['action_url']);
			$instance['action_label'] = wp_kses_stripslashes($new['action_label']);
			$instance['action_color'] = wp_kses_stripslashes( $new['action_color'] );	
			$instance['feature_icon'] = strip_tags( $new['feature_icon'] );
			$instance['image'] =  $new['image'];
			$instance['thumbnail'] = $new['thumbnail'];		
			$instance['image_align'] = $new['image_align'];		
			$instance['title_align'] = $new['title_align'];
			$instance['feature_description_align'] = $new['feature_description_align'];
			$instance['action_button_align'] = $new['action_button_align'];			
			return $instance;			
        }

        public function widget( $args, $instance ) {	
		
			extract( $args, EXTR_SKIP );
			$instance = wp_parse_args($instance, $this->widget_defaults());
			extract( $instance, EXTR_SKIP );
			$title = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base);		

			echo $before_widget; 
			echo '<div class="feature">'; 
			if ( ! empty( $image ) ) {
				echo '<div class="feature-image text-'.$image_align.'">'; 
				echo wp_get_attachment_image( $image, awakening_thumbnail_size( $thumbnail ));
				echo '</div>';
			}
			echo '<h4 class="text-'.$title_align.'">'.'<i class="fa '.$feature_icon.' feature-icon"></i>'.$title.'</h4>';  
			echo '<div class="desc">'; 
			echo '<p class="text-'.$feature_description_align.'">' . do_shortcode( $feature_description ) .'</p>';		
			if ( ! empty( $action_url ) && ! empty( $action_label ) ) {
			echo '<p class="text-'.$action_button_align.'"><a href="'.esc_url( $action_url ).'" class="button radius tiny '.esc_attr( $action_color ).' " role="button">'.esc_attr( $action_label ).'</a> </p>';
			} 
			echo '</div>';
			echo '</div> ';

			echo $after_widget;

        }
}

?>