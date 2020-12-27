<?php 
 class Queries extends CI_Model{
 	public function getRoles(){
 		$roles = $this->db->get('tbl_roles');
 		if( $roles->num_rows() > 0 ){
 			return $roles->result();
 		}
 	  }
 	  	public function getSchools(){
 		$schools = $this->db->get('tbl_school');
 		if( $schools->num_rows() > 0 ){
 			return $schools->result();
 		}
 	  }
 	   	public function registerAdmin($data){
         return $this->db->insert('tbl_users', $data);
 	}
 		public function chkAdminExist(){
 		$chkTeacher = $this->db->where(['role_id' => '1'])
 		->get('tbl_users');
 		if( $chkTeacher->num_rows() > 0 ){
 			return $chkTeacher->num_rows();
 		}
 	}
 	 	public function adminExist($email, $password){
 		$chkAdmin = $this->db->where(['email'=>$email, 'password'=>$password])
 		               ->get('tbl_users');
 		if( $chkAdmin->num_rows() > 0){
 			return $chkAdmin->row();
 		}
 	}
 	 	public function makeSchool($data){
 		    return $this->db->insert('tbl_school', $data);
    }
    public function registerCoadmin($data)
    {
    	 return $this->db->insert('tbl_users', $data);
    }
       public function viewAllSchools(){
    	$this->db->select(['tbl_users.user_id','tbl_users.email', 'tbl_school.school_id', 'tbl_users.username', 'tbl_users.gender', 'tbl_school.schoolname', 'tbl_school.branch', 'tbl_roles.rolename']);
    	$this->db->from('tbl_school');
    	$this->db->join('tbl_users', 'tbl_users.school_id = tbl_school.school_id');
    	$this->db->join('tbl_roles', 'tbl_roles.role_id = tbl_users.role_id');
    	$users = $this->db->get();
    	return $users->result();
    }
    public function insertStudent($data){
    	return $this->db->insert('tbl_student', $data);
    }
    public function insertTeacher($data){
        return $this->db->insert('tbl_teacher', $data);
    }
    public function getStudents($school_id){
        $this->db->select(['tbl_student.id', 'tbl_school.schoolname', 'tbl_student.studentname', 'tbl_student.email', 'tbl_student.gender', 'tbl_student.class']);
        $this->db->from('tbl_student');
        $this->db->join('tbl_school', 'tbl_school.school_id = tbl_student.school_id');
        $this->db->where(['tbl_student.school_id' => $school_id]);
        $students = $this->db->get();
        return $students->result();
    }
    public function getStudentRecord($id){
        $this->db->select(['tbl_school.school_id', 'tbl_school.schoolname', 'tbl_student.id', 'tbl_student.email', 'tbl_student.gender', 'tbl_student.studentname', 'tbl_student.class',]);
        $this->db->from('tbl_student');
        $this->db->join('tbl_school','tbl_school.school_id = tbl_student.school_id');
         $this->db->where(['tbl_student.id' => $id]);
        $student = $this->db->get();
        return $student->row();
    }
    public function updateStudent($data, $id){
        return $this->db->where('id', $id)
              ->update('tbl_student', $data);
    }
    public function removeStuent($id) {
        return $this->db->delete('tbl_student', ['id' => $id]);
    }
     public function insertContact($data){
        return $this->db->insert('tbl_contact', $data);
    }
    public function getTeachers($school_id){
        $this->db->select(['tbl_teacher.id', 'tbl_school.schoolname', 'tbl_teacher.teachername',
            'tbl_teacher.phnnum', 'tbl_teacher.email', 'tbl_teacher.gender', 'tbl_teacher.class']);
        $this->db->from('tbl_teacher');
        $this->db->join('tbl_school', 'tbl_school.school_id = tbl_teacher.school_id');
        $this->db->where(['tbl_teacher.school_id' => $school_id]);
        $teachers = $this->db->get();
        return $teachers->result();
    }
    
    public function getTeacherRecord($id){
        $this->db->select(['tbl_school.school_id', 'tbl_school.schoolname', 'tbl_teacher.id', 'tbl_teacher.phnnum', 'tbl_teacher.email', 'tbl_teacher.gender', 'tbl_teacher.teachername', 'tbl_teacher.class',]);
        $this->db->from('tbl_teacher');
        $this->db->join('tbl_school','tbl_school.school_id = tbl_teacher.school_id');
         $this->db->where(['tbl_teacher.id' => $id]);
        $student = $this->db->get();
        return $student->row();
    }
    public function updateTeacher($data, $id){
        return $this->db->where('id', $id)
              ->update('tbl_teacher', $data);
    }
    public function removeTeacher($id) {
        return $this->db->delete('tbl_teacher', ['id' => $id]);
    }
    
    }
 ?>