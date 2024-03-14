<?php

namespace App\Livewire;

use App\Models\BookingList as ModelsBookingList;
use Carbon\Carbon;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class BookingList extends Component
{
    use WithPagination;

    public $today , $tomorrow;

    #[Url]
    public ?string $query = null;

    #[Url()]

    public int $rowPerPage = 10;
    public array $pageRow = [5, 10, 15, 30, 50, 100];

    public $filter ="upcoming";

    public function render()
    {
        if($this->filter == "upcoming"){
            $this->query = null;
            $this->today = ModelsBookingList::whereDate('start_time',Carbon::today()->format('Y-m-d'))->get();
            $this->tomorrow = ModelsBookingList::whereDate('start_time',Carbon::tomorrow()->format('Y-m-d'))->get();
        }
        else{
            $filterValue = ($this->filter == "completed") ? 1 : 0;
            $list = ModelsBookingList::query()
            ->when(in_array($this->filter,['completed','cancelled']), function ($query) use ( $filterValue) {
                $query->where('status',$filterValue);
            })
            ->when($this->query, function ($query, $search) {
                $query->WhereDate('start_time', $search)
                ->WhereDate('end_time', $search);
            })
            ->latest()
            ->paginate($this->rowPerPage);
        }


        return view('livewire.booking-list',[
            'list' => $list ?? []
        ]);
    }

    public function applyFilter($filter)
    {
        $this->reset();

        $this->filter = $filter;
    }

    public function resetForm()
    {
        $this->reset();
    }
}
