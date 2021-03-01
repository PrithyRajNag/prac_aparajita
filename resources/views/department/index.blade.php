@extends('layouts.master')

@section('content')


    <!-- Start Department List Model -->
    <div class="row justify-content-center">
        <div class="col-lg-12 m-3">
            @if(session('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ session('success') }}
                </div>
            @endif
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


                                            <form id="delete-form-{{ $loop->index }}" action="{{ route('department.destroy', $item->id) }}"
                                                  method="post"
                                                  class="form-horizontal d-inline">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <div class="btn-group">
                                                    <button onclick="deleteData({{ $loop->index }})" type="button"
                                                            class="btn btn-danger waves-effect waves-light btn-sm align-items-center">
                                                        <i class="fas fa-trash"></i>&nbsp; Delete
                                                    </button>
                                                </div>
                                            </form>
{{--                                           <a href="{{url('/department/{id}/destroy')}}" type="submit" class="btn btn-danger f-12" data-toggle="modal" data-target=""><i class="fas fa-trash-alt"></i>&nbsp; Delete</a>--}}
                                        </td>
                                    </tr>
                                @endforeach
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
                // console.log(response);
                // $("#id").val(response.id);
                // $("#name").val(response.name);
                // $("#description").val(response.description);
                $('#editDepartment').modal('hide');
                setInterval('location.reload()', 2000);
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

        function deleteData(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                console.log(result);
                if (result.value) {
                    document.getElementById('delete-form-' + id).submit();
                    setTimeout(2000);
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        }


    </script>
@endsection
