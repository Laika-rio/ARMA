<x-layout>
    <x-slot name="title">
        ARMA
    </x-slot>

    {{--  検索窓を上部につけておきたい --}}
    <h1>My Score<a href=""><span style="color: red; float: right;">[Add to data]</span></a></h1>
    <p>▷ Search Menu</p>
        <div class="menu_bar">
            <button onclick="location.href=''">年別</button>
            <button onclick="location.href=''">曲名</button>
            <button onclick="location.href=''">歌手名</button>
            <button onclick="location.href=''">レート</button>
            <button onclick="location.href=''">ジャンル</button>
        </div>
    <p>▷ Test</p>
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
