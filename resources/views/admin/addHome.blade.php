<html>
<body>
<h1>Add Home </h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="location" placeholder="Location"> <br><br>
    <input type="checkbox" id="buy" name="buy" value="Buy">
    <input type="checkbox" id="rent" name="rent" value="Rent"> <br> <br>
    <input type="text" name="price" placeholder="Price"> <br><br>
    <input type="text" name="bhk" placeholder="BHK"> <br><br>
    <input type="text" name="doorfacing" placeholder="Door Facing"> <br><br>
    <input type="submit">
</body>
</html>
