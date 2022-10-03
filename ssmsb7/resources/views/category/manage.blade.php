<table>
    <tr>
        <th>SL NO</th>
        <th>Category Name</th>
        <th>Category Description</th>
        <th>Category Image</th>
        <th>Action</th>
    </tr>

    @foreach($categories as $category)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td><img src="{{asset($category->image)}}" alt="" height="150" width="200"></td>
            <td>
                <a href="{{route('category.edit', $category->id)}}">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
