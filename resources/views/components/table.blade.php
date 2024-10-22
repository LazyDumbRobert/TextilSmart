<div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                @foreach ($headers as $header)
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ $header }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($datos as $row)
            <tr>
                @foreach ($headers as $header)
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $row[$header] ?? '' }} 
                    </td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>