<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    protected $entidade;
    protected $view;

    public function index()
    {
        return view('dashboard.'.$this->view.'.all')->with('collection', $this->entidade::paginate());
    }
    public function create()
    {
        return view('dashboard.'.$this->view.'.create');
    }
    public function store(Request $request)
    {
        return $request->all();
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        return view('dashboard.'.$this->view.'.edit')->with('item', $this->entidade::findOrFail($id));
    }
    public function update(Request $request, $id)
    {
        // return $this->entidade::findOrFail($id)->update($request->all());
        return $request->all();
    }
    public function destroy($id)
    {
        //
    }
}
