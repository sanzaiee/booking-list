<div class="container table-responsive py-5">
    <u><h6>Today</h6></u>
    <table class="table table-bordered table-hover table-striped">
        <tbody>
            @foreach ($today as $index => $item)
                @include('livewire.components.table-data')
            @endforeach
        </tbody>
    </table>

</div>


<div class="container table-responsive py-5">
    <u><h6>Tomorrow</h6></u>
    <table class="table table-bordered table-hover table-striped">
        <tbody>
            @foreach ($tomorrow as $index => $item)
                 @include('livewire.components.table-data')
            @endforeach
        </tbody>
    </table>
</div>
