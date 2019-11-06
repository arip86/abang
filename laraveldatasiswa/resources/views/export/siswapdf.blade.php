<table class="table" style="border:1px solid #ddd">
	<thead>
		<tr>
			<th>Nama depan</th>
			<th>Nama belakang</th>
			<th>Jenis kelamin</th>
			<th>Agama </th>
			<th>Alamat</th>
		</tr>
	</thead>

	<tbody>
		@foreach($siswa as $s)
		<tr>
			<td> {{$s->nama_depan}} </td>
			<td> {{$s->nama_belakang}} </td>
			<td> {{$s->jenis_kelamin}} </td>
			<td> {{$s->agama}} </td>
			<td> {{$s->alamat}} </td>
		</tr>
		@endforeach
	</tbody>
</table>