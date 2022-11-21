<?php include "../includes/isLogedIn.inc.php" ?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" onclick="adduser()">Save </button>
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
                        <input type="hidden" id="userId">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="Updateuser()">Update </button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- update club Modal  -->
    <div class="modal fade" id="ClubUpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Club</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="Ufirstname" class="form-label">Clubs</label><br>
                        <!-- <input type="text" class="form-control" id="Ufirstname" placeholder="Enter firstname"> -->
                        <select class="form-select" id="selectClubs" aria-label="Default select example">
                            <option selected>Select Club </option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="hidden" id="UidUser">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="updateUserClub()">Update</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- update Role Modal  -->
    <div class="modal fade" id="RoleUpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Role</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="Ufirstname" class="form-label">Update Role</label><br>
                        <input type="text" value="Update role" class="form-control " id="input_role">
                    </div>
                </div>
                <div class="mb-3">
                    <input type="hidden" id="UidUser">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="updateUserRole()">Update</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <?php include "../parts/navbar.view.part.php" ?>
    <div class="container my-3 ">
        <!-- <h1 class="text-center">php CRUD opertations using bootstrap Modal and ajax</h1> -->
        <button type="button" class="btn btn-dark my-4" data-bs-toggle="modal" data-bs-target="#userModal">
            Add new users
        </button>

        <div id="displayDataTable">

        </div>
    </div>
    <?php include "../parts/footer.view.part.php" ?>

    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    
    <?php include "../includes/script.inc.php" ?>

    <script>
        $(document).ready(() => {

            displayDataUser();
            displayDataSelectClubs();
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
                    UserIdSend: Uid
                },
                success: function(data, status) {
                    console.log(status);
                    console.log(data);
                    displayDataUser();
                }
            })
        }
        
        var userIdForUpdate ="";
        
        function GetUpdateUserClub(member_id){
            userIdForUpdate = member_id;
        }
        
        function GetUpdateUserRole(member_id){
            userIdForUpdate = member_id;
            console.log(userIdForUpdate);
        }
        
        function updateUserClub(member_id){
            var valueSelectClub = $('#selectClubs').find(":selected").val();
            console.log(valueSelectClub);
            console.log(userIdForUpdate);
            $.ajax({
                url: './updateUserClub.php',
                type: 'post',
                data: {
                    member_idSend: userIdForUpdate,
                    club_idSend: valueSelectClub
                },
                success: function(data, status) {
                    console.log(data);
                    displayDataUser();
                    
                }
            })
        }
        
        function updateUserRole(member_id){
            var valueRole = $('#input_role').val();
            
            $.ajax({
                url: './updateUserRole.php',
                type: 'post',
                data: {
                    member_idSend: userIdForUpdate,
                    role_Send: valueRole
                },
                success: function(data, status) {
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

        function displayDataSelectClubs() {
            var displatData = "true";
            $.ajax({
                url: './displaySelectClubs.php',
                type: 'post',
                data: {
                    displaySend: displatData
                },
                success: function(data, status) {
                    $("#selectClubs").html(data);
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

            // modal fade
            $("#userModal").animate().css("display", "none ");
            $("#userModal").addClass("modal fade");;

        };
    </script>
</body>

</html>