<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends My_Controller {
	public function dashboard(){
		$this->load->model('queries');
		$users = $this->queries->viewAllSchools();
		$this->load->view('dashboard', ['users' => $users]);
	}
	public function addSchool(){
		$this->load->view('addSchool');
	}
	public function addStudent()
	{
		$this->load->model('queries');
		/*$roles = $this->queries->getRoles();*/
		$schools = $this->queries->getSchools();
		$this->load->view('addStudent',['schools'=>$schools]);
	}
	public function addTeacher()
	{
		$this->load->model('queries');
		/*$roles = $this->queries->getRoles();*/
		$schools = $this->queries->getSchools();
		$this->load->view('addTeacher',['schools'=>$schools]);
	}
	public function createSchool(){
    	$this->form_validation->set_rules('schoolname', 'School', 'required');
		$this->form_validation->set_rules('branch', 'Branch', 'required');		
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if( $this->form_validation->run() ){
			$data = $this->input->post();
			$this->load->model('queries');
			if( $this->queries->makeSchool($data) ){
				$this->session->set_flashdata('message', 'School added successfully.');
			}
			else{
				$this->session->set_flashdata('message', 'Failed to Add!');
			}
			return redirect("admin/addSchool");
		}
		else{
			$this->addSchool();
		}
	}
	public function addCoadmin(){
		$this->load->model('queries');
		$roles = $this->queries->getRoles();
		$schools = $this->queries->getSchools();
		$this->load->view('addCoadmin',['roles'=>$roles, 'schools'=>$schools]);
	}
	public function createCoadmin()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('school_id', 'School Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('role_id', 'Role', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confpwd', 'Password Again', 'required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if( $this->form_validation->run() ){
			$data = $this->input->post();

			$this->load->model('queries');
			if($this->queries->registerCoadmin($data) ){
               $this->session->set_flashdata('message', 'Co-Admin registered successfully');
			}
			else{
               $this->session->set_flashdata('message', 'Failed to registered!');
			}
			return redirect("admin/addCoadmin");
		}
		else{
			$this->addCoadmin();
		}
	}
	public function createStudent(){
		$this->form_validation->set_rules('studentname', 'Username', 'required');
		$this->form_validation->set_rules('school_id', 'School', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('class', 'Class', 'required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if( $this->form_validation->run() ){
			$data = $this->input->post();
			$this->load->model('queries');
			if($this->queries->insertStudent($data, $id) ){
               $this->session->set_flashdata('message', 'Student added successfully');
			}
			else{
               $this->session->set_flashdata('message', 'Failed to add!');
			}
			return redirect("admin/addStudent");
		}
		else{
			$this->addStudent();
		}
	}
	public function viewStudents($school_id){
		$this->load->model('queries');
		$students = $this->queries->getStudents($school_id);
		$this->load->view('viewStudents',['students' => $students]);
	}
	public function editStudent($id){
	    	$this->load->model('queries');
	    	$schools = $this->queries->getSchools();
		$studentData = $this->queries->getStudentRecord($id);
		$this->load->view('editStudent',['schools' =>$schools, 'studentData' => $studentData]);

	}
	public function modifyStudent($id){
		$this->form_validation->set_rules('studentname', 'Username', 'required');
		$this->form_validation->set_rules('school_id', 'School', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('class', 'Class', 'required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if( $this->form_validation->run() ){
			$data = $this->input->post();
			$this->load->model('queries');
			if($this->queries->updateStudent($data, $id) ){
               $this->session->set_flashdata('message', 'Student updated successfully');
			}
			else{
               $this->session->set_flashdata('message', 'Failed to update!');
			}
			return redirect("admin/editStudent/{$id}");
		}
		else{
			$this->editStudent();
		}
	}
	public function deleteStudent($id){
		$this->load->model('queries');
		if($this->queries->removeStuent($id) ){
			return redirect("admin/dashboard");
		}
    }
    	public function createTeacher(){
		$this->form_validation->set_rules('teachername', 'Teacher name', 'required');
		$this->form_validation->set_rules('school_id', 'School', 'required');
		$this->form_validation->set_rules('phnnum', 'Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('class', 'Class', 'required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if( $this->form_validation->run() ){
			$data = $this->input->post();
			$this->load->model('queries');
			if($this->queries->insertTeacher($data, $id) ){
               $this->session->set_flashdata('message', 'Teacher added successfully');
			}
			else{
               $this->session->set_flashdata('message', 'Failed to add!');
			}
			return redirect("admin/addTeacher");
		}
		else{
			$this->addTeacher();
		}
	}
	public function viewTeachers($school_id){
		$this->load->model('queries');
		$teachers = $this->queries->getTeachers($school_id);
		$this->load->view('viewTeachers',['teachers' => $teachers]);
	}
	public function editTeacher($id){
	    	$this->load->model('queries');
	    	$schools = $this->queries->getSchools();
		$teacherData = $this->queries->getTeacherRecord($id);
		$this->load->view('editTeacher',['schools' =>$schools, 'teacherData' => $teacherData]);

	}
	public function modifyTeacher($id){
		$this->form_validation->set_rules('teachername', 'Teacher name', 'required');
		$this->form_validation->set_rules('school_id', 'School', 'required');
		$this->form_validation->set_rules('phnnum', 'Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('class', 'Class', 'required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if( $this->form_validation->run() ){
			$data = $this->input->post();
			$this->load->model('queries');
			if($this->queries->updateTeacher($data, $id) ){
               $this->session->set_flashdata('message', 'Teacher updated successfully');
			}
			else{
               $this->session->set_flashdata('message', 'Failed to update!');
			}
			return redirect("admin/editTeacher/{$id}");
		}
		else{
			$this->editTeacher();
		}
	}
	public function deleteTeacher($id){
		$this->load->model('queries');
		if($this->queries->removeTeacher($id) ){
			return redirect("admin/dashboard");
		}
    }
        	public function createContact(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('number', 'Number', 'required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if( $this->form_validation->run() ){
			$data = $this->input->post();
			$this->load->model('queries');
			if($this->queries->insertContact($data) ){
               $this->session->set_flashdata('message', 'Information Submitted successfuly.');
			}
			else{
               $this->session->set_flashdata('message', 'Failed to submit!');
			}
			return redirect("admin/contact");
		}
		else{
			$this->contact();
		}
	}
	public function viewContact(){
		$this->load->model('queries');
		$teachers = $this->queries->getContact();
		$this->load->view('viewContacts',['contacts' => $contacts]);
	}
    public function coadmins(){
    	$this->load->model('queries');
    	$coadmins = $this->queries->viewAllSchools();
    	$this->load->view('viewCoadmins', ['coadmins' => $coadmins]);
    }

 		public function __construct(){
		parent::__construct();
		if( !$this->session->userdata("user_id") )
			return redirect("welcome/login");
	}
}
?>