<div class="testbox">

    <form wire:submit.prevent="submitRequest">


        @if (Session::has('success'))
            <div class="item"
                style="background-color: green;color:white;padding:10px;border-radius:10px;text-align:center;"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        @if (Session::has('error'))
            <div class="item"
                style="background-color: red;color:white;padding:10px;border-radius:10px;text-align:center;"
                role="alert">
                {{ Session::get('error') }}
            </div>
        @endif


        <fieldset>
            <legend>Leave request form</legend>

            <div class="columns">
                <div class="item">
                    <label>First Name<span>*</span></label>
                    <input type="text" class="form-control" wire:model="name" />

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="item">
                    <label for="lname"> Last Name<span>*</span></label>
                    <input type="text" class="form-control" wire:model="surname" />

                    @error('surname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="item">
                    <label for="checkindate">Start Date <span>*</span></label>
                    <input id="checkindate" type="date" class="form-control" wire:model="startDate" />

                    @error('startDate')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="item">
                    <label for="checkoutdate">End Date <span>*</span></label>
                    <input id="checkoutdate" type="date" class="form-control" wire:model="endDate" />

                    @error('endDate')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <i class="fas fa-calendar-alt"></i>
                </div>


                <div class="item">
                    <p>Type of leave?</p>
                    <select style="width: 100%;" class="form-control" wire:model="leaveType">
                        <option value="" selected>-- --</option>

                        @for ($i = 0; $i < count($leaveTypes); $i++)
                            <option value="{{ $leaveTypes[$i] }}">{{ $leaveTypes[$i] }}</option>
                        @endfor

                    </select>

                    @error('leaveType')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="item">
                    <label for="instruction">Reason for leave</label>
                    <textarea id="instruction" rows="3" wire:model="reason"></textarea>

                    @error('reason')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
            </div>
        </fieldset>
        <div class="btn-block">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
