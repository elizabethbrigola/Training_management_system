
<!DOCTYPE html>
<html>
<head>
    <title>Add Training Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }

        .container {
            background: white;
            padding: 25px;
            max-width: 500px;
            margin: auto;
            border-radius: 8px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            box-sizing: border-box;
        }

        button, a {
            padding: 10px 15px;
            border: none;
            text-decoration: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button {
            background: #198754;
            color: white;
        }

        a {
            background: #6c757d;
            color: white;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Add New Training</h2>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('trainings.store') }}" method="POST">
        @csrf

        <label>Trainee Name</label>
        <input type="text" name="trainee_name"
               value="{{ old('trainee_name') }}" required>

        <label>Training Title</label>
        <input type="text" name="training_title"
               value="{{ old('training_title') }}" required>

        <label>Training Date</label>
        <input type="date" name="training_date"
               value="{{ old('training_date') }}" required>

        <label>Status</label>
        <select name="status" required>
            <option value="">Select Status</option>
            <option value="Pending" {{ old('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Ongoing" {{ old('status') == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
            <option value="Completed" {{ old('status') == 'Completed' ? 'selected' : '' }}>Completed</option>
        </select>

        <button type="submit">Save Training</button>
        <a href="{{ route('trainings.index') }}">Back</a>
    </form>
</div>

</body>
</html>
