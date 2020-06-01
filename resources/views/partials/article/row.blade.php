<tr>
    <th scope="row">{{ $article->id }}</th>
    <td>{{ $article->title }}</td>
    <td>{{ $article->author->name }}</td>
    <td>{{ $article->created_at }}</td>
    <td>{{ $article->updated_at }}</td>
</tr>
