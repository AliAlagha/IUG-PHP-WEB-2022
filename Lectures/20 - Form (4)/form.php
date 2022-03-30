<!DOCTYPE html>
<html>
<head>
	<title>Forms - 1</title>
	<!-- 
	- Include jQuery library from CDN link

	We will use it to show confirm dialog when Save button is clicked by the user.  
	-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<p>Submit a form using the "post" method</p>
	<!--
	Passing variables with data between pages using URL

	Here is an example of passing data (GET parameter) through URL

	- When the form is submitted, action.php gets the variable id with data 123456.  
	-->
	<form id="my-form" action="actions/action.php?id=123456" method="POST">
		Name: <input type="text" name="name"><br>
		Email: <input type="text" name="email"><br>
		<button id="save-btn" type="button">Save</button>  
	</form>
</body>
</html>

<script type="text/javascript">
	$('#save-btn').click(function (event) {
		event.preventDefault();

		/*
		The confirm() method displays a dialog box with a message, an OK button, and a Cancel button.

		The confirm() method returns true if the user clicked "OK", otherwise false.
		*/
		var result = confirm("Are you sure?");

		/*
		If the user clicks the OK button, the form will be submitted, but if he clicks the Cancel button, the form will not be submitted.
		*/
		if (result == true) {
			$('#my-form').submit();
		}
	});
</script>