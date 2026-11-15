<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Lecturer</title>
</head>
<body>

    <h1>Add New Lecturer</h1>

    <form action="{{ route('lecturers.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <label>Select User:</label>
        <select name="user_id" required>
            <option value="">Select User</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}"
                    @selected(old('user_id') == $user->id)>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label>Employee Number:</label>
        <input type="text" name="employee_number"
               value="{{ old('employee_number') }}" required>

        <br><br>

        <label>Department:</label>
        <input type="text" name="department"
               value="{{ old('department') }}" required>

        <br><br>

        <label>Academic Rank:</label>
        <input type="text" name="academic_rank"
               value="{{ old('academic_rank') }}" required>

        <br><br>

        <label>Office Room:</label>
        <input type="text" name="office_room"
               value="{{ old('office_room') }}" required>

        <br><br>

        <label>Photo:</label>
        <input type="file" name="photo" accept="image/*">

        <br><br>

        <label>Activated:</label>
        <input type="checkbox" name="isActivated" value="1"
               @checked(old('isActivated'))>

        <br><br>

        <button type="submit">Save Lecturer</button>

    </form>

</body>
</html>