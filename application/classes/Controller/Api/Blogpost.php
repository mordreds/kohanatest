<?php


class Controller_Api_BlogPost extends Controller
{
	public function action_ajax_savePost()
	{
		//return print_r($postData = json_decode($this->request->body(), true));
		$postData = json_decode($this->request->body(), true);

		// Checking if update or new entry
		if(empty($postData['id']))
			$blogDetails = new Model_Post();
		else
			$blogDetails = ORM::factory('post', $postData['id']);

		$blogDetails->heading = $postData['heading'];
		$blogDetails->tags = $postData['tags'];
		$blogDetails->co_authors = $postData['co_authors'];
		//$blogDetails->cover_img = $postData['heading'];
		$blogDetails->summary = $postData['summary'];
		$blogDetails->full_details = $postData['full_details'];
		$blogDetails->created_by = 1;

		if($blogDetails->save())
			return print_r(json_encode(['response' => true]));
		else
			return print_r(json_encode(['response' => false]));
	}

	public function action_ajax_getAllPosts()
	{
		$allPosts = ORM::factory('post')->where('status', '=', 1)->order_by('id', 'desc')->find_all(); //DB::select()->from('posts')->where('status', '=', 1)->as_object()->execute();
		foreach ($allPosts as $post) {
			$responseData[] = array(
			  'id' => $post->id,
			  'heading' => $post->heading,
				'tags' => $post->tags,
				'co_authors' => $post->co_authors,
				'cover_img' => "/assets/uploads/blogs/...", //$post->cover_img,
				'summary' => $post->summary,
				'full_details' => $post->full_details,
				'comments' => $post->comments,
				'published' => ($post->published == 1) ? 'published' : "unpublished",
			);
		}

		return print_r(json_encode($responseData));
	}

	public function action_ajax_deletePost()
	{
		//return print_r($postData = json_decode($this->request->body(), true));
		$postId =  json_decode($this->request->body(), true);
		$postDetails = ORM::factory('post', $postId['id']);
		$postDetails->status = 2;
		$postDetails->update();

		return print_r(json_encode(['response' => true]));
	}
}