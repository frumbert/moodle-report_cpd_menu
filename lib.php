<?php
// This file is part of CPD Report for Moodle
//
// CPD Report for Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// CPD Report for Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with CPD Report for Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * Library functions used by the CPD Report
 *
 * @package   local-cpd
 * @copyright 2012 Frumbert Productions
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


/**
 * The CPD Report plugin itself cannot modify the navigation block wihtout extending navigation (modifing core).
 * As this is not reccomended, a local plugin that modifies the navigation block itself is used.
 * reference: http://moodle.org/mod/forum/discuss.php?d=170325
 */

function cpd_extends_navigation(global_navigation $navigation) {
	if (!isloggedin()) return;
	
	global $CFG;
	$systemcontext = get_context_instance(CONTEXT_SYSTEM);
	// require_capability('report/cpd:userview', $systemcontext);

	$container = $navigation->add(get_string('cpdactivities', 'local_cpd'));

	//if (has_capability('report/cpd:userview', $systemcontext)) {
		$cpdlink = $container->add(get_string('cpduserview', 'local_cpd'), $CFG->wwwroot.'/report/cpd/index.php');
	//}
	if (has_capability('report/cpd:adminview', $systemcontext)) {
		$cpdlink = $container->add(get_string('cpdadminview', 'local_cpd'), $CFG->wwwroot.'/report/cpd/adminview.php');
	}
	if (has_capability('report/cpd:superadminview', $systemcontext)) {
		$cpdlink = $container->add(get_string('cpdsuperadminview', 'local_cpd'), $CFG->wwwroot.'/report/cpd/metadata.php');
	}

}


?>
