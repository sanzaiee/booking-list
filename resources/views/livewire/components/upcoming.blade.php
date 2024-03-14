<div class="container table-responsive py-5">
    <h6>Today</h6>
    <table class="table table-bordered table-hover">
        <tbody>
            @foreach ($today as $index => $item)
                @include('livewire.components.table-data')
            @endforeach
        </tbody>
    </table>

</div>


<div class="container table-responsive py-5">
    <h6>Tomorrow</h6>
    <table class="table table-bordered table-hover">
        <tbody>
            @foreach ($tomorrow as $index => $item)
                 @include('livewire.components.table-data')
            @endforeach
        </tbody>
    </table>

</div>
