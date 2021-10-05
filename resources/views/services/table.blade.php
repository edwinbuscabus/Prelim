<div class="table-responsive">
    <table class="table" id="services-table">
        <thead>
            <tr>
                <th>Fast Delivery</th>
        <th>Super Taste</th>
        <th>Contact Us</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->Fast_Delivery }}</td>
             <td>{{ $service->Super_Taste }}</td>
             <td>{{ $service->Contact_Us }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('services.show', [$service->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('services.edit', [$service->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
