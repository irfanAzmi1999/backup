<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sort Product</title>
</head>
<body>

<table class="table table-hover text-nowrap table-bordered">
    <thead class="table-active">
    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Action</th>

        <th>Technical Paper</th>

    </tr>
    </thead>
    <tbody>
    @forelse($posts as $key=>$item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->created_at->diffForHumans()}}</td>
            <td>{{$item->updated_at->diffForHumans()}}</td>
            <td>
                @if(Auth::user()->role == 'staff')
                    @forelse($item->users as $it)
                        @if($it->id == Auth::user()->id)
                            <a href="{{route('displayUpdateProductForm',[$item->id])}}"> <img src="{{ url('images/Admin/editing.png') }}" style="width:30px" alt=""></a> | <a href="#" onclick="deleteProduct('{{ $item->id }}','{{ $item->name }}')" >
                                <img src="{{ url('images/Admin/trash.png') }}" style="width:30px" alt="">
                            </a>
                            |
                            <a href="{{ route('viewProduct',[$item->id]) }}" >
                                <img src="{{ url('images/Admin/view.png') }}" style="width:30px" alt="">
                            </a>
                            <form action="{{ route('deleteProduct',[$item->id,$item->category_id]) }}" method="POST" id="frmDelete{{ $item->id }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        @else
                            No Access
                        @endif
                    @empty
                        No Access
                    @endforelse


                @else
                    <a href="{{route('displayUpdateProductForm',[$item->id])}}"> <img src="{{ url('images/Admin/editing.png') }}" style="width:30px" alt=""></a> | <a href="#" onclick="deleteProduct('{{ $item->id }}','{{ $item->name }}')" >
                        <img src="{{ url('images/Admin/trash.png') }}" style="width:30px" alt="">
                    </a>
                    |
                    <a href="{{ route('viewProduct',[$item->id]) }}" >
                        <img src="{{ url('images/Admin/view.png') }}" style="width:30px" alt="">
                    </a>
                    <form action="{{ route('deleteProduct',[$item->id,$item->category_id]) }}" method="POST" id="frmDelete{{ $item->id }}">
                        @csrf
                        @method('DELETE')
                    </form>
                @endif

            </td>

            <td><a href="{{route('listPaper',['product',$item->id])}}">View</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="6" style="text-align: center">No Data Found</td>
        </tr>
    @endforelse
    </tbody>
</table>

</body>
</html>
