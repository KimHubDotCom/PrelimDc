<div>
    <table class="table table-striped text-center mt-4 shadow-lg p-3 mb-5 bg-white rounded">
        <thead class="table table-bordered">
            <tr>
                <th>Customer_Name</th>
                <th>Rooms</th>
                <th>Departure</th>
                <th>Type</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->operator_name }}</td>
                    <td>{{ $booking->bus_name }}</td>
                    <td>{{ $booking->point_of_origin }}</td>
                    <td>{{ $booking->destination }}</td>
                    <td>{{ $booking->passenger_name }}</td>
                    <td>
                        <a href="{{ url('edit', ['booking' => $booking->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['booking' => $booking->id]) }}" class="btn btn-sm btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

