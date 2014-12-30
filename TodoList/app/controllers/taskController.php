<?php

class taskController extends BaseController {

public function getIndex()
	{
		//return View::make('tasks.index');
		return View::make("home");
			
	}


	 public function DeleteOrDone()
    {
      
        if(Input::post('delete')) {
            $this->destroy(); 
        } elseif(Input::post('done')) {
            $this->done(); 
        }

    }

    public function done($id){
$tasks = Task::find($id);
$tasks->save();

	return View::make('tasks.index', compact('tasks'));
    }





public function index()
{

	$tasks = Task::all();

      
//$tasks = Task::orderby('completed')->orderby('completed', 'desc')->orderby('created_at', 'desc')->get();
return View::make('tasks.index', compact('tasks'));
}




	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//return View::make('tasks.create');


		return  View::make('tasks.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
public function store()
    {
        $input = Input::all();
      

        if ($input != null)
        {
            Task::create($input);

            return Redirect::route('tasks.index');
        }

        return Redirect::route('tasks.create')
            ->with('message', 'There were validation errors.');
    }
 

public function show($id)
	{

		$tasks = Task::findOrFail($id);
		//return View::make('tasks.edit');
	return View::make('tasks.show', compact('tasks'));
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

	public function update($id)
	{
		$tasks = Task::find($id);
		$tasks->completed=1;
		$tasks->save();

	 return Redirect::route('tasks.index');
	}


		public function destroy($id)
		{
				$tasks = Task::find($id);
$tasks->delete();
	return View::make('tasks.index', compact('tasks'));


}

}
