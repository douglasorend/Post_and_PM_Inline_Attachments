<?php
/*******************************************************************************
* Custom View of Attachments © 2010-2013, Bugo								   *
********************************************************************************
* Subs-CustomView.php														   *
********************************************************************************
* License http://creativecommons.org/licenses/by-nc-nd/3.0/deed.ru CC BY-NC-ND *
* Support and updates for this software can be found at	http://dragomano.ru    *
*******************************************************************************/

if (!defined('SMF'))
	die('Hacking attempt...');
	
function custom_view_attachments(&$message)
{
	global $txt, $modSettings, $context, $settings, $smcFunc, $scripturl;
	
	loadLanguage('CustomView');
	
	if (!empty($modSettings['custom_view_attachments']))
	{
		echo '
								<div class="attachments smalltext">';
		
		$last_approved_state = 1;
		$count = 0;
		
		foreach ($message['attachment'] as $attachment)
		{
			if (!isset($context['ila_dont_show_attach_below']) || !array_key_exists($attachment['id'], $context['ila_dont_show_attach_below']))
			{
				// Show a special box for unapproved attachments...
				if ($attachment['is_approved'] != $last_approved_state)
				{
					$last_approved_state = 0;
					
					echo '
									<fieldset>
										<legend>', $txt['attach_awaiting_approve'];

					if ($context['can_approve'])
						echo '
											&nbsp;[<a href="', $scripturl, '?action=attachapprove;sa=all;mid=', $message['id'], ';', $context['session_var'], '=', $context['session_id'], '">', $txt['approve_all'], '</a>]';

					echo '
										</legend>';
				}
				
				echo '
										<div class="floatleft">';
			
				if ($attachment['is_image'])
				{
					if ($attachment['thumbnail']['has_thumb'])
					{
							
						// Highslide 4 SMF Installed?
						if (!empty($modSettings['hs4smf_enabled']) && !empty($modSettings['hs4smf_enableonattachments']) && function_exists('hs4smf_get_slidegroup'))
						{
							$settings['hs4smf_img_count'] = (isset($settings['hs4smf_img_count'])) ? $settings['hs4smf_img_count'] + 1 : 1;
							$slidegroup = hs4smf_get_slidegroup($message['id']);
							if (!isset($settings['hs4smf_slideshow']) && $settings['hs4smf_img_count'] > 1) $settings['hs4smf_slideshow'] = 1; 
							echo '
											<a href="', $attachment['href'], ';image" id="link_', $attachment['id'], '" class="highslide" onclick="return hs.expand(this, ' . $slidegroup . ')"><img src="', $attachment['thumbnail']['href'], '" alt="', $attachment['name'], '" id="thumb_', $attachment['id'], '"', ($modSettings['custom_view_attachments'] != 0) ? ' title="' . $attachment['size'] . ', ' . $attachment['real_width'] . 'x' . $attachment['real_height'] . ' (' . $txt['custom_view_attachments_views'] . $attachment['downloads'] . ')' . '"' : '',' /></a><br />';
						}
						// Highslide Image Viewer Installed?
						elseif (function_exists('highslide_images'))
							echo '
											<a href="', $attachment['href'], ';image" id="link_', $attachment['id'], '" class="highslide" rel="highslide"><img src="', $attachment['thumbnail']['href'], '" alt="', $attachment['name'], '" id="thumb_', $attachment['id'], '"', ($modSettings['custom_view_attachments'] != 0) ? ' title="' . $attachment['size'] . ', ' . $attachment['real_width'] . 'x' . $attachment['real_height'] . ' (' . $txt['custom_view_attachments_views'] . $attachment['downloads'] . ')' . '"' : '',' /></a><br /><span class="highslide-heading">', $context['subject'], '</span>';
						// jQLightbox
						elseif (!empty($modSettings['enable_jqlightbox_mod']) && strpos($context['html_headers'], 'jquery.prettyPhoto.css'))
							echo '
											<a href="', $attachment['href'], ';image" id="link_', $attachment['id'], '" rel="lightbox[gallery]"><img src="', $attachment['thumbnail']['href'], '" alt="', $attachment['name'], '" id="thumb_', $attachment['id'], '"', ($modSettings['custom_view_attachments'] != 0) ? ' title="' . $attachment['size'] . ', ' . $attachment['real_width'] . 'x' . $attachment['real_height'] . ' (' . $txt['custom_view_attachments_views'] . $attachment['downloads'] . ')' . '"' : '','  /></a><br />';
						// Simple Mode
						else
							echo '
											<a href="', $attachment['href'], ';image" id="link_', $attachment['id'], '" onclick="', $attachment['thumbnail']['javascript'], '"><img src="', $attachment['thumbnail']['href'], '" alt="', $attachment['name'], '" id="thumb_', $attachment['id'], '"',($modSettings['custom_view_attachments'] != 0) ? ' title="' . ($modSettings['custom_view_attachments'] == 2 ? $attachment['name'] . ' - ' : '') . $attachment['size'] . ', ' . $attachment['real_width'] . 'x' . $attachment['real_height'] . ' (' . $txt['custom_view_attachments_views'] . $attachment['downloads'] . ')' . '"' : '',' /></a><br />';
					}
					else
						echo '
										
											<img src="' . $attachment['href'] . ';image" alt="" width="' . $attachment['width'] . '" height="' . $attachment['height'] . '" ', (!empty($modSettings['enable_jqlightbox_mod']) && strpos($context['html_headers'], 'jquery.prettyPhoto.css')) ? 'rel="lightbox[gallery]" ' : '', '/><br />';
					
					if ($modSettings['custom_view_attachments'] != 2)
					{
						$title = $attachment['name'];
						$name = $attachment['width'] < $modSettings['attachmentThumbWidth'] ? $smcFunc['substr']($attachment['name'], 0, round($attachment['width']/7, 0)) : $smcFunc['substr']($attachment['name'], 0, round($modSettings['attachmentThumbWidth']/7, 0));
						echo '
											<img src="' . $settings['images_url'] . '/icons/clip.gif" align="middle" alt="*" />&nbsp;<a href="' . $attachment['href'] . '" title="' . $title . '">' . $name . '</a> ';
					}
				}
				else
					echo '
											
											<img src="' . $settings['images_url'] . '/icons/clip.gif" align="middle" alt="*" />&nbsp;<a href="' . $attachment['href'] . '">' . $attachment['name'] . '</a><br />';

				if (!$attachment['is_approved'])
					echo '
											[<a href="', $scripturl, '?action=attachapprove;sa=approve;aid=', $attachment['id'], ';', $context['session_var'], '=', $context['session_id'], '">', $txt['approve'], '</a>]&nbsp;|&nbsp;[<a href="', $scripturl, '?action=attachapprove;sa=reject;aid=', $attachment['id'], ';', $context['session_var'], '=', $context['session_id'], '">', $txt['delete'], '</a>] ';
					

				if (!$attachment['is_image'])
					echo '(' . $attachment['size'] . ' ~ ' . (!$attachment['is_image'] ? $txt['custom_view_attachments_downloads'] : $txt['custom_view_attachments_views']) . $attachment['downloads'] . ')';
				
				echo '
										</div>';
				
				// Next attachment line
				if (!empty($modSettings['custom_view_count']))
					if (++$count % $modSettings['custom_view_count'] === 0)
						echo '
										<div class="clear" style="padding-top: 2px"></div>';
			}
		}

		// If we had unapproved attachments clean up.
		if ($last_approved_state == 0)
			echo '
									</fieldset>';

		echo '
								</div>';
	}
}

