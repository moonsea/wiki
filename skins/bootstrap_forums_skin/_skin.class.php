<?php
/**
 * This file implements a class derived of the generic Skin class in order to provide custom code for
 * the skin in this folder.
 *
 * This file is part of the b2evolution project - {@link http://b2evolution.net/}
 *
 * @package skins
 * @subpackage bootstrap_forums
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

/**
 * Specific code for this skin.
 *
 * ATTENTION: if you make a new skin you have to change the class name below accordingly
 */
class bootstrap_forums_Skin extends Skin
{
	/**
	 * Do we want to use style.min.css instead of style.css ?
	 */
	var $use_min_css = true;  // true|false|'check' Set this to true for better optimization

	/**
	 * Get default name for the skin.
	 * Note: the admin can customize it.
	 */
	function get_default_name()
	{
		return 'Bootstrap Forums';
	}


	/**
	 * Get default type for the skin.
	 */
	function get_default_type()
	{
		return 'normal';
	}


	/**
	 * What evoSkins API does has this skin been designed with?
	 *
	 * This determines where we get the fallback templates from (skins_fallback_v*)
	 * (allows to use new markup in new b2evolution versions)
	 */
	function get_api_version()
	{
		return 6;
	}


	/**
	 * Get definitions for editable params
	 *
	 * @see Plugin::GetDefaultSettings()
	 * @param local params like 'for_editing' => true
	 */
	function get_param_definitions( $params )
	{
		$r = array_merge( array(
				'section_layout_start' => array(
					'layout' => 'begin_fieldset',
					'label'  => T_('Layout Settings')
				),
					'layout_general' => array(
						'label' => T_('General Layout'),
						'note' => '',
						'defaultvalue' => 'no_sidebar',
						'options' => array(
								'no_sidebar'    => T_('No Sidebar'),
								'left_sidebar'  => T_('Left Sidebar'),
								'right_sidebar' => T_('Right Sidebar'),
							),
						'type' => 'select',
					),
					'layout_single' => array(
						'label' => T_('Single Thread Layout'),
						'note' => '',
						'defaultvalue' => 'no_sidebar',
						'options' => array(
								'no_sidebar'    => T_('No Sidebar'),
								'left_sidebar'  => T_('Left Sidebar'),
								'right_sidebar' => T_('Right Sidebar'),
							),
						'type' => 'select',
					),
					'max_image_height' => array(
						'label' => T_('Max image height'),
						'note' => 'px',
						'defaultvalue' => '',
						'type' => 'integer',
						'allow_empty' => true,
					),
				'section_layout_end' => array(
					'layout' => 'end_fieldset',
				),

				'section_forum_start' => array(
					'layout' => 'begin_fieldset',
					'label'  => T_('Forum Display Settings')
				),
					'display_post_date' => array(
						'label' => T_('Post date'),
						'note' => T_('Display the date of each post'),
						'defaultvalue' => 1,
						'type' => 'checkbox',
					),
					'banner_public' => array(
						'label' => T_('Display "Public" banner'),
						'note' => T_('Display banner for "Public" posts (posts & comments)'),
						'defaultvalue' => 1,
						'type' => 'checkbox',
					),
				'section_forum_end' => array(
					'layout' => 'end_fieldset',
				),

/*
				'section_page_start' => array(
					'layout' => 'begin_fieldset',
					'label'  => T_('Page Styles')
				),
					'page_text_size' => array(
						'label' => T_('Page text size'),
						'note' => T_('Default value is 14 pixels.'),
						'defaultvalue' => '14px',
						'size' => '4px',
						'type' => 'text',
					),
					'page_text_color' => array(
						'label' => T_('Page text color'),
						'note' => T_('E-g: #00ff00 for green'),
						'defaultvalue' => '#333',
						'type' => 'color',
					),
					'page_link_color' => array(
						'label' => T_('Page link color'),
						'note' => T_('E-g: #00ff00 for green'),
						'defaultvalue' => '#337ab7',
						'type' => 'color',
					),
					'current_tab_text_color' => array(
						'label' => T_('Current tab text color'),
						'note' => T_('E-g: #ff6600 for orange'),
						'defaultvalue' => '#333',
						'type' => 'color',
					),
					'page_bg_color' => array(
						'label' => T_('Page background color'),
						'note' => T_('E-g: #ff0000 for red'),
						'defaultvalue' => '#fff',
						'type' => 'color',
					),
				'section_page_end' => array(
					'layout' => 'end_fieldset',
				),
*/

				'section_colorbox_start' => array(
					'layout' => 'begin_fieldset',
					'label'  => T_('Colorbox Image Zoom')
				),
					'colorbox' => array(
						'label' => T_('Colorbox Image Zoom'),
						'note' => T_('Check to enable javascript zooming on images (using the colorbox script)'),
						'defaultvalue' => 1,
						'type' => 'checkbox',
					),
					'colorbox_vote_post' => array(
						'label' => T_('Voting on Post Images'),
						'note' => T_('Check this to enable AJAX voting buttons in the colorbox zoom view'),
						'defaultvalue' => 1,
						'type' => 'checkbox',
					),
					'colorbox_vote_post_numbers' => array(
						'label' => T_('Display Votes'),
						'note' => T_('Check to display number of likes and dislikes'),
						'defaultvalue' => 1,
						'type' => 'checkbox',
					),
					'colorbox_vote_comment' => array(
						'label' => T_('Voting on Comment Images'),
						'note' => T_('Check this to enable AJAX voting buttons in the colorbox zoom view'),
						'defaultvalue' => 1,
						'type' => 'checkbox',
					),
					'colorbox_vote_comment_numbers' => array(
						'label' => T_('Display Votes'),
						'note' => T_('Check to display number of likes and dislikes'),
						'defaultvalue' => 1,
						'type' => 'checkbox',
					),
					'colorbox_vote_user' => array(
						'label' => T_('Voting on User Images'),
						'note' => T_('Check this to enable AJAX voting buttons in the colorbox zoom view'),
						'defaultvalue' => 1,
						'type' => 'checkbox',
					),
					'colorbox_vote_user_numbers' => array(
						'label' => T_('Display Votes'),
						'note' => T_('Check to display number of likes and dislikes'),
						'defaultvalue' => 1,
						'type' => 'checkbox',
					),
				'section_colorbox_end' => array(
					'layout' => 'end_fieldset',
				),


				// WARNING: default value for bubbletips is specific!
				'section_username_start' => array(
					'layout' => 'begin_fieldset',
					'label'  => T_('Username options')
				),
					'gender_colored' => array(
						'label' => T_('Display gender'),
						'note' => T_('Use colored usernames to differentiate men & women.'),
						'defaultvalue' => 0,
						'type' => 'checkbox',
					),
					'bubbletip' => array(
						'label' => T_('Username bubble tips'),
						'note' => T_('Check to enable bubble tips on usernames'),
						'defaultvalue' => 1,		// On the forums skin, we want to enable this!
						'type' => 'checkbox',
					),
					'autocomplete_usernames' => array(
						'label' => T_('Autocomplete usernames'),
						'note' => T_('Check to enable auto-completion of usernames entered after a "@" sign in the comment forms'),
						'defaultvalue' => 1,
						'type' => 'checkbox',
					),
				'section_username_end' => array(
					'layout' => 'end_fieldset',
				),


				'section_access_start' => array(
					'layout' => 'begin_fieldset',
					'label'  => T_('When access is denied or requires login...')
				),
					'access_login_containers' => array(
						'label' => T_('Display on login screen'),
						'note' => '',
						'type' => 'checklist',
						'options' => array(
							array( 'header',   sprintf( T_('"%s" container'), NT_('Header') ),    1 ),
							array( 'page_top', sprintf( T_('"%s" container'), NT_('Page Top') ),  1 ),
							array( 'menu',     sprintf( T_('"%s" container'), NT_('Menu') ),      0 ),
							array( 'footer',   sprintf( T_('"%s" container'), NT_('Footer') ),    1 ) ),
						),
				'section_access_end' => array(
					'layout' => 'end_fieldset',
				),

			), parent::get_param_definitions( $params ) );

		return $r;
	}


	/**
	 * Get current skin post navigation setting. Always use this navigation setting where this skin is applied.
	 */
	function get_post_navigation()
	{
		return 'same_category';
	}


	/**
	 * Get ready for displaying the skin.
	 *
	 * This may register some CSS or JS...
	 */
	function display_init()
	{
		global $disp, $Messages, $debug;

		// Request some common features that the parent function (Skin::display_init()) knows how to provide:
		parent::display_init( array(
				'jquery',                  // Load jQuery
				'font_awesome',            // Load Font Awesome (and use its icons as a priority over the Bootstrap glyphicons)
				'bootstrap',               // Load Bootstrap (without 'bootstrap_theme_css')
				'bootstrap_evo_css',       // Load the b2evo_base styles for Bootstrap (instead of the old b2evo_base styles)
				'bootstrap_messages',      // Initialize $Messages Class to use Bootstrap styles
				'style_css',               // Load the style.css file of the current skin
				'colorbox',                // Load Colorbox (a lightweight Lightbox alternative + customizations for b2evo)
				'bootstrap_init_tooltips', // Inline JS to init Bootstrap tooltips (E.g. on comment form for allowed file extensions)
				'disp_auto',               // Automatically include additional CSS and/or JS required by certain disps (replace with 'disp_off' to disable this)
			) );

		// Skin specific initializations:

		// Limit images by max height:
		$max_image_height = intval( $this->get_setting( 'max_image_height' ) );
		if( $max_image_height > 0 )
		{
			add_css_headline( '.evo_image_block img { max-height: '.$max_image_height.'px; width: auto; }' );
		}

		if( in_array( $disp, array( 'single', 'page', 'comments' ) ) )
		{ // Load jquery UI to animate background color on change comment status or on vote
			require_js( '#jqueryUI#', 'blog' );
		}
		
		// Add custom CSS:
		$custom_css = '';
		
		// If sidebar == true + col-lg
		if( $layout = $this->get_setting( 'layout_general' ) != 'no_sidebar' )
		{
			$custom_css = "@media screen and (min-width: 1200px) {
				.forums_list .ft_date { 
					white-space: normal;
					margin-top: 11px;
				}
				.disp_single .single_topic .evo_content_block .panel-body .evo_post__full, .disp_single .evo_comment .panel-body .evo_comment_text p, .disp_single .post_tags {
					padding-left: 15px;
				}\n
			}";
		}
		
