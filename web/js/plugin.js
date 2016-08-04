function addRow(tableID)
{
	var table = document.getElementById(tableID);
	var row = table.insertRow(table.rows.length);
	for (var i = 0; i < table.rows[0].cells.length; i++)
	{
		var newcell = row.insertCell(i);
		newcell.innerHTML = table.rows[0].cells[i].innerHTML;
	}
}

function deleteRow(tableID)
{
	var table = document.getElementById(tableID);
	if (table.rows.length > 1)
	{
		table.deleteRow(table.rows.length - 1);
	}
}

function toggleDisplay(itemID)
{
	var item = document.getElementById(itemID);
	if (item.style.display === "none")
	{
		item.style.display = "inline-block";
	} else
	{
		item.style.display = "none";
	}
}
