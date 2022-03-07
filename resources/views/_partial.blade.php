<table class="table table-success table-bordered table-striped table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    @php $i = 1; @endphp
    @foreach($users as $user)
        <tr>
            <th scope="row">{{ $i++ }}</th>
            <td> {{  $user->name }}</td>
            <td> {{  $user->email }}</td>
            <td> {{  $user->status }}</td>
        </tr>
    @endforeach

    </tbody>
</table>
