
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card"> 
                <div class="card-header"> 
                    <form action="{{route('categories.store')}}" method="post">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Santri</label>
                                    <input type="text" name="nama_santri" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Juz yang Sudah Dihafal</label>
                                    <input type="text" name="juz_yang_sudah_di_hafal" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ayat</label>
                                    <input type="text" name="ayat" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Surat</label>
                                    <input type="text" name="surat" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Murojaah</label>
                                    <input type="number" name="murojaah" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-4 mb-4">
                            <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                            <button type="button" class="btn btn-secondary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div> 
    </div> 
</div> 
</body>
</html>
