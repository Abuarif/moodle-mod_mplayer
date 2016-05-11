<?php

/**    Copyright (C) 2009  Matt Bury
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// Default module labels
$string['mplayer'] = 'Media Player';
$string['pluginname'] = 'Media Player';
$string['modulename'] = 'Media Player';
$string['modulenameplural'] = 'Media Players';
// Titles for mod/mplayer/mod_form.php sections
$string['mplayername'] = 'Nom';
$string['mplayerintro'] = 'Description';
//---------------------------------------------------------------------------------------------
// Labels for mod/mplayer/mod_form.php
//// Source
$string['mplayersource'] = 'Source Media';
$string['mplayerfile'] = 'fichier Media';
$string['type'] = 'Type';
$string['streamer'] = 'Serveur de flux';

//// Playlists
$string['playlists'] = 'Playlist';
$string['playlist'] = 'Position';
$string['playlistsize'] = 'Taille (pixels)';
$string['item'] = 'Elément de départ';

//// Configxml
$string['config'] = 'Config XML';
$string['configxml'] = 'Fichier';

//// Appearance
$string['appearance'] = 'Apparence';
$string['notes'] = 'Notes';
$string['width'] = 'Largeur';
$string['height'] = 'Hauteur';
$string['skin'] = 'Skin';
$string['image'] = 'Poster';
$string['icons'] = 'Afficher les icones';
$string['controlbar'] = 'Barre de commandes';
$string['smoothing'] = 'Attenuation';
$string['backcolor'] = 'Couleur de fond';
$string['frontcolor'] = 'Couleur de premier plan';
$string['lightcolor'] = 'Couleur claire';
$string['screencolor'] = 'Couleur d\'écran';

//// Behaviour
$string['behaviour'] = 'Comportement';
$string['autostart'] = 'Exécution auto';
$string['fullscreen'] = 'Plein écran';
$string['volume'] = 'Volume';
$string['mute'] = 'Mute';
$string['mplayerstart'] = 'Début (position en secondes)';
$string['duration'] = 'Durée (secondes)';
$string['mplayerrepeat'] = 'Répétition';
$string['shuffle'] = 'Lecture aléatoire';
$string['bufferlength'] = 'Longueur de buffer (secondes)';
$string['quality'] = 'Qualité';
$string['displayclick'] = 'Click audio';
$string['resizing'] = 'Redimensionnement';
$string['stretching'] = 'Ajustement à l\'échelle';
$string['plugins'] = 'Plugins';

//// Metadata
$string['metadata'] = 'Métadonnées';
$string['author'] = 'Source';
$string['mplayerdate'] = 'Ajouté';
$string['title'] = 'Titre';
$string['description'] = 'Description du média';
$string['tags'] = 'Tags';

//// audiodescription 
$string['audiodescription'] = 'Description audio';
$string['audiodescriptionfile'] = 'Fichier MP3';
$string['audiodescriptionstate'] = 'Démarrage auto';
$string['audiodescriptionvolume'] = 'Volume';

//// captions 
$string['captions'] = 'Sous-titres';
$string['captionsback'] = 'Fond transparent';
$string['captionsfile'] = 'Fichier de sous-titres';
$string['captionsfontsize'] = 'Taille de police';
$string['captionsstate'] = 'Afficher les sous-titres';

//// HD
$string['hd'] = 'Video HD';
$string['hdbitrate'] = 'Débit';
$string['hdfile'] = 'Fichier Video HD';
$string['hdfullscreen'] = 'Passer en haute résolution plein écran';
$string['hdstate'] = 'HD par défaut';

//// infobox 
$string['infobox'] = 'Fenêtre d\'information';
$string['infoboxcolor'] = 'Couleur de fond';
$string['infoboxposition'] = 'Position';
$string['infoboxsize'] = 'Taille';

//// Livestream
$string['livestream'] = 'Lecture continue de flux';
$string['livestreamfile'] = 'Flux RTMP';
$string['livestreamimage'] = 'Image';
$string['livestreaminterval'] = 'Intervalle';
$string['livestreammessage'] = 'Message';
$string['livestreamstreamer'] = 'Serveur de flux';
$string['livestreamtags'] = 'Tags';

//// Logo Box
$string['logobox'] = 'Incrustation Logo';
$string['logoboxalign'] = 'Alignement';
$string['logoboxfile'] = 'Image';
$string['logoboxlink'] = 'Lien';
$string['logoboxmargin'] = 'Marge';
$string['logoboxposition'] = 'Position';

//// Metaviewer 
$string['metaviewer'] = 'Affichage des métadonnées';
$string['metaviewerposition'] = 'Position';
$string['metaviewersize'] = 'Taille';

//// Searchbar 
$string['searchbar'] = 'Barre de recherche';
$string['searchbarcolor'] = 'couleur';
$string['searchbarlabel'] = 'Label';
$string['searchbarposition'] = 'Position';
$string['searchbarscript'] = 'Script';

//// Snapshot 
$string['snapshot'] = 'Capture';
$string['snapshotbitmap'] = 'Bitmap';
$string['snapshotscript'] = 'Script';

//// Logo
$string['logo'] = 'Logo (seulement avec licence)';
$string['logofile'] = 'Image';
$string['logolink'] = 'Url';
$string['logohide'] = 'Masquage automatique';
$string['logoposition'] = 'Position';

//// Advanced
$string['advanced'] = 'Configuration Avancée';
$string['fpversion'] = 'Version de player flash';
$string['tracecall'] = 'Trace d\'appels (déboggage)';

//---------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------
// SWF embed alternative content error message for mod/swf/view.php
$string['embederror1'] = '<h3>Oups ! Il y a un problème.</h3>
<h4>Un Player Flash de version ';
$string['embederror2'] = ' ou plus récente est demandé.</h4>';
$string['nohtml5'] = '<h2>La vidéeo HTML5 n\'est pas supportée par votre navigateur.</h2>';
//---------------------------------------------------------------------------------------------
global $CFG;

$string['mplayer_advanced'] = 'Fonctionalités avancées';
$string['mplayer_advanced_help'] = '
<div class="indent">
  <p><strong>Flash Player Version</strong>: minimum Flash Player version required by JW FLV Player.</p>
  <p><strong>Trace Call</strong>: (for development and debugging purposes only)</p>
<p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_appearance'] = 'Apparence';
$string['mplayer_appearance_help'] = '
<div class="indent">
  <p><strong>Notes</strong>: A web page displayed under the video window. Supports rich text, links, images, plugins, Flash, etc.</p>
  <p><strong>Width</strong>: 0 - 9999 (% values are also possible)</p>
  <p><strong>Height</strong>: 0 - 9999</p>
  <p><strong>Skin</strong>: change the design of the video player interface</p>
  <p><strong>Poster Image</strong>: JPG, GIF, PNG or SWF to display before video playback starts (Behaviour &gt; Auto Start must be set to &quot;false&quot;)</p>
  <p><strong>Show Icons</strong>: show pause/play/streaming icons in centre of video window</p>
  <p><strong>Control Bar</strong>: </p>
  <ul>
    <li>none = no playback controls</li>
    <li>bottom = playback controls under the video window</li>
    <li>over  = playback controls on top of the video window</li>
  </ul>
  <p><strong>Control Bar Colors</strong>:</p>
  <ul>
    <li>Back Color - control bar background color</li>
    <li>Light Color - control bar icons and text color</li>
    <li>Front Color - control bar video position scrubber and volume control color</li>
    <li>Screen Color - video window background color</li>
  </ul>
  <p><strong>Smoothing</strong>: smooths out pixels in video image (leave as &quot;true&quot; unless users have very slow computers)</p>
  <p><strong>Quality</strong>: overall display quality of Flash Player plugin  (leave as &quot;best&quot; unless users have very slow computers)</p>
  <p><strong></strong>Colors are  hexidecimal values - e.g. black = 000000, white = FFFFFF, red = FF0000, green = 00FF00 and blue = 0000FF</p>
<p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_audiodescription'] = 'Description audio';
$string['mplayer_audiodescription_help'] = '
<div class="indent">
  <p><strong>MP3 File</strong>: Audio file that is synchronised with video playback.</p>
  <p><strong>Auto Start</strong>: start playing audio file as soon as web page has loaded</p>
  <p><strong>Volume</strong>: volume of audio playback</p>
<p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_behaviour'] = 'Comportement';
$string['mplayer_behaviour_help'] = '
<div class="indent">
  <p><strong>Auto Start</strong>: start playing video as soon as page loads</p>
  <p><strong>Full Screen</strong>: allow users to switch video to take up the whole screen</p>
  <p><strong>Stretching</strong>: </p>
  <ul>
    <li>none = no stretching</li>
    <li>uniform = largest possible while maintaining aspect ratio, no cropping</li>
    <li>exactfit = ignore aspect ratio</li>
    <li>fill = fill the player window, some cropping may occur</li>
  </ul>
  <p><strong>Volume</strong>: audio volume (users adjust it on control bar)</p>
  <p><strong>Mute</strong>: mute audio (users can turn it on on control bar)</p>
  <p><strong>Start</strong>: start position of video in seconds (This option works for HTTP pseudostreaming, RTMP streaming, MP3 and YouTube files. It does not work for regular videos.)</p>
  <p><strong>Buffer Length</strong>: number of seconds of video to pre-download before playing (set this to higher values for users with slow/unreliable/intermittent internet connections)</p>
  <p><strong>Plugins</strong>: add additional functions to the video player. See:   <a href="http://www.longtailvideo.com/addons/plugins">http://www.longtailvideo.com/addons/plugins</a></p>
<p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_captions'] = 'Sous-titres';
$string['mplayer_captions_help'] = '
<div class="indent">
  <p><strong>Transparent Background</strong>: If set to true, the plugin will render a semi-transparent background instead of a black outline.</p>
  <p><strong>Captions File</strong>: supports SMIL TimedText.xml and SubRip.srt*</p>
  <p><strong>Font Size</strong>: size of captions text</p>
  <p><strong>Show Captions</strong>: show captions by default (users can switch them on or off)</p>
  <p>* Subtitles displayed using the captions plugin are much clearer and easier to read than embedded captions and you have more control over their appearance. Here\'s a useful tool for extracting embedded subtitles from video files: <a href="http://zuggy.wz.cz/">http://zuggy.wz.cz/</a></p>
  <p>More details about this plugin:   <a href="http://developer.longtailvideo.com/trac/wiki/PluginsCaptions">http://developer.longtailvideo.com/trac/wiki/PluginsCaptions</a></p>
  <p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_configxml'] = 'Configuration XML';
$string['mplayer_configxml_help'] = '
<div class="indent">
  <p><strong>File</strong>: Configuration XML file that can be used to set all the parameters on this page.</p>
  <p>Particularly useful if you want to have one external file that determines the parameters of serveral Media Player instances allowing you to edit them all by editing a single file.</p>
  <p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_hd'] = 'Haute Définition';
$string['mplayer_hd_help'] = '
<div class="indent">
  <p><strong>Bitrate</strong>: This only needs to be set for RTMP streaming to enable automated bandwidth switching</p>
  <p><strong>HD Video File</strong>: alternative HD video file</p>
  <p><strong>Switch to HD on Full Screen</strong>: when user clicks on full screen button, stream switches to HD version</p>
  <p><strong>Default HD</strong>: play HD video by default</p>
  <p>With progressive download, video will restart when switching between HD and normal streams.</p>
  <p>For more information see:   <a href="http://developer.longtailvideo.com/trac/wiki/PluginsHd">http://developer.longtailvideo.com/trac/wiki/PluginsHd</a></p>
<p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_infobox'] = 'Boîte d\'information';
$string['mplayer_infobox_help'] = '
<div class="indent">
  <p><strong>Background Color</strong>: hexidecimal number e.g. black=000000, white=FFFFFF, red=FF0000, etc.</p>
  <p><strong>Position</strong>:</p>
  <ul>
    <li>none = no Infobox</li>
    <li>bottom = under the video window</li>
    <li>over = in the video window, is hidden when video plays</li>
    <li>top = above the video window</li>
  </ul>
  <p><strong>Size</strong>: 0 - 999</p>
  <p>For more information see:   <a href="http://developer.longtailvideo.com/trac/wiki/PluginsInfobox">http://developer.longtailvideo.com/trac/wiki/PluginsInfobox</a></p>
<p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_livestream'] = 'Distribution de flux continue';
$string['mplayer_livestream_help'] = '
<div class="indent">
  <p><strong>RTMP Stream</strong>: name of RTMP stream to check and load</p>
  <p><strong>Image</strong>: image to show user when stream ends</p>
  <p><strong>Interval</strong>: interval in seconds to check for RTMP stream</p>
  <p><strong>Message</strong>: shown to user while plugin checks for RTMP stream</p>
  <p><strong>Streamer</strong>: RTMP server to pull stream from</p>
  <p><strong>Tags</strong>: (advanced only)</p>
  <p>For more information see:   <a href="http://developer.longtailvideo.com/trac/wiki/PluginsLivestream">http://developer.longtailvideo.com/trac/wiki/PluginsLivestream</a></p>
<p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_logo'] = 'Logo';
$string['mplayer_logo_help'] = '
<div class="indent">
  <p><strong>Image:</strong> JPG, GIF, PNG or SWF logo to display</p>
  <p><strong>Link:</strong> opens a web page (new window)</p>
  <p><strong>Auto Hide</strong>: logo fades out when there is no mouse activity</p>
  <p><strong>Position</strong>:</p>
  <ul>
    <li>bottom-left</li>
    <li>bottom-right</li>
    <li>top-left</li>
    <li>top-right</li>
  </ul>
  <p><strong>Please note:</strong> Logo &amp; logo link only function in licensed versions of the JW Player. See Logo Box for unlicenced players.</p>
  <p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_logobox'] = 'Incrustation de logo';
$string['mplayer_logobox_help'] = '
<div class="indent">
  <p><strong>Align</strong>: alignment of logo</p>
  <p><strong>Image</strong>: JPG, GIF, PNG or SWF logo to display</p>
  <p><strong>Link</strong>: URL to open (new window) when user clicks on logo</p>
  <p><strong>Margin</strong>: area/border around logo</p>
  <p><strong>Position</strong>: when set to &quot;over&quot;, the box background is hidden</p>
  <p>For more information see:   <a href="http://developer.longtailvideo.com/trac/wiki/PluginsLogobox">http://developer.longtailvideo.com/trac/wiki/PluginsLogobox</a></p>
<p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_metadata'] = 'Metadonnées';
$string['mplayer_metadata_help'] = '
<div class="indent">
  <p><strong>Source</strong>: Author or creator of the video (automatically inserts current user\'s name)</p>
<p><strong>Added</strong>: Date video was added to Moodle (automatically inserts today\'s date)</p>
  <p><strong>Title</strong>: Title of video</p>
  <p><strong>Media Description</strong>: Short description of video (255 characters)</p>
  <p><strong>Tags</strong>:   keywords associated with the media file (separated by commas)</p>
  <p>To display metadata to users, see Infobox.</p>
  <p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_metaviewer'] = 'Visualisateur de métadonnées';
$string['mplayer_metaviewer_help'] = '
<div class="indent">
  <p><strong>Position</strong>: </p>
  <ul>
    <li>none = no metaviewer</li>
    <li>over = on top of video window</li>
    <li>left</li>
    <li>right</li>
    <li>top</li>
    <li>bottom</li>
  </ul>
  <p><strong>Size</strong>: 0 - 999</p>
  <p>NB: Useful for debugging or examining video file properties but not much else.</p>
<p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_playlist'] = 'Playlist';
$string['mplayer_playlist_help'] = '
<div class="indent">
  <p><strong>Position</strong>: </p>
  <ul>
    <li>none = no playlist</li>
    <li>bottom = under the video window</li>
    <li>right = to the right of the video window</li>
    <li>over = playlist covers the screen, disappears when user plays video</li>
  </ul>
  <p><strong>Size</strong>: 0 - 9999 pixels</p>
  <p><strong>Start Item</strong>: 0 - 99</p>
  <p><strong>Repeat</strong>: </p>
  <ul>
    <li>none = don\'t repeat</li>
    <li>list = play entire playlist once</li>
    <li>always = repeat entire playlist</li>
    <li>single = repeat selected item on playlist</li>
  </ul>
  <p><strong>Shuffle</strong>: play playlist items in random order</p>
  <p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_searchbar'] = 'Barre de recherche';
$string['mplayer_searchbar_help'] = '
<div class="indent">
  <p><strong>Color</strong>: color of search button (hexidecimal number)</p>
  <p><strong>Label</strong>: text on search button</p>
  <p><strong>Position</strong>:</p>
  <ul>
    <li>none = no search bar</li>
    <li>top = above video window</li>
    <li>bottom = under video window</li>
  </ul>
  <p><strong>Script</strong>: default is YouTube.com API. Custom search scripts can also be used. Contact your IT support for more details.</p>
  <p>NB: Requires playlist to display results. If no playlist parameters are set, it creates a default playlist.</p>
  <p>For more information see:   <a href="http://developer.longtailvideo.com/trac/wiki/PluginsSearchbar">http://developer.longtailvideo.com/trac/wiki/PluginsSearchbar</a></p>
<p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_snapshot'] = 'Capture';
$string['mplayer_snapshot_help'] = '
<div class="indent">
  <p><strong>WARNING! Experimental plugin which is not secure. This should not be deployed on a publicly accessible server.</strong></p>
  <p><strong>Bitmap</strong>: either sends bitmap image to server (implemented) or sends position of video frame to server for server-side snapshot (not implemented)</p>
  <p><strong>Script</strong>: script to receive and write snapshots on server</p>
  <p>For more information see:   <a href="http://developer.longtailvideo.com/trac/wiki/PluginsSnapshot">http://developer.longtailvideo.com/trac/wiki/PluginsSnapshot</a></p>
  <p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';

$string['mplayer_source'] = 'Source';
$string['mplayer_source_help'] = '
<div class="indent">
  <p><strong>Note:</strong> If Sound, Image or Video are selected, the player will automatically look for the video file in the Moodle course files directory. Use &quot;Choose or upload a file...&quot;.</p>
  <p><strong>Media File:</strong> The source or location of the media file to be played. </p>
  <ul>
    <li>Click on the &quot;Choose or upload a file...&quot; button to play videos from the Moodle course files directory. </li>
    <li>Video file types can be an FLV, F4V, MOV, MP4 or any file type supported by Flash Player. </li>
    <li>If the video file is on a different domain to your Moodle, there must be a crossdomain.xml policy file on that domain. i.e. If your site URL is &quot;http://mymoodle.com/&quot;, and the video file URL is &quot;http://someotherserver.com/videos/sample_video.flv&quot;, then there must be a crossdomain.xml file at &quot;http://someotherserver.com/crossdomain.xml&quot;. Some video hosting sites such as YouTube.com already have a &quot;catchall&quot; crossdomain.xml policy file installed, allowing you to consume media from them without any configuration being necessary. For further details, see: <a href="http://kb2.adobe.com/cps/142/tn_14213.html">http://kb2.adobe.com/cps/142/tn_14213.html</a></li>
    <li>You can also link to an XML playlist here. For more information about playlists, see:   <a href="http://code.google.com/p/moodle-flv-player/wiki/UsingXMLPlaylists">http://code.google.com/p/moodle-flv-player/wiki/UsingXMLPlaylists</a></li>
  </ul>
  <p><strong>Type:</strong> The type of media and type of delivery to be used for the Video URL provided. The settings are:</p>
  <ul>
    <li><strong>default</strong> - a URL link to a video file available over the Internet. Must start with http://...</li>
    <li><strong>Sound</strong> - a link to an MP3 or AAC file in the Moodle course files directory</li>
    <li><strong>Image</strong> - a link to an image file in the Moodle course files directory</li>
    <li><strong>Video</strong> - a link to a video file in the Moodle course files directory</li>
    <li><strong>YouTube</strong> - a URL link to a video file hosted on YouTube</li>
    <li><strong>Camera</strong> -  (advanced) accesses the user\'s web camera if present and turned on</li>
    <li><strong>HTTP Streaming</strong> - (advanced) consume media streams from an HTTP media server</li>
    <li><strong>Lighttpd Streaming</strong> - (advanced) consume media streams from a Lighttpd media server</li>
    <li><strong>RTMP Streaming</strong> - (advanced) consume media streams from an RTMP media server such Red5, Flash Media Server or Wowza. Please note: Do not include file extensions when using RTMP, i.e. &quot;myvideofile&quot; not &quot;myvideofile.flv&quot;.</li>
  </ul>
  <p><strong>Streamer:</strong> (advanced) the gateway of the streaming server to be used (requires configuration by a developer). More than one streaming server configuration is possible.</p>
  <p>&nbsp;</p>
  <p>Activity Module Developed by Matt Bury - <a href="http://matbury.com/" target="_blank">http://matbury.com/</a></p>
<p>JW FLV Player Developed By Jeroen Wijering - <a href="http://www.longtailvideo.com/" target="_blank">http://www.longtailvideo.com/</a></p>
<p align="center"><a href="help.php?module=swf&amp;file=index.html">Help Files Index</a></p>
</div>
';