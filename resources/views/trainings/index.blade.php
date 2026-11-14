
<!DOCTYPE html>
<html>
<head>
    <title>Training Management System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        a, button {
            padding: 7px 12px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .add {
            display: inline-block;
            background: #198754;
            color: white;
            margin-bottom: 15px;
        }

        .edit {
            background: #ffc107;
            color: black;
        }

        .view {
            background: #0d6efd;
            color: white;
        }

        .delete {
            background: #dc3545;
            color: white;
        }

        #success-message {
            color: green;
            background-color: #d1e7dd;
            padding: 12px;
            border-radius: 5px;
            transition: opacity 0.5s ease;
        }
    </style>
</head>

<body>

    <h1>Training Management System</h1>
    <h3>Training Records</h3>

    @if (session('success'))
        <p id="success-message">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('trainings.create') }}" class="add">
        + Add New Training
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Trainee Name</th>
                <th>Training Title</th>
                <th>Training Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($trainings as $training)
                <tr>
                    <td>{{ $training->id }}</td>
                    <td>{{ $training->trainee_name }}</td>
                    <td>{{ $training->training_title }}</td>
                    <td>{{ $training->training_date }}</td>
                    <td>{{ $training->status }}</td>

                    <td>
                        <a href="{{ route('trainings.show', $training->id) }}" class="view">
                            View
                        </a>

                        <a href="{{ route('trainings.edit', $training->id) }}" class="edit">
                            Edit
                        </a>

                        <form action="{{ route('trainings.destroy', $training->id) }}"
                              method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="delete"
                                onclick="return confirm('Are you sure you want to delete this record?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="6">No training records found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <script>
        setTimeout(function () {
            let message = document.getElementById('success-message');

            if (message) {
                message.style.opacity = '0';

                setTimeout(function () {
                    message.remove();
                }, 500);
            }
        }, 5000);
    </script>

</body>
</html>
