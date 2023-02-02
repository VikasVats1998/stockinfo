<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"stockinfo");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>

<body>
    <div class="flex h-screen">
        <div class="w-64 bg-gray-900 h-full position-fixed">
            <nav class="p-6">
                <a href="https://flowbite.com/" class="flex items-center pl-2.5 mb-5">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-7" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <a href="#dashboard"
                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
                <a href="#add_product"
                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                        </path>
                        <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Add Products</span>
                </a>
                <a href="#add_category"
                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                        </path>
                        <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Add Category</span>
                </a>

                <a href="#sellproduct"
                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Sell Product</span>
                </a>
                

                <a href="logout.php"
                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">LogOut</span>
                </a>
            </nav>
        </div>
        <div class="w-full bg-gray-200 h-full">
            <div class="p-6" id="dashboard">

                <div
                    class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                    <ul class=" text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400"
                        id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                        <li class="w-full">
                            <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab"
                                aria-controls="stats" aria-selected="true"
                                class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Statistics</button>
                        </li>

                    </ul>
                    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                        <div class=" p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel"
                            aria-labelledby="stats-tab">
                            <dl
                                class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                                <div class="flex flex-col items-center justify-center">
                                    <dt class="mb-2 text-3xl font-extrabold">
                                        <?php
                      $sql = "SELECT COUNT(*) FROM categories";
                      $result = mysqli_query($connection, $sql);
                      
                      if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_row($result);
                        $count = $row[0];
                        echo  $count;
                      } 
                    ?>
                                    </dt>
                                    <dd class="font-light text-gray-500 dark:text-gray-400">Categories</dd>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <dt class="mb-2 text-3xl font-extrabold">
                                    <?php
                      $sql = "SELECT COUNT(*) FROM products";
                      
                      $result = mysqli_query($connection, $sql);
                      
                      if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_row($result);
                        $count = $row[0];
                        echo  $count;
                      } 
                    ?>
                                    </dt>
                                    <dd class="font-light text-gray-500 dark:text-gray-400">Products</dd>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <dt class="mb-2 text-3xl font-extrabold">
                                    <?php
                      // fetch data from first table
                      $query1 = "SELECT SUM(qty) FROM products";
                      $result1 = mysqli_query($connection, $query1);
                    
                      if (mysqli_num_rows($result1) > 0) {
                          $row = mysqli_fetch_row($result1);
                          $count1 = $row[0];
                          
                        } 

                      // fetch data from second table
                      $query2 = "SELECT SUM(qty) FROM soldproduct";
                      $result2 = mysqli_query($connection, $query2);
                      
                      if (mysqli_num_rows($result2) > 0) {
                          $row = mysqli_fetch_row($result2);
                          $count2 = $row[0];
                          
                        } 

                      // subtract data from one array from another
                     
                      // display the difference
                      
                          $diff = $count1-$count2;
                          echo  $diff;
                    ?>
                                    </dt>
                                    <dd class="font-light text-gray-500 dark:text-gray-400">All Items</dd>
                                </div>

                            </dl>
                        </div>

                    </div>
                    </div>
                    <!-- Put products here -->
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
                    <?php            
          $query = "SELECT * FROM products ORDER BY id ASC";
          $query_run = mysqli_query($connection,$query);
          ?>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    S.No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Categories
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Qty
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edit
                                </th>
                               

                            </tr>
                        </thead>
                        <tbody>

                            <?php
            $sno = 1;

            if($query_run)
            {
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                        <tbody>
                            <trclass="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                                    <?php  echo $sno ; ?></th>
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                                    <?php  echo $row['category']; ?></th>
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                                    <?php  echo $row['name']; ?></th>
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                                    <?php  echo $row['price']; ?></th>
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                                    <?php  echo $row['date']; ?></th>
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                                    <?php  echo $row['qty']; ?></th>


                                <form action="updatedata.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                    <th><input type="submit" name="edit"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                            value="EDIT"></th>
                                </form>

                               

                                </tr>
                        </tbody>

                        <?php
                    $sno++;
                }
            }
            else 
            {
                echo "No record found";
            }
            ?>
                        </tbody>
                    </table>
                </div>
                </div>

           
            <div class="p-6" id="add_product" style="display: none;">

                <div
                    class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <form class="space-y-6" action="" method="POST">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Add Product</h5>
                        <div>
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select id="category" name="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <?php
                      $sql = "Select * From categories";
                  $result = mysqli_query($connection,$sql);
                  if(mysqli_affected_rows($connection) !=0){
                      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                          $id = $row['id'];
                          $category = $row['category'];
                  ?>
                                <option value="<?php echo $category; ?>" >
                                    <?php echo $category; ?></option>

                                <?php
                        }
                        }
                    ?>

                            </select>
                        </div>
                        <div>
                            <label for="item"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>
                        <div>
                            <label for="price"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                            <input type="text" name="price" id="price"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>
                        <div>
                            <label for="expireDate"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of
                                Expire</label>
                            <input type="date" name="expireDate" id="expireDate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>
                        <div>
                            <label for="qty"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                            <input type="number" name="qty" id="qty"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>

                        <button type="submit" name="addProduct"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            Product</button>

                    </form>
                </div>




            </div>
            <div class="p-6" id="add_category" style="display: none;">

                <div
                    class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <form class="space-y-6" action="" method="POST">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Add Category</h5>

                        <div>
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <input type="text" name="category" id="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>


                        <button type="submit" name="addCategory"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            Product</button>

                    </form>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
                    <?php            
          $query = "SELECT * FROM categories ORDER BY id ASC";
          $query_run = mysqli_query($connection,$query);
          ?>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    S.No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Categories
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edit
                                </th>
                                

                            </tr>
                        </thead>
                        <tbody>

                            <?php
            $sno = 1;

            if($query_run)
            {
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap ">
                                    <?php  echo $sno ; ?></th>
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap ">
                                    <?php  echo $row['category']; ?></th>


                                <form action="updatedata.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                    <th><input type="submit" name="edit"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                            value="EDIT"></th>
                                </form>

                                

                                </tr>
                        </tbody>

                        <?php
                    $sno++;
                }
            }
            else 
            {
                echo "No record found";
            }
            ?>
                        </tbody>
                    </table>
                </div>


            </div>

            <div class="p-6" id="sellproduct" style="display: none;">
                <div
                    class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <form class="space-y-6" action="" method="POST">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sell Product</h5>
                        <div>
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select id="category" name="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <?php
                      $sql = "Select * From categories";
                  $result = mysqli_query($connection,$sql);
                  if(mysqli_affected_rows($connection) !=0){
                      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                          $id = $row['id'];
                          $category = $row['category'];
                  ?>
                                <option value="<?php echo $category; ?>">
                                    <?php echo $category; ?></option>

                                <?php
                        }
                        }
                    ?>

                            </select>
                        </div>
                        <div>
                            <label for="item"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <select id="name" name="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <?php
                      $sql = "Select name From products";
                  $result = mysqli_query($connection,$sql);
                  if(mysqli_affected_rows($connection) !=0){
                      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                          $id = $row['id'];
                          $name = $row['name'];
                  ?>
                                <option value="<?php echo $name; ?>" >
                                    <?php echo $name; ?></option>

                                <?php
                        }
                        }
                    ?>

                            </select>
                        </div>
                        <div>
                            <label for="date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                            <input type="date" name="date" id="date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>
                        <div>
                            <label for="qty"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                            <input type="number" name="qty" id="qty"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>


                        <button type="submit" name="sellProduct"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sell
                            Product</button>

                    </form>
                </div>
            </div>
            <div class="p-6" id="report" style="display: none;">
                <div
                    class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <form class="space-y-6" action="#">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Generate Report</h5>
                        <div>
                            <label for="startDate"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">From</label>
                            <input type="Date" name="startDate" id="startDate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>
                        <div>
                            <label for="endDate"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">To</label>
                            <input type="Date" name="endDate" id="endDate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>


                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Generate</button>

                    </form>
                </div>
            </div>

        </div>
        <script>
        const tabs = document.querySelectorAll('a[href^="#"]');

        tabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                target.style.display = 'block';
                tabs.forEach(t => {
                    if (t !== tab) {
                        const content = document.querySelector(t.getAttribute('href'));
                        content.style.display = 'none';
                    }
                });
            });
        });
        </script>

