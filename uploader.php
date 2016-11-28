<html>
<head><title>uploader.php</title></head>
<body>
  <p> file uploader </p>
  <?php require_once
   'google/appengine/api/cloud_storage/CloudStorageTools.php';
    use google\appengine\api\cloud_storage\CloudStorageTools;
    $options = ['gs_bucket_name' => 'skunktest-150708.appspot.com' ];
    $upload_url = CloudStorageTools::createUploadUrl('/bar', $options);
  ?>
  <form
   action="<?php echo $upload_url?>"
   enctype="multipart/form-data" method="post">
   <input id='file1' type="file" name="uploaded_files">
   <submit value='Upload'>
  </form>

 </body>
 </html>
