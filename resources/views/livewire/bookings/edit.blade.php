
<div>
    <div class="container">
    <div class="card">
     <div class="card-header">
         <h3>Edit Booking</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='operator_name'>
             <label for="operator_name">Operator Name</label>
             @error('operator_name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>
 
         {{-- <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.debounce.500ms='bus_name'>
             <label for="bus_name"></label>
             @error('bus_name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div> --}}
 
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
            <select name="bus_name" class="form-select" wire:model.defer='bus_name'>
             <option hidden="true">Select Room/option>
             <option selected disabled>Select Room</option>
             <option value="Single Room.">Single Room</option>
             <option value="Double Room">Double Room</option>
             <option value="Triple Room">Triple Room</option>
            </select>
            <label for="bus_name">Room Name</label>
            @error('bus_name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>
          <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
            <button class="btn btn-primary" wire:click="editBooking()">
                Save Changes
            </button>
            <button class="btn btn-danger mx-2" wire:click="back()">
                back
            </button>
        </div>
     </div>
    </div>
 </div>
 
</div>
