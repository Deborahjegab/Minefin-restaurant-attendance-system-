<?php
include "dao.php";
$pid = $_POST['id'];
$query = mysqli_query($conn, getSingleProduct($pid)) or die(mysqli_error($con));
$row = mysqli_fetch_array($query);
$count = mysqli_num_rows($query);
if ($count <= 0) {
    echo 0;
}
?>

<div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600 bg-blue-500">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Update Product
            </h3>

            <button type="button" id="ucls" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>

        <!-- Modal body -->
        <div class="space-y-6">
            <div class="relative z-10 w-full max-w-2xl  ">
                <div class="relative z-10 flex flex-col items-start justify-start p-10  rounded-xl">
                    <div id="uerr" class="bg-red-600 text-center rounded-full w-1/2 px-5">

                    </div>
                    <div id="usucc" class="bg-green-600 text-center rounded-full w-1/2 px-5">

                    </div>
                    <form id="usaver" class="relative w-full mt-6 space-y-8">
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-small text-gray-600 bg-white">Product</label>
                            <input type="text" value="<?php echo $row['first_name']; ?>" id="upname" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="Product Name" required>
                        </div>
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Manufacturer</label>
                            <input type="text" id="upbrand" value="<?php echo $row['last_name']; ?>" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="Manufacturer Name" required>
                        </div>
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Price</label>
                            <input type="number" id="upprice" value="<?php echo $row['department_name']; ?>" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="Product Price" required>
                        </div>
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Category</label>
                            <input type="text" id="upcat" value="<?php echo $row['position']; ?>" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="Category Name" required>
                        </div>
                        <div class="relative">
                            <button id="usave" href="#_" class="inline-block w-1/3 px-5 py-4 text-xl font-medium text-center text-white transition duration-200 bg-blue-300 rounded-lg hover:bg-green-400 ease" onclick="return updateProduct('<?php echo $row['id']; ?>');">Update</button>

                        </div>
                    </form>

                </div>

            </div>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
            <button type="button" id="ucls2" style="color:white" class="hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-red-200 bg-red-500" data-modal-toggle="defaultModal">
                Close
                <span class="sr-only">Close modal</span>
            </button>
        </div>
    </div>
</div>