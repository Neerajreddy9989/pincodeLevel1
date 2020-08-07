<html>
    <head>
      <title>Indian pincode search with location and courier services</title>
      <script type="text/javascript" src="script.js"></script>
      <link rel="stylesheet" href="style.css" />
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){
$("#check").click(function() {
var name = $('#name').val();
if(name=="")
{
$("#disp").html("");
}
else
{
$.ajax({
type: "POST",
url: "config.php",
data: "name="+ name ,
success: function(html){
$("#disp").html(html);
}
});
return false;
}
});
});


</script>

</head>

<body>




<section>


<center>

  <h1>Indian Pincode search</h1><br>
<form method="post">
<b style="color:white;">PINCODE SEARCH:</b>
<input id="name" type="text" name="name" />
<input  id="check" type="submit" name="check" value="check" /><br />
<button id="insert" type="button">Insert</button></a>
<button id="edit" type='button'>Edit</button></a>
</form>
</center>


  <center>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>

        <h2><?php echo @$_GET['blank']; ?> </h2>
        <div id="disp"></div>


      </tbody>
    </table>
  </div>
</center>
</section>
</body>
</html>
