<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Colours settings page file.
 *
 * @package theme_umb
 * @copyright  2018 Zuzana Šimová 
 * @creditstheme_fordson - MoodleHQ, Chris Kenniburg
 * @licensehttp://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_fordson_colours', get_string('colours_settings', 'theme_fordson'));
$page->add(new admin_setting_heading('theme_fordson_colours', get_string('colours_headingsub', 'theme_fordson'), format_text(get_string('colours_desc' , 'theme_fordson'), FORMAT_MARKDOWN)));

    // Raw SCSS to include before the content.
    $setting = new admin_setting_configtextarea('theme_fordson/scsspre',
    get_string('rawscsspre', 'theme_fordson'), get_string('rawscsspre_desc', 'theme_fordson'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable $link.
    $name = 'theme_fordson/linkcolor';
    $title = get_string('linkcolor', 'theme_fordson');
    $description = get_string('linkcolor_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable navbar-bg.
    $name = 'theme_fordson/navbarbg';
    $title = get_string('navbarbg', 'theme_fordson');
    $description = get_string('navbarbg_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
	// Variable $body-bg-color.
    $name = 'theme_fordson/bodybgcolor';
    $title = get_string('bodybgcolor', 'theme_fordson');
    $description = get_string('bodybgcolor_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable footer-link.
    $name = 'theme_fordson/footerlink';
    $title = get_string('footerlink', 'theme_fordson');
    $description = get_string('footerlink_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable $primary.
    $name = 'theme_fordson/primary';
    $title = get_string('primary', 'theme_fordson');
    $description = get_string('primary_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable $primary-hover.
    $name = 'theme_fordson/primaryhover';
    $title = get_string('primaryhover', 'theme_fordson');
    $description = get_string('primaryhover_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable $fpicon.
    $name = 'theme_fordson/fpicon';
    $title = get_string('fpicon', 'theme_fordson');
    $description = get_string('fpicon_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable $fpicon-hover.
    $name = 'theme_fordson/fpiconhover';
    $title = get_string('fpiconhover', 'theme_fordson');
    $description = get_string('fpiconhover_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable $header-course-color.
    $name = 'theme_fordson/headercoursecolor';
    $title = get_string('headercoursecolor', 'theme_fordson');
    $description = get_string('headercoursecolor_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable $blockbg.
    $name = 'theme_fordson/blockbg';
    $title = get_string('blockbg', 'theme_fordson');
    $description = get_string('blockbg_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable $blockheader.
    $name = 'theme_fordson/blockheader';
    $title = get_string('blockheader', 'theme_fordson');
    $description = get_string('blockheader_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable $block-header-bg.
    $name = 'theme_fordson/blockheaderbg';
    $title = get_string('blockheaderbg', 'theme_fordson');
    $description = get_string('blockheaderbg_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable $breadcrumb-color.
    $name = 'theme_fordson/breadcrumbcolor';
    $title = get_string('breadcrumbcolor', 'theme_fordson');
    $description = get_string('breadcrumbcolor_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable $topic-header-bg.
    $name = 'theme_fordson/topicheaderbg';
    $title = get_string('topicheaderbg', 'theme_fordson');
    $description = get_string('topicheaderbg_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

	// Variable $topic-header.
    $name = 'theme_fordson/topicheader';
    $title = get_string('topicheader', 'theme_fordson');
    $description = get_string('topicheader_desc', 'theme_fordson');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_configtextarea('theme_fordson/scss', get_string('rawscss', 'theme_fordson'),
    get_string('rawscss_desc', 'theme_fordson'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);