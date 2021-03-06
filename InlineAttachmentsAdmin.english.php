<?php
/**********************************************************************************
* InlineAttachmentsAdmin.english.php - English language file
***********************************************************************************
* This mod is licensed under the 2-clause BSD License, which can be found here:
*	http://opensource.org/licenses/BSD-2-Clause
***********************************************************************************
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
**********************************************************************************/
if (!defined('SMF')) 
	die('Hacking attempt...');

global $helptxt;

// Regular language strings:
$txt['ila_admin_settings'] = 'Inline Attachments';
$txt['ila_new_version'] = 'Post and PM Inline Attachments mod version %s is available for download!';
$txt['ila_no_update'] = 'Your install of Post and PM Inline Attachments is up to date!';
$txt['ila_completed_singular'] = '1 post with inline attachment tags have been updated!';
$txt['ila_completed_plural'] = '%d posts with inline attachment tags have been updated!';

$txt['ila_title'] = 'Post and PM Inline Attachments';
$txt['ila_insert_tag'] = 'Tag to use when inserting inline attachments:';
$txt['ila_attach_same_as_attachment'] = '&quot;attach&quot; bbcode same as &quot;attachment&quot;?';
$txt['ila_insert_format'] = 'Format to insert new attachment tags:';

$txt['ila_max_width'] = 'Restrict images to maximum width of:<div class="smalltext">NOTE: <strong>0</strong> = disabled</div>';
$txt['ila_max_height'] = 'Restrict images to maximum height of:<div class="smalltext">NOTE: <strong>0</strong> = disabled</div>';
$txt['ila_enable_responsive'] = 'Enable responsive CSS for inline attachments?';

$txt['ila_highslide'] = 'Enable Highslide effects for inline attachment?';
$txt['ila_one_based_numbering'] = 'Should first attachment should be numbered &quot;1&quot;?';
$txt['ila_one_based_numbering_ask'] = 'Do you want to adjust all inline attachment IDs so that they still work the same as before?  Press \"OK\" to do this upon saving.';
$txt['ila_allow_quoted_images'] = 'Allow quoted attachment images from another post?';
$txt['ila_duplicate'] = 'Remove attachment image under post after in-post use?';
$txt['ila_download_count'] = 'Download link and counter setting:';
/* 0 */ $txt['ila_download_count_n'] = 'Disabled';
/* 1 */ $txt['ila_download_count_f'] = 'Filename only';
/* 2 */ $txt['ila_download_count_fs'] = 'Filename and Size';
/* 3 */ $txt['ila_download_count_fsd'] = 'Filename, Size and Dimensions';
/* 4 */ $txt['ila_download_count_fsdc'] = 'Filename, Size, Dimensions and Count';
/* 5 */ $txt['ila_download_count_fsdc2'] = 'Filename, Size, Dimensions and Count (2 Lines)';
/* 6 */ $txt['ila_download_count_fsdc3'] = 'Filename, Size, Dimensions and Count (3 Lines)';
/* 7 */ $txt['ila_download_count_fsd2'] = 'Filename, Size and Dimensions (2 Lines)';
$txt['ila_transparent'] = 'Unapproved images shown as transparent: (%)<div class="smalltext">NOTE: <strong>0</strong> disables showing unapproved images</div>';

$txt['ila_embed_video_files'] = 'Embed supported video formats within the post?';
$txt['ila_video_default_width'] = 'Default width of video when width isn\'t specified:';
$txt['ila_video_default_height'] = 'Default height of video when height isn\'t specified:';
$txt['ila_video_show_download_link'] = 'Show download link for videos?';
$txt['ila_video_html5'] = 'Check to use HTML5 video tags to show video:';

$txt['ila_embed_svg_files'] = 'Embed SVG files within the post?';
$txt['ila_embed_pdf_files'] = 'Embed PDF files within the post?';
$txt['ila_embed_txt_files'] = 'Embed TXT files as part of the post?';
$txt['ila_disable_strip_html_in_txt'] = 'Keep HTML tags in TXT files?<div class="smalltext">NOTE: Allowing HTML can allow malicious code!</div>';

$txt['ila_turn_nosniff_off'] = 'Turns &quot;nosniff&quot; option off for IE 8+?';
$txt['ila_display_exif'] = 'Display EXIF information below image?';

// Help language strings:
$helptxt['ila_insert_tag'] = 'This option allows you to choose which inline attachment tag to use with the &quot;Insert Attachment&quot; link after each uploaded attachment.<br /><br />
	Your choices are:
	<blockquote class="bbc_standard_quote">
		<strong>attachment</strong> - Show attachment as full size image<br />
		<strong>attach</strong> - Shows the attachment as a thumbnail, expandable to full size.<br />
		<strong>attachthumb</strong> - Shows NON-EXPANDABLE thumbnail of the attachment.<br />
		<strong>attachmini</strong> - Shows the attachment as a thumbnail, expandable to full size.  Download count and filename omitted beneath (regardless of ILA settings).
		<strong>attachurl</strong> => Shows the attachment like you used an [b]url[/b] tag instead of this tag.
	</blockquote>
	The default inline attachment tag is <strong>attachment</strong>.';
