<?php
/*
Plugin Name: Disable Stupid Admin Email Check
Plugin URI: https://ieg.wnet.org/
Description: Enable this plugin to completely disable the every-6-month admin email check that was stupidly added to WP Core in 5.3
Version: 1.0
Author: William Tam
Author URI: https://ieg.wnet.org/
License: GPL2

------------------------------------------------------------------------
Copyright WNET

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA

*/

// yes this plugin is exactly one line of code
add_filter( 'admin_email_check_interval', '__return_false' );
