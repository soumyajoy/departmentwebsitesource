<?php
    session_start();
    header("Cache-Control: no-cache"); 
    $task = $_POST['j_process'];
	switch($task){
		case "load_subjects_of_sem":
			$sem=$_POST['sem'];
			include_once 'query.php';
			$obj=new query();
			$sub_res=$obj->load_subjects($sem);
			$i=1;
			while($row = mysql_fetch_array($sub_res)){
				//$option.= "<option value = '".$row['sid']."'>" .$row['sub_name']. "</option>";
				echo '<div class="col-sm-6">
					<label class="sr-only" for="form-first-name"> </label>
					'.$row['sub_name'].'
				</div> 
				<div class="col-sm-3">
					<input  type="hidden" name="subect_id[]" value="'.$row['sid'].'">
					<input  type="text" style="background:#CF9;" name="sub_mark[]" class="form-first-name form-control"><label id="lname1"></label>
				</div>
				<div class="clearfix"></div>
				';
				
			$i++;}
       
        break;
		
		case "load_students_of_year":
			$adm_year=$_POST['adm_year'];
			$branchid=$_POST['branchid'];
			
			include_once 'query2.php';
			$obj2=new query2();
			$stud_res=$obj2->load_students_ofyear($adm_year,$branchid);
			$i=1;
			echo count($stud_res);
			echo '<option value="0">Choose</option>';
			while($row = mysql_fetch_assoc($stud_res)){
				?>
				<option value="<?php echo $row['adm_no']; ?>"><?php echo $row['name']; ?></option>
				<?php echo $row['name'];
			$i++;}
       
        break;
		
		
		 
		default:
	}
?>    
			
            
     
