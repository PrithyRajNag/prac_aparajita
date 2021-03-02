<?php


namespace App\Repositories;


use App\Models\Department;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DepartmentRepository
{
    public function all()
    {
        return Department::all();
    }

    public function create($request): bool
    {
        $model = new Department();
        if ($request->has('name') && $request->get('name')) {
            $model->name = $request->name;
        }
        if ($request->has('description') && $request->get('description')) {
            $model->description = $request->description;
        }
//        else{return redirect()->route('department.index')->with('success', 'Department Not Created');}
//        if ($request->has('name') && $request->get('!name')) {
//           return redirect()->route('department.index')->with('success', 'Department Not Created');
//        }
        return $model->save();

    }

//    public function get($id)
//    {
//        $item = Department::find($id);
//
//        if (!$item) {
//            throw new NotFoundHttpException('Department not found');
//        }
//
//        return $item;
//    }

    public function update($request, $id)
    {
        $model = Department::find($id);

        if (!$model) {
            throw new NotFoundHttpException('Department not found');
        }

        if ($request->has('name') && $request->get('name')) {
            $model->name = $request->name;
        }
        if ($request->has('description') && $request->get('description')) {
            $model->description = $request->description;
        }

        return $model->save();
    }

    public function delete($id)
    {
        $model = Department::find($id);

        if (!$model) {
            throw new NotFoundHttpException('Department not found');
        }
        return $model->delete();
    }

}
