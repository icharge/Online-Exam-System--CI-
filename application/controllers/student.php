<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model', 'Users');

		// Permissions List for this Class
		$perm = array('student');
		// Check
		if ($this->Users->_checkLogin())
		{
			if ( ! $this->Users->_checkRole($perm)) redirect('main');
		} else {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$this->load->view('student/t_header_view');
		$this->load->view('student/t_nav_view');
		$this->load->view('student/t_beginbody_view');

		echo "Student index";

		$this->load->view('student/t_footer_view');
	}

}

/* End of file student.php */
/* Location: ./application/controllers/student.php */