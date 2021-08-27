<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Backoffice extends Controller
{
	public function action_login()
	{
		$this->response->body(View::factory('login'));
	}

	public function action_verify_login()
	{
		return print_r(json_encode(['response' => true]));

		/*$postData = $this->request->post();
		//return print Auth::instance()->hash($postData['password']);
		if(Auth::instance()->login($postData['username'], $postData['password']))
			return print_r(['response' => true]);
		else
			return print_r(['response' => false]);*/
	}

	public function action_dashboard()
	{
		$css_files = array(
		);

		$js_files = array(
		  "plugins/flot/jquery.flot.min.js",
			"plugins/flot/jquery.flot.time.min.js",
			"plugins/flot/jquery.flot.symbol.min.js",
			"plugins/flot/jquery.flot.resize.min.js",
			"plugins/flot/jquery.flot.tooltip.min.js",
			"plugins/curvedlines/curvedLines.js",
			"js/pages/dashboard.js"
		);

		$this->response->body(
		  View::factory("admin/_layout")
		    ->set('pagefile', "admin/dashboard.php")
		    ->set('title', "Dashboard")
		    ->set('css_files', $css_files)
		    ->set('js_files', $js_files)
		);
	}

	public function action_newpost()
	{
		$css_files = array(
		  "plugins/summernote-master/summernote.css",
			"plugins/bootstrap-tagsinput/bootstrap-tagsinput.css"
		);

		$js_files = array(
		  "plugins/summernote-master/summernote.min.js",
			"plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js",
			"js/pages/form-elements.js"
		);

		$this->response->body(
		  View::factory("admin/_layout")
			 ->set('pagefile', "admin/post_new.php")
		    ->set('page_name', "New Post")
			 ->set('title', "New Post")
		    ->set('css_files', $css_files)
		    ->set('js_files', $js_files)
		);
	}

	public function action_manageposts()
	{
		$css_files = array(
		  "plugins/datatables/css/jquery.datatables.min.css",
		  "plugins/datatables/css/jquery.datatables_themeroller.css",
		  "plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css",
		  "plugins/summernote-master/summernote.css",
		);

		$js_files = array(
		  "plugins/jquery-mockjax-master/jquery.mockjax.js",
		  "plugins/datatables/js/jquery.datatables.min.js",
		  "plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js",
		  "plugins/summernote-master/summernote.min.js",
		  "js/pages/table-data.js",
		  "js/pages/form-elements.js"
		);

		$this->response->body(
		  View::factory("admin/_layout")
			 ->set('pagefile', "admin/post_manage.php")
			 ->set('page_name', "Manage Post")
			 ->set('title', "Manage Post")
			 ->set('css_files', $css_files)
			 ->set('js_files', $js_files)
			 ->set('modal_file', "admin/post_modal.php")
		);
	}

}