<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends My_Controller {
	public function dashboard(){
		$this->load->model('queries');
		$school_id = $this->session->userdata('school_id');
		$students = $this->queries->getStudents($school_id);
		$teachers = $this->queries->getTeachers($school_id);
		$this->load->view('users', ['students' => $students],['teachers' => $teachers]);
	}
}