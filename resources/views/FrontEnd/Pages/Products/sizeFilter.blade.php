



{{--    <div class="select-wrapper">--}}
{{--        <select name="values[]" class="variantsSelect">--}}
{{--            <option value="">انتخاب کنید</option>--}}
{{--            @if(isset($sizes))--}}
{{--                @foreach($sizes as $size)--}}
{{--                    <option value="{{$size->variantsId}}">{{$size->sizeName}}</option>--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--        </select>--}}
{{--    </div>--}}




    <div class="d-flex align-items-center justify-content-between">
        <label>سایز (عددی):</label>
    </div>
    <div class="select-wrapper">
        <select name="values[]" class="variantsSelect">
            <option value="">انتخاب کنید</option>
                @if(isset($sizes))
                    @foreach($sizes as $size)
                        <option value="{{$size->variantsId}}">{{$size->sizeName}}</option>
                    @endforeach
                @endif
        </select>
    </div>
