@extends("layouts._layout")

@section("title", "Accounts Table (Database)")

@section("content")
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Active</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accounts as $account)
                <tr>
                    <td>{{ $account->fullname }}</td>
                    <td>{{ $account->email }}</td>
                    <td>{{ $account->gender }}</td>
                    <td>{{ $account->active }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="list-group">
    @foreach($items as $item)
    <div class="list-group-item list-group-item-action {{ $item->id==1?'active':'' }}">
        <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $item->name }}</h5>
        <small>{{ $item->iso2 }}</small>
        </div>
    </div>
    @endforeach
</div>

@endsection
