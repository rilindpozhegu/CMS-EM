@extends('admin.layouts.main')
@section('body')
    <!-- Page Content -->

<div class=" col-md-6 pull-right">
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Created_At</th>
            <th>Updated_At</th>
            <th>Action</th>


        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Created_At</th>
            <th>Updated_At</th>
            <th>Action</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td>{{($blog->id)}}</td>
                <td>{{($blog->title)}}</td>
                <td>{{($blog->created_at)}}</td>
                <td>{{($blog->updated_at)}}</td>
                <td> <a href="{{ URL::to('blog/' . $blog->id) }}"> <button >Edit</button></a>
                    <a href="{{ URL::to('delete/blog/' . $blog->id) }}"> <button >Delete</button></a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>


@endsection

