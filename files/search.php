<!DOCTYPE html>
<html lang="en">
<head>
<title>Payroll System | SegWorks Technologies Corporation</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link href="http://fonts.googleapis.com/css?family=Mouse+Memoirs" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/search.css"/>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<div id="content">
	<div class="page-holder">
		<h1>Search Employee</h1>
		<form method="post" action="#">
			<label>To search: Enter Employee's name (i.e. Arn,Mos)</label>
			<p>
				<input type="text" class="search_bar" name="search" required/>
				<input type="submit" name="submit_srch" value="search" class="search_btn" title="Search Data">
			</p>
		</form>
		<p class="batch">Batch 1</p>
		<hr>
		<div class="employee">
				<label>Name of Employee: <span> Arnel M. Moso</span></label>	
		</div>
		<table border="0" class="date">
		<caption>Cut off Dates</caption>
		<tbody>
		<tr>
			<td>From:</td>
			<td>May 17, 2013</td>
		</tr>
		<tr>
			<td>To:</td>
			<td>May 31, 2013</td>
		</tr>
		</tbody>
		</table>
		<form action="#" method="post">
			<p><span class="red">*</span> Double Click on the cell to edit the value! <span class="red">*</span></p>
			<table class="table-striped data" border="1">
				<thead>
					<tr>
						<td rowspan="2">Date</td>
						<td colspan="3">&nbsp;</td>
						<td colspan="4">AM</td>
						<td colspan="4">PM</td>					
						<td rowspan="2" style="word-wrap:break-word;width:20px;">Actual Hours</td>
						<td rowspan="2" style="word-wrap:break-word;width:20px;">Cred. Hours</td>
						<td colspan="3">&nbsp;</td>
						<td rowspan="2">Remarks</td>
					</tr>		
					<tr>
						<td>Night?</td>
						<td>Holiday?</td>
						<td>OT?</td>
						<td colspan="2">In</td>
						<td colspan="2" >Out</td>
						<td colspan="2">In</td>
						<td colspan="2">Out</td>
						<td>Night</td>
						<td>Holiday</td>
						<td>OT</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>May 17 (fri)</td>
						<td><input type="checkbox" class="night" id="night" value="night"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);" style="width:20px;">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);" style="width:20px;">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);" style="width:20px;">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);" style="width:20px;">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td id="nights">0.0</td>
						<td>0.0</td>
						<td>0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 18 (sat)</td>
						<td><input type="checkbox" class="night"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 19 (sun)</td>
						<td><input type="checkbox" class="night"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 20 (mon)</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 21 (tue)</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 22 (wed)</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 23 (thu)</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 24 (fri)</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 25 (sat)</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 26 (sun)</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 27 (mon)</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 28 (tue)</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 29 (wed)</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 30 (thu)</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 31 (fri)</td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td><input type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">0.0</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="18">&nbsp;</td>
					</tr>
					<tr>
						<td>Total</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>121.5</td>
						<td>123</td>
						<td>0.0</td>
						<td>0.0</td>
						<td>0.0</td>
						<td>&nbsp;</td>
					</tr>
				</tbody>
			</table>
			<p class="button">
				<button class="btn btn-small btn-primary" type="button">Save</button>
				<button class="btn btn-small btn-success" type="button">Print</button>
			</p>
		</form>
		<table border="1" class="bordered-table summary">
			<tr>
				<td>Creditable Hours</td>
				<td>88.50</td>
			</tr>
			<tr>
				<td>Night Premium</td>
				<td>0.0</td>
			</tr>
			<tr>
				<td>Total Holidays</td>
				<td>0.0</td>
			</tr>
			<tr>
				<td>Total Overtime</td>
				<td>0.0</td>
			</tr>
			<tr>
				<td>Total Hours</td>
				<td>121.5</td>
			</tr>
		</table>
	</div>
	</div>

<script type="text/javascript">
function changeContent(tablecell)
{
    //alert(tablecell.firstChild.nodeValue);
    tablecell.innerHTML = "<INPUT type=text name=newname onBlur=\"javascript:submitNewName(this);\" value=\""+tablecell.innerHTML+"\">";
    tablecell.firstChild.focus();
}
function submitNewName(textfield)
{
    //alert(textfield.value);
    textfield.parentNode.innerHTML= textfield.value;
}
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script type="text/javascript">
	$(document).ready(function(){
	  $(".night").click(function(){
	    $('#nights').hide();
	  });
	});
</script>

 </script>
</body>
</html>