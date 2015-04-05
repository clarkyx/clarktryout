<?php
class PostsController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index(){
		$this->set('posts', $this->Post->find('all'));
	}

	public function view($id = null){
		if(!$id){
			throw new NotFoundException(__('Invalid post'));
		}
		$post = $this->Post->findById($id);
		if(!$post){
			$this->set('post',$post);
		}
		$this->set('post',$post);
	}
}