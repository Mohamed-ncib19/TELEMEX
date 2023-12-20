<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php include './header-new.php'; ?>
<?php include 'config.php'; ?>


<?php if(isset($_SESSION['login_user'])){ ?>
    <?php  
    $phone = $_SESSION['telephone'];
    $sql = "SELECT * FROM chargement, notifications WHERE notifications.telephone = '$phone' AND notifications.id_chargement = chargement.id_charg;";
    $res = mysqli_query($db,$sql);
    $num = mysqli_num_rows($res);    
?>
<div class="h-screen bg-red-200 flex justify-center items-center " >
    <div class="bg-blue-200 w-full h-[70%] " >
    <h1>Mon Historique</h1>
    <?php if($num === 0){ ?>
        <h1>you dont have any sended packages</h1>

        <?php }else{ ?>
            <div>
                <form action="GetPackages.php" method="post" >
                    <select name="Status" id="status">
                        <option value="0"> en Attente</option>
                        <option value="1">en Cours</option>
                        <option value="2">Livré</option>
                    </select>
                </form>
            </div>
            <script>
    $(document).ready(function () {
        $('#status').change(function (event) {
            event.preventDefault();
            var status = document.querySelector('#status').value;
            $.ajax({
                type: "POST",
                url: "GetPackages.php",
                data: { Status: status },
                success: function (response) {
                    response.forEach(package => {
                        $('#package-name').append(package.id)
                        
                        
                    });
                },
                error: function (response) {
                    console.log(response);
                }
            });
        });
    });
</script>
 <div  class="relative overflow-x-auto shadow-md sm:rounded-lg bg-gray-300 ">
    <table class="w-full text-sm text-left rtl:text-right  ">
        <thead class="text-xs  uppercase  ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class=" border-b    ">
                <th scope="row" id="package-name" class="px-6 py-4 font-medium  whitespace-nowrap ">
                  
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
           
            <tr class=" ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

            <?php } ?>
    </div>
</div>
<?php } ?>
<?php include 'footer-new.php'; ?>