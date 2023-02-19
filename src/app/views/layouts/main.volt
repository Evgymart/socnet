{# main.volt #}
<!DOCTYPE html>
<html lang="en">
<head>
	<title> {{ this.tag.title().get() }} </title>
	<meta charset="UTF-8">
</head>
<body>
	{% block content %}{% endblock %}
</body>
</html>
