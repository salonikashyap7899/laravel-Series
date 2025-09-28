<div>
    <h1>Image Upload</h1>
    <form action="imge" method="post" enctype="multipart/form-data">
        @csrf
    <input type="file" name="file">
       <button>Upload </button>
    </form>
</div>
