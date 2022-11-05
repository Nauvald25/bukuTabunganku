<?php
if (!isset($_GET["menu"])) $_GET["menu"] = "home";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="icon.png">
  <title>Menabung</title>
</head>

<body>
  <dialog id="dialog-el">
    <form method="dialog">
      <p class="dialog-title">Kamu Mulai Boros Beli Udud Mulu sihh </p>
      <hr />
      <p class="dialog-tips">Yok Menabung Agar Bisa irit Dan Hemat Uang Jajan</p>
      <button>OKE</button>
    </form>
  </dialog>
        <h3>DompetKu</h3>
      </div>
      <?php switch ($_GET['menu']) {
        case 'about':
          require_once "./layouts/about.html";
          break;
        case 'pendapatan':
          require_once "./layouts/pendapatan.php";
          break;
        case 'pengeluaran':
          require_once "./layouts/pengeluaran.php";
          break;
        case 'tabel':
          require_once "./layouts/tabel.php";
          break;
        default:
          require_once "./layouts/home.html";
          break;
      } ?>
    </main>
    <nav class="navigation-container">
      <div class="nav-grid">
        <a href="?menu=home" style="grid-area: home;">
          <button <?php if ($_GET['menu'] == 'home') echo 'style="background-color: var(--button-color-green1); color: var(--font-color-white1);"' ?>>
            <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M25.4619 11.8736L13.6487 0.2644C13.5636 0.180586 13.4626 0.114091 13.3514 0.068722C13.2402 0.0233529 13.1209 0 13.0005 0C12.8801 0 12.7609 0.0233529 12.6497 0.068722C12.5385 0.114091 12.4374 0.180586 12.3524 0.2644L0.53918 11.8736C0.195022 12.2121 0 12.6718 0 13.1513C0 14.147 0.823109 14.9564 1.8355 14.9564H3.08021V23.2403C3.08021 23.7395 3.49033 24.1429 3.99796 24.1429H11.165V17.8249H14.3772V24.1429H22.0031C22.5107 24.1429 22.9209 23.7395 22.9209 23.2403V14.9564H24.1656C24.6531 14.9564 25.1206 14.7675 25.4648 14.4262C26.1789 13.7211 26.1789 12.5788 25.4619 11.8736Z" fill="<?= $_GET['menu'] == 'home' ? '#F7F5F5' : '#333333'; ?>" />
            </svg>
            <p>Home</p>
          </button>
        </a>
        <a href="?menu=about" style="grid-area: about;">
          <button <?php if ($_GET['menu'] == 'about') echo 'style="background-color: var(--button-color-green1); color: var(--font-color-white1);"' ?>>
            <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.6667 0H2.33333C1.71449 0 1.121 0.252856 0.683417 0.702944C0.245833 1.15303 0 1.76348 0 2.4V18C0 18.6365 0.245833 19.247 0.683417 19.6971C1.121 20.1471 1.71449 20.4 2.33333 20.4H7L10.5 24L14 20.4H18.6667C19.2855 20.4 19.879 20.1471 20.3166 19.6971C20.7542 19.247 21 18.6365 21 18V2.4C21 1.76348 20.7542 1.15303 20.3166 0.702944C19.879 0.252856 19.2855 0 18.6667 0ZM10.5 3.6C12.5148 3.6 14 5.1264 14 7.2C14 9.2736 12.5148 10.8 10.5 10.8C8.48633 10.8 7 9.2736 7 7.2C7 5.1264 8.48633 3.6 10.5 3.6ZM4.87317 16.8C5.52417 14.7324 7.78517 13.2 10.5 13.2C13.2148 13.2 15.477 14.7324 16.1268 16.8H4.87317Z" fill="<?= $_GET['menu'] == 'about' ? '#F7F5F5' : '#333333'; ?>" />
            </svg>
            <p>About</p>
          </button>
        </a>
        <a href="?menu=pendapatan" style="grid-area: pemasukan;">
          <button <?php if ($_GET['menu'] == 'pendapatan') echo 'style="background-color: var(--button-color-green1); color: var(--font-color-white1);"' ?>>
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M33.0961 0.66382C33.307 0.878203 33.4688 1.125 33.5812 1.38867C33.6867 1.65234 33.6867 1.94062 33.75 2.24297V9C33.75 10.2445 32.7445 11.25 31.5 11.25C30.2555 11.25 29.25 10.2445 29.25 9V7.68516L21.8391 15.0891C21.0094 15.9258 19.6805 15.975 18.7875 15.2086L12.3117 9.71016L5.96391 15.2086C5.02102 16.0172 3.6 15.9047 2.79141 14.9625C1.98281 14.0203 2.0925 12.6 3.03539 11.7914L10.9125 5.04141C11.7562 4.3193 12.9938 4.3193 13.8375 5.04141L20.1305 10.4344L26.0648 4.5H24.75C23.5055 4.5 22.5 3.49242 22.5 2.25C22.5 1.00758 23.5055 0 24.75 0H31.4367C32.1188 0 32.6813 0.249891 33.0891 0.654258L33.0961 0.66382ZM0 21.375C0 19.5117 1.51102 18 3.375 18H32.625C34.4883 18 36 19.5117 36 21.375V32.625C36 34.4883 34.4883 36 32.625 36H3.375C1.51102 36 0 34.4883 0 32.625V21.375ZM3.375 32.625H6.75C6.75 30.7617 5.23898 29.25 3.375 29.25V32.625ZM3.375 21.375V24.75C5.23898 24.75 6.75 23.2383 6.75 21.375H3.375ZM32.625 29.25C30.7617 29.25 29.25 30.7617 29.25 32.625H32.625V29.25ZM29.25 21.375C29.25 23.2383 30.7617 24.75 32.625 24.75V21.375H29.25ZM18 22.5C15.518 22.5 13.5 24.518 13.5 27C13.5 29.482 15.518 31.5 18 31.5C20.482 31.5 22.5 29.482 22.5 27C22.5 24.518 20.482 22.5 18 22.5Z" fill="<?= $_GET['menu'] == 'pendapatan' ? '#F7F5F5' : '#219F94'; ?>" />
            </svg>
            <p>Masukan<br>Pendapatan</p>
          </button>
        </a>
        <a href="?menu=pengeluaran" style="grid-area: pengeluaran;">
          <button <?php if ($_GET['menu'] == 'pengeluaran') echo 'style="background-color: var(--button-color-red1); color: var(--font-color-white1);"' ?>>
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M33.0961 15.0878C33.307 14.8735 33.4688 14.6267 33.5812 14.363C33.6867 14.0993 33.6867 13.811 33.75 13.5087V6.75167C33.75 5.50713 32.7445 4.50167 31.5 4.50167C30.2555 4.50167 29.25 5.50713 29.25 6.75167V8.06651L21.8391 0.662602C21.0094 -0.174116 19.6805 -0.223335 18.7875 0.543071L12.3117 6.04151L5.96391 0.543071C5.02102 -0.265523 3.6 -0.153023 2.79141 0.789165C1.98281 1.73135 2.0925 3.15167 3.03539 3.96026L10.9125 10.7103C11.7562 11.4324 12.9938 11.4324 13.8375 10.7103L20.1305 5.31729L26.0648 11.2517H24.75C23.5055 11.2517 22.5 12.2592 22.5 13.5017C22.5 14.7441 23.5055 15.7517 24.75 15.7517H31.4367C32.1188 15.7517 32.6812 15.5018 33.0891 15.0974L33.0961 15.0878ZM0 21.375C0 19.5117 1.51102 18 3.375 18H32.625C34.4883 18 36 19.5117 36 21.375V32.625C36 34.4883 34.4883 36 32.625 36H3.375C1.51102 36 0 34.4883 0 32.625V21.375ZM3.375 32.625H6.75C6.75 30.7617 5.23898 29.25 3.375 29.25V32.625ZM3.375 21.375V24.75C5.23898 24.75 6.75 23.2383 6.75 21.375H3.375ZM32.625 29.25C30.7617 29.25 29.25 30.7617 29.25 32.625H32.625V29.25ZM29.25 21.375C29.25 23.2383 30.7617 24.75 32.625 24.75V21.375H29.25ZM18 22.5C15.518 22.5 13.5 24.518 13.5 27C13.5 29.482 15.518 31.5 18 31.5C20.482 31.5 22.5 29.482 22.5 27C22.5 24.518 20.482 22.5 18 22.5Z" fill="<?= $_GET['menu'] == 'pengeluaran' ? '#F7F5F5' : '#CE0303'; ?>" />
            </svg>
            <p>Masukan<br>Pengeluaran</p>
          </button>
        </a>
        <a href="?menu=tabel" style="grid-area: tabel;">
          <button <?php if ($_GET['menu'] == 'tabel') echo 'style="background-color: var(--button-color-green1); color: var(--font-color-white1);"' ?>>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 3C0 2.20435 0.316071 1.44129 0.87868 0.87868C1.44129 0.316071 2.20435 0 3 0L21 0C21.7956 0 22.5587 0.316071 23.1213 0.87868C23.6839 1.44129 24 2.20435 24 3V21C24 21.7956 23.6839 22.5587 23.1213 23.1213C22.5587 23.6839 21.7956 24 21 24H3C2.20435 24 1.44129 23.6839 0.87868 23.1213C0.316071 22.5587 0 21.7956 0 21V3ZM22.5 6H16.5V10.5H22.5V6ZM22.5 12H16.5V16.5H22.5V12ZM22.5 18H16.5V22.5H21C21.3978 22.5 21.7794 22.342 22.0607 22.0607C22.342 21.7794 22.5 21.3978 22.5 21V18ZM15 22.5V18H9V22.5H15ZM7.5 22.5V18H1.5V21C1.5 21.3978 1.65804 21.7794 1.93934 22.0607C2.22064 22.342 2.60218 22.5 3 22.5H7.5ZM1.5 16.5H7.5V12H1.5V16.5ZM1.5 10.5H7.5V6H1.5V10.5ZM9 6V10.5H15V6H9ZM15 12H9V16.5H15V12Z" fill="<?= $_GET['menu'] == 'tabel' ? '#F7F5F5' : '#333333'; ?>" />
            </svg>
            <p>Lihat Saldo </p>
          </button>
        </a>
      </div>
    </nav>
  </div>
</body>

</html>