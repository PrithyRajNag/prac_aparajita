<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateDepartmentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Department;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DepartmentController extends Controller
{
    public function index(){

        $contentData =Department::all();
        return view('department.index', compact('contentData'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $department = new Department();
        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();

        return redirect()->route('department.index');
//        return "Department Has Been Created Successfully";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $department = Department::where('id',$id)->first();
        return view('department.edit',['department'=>$department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     */
    public function update(UpdateDepartmentRequest $request, int $id)
    {
//        return $request->all();

        $item = Department::find($id);

        if (!$item) {
            // return 404 error
            throw new NotFoundHttpException('Department not found');
        }

        if ($request->has('name') && $request->get('name')) {
            $item->name = $request->name;
        }
        if ($request->has('description') && $request->get('description')) {
            $item->description = $request->description;
        }

        return $item->save();

//        $department = Department::where('id',$id)->first();
//        $department->name = $request->name;
//        $department->description = $request->description;
//        $department->save();
//        return redirect()->route('department.index',$id);

//        return "Updated Successfully";
//        return response('Hello World')->withoutCookie('name');


//        $department = Department::find($id)->update([
//            'name' => $request->get('name'),
//            'description'=> $request->get('description'),
//        ]);
//        return back();


//        $department = Department::find($id);
//        ([
//        $department->name = $request->get('name'),
//         $department->description= $request->get('description'),
//          ]);
//        $department->save();
//          return back();


//        return redirect()->route('department.index');
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
        Department::where('id',$id)->delete();
//        return redirect()->route('department.index');
        return "Department is deleted";
    }
}
