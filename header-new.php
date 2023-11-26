<!DOCTYPE html>
<html>
<?php
include 'config.php';
session_start();
header('Content-Type: text/html;charset=UTF-8');
?>
  <title>TELEMEX</title>
  <meta http-equiv="Content-language" content="fr" />
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

<!-- Iconify Library-->
 <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
 

<body>
  <header>

<style>


    #sidebar {
        -webkit-transition: all 500ms cubic-bezier(0, 0.77, 0.58, 1);
        transition: all 600ms cubic-bezier(0, 0.77, 0.58, 1);
    }

    #sidebar.show {
        transform: translateX(0);
    }

    #sidebar ul li a.active {
        background: #1f2937;
        background-color: #1f2937;
    }


    
   @media screen and (min-width: 668px) {
    #navbar{
      display: flex;
      flex-direction: row;
      justify-content:space-around;
      align-items: center;
      height: 10vh;
    }
  #nav-links{
    display: flex;
    flex-direction: row;
    justify-content: end;
    align-items: center;
    font-size: 1.1rem;
  }
  #user-profile-connection{
    display: none;
  }

  #btnSidebarToggler{
    display: none;
  }
  #containerSidebar{
    display: none;
  }

}
  @media screen and (max-width:1025px) {
    #navbar{
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }
    #navbar{
      height: 10vh;
    }
    #nav-links{
    display: none;
  }
  #user-profile-connection{
    display: flex;
  }
  #navbar-logo{
    width:50%;
    height: auto;
  }
 
  #btnSidebarToggler{
    display: flex;
    font-size: 3rem;
  }
  #containerSidebar{
    display: flex;
  }
  #responsive-nav-links{
    font-size: 1.2rem;
  }
  #responsive-nav-links li > a >p{
    font-size: 1em;
    padding: 0.75em;
  }
  #responsive-nav-links li:not(#login-button){
    padding: 2%;
  }
  #responsive-nav-links li iconify-icon{
    font-size: 2em;
  }
  }

  @media screen and (min-width:1024px) and (max-width:1024px) {
    #sidebar > #sidenavbar > #responsive-nav-links > #login-button {
      width: 50%;
    }
  }

    
  

</style>

<!-- Navbar start -->
<nav id="navbar" class="bg-[#2B2E86] fixed top-0 h-[20vh] z-40 w-full p-2 transition-all duration-500">
    <!--Logo-->
    <a id="navbar-brand" href="index.php">
        <img src="newdesign/images/logo.png" id="navbar-logo" alt="Telemex_Logo">
      </a>

      <ul id="nav-links" class=" text-white  w-full gap-12 transition-all duration-500 ">
      <?php if (isset($_SESSION['login_user'])) { ?>
          <li class="before:ease relative h-auto p-2  rounded-md  text-center overflow-hidden   text-white shadow-2xl transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500">
            
            <a class="relative z-10" href="chargement-new.php">Envoyer un colis</a>
          </li>
					<?php } ?>

          <li class="before:ease relative h-auto p-2  rounded-md  text-center overflow-hidden   text-white shadow-2xl transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500">
            <a class="relative z-10" href="inscription1.php">Nous rejoindre</a>
          </li>

          <li class="before:ease relative w-[10%] h-auto p-2  rounded-md  text-center overflow-hidden   text-white shadow-2xl transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500">
            <a class="relative z-10" href="https://telemex.suivi.telefret.com/">Suivi</a>
          </li>


          <?php if (isset($_SESSION['login_user'])) { ?>
          <li class="before:ease relative h-auto p-2  rounded-md  text-center overflow-hidden   text-white shadow-2xl transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500">
          <a class="relative z-10"  href="historique-new.php?telephone=<?php echo $_SESSION[
              'telephone'
          ]; ?>">Historique</a>
        </li>
					<?php } ?>

          <?php if (!isset($_SESSION['login_user'])) { ?>

            <div>
<li>
  <a id="user-buttons" class="flex flex-row justify-center items-center gap-8" href="login-new.php">
  <?php if (isset($_SESSION['login_user'])) { ?>
    <img src="newdesign/images/ic_account_circle_24px.svg">
    <?php }?>
    <button class="bg-[#E92C24]  px-4 py-3 flex flex-row justify-center items-center m-auto gap-2 rounded-full before:ease relative text-gray-200 hover:text-white hover:shadow-md hover:shadow-red-500 overflow-hidden transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500">
      <p class="text-[1rem] font-semibold tracking-wide" >Se connecter</p>
      <iconify-icon class="text-[1.5rem] " icon="mdi:sign-in" ></iconify-icon>
    </button>
</a>
</li>

  <?php } ?>


