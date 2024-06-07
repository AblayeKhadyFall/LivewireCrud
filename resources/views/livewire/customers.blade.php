<div>
    <div class="row">
        <div class="col-auto">
            <button wire:navigate href="/customers/create" class="btn btn-success sm">Create</button>
        </div>
        <div class="col-auto">
            <input wire:model.live.debounce.150ms="search" type="text" class="form-control" name="" id="" placeholder="search customers">
        </div>
    </div>
    <livewire:flash-message />
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <button wire:navigate class="btn btn-primary btn-sm"
                            href="/customers/{{ $customer->id }}">View</button>
                        <button wire:navigate class="btn btn-secondary btn-sm"
                            href="/customers/{{ $customer->id }}/edit">Edit</button>
                        <button wire:click="deletecustomer({{ $customer->id }})"
                            class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$customers->links()}}
</div>
