<?php 

function is_logged_in()
{
	$ci = get_instance();
	if(!$ci->session->userdata('role_id')) {
		redirect('auth');
	} else {


		$role_id = $ci->session->userdata('role_id');
		$menu = $ci->uri->segment(1);



		$querymenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
		$menu_id = $querymenu['id'];



		$accessMenu = $ci->db->get_where('user_access_menu', [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		]);

		// Jika access menu tidak ada, blokir aksesnya
		if( $accessMenu->num_rows() < 1 ) {
			redirect('auth/blocked');
		}


	}
}


function check_access($role_id, $menu_id)
{
	$ci = get_instance();
	$result = $ci->db->get_where('user_access_menu', [
		'menu_id' => $menu_id,
		'role_id' => $role_id
		
	]);

	if ( $result->num_rows() > 0 ) {
		return "checked='checked'";
	}
}










