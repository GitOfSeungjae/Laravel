@extends('layouts.layout_main')
@section('mainTitle')
<table width="100%" border="1">
	<tr>
		<td>Inventory List</td>
	</tr>
</table>
@endsection
@section('mainFilters')
<form id='filter'>
<table>
	<tr>
		<td>No</td><td><input     name = "ft_id" type="text"/></td>
		<td>Vin#</td><td><input   name = "ft_vinNo" type="text"/></td>
		<td>Model</td><td><input  name = "ft_model" type="text"/></td>
		<td/>
	</tr>
	<tr>
		<td>Make</td><td><input   name = "ft_make" type="text"/></td>
		<td>Year</td><td><input   name = "ft_year" type="text"/></td>
		<td>MSPR</td><td><input   name = "ft_mspr" type="text"/></td>
		<td/>
	</tr>
	<tr>
		<td>Status</td><td><input name = "ft_status" type="text"/></td>
		<td>Booked</td><td><input name = "ft_booked" type="text"/></td>
		<td>Listed</td><td><input name = "ft_listed" type="text"/></td>
		<td>&nbsp;&nbsp;&nbsp;<input id="filtering" type="button" value="Filtering"/></td>
	</tr>
</table>
</form>
@endsection
@section('mainLists')
<div id="dynamic">
<table width="100%" id="dataTable">
     <tr>
     	<td>
     	<td>No</td>
     	<td>Vin#</td>
     	<td>Model</td>
     	<td>Make</td>
     	<td>Year</td>
     	<td>MSPR</td>
     	<td>Status</td>
     	<td>Booked</td>
     	<td>Listed</td>
     </tr>
	@foreach($carlists as $car)
	<tr id="{{ $car['id'] }}">
	    <td><input name="chk" type="checkbox"/></td>
		<td>{{ $car['id'] }}</td>
		<td>{{ $car['vin_no'] }}</td>
		<td>{{ $car['model'] }}</td>
		<td>{{ $car['make'] }}</td>
		<td>{{ $car['year'] }}</td>
		<td>{{ $car['mspr'] }}</td>
		<td>{{ $car['status'] }}</td>
		<td>
			@if($car['booked'] == 1) Y 
		     @else N 
		     @endif
		 </td>
		<td>
			@if($car['listed'] == 1) Y 
		     @else N 
		     @endif
		</td>
	</tr>
	@endforeach
</table>
</div>
@endsection
@section('mainFooter')
<table border="1">
	<tr>
		<td width="20px" align="center" id="add_row">+</td>
		<td width="20px" align="center" id="delete_row">-</td>
		<td align="center"><input type="file" /></td>
	</tr>
</table>
<script src="//code.jquery.com/jquery.min.js"></script>
<script>
  $('#add_row').click(function() {
    var time = new Date().toLocaleTimeString();
    $('#dataTable > tbody:last').append('<tr><td><input name="chk" type="checkbox"/></td><td><input type="text" readonly/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td><td><input type="text"/></td></tr>');
  });
  $('#delete_row').click(function(){
  var $obj = $("input[name='chk']");
  var checkCount = $obj.size();
  for (var i=0; i<checkCount; i++){
   if($obj.eq(i).is(":checked")){
   $obj.eq(i).parent().parent().remove();
   }
  }
 });

      $('#filtering').click(function(){
        $.ajax({
            url:'/inventory/Filtering',
            type:'GET',
            data:$('form').serialize(),
            success:function(data){
                $('#dynamic').html(data);
            }
        })
    })
</script>
@endsection