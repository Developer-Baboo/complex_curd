<!DOCTYPE html>
<html lang="en">

<head>
    <title>CURD APPLICATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        {{-- Favicon --}}
        <link rel="icon" href="{{ asset('assets/favicon.jpg') }}" type="image/x-icon" />
</head>

<body>
    <center>
        <h1>CURD FORM</h1>
    </center>
    <div class="container">
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
                <label for="formGroupExampleInput" class="form-label">Enter Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"
                    id="formGroupExampleInput" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Upload Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror"
                    id="formGroupExampleInput2" name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- <br> --}}

            <Legend>Skills</Legend>
            <div class="form-check">
                <input class="form-check-input @error('skill') is-invalid @enderror" name="skill[]" type="checkbox"
                    value="java" id="flexCheckDefault"
                    {{ is_array(old('skill')) && in_array('java', old('skill')) ? 'checked' : '' }}>
                <label class="form-check-label" for="flexCheckDefault">
                    Java
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input @error('skill') is-invalid @enderror" name="skill[]" type="checkbox"
                    value="python" id="flexCheckChecked"
                    {{ is_array(old('skill')) && in_array('python', old('skill')) ? 'checked' : '' }}>
                <label class="form-check-label" for="flexCheckChecked">
                    Python
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input @error('skill') is-invalid @enderror" name="skill[]" type="checkbox"
                    value="c++" id="flexCheckChecked"
                    {{ is_array(old('skill')) && in_array('c++', old('skill')) ? 'checked' : '' }}>
                <label class="form-check-label" for="flexCheckChecked">
                    C++
                </label>

            </div>
            @error('skill')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror

            <legend>Gender</legend>
            <div class="form-check">
                <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" value="Male"
                    name="gender" id="flexRadioDefault1" {{ old('gender') == 'Male' ? 'checked' : '' }}>
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender"
                    value="Female" id="flexRadioDefault2" {{ old('gender') == 'Female' ? 'checked' : '' }}>
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>
            @error('gender')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            {{-- <br> --}}
            <legend>Select Your Country</legend>
            <select class="form-select @error('country') is-invalid @enderror" name="country"
                aria-label="Default select example">
                <option value="" selected>Select Country</option>
                <option value="Mithi" {{ old('country') == 'Mithi' ? 'selected' : '' }}>Mithi</option>
                <option value="Diplo" {{ old('country') == 'Diplo' ? 'selected' : '' }}>Diplo</option>
                <option value="Chahro" {{ old('country') == 'Chahro' ? 'selected' : '' }}>Chahro</option>
            </select><br>
            @error('country')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror

            <center>
                <input class="btn btn-info text-white" type="submit" value="Submit">
            </center>

        </form>
    </div>
</body>

</html>
