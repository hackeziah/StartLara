
@if(count($category) > 0)

    <select id="Category" name="Category">
    @foreach ( $category as $cat )
    
    <option value="{{$cat->$categoryname}}">{{$cat->$categoryname}}</option>
    @endforeach
    </select>



@else
no Data 
@endif