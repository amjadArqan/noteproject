<html>

<head>
    <title>note</title>
</head>
<bod>
    @if(session('error'))
        <div class="alert alert-danger" style="margin: 50px; background-color: red;">
            {{session('error')}}
        </div>
    @elseif(session('success'))
        <div class="alert alert-success" style="background-color: darkseagreen; margin: 50px">
            {{session('success')}}
        </div>
    @endif
    <form action="{{route('store')}}" method="post" style="margin: 100px">
        @csrf
        <div style="text-align: center; margin: 10px" >
            <H5>Note title</H5>
            <input type="text" name="n_title" style="width: 380px" required>

        </div>
        <div style="text-align: center;">
            <H5>Note content</H5>
            <textarea rows="4" cols="50" name="n_content"required>
</textarea>

        </div>
        <div style="text-align: center; margin: 20px">
        <button type="submit"> Enter</button>
        </div>
    </form>

        <table class="table table-bordered" border="1px" style="text-align: center;width: 50% ; margin-left: 300px;">
            <thead>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Note Title
                </th>
                <th>
                    Note content
                </th>
                <th>

                    Note added                                </th>

            </tr>
            </thead>
            <tbody>
            @foreach($note as $note)

                <tr>
                    <td class="font-weight-medium">
                        {{$note->id}}
                    </td>
                    <td>
                        {{$note->n_title}}

                    </td>
                    <td>
                        {{$note->n_content}}
                    </td>
                    <td>
                        {{$note->created_at}}
                    </td>

                </tr>
            @endforeach
            </tbody>

        </table>

</bod>
</html>