$helptxt['ila_attach_same_as_attachment'] = 'When checked, this option changes the <strong>attachment</strong> tag so that it shows the attachment as a thumbnail, expandable to full size, like the <strong>attach</strong> tag does.<br /><br />The default setting (<strong>unchecked</strong>) is to display the attachment as full size.';
$helptxt['ila_highslide'] = 'When checked, this option uses one of the supported mods to display the image using <a href="http://www.highslide.com/">Highslide</a> effects.<br /><br />The following mods are supported:
	<blockquote class="bbc_standard_quote">
		<strong><a href="https://github.com/Spuds/SMF-HS4SMF">HS4SMF v0.8.1</a></strong> (required to be installed prior to ILA!)<br />
		<strong><a href="http://custom.simplemachines.org/mods/index.php?mod=1450">Highslide Image Viewer</a></strong><br />
		<strong><a href="http://custom.simplemachines.org/mods/index.php?mod=1605">JQLightBox</a></strong>
	</blockquote>';
$helptxt['ila_one_based_numbering'] = 'When checked, this option changes all inline attachments so that the first attachment is numbered <strong>1</strong> (one), as opposed to the default <strong>0</strong> (zero).<br /><br />Note that changing this option will cause the mod to alter all inline attachment tags throughout your forum so that this option will correctly display with the changed setting.';
$helptxt['ila_allow_quoted_images'] = 'When checked and without the <a href="https://tapatalk.com/download_SimpleMachines.php">Tapatalk</a> SMF plugin, you can quote images and have the inline attachment show up correctly.  Otherwise, the inline attachment is replaced with a placeholder text string indicating where the inline attachment was in the quoted post.<br /><br />With the <a href="https://tapatalk.com/download_SimpleMachines.php">Tapatalk</a> SMF plugin installed, this option is not available for use, as it breaks the Tapatalk app for some reason.  Future versions of this mod may resolve this issue.';
$helptxt['ila_duplicate'] = 'When checked, this option removes the attachment from the attachment list after the post.<br /><br />Default is <strong>checked</strong>.';
$helptxt['ila_download_count'] = 'This option controls what is displayed beneath the inline attachment.  The following options are present:
	<blockquote class="bbc_standard_quote">
		<strong>Disabled</strong> - No text is displayed beneath.<br />
		<strong>Filename Only</strong><br />
		<strong>Filename and Size</strong><br />
		<strong>Filename, Size, and Dimensions</strong><br />
		<strong>Filename, Size, Dimensions and Count</strong><br />
		<strong>Filename, Size, Dimensions and Count (2 lines)</strong><br />
		<strong>Filename, Size, Dimensions and Count (3 lines)</strong><br />
	</blockquote><br />
	With the <strong>Filename, Size, Dimensions and Count</strong> option, everything is display on one line, like this:
	<blockquote class="bbc_standard_quote">
		<img src="Themes/default/images/icons/clip.gif" alt="*" align="middle" border="0"></img>Desert.jpg (826.11 kB . 1024x768 - viewed 5 times) ::)
	</blockquote><br />
	With the 2-line option, download link is on the first line; Size, dimensions and download count are on the second line.  Example:
	<blockquote class="bbc_standard_quote">
		<img src="Themes/default/images/icons/clip.gif" alt="*" align="middle" border="0"></img>Desert.jpg<br />
		(826.11 kB . 1024x768 - viewed 3 times) ::)
	</blockquote><br />
	With the 3-line option, download link is on the first line; Size and dimensions are on the second line; Download count is on the third line.
	<blockquote class="bbc_standard_quote">
		<img src="Themes/default/images/icons/clip.gif" alt="*" align="middle" border="0"></img>Desert.jpg<br />
		(826.11 kB . 1024x768)<br />
		(viewed 2 times)<br />
	</blockquote>';
$helptxt['ila_transparent'] = 'This option changes how transparent unapproved images are, as a percentage from <strong>0</strong> to <strong>100</strong>.  Setting this value to <strong>0</strong> disables this option.  Members who can\'t see unapproved images aren\'t effected by this option.<br /><br />Default value is <strong>40</strong>, as in <strong>40%</strong>.';
$helptxt['ila_embed_video_files'] = 'When checked, this option allows you to embed the following video files into a post:
	<blockquote class="bbc_standard_quote">
		<strong>AVI</strong> - played using <strong><a href="http://www.divx.com">DivX</a></strong>\'s player.  Assumes the DivX codec is installed on the OS being browsed.<br />
		<strong>WMV</strong> - played using Windows Media Player.<br />
		<strong>MP4</strong> - played using HTML5 tags (when &quot;Video HTML5&quot; is checked), with fallback HTML provided by <a href="http://www.jwplayer.com">JWPlayer</a>\'s Flash player.<br />
		<strong>WebM</strong> - played using HTML5 tags (when &quot;Video HTML5&quot; is checked), with fallback HTML provided by <a href="http://www.jwplayer.com">JWPlayer</a>\'s Flash player.<br />
		<strong>OGV</strong> - played using HTML5 tags (when &quot;Video HTML5&quot; is checked), with no fallback HTML provided.<br />
	</blockquote>';
