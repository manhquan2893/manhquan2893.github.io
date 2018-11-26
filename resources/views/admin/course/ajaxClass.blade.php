@foreach($course as $cou)
<tr>
	<td>{{$cou->program}}</td>
	<td>{{$cou->level}}</td>
	<td>{{$cou->shift}}</td>
	<td>{{$cou->time}}</td>
	<td>{{$cou->start_date}}</td>
	<td>{{$cou->end_date}}</td>
</tr>
@endforeach