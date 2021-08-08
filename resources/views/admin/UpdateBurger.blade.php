 @extends('admin.AdminArea')
 @section('UpdateProduct')
 <div class="newProduct update toggleMenuLeft" >
                    <form  action="/admin/product" method="POST" enctype="multipart/form-data">
                        @csrf
                    <h1> <i class="fas fa-arrow-circle-left back"></i> Update Product</h1>
                    <p><label>Name Product</label></p>
                   <p> <input type="text" name="Product"/> </p>
                   <p> <label>Product Type</label></p>
                    
                     <p><select name="typeProduct">
                            @foreach($type_burgers as $type_burger)
                            <option value={{$type_burger->id}}>{{$type_burger->topic_burger}}</option>
                            @endforeach
                            </select></p>
                    <p><label>Price Product</label></p>
                    <p><input type="text" name="price"/> </p>
                    <p><label>Insere a Picture</label></p>
                    <p><input type="file" name="image"/> </p> 
                    <p><label>The description</label></p>
                    <p><textarea class="product-description" row="5" cols="50" name="description"></textarea></p>
                    <p><button type="submit" id="saveProduct">Save</button></p>
             </form>
                    
              
              </div>
 @endsection