<!--dropdown list-->
<?php if(isset($_SESSION['login_user'])){ ?>
<button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" class=" hover:shadow-2xl hover:shadow-purple-800 p-2 focus:ring-2 focus:ring-purple-600 focus:outline-none rounded-full text-[3rem]  text-center inline-flex items-center transition-all duration-500" type="button">
<iconify-icon icon="mingcute:user-4-line" style="color:#D0D0D0	;"></iconify-icon>
</button>

<!-- Dropdown menu -->
<div id="dropdownDelay" class="z-10 hidden bg-[#2F3286] divide-y divide-gray-100 rounded-md shadow w-[18%] max-h-max transition-opacity duration-500">
<div class="px-4 py-2  flex flex-col gap-2 dark:text-white transition-all duration-500">

      <div class="text-gray-200 text-[1.2rem]">
        <?php echo $_SESSION['prenom'] ." ". $_SESSION['login_user']; ?>
      </div>
      <div class="text-[1rem] text-gray-400 font-semibold  truncate tracking-normal"><?php echo $_SESSION['email'] ?></div>
    </div>
    <ul class="py-2" aria-labelledby="dropdownDelayButton">

    <?php if (isset($_SESSION['login_user'])) { ?>
    <li class="relative flex h-[40px] w-full items-center justify-start overflow-hidden text-gray-200 shadow-2xl transition-all before:absolute before:h-0 before:w-0 before:rounded-full before:bg-gray-300/[.1] before:duration-500 before:ease-out  hover:before:h-56 hover:before:w-full">
      <?php if ($_SESSION['type'] == 'admin') { ?> 
        <a class=" w-full flex flex-row justify-start p-2 gap-2 items-center relative z-10 " href="mainindex.php" >
      <?php } else { ?>
      <a class="px-2 w-full flex flex-row justify-start  gap-2 items-center relative z-10 " href="profile.php" >
       
          <iconify-icon class=" text-[1.25rem]" icon="iconamoon:profile"></iconify-icon>
          <p class="">profile</p>
        
      </a>
      <?php } ?>

</li>
<?php } ?>
      <li class="relative flex h-[40px] w-full items-center justify-start overflow-hidden text-gray-200 shadow-2xl transition-all before:absolute before:h-0 before:w-0 before:rounded-full before:bg-gray-300/[.1] before:duration-500 before:ease-out  hover:before:h-56 hover:before:w-full"">
        <a href="logout.php" class="px-2 w-full flex flex-row justify-start p-2 gap-2 items-center relative z-10"  >
          <iconify-icon class="" icon="material-symbols:logout"></iconify-icon>
          <p>Déconnexion</p>
        </a>
      </li>
    </ul>
</div>
<?php }?>
<!--end dropdown list-->






  
 
</div>
          

    </ul>
    <div class="flex flex-row justify-center items-center gap-4" >
      <div id="user-profile-connection">
    <?php if (isset($_SESSION['login_user'])) { ?>
      <?php if ($_SESSION['type'] == 'admin') { ?> 
        <a class="" href="mainindex.php" >

      <?php } elseif($_SESSION['type'] == 'client') { ?>
      <a class=" w-full " href="profile.php" >

        <?php } ?>
        <iconify-icon class="text-[3rem]" icon="mingcute:user-4-line" style="color: white;"></iconify-icon>
      </a>

<?php }else{ ?>
  <a href="login-new.php">
  <iconify-icon class="text-[3rem]" icon="mingcute:user-4-line" style="color: white;"></iconify-icon>

  </a>
  <?php } ?>
  </div>

      <!--Toggle Button-->
    <button id="btnSidebarToggler" type="button" class="text-white hover:text-gray-200">
    <iconify-icon id="navClosed" icon="uil:bars" style="color: white;"></iconify-icon>

    <iconify-icon id="navOpen" class="hidden" icon="ic:round-close" style="color: white;"></iconify-icon>

    </button>
    </div>
    
</nav>


