<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BookCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function getSearch(Request $request){

        $categories = BookCategory::select('id', 'title', 'categoryCode')
                         ->where('title', 'LIKE', '%'.$request->input('q').'%')
                         ->get();

        $result = ['result' => $categories];

        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();

        $validator = Validator::make($inputs, [
            'name'   => 'required|max:100|min:3',
            'code' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin/catagory/add-new')
                ->withErrors($validator)
                ->withInput();
        } else {

            $BookCategory = new BookCategory();
            $BookCategory->title = $inputs['name'];
            $BookCategory->categoryCode = $inputs['code'];
            $BookCategory->description = $inputs['discription'];
            $BookCategory->isActive = 1;

            $BookCategory->save();
        }

        return redirect('/admin/catagory/add-new?status=success&catagory=' . $BookCategory->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
