<?php
/**
 * @package debugtools
 */
class DebugTools extends Extension {
	
	
	function onAfterInit(){
		Requirements::css('debugtools/css/debugtools.css');
	}
	
	public function DebugTools(){
		return $this->PageInfo()->renderWith('PageInfo');
	}
	

	/** 
	 * Once ContentController has been initiated, do our stuff
	 * @return ArrayList
	 **/
	public function PageInfo(){
		
		// make sure we're in DEV/TEST mode
		if( Director::isTest() || Director::isDev() ){
				
			$mode = 'DEV';
			if( Director::isTest() ) $mode = 'TEST';
			
			$data = array(
				'Mode' => $mode,
				'TimeToLoad' => round( ( microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"] ), 2)
			);
			
			// dump out our debug data
			return ArrayData::create($data);
		}
		
		return false;
	}
}
