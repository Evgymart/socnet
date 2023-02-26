{% extends 'layouts/main.volt' %}

{% block head %}
	<link rel='stylesheet' href='assets/css/register.css' />
{% endblock %}
{% block content %}
<div id="register-form">
	<form action="/register" method="POST">
		<p>
			<input type="text" id="fname" name="fname" value="" placeholder="First name">
		</p>
		<p>
			<input type="text" id="lname" name="lname" value="" placeholder="Last name">
		</p>
		<p>
			<label for="birthdate">Birthdate:</label>
			<input type="date" id="birthdate" name="birthdate">
		</p>
		<p>
			<label for="gender">Gender:</label>
			<select name="gender">
				<option value="none">Not specified</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
		</p>
		<p>
			<input type="text" id="city" name="city" placeholder="City">
		</p>
        <p class="full-width">
			<label for="interests">Interests</label>
			<textarea name="interests" id="interests" rows="7"></textarea>
        </p>
		<p class="btn">
			<input type="submit" value="Submit">
		</p>
	</form>
</div>
{% endblock %}
