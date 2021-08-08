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
                    <td> 
                    <div class="product-image">
                    <img src="../img/{{$burger->img}}"/>
                      
                      <a  id="update" class="update-image"><i class="fas fa-pencil-alt"></i></a>
                      <div class="update_product">
                      <a id='back'><i class="fas fa-arrow-circle-left back"></i></a>
                      <form action="{{route('productImageUpdate',$burger->id)}}" method="POST" enctype="multipart/form-data"> 
                            @csrf
                           @method('PATCH')
                        <p><label>Change the Image</label></p>
                      <p>
                      <input type="file" name="image"/>
                      <p>
                      <p>  <button type="submit">OK</button></p>
                            
                         
                        </form> 
                      
                      </div>
                    
                       
                     
                     
                    </div>
                     <div>{{$burger->topic}} 
                     </div>
                      <a id="update"><i class="fas fa-pencil-alt"></i></a>
                      <div class="update_product">
                      <a id='back'><i class="fas fa-arrow-circle-left back"></i></a>
                      <form action="{{route('productTopicUpdate',$burger->id)}}" method="POST" > 
                            @csrf
                           @method('PATCH')
                        <p><label>Change the name</p>
                      <p>
                      <input type="text" name="topic"/>
                      <p>
                      <p>  <button type="submit">OK</button></p>
                            
                         
                        </form> 
                      
                      </div>
                    </td>
                    <td >{{$burger->price}} <a id="update_price" ><i class="fas fa-pencil-alt"></i></a> </td>
                    <td> {{$burger->type_burger}}</td>
                    <td>
                        <form action="{{route('productDestroy',$burger->id)}}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form> 
                    
                    </td>
              </tr>
              @endforeach
              <tr>
                <button id="newProduct"> Add a New Product</button>
                <button id="newProductType"> Add a New Product Type</button>
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
             

              
               <div class="product-section">
                <h1>Type Dashboard</h1>
              <table>

            
                <thead>
              <tr>
                     <th>Type</th>
                     <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach($type_burgers as $type_burger)
              <tr>
                    <td> 
                    <div class="product-image">
                    <img src="../img/{{$type_burger->img_burger}}"/> 
                    <a class="update-iamge" id="update_price" ><i class="fas fa-pencil-alt"></i></a>
                    </div>
                     <div>{{$type_burger->topic_burger}} <a id="update_type_topic" ><i class="fas fa-pencil-alt"></i></a>
                     </div>
                      </td>
                    <td>
                        <form action="{{route('typeDestroy',$type_burger->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form> 
                        
                    </td>
              </tr>
              @endforeach
              {{-- <tr>
                <a id="newProduct"> Add a New Product</a>
                <a id="newProductType"> Add a New Product Type</a>
              </tr> --}}
              </tbody>
              </table>
          
          
        </div>
     
              
          
           
            

               
                
                
           
        
                         
                 
                
                   
                    

    </div>
    
@endsection