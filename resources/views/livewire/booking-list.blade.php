<div>
    <div class='row'>
        <div class='col-md-12'>
            <div class="card m-3" style="background: #dbdbdb">
                <h6 class="m-3">Booking</h6>
                <div class="card-header d-flex justify-content-center">
                    <span class="m-3 badge  @if($filter == "upcoming") bg-primary @else bg-secondary @endif" wire:click="applyFilter('upcoming')">Upcoming Bookings</span>
                    <span class="m-3 badge @if($filter == "completed") bg-primary @else bg-secondary @endif" wire:click="applyFilter('completed')">Completed Bookings</span>
                    <span class="m-3 badge @if($filter == "cancelled") bg-primary @else bg-secondary @endif" wire:click="applyFilter('cancelled')">Cancelled Bookings</span>
                    @if($filter != "upcoming")
                        <input
                            type="date"
                            class="form-control m-3"
                            placeholder="Search ..."
                            wire:model.live.debounce.500ms="query"
                        >
                    @endif
                    <button type="button" class="btn btn-info m-3" wire:click="resetForm">Reset</button>
                </div>
                <div class="card-body">
                    @if($filter == "upcoming")
                        @include('livewire.components.upcoming')
                    @else
                        <div class="container table-responsive py-5">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    @foreach ($list as $index => $item)
                                        @include('livewire.components.table-data')

                                    @endforeach
                                </tbody>
                            </table>
                            {{ $list->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
