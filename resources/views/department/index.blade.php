@extends('layouts.master')

@section('content')
    <!-- Start Department List Model -->
    <div class="row justify-content-center">
        <div class="col-lg-12 m-3">
            <div class="card border-success">
                <h4 class="card-header bg-success d-flex justify-content-between">
                    <span class="text-light align-self-center">Departments List</span>
                    <a href="#" class="btn btn-light" data-toggle="modal" data-target="#add"><i class="fas fa-plus-circle"></i>&nbsp; Add</a>
                </h4>
                <div class="card-body f-14">
                    <div class="table-responsive" id="showDepartmentList">
                        <table class="table table-striped text-center">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Departments Name</th>
                                <th>Description</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($contentData as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                           <a href="" class="btn btn-primary f-12" onclick="showData({{ $item }})" data-toggle="modal" data-target="#editDepartment"><i class="fas fa-edit"></i>&nbsp; Edit</a>

                                           <a href="" class="btn btn-danger f-12" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt"></i>&nbsp; Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

    {{--                        <tr>--}}
    {{--                            <td>701</td>--}}
    {{--                            <td>Surgery 1</td>--}}
    {{--                            <td>Surgery Department</td>--}}
    {{--                            <td>--}}
    {{--                                <a href="#" class="btn btn-primary f-12" data-toggle="modal" data-target="#editDepartment"><i class="fas fa-edit"></i>&nbsp; Edit</a>--}}

    {{--                                <a href="#" class="btn btn-danger f-12" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt"></i>&nbsp; Delete</a>--}}
    {{--                            </td>--}}
    {{--                        </tr>--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Department List Model -->

    <!-- Start Add New Department Model -->
    @include('department.create')
    <!-- End Add New Department Model -->

    <!-- Start Edit Department Model -->
    @include('department.edit')
    <!-- End Edit Department Model -->

@endsection


@section('js')
    <script>
{{--        let r ={{ Request::segment(1) }};--}}
{{--        let r ={{ \Request::segment(3) }};--}}
{{--        console.log(r)--}}



// Add this to the main script
        function showData(item) {
            // $('#name').html(item.name);
            // $('#description').html(item.description);
            // console.log(item.description);

            $("input[name*='id']").val(item.id);
            $("input[name*='name']").val(item.name);
            $("textarea[name*='description']").val(item.description);
        }

// Add this to the main script(For Create)
        $('#createForm').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                url:'/'+ {{ Request::segment(1) }} + '/store',
                method:"POST",
                data:$(this).serialize(),
                beforeSend: function () {
                    $('#createBtn').attr('disabled', true);
                },
                error: function (xhr, status, error) {

                },
                success: function () {},
            });
        })




// Add this to the main script(For Update)

function editData(e) {
    e.preventDefault();
    var id  = $("input[name*='id']").val();
    console.log(id);
    // let _url = `/posts/${id}`;
    // $('#titleError').text('');
    // $('#descriptionError').text('');

    // $.ajax({
    //     url: _url,
    //     type: "GET",
    //     success: function(response) {
    //         if(response) {
    //             $("#post_id").val(response.id);
    //             $("#title").val(response.title);
    //             $("#description").val(response.description);
    //             $('#post-modal').modal('show');
    //         }
    //     }
    // });
}
    </script>
@endsection
