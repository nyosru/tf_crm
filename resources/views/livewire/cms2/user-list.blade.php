<div>

    {{--    <pre style="max-height: 100px; font-size: 10px; overflow: auto;">{{ print_r($users->toArray()) }}</pre>--}}
    <table class="table-auto">
        <thead>
        <tr>
            @foreach( array_keys($users->toArray()[0]) as $k => $v )
                <th class="bg-white p-2">{{ $v }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach( $users->toArray() as $k => $v )
            <tr class="bg-zinc-100 hover:bg-zinc-300">
                @foreach( array_keys($users->toArray()[0]) as $k1 => $v1 )
                    <td class=" p-2">{{ $v[$v1] ?? '-' }}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
