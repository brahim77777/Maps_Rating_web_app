<form action="{{route('search')}}" method="post"> 
    @csrf
    <div class="flex flex-row p-5">
        <div class="w-6/12">
            {{--  --}}
            <livewire:search/>
            {{--  --}}
            <div id="address-list"></div>
        </div>
        <div class="w-6/12">
            <select class="p-1 mr-5 bg-gray-200 w-full px-10 rounded-md" name="category">
                <option value="">حدد التصنيف </option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="mr-5">
            <button type="submit" class="py-2 px-5 bg-gray-500 hover:bg-gray-400 text-white mr-5 rounded-md">بحث</button>
        </div>
    </div>
    </form>
    <section class="m-auto text-center">
        <div class="category mt-5">
            <ul>
            @foreach($categories as $category)
            <li>
                <a href="{{route('category.show' ,  $category->slug)}}" class="bg-blue-900 hover:bg-gray-400"> {{ $category->title }}</a>    
            </li>
            @endforeach 
            </ul>
        </div>
    </section>