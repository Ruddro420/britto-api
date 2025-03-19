<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CourseModel;
use App\Models\ModuleModel;
use Illuminate\Http\Request;

class Course extends Controller
{

    public function addCategory(Request $request)
    {
        // validate unique category
        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $data = new Category();
        $data->name = $request->name;
        $data->save();
        return response()->json([
            'message' => 'Created successfully',
            'data' => $data
        ]);
    }
    // get Category Data
    public function getCategory()
    {
        $data = Category::all();
        return response()->json([
            'message' => 'Data fetched successfully',
            'data' => $data
        ]);
    }
    // add Course Data
    public function addCourse(Request $request)
    {
        $data = new CourseModel();
        $data->category = $request->category;
        $data->course_name = $request->course_name;
        $data->short_bio = $request->short_bio;
        $data->course_price = $request->course_price;
        $data->discount_price = $request->discount_price;
        $data->course_des = $request->course_des;
        $data->banner = $request->banner;
        $data->intro_video = $request->intro_video;
        $data->video_count = $request->video_count;
        $data->course_week = $request->course_week;
        $data->extra_one = $request->extra_one;
        $data->extra_two = $request->extra_two;
        $data->save();
        return response()->json([
            'message' => 'Created successfully',
            'data' => $data
        ]);
    }
    // get Course Data
    public function getCourse()
    {
        $data = CourseModel::all();
        return response()->json([
            'message' => 'Data fetched successfully',
            'data' => $data
        ]);
    }
    // add Module Data
    public function addModule(Request $request)
    {
        $data = new ModuleModel();
        $data->category = $request->category;
        $data->course_name = $request->course_name;
        $data->module_name = $request->module_name;
        $data->module_topics = $request->module_topics;
        $data->banner = $request->banner;
        $data->module_video = $request->module_video;
        $data->module_des = $request->module_des;
        $data->extra_one = $request->extra_one;
        $data->extra_two = $request->extra_two;
        $data->save();
        return response()->json([
            'message' => 'Created successfully',
            'data' => $data
        ]);
    }






    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