$helptxt['ila_video_default_width'] = 'This option specifies the default display width of the inline video attachment.  It can be overriden by using the <strong>width</strong> parameters in the inline attachment tag usage, such as:<code class="bbc_code">[attachment id=x width=640]</code><br/>Default value is <strong>640</strong>.';
$helptxt['ila_video_default_height'] = 'This option specifies the default display height of the inline video attachment.  It can be overriden by using the <strong>height</strong> parameters in the inline attachment tag usage, such as:<code class="bbc_code">[attachment id=x height=640]</code><br/>Default value is <strong>400</strong>.';
$helptxt['ila_video_show_download_link'] = 'When checked, this option provides a download link to the user so that if the video doesn\'t play on the website, the user can download the video in order to play it locally.';
$helptxt['ila_video_html5'] = 'When checked, this option sends HTML5 tags in order to attempt to play <strong>MP4</strong>, <strong>ogv</strong>, and <strong>WebM</strong> file formats.  Regardless of this setting, fallback HTML code is provided using <a href="http://www.jwplayer.com">JWPlayer</a>\'s Flash player.<br /><br /><strong>RESTRICTIONS:</strong> In order to successfully play video files using HTML5 without using the fallback HTML, the poster is required to upload video files in all <strong>3</strong> formats.  If all formats are not provided and the video HTML tags cannot play the format for the browser, the fallback HTML code will be used to attempt to play the video file.  Note that the video file cannot reside on a <strong>localhost</strong>, <strong>127.0.0.1</strong>, or internal network (<strong>192.168.x.x</strong>) IP address.';
$helptxt['ila_embed_svg_files'] = 'When checked, this option allows you to embed SVG (Scalable Vector Graphics) images into your post, like a regular <strong>JPG</strong>, <strong>GIF</strong>, or <strong>PNG</strong> inline attachment.  Otherwise, inline SVG attachments cannot be displayed normally.<br /><br />Default is <strong>unchecked</strong>.';
$helptxt['ila_embed_txt_files'] = 'When checked, this option allows you to embed the contents of a TXT file into the post.<br /><br />Default is <strong>unchecked</strong>.';
$helptxt['ila_embed_pdf_files'] = 'When checked, this option allows you to embed an attached PDF file into the post using the Google Docs service.  Note that Google Docs cannot pull the attachment from <strong>localhost</strong> and <strong>127.0.0.1</strong> addresses, nor unresolvable IP addresses (most notably network IPs behind a router, for example: <strong>192.168.1.1</strong>).<br /><br />Default is <strong>unchecked</strong>.';
$helptxt['ila_turn_nosniff_off'] = 'Checking this option may help to resolve issues where the MIME type of an attachment doesn\'t match the actual type of the attachment and the users are using IE8+.<br /><br />
	<strong>What the &quot;nosniff&quot; option does in IE 8+:</strong>
	<blockquote class="bbc_standard_quote">
		<strong>MIME-handling changes</strong>. The following changes are made to the Internet Explorer 8 Multipurpose Internet Mail Extensions (MIME)-type detection algorithms:<br /><br />
		<strong>Restrict MIME-type detection</strong>. Internet Explorer 8 prevents the detection, or data sniffing, of files with image/* MIME content types into HTML or script. If a file contains script and the server declares that it is an image file, Internet Explorer 8 does not run the embedded script.<br /><br />
		<strong>Prevent MIME-type detection</strong>. Web applications now can prevent MIME-type detection. Sending the new X-Content-Type-Options: nosniff header prevents Internet Explorer from using MIME-type detection to change the server-declared content type.<br /><br />
		<strong>Force save</strong>. For Web applications that need to serve untrusted HTML files, Internet Explorer 8 contains a mechanism that forces users to save untrusted HTML files locally before opening to help prevent the untrusted content from compromising site security.<br /><br />
	</blockquote>
	Source: <a href="https://technet.microsoft.com/en-us/library/dd919181%28v=WS.10%29.aspx">Microsoft TechNet article</a>';
$helptxt['ila_display_exif'] = 'When used in conjunction with the <a href="http://custom.simplemachines.org/mods/index.php?mod=169">EXIF</a> mod, this option allows you to display any EXIF information that the mod can pull from the image.<br /><br />
	<strong>What EXIF information is:</strong>
	<blockquote class="bbc_standard_quote">
		EXIF is short for Exchangeable Image File, a format that is a standard for storing interchange information in digital photography image files using JPEG compression. Almost all new digital cameras use the EXIF annotation, storing information on the image such as shutter speed, exposure compensation, F number, what metering system was used, if a flash was used, ISO number, date and time the image was taken, whitebalance, auxiliary lenses that were used and resolution. Some images may even store GPS information so you can easily see where the images were taken!
	</blockquote>
	Source: <a href="www.exifdata.com">EXIFdata.com</a>';
$helptxt['ila_enable_responsive'] = 'Checking this option dynamically resizes the images so that they stay inside the post area of the forum, regardless of the size of the window.  Not having this option checked and not having a specific width/height defined will result in images that spill over the post area and result in the need to use the scrollbars to view the entire image.';

?>