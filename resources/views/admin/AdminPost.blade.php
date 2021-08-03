@extends('admin.AdminArea')
@section('Post')
    <div class="post-section">

        <div class="post-head">
            <section>Posts >>Product</section>
            <section> <button>New Tag<button></section>
        </div>
           <div class="post-container">
            <h2>Posts</h2>
                <table>
                    <tr>
                        <th>Topic</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Type</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text"/>
                        </td>
                         <td>
                            <input type="text"/>
                        </td>
                         <td>
                            <input type="text"/>
                        </td>
                        <td>
                            <select name="typeChoice">
                            <option value="">FishBurger</option>
                            <option value="">MeatBurger</option>
                            </select>
                        </td>
                    
                        
                    </tr>
               
                </table>
                <div class="description">
                    <h4>Description</h4>
                    <textarea class="product-description" row="5" cols="50"></textarea>
                
                </div>
        </div>

    </div>
    
@endsection