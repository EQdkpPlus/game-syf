<?php
/*	Project:	EQdkp-Plus
 *	Package:	Skyforge game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array =  array(
  'classes' =>  array (
		0 => 'Unbekannt',
		1 => 'Alchemist ',
		2 => 'Bogenschütze',
		3 => 'Lichtbringer',
		4 => 'Berserker',
		5 => 'Kinetiker',
		6 => 'Kryomant',
		7 => 'Paladin',
		8 => 'Lannonier',
		9 => 'Ritter',
		10 => 'Mönch',
		11 => 'Nekromant',
		12 => 'Hexe/r',
		13	=> 'Schattenmeister',
	),
	  'clans' =>  array (
		0 => 'Unbekannt',
		1 => 'Clan01',
		2 => 'Clan02',
		3 => 'Clan03',
		4 => 'Clan04',
		5 => 'Clan05',
		6 => 'Clan06',
		7 => 'Clan07',
		8 => 'Clan08',
		9 => 'Clan09',
		10 => 'Clan10',
		11 => 'Clan11',
		12 => 'Clan12',
		13	=> 'Clan13',
		14	=> 'Clan14',
		15	=> 'Clan15',
	),


	'roles' => array(
		1	=> 'Tank',
		2	=> 'Caster',
		3	=> 'Support',
		4	=> 'Ranged',
		5	=> 'Melee',
	),
	
	'lang' => array(
		'syf'							=> 'Skyforge',
	
		// Profile information
		'uc_gender'						=> 'Geschlecht',
		'uc_male'						=> 'Männlich',
		'uc_female'						=> 'Weiblich',
		'uc_guild'						=> 'Pantheon',
		'uc_clan'						=> 'Clan',
		'uc_race'						=> 'Rasse',
		'uc_class'						=> 'Klasse',
		'uc_cat_misc'					=> 'verschiedenes',
		'uc_yes'						=> 'Ja',
		'uc_no'							=> 'Nein',
		'uc_unknown'					=> 'Unbekannt',
		'uc_level'						=> 'Ansehen',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'Skyforge Einstellungen',
		
		//Guildbank
		'Heroic' 					=> 'Legendär', 
		'Epic'						=> 'Episch', 
		'Rare'						=> 'Selten', 
		'Normal'					=> 'Ungewöhnlich', 
		'Other'						=> 'Gewöhnlich', 
	),
);

?>