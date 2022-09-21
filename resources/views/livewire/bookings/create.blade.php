<div>
   <div class="card shadow-lg p-3 mb-5 bg-white rounded">
    <div class="card-header text-center">
        <h3>Your Reservation</h3>
    </div>
    <div class="card-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='operator_name'>
            <label for="operator_name">Customer Name</label>
            @error('operator_name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='point_of_origin'>
            <label for="point_of_origin">Departure</label>
            @error('point_of_origin')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='destination'>
            <label for="destination">Type</label>
            @error('destination')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='passenger_name'>
            <label for="passenger_name">Price</label>
            @error('passenger_name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.debounce.500ms='email'>
            <label for="email">Email</label>
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>


        <div class="form-floating mb-3">
           <select name="bus_name" class="form-select" wire:model.defer='bus_name'>
            <option hidden="true">Select Room</option>
            <option selected disabled>Select Room</option>
            <option value="Single Room.">Single Room</option>
            <option value="Double Room">Double Room</option>
            <option value="Triple Room">Triple Room</option>
           </select>
           <label for="bus_name"></label>
           @error('bus_name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
         <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
            <button class="btn btn-primary" type="submit" wire:click='addBooking()'>
                Add Booking
            </button>
         </div>
    </div>
   </div>
</div>
