<tr>
    <th scope="row">{{ $news->id }}</th>
    <td>{{ $news->title }}</td>
    <td>{{ $news->author->name }}</td>
    <td>{{ $news->created_at }}</td>
    <td>{{ $news->updated_at }}</td>
</tr>
