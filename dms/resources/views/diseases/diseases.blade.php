<!-- resources/views/users/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disease</title>
    <!-- Optionally add Bootstrap or other styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Diseases List</h1>
    
    @if($data && count($data) > 0)
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Disease Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Scan Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                    <tr>
                        <td>{{ $data['name'] }}</td>
                        <td>{{ $data['description'] }}</td>
                        <td>{{ $data['scanned-date'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No Disease found.</p>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
