<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Repositories\DepartmentRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class DepartmentController extends Controller
{
    /**
     * @var DepartmentRepository
     */
    private $repository;

    public function __construct(DepartmentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $contentData = $this->repository->all();
        return view('department.index', compact('contentData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateDepartmentRequest $request
     * @return RedirectResponse
     */
    public function store(CreateDepartmentRequest $request): RedirectResponse
    {
        $data = $this->repository->create($request);

        return redirect()->route('department.index')->with('success', 'Department Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
//    public function show(int $id)
//    {
//        $department = Department::find($id)->first();
//        return view('department.edit',['department'=>$department]);
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDepartmentRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateDepartmentRequest $request, int $id): bool
    {
       return $this->repository->update($request, $id);

//       return redirect()->route('department.index')->with('success', 'Department Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $data = $this->repository->delete($id);

        return redirect()->route('department.index');
    }
}
