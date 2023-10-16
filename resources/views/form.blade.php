<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form action="">
        <div class="container">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Enter Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name"
                    placeholder="Enter Name">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="formGroupExampleInput2" name="image">
            </div>
        </div>

        <br>

        <Legend>Skills</Legend>
        <div class="form-check">
            <input class="form-check-input" name="skill[]" type="checkbox" value="java" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Java
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="skill[]" type="checkbox" value="python" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
                Python
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="skill[]" type="checkbox" value="c++" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
                C++
            </label>
        </div>

        <legend>Gender</legend>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="Male" name="gender" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="Female" name="gender" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Female
            </label>
        </div>

        <select class="form-select" name="country" aria-label="Default select example">
            <option selected>Select Country</option>
            <option value="Mithi">Mithi</option>
            <option value="Diplo">Diplo</option>
            <option value="Chahro">Chahro</option>
        </select>
    </form>
</body>

</html>
