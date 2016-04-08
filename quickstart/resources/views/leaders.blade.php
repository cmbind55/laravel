@extends('layouts.app')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>tag</th>
                <th>Name</th>
                <th>role</th>
                <th>XP</th>
                <th>league</th>
                <th>trophies</th>
                <th>clan Rank</th>
                <th>Previous Rank</th>
                <th>donations</th>
                <th>Donations Received</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'tag', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'role', name: 'email' },
            { data: 'expLevel', name: 'expLevel' },
            { data: 'league', name: 'league' },
            { data: 'trophies', name: 'trophies' },
            { data: 'clanRank', name: 'clanRank' },
            { data: 'previousClanRank', name: 'previousClanRank' },
            { data: 'donations', name: 'donations' },
            { data: 'donationsReceived', name: 'donationsReceived' }
        ]
    });
});
</script>
@endpush