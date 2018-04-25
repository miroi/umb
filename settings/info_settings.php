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
 * Presets settings page file.
 *
 * @package    theme_fordson
 * @copyright  2016 Chris Kenniburg
 * @credits    theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_fordson_info', get_string('info_settings', 'theme_fordson'));

	//Info 1
	$name = 'theme_fordson/info1title';
	$title = get_string('info1title', 'theme_fordson');
	$description = get_string('info1title_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/info1url';
	$title = get_string('info1url', 'theme_fordson');
	$description = get_string('info1url_desc', 'theme_fordson');
	$default =  '';
	$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	//Info 2
	$name = 'theme_fordson/info2title';
	$title = get_string('info2title', 'theme_fordson');
	$description = get_string('info2title_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/info2url';
	$title = get_string('info2url', 'theme_fordson');
	$description = get_string('info2url_desc', 'theme_fordson');
	$default =  '';
	$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	//Info 3
	$name = 'theme_fordson/info3title';
	$title = get_string('info3title', 'theme_fordson');
	$description = get_string('info3title_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/info3url';
	$title = get_string('info3url', 'theme_fordson');
	$description = get_string('info3url_desc', 'theme_fordson');
	$default =  '';
	$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

$settings->add($page);

