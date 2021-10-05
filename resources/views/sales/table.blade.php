<div class="table-responsive">
    <table class="table" id="sales-table">
        <thead>
            <tr>
                <th>Super Sale</th>
        <th>Best Sale</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sales as $sale)
            <tr>
                <td>{{ $sale->Super_Sale }}</td>
            <td>{{ $sale->Best_Sale }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['sales.destroy', $sale->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sales.show', [$sale->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sales.edit', [$sale->id]) }}" class='btn btn-default btn-xs'>
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
