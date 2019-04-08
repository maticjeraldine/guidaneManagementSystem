<table class="table table-hover">

    <thead>

      <th>Username</th>

      <th>Orders</th>

      <th>Balance</th>

    </thead>

    <tbody>
		@foreach($profiles as $profile)

		        <tr>

		          <td>{{$profile->first_name}} </td>

		        </tr>
		@endforeach

    </tbody>

</table>