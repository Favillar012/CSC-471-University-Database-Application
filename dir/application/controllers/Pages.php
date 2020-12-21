<!DOCTYPE html>
<html>
<body>

<?php

class Pages extends CI_Controller {

	public function view($page = 'home') {
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			// Page does not exist
			show_404();
		}

	$data['title'] = ucfirst($page); // Capitalize the first letter
	
	$this->load->view('templates/header_temp', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer_temp', $data);
	}
}

?>

</body>
</html>