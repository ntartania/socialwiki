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
 * Code fragment to define the version of socialwiki
 * This fragment is called by moodle_needs_upgrading() and /admin/index.php
 *
 * @package    mod-socialwiki-1.0
 * @copyrigth  2009 Marc Alier, Jordi Piguillem marc.alier@upc.edu
 * @copyrigth  2009 Universitat Politecnica de Catalunya http://www.upc.edu
 *
 * @author Jordi Piguillem
 * @author Marc Alier
 * @author David Jimenez
 * @author Josep Arus
 * @author Kenneth Riba
 *
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$module->version   = 2014032102;      // The current module version (Date: YYYYMMDDXX)
$module->requires  = 2010031900;      // Requires this Moodle version
$module->component = 'mod_socialwiki';       // Full name of the plugin (used for diagnostics)
$module->cron      = 0;
