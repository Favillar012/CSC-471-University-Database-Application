<!DOCTYPE html>
<html>
<body>

<?php

class Mydb_ctr extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function view($page = 'dbwelcome') {
		
		if (! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			show_404(); // Error: Page does not exist
		}
		$data['title'] = ucfirst($page);

		$this->load->view('templates/header_db');
		$this->load->view('pages/'.$page);
	}
}

?>

</body>
</html>