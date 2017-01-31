<?php

use App\models\Blog;


class BlogController extends \BaseController {

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$blogs = Blog::orderBy('created_at', 'desc')->get();



		return \View::make('website.pages.home', array('blogs'=> $blogs));
	}



	public function allDashboard(){
		$blogs = Blog::orderBy('created_at', 'desc')->get();


		return \View::make('admin.pages.index', array('blogs' => $blogs));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$rules = [
				'title' => 'required|max:255',
				'content' => 'required',
		];

		$validator = \Validator::make(Input::all(), $rules);

		if($validator->passes()) {

			$blog = new Blog();


			$blog->title = \Input::get('title');
			$blog->content = \Input::get('content');
			$blog->image = 'test mode';


			$blog->save();

			return \Redirect::to('/blog');
		}

		return ($validator->messages());


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = Blog::findOrFail($id);

		return \View::make('admin.pages.editBlog', array('blog'=> $blog));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updated($id)
	{
		$blog = Blog::findOrFail($id);

		$rules = [
				'title' => 'required|max:255',
				'content' => 'required',
		];

		$validator = \Validator::make(Input::all(), $rules);

		if($validator->passes()) {

			$blog->title = \Input::get('title');
			$blog->content = \Input::get('content');
			$blog->image = \Input::get('image');


			$blog->update();

			return \Redirect::to('/blog');
		}

		return ($validator->messages());
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$blog = Blog::find($id);

		$blog->delete();

		return \Redirect::to('/blog');
	}

	public function blogView(){
        $blogs = Blog::orderBy('created_at', 'desc')->get();



        return \View::make('admin.pages.blog', array('blogs'=> $blogs));
    }


}
