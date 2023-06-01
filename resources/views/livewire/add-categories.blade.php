<div>
    <div class="row items-center me-0">
        <h1 id="subcategory" class="col-12 col-md-4 col-xl-6 fw-bold ms-3 mt-5 mb-4">Categories</h1>  
        <form class="col items-center" wire:submit.prevent="sendCategory" data-parsley-validate>
            @csrf
            <div class="d-flex">
                <input type="text" placeholder="New Categories" class="col shadow form-control mb-2 mt-5 rounded" wire:model="name" data-parsley-minlength="3" data-parsley-required/>
                <div class="col w-100">
                    <select class="form-select shadow mb-2 mt-5 rounded border" wire:model="parent_id" aria-label="Default select example">
                        <option value="">Category (parent)</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="col-2 ms-2 rounded shadow text-light me-2 mt-5 mb-2 " id="category-add-btn" style="background-color:#E96623;">Add</button>
            </div>
        </form>
    </div>
    <div class="container table-responsive">
        <table class="table table-responsive shadow bg-white rounded text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">ParentName</th>
                    <th scope="col">Count.Sub.C</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->parentCategory ? $category->parentCategory->name : '--'}}</td>
                    <td>{{$category->subcategories->count()}}</td>
                    <td><button wire:click="editCategory({{ $category->id }})" href="#edit-category-modal" data-bs-toggle="modal" class="text-decoration-none text-primary fw-bold">edit</button></td>
                    <td><button wire:click="destroyCategory({{ $category->id }})" onclick="return confirm('Are you sure?')" class="text-decoration-none text-danger fw-bold">delete</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
    <div class="container">
    </div>
