<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>

    <div class="container-scroller">
    @include("admin.navbar")

    <div style="position: relative; top:60px; right: -150px;">
        <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">

            {{-- untuk upload data kedalam database --}}
            @csrf

            <div>
                <label>Title</label>
                <input type="text" name="title" placeholder="title "  style="color:blue" required>
            </div>

            <div>
                <label>Price</label>
                <input type="num" name="price" placeholder="price "  style="color:blue" required>
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image" required>
            </div>

            <div>
                <label>Description</label>
                <input type="text" name="description" placeholder=" description"  style="color:blue" required>
            </div>

            <div>
                <input type="submit" value="Save" style="color: black"> 
            </div>
        </form>

        

    </div>
        
    </div>

    @include("admin.adminscript")
    
    
  </body>
</html>