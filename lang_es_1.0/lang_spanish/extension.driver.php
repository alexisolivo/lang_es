<?php

	Class extension_lang_spanish extends Extension {

		/**
		 * Extension information
		 */

		public function about() {
			return array(
				'name' => 'Language: Spanish (Latinoamerica)',
				'type' => 'Localización',
				'version' => '1.0',
				'release-date' => '2011-09-07',
				'author' => array(
					'name' => 'Alexis Olivo',
					'website' => 'http://www.persuativa.com/gnu',
					'email' => 'alexis@persuativa.com'
				),
				'description' => 'Traducción de Español Latinoamericano para el Backend de Symphony',
				'compatibility' => array(
					'2.0.0' => false,
					'2.0.1' => false,
					'2.0.2' => false,
					'2.0.3' => true,
					'2.0.4' => true,
					'2.0.5' => true,
					'2.0.6' => true,
					'2.0.7' => true
				)
			);
		}

	}
	
