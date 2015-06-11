<?php
class Menu extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->library('session');
	$this->load->model(array('Mo_User'));
}

function create_menu($array_menu, $separator ='|'){
	$data = array(
	'menu' => $array_menu,
	'separator' => $separator
	);
	return $this->load->view('_links',$data, true);
}

function menu_top(){
	$menu_common = array(
	'Home' => base_url(),
	'People' => '#',
	'News' => '#'
	);

	$menu_unlogged = array(
	'Register' => base_url().'User/register/',
	'Login' => base_url().'User/login/'
	);

	$menu_logged = array(
	'My Account' => base_url().'User/account/',
	'Logout' => base_url().'User/logout/'
	);

	$menu = array_merge($menu_common,($this->Mo_User->check_logged() == true)?$menu_logged:$menu_unlogged);
	return $this->create_menu($menu);
	}
}