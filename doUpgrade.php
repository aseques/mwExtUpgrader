<?php
/**
 * Bootstrap file
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

// Define the absolute path to the root directory of this project
define( 'APP_PATH', __DIR__ );
require_once APP_PATH . '/includes/Core.php';

RazeSoldier\MWExtUpgrader\Core::classLoader();
$mwExtUpgrader = new RazeSoldier\MWExtUpgrader\Core();
$mwExtUpgrader->run();