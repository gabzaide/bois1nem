<!-- ========= EDIT SCHOOLYEAR =========== -->
<?php
	if(isset($_POST['btn_save']))
	{
	    $txt_id = $_POST['hidden_id'];
	    $txt_edit_no = $_POST['txt_edit_no'];
	    $txt_edit_type = $_POST['txt_edit_type'];
	    $txt_edit_rf = $_POST['txt_edit_rf'];
	    $txt_edit_bn = $_POST['txt_edit_bn'];

	    $query = mysqli_query($con,"UPDATE apartment SET unit_no = '".$txt_edit_no."', unit_type = '".$txt_edit_type."', unit_rentfee = '".$txt_edit_rf."', unit_buildingname = '".$txt_edit_bn."'  where id = '".$txt_id."' ");

	    if($query == true){
	        $_SESSION['edit'] = 1;
	        header("location: ".$_SERVER['REQUEST_URI']);
	    }

		if(mysqli_error($con)){
			$_SESSION['duplicate'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
		}
	}
?>
