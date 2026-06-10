

<div class="modal fade" id="deleteCategory{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <form action="{{ route('categories.delete', $category->id) }}" method = "POST">
                     @csrf
                     @method('DELETE')
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Form Delete </h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         Are you sure to Delete: <strong>{{ $category->name }}</strong>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                         <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
