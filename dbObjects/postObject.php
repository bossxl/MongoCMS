<?php 
class pagesObject extends superdbobject
//from the superdebobject, we already have these properties: 
/*
* $id
* $name
* $description
*/
//I'm thinking that the $name dosen't tell me much, $postTitle does. 

public $postTitle = '';
public $postSubTitle = '';
public $postBody = '';
public $postId = $id;

//retrieve post and show it to the user. For clicking on the title itself from the main blog page.
public function retrieveAndDisplayPost($postId){
	//get the post corresponding to the post id passed in by the selected link
	$result = db.pages.find({id:"postId"}).forEach(printjson);
	//show it to the user.
	echo $result;
}


//retrieve post, edit post, save it back in the db 
	//retrieve post, display to user in order to edit 
	public function retrievePostId($postId){

	}

	public function updatePostInfo($postTitle,$postSubTitle, $postBody){

	}

//not really efficent to turn a post inactive- usually when a user wants to delete a post, they really want to delete the post. 
public function deletePost($postId){

}

public function createPost($postId, $postTitle, $postSubTitle, $postBody){

}

?>