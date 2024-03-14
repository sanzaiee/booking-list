<tr>
    <td>
        <span class="d-flex flex-column">
            <span>{{ $item['name'] }}</span>
            <small>{{ $item['email'] }}</small>
        </span>

    </td>
    <td>
        <span class="d-flex flex-column">
            <span>{{ \Carbon\Carbon::parse($item['start_time'])->format('d M, Y') }}</span>
            <span class="small">{{ \Carbon\Carbon::parse($item['start_time'])->format('h:i A') }}</span>
        </span>
    </td>
    <td>
        <span class="d-flex flex-column">
           <span> {{ \Carbon\Carbon::parse($item['end_time'])->format('d M, Y') }}</span>
            <span class="small">{{ \Carbon\Carbon::parse($item['end_time'])->format('h:i A') }} </span>
        </span>
    </td>
    <td>{{ ($item['status']) ? 'Confirm' : 'Pending' }}</td>
</tr>
