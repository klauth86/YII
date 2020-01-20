@extends('layouts.app')

@section('content')

<h1>Новый DESCRIPTION</h1>

<div class="row">
	<div class="col">

		{!! Form::open(['route' => 'welcome.step3'], ['class' => 'form']) !!}

		<table id="dynamic_table">
			<tr>
				<td><input name="name[]" type="text" class="form-control input-lg"></input></td>
				<td><button id="add" type="button" >+</button></td>
			</tr>
		</table>	
		
		<div class="form-group">
			{!! Form::submit('Next', ['class' => 'btn btn-info btn-lg', 'style' => 'width: 100%']) !!}
		</div>		

		{!! Form::close() !!}
	</div>
</div>

@endsection

@section('jscontent')
<script>
var i = 1;
document.getElementById("add").addEventListener("click", function()
{
	var table = document.getElementById("dynamic_table");
	var row = table.insertRow(-1);
	row.id = "row" + i;

	// Button column
	var newCell1 = row.insertCell(-1);
	var newInput = document.createElement("input");
	newInput.name = "name[]";
	newInput.type = "text";
	newInput.class = "form-control input-lg";
	newCell1.appendChild(newInput);
	
	// Button column
	var newCell2 = row.insertCell(-1);
	var newButton = document.createElement("button");
	newButton.id = i;
	newButton.innerHTML = '-';
	newButton.type = "button";
	newButton.addEventListener("click", function() {
		var rowToDelete = document.getElementById("row" + newButton.id);
		table.deleteRow(rowToDelete.rowIndex);
	});
	newCell2.appendChild(newButton);
	
	i++;
});
</script>
@endsection

