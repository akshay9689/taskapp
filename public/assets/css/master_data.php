<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Master_data extends MX_Controller	{
		private $headerData=array();
		function __construct() {
			parent:: __construct();
			$this->load->library('session');
      		$this->load->helper('url');
      		$this->load->model('model_employee');
      		$this->load->model('leads/model_leads');
      		$this->load->model('model_products');
      		$this->load->model('users/model_permissions');
      		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
			$this->output->set_header("Pragma: no-cache");
			$this->id='1';
			$this->permissions=$this->model_permissions->fetch_permissions($this->id);
			$this->logAs=($this->session->userdata('user_type') === 'admin' ? 0 : 1);
      		if ($this->session->userdata('user_type') !== 'admin') {
      			$permsData=explode(', ',$this->permissions[0]->perms);
      			$this->permissions=$permsData;
      		}
      		if($this->session->userdata('is_logged_in') != true) {
	            redirect($this->config->base_url());
	            exit();  
	        }
		}
		public function index() {
			$data['pagetitle']="Masters";
			$data['logAs']=$this->logAs;
			$data['createPerm']=$this->model_permissions->hasPermission("Create",$this->permissions);
			$data['viewPerm']=$this->model_permissions->hasPermission("View",$this->permissions);
			$data['editPerm']=$this->model_permissions->hasPermission("Edit",$this->permissions);
			$data['deletePerm']=$this->model_permissions->hasPermission("Delete",$this->permissions);
			$this->load->view('template/header',$data);
			$this->load->view('master_settings_view');
			$this->load->view('template/footer');
		}	
		public function terms()
		{
			$data=$this->load->model_employee->getterms();
			print_r($data);
			die();
		}	
		public function dcr() {
			$data['pagetitle']="DCR";
			$this->load->view('template/header',$data);
			$this->load->view('dcr_view');
			$this->load->view('template/footer');
		}
		public function targetvsachievement() {
			$data['pagetitle']="Target v/s Achievement";
			$data['logAs']=$this->logAs;
			$tvaPerm=$this->model_permissions->fetch_permissions('6');
			if ($this->session->userdata('user_type') !== 'admin') {
      			$permsData=explode(', ',$tvaPerm[0]->perms);
      			$tvaPerm=$permsData;
      		}
			$data['viewPerm']=$this->model_permissions->hasPermission("View",$tvaPerm);
			$this->load->view('template/header',$data);
			$this->load->view('targetvsachivement_view',$data);
			$this->load->view('template/footer');
		}		
		public function create_news() {
			$data['pagetitle']="News";
			$this->load->view('template/header',$data);
			$this->load->view('meetings_view');
			$this->load->view('template/footer');
		}
		public function documents() {
			$data['pagetitle']="Documents";
			$this->load->view('template/header',$data);
			$this->load->view('documents_view');
			$this->load->view('template/footer');
		}
		public function renewals() {
			$data['pagetitle']="Renewals";
			$data['logAs']=$this->logAs;
			$rnwPerm=$this->model_permissions->fetch_permissions('9');
			if ($this->session->userdata('user_type') !== 'admin') {
      			$permsData=explode(', ',$rnwPerm[0]->perms);
      			$rnwPerm=$permsData;
      		}
			$data['createPerm']=$this->model_permissions->hasPermission("Create",$rnwPerm);
			$data['viewPerm']=$this->model_permissions->hasPermission("View",$rnwPerm);
			$data['selectionData']=$this->model_leads->loadAllData();
			$this->load->view('template/header',$data);
			$this->load->view('renewal_view',$data);
			$this->load->view('template/footer');
		}
		public function settings() {
			$data['pagetitle']="Settings";
			$this->load->view('template/header',$data);
			$this->load->view('master_view');
			$this->load->view('template/footer');
		}
		public function masters() {
			$data['pagetitle']="Masters";
			$this->load->view('template/header',$data);
			$this->load->view('master_view');
			$this->load->view('template/footer');
		}
		public function mis() {
			$data['pagetitle']="MIS";
			$this->load->view('template/header',$data);
			$this->load->view('mis_view');
			$this->load->view('template/footer');
		}
		public function employee() {
			$data['pagetitle']="Employee";
			$this->load->view('template/header',$data);
			$this->load->view('employee_view');
			$this->load->view('template/footer');
		}
		public function clients() {
			$data['pagetitle']="Clients";
			$this->load->view('template/header',$data);
			$this->load->view('client_view');
			$this->load->view('template/footer');
		}
		public function products() {
			$data['pagetitle']="Products";
			$data['categoryOptions']=$this->model_products->fetch_product_categories();
			$this->load->view('template/header',$data);
			$this->load->view('products_view');
			$this->load->view('template/footer');
		}
		public function assign_targets() {
			$data['pagetitle']="Assign Target";
			$this->load->view('template/header',$data);
			$this->load->view('target_assign_view');
			$this->load->view('template/footer');
		}		
		public function development() {
			$data['pagetitle']="Dashboard";
			$this->load->view('template/header',$data);
			$this->load->view('welcome/admindashboardview');
			$this->load->view('template/footer');
		}		
		public function salutation() {
			$data['pagetitle']="Salutation";
			$this->load->view('template/header',$data);
			$this->load->view('salutation_view');
			$this->load->view('template/footer');
		}
		public function industry() {
			$data['pagetitle']="Indutry Type";
			$this->load->view('template/header',$data);
			$this->load->view('industry_type_view');
			$this->load->view('template/footer');
		}
		public function source() {
			$data['pagetitle']="Source";
			$this->load->view('template/header',$data);
			$this->load->view('source_view');
			$this->load->view('template/footer');
		}
		public function product_categories() {
			$data['pagetitle']="Product Categories";
			$this->load->view('template/header',$data);
			$this->load->view('product_company_view');
			$this->load->view('template/footer');
		}
		public function terms_and_conditions() {
			$data['pagetitle']="Terms & Conditions";
			$this->load->view('template/header',$data);
			$this->load->view('terms_n_conditions_view');
			$this->load->view('template/footer');
		}
	}
?>