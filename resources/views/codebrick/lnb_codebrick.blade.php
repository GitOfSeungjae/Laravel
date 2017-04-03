@extends('layouts.layout_lnb')
@section('logo')
	<img src="/yippeeCar.png">
@endsection
@section('menuList')
<table>
	@foreach($menulists as $lnbMenu)
	<tr>
		<td><a href="/{{ $lnbMenu['menu_item_url'] }}/Main" target="mainFrame">{{ $lnbMenu['menu_item_desc'] }}</a> </td>
	</tr>
	@endforeach
</table>
@endsection