</body>

</html>
<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"stockinfo");

    if(isset($_POST['addProduct']))
    {
        $category = $_POST['category'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $date = $_POST['expireDate'];
        $qty = $_POST['qty'];

        $query = "INSERT INTO products(category,name,price,qty,date) VALUES('$category','$name','$price','$qty','$date')";
        $query_run = mysqli_query($connection,$query);

       
            if($query_run)
        {
            echo "<script>alert('Product inserted successfully');</script>";
            // header("location:./dashboard/dashboard.php");
        }
        else
        {
            echo "<script>alert('Something wents wrong! Please try again');</script>";
        }
        

    }

    if(isset($_POST['addCategory']))
    {
        
        $category = $_POST['category'];
        

        $query = "INSERT INTO categories(category) VALUES('$category')";
        $query_run = mysqli_query($connection,$query);

        
            if($query_run)
        {
            echo "<script>alert('Category inserted successfully');</script>";
            // header("location:./dashboard/dashboard.php");
        }
        else
        {
            echo "<script>alert('Category already exist');</script>";
        }
      }

    

    if(isset($_POST['sellProduct']))
    {
        $category = $_POST['category'];
        $name = $_POST['name'];
        $qty = $_POST['qty'];
        $date = $_POST['date'];

        $query = "INSERT INTO soldproduct(category,name,qty,date) VALUES('$category','$name','$qty','$date')";
        $query_run = mysqli_query($connection,$query);

       
            if($query_run)
        {
            echo "<script>alert('Product inserted successfully');</script>";
            // header("location:./dashboard/dashboard.php");
        }
        else
        {
            echo "<script>alert('Something wents wrong! Please try again');</script>";
        }
        

    }


?>