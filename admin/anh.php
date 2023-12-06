<div class="page-wrapper">
    <h1>Thống kê</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Thống kê</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 200%">
                    <form class="form-horizontal" action="" method="POST" style="">
                        <div class="card-body" style="width: 100%">
<title>Kéo và thả ảnh</title>
  <style>
    #drop-area {
      border: 2px dashed #ccc;
      width: 300px;
      height: 200px;
      text-align: center;
      padding: 20px;
      margin: 20px auto;
    }
    #drop-area.hover {
      border-color: #00bfff;
    }
    img {
      max-width: 100%;
      max-height: 100%;
    }
  </style>
</head>
<body>
  <div id="drop-area">
    Kéo và thả ảnh vào đây hoặc nhấp để chọn ảnh
  </div>
  <script>
    var dropArea = document.getElementById('drop-area');

    // Ngăn chặn hành vi mặc định khi kéo và thả
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
      dropArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
      e.preventDefault();
      e.stopPropagation();
    }

    // Highlight drop area khi kéo vào
    ['dragenter', 'dragover'].forEach(eventName => {
      dropArea.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
      dropArea.addEventListener(eventName, unhighlight, false);
    });

    function highlight(e) {
      dropArea.classList.add('hover');
    }

    function unhighlight(e) {
      dropArea.classList.remove('hover');
    }

    // Xử lý khi thả ảnh vào
    dropArea.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
      var dt = e.dataTransfer;
      var files = dt.files;

      handleFiles(files);
    }

    function handleFiles(files) {
      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        if (file.type.match('image.*')) {
          var reader = new FileReader();

          reader.onload = function(e) {
            var img = new Image();
            img.src = e.target.result;

            dropArea.innerHTML = '';
            dropArea.appendChild(img);
          };

          reader.readAsDataURL(file);
        } else {
          alert('Chỉ chấp nhận các tập tin ảnh');
        }
      }
    }
  </script>
  <?php
if ($_FILES['file']['name']) {
    $fileNames = $_FILES['file']['name'];
    foreach ($fileNames as $name) {
        echo 'Tên tệp tin: ' . $name . '<br>';
    }
    // Xử lý các tệp tin ảnh ở đây, ví dụ: lưu vào thư mục trên máy chủ
    // move_uploaded_file($_FILES['file']['tmp_name'], 'đường_dẫn_lưu_tệp_tin/' . $name);
}
?>
