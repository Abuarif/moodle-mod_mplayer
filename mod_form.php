<?php

/**
* Creates instance of Media Player activity module
* Adapted from mod_form.php template by Jamie Pratt
*
* By Matt Bury - http://matbury.com/ - matbury@gmail.com
* @version $Id: index.php,v 0.2 2009/02/21 matbury Exp $
* @licence http://www.gnu.org/copyleft/gpl.html GNU Public Licence
*
* DB Table name (mdl_)mplayer
* 
*/
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
require_once ('moodleform_mod.php');
class mod_mplayer_mod_form extends moodleform_mod {

    function definition() {
        global $CFG;
        global $COURSE;
        global $USER;

        $mform =& $this->_form;

        $mplayer_url_array = array('size'=>'80');
        $mplayer_int_array = array('size'=>'6');

        //-------------------------------------------------------------------------------

        // Adding the "general" fieldset, where all the common settings are shown
        $mform->addElement('header', 'general', get_string('general', 'form'));

        // Adding the standard "name" field
        $mform->addElement('text', 'name', get_string('mplayername', 'mplayer'), $mplayer_url_array);
        $mform->setType('name', PARAM_TEXT);
        $mform->addRule('name', null, 'required', null, 'client');

        // Introduction.
        $this->add_intro_editor(false, get_string('mplayerintro', 'mplayer'));

        //--------------------------------------- MEDIA SOURCE ----------------------------------------

        $mform->addElement('header', 'mplayersource', get_string('mplayersource', 'mplayer'));
        $mform->addHelpButton('mplayersource', 'mplayer_source', 'mplayer');

        // mplayerfile
        $mform->addElement('filepicker', 'mplayerfile', get_string('mplayerfile', 'mplayer'), array('courseid'=>$COURSE->id));
        $mform->addRule('mplayerfile', get_string('required'), 'required', null, 'client');

        // type
        $mform->addElement('select', 'type', get_string('type', 'mplayer'), mplayer_list_type());
        $mform->setDefault('type', 'video');
        $mform->setAdvanced('type');

        // streamer
        $mform->addElement('select', 'streamer', get_string('streamer', 'mplayer'), mplayer_list_streamer());
        $mform->setDefault('streamer', '');
        $mform->setAdvanced('streamer');

        //--------------------------------------- playlists ---------------------------------------

        $mform->addElement('header', 'playlists', get_string('playlists', 'mplayer'));
        $mform->addHelpButton('playlists', 'mplayer_playlist', 'mplayer');

        // playlist
        $mform->addElement('select', 'playlist', get_string('playlist', 'mplayer'), mplayer_list_playlistposition());
        $mform->setDefault('playlist', 'none');
        $mform->setAdvanced('playlist');

        // playlistsize
        $mform->addElement('text', 'playlistsize', get_string('playlistsize', 'mplayer'), $mplayer_int_array);
        $mform->setType('playlistsize', PARAM_INT);
        $mform->setDefault('playlistsize', '180');
        $mform->setAdvanced('playlistsize');

        // item
        $mform->addElement('text', 'item', get_string('item', 'mplayer'), $mplayer_int_array);
        $mform->setType('item', PARAM_TEXT);
        $mform->setDefault('item', '');
        $mform->setAdvanced('item');

        // repeat
        $mform->addElement('select', 'mplayerrepeat', get_string('mplayerrepeat', 'mplayer'), mplayer_list_repeat());
        $mform->setDefault('mplayerrepeat', 'none');
        $mform->setAdvanced('mplayerrepeat');

        // shuffle
        $mform->addElement('select', 'shuffle', get_string('shuffle', 'mplayer'), mplayer_list_truefalse());
        $mform->setDefault('shuffle', 'false');
        $mform->setAdvanced('shuffle');

        //--------------------------------------- configxml ---------------------------------------

        $mform->addElement('header', 'config', get_string('config', 'mplayer'));
        $mform->addHelpButton('config', 'mplayer_configxml', 'mplayer');

        // configxml
        $mform->addElement('filepicker', 'configxml', get_string('configxml', 'mplayer'), array('courseid' => $COURSE->id));
        $mform->setAdvanced('configxml');

        //--------------------------------------- APPEARANCE ---------------------------------------

        $mform->addElement('header', 'appearance', get_string('appearance', 'mplayer'));
        $mform->addHelpButton('appearance', 'mplayer_appearance', 'mplayer');

        //notes
        $mform->addElement('editor', 'notes', get_string('notes', 'mplayer'), array('canUseHtmlEditor'=>'detect','rows'=>10, 'cols'=>65, 'width'=>0,'height'=>0));
        $mform->setType('notes', PARAM_RAW);

        // width
        $mform->addElement('text', 'width', get_string('width', 'mplayer'), $mplayer_int_array);
        $mform->setType('width', PARAM_TEXT);
        $mform->addRule('width', get_string('required'), 'required', null, 'client');
        if (empty($CFG->mplayer_default_width)) {
            $CFG->mplayer_default_width = '100%';
        }
        $mform->setDefault('width', $CFG->mplayer_default_width);

        // height
        $mform->addElement('text', 'height', get_string('height', 'mplayer'), $mplayer_int_array);
        $mform->setType('height', PARAM_TEXT);
        $mform->addRule('height', get_string('required'), 'required', null, 'client');
        if (empty($CFG->mplayer_default_height)) {
            $CFG->mplayer_default_height = '570';
        }
        $mform->setDefault('height', $CFG->mplayer_default_height);

        // skin
        $mform->addElement('select', 'skin', get_string('skin', 'mplayer'), mplayer_list_skins());
        if (!isset($CFG->mplayer_default_skin)) {
            $CFG->mplayer_default_skin = '';
        }
        $mform->setDefault('skin', $CFG->mplayer_default_skin);

        // image
        $mform->addElement('filepicker', 'image', get_string('image', 'mplayer'), array('courseid' => $COURSE->id));

        // icons
        $mform->addElement('select', 'icons', get_string('icons', 'mplayer'), mplayer_list_truefalse());
        if (empty($CFG->mplayer_default_icons)) {
            $CFG->mplayer_default_icons = 'true';
        }
        $mform->setDefault('icons', $CFG->mplayer_default_icons);
        $mform->setAdvanced('icons');

        // controlbar
        $mform->addElement('select', 'controlbar', get_string('controlbar', 'mplayer'), mplayer_list_controlbar());
        if (empty($CFG->mplayer_default_controlbar)) {
            $CFG->mplayer_default_controlbar = 'bottom';
        }
        $mform->setDefault('controlbar', $CFG->mplayer_default_controlbar);
        $mform->setAdvanced('controlbar');

        // backcolor
        $mform->addElement('text', 'backcolor', get_string('backcolor', 'mplayer'), $mplayer_int_array);
        $mform->setType('backcolor', PARAM_TEXT);
        if (!isset($CFG->mplayer_default_backcolor)) {
            $CFG->mplayer_default_backcolor = '';
        }
        $mform->setDefault('backcolor', $CFG->mplayer_default_backcolor);
        $mform->setAdvanced('backcolor');

        // frontcolor
        $mform->addElement('text', 'frontcolor', get_string('frontcolor', 'mplayer'), $mplayer_int_array);
        $mform->setType('frontcolor', PARAM_TEXT);
        if (!isset($CFG->mplayer_default_frontcolor)) {
            $CFG->mplayer_default_frontcolor = '';
        }
        $mform->setDefault('frontcolor', $CFG->mplayer_default_frontcolor);
        $mform->setAdvanced('frontcolor');

        // lightcolor
        $mform->addElement('text', 'lightcolor', get_string('lightcolor', 'mplayer'), $mplayer_int_array);
        $mform->setType('lightcolor', PARAM_TEXT);
        if (!isset($CFG->mplayer_default_lightcolor)) {
            $CFG->mplayer_default_lightcolor = '';
        }
        $mform->setDefault('lightcolor', $CFG->mplayer_default_lightcolor);
        $mform->setAdvanced('lightcolor');

        // screencolor
        $mform->addElement('text', 'screencolor', get_string('screencolor', 'mplayer'), $mplayer_int_array);
        $mform->setType('screencolor', PARAM_TEXT);
        if (!isset($CFG->mplayer_default_screencolor)) {
            $CFG->mplayer_default_screencolor = '';
        }
        $mform->setDefault('screencolor', $CFG->mplayer_default_screencolor);
        $mform->setAdvanced('screencolor');

        // smoothing
        $mform->addElement('select', 'smoothing', get_string('smoothing', 'mplayer'), mplayer_list_truefalse());
        $mform->setDefault('smoothing', 'true');
        $mform->setAdvanced('smoothing');

        // quality
        $mform->addElement('select', 'quality', get_string('quality', 'mplayer'), mplayer_list_quality());
        $mform->setDefault('quality', 'best');
        $mform->setAdvanced('quality');

        //--------------------------------------- BEHAVIOUR ---------------------------------------

        $mform->addElement('header', 'behaviour', get_string('behaviour', 'mplayer'));
        $mform->addHelpButton('behaviour', 'mplayer_behaviour', 'mplayer');

        // autostart 
        $mform->addElement('select', 'autostart', get_string('autostart', 'mplayer'), mplayer_list_truefalse());
        if (empty($CFG->mplayer_default_autostart)) {
            $CFG->mplayer_default_autostart = 'false';
        }
        $mform->setDefault('autostart', $CFG->mplayer_default_autostart);

        // fullscreen 
        $mform->addElement('select', 'fullscreen', get_string('fullscreen', 'mplayer'), mplayer_list_truefalse());
        if (empty($CFG->mplayer_default_fullscreen)) {
            $CFG->mplayer_default_fullscreen = 'true';
        }
        $mform->setDefault('fullscreen', $CFG->mplayer_default_fullscreen);

        // stretching 
        $mform->addElement('select', 'stretching', get_string('stretching', 'mplayer'), mplayer_list_stretching());
        if (empty($CFG->mplayer_default_stretching)) {
            $CFG->mplayer_default_stretching = 'uniform';
        }
        $mform->setDefault('stretching', $CFG->mplayer_default_stretching);
        $mform->setAdvanced('stretching');

        // volume 
        $mform->addElement('select', 'volume', get_string('volume', 'mplayer'), mplayer_list_volume());
        if (empty($CFG->mplayer_default_volume)) {
            $CFG->mplayer_default_volume = '90';
        }
        $mform->setDefault('volume', $CFG->mplayer_default_volume);
        $mform->setAdvanced('volume');

        // mute 
        $mform->addElement('select', 'mute', get_string('mute', 'mplayer'), mplayer_list_truefalse());
        $mform->setDefault('mute', 'false');
        $mform->setAdvanced('mute');

        // mplayerstart 
        $mform->addElement('text', 'mplayerstart', get_string('mplayerstart', 'mplayer'), $mplayer_int_array);
        $mform->setType('mplayerstart', PARAM_INT);
        $mform->setDefault('mplayerstart', '0');
        $mform->setAdvanced('mplayerstart');

        // bufferlength 
        $mform->addElement('select', 'bufferlength', get_string('bufferlength', 'mplayer'), mplayer_list_bufferlength());
        $mform->setDefault('bufferlength', '1');
        $mform->setAdvanced('bufferlength');

        // resizing - deprecated
        //$mform->addElement('select', 'resizing', get_string('resizing', 'mplayer'), mplayer_list_truefalse());
        //$mform->setAdvanced('resizing');

        // plugins 
        $mform->addElement('text', 'plugins', get_string('plugins', 'mplayer'), $mplayer_url_array);
        $mform->setType('plugins', PARAM_TEXT);
        $mform->setDefault('plugins', '');
        $mform->setAdvanced('plugins');

        //--------------------------------------- metadata ---------------------------------------

        $mform->addElement('header', 'metadata', get_string('metadata', 'mplayer'));
        $mform->addHelpButton('metadata', 'mplayer_metadata', 'mplayer');

        // author
        $mform->addElement('text', 'author', get_string('author', 'mplayer'), $mplayer_url_array);
        $mform->setType('author', PARAM_TEXT);
        $mform->setDefault('author', fullname($USER));
        $mform->setAdvanced('author');

        // mplayerdate
        $mform->addElement('text', 'mplayerdate', get_string('mplayerdate', 'mplayer'), $mplayer_url_array);
        $mform->setType('mplayerdate', PARAM_TEXT);
        $mform->setDefault('mplayerdate', date('l jS \of F Y'));
        $mform->setAdvanced('mplayerdate');

        // title
        $mform->addElement('text', 'title', get_string('title', 'mplayer'), $mplayer_url_array);
        $mform->setType('title', PARAM_CLEANHTML);
        $mform->setAdvanced('title');

        // description
        $mform->addElement('text', 'description', get_string('description', 'mplayer'), $mplayer_url_array);
        $mform->setType('description', PARAM_CLEANHTML);
        $mform->setAdvanced('description');

        // tags
        $mform->addElement('text', 'tags', get_string('tags', 'mplayer'), $mplayer_url_array);
        $mform->setType('tags', PARAM_CLEANHTML);
        $mform->setAdvanced('tags');

        //--------------------------------------- audiodescription ---------------------------------------

        $mform->addElement('header', 'audiodescription', get_string('audiodescription', 'mplayer'));
        $mform->addHelpButton('audiodescription', 'mplayer_audiodescription', 'mplayer');

        // audiodescriptionfile
        $mform->addElement('filepicker', 'audiodescriptionfile', get_string('audiodescriptionfile', 'mplayer'), array('courseid'=>$COURSE->id));
        $mform->setAdvanced('audiodescriptionfile');

        // audiodescriptionstate
        $mform->addElement('select', 'audiodescriptionstate', get_string('audiodescriptionstate', 'mplayer'), mplayer_list_truefalse());
        $mform->setDefault('audiodescriptionstate', 'true');
        $mform->setAdvanced('audiodescriptionstate');

        // audiodescriptionvolume
        $mform->addElement('select', 'audiodescriptionvolume', get_string('audiodescriptionvolume', 'mplayer'), mplayer_list_volume());
        $mform->setDefault('audiodescriptionvolume', '90');
        $mform->setAdvanced('audiodescriptionvolume');

        //--------------------------------------- captions ---------------------------------------

        $mform->addElement('header', 'captions', get_string('captions', 'mplayer'));
        $mform->addHelpButton('captions', 'mplayer_captions', 'mplayer');

        // captionsback
        $mform->addElement('select', 'captionsback', get_string('captionsback', 'mplayer'), mplayer_list_truefalse());
        $mform->setDefault('captionsback', 'true');
        $mform->setAdvanced('captionsback');

        // captionsfile
        $mform->addElement('filepicker', 'captionsfile', get_string('captionsfile', 'mplayer'), array('courseid'=>$COURSE->id));
        $mform->setAdvanced('captionsfile');

        // captionsfontsize
        $mform->addElement('text', 'captionsfontsize', get_string('captionsfontsize', 'mplayer'), $mplayer_int_array);
        $mform->setType('captionsfontsize', PARAM_INT);
        $mform->setDefault('captionsfontsize', '14');
        $mform->setAdvanced('captionsfontsize');

        // captionsstate
        $mform->addElement('select', 'captionsstate', get_string('captionsstate', 'mplayer'), mplayer_list_truefalse());
        $mform->setDefault('captionsstate', 'true');
        $mform->setAdvanced('captionsstate');

        //--------------------------------------- HD ---------------------------------------

        $mform->addElement('header', 'hd', get_string('hd', 'mplayer'));
        $mform->addHelpButton('hd', 'mplayer_hd', 'mplayer');

        // hdbitrate 
        $mform->addElement('text', 'hdbitrate', get_string('hdbitrate', 'mplayer'), $mplayer_int_array);
        $mform->setType('hdbitrate', PARAM_INT);
        $mform->setDefault('hdbitrate', '1500');
        $mform->setAdvanced('hdbitrate');

        // hdfile 
        $mform->addElement('filepicker', 'hdfile', get_string('hdfile', 'mplayer'), array('courseid'=>$COURSE->id));
        $mform->setAdvanced('hdfile');

        // hdfullscreen 
        $mform->addElement('select', 'hdfullscreen', get_string('hdfullscreen', 'mplayer'), mplayer_list_truefalse());
        $mform->setDefault('hdfullscreen', 'true');
        $mform->setAdvanced('hdfullscreen');

        // hdstate 
        $mform->addElement('select', 'hdstate', get_string('hdstate', 'mplayer'), mplayer_list_truefalse());
        $mform->setDefault('hdstate', 'true');
        $mform->setAdvanced('hdstate');

        //--------------------------------------- infobox ---------------------------------------

        $mform->addElement('header', 'infobox', get_string('infobox', 'mplayer'));
        $mform->addHelpButton('infobox', 'mplayer_infobox', 'mplayer');

        // infoboxcolor 
        $mform->addElement('text', 'infoboxcolor', get_string('infoboxcolor', 'mplayer'), $mplayer_int_array);
        $mform->setType('infoboxcolor', PARAM_TEXT);
        $mform->setDefault('infoboxcolor', 'ffffff');
        $mform->setAdvanced('infoboxcolor');

        // infoboxposition
        $mform->addElement('select', 'infoboxposition', get_string('infoboxposition', 'mplayer'), mplayer_list_infoboxposition());
        $mform->setDefault('infoboxposition', 'none');
        $mform->setAdvanced('infoboxposition');

        // infoboxsize
        $mform->addElement('text', 'infoboxsize', get_string('infoboxsize', 'mplayer'), $mplayer_int_array);
        $mform->setType('infoboxsize', PARAM_INT);
        $mform->setDefault('infoboxsize', '85');
        $mform->setAdvanced('infoboxsize');

        //--------------------------------------- livestream ---------------------------------------

        $mform->addElement('header', 'livestream', get_string('livestream', 'mplayer'));
        $mform->addHelpButton('livestream', 'mplayer_livestream', 'mplayer');

        // livestreamfile
        $mform->addElement('filepicker', 'livestreamfile', get_string('livestreamfile', 'mplayer'), array('courseid'=>$COURSE->id));
        $mform->setAdvanced('livestreamfile');

        // livestreamimage 
        $mform->addElement('filepicker', 'livestreamimagefile', get_string('livestreamimage', 'mplayer'), array('courseid'=>$COURSE->id));
        $mform->setAdvanced('livestreamimagefile');

        // livestreaminterval
        $mform->addElement('text', 'livestreaminterval', get_string('livestreaminterval', 'mplayer'), $mplayer_int_array);
        $mform->setType('livestreaminterval', PARAM_INT);
        $mform->setDefault('livestreaminterval', '15');
        $mform->setAdvanced('livestreaminterval');

        // livestreammessage
        $mform->addElement('text', 'livestreammessage', get_string('livestreammessage', 'mplayer'), $mplayer_url_array);
        $mform->setType('livestreammessage', PARAM_CLEANHTML);
        $mform->setDefault('livestreammessage', 'Checking for livestream...');
        $mform->setAdvanced('livestreammessage');

        // livestreamstreamer
        $mform->addElement('select', 'livestreamstreamer', get_string('livestreamstreamer', 'mplayer'), mplayer_list_streamer());
        $mform->setDefault('livestreamstreamer', '');
        $mform->setAdvanced('livestreamstreamer');

        // livestreamtags
        $mform->addElement('text', 'livestreamtags', get_string('livestreamtags', 'mplayer'), $mplayer_url_array);
        $mform->setType('livestreamtags', PARAM_CLEANHTML);
        $mform->setAdvanced('livestreamtags');

        //--------------------------------------- logobox ---------------------------------------

        $mform->addElement('header', 'logobox', get_string('logobox', 'mplayer'));
        $mform->addHelpButton('logobox', 'mplayer_logobox', 'mplayer');

        // logoboxalign
        $mform->addElement('select', 'logoboxalign', get_string('logoboxalign', 'mplayer'), mplayer_list_logoboxalign());
        $mform->setDefault('logoboxalign', 'left');
        $mform->setAdvanced('logoboxalign');

        // logoboxfile 
        $mform->addElement('filepicker', 'logoboxfile', get_string('logoboxfile', 'mplayer'), array('courseid'=>$COURSE->id));
        $mform->setAdvanced('logoboxfile');

        // logoboxlink
        $mform->addElement('text', 'logoboxlink', get_string('logoboxlink', 'mplayer'), $mplayer_url_array);
        $mform->setType('logoboxlink', PARAM_URL);
        $mform->setAdvanced('logoboxlink');

        // logoboxmargin
        $mform->addElement('text', 'logoboxmargin', get_string('logoboxmargin', 'mplayer'), $mplayer_int_array);
        $mform->setType('logoboxmargin', PARAM_INT);
        $mform->setDefault('logoboxmargin', '15');
        $mform->setAdvanced('logoboxmargin');

        // logoboxposition
        $mform->addElement('select', 'logoboxposition', get_string('logoboxposition', 'mplayer'), mplayer_list_infoboxposition());
        $mform->setDefault('logoboxposition', 'top');
        $mform->setAdvanced('logoboxposition');

        //--------------------------------------- metaviewer ---------------------------------------

        $mform->addElement('header', 'metaviewer', get_string('metaviewer', 'mplayer'));
        $mform->addHelpButton('metaviewer', 'mplayer_metaviewer', 'mplayer');

        // metaviewerposition
        $mform->addElement('select', 'metaviewerposition', get_string('metaviewerposition', 'mplayer'), mplayer_list_metaviewerposition());
        $mform->setDefault('metaviewerposition', 'none');
        $mform->setAdvanced('metaviewerposition');

        // metaviewersize
        $mform->addElement('text', 'metaviewersize', get_string('metaviewersize', 'mplayer'), $mplayer_int_array);
        $mform->setType('metaviewersize', PARAM_INT);
        $mform->setDefault('metaviewersize', '100');
        $mform->setAdvanced('metaviewersize');

        //--------------------------------------- searchbar ---------------------------------------

        $mform->addElement('header', 'searchbar', get_string('searchbar', 'mplayer'));
        $mform->addHelpButton('searchbar', 'mplayer_searchbar', 'mplayer');
        $mform->setAdvanced('searchbar');

        // searchbarcolor 
        $mform->addElement('text', 'searchbarcolor', get_string('searchbarcolor', 'mplayer'), $mplayer_int_array);
        $mform->setType('searchbarcolor', PARAM_TEXT);
        $mform->setDefault('searchbarcolor', 'CC0000');
        $mform->setAdvanced('searchbarcolor');

        // searchbarlabel 
        $mform->addElement('text', 'searchbarlabel', get_string('searchbarlabel', 'mplayer'), $mplayer_url_array);
        $mform->setType('searchbarlabel', PARAM_TEXT);
        $mform->setDefault('searchbarlabel', 'Search');
        $mform->setAdvanced('searchbarlabel');

        // searchbarposition 
        $mform->addElement('select', 'searchbarposition', get_string('searchbarposition', 'mplayer'), mplayer_list_searchbarposition());
        $mform->setDefault('searchbarposition', '');
        $mform->setAdvanced('searchbarposition');

        // searchbarscript 
        $mform->addElement('select', 'searchbarscript', get_string('searchbarscript', 'mplayer'), mplayer_list_searchbarscript());
        $mform->setDefault('searchbarscript', '');
        $mform->setAdvanced('searchbarscript');

        //--------------------------------------- snapshot ---------------------------------------

        $mform->addElement('header', 'snapshot', get_string('snapshot', 'mplayer'));
        $mform->addHelpButton('snapshot', 'mplayer_snapshot', 'mplayer');

        // snapshotbitmap
        $mform->addElement('select', 'snapshotbitmap', get_string('snapshotbitmap', 'mplayer'), mplayer_list_truefalse());
        $mform->setDefault('snapshotbitmap', 'true');
        $mform->setAdvanced('snapshotbitmap');

        // snapshotscript
        $mform->addElement('select', 'snapshotscript', get_string('snapshotscript', 'mplayer'), mplayer_list_snapshotscript());
        $mform->setDefault('snapshotscript', '');
        $mform->setAdvanced('snapshotscript');

        //--------------------------------------- logo (licenced players only) ---------------------------------------

        $mform->addElement('header', 'logo', get_string('logo', 'mplayer'));
        $mform->addHelpButton('logo', 'mplayer_logo', 'mplayer');
        $mform->setAdvanced('logo');

        // logofile 
        $mform->addElement('filepicker', 'logofile', get_string('logofile', 'mplayer'), array('courseid'=>$COURSE->id));
        $mform->setAdvanced('logofile');

        // logolink 
        $mform->addElement('text', 'logolink', get_string('logolink', 'mplayer'), $mplayer_url_array);
        $mform->setType('logolink', PARAM_URL);
        $mform->setAdvanced('logolink');

        // logohide
        $mform->addElement('select', 'logohide', get_string('logohide', 'mplayer'), mplayer_list_truefalse());
        $mform->setDefault('logohide', 'true');
        $mform->setAdvanced('logohide');

        // logoposition
        $mform->addElement('select', 'logoposition', get_string('logoposition', 'mplayer'), mplayer_list_logoposition());
        $mform->setDefault('logoposition', 'bottom-left');
        $mform->setAdvanced('logoposition');

        //--------------------------------------- ADVANCED ---------------------------------------

        $mform->addElement('header', 'advanced', get_string('advanced', 'mplayer'));
        $mform->addHelpButton('advanced', 'mplayer_advanced', 'mplayer');
        $mform->setAdvanced('advanced');

        // fpversion
        $mform->addElement('text', 'fpversion', get_string('fpversion', 'mplayer'), array('size'=>'9'));
        $mform->setType('fpversion', PARAM_TEXT);
        $mform->setDefault('fpversion', '9.0.115');
        $mform->addRule('fpversion', get_string('required'), 'required', null, 'client');
        $mform->setAdvanced('fpversion');

        // tracecall
        $mform->addElement('text', 'tracecall', get_string('tracecall', 'mplayer'), $mplayer_url_array);
        $mform->setType('tracecall', PARAM_TEXT);
        $mform->setAdvanced('tracecall');

        //-------------------------------------------------------------------------------
        // add standard elements, common to all modules
        $this->standard_coursemodule_elements();

        //-------------------------------------------------------------------------------
        // add standard buttons, common to all modules
        $this->add_action_buttons();
    }

    function set_data($defaults) {

        $instancefiles = mplayer_get_fileareas();
        foreach ($instancefiles as $if) {
            $draftitemid = file_get_submitted_draft_itemid($if);
            $maxfiles = ($if == 'mplayerfile') ? -1 : 1;
            $subdirs = ($if == 'mplayerfile') ? true : false;
            if ($if != 'mplayerfile') {
                $ifarea = preg_replace('/file$/', '', $if);
            } else {
                $ifarea = $if;
            }
            echo "prepare area $draftitemid, {$this->context->id}, 'mod_mplayer', $ifarea, 0<br/>";
            file_prepare_draft_area($draftitemid, $this->context->id, 'mod_mplayer', $ifarea, 0, array('subdirs' => $subdirs, 'maxbytes' => $maxbytes, 'maxfiles' => $maxfiles));
            if ($if == 'configxml') {
                $defaults->configxmlgroup['configxml'] = $draftitemid;
            } else {
                $defaults->$if = $draftitemid;
            }
        }

        parent::set_data($defaults);
    }
}