		if( ! empty( $custom_css ) )
		{ // Function for custom_css:
		$custom_css = '<style type="text/css">
<!--
'.$custom_css.'
-->
	</style>';
	add_headline( $custom_css );
	}			

}


	/**
	 * Display button to create a new post
	 *
	 * @param integer Chapter ID
	 * @param object Item
	 * @param array Additional params
	 */
	function display_post_button( $chapter_ID, $Item = NULL, $params = array() )
	{
		echo $this->get_post_button( $chapter_ID, $Item, $params );
	}


	/**
	 * Get HTML code of button to create a new post
	 *
	 * @param integer Chapter ID
	 * @param object Item
	 * @return string
	 */
	function get_post_button( $chapter_ID, $Item = NULL, $params = array() )
	{
		global $Blog;

		$params = array_merge( array(
				'group_class'  => '',
				'button_class' => '',
			), $params );

		$post_button = '';

		$chapter_is_locked = false;

		$write_new_post_url = $Blog->get_write_item_url( $chapter_ID );
		if( $write_new_post_url != '' )
		{ // Display button to write a new post
			$post_button = '<a href="'.$write_new_post_url.'" class="btn btn-primary '.$params['button_class'].'" title="'.T_('Post new topic').'"><i class="fa fa-pencil"></i> '.T_('New topic').'</a>';
		}
		else
		{ // If a creating of new post is unavailable
			$ChapterCache = & get_ChapterCache();
			$current_Chapter = $ChapterCache->get_by_ID( $chapter_ID, false, false );

			if( $current_Chapter && $current_Chapter->lock )
			{ // Display icon to inform that this forum is locked
				$post_button = '<span title="'.T_('This forum is locked: you cannot post, reply to, or edit topics.').'"><i class="icon fa fa-lock"></i> '.T_('Locked').'</span>';
				$chapter_is_locked = true;
			}
		}

		if( !empty( $Item ) )
		{
			if( $Item->comment_status == 'closed' || $Item->comment_status == 'disabled' || $Item->is_locked() )
			{ // Display icon to inform that this topic is locked for comments
				if( !$chapter_is_locked )
				{ // Display this button only when chapter is not locked, to avoid a duplicate button
					$post_button .= ' <span title="'.T_('This topic is locked: you cannot edit posts or make replies.').'"><i class="icon fa fa-lock"></i> '.T_('Locked').'</span>';
				}
			}
			else
			{ // Display button to post a reply
				$post_button .= ' <a href="'.$Item->get_feedback_url().'#form_p'.$Item->ID.'" class="btn btn-default '.$params['button_class'].'" title="'.T_('Reply to topic').'"><i class="fa fa-reply"></i> '.T_('Reply').'</a>';
			}
		}

		if( !empty( $post_button ) )
		{ // Display button
			return '<div class="post_button btn-group '.$params['group_class'].'">'.$post_button.'</div>';
		}
	}


	/**
	 * Determine to display status banner or to don't display
	 *
	 * @param string Status of Item or Comment
	 * @return boolean TRUE if we can display status banner for given status
	 */
	function enabled_status_banner( $status )
	{
		if( $status != 'published' )
		{	// Display status banner everytime when status is not 'published'
			return true;
		}

		if( is_logged_in() && $this->get_setting( 'banner_public' ) )
		{	// Also display status banner if status is 'published'
			//   AND current user is logged in
			//   AND this feature is enabled in skin settings
			return true;
		}

		// Don't display status banner
		return false;
	}


	/**
	 * Those templates are used for example by the messaging screens.
	 */
	function get_template( $name )
	{
		switch( $name )
		{
			case 'Results':
				// Results list:
				return array(
					'page_url' => '', // All generated links will refer to the current page
					'before' => '<div class="results panel panel-default">',
					'content_start' => '<div id="$prefix$ajax_content">',
					'header_start' => '',
						'header_text' => '<div class="center"><ul class="pagination">'
								.'$prev$$first$$list_prev$$list$$list_next$$last$$next$'
							.'</ul></div>',
						'header_text_single' => '',
					'header_end' => '',
					'head_title' => '<div class="panel-heading fieldset_title"><span class="pull-right">$global_icons$</span><h3 class="panel-title">$title$</h3></div>'."\n",
					'global_icons_class' => 'btn btn-default btn-sm',
					'filters_start'        => '<div class="filters panel-body">',
					'filters_end'          => '</div>',
					'filter_button_class'  => 'btn-sm btn-info',
					'filter_button_before' => '<div class="form-group pull-right">',
					'filter_button_after'  => '</div>',
					'messages_start' => '<div class="messages form-inline">',
					'messages_end' => '</div>',
					'messages_separator' => '<br />',
					'list_start' => '<div class="table_scroll">'."\n"
					               .'<table class="table table-striped table-bordered table-hover table-condensed" cellspacing="0">'."\n",
						'head_start' => "<thead>\n",
							'line_start_head' => '<tr>',  // TODO: fusionner avec colhead_start_first; mettre a jour admin_UI_general; utiliser colspan="$headspan$"
							'colhead_start' => '<th $class_attrib$>',
							'colhead_start_first' => '<th class="firstcol $class$">',
							'colhead_start_last' => '<th class="lastcol $class$">',
							'colhead_end' => "</th>\n",
							'sort_asc_off' => get_icon( 'sort_asc_off' ),
							'sort_asc_on' => get_icon( 'sort_asc_on' ),
							'sort_desc_off' => get_icon( 'sort_desc_off' ),
							'sort_desc_on' => get_icon( 'sort_desc_on' ),
							'basic_sort_off' => '',
							'basic_sort_asc' => get_icon( 'ascending' ),
							'basic_sort_desc' => get_icon( 'descending' ),
						'head_end' => "</thead>\n\n",
						'tfoot_start' => "<tfoot>\n",
						'tfoot_end' => "</tfoot>\n\n",
						'body_start' => "<tbody>\n",
							'line_start' => '<tr class="even">'."\n",
							'line_start_odd' => '<tr class="odd">'."\n",
							'line_start_last' => '<tr class="even lastline">'."\n",
							'line_start_odd_last' => '<tr class="odd lastline">'."\n",
								'col_start' => '<td $class_attrib$>',
								'col_start_first' => '<td class="firstcol $class$">',
								'col_start_last' => '<td class="lastcol $class$">',
								'col_end' => "</td>\n",
							'line_end' => "</tr>\n\n",
							'grp_line_start' => '<tr class="group">'."\n",
							'grp_line_start_odd' => '<tr class="odd">'."\n",
							'grp_line_start_last' => '<tr class="lastline">'."\n",
							'grp_line_start_odd_last' => '<tr class="odd lastline">'."\n",
										'grp_col_start' => '<td $class_attrib$ $colspan_attrib$>',
										'grp_col_start_first' => '<td class="firstcol $class$" $colspan_attrib$>',
										'grp_col_start_last' => '<td class="lastcol $class$" $colspan_attrib$>',
								'grp_col_end' => "</td>\n",
							'grp_line_end' => "</tr>\n\n",
						'body_end' => "</tbody>\n\n",
						'total_line_start' => '<tr class="total">'."\n",
							'total_col_start' => '<td $class_attrib$>',
							'total_col_start_first' => '<td class="firstcol $class$">',
							'total_col_start_last' => '<td class="lastcol $class$">',
							'total_col_end' => "</td>\n",
						'total_line_end' => "</tr>\n\n",
					'list_end' => "</table></div>\n\n",
					'footer_start' => '',
					'footer_text' => '<div class="center"><ul class="pagination">'
							.'$prev$$first$$list_prev$$list$$list_next$$last$$next$'
						.'</ul></div><div class="center">$page_size$</div>'
					                  /* T_('Page $scroll_list$ out of $total_pages$   $prev$ | $next$<br />'. */
					                  /* '<strong>$total_pages$ Pages</strong> : $prev$ $list$ $next$' */
					                  /* .' <br />$first$  $list_prev$  $list$  $list_next$  $last$ :: $prev$ | $next$') */,
					'footer_text_single' => '<div class="center">$page_size$</div>',
					'footer_text_no_limit' => '', // Text if theres no LIMIT and therefor only one page anyway
						'page_current_template' => '<span>$page_num$</span>',
						'page_item_before' => '<li>',
						'page_item_after' => '</li>',
						'page_item_current_before' => '<li class="active">',
						'page_item_current_after'  => '</li>',
						'prev_text' => T_('Previous'),
						'next_text' => T_('Next'),
						'no_prev_text' => '',
						'no_next_text' => '',
						'list_prev_text' => T_('...'),
						'list_next_text' => T_('...'),
						'list_span' => 11,
						'scroll_list_range' => 5,
					'footer_end' => "\n\n",
					'no_results_start' => '<div class="panel-footer">'."\n",
					'no_results_end'   => '$no_results$</div>'."\n\n",
					'content_end' => '</div>',
					'after' => '</div>',
					'sort_type' => 'basic'
				);
				break;

			case 'blockspan_form':
				// Form settings for filter area:
				return array(
					'layout'         => 'blockspan',
					'formclass'      => 'form-inline',
					'formstart'      => '',
					'formend'        => '',
					'title_fmt'      => '$title$'."\n",
					'no_title_fmt'   => '',
					'fieldset_begin' => '<fieldset $fieldset_attribs$>'."\n"
																.'<legend $title_attribs$>$fieldset_title$</legend>'."\n",
					'fieldset_end'   => '</fieldset>'."\n",
					'fieldstart'     => '<div class="form-group form-group-sm" $ID$>'."\n",
					'fieldend'       => "</div>\n\n",
					'labelclass'     => 'control-label',
					'labelstart'     => '',
					'labelend'       => "\n",
					'labelempty'     => '<label></label>',
					'inputstart'     => '',
					'inputend'       => "\n",
					'infostart'      => '<div class="form-control-static">',
					'infoend'        => "</div>\n",
					'buttonsstart'   => '<div class="form-group form-group-sm">',
					'buttonsend'     => "</div>\n\n",
					'customstart'    => '<div class="custom_content">',
					'customend'      => "</div>\n",
					'note_format'    => ' <span class="help-inline">%s</span>',
					// Additional params depending on field type:
					// - checkbox
					'fieldstart_checkbox'    => '<div class="form-group form-group-sm checkbox" $ID$>'."\n",
					'fieldend_checkbox'      => "</div>\n\n",
					'inputclass_checkbox'    => '',
					'inputstart_checkbox'    => '',
					'inputend_checkbox'      => "\n",
					'checkbox_newline_start' => '',
					'checkbox_newline_end'   => "\n",
					// - radio
					'inputclass_radio'       => '',
					'radio_label_format'     => '$radio_option_label$',
					'radio_newline_start'    => '',
					'radio_newline_end'      => "\n",
					'radio_oneline_start'    => '',
					'radio_oneline_end'      => "\n",
				);

			case 'compact_form':
			case 'Form':
				// Default Form settings:
				return array(
					'layout'         => 'fieldset',
					'formclass'      => 'form-horizontal',
					'formstart'      => '',
					'formend'        => '',
					'title_fmt'      => '<span style="float:right">$global_icons$</span><h2>$title$</h2>'."\n",
					'no_title_fmt'   => '<span style="float:right">$global_icons$</span>'."\n",
					'fieldset_begin' => '<div class="fieldset_wrapper $class$" id="fieldset_wrapper_$id$"><fieldset $fieldset_attribs$><div class="panel panel-default">'."\n"
															.'<legend class="panel-heading" $title_attribs$>$fieldset_title$</legend><div class="panel-body $class$">'."\n",
					'fieldset_end'   => '</div></div></fieldset></div>'."\n",
					'fieldstart'     => '<div class="form-group" $ID$>'."\n",
					'fieldend'       => "</div>\n\n",
					'labelclass'     => 'control-label col-sm-3',
					'labelstart'     => '',
					'labelend'       => "\n",
					'labelempty'     => '<label class="control-label col-sm-3"></label>',
					'inputstart'     => '<div class="controls col-sm-9">',
					'inputend'       => "</div>\n",
					'infostart'      => '<div class="controls col-sm-9"><div class="form-control-static">',
					'infoend'        => "</div></div>\n",
					'buttonsstart'   => '<div class="form-group"><div class="control-buttons col-sm-offset-3 col-sm-9">',
					'buttonsend'     => "</div></div>\n\n",
					'customstart'    => '<div class="custom_content">',
					'customend'      => "</div>\n",
					'note_format'    => ' <span class="help-inline">%s</span>',
					// Additional params depending on field type:
					// - checkbox
					'inputclass_checkbox'    => '',
					'inputstart_checkbox'    => '<div class="controls col-sm-9"><div class="checkbox"><label>',
					'inputend_checkbox'      => "</label></div></div>\n",
					'checkbox_newline_start' => '<div class="checkbox">',
					'checkbox_newline_end'   => "</div>\n",
					// - radio
					'fieldstart_radio'       => '<div class="form-group radio-group" $ID$>'."\n",
					'fieldend_radio'         => "</div>\n\n",
					'inputclass_radio'       => '',
					'radio_label_format'     => '$radio_option_label$',
					'radio_newline_start'    => '<div class="radio"><label>',
					'radio_newline_end'      => "</label></div>\n",
					'radio_oneline_start'    => '<label class="radio-inline">',
					'radio_oneline_end'      => "</label>\n",
				);

			case 'linespan_form':
				// Linespan form:
				return array(
					'layout'         => 'linespan',
					'formclass'      => 'form-horizontal',
					'formstart'      => '',
					'formend'        => '',
					'title_fmt'      => '<span style="float:right">$global_icons$</span><h2>$title$</h2>'."\n",
					'no_title_fmt'   => '<span style="float:right">$global_icons$</span>'."\n",
					'fieldset_begin' => '<div class="fieldset_wrapper $class$" id="fieldset_wrapper_$id$"><fieldset $fieldset_attribs$><div class="panel panel-default">'."\n"
															.'<legend class="panel-heading" $title_attribs$>$fieldset_title$</legend><div class="panel-body $class$">'."\n",
					'fieldset_end'   => '</div></div></fieldset></div>'."\n",
					'fieldstart'     => '<div class="form-group" $ID$>'."\n",
					'fieldend'       => "</div>\n\n",
					'labelclass'     => '',
					'labelstart'     => '',
					'labelend'       => "\n",
					'labelempty'     => '',
					'inputstart'     => '<div class="controls">',
					'inputend'       => "</div>\n",
					'infostart'      => '<div class="controls"><div class="form-control-static">',
					'infoend'        => "</div></div>\n",
					'buttonsstart'   => '<div class="form-group"><div class="control-buttons">',
					'buttonsend'     => "</div></div>\n\n",
					'customstart'    => '<div class="custom_content">',
					'customend'      => "</div>\n",
					'note_format'    => ' <span class="help-inline">%s</span>',
					// Additional params depending on field type:
					// - checkbox
					'inputclass_checkbox'    => '',
					'inputstart_checkbox'    => '<div class="controls"><div class="checkbox"><label>',
					'inputend_checkbox'      => "</label></div></div>\n",
					'checkbox_newline_start' => '<div class="checkbox">',
					'checkbox_newline_end'   => "</div>\n",
					'checkbox_basic_start'   => '<div class="checkbox"><label>',
					'checkbox_basic_end'     => "</label></div>\n",
					// - radio
					'fieldstart_radio'       => '',
					'fieldend_radio'         => '',
					'inputstart_radio'       => '<div class="controls">',
					'inputend_radio'         => "</div>\n",
					'inputclass_radio'       => '',
					'radio_label_format'     => '$radio_option_label$',
					'radio_newline_start'    => '<div class="radio"><label>',
					'radio_newline_end'      => "</label></div>\n",
					'radio_oneline_start'    => '<label class="radio-inline">',
					'radio_oneline_end'      => "</label>\n",
				);

			case 'fixed_form':
				// Form with fixed label width:
				return array(
					'layout'         => 'fieldset',
					'formclass'      => 'form-horizontal',
					'formstart'      => '',
					'formend'        => '',
					'title_fmt'      => '<span style="float:right">$global_icons$</span><h2>$title$</h2>'."\n",
					'no_title_fmt'   => '<span style="float:right">$global_icons$</span>'."\n",
					'fieldset_begin' => '<div class="fieldset_wrapper $class$" id="fieldset_wrapper_$id$"><fieldset $fieldset_attribs$><div class="panel panel-default">'."\n"
															.'<legend class="panel-heading" $title_attribs$>$fieldset_title$</legend><div class="panel-body $class$">'."\n",
					'fieldset_end'   => '</div></div></fieldset></div>'."\n",
					'fieldstart'     => '<div class="form-group fixedform-group" $ID$>'."\n",
					'fieldend'       => "</div>\n\n",
					'labelclass'     => 'control-label fixedform-label',
					'labelstart'     => '',
					'labelend'       => "\n",
					'labelempty'     => '<label class="control-label fixedform-label"></label>',
					'inputstart'     => '<div class="controls fixedform-controls">',
					'inputend'       => "</div>\n",
					'infostart'      => '<div class="controls fixedform-controls"><div class="form-control-static">',
					'infoend'        => "</div></div>\n",
					'buttonsstart'   => '<div class="form-group"><div class="control-buttons fixedform-controls">',
					'buttonsend'     => "</div></div>\n\n",
					'customstart'    => '<div class="custom_content">',
					'customend'      => "</div>\n",
					'note_format'    => ' <span class="help-inline">%s</span>',
					// Additional params depending on field type:
					// - checkbox
					'inputclass_checkbox'    => '',
					'inputstart_checkbox'    => '<div class="controls fixedform-controls"><div class="checkbox"><label>',
					'inputend_checkbox'      => "</label></div></div>\n",
					'checkbox_newline_start' => '<div class="checkbox">',
					'checkbox_newline_end'   => "</div>\n",
					// - radio
					'fieldstart_radio'       => '<div class="form-group radio-group" $ID$>'."\n",
					'fieldend_radio'         => "</div>\n\n",
					'inputclass_radio'       => '',
					'radio_label_format'     => '$radio_option_label$',
					'radio_newline_start'    => '<div class="radio"><label>',
					'radio_newline_end'      => "</label></div>\n",
					'radio_oneline_start'    => '<label class="radio-inline">',
					'radio_oneline_end'      => "</label>\n",
				);

			case 'user_navigation':
				// The Prev/Next links of users
				return array(
					'block_start'  => '<ul class="pager">',
					'prev_start'   => '<li class="previous">',
					'prev_end'     => '</li>',
					'prev_no_user' => '',
					'back_start'   => '<li>',
					'back_end'     => '</li>',
					'next_start'   => '<li class="next">',
					'next_end'     => '</li>',
					'next_no_user' => '',
					'block_end'    => '</ul>',
				);

			case 'button_classes':
				// Button classes
				return array(
					'button'       => 'btn btn-default btn-xs',
					'button_red'   => 'btn-danger',
					'button_green' => 'btn-success',
					'text'         => 'btn btn-default btn-xs',
					'group'        => 'btn-group',
				);

			case 'tooltip_plugin':
				// Plugin name for tooltips: 'bubbletip' or 'popover'
				return 'popover';
				break;

			case 'plugin_template':
				// Template for plugins
				return array(
						'toolbar_before'       => '<div class="btn-toolbar $toolbar_class$" role="toolbar">',
						'toolbar_after'        => '</div>',
						'toolbar_title_before' => '<div class="btn-toolbar-title">',
						'toolbar_title_after'  => '</div>',
						'toolbar_group_before' => '<div class="btn-group btn-group-xs" role="group">',
						'toolbar_group_after'  => '</div>',
						'toolbar_button_class' => 'btn btn-default',
					);

			case 'modal_window_js_func':
				// JavaScript function to initialize Modal windows, @see echo_user_ajaxwindow_js()
				return 'echo_modalwindow_js_bootstrap';
				break;

			default:
				// Delegate to parent class:
				return parent::get_template( $name );
		}
	}


	/**
	 * Check if we can display a widget container
	 *
	 * @param string Widget container key: 'header', 'page_top', 'menu', 'sidebar', 'sidebar2', 'footer'
	 * @param string Skin setting name
	 * @return boolean TRUE to display
	 */
	function is_visible_container( $container_key, $setting_name = 'access_login_containers' )
	{
		$access = $this->get_setting( $setting_name );

		return ( ! empty( $access ) && ! empty( $access[ $container_key ] ) );
	}


	/**
	 * Check if we can display a sidebar for the current layout
	 *
	 * @param string Layout: 'general' or 'single'
	 * @param boolean TRUE to check if at least one sidebar container is visible
	 * @return boolean TRUE to display a sidebar
	 */
	function is_visible_sidebar( $layout = 'general', $check_containers = false )
	{
		$layout = $this->get_setting_layout( $layout );

		if( $layout != 'left_sidebar' && $layout != 'right_sidebar' )
		{ // Sidebar is not displayed for selected skin layout
			return false;
		}

		if( $check_containers )
		{ // Check if at least one sidebar container is visible
			return ( $this->is_visible_container( 'sidebar' ) ||  $this->is_visible_container( 'sidebar2' ) );
		}
		else
		{ // We should not check the visibility of the sidebar containers for this case
			return true;
		}
	}


	/**
	 * Get value for attbiute "class" of column block
	 * depending on skin setting "Layout"
	 *
	 * @param string Layout: 'general' or 'single'
	 * @return string
	 */
	function get_column_class( $layout = 'general' )
	{
		switch( $this->get_setting_layout( $layout ) )
		{
			case 'left_sidebar':
				// Left Sidebar
				return 'col-md-9 pull-right';

			case 'right_sidebar':
				// Right Sidebar
				return 'col-md-9';

			case 'no_sidebar':
				// No Sidebar (Single large column)
			default:
				return 'col-md-12';
		}
	}


	/**
	 * Get a layout setting value depending on $disp
	 *
	 * @param string Layout: 'general' or 'single'
	 * @return string
	 */
	function get_setting_layout( $layout = 'general' )
	{
		global $disp;

		if( $disp == 'single' )
		{	// Single post page has a separate setting for layout:
			if( $layout == 'single' )
			{
				return $this->get_setting( 'layout_single' );
			}
		}
		elseif( $layout == 'general' )
		{	// Use this settings for all other pages:
			return $this->get_setting( 'layout_general' );
		}

		// Hide sidebar by default:
		return 'no_sidebar';
	}


	/**
	 * Display a button to view the Recent/New Topics
	 */
	function display_button_recent_topics()
	{
		global $Blog;

		if( ! is_logged_in() || ! $Blog->get_setting( 'track_unread_content' ) )
		{	// For not logged in users AND if the tracking of unread content is turned off for the collection
			$btn_class = 'btn-info';
			$btn_title = T_('Recent Topics');
		}
		else
		{	// For logged in users:
			global $current_User, $DB, $localtimenow;

			// Initialize SQL query to get only the posts which are displayed by global $MainList on disp=posts:
			$ItemList2 = new ItemList2( $Blog, $Blog->get_timestamp_min(), $Blog->get_timestamp_max(), NULL, 'ItemCache', 'recent_topics' );
			$ItemList2->set_default_filters( array(
					'unit' => 'all', // set this to don't calculate total rows
				) );
			$ItemList2->query_init();

			// Get a count of the unread topics for current user:
			$unread_posts_SQL = new SQL();
			$unread_posts_SQL->SELECT( 'COUNT( post_ID )' );
			$unread_posts_SQL->FROM( 'T_items__item' );
			$unread_posts_SQL->FROM_add( 'LEFT JOIN T_users__postreadstatus ON post_ID = uprs_post_ID AND uprs_user_ID = '.$DB->quote( $current_User->ID ) );
			$unread_posts_SQL->FROM_add( 'INNER JOIN T_categories ON post_main_cat_ID = cat_ID' );
			$unread_posts_SQL->WHERE( $ItemList2->ItemQuery->get_where( '' ) );
			$unread_posts_SQL->WHERE_and( 'post_last_touched_ts > '.$DB->quote( date2mysql( $localtimenow - 30 * 86400 ) ) );
			// In theory, it would be more safe to use this comparison:
			// $unread_posts_SQL->WHERE_and( 'uprs_post_ID IS NULL OR uprs_read_post_ts <= post_last_touched_ts' );
			// But until we have milli- or micro-second precision on timestamps, we decided it was a better trade-off to never see our own edits as unread. So we use:
			$unread_posts_SQL->WHERE_and( 'uprs_post_ID IS NULL OR uprs_read_post_ts < post_last_touched_ts' );

			// Execute a query with to know if current user has new data to view:
			$unread_posts_count = $DB->get_var( $unread_posts_SQL->get(), 0, NULL, 'Get a count of the unread topics for current user' );

			if( $unread_posts_count > 0 )
			{	// If at least one new unread topic exists
				$btn_class = 'btn-warning';
				$btn_title = T_('New Topics').' <span class="badge">'.$unread_posts_count.'</span>';
			}
			else
			{	// Current user already have read all topics
				$btn_class = 'btn-info';
				$btn_title = T_('Recent Topics');
			}
		}

		// Print out the button:
		echo '<a href="'.$Blog->get( 'recentpostsurl' ).'" class="btn '.$btn_class.' pull-right btn_recent_topics">'.$btn_title.'</a>';
	}
}

?>