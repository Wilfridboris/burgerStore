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
                    <h1> <i class="fas fa-arrow-circle-left back"></i> Add a new Product</h1>
                    <p><label>Name Product</label></p>
                   <p> <input type="text"/> </p>
                   <p> <label>Product Type</label></p>
                    
                     <p><select name="typeChoice">
                            <option value="">FishBurger</option>
                            <option value="">MeatBurger</option>
                            </select></p>
                    <p><label>Price Product</label></p>
                    <p><input type="text"/> </p>
                    <p><label>Insere a Picture</label></p>
                    <p><input type="file"/> </p>
                    <p><label>The description</label></p>
                    <p><textarea class="product-description" row="5" cols="50"></textarea></p>
                    <p><button id="saveProduct">Save</button></p>
                    
              
              </div>
                <div class="newProductType  toggleMenuLeft" >
                    <h1> <i class="fas fa-arrow-circle-left back"></i> Add a new Product</h1>
                    <p><label>Type Name</label></p>
                    <p><input type="text"/> </p>
                   <p><label>Insere a Picture</label></p>
                    <p><input type="file"/> </p>
                    <p><button id="saveProduct">Save</button></p>
                    
              
              </div>
           
            

               
                
                
           
        
                         
                 
                
                   
                    

    </div>
    
@endsection