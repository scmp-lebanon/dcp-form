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
    <div class='h4 text-white'>ADD NEW USER</div>
    </div>
    </div>
    <div class='container'>
        <div class='d-flex justify-content-between py-3'>
            <div>
                <a href="{{ route('users.index')}}" class='btn btn-primary'>Back</a>
            </div>
        </div>
        <form action="{{route('users.store')}}" method='post'>
           @csrf

        <div class='card border-0 shadow-lg'>
            <div class='card-body'>
               <div class='mb-3'>
                <label for='Fname'>First Name</label>
                <input type='text' name='Fname' id='Fname' placeholder='Enter your first name' class="form-control @error('Fname') is-invalid @enderror" value="{{old('Fname')}}">
                @error('Fname')
                <p class='invalid-feedback'>{{ $message }}</p>
                  @enderror
               </div>
               <div class='mb-3'>
                <label for='Lname'>last Name</label>
                <input type='text' name='Lname' id='Lname' placeholder='Enter your last name' class="form-control @error('Lname') is-invalid @enderror" value="{{old('Lname')}}">
                @error('Lname')
                <p class='invalid-feedback'>{{ $message }}</p>
                  @enderror
               </div>
               <div class='mb-3'>
                <label for='pwd'>password</label>
                <input type='text' name='pwd' id='pwd' placeholder='Enter your last name' class="form-control @error('pwd') is-invalid @enderror" value="{{old('pwd')}}">
                @error('pwd')
                <p class='invalid-feedback'>{{ $message }}</p>
                  @enderror
               </div>
               <div class='mb-3'>
                <label for='email'>Email</label>
                <input type='text' name='email' id='email' placeholder='Enter your email' class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                @error('email')
                <p class='invalid-feedback'>{{ $message }}</p>
                  @enderror
               </div>
               <div class='mb-3'>
                <label for='mobile'>Phone 1</label>
                <input type='number' name='mobile' id='mobile' placeholder='Enter your phone number' class="form-control @error('mobile') is-invalid @enderror" value="{{old('mobile')}}">
                @error('mobile')
                <p class='invalid-feedback'>{{ $message }}</p>
                  @enderror
               </div>
               <div class='mb-3'>
                <label for='mobile2'>Phone 2</label>
                <input type='number' name='mobile2' id='mobile2' placeholder='Enter your phone number' class="form-control @error('mobile2') is-invalid @enderror" value="{{old('mobile2')}}">
                @error('mobile2')
                <p class='invalid-feedback'>{{ $message }}</p>
                  @enderror
               </div>
               <div class='mb-3'>
                <label for='country'>Country</label>
                <input type='text' name='country' id='country' placeholder='Enter your phone number' class="form-control @error('country') is-invalid @enderror" value="{{old('country')}}">
                @error('country')
                <p class='invalid-feedback'>{{ $message }}</p>
                  @enderror
               </div>
               <div class='mb-3'>
                <label for='region'>Region</label>
                <input type='text' name='region' id='region' placeholder='Enter your phone number' class="form-control @error('region') is-invalid @enderror" value="{{old('region')}}">
                @error('region')
                <p class='invalid-feedback'>{{ $message }}</p>
                  @enderror
               </div>
               <div class='mb-3'>
                <label for='city'>city</label>
                <input type='text' name='city' id='city' placeholder='Enter your phone number' class="form-control @error('city') is-invalid @enderror" value="{{old('city')}}">
                @error('city')
                <p class='invalid-feedback'>{{ $message }}</p>
                  @enderror
               </div>
               <div class='mb-3'>
                <label for='bldgFloor'>Building and floor</label>
                <input type='text' name='bldgFloor' id='bldgFloor' placeholder='Enter your phone number' class="form-control @error('bldgFloor') is-invalid @enderror" value="{{old('bldgFloor')}}">
                @error('bldgFloor')
                <p class='invalid-feedback'>{{ $message }}</p>
                  @enderror
               </div>
               <div class='mb-3'>
                <label for='gender'>Gender</label>
                <input type='text' name='gender' id='gender' placeholder='Enter your phone number' class="form-control @error('gender') is-invalid @enderror" value="{{old('gender')}}">
                @error('gender')
                <p class='invalid-feedback'>{{ $message }}</p>
                  @enderror
               </div>
               <div class='mb-3'>
                <label for='clientTypeId'>client Type number</label>
                <input type='text' name='clientTypeId' id='clientTypeId' placeholder='Enter your phone number' class="form-control @error('clientTypeId') is-invalid @enderror" value="{{old('clientTypeId')}}">
                @error('clientTypeId')
                <p class='invalid-feedback'>{{ $message }}</p>
                  @enderror
               </div>
            </div>

        </div>
        <button class='btn btn-primary mt-3'>Save User</button>
        </form>
    </div>



</body>
</html>
