<x-layout>
    <x-slot name="title">
        Add to DATA
    </x-slot>

    <h1>Add Data<a href="{{ route('index') }}"><span style="color: gray; float: right; font-size: 15px;">[Back]</span></a></h1>

        <form class="add_data" method="post" action="">
            @csrf

            <label>
                Song<br>
                <input type="text" name="song"><br>
            </label>
            <label>
                Singer<br>
                <input type="text" name="singer"><br>
            </label>
            <label>
                Score<br>
                <input type="text" name="score">点<br>
            </label>

            <label>
            Date<br>
            Y : <input type="text" name="year" style=" width: 36px; ">
            M : <select name="month">
                @for($i = 1; $i < 13; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
                </select>　
            D : <select name="day">
                @for($i = 1; $i < 32; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
                </select>
            </label>
            <label>
            Genre<br>
                <select name="genre">
                    <option value="Anime">アニソン<option>
                    <option value="j-song">邦楽<option>
                    <option value="en-song">洋楽<option>
                </select>
            </label>
            <label>
            Rate<br>
                <select name="rate">
                    <option value="☆☆">要練習（☆×２）</option>
                    <option value="☆☆☆">あと一息（☆×３）</option>
                    <option value="☆☆☆☆☆">完璧（☆×５）</option>
                </select>
            </label>
            <label>
            Comment　<br>
                <textarea name="comment"></textarea><br>
            </label>

                                        <p>

                                            <input class="submi_button" type="submit" style="width: 200px;" value="登録">
                                        </form>

</x-layout>
