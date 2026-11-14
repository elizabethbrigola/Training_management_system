
<!DOCTYPE html>
<html>
<head>
    <title>Training Details</title>
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

        p {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        a {
            display: inline-block;
            padding: 10px 15px;
            background: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Training Details</h2>

    <p><strong>ID:</strong> {{ $training->id }}</p>

    <p><strong>Trainee Name:</strong> {{ $training->trainee_name }}</p>

    <p><strong>Training Title:</strong> {{ $training->training_title }}</p>

    <p><strong>Training Date:</strong> {{ $training->training_date }}</p>

    <p><strong>Status:</strong> {{ $training->status }}</p>

    <a href="{{ route('trainings.index') }}">Back to Records</a>
</div>

</body>
</html>
