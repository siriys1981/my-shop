 @csrf
      <div class="form-group">
         <label for="name">Category Name</label>

         <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

         @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
      </div>

      <div class="form-group">
         <label for="slug">Category Slug</label>
         <input type="text" id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{old('slug')}}">
         @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
      </div>

      <div class="form-group">
         <label for="img">Category Image</label>
         <input type="file" id="img" name="img" class="form-control @error('img') is-invalid @enderror">
         @error('img')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
      </div>

      <button class="btn btn-primary">Save</button>