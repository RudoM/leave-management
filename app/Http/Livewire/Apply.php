<?php

namespace App\Http\Livewire;

use App\Models\Request;
use Livewire\Component;

class Apply extends Component
{
    public $name, $surname, $reason, $startDate, $endDate, $leaveType, $leaveTypes = [
        'Annual Leave',
        'Sick Leave',
        'Maternity Leave',
        'Paternity Leave',
        'Study Leave',
        'Compassionate Leave',
        'Unpaid Leave',
        'Other'
    ];

    public function submitRequest()
    {
        $this->validate([
            'name' => 'required',
            'surname' => 'required',
            'reason' => 'required',
            'startDate' => 'required|date|after_or_equal:today',
            'endDate' => 'required|date|after_or_equal:startDate',
            'leaveType' => 'required'
        ]);

        $isRequested = Request::create([
            'name' => $this->name,
            'surname' => $this->surname,
            'reason' => $this->reason,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
            'type' => $this->leaveType
        ]);

        //Reset all fields
        $this->name = '';
        $this->surname = '';
        $this->reason = '';
        $this->startDate = '';
        $this->endDate = '';
        $this->leaveType = '';

        if (!$isRequested) {
            return back()->with('error', 'Something went wrong');
        }


        return back()->with('success', 'Request successfully submitted');
    }
    public function render()
    {
        return view('livewire.apply');
    }
}