function custom_view_buffer(&$buffer)
{
	global $context, $modSettings;
	
	$replacements = array();
	
	if (!empty($context['subject']))
	{
		$search = '<div class="highslide-heading">' . $context['subject'] . '</div>';
		$replace = '<!-- Fix by Custom View of Attachments -->';
		$replacements[$search] = $replace;
	}
	
	$new_buffer = str_replace(array_keys($replacements), array_values($replacements), $buffer);
	
	$search = '~<div id="msg_(\d+)_footer" class="attachments smalltext">(.*)<\/div>~siU';
	$replace = '<!-- Cut by Custom View of Attachments --><div>';
	
	$new_buffer = preg_replace($search, $replace, $new_buffer);
		
	return ((isset($_REQUEST['xml']) || empty($context['current_topic']) || empty($modSettings['custom_view_attachments'])) ? $buffer : $new_buffer);
}

function custom_view_settings(&$config_vars)
{
	global $txt, $modSettings;
	
	loadLanguage('CustomView');
	
	if (!isset($modSettings['custom_view_count'])) updateSettings(array('custom_view_count' => 4));
	
	if (isset($config_vars[0])) $config_vars[] = array('title', 'custom_view_title');
	$config_vars[] = array('select', 'custom_view_attachments', explode('|', $txt['custom_view_attachments_type']));
	if (!empty($modSettings['custom_view_attachments'])) $config_vars[] = array('int', 'custom_view_count');
}

?>