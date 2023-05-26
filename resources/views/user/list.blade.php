<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link rel='stylesheet' href="{{ asset('assets/css/bootstrap.min.css') }}">

</head>
<body>
    <div class='bg-dark py-3'>

    <div class='container'>
    <div class='h4 text-white'>DCP USERS LIST</div>
    </div>
    </div>
    <div class='container'>
        <div class='d-flex justify-content-between py-3'>

            <div>
                <a href="{{route('users.create')}}" class='btn btn-primary'>Create</a>
            </div>
        </div>
        <div>
           @if(Session::has('success'))
           <div class='alert alert-success'>
             {{Session::get('success')}}
           </div>
           @endif
        </div>
        <div class='card border-0 shadow-lg'>
            <div class='card-body'>
                <table class='table table-striped'>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>

                    </tr>

                    @if($users->isNotEmpty())
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->Fname}}</td>
                        <td>{{$user->Lname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->mobile}}</td>


                    </tr>
                    @endforeach
                    @else
                    <tr> <td colspan='6'>Record not found</td></tr>
                    @endif
                </table>
            </div>

        </div>
    </div>



</body>
</html>
<script>
    function deleteuser(id){
     if(confirm('Are you sure you want to delete this user?')){
        document.getElementById('user-edit-action-'+id).submit();
     }

    }
</script>
