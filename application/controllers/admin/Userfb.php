<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userfb extends Admin_Controller {

	/**
	 * User FB Management page (e.g. CRUD operations)
	 */

	public function index()
	{
		$this->load->library('crud');
		$crud = $this->crud->generate_crud('account_fb');
		$crud->unset_add();
		$crud->unset_edit();
		$crud->columns('id_fb', 'name', 'email', 'image_link', 'date');
		
		$this->mViewData['crud_data'] = $this->crud->render();
		
		$this->_push_breadcrumb('User FB');
		$this->_render('crud');
	}
}
