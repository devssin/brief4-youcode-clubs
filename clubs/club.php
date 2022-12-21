<?php  include "../includes/isLogedIn.inc.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin : Clubs</title>

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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Club</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <!-- firstname -->
                    <div class="mb-3">
                        <label for="clubNmae" class="form-label">Club Name</label>
                        <input type="text" class="form-control" id="clubName" placeholder="(Art Club, Sport Club ....)">
                    </div>
                    
                    <!-- age -->
  
                    <!-- img link -->
                    <div class="mb-3">
                        <label for="imgLink" class="form-label">Logo</label>
                        <input type="text" class="form-control" id="logo" placeholder="Enter logo link  ">
                    </div>
                    <!-- class -->
                    <div class="mb-3">
                        <label for="class" class="form-label">Description</label>
                        <!-- <input type="text" class="form-control" id="class_id" placeholder="Enter class id "> -->
                        <textarea name="description" id="descriprion" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="addClub() " data-bs-dismiss="modal">Save </button>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Club</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <!-- firstname -->
                    <div class="mb-3">
                        <label for="clubNmae" class="form-label">Club Name</label>
                        <input type="text" class="form-control" id="name" placeholder="(Art Club, Sport Club ....)">
                    </div>
                    
                    <!-- age -->
  
                    <!-- img link -->
                    <div class="mb-3">
                        <label for="imgLink" class="form-label">Logo</label>
                        <input type="text" class="form-control" id="logo_c" placeholder="Enter Logo link  ">
                    </div>
                    <!-- class -->
                    <div class="mb-3">
                        <label for="class" class="form-label">Description</label>
                        <!-- <input type="text" class="form-control" id="class_id" placeholder="Enter class id "> -->
                        <textarea name="description" id="desc" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    
                    <input type="hidden" name="id" id="clubId">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="updateClub()" data-bs-dismiss="modal">Update </button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php include "../parts/navbar.view.part.php"?>
    <div class="container my-3">
        <!-- <h1 class="text-center">php CRUD opertations using bootstrap Modal and ajax</h1> -->
        <button type="button" class="btn btn-dark my-4" data-bs-toggle="modal" data-bs-target="#userModal">
            Add new clubs
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

            displayDataClub();
        })

        function updateClub() {
            var clubId = $("#clubId").val();
            
            
            
            var clubName = $("#name").val();

            var logo = $("#logo_c").val();
            var description = $("#desc").val();
            console.log(clubId+'....'+clubName+"/"+logo+"/"+"/"+description);
            $.ajax({
                url: "./updateClub.php",
                type: "POST",
                data: {
                    name: clubName,
                    logo: logo,
                    description: description,
                    club_id :clubId
                },
                success: function(data, status) {
                    console.log(status);
                    console.log(data);
                    displayDataClub();
                }
            })
        }

        function GetUpdateClub(club_id) {

            $.ajax({
                url: './selectClub.php',
                type: 'post',
                data: {
                    club_id: club_id
                },
                success: function(data, status) {
                    displayDataClub();
                    console.log(data);
                    var club = JSON.parse(data);
                    $("#name").val(club.nom);
                    $("#logo_c").val(club.logo);
                    $("#desc").val(club.description);
                    $("#clubId").val(club.id);
                }
            })

        }


        function deleteClub(club_id) {
            console.log(club_id);
            $.ajax({
                url: './deleteClub.php',
                type: 'post',
                data: {
                    club_id: club_id
                },
                success: function(data, status) {
                    console.log('done');
                    displayDataClub();
                }
            })
        }

        function displayDataClub() {

            var displatData = "true";
            $.ajax({
                url: './displayClub.php',
                type: 'post',
                data: {
                    displaySend: displatData
                },
                success: function(data, status) {
                    $("#displayDataTable").html(data);
                }
            })

        }

        function addClub() {
            var clubName = $("#clubName").val();
            var logo = $("#logo").val();
            var description = $("#descriprion").val();
            $.ajax({
                url: "./insertClub.php",
                type: "POST",
                data: {
                    name: clubName,
                    logo: logo,
                    description: description
                },
                success: function(data, status) {
                    console.log(data);
                    displayDataClub();
                }
            })
        };
    </script>
</body>

</html>