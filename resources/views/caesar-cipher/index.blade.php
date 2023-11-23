<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caesar Cipher Calculator</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Caesar Cipher Calculator</h1>

    <form method="post" action="/caesar-cipher">
        @csrf
        <div class="form-group">
            <label for="shift">Shift:</label>
            <input type="number" class="form-control" name="shift" required>
        </div>
        <div class="form-group">
            <label for="text">Text:</label>
            <textarea class="form-control" name="text" required></textarea>
        </div>
        <div class="form-group">
            <label for="operation">Operation:</label>
            <select class="form-control" name="operation" required>
                <option value="encrypt">Encrypt</option>
                <option value="decrypt">Decrypt</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
