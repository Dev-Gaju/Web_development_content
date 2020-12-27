<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery.js"></script>
    <script src="jquery.dataTables.min.js"></script>
    <link href="jquery.dataTables.min.css" rel="stylesheet">
    <script>
        $(document).ready(function() {
            $("#myTable").dataTable();
        });
    </script>
</head>

<body>
    <table id="myTable" class="table-responsive">
        <thead>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Section</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Abir</td>
                <td>Ten</td>
                <td>A</td>
            </tr>
            <tr>
                <td>Shaddam</td>
                <td>Tweelve</td>
                <td>B</td>
            </tr>
        </tbody>
    </table>



</body>

</html>