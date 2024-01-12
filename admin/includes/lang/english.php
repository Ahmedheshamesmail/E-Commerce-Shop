<?php 
	function lang( $phrase )
	{
		// code...
		static $lang = array(

			// Navbar link

			'Admin'      => 'Admin Home',
			'category'  => 'Section',
			'ITEMS'      => 'Itmes',
			'MEMBERS'    => 'Members',
			'STATISTICS' => 'Statistics',
			'LOGS'       => 'Logs',
			'' 			 => '',
			'' 			 => '',
			'' 			 => '',
			'' 			 => '',
			'' 			 => '',
			'' 			 => '',
			'' 			 => '',
			'' 			 => '',
		);
		return $lang[$phrase];
	}
	 
 ?>