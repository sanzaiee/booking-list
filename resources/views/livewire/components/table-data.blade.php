<tr>
    <td>
        <span>{{ $item['name'] }}</span>
        <small>{{ $item['email'] }}</small>
    </td>
    <td>
        {{ \Carbon\Carbon::parse($item['start_time'])->format('d M, Y') }}
        {{ \Carbon\Carbon::parse($item['start_time'])->format('h:i A') }}
    </td>
    <td>
        {{ \Carbon\Carbon::parse($item['end_time'])->format('d M, Y') }}
        {{ \Carbon\Carbon::parse($item['end_time'])->format('h:i A') }}
    </td>
    <td>{{ ($item['status']) ? 'Confirm' : 'Pending' }}</td>
</tr>
