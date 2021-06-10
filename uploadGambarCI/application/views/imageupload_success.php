<!DOCTYPE html>
<html>
<head>
    <title>Image Uploaded Success</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div>
        <h3>SELAMAT!!!, gambar telah berhasil diupload</h3>
        <p>Klik di sini untuk melihat gambar yang baru saja Anda upload
            <?=anchor('upload/'.$image_metadata['file_name'], 'View My Image!')?>
        </p>
 
        <p>
            <?php echo anchor('ImageUpload_Controller', 'Go back to Image Upload'); ?>
        </p>
    </div>
</body>
</html>