<!-- Sidebar start-->
<div id="containerSidebar" class="z-40 flex justify-center items-center text-white m-auto text-center">
    <div id="container-sidebar" class=" relative z-40">
        <nav id="sidebar"
            class=" bg-[#2B2E86] fixed right-0 bottom-0 flex w-[60%] translate-x-full flex-col overflow-x-auto">
           

            <div id="sidenavbar" class="bg-[#2B2E86] h-full w-full flex justify-center items-start ">
              
                <ul id="responsive-nav-links" class="flex flex-col w-full justify-center items-center gap-4  mt-8 divide-y divide-gray-100">

                <?php if (isset($_SESSION['login_user'])) { ?>
                  <li class=" flex items-center before:ease relative h-auto   overflow-hidden   text-white  transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500 w-full">
      <?php if ($_SESSION['type'] == 'admin') { ?> 
        <a class="" href="mainindex.php" >

      <?php } else { ?>
      <a class="  w-full " href="profile.php" >
        <?php } ?>

        <div class="flex flex-row justify-start gap-3 items-center relative z-10">
        <iconify-icon  icon="iconamoon:profile" style="color: white;"></iconify-icon>
        <p class=""><?php echo $_SESSION['prenom'] ." ".  $_SESSION['login_user']; ?></p>
        </div>
      </a>
    </li>
          <li class=" flex flex-row justify-start items-center  before:ease relative h-auto  overflow-hidden   text-white  transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500 w-full">
            <a class="flex flex-row justify-center items-center" href="chargement-new.php">
              <iconify-icon  icon="mdi:truck-delivery-outline" style="color: white;"></iconify-icon>
              <p>Envoyer un colis</p
            </a>
          </li>
					<?php } ?>

          <li class=" flex flex-row justify-start items-center  before:ease relative h-auto  overflow-hidden   text-white  transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500 w-full">
            <a class="flex flex-row justify-center items-center " href="inscription1.php">
            <iconify-icon  icon="fluent-mdl2:join-online-meeting" style="color:white;"></iconify-icon>
             <p>Nous rejoindre</p>
            </a>
          </li>

          <li class=" flex flex-row justify-start  items-center before:ease relative h-auto overflow-hidden   text-white  transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500 w-full">
            <a class="flex flex-row justify-center items-center" href="https://telemex.suivi.telefret.com/">
            <iconify-icon icon="ic:outline-location-on" style="color: white;"></iconify-icon>  
            <p>Suivi</p>
            </a>
          </li>

          <?php if (isset($_SESSION['login_user'])) { ?>
          <li class="flex flex-row justify-start items-center before:ease relative h-auto overflow-hidden   text-white  transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500 w-full">
          <a class="flex flex-row justify-center items-center"  href="historique-new.php?telephone=<?php echo $_SESSION['telephone']; ?>">
          <iconify-icon  icon="uis:history-alt" style="color: white;"></iconify-icon>
         <p>Historique</p>
        </a>
            </li>
					<?php } ?>
          <?php if (!isset($_SESSION['login_user'])) { ?>

<li id="login-button" class="bg-[#E92C24]  px-3 shadow-md shadow-gray-500  flex flex-row justify-center items-center m-auto rounded-full before:ease relative hover:shadow-md hover:shadow-red-500 overflow-hidden transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500">
<a href="login-new.php" class="w-full flex flex-row justify-center items-center" >
      <p class="" >Se connecter</p>
      <iconify-icon icon="mdi:sign-in" style="color: white;"></iconify-icon>
    </a>
  </li>

  <?php } ?>
<?php if(isset($_SESSION['login_user'])){ ?>
        <a href="logout.php" class="bg-[#F39F5A] p-3 flex flex-row justify-center items-center m-auto gap-2 rounded-full before:ease relative hover:shadow-md overflow-hidden transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500">
          <p>Déconnexion</p>
          <iconify-icon class="text-[2rem]" icon="material-symbols:logout" style="color: white;"></iconify-icon>
        </a>
  <?php } ?>

                </ul>
            </div>

            
        </nav>
    </div>
    
</div>



<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const navbar = document.getElementById("navbar");
        const sidebar = document.getElementById("sidebar");
        const btnSidebarToggler = document.getElementById("btnSidebarToggler");
        const navClosed = document.getElementById("navClosed");
        const navOpen = document.getElementById("navOpen");

        btnSidebarToggler.addEventListener("click", (e) => {
            e.preventDefault();
            sidebar.classList.toggle("show");
            navClosed.classList.toggle("hidden");
            navOpen.classList.toggle("hidden");
        });

        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });
</script>


  </header>
