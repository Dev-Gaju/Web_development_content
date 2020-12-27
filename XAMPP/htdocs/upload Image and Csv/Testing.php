<form action="db_connection.php" method="POST" role="form" enctype="multipart/form-data">
    <legend>How to Upload and Save databse</legend><br>

    <div class="form-group">
        <label for="">Picture of Mine</label>
        <input type="file" class="form-control" name="picture" id="" accept="image/*" placeholder="Input field">
    </div>
    <button type="submit" name='upload' class="btn btn-primary">Submit</button>
</form>

<br><br><br>
<form action="csv_upload.php" method="POST" role="form" enctype="multipart/form-data">
    <legend>How to Upload CSV file and Save databse</legend><br>

    <div class="form-group">
        <label for="">CSV File</label>
        <input type="file" class="form-control" name="file" id="" accept="file/*" placeholder="Input field">
    </div>
    <button type="submit" name='submit' class="btn btn-primary">Submit</button>
</form>