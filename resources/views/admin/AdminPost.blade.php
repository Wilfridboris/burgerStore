@extends('admin.AdminArea')
@section('Post')
    <div class="post-section">

        <div class="product-section">
                <h1>Product Dashboard</h1>
              <table>

            
                <thead>
              <tr>
                     <th>Product</th>
                     <th>Price</th>
                     <th>Type Product</th>
                     <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach($burgers as $burger)
              <tr>
                    <td> <div><img src="../img/{{$burger->img}}"/> </div> <div>{{$burger->topic}}</div> </td>
                    <td>{{$burger->price}} </td>
                    <td> {{$burger->type_burger}}</td>
                    <td><a href='#'>Update</a>  <a href='#'>Delete</a></td>
              </tr>
              @endforeach
              <tr>
                <a id="newProduct"> Add a New Product</a>
                <a id="newProductType"> Add a New Product Type</a>
              </tr>
              </tbody>
              </table>
          
          
        </div>
            <div class="newProduct toggleMenuLeft" >
                    <form  action="/admin/product" method="POST" enctype="multipart/form-data">
                        @csrf
                    <h1> <i class="fas fa-arrow-circle-left back"></i> Add a new Product</h1>
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
              
                <div class="newProductType  toggleMenuLeft" >
                <form action="/admin/typeproduct" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1> <i class="fas fa-arrow-circle-left back"></i> Add a new Product</h1>
                    <p><label >Type Name</label></p>
                    <p><input type="text" name="type"/> </p>
                   <p><label>Insere a Picture</label></p>
                    <p><input type="file" name="image"/> </p>
                    <p><button type=submit id="saveProduct">Save</button></p>
              </form >
                    
              
              </div>
           
            

               
                
                
           
        
                         
                 
                
                   
                    

    </div>
    
@endsection