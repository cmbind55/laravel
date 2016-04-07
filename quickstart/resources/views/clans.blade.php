@extends('layouts.app')

@section('content')
    <!-- Create Task Form... -->

    <!-- Current Tasks -->
    @if (count($clans) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Clan</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        <!-- @foreach ($clans as $clan) -->
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <!-- @foreach($clans->data as $clan) -->
                                        <ul>
                                            <li>
                                                Clanname: {{ $clans->data->name }}
                                            <br>
                                                Members: {{ $clans->data->members }}
                                            <br>
                                                $leaders = $clans->getLeaders();
                                                @foreach($leaders as $leader)
                                                Leader Name: {{ $leader->name }}
                                                @endforeach
                                            </li>
                                        </ul>
                                    <!-- @endforeach -->
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                </td>
                            </tr>
                        <!-- @endforeach -->
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection