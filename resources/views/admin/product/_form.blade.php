 @csrf
      <div class="form-group">
         <label for="name">Product Name</label>

         <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

         @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
      </div>

      <div class="form-group">
         <label for="slug">Product Slug</label>
         <input type="text" id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{old('slug')}}">
         @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
      </div>

      <div class="form-group">
         <label for="img">Product Image</label>
         <input type="file" id="img" name="img" class="form-control @error('img') is-invalid @enderror">
         @error('img')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
      </div>

      <div class="form-group">
         <label for="prod_cat">Product Category</label>
        
         <select name="prod_cat" id="prod_cat" class="form-control w-50 @error('prod_cat') is-invalid @enderror">
            @foreach($categories as $category)
               <option value="{{$category->id}}">
                  {{ $category->name }}
               </option>
            @endforeach
           
         </select>
         @error('prod_cat')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
      </div>

      <button class="btn btn-primary">Add product</button>