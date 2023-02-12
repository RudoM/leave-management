<div class="testbox">

    <div class="requests">

        <h1 style="width: 100%;text-align:center;color:green;"><u>Leave requests</u></h1>

        <div class="columns">

            @unless($requests->count() > 0)
                <h2>No requests found</h2>
            @else
                <table style="width:100%;">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: start;">
                                <h2>Name</h2>
                            </th>
                            <th scope="col" style="text-align: start;">
                                <h2>Surname</h2>
                            </th>
                            <th scope="col" style="text-align: start;">
                                <h3>Start Date</h3>
                            </th>
                            <th scope="col" style="text-align: start;">
                                <h3>End Date</h3>
                            </th>
                            <th scope="col" style="text-align: start;">
                                <h3>Leave Type</h3>
                            </th>
                            <th scope="col" style="text-align: start;">
                                <h3>Reason</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($requests as $request)
                            <tr>
                                <td>{{ $request->name }}</td>
                                <td>{{ $request->surname }}</td>
                                <td>{{ $request->start_date }}</td>
                                <td>{{ $request->end_date }}</td>
                                <td>{{ $request->type }}</td>
                                <td>{{ $request->reason }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            @endunless
        </div>

        <div class="btn-block">
            <button type="button" style="color: rgb(255, 255, 255);margin-top:20px;" wire:click="apply" <button
                type="submit">Apply</button>
        </div>
    </div>
</div>
