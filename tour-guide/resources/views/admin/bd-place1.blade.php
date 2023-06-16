<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
	    <label>Place Name</label>
		<input name="Place_Name" type="text" class="form-control" placeholder="Place Name">
	</div>

     <div class="form-group">
		<label>Tour guideline</label>
		<input name="Tour_guideline" type="text" class="form-control" placeholder="ConditonTour guideline">
	</div>
									
    <div class="form-group">
		<label>Place Image</label>
		<input type="file" name="url_1" class="form-control" placeholder="Choose a file">	
        <input type="file" name="url_2" class="form-control" placeholder="Choose a file">
        <input type="file" name="url_3" class="form-control" placeholder="Choose a file">
        <input type="file" name="url_4" class="form-control" placeholder="Choose a file">
        <input type="file" name="url_5" class="form-control" placeholder="Choose a file">							
	</div>
    <div class="d-flex justify-content-start align-items-center">
		<button type="submit" class="btn btn-light legitRipple">Cancel</button>
		<button type="submit" class="btn bg-blue ml-3 legitRipple">Submit <i class="icon-paperplane ml-2"></i></button>
	</div>
</form>
</body>
</html>