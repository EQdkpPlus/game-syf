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

if(!class_exists('syf')) {
	class syf extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '1.1.3';
		protected $this_game		= 'syf';
		protected $types			= array('classes', 'filters', 'roles', 'clans');
		protected $classes			= array();
		protected $races			= array();
		protected $roles			= array();
		protected $filters			= array();
		public $langs				= array('english', 'german', 'french');

		protected $class_dependencies = array(
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> false,
			),
			array(
				'name'		=> 'clan',
				'type'		=> 'clans',
				'admin' 	=> false,
				'decorate'	=> true,
				'parent'	=> false,
				'roster'	=> true,
			),
			
			
		);
		
		public $default_roles = array(
			1	=> array(7,9),			#Tank
			2	=> array(6,11,12,5), 	#Caster 
			3	=> array(3,1),			#Support
			4	=> array(2,8),			#Ranged
			5  => array (10,4,13), 		#Melee
		);
		
		protected $class_colors = array(
			0	=> '#ff7fff',
			1	=> '#05e6fa',
			2	=> '#7d7d7d',
			3	=> '#741bd4',
			4	=> '#fc9b00',
			5	=> '#f7ff00',
			6	=> '#ffffff',
			7	=> '#ff0000',
			8	=> '#159e00',
			9	=> '#5845ff',
			10	=> '#5845ff',
			11	=> '#5845ff',
			12	=> '#5845ff',
			13	=> '#5845ff',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= false;
		public $lang			= false;

		public function profilefields(){
			$xml_fields = array(
				'gender'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_gender',
					'options'		=> array('Male' => 'uc_male', 'Female' => 'uc_female'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
			);
			return $xml_fields;
		}

		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
			}
		}

		public function install($install=false){
			$this->game->resetEvents();
			$this->game->resetRanks();
			//Ranks
			$this->game->addRank(0, "Pantheon");
			$this->game->addRank(1, "Clanleader");
			$this->game->addRank(2, "Officer");
			$this->game->addRank(3, "Veteran");
			$this->game->addRank(4, "Member", true);
			$this->game->addRank(5, "Unknown");
		}
		
		//Guildbank
		public function guildbank_money(){
		return $money_data = array(
		'Credit'		=> array(
			'icon'			=> array(
				'type'		=> 'image',
				'name'		=> 'credit.png',
			),
			'factor'		=> 1,
			'size'			=> 'unlimited',
			'language'		=> 'Credit',
			'short_lang'	=> 'Credit_s',
		)
		);}
		public function guildbank_itemrarity(){
			return array(
			  5 => $this->game->glang('Heroic'),
			  4 => $this->game->glang('Epic'),
			  3 => $this->game->glang('Rare'),
			  2 => $this->game->glang('Normal'),
			  1 => $this->game->glang('Other'));
		}
	}
}
?>