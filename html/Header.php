
<style>
      .logo {
          max-width: 100px; /* Điều chỉnh kích thước tối đa theo % hoặc px */
          height: auto; /* Đảm bảo hình ảnh giữ tỉ lệ */
      }
      .container-fluid {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 15px; /* Điều chỉnh padding nếu cần thiết */
        width: 55%;
        margin:auto;
      }
      .navbar-nav {
        display: flex;
        align-items: center;
      }
      .navbar-nav .nav-item {
        margin-right: 20px; /* Điều chỉnh khoảng cách giữa các mục */
      }
      .navbar-brand {
        margin-left: 10px; /* Khoảng cách giữa logo và tiêu đề thương hiệu */
        margin-right: 30px; /* Khoảng cách giữa tiêu đề thương hiệu và mục đầu tiên */
      }
      .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0; /* Giúp căn chỉnh dropdown */
      }
</style>
<link href="css/index.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
      <img src="img\Logo-Opel.png" alt="Mô tả hình ảnh" class="img-fluid logo">
      <a class="navbar-brand" href="/">OPEL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about_us.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Brand</a>
        </li>
        <li class="nav-item dropdown">
          <a id="rangeOfCarLink" class="nav-link dropdown" href="\range_of_car.php" role="button">
            Range of Car
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/preOwned_car.php">PreOwned Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>