<x-layout>
    <x-slot name="title">
        ARMA
    </x-slot>

    {{--  検索窓を上部につけておきたい --}}
    <h1>My Score<a href=""><span style="color: red; float: right; font-size: 15px; ">[Add to data]</span></a></h1>
    <br>
    <p>▷▷ Search Menu</p>
        <div class="menu_bar">
            <button onclick="location.href=''">YEAR</button>
            <button onclick="location.href=''">SONG</button>
            <button onclick="location.href=''">SINGER</button>
            <button onclick="location.href=''">RATE</button>
            <button onclick="location.href=''">JUNRE</button>
        </div>
    <br>
    <p>▷▷ Test</p>
    {{-- <ul>
        @forelse ($years as $year)
            <li>
                <a href="{{ route('lists.show', $year->year) }}">
                {{ $year->year }}
                </a>
            </li>
        @empty
            <li>not exist</li>
        @endforelse
    </ul> --}}
</x-layout>
