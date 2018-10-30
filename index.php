<table>
	<tr>
		<th>Nome</th>
		<th>Sobrenome</th>
		<th>Título Trabalho</th>
	</tr>
	<tbody id="data"></tbody>
</table>

<script>
	var ajax = new XMLHttpRequest();
	var method = "GET";
	var url = "data.php";
	var asynchronous = true;

	ajax.open (method, url, asynchronous);
	ajax.send();

	ajax.onreadystatechange = function ()
{
	if (this.readyState == 4 && this.status == 200)
	{
	//conversing JSON in array
	var data = JSON.parse(this.responseText);
	console.log(data);


	//html value for <tbody>
	var html = "";

	for (var a = 0; a < data.length; a++){
		var firstName = data[a].FirstName;

		html += "<tr>";
			html +="<td>" + firstName + "</td>";
				html += "</tr>";


				document.getElementById("data").innerHTML = html;
	}	
	}
}
		


</script>