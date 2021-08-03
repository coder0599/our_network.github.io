<!DOCTYPE html>
<?php
session_start();

include("includes/header.php");

if (!isset($_SESSION['user_mobile'])) {

    header("location: index.php");
}
?>
<head>
    
    <title>Edit account settings </title>
    <meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>

<body>
  <div class="row">
     <div class="col-sm-2">

     </div>
     <div class="col-sm=8">
         <form action="" method="POST" enctype="multipart/form-data">
<table class="table table-border table-hover">
<tr align="center">
    <td colspan="6" class="active"><h2>Edit your profile</h2></td>


</tr>
<tr>
    <td style="font-weight:bold;"> Change your first name </td>
    <td>
        <input class="form-control" type="text" name="f_name" required value="<?php echo $first_name; ?>">
    </td>
</tr>
<tr>
    <td style="font-weight:bold;"> Change your last name </td>
    <td>
        <input class="form-control" type="text" name="l_name" required value="<?php echo $last_name; ?>">
    </td>
</tr>

<tr>
    <td style="font-weight:bold;"> Change your Username </td>
    <td>
        <input class="form-control" type="text" name="u_name" required value="<?php echo $user_name; ?>">
    </td>
</tr>
<tr>
    <td style="font-weight:bold;"> Change your Description </td>
    <td>
        <input class="form-control" type="text" name="describe_user" required value="<?php echo $describe_user; ?>">
    </td>
</tr>
<tr>
    <td style="font-weight:bold;"> Relationship status </td>
    <td>
        <select class="form-control"  name="Relationship" ><option><?php echo $Relationship_status; ?></option>
        <option>Engaged</option>
        <option >Married</option>
        <option>single</option>
        <option >Committed</option>

    </select>

    </td>
</tr>
<tr>
    <td style="font-weight:bold;"> Password </td>
    <td>
        <input class="form-control" type="password" name="u_pass" id="mypass" required value="<?php echo $user_pass; ?>">
        <input type="checkbox" onclick="show_password()"><strong>Show Password</strong>
    </td>
</tr>
<tr>
    <td style="font-weight:bold;">Mobile</td>
    <td>
        <input class="form-control" type="mobile" name="u_mobile" required value="<?php echo $user_mobile; ?>">
    </td>
</tr>

<!--recover password option-->
<tr>
    <td style="font-weight:bold;"> Forgotten password </td>
    <td>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="myModal">Turn on</button>
       <div class="modal fade" id="myModal">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">$times;</button>
                       <h4 class="modal-title">Modal header</h4>
                     </div>
                   <div class="modal-body">
                       <form action="recovery.php?id=<?php echo $user_id;?>" method="POST" id="f">
                    <strong>what is your best friend name ?</strong>
                    <textarea class="form-control" name="content" cols="83" rows="4" placeholder="someone"></textarea><br>
                    <input class="btn btn-default" name="sub" type="submit" value="Submit" style="width: 100px;;"><br><br>
                    <pre>Answer the question we will ask question if you forgot your <br>password.</pre>
                    <br>
                    
                    </form>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-default" data-dismiss="modal">close</button>

                   </div>
               </div>

           </div>

       </div>
    </td>
</tr>
<tr align="center" >
    <td colspan="6">
        <input type="submit" class="btn btn-info" name="update" style="width: 250px;" value="update">

    </td>
</tr>

</table>
         </form>

     </div>
     <div class="col-sm-2"></div>

  </div>
</body>
</html>