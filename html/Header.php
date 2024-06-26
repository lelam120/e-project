<style>
      .logo {
          max-width: 100px; 
          height: auto; 
      }
      .container-fluid {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 15px; 
        width: 55%;
        margin:auto;
      }
      .navbar-nav {
        display: flex;
        align-items: center;
      }
      .navbar-nav .nav-item {
        margin-right: 20px; 
      }
      .navbar-brand {
        margin-left: 10px; 
        margin-right: 30px;
      }
      .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
      }
</style>

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
        <li class="nav-item dropdown">
          <a id="rangeOfCarLink" class="nav-link dropdown" href="/brand.php" role="button">
            Brand
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/range_of_car.php">Range Of Car</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/preOwned_car.php">PreOwned Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>