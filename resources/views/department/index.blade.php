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
        // Clear error messages
        $('#createFormBtn').click(function() {
            $('#name_error').text('');
            $('#description_error').text('');
            $('#createBtn').attr('disabled', true);
        });

        // Browser validation
        $("input[name*='name']").keyup(function () {
            let value_input = $("input[name*='name']").val();

            let regexp = /[^a-zA-Z. ]/g ;
            if (value_input.match(regexp)) {
                $("input[name*='name']").val(value_input.replace(regexp,''))
            }

            if (value_input.length < 3) {
                $("#name_error").text("Minimum 3 Character Required");
                $('#createBtn').attr('disabled', true);
                return;
            }
            $("#name_error").text('');
            $('#createBtn').attr('disabled', false);
        });


// Add this to the main script(To show Data)
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
            url: '/' + {{ Request::segment(1) }} +'/store',
            method: "POST",
            data: $(this).serialize(),
            beforeSend: function () {
                $('#createBtn').attr('disabled', true);
            },
            error: function (xhr, status, error) {

            },
            success: function () {
            },
        });
    })


// Add this to the main script(For Update)
$('#editDepartment').on('submit', function (e) {
    e.preventDefault();

    let id  = $("input[name*='id']").val();
    let name  = $("#name").val();
    let description  = $("#description").val();
    console.log('Value log');
    console.log(id);
    console.log(name);
    console.log(description);

    $.ajax({
        {{--url: "/'"+ {{ Request::segment(1) }} + "'/'"+ id +"'/update",--}}
{{--        url: "{{ route('department.update') }}",--}}
        url: '/department/'+ id + '/update',
        method: "PUT",
        data: {
            _token: "{{ csrf_token() }}",
            id: id,
            name: name,
            description: description,
        },
        success: function(response) {
            if(response) {
                console.log(response);
                // $("#id").val(response.id);
                // $("#name").val(response.name);
                // $("#description").val(response.description);
                $('#editDepartment').modal('hide');
                setInterval('location.reload()', 5000);
            }
        }
    });

    {{--$.ajax({--}}
    {{--    url: '/' + {{ Request::segment(1) }} +'/store',--}}
    {{--    method: "POST",--}}
    {{--    data: $(this).serialize(),--}}
    {{--    beforeSend: function () {--}}
    {{--        $('#createBtn').attr('disabled', true);--}}
    {{--    },--}}
    {{--    error: function (xhr, status, error) {--}}

    {{--    },--}}
    {{--    success: function () {--}}
    {{--    },--}}
    {{--});--}}
})

// function editData() {
//
//     e.preventDefault();
//     // $('#editDepartment').modal('show');
//     var id  = $("input[name*='id']").val();
//     console.log(id);
//     return;

    {{--let _url='/'+ {{ Request::segment(1) }} + '/'+ id +'/update';--}}
    {{--console.log(_url);--}}
    {{--$('#nameError').text('');--}}
    {{--$('#descriptionError').text('');--}}

    // $.ajax({
    //     url: _url,
    //     type: "PUT",
    //     success: function(response) {
    //         if(response) {
    //             $("#id").val(response.id);
    //             $("#name").val(response.name);
    //             $("#description").val(response.description);
    //             $('#index_modal').modal('show');
    //         }
    //     }
    // });
// }
// });
    </script>
@endsection
