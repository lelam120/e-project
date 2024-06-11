
<style>
        .logo {
            max-width: 15%; /* Điều chỉnh kích thước tối đa theo % hoặc px */
            height: auto; /* Đảm bảo hình ảnh giữ tỉ lệ */
        }
        .container-fluid{
          width: 45%;
          height: 65px;
          margin: auto;
        }
        .navbar-nav .nav-item {
        margin-right: 15px; /* Điều chỉnh khoảng cách giữa các mục */
        }
        .navbar-brand {
            margin-right: 20px; /* Khoảng cách giữa logo và tiêu đề thương hiệu */
        }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
      <img src="img\Logo-Opel.png" alt="Mô tả hình ảnh" class="img-fluid logo">
      <a class="navbar-brand" href="#">OPEL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Brand</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Range of Car
          </a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PreOwned Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>