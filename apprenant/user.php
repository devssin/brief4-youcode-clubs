<?php  include "../includes/isLogedIn.inc.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin : apprenant</title>

    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>  


    <!-- Button trigger modal -->
    

    <!-- Modal Inert data -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New user</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <!-- firstname -->
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Firstname</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Enter firstname">
                    </div>
                    <!-- lastname -->
                    <!-- <div class="mb-3">
                        <label for="lastname" class="form-label">lastname</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Enter lastname">
                    </div> -->
                    <!-- age -->
                    <div class="mb-3">
                        <label for="age" class="form-label">age</label>
                        <input type="number" class="form-control" id="age" placeholder="Enter age">
                    </div>
                    <!-- img link -->
                    <div class="mb-3">
                        <label for="imgLink" class="form-label">image link </label>
                        <input type="text" class="form-control" id="img_link" placeholder="Enter image link  ">
                    </div>
                    <!-- class -->
                    <div class="mb-3">
                        <label for="class" class="form-label">class id</label>
                        <input type="text" class="form-control" id="class_id" placeholder="Enter class id ">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="adduser()">Save </button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- update data   -->
    <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update user</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <!-- firstname -->
                    <div class="mb-3">
                        <label for="Ufirstname" class="form-label">Firstname</label>
                        <input type="text" class="form-control" id="Ufirstname" placeholder="Enter firstname">
                    </div>
                    <!-- lastname -->
                    <!-- <div class="mb-3">
                        <label for="Ulastname" class="form-label">lastname</label>
                        <input type="text" class="form-control" id="Ulastname" placeholder="Enter lastname">
                    </div> -->
                    <!-- age -->
                    <div class="mb-3">
                        <label for="Uage" class="form-label">age</label>
                        <input type="number" class="form-control" id="Uage" placeholder="Enter age">
                    </div>
                    <!-- img link -->
                    <div class="mb-3">
                        <label for="UimgLink" class="form-label">image link </label>
                        <input type="text" class="form-control" id="Uimg_link" placeholder="Enter image link  ">
                    </div>
                    <!-- class -->
                    <div class="mb-3">
                        <label for="Uclass" class="form-label">class id</label>
                        <input type="text" class="form-control" id="Uclass_id" placeholder="Enter class id ">
                    </div>
                    <div class="mb-3">
                        <input type="hidden" id="UidUser">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="Updateuser()">Update </button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php include "../parts/navbar.view.part.php"?>
    <div class="container my-3 ">
        <!-- <h1 class="text-center">php CRUD opertations using bootstrap Modal and ajax</h1> -->
        <button type="button" class="btn btn-dark my-4" data-bs-toggle="modal" data-bs-target="#userModal">
            Add new users
        </button>

        <div id="displayDataTable">

        </div>
    </div>
    <?php include "../parts/footer.view.part.php"?>

    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <script>
        $(document).ready(() => {

            displayDataUser();
        })

        function Updateuser() {
            var Uid = UidUser.value;
            console.log(Uid);
            
            
            var firstnameAdd = $("#Ufirstname").val();
            var img_linkAdd = $("#Uimg_link").val();
            var ageAdd = $("#Uage").val();
            var classidAdd = $("#Uclass_id").val();
            // alert(firstnameAdd+"/"+lastnameAdd+"/"+ageAdd+"/"+classidAdd);
            $.ajax({
                url: "./Updateuser.php",
                type: "POST",
                data: {
                    firstnameSend: firstnameAdd,
                    img_linkSend: img_linkAdd,
                    ageSend: ageAdd,
                    class_idSend: classidAdd,
                    UserIdSend :Uid
                },
                success: function(data, status) {
                    console.log(status);
                    console.log(data);
                    displayDataUser();
                }
            })
        }

        function GetUpdateUser(member_id) {

            console.log(member_id);
            $.ajax({
                url: './selectUser.php',
                type: 'post',
                data: {
                    member_idSend: member_id
                },
                success: function(data, status) {
                    displayDataUser();
                    console.log(data);
                    var user = JSON.parse(data);
                    $("#Ufirstname").val(user.nom_c);
                    $("#Uimg_link").val(user.img);
                    $("#Uage").val(user.age);
                    $("#Uclass_id").val(user.id_class);
                    $("#UidUser").val(user.id);
                }
            })

        }


        function deleteUser(member_id) {
            console.log(member_id);
            $.ajax({
                url: './deleteUser.php',
                type: 'post',
                data: {
                    member_idSend: member_id
                },
                success: function(data, status) {
                    displayDataUser();
                }
            })
        }

        function displayDataUser() {

            var displatData = "true";
            $.ajax({
                url: './displayUser.php',
                type: 'post',
                data: {
                    displaySend: displatData
                },
                success: function(data, status) {
                    $("#displayDataTable").html(data);
                }
            })

        }

        function adduser() {
            var firstnameAdd = $("#firstname").val();
            var img_linkAdd = $("#img_link").val();
            var ageAdd = $("#age").val();
            var classidAdd = $("#class_id").val();
            $.ajax({
                url: "./insertuser.php",
                type: "POST",
                data: {
                    firstnameSend: firstnameAdd,
                    img_linkSend: img_linkAdd,
                    ageSend: ageAdd,
                    class_idSend: classidAdd
                },
                success: function(data, status) {
                    console.log(status);
                    // console.log(data);
                    displayDataUser();
                }
            })
        };
    </script>
</body>

</html>