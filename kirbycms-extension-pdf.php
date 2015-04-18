<?php
/**
 * @package pagetopdf
 * @author Thomas Fanninger <thomas@fanninger.at>
 * @link https://github.com/fanningert/kirbycms-extension-pdf
 */

namespace at\fanninger\kirby\extension\pagetopdf;

require_once( dirname(__FILE__).'/lib/dompdf/dompdf_config.inc.php' );

class PageToPDF {
	
	protected $dompdf;
	
	public function __construct() {
	}
	
	public function load_html($html){
		$dompdf = new \DOMPDF();
		$dompdf->load_html($html);
	}
	
	public function render(){
		$dompdf->render();
	}

	
}

/*
 * I set the post function on index position 999, so it is clear that this function is the last function on this page.
 */
kirbytext::$post[999] = function($kirbytext, $value) {
  
	$pageToPDF = new PageToPDF( );
	$pageToPDF->load_html($value);
	$pageToPDF->render();
	
  return $value;
};