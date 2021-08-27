<?php


class Controller_Blogpost extends Controller
{
	public function action_view()
	{
		$postId = $this->request->param('id');
		$postDetails = ORM::factory('post', $postId)->as_array();

		$this->response->body(View::factory('blogdetails')->bind('blogdetails', $postDetails));
	}
}