<div class="row">
            <div class="input-field col s12">
                <select  multiple name="city[]" id="city" class="form-control" required/>
                    <option  disabled>Choose City</option>
                    @foreach($city_list as $item)
                    <option  value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
                </select>
                <label>Select City</label>
            </div> 
        </div> 