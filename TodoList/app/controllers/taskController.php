<?php

class taskController extends BaseController {

public function getIndex()
	{
		//return View::make('tasks.index');
		return View::make("home");
			
	}





public function index()
{
$tasks = Task::orderby('completed')->orderby('completed', 'desc')->orderby('created_at', 'desc')->get();
return View::make('tasks.index', compact('tasks'));
}


	//public function index()
	//{
		//return View::make('tasks.index');
	//	$this->layout->content = View::make('tasks.index');
	//}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//return View::make('tasks.create');
		$this->layout->content = View::make('tasks.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Task $tasks)
	{
		//return View::make('tasks.show');
		$this->layout->content = View::make('tasks.show', compact('tasks'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//return View::make('tasks.edit');
		$this->layout->content = View::make('tasks.edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
