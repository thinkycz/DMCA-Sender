@extends('app')

@section('content')

<h1 class="page-heading">List of notices</h1>

        <table class="table table-striped table-bordered">
            <thead>
                <th class="text-center">Title</th>
                <th class="text-center">Infringing Link</th>
                <th class="text-center">Original Link</th>
                <th class="text-center">Notice Sent</th>
                <th class="text-center">Content Removed</th>
            </thead>
            <tbody>
                @foreach($notices as $notice)
                    <tr>
                        <td>
                            {{ $notice->infringing_title }}
                        </td>
                        <td>
                            {{ $notice->infringing_link }}
                        </td>
                        <td>
                            {{ $notice->original_link }}
                        </td>
                        <td>
                            {{ $notice->created_at->diffForHumans() }}
                        </td>
                        <td>
                            <input type="checkbox" {{ $notice->content_removed ? 'checked' : '' }}>
                            <input type="submit" value="Save" class="btn btn-primary btn-sm">